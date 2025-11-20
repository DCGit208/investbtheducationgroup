#!/usr/bin/env python3
"""
Automated Logo Extractor for Vendor Certifications
Extracts and downloads vendor logos from official sources
"""

import re
import os
import json
import time
import requests
from pathlib import Path
from urllib.parse import urlparse, urljoin
from bs4 import BeautifulSoup

# Configuration
SCRIPT_DIR = Path(__file__).parent
REPLACEMENT_LIST = SCRIPT_DIR / "LOGO-REPLACEMENT-LIST.md"
OUTPUT_DIR = SCRIPT_DIR
HEADERS = {
    'User-Agent': 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36'
}

class LogoExtractor:
    def __init__(self):
        self.vendors = []
        self.download_stats = {
            'successful': 0,
            'failed': 0,
            'skipped': 0
        }
    
    def parse_replacement_list(self):
        """Parse the LOGO-REPLACEMENT-LIST.md file to extract vendor information"""
        print("📄 Parsing LOGO-REPLACEMENT-LIST.md...")
        
        with open(REPLACEMENT_LIST, 'r', encoding='utf-8') as f:
            content = f.read()
        
        # Pattern to match vendor entries
        # Matches: **Vendor Name** - `placeholder-file.svg`
        # Followed by: - Official website: https://...
        pattern = r'\*\*(.+?)\*\*\s*-\s*`(placeholder-.+?\.(?:svg|png|jpg))`[^\n]*\n(?:.*?\n)*?\s*-\s*Official website:\s*(https?://[^\s\n]+)'
        
        matches = re.finditer(pattern, content, re.MULTILINE)
        
        for match in matches:
            vendor_name = match.group(1).strip()
            placeholder_file = match.group(2).strip()
            website = match.group(3).strip()
            
            # Extract description (optional)
            lines_between = match.group(0).split('\n')
            description = ""
            for line in lines_between[1:-1]:
                line = line.strip()
                if line and not line.startswith('-') and not line.startswith('**'):
                    description = line
                    break
            
            self.vendors.append({
                'name': vendor_name,
                'placeholder': placeholder_file,
                'website': website,
                'description': description,
                'output_file': placeholder_file.replace('placeholder-', '')
            })
        
        print(f"✅ Found {len(self.vendors)} vendors to process\n")
        return self.vendors
    
    def check_if_exists(self, output_file):
        """Check if the final logo file already exists"""
        return (OUTPUT_DIR / output_file).exists()
    
    def search_wikimedia_commons(self, vendor_name):
        """Search Wikimedia Commons for vendor logo"""
        search_terms = [
            f"{vendor_name} logo",
            f"{vendor_name}",
            f"{vendor_name} wordmark"
        ]
        
        for term in search_terms:
            try:
                # Search Wikimedia Commons API
                api_url = "https://commons.wikimedia.org/w/api.php"
                params = {
                    'action': 'query',
                    'format': 'json',
                    'list': 'search',
                    'srsearch': term,
                    'srnamespace': 6,  # File namespace
                    'srlimit': 5
                }
                
                response = requests.get(api_url, params=params, headers=HEADERS, timeout=10)
                data = response.json()
                
                if 'query' in data and 'search' in data['query']:
                    for result in data['query']['search']:
                        title = result['title']
                        if 'logo' in title.lower() or 'wordmark' in title.lower():
                            # Get the file URL
                            file_url = self.get_wikimedia_file_url(title)
                            if file_url:
                                return file_url
            except Exception as e:
                print(f"  ⚠️  Wikimedia search error: {e}")
                continue
        
        return None
    
    def get_wikimedia_file_url(self, title):
        """Get direct file URL from Wikimedia Commons file page"""
        try:
            api_url = "https://commons.wikimedia.org/w/api.php"
            params = {
                'action': 'query',
                'format': 'json',
                'titles': title,
                'prop': 'imageinfo',
                'iiprop': 'url'
            }
            
            response = requests.get(api_url, params=params, headers=HEADERS, timeout=10)
            data = response.json()
            
            pages = data.get('query', {}).get('pages', {})
            for page in pages.values():
                if 'imageinfo' in page:
                    return page['imageinfo'][0]['url']
        except Exception as e:
            print(f"  ⚠️  Error getting Wikimedia file URL: {e}")
        
        return None
    
    def scrape_press_kit(self, website):
        """Attempt to find and download logo from press kit or media page"""
        # Common press kit URL patterns
        press_kit_paths = [
            '/press', '/media', '/newsroom', '/press-kit', '/media-kit',
            '/brand', '/brand-resources', '/brand-guidelines', '/logos',
            '/about/media', '/company/press', '/company/media'
        ]
        
        parsed_url = urlparse(website)
        base_url = f"{parsed_url.scheme}://{parsed_url.netloc}"
        
        for path in press_kit_paths:
            try:
                url = base_url + path
                response = requests.get(url, headers=HEADERS, timeout=10)
                
                if response.status_code == 200:
                    soup = BeautifulSoup(response.text, 'html.parser')
                    
                    # Look for logo images
                    for img in soup.find_all('img'):
                        src = img.get('src', '')
                        alt = img.get('alt', '').lower()
                        
                        if 'logo' in alt or 'logo' in src.lower():
                            logo_url = urljoin(url, src)
                            if logo_url.endswith(('.svg', '.png', '.jpg', '.jpeg')):
                                return logo_url
                    
                    # Look for download links
                    for link in soup.find_all('a'):
                        href = link.get('href', '')
                        text = link.get_text().lower()
                        
                        if 'logo' in text or 'download' in text:
                            if href.endswith(('.svg', '.png', '.jpg', '.jpeg', '.zip')):
                                return urljoin(url, href)
                
                time.sleep(0.5)  # Be polite
                
            except Exception as e:
                continue
        
        return None
    
    def download_logo(self, url, output_path):
        """Download logo from URL"""
        try:
            response = requests.get(url, headers=HEADERS, timeout=15, stream=True)
            response.raise_for_status()
            
            with open(output_path, 'wb') as f:
                for chunk in response.iter_content(chunk_size=8192):
                    f.write(chunk)
            
            return True
        except Exception as e:
            print(f"  ❌ Download failed: {e}")
            return False
    
    def process_vendor(self, vendor):
        """Process a single vendor to extract and download logo"""
        name = vendor['name']
        output_file = vendor['output_file']
        output_path = OUTPUT_DIR / output_file
        
        print(f"\n{'='*60}")
        print(f"🔍 Processing: {name}")
        print(f"   Website: {vendor['website']}")
        print(f"   Output: {output_file}")
        
        # Check if already exists
        if self.check_if_exists(output_file):
            print(f"  ⏭️  Logo already exists, skipping...")
            self.download_stats['skipped'] += 1
            return True
        
        logo_url = None
        
        # Method 1: Try Wikimedia Commons first (most reliable)
        print("  📚 Searching Wikimedia Commons...")
        logo_url = self.search_wikimedia_commons(name)
        
        if logo_url:
            print(f"  ✅ Found on Wikimedia: {logo_url}")
        else:
            print("  ℹ️  Not found on Wikimedia Commons")
            
            # Method 2: Try scraping press kit
            print("  🌐 Searching press kit/media pages...")
            logo_url = self.scrape_press_kit(vendor['website'])
            
            if logo_url:
                print(f"  ✅ Found on website: {logo_url}")
            else:
                print("  ℹ️  Not found on website")
        
        # Download if URL found
        if logo_url:
            print(f"  ⬇️  Downloading...")
            if self.download_logo(logo_url, output_path):
                print(f"  ✅ Successfully downloaded to {output_file}")
                self.download_stats['successful'] += 1
                return True
            else:
                self.download_stats['failed'] += 1
                return False
        else:
            print(f"  ⚠️  No logo source found for {name}")
            self.download_stats['failed'] += 1
            return False
    
    def generate_report(self):
        """Generate a summary report"""
        total = sum(self.download_stats.values())
        
        print(f"\n\n{'='*60}")
        print("📊 EXTRACTION REPORT")
        print(f"{'='*60}")
        print(f"Total vendors processed: {total}")
        print(f"✅ Successfully downloaded: {self.download_stats['successful']}")
        print(f"⏭️  Skipped (already exists): {self.download_stats['skipped']}")
        print(f"❌ Failed: {self.download_stats['failed']}")
        
        if self.download_stats['successful'] > 0:
            success_rate = (self.download_stats['successful'] / (total - self.download_stats['skipped']) * 100) if total > self.download_stats['skipped'] else 0
            print(f"\nSuccess rate: {success_rate:.1f}%")
        
        # Save report to file
        report_path = OUTPUT_DIR / "extraction_report.json"
        with open(report_path, 'w') as f:
            json.dump({
                'timestamp': time.strftime('%Y-%m-%d %H:%M:%S'),
                'stats': self.download_stats,
                'vendors_processed': len(self.vendors)
            }, f, indent=2)
        
        print(f"\n📄 Detailed report saved to: extraction_report.json")
    
    def run(self, limit=None, vendor_filter=None):
        """Run the extraction process"""
        print("🚀 Starting Automated Logo Extraction\n")
        
        # Parse vendor list
        self.parse_replacement_list()
        
        if not self.vendors:
            print("❌ No vendors found to process!")
            return
        
        # Filter vendors if specified
        if vendor_filter:
            self.vendors = [v for v in self.vendors if vendor_filter.lower() in v['name'].lower()]
            print(f"🔍 Filtering to {len(self.vendors)} vendors matching '{vendor_filter}'\n")
        
        # Process vendors
        vendors_to_process = self.vendors[:limit] if limit else self.vendors
        
        for i, vendor in enumerate(vendors_to_process, 1):
            print(f"\n[{i}/{len(vendors_to_process)}]", end=" ")
            self.process_vendor(vendor)
            time.sleep(1)  # Be respectful to servers
        
        # Generate report
        self.generate_report()
        
        print(f"\n{'='*60}")
        print("✨ Extraction complete!")
        print(f"{'='*60}\n")


def main():
    import argparse
    
    parser = argparse.ArgumentParser(
        description='Automated Logo Extractor for Vendor Certifications',
        formatter_class=argparse.RawDescriptionHelpFormatter,
        epilog="""
Examples:
  # Extract all logos
  python extract_logos.py
  
  # Extract only first 5 logos (for testing)
  python extract_logos.py --limit 5
  
  # Extract logos for specific vendor
  python extract_logos.py --vendor "Epic"
  
  # Extract logos for healthcare vendors only
  python extract_logos.py --vendor "health"
        """
    )
    
    parser.add_argument(
        '--limit',
        type=int,
        help='Limit number of vendors to process (useful for testing)'
    )
    
    parser.add_argument(
        '--vendor',
        type=str,
        help='Filter to vendors matching this name (case-insensitive)'
    )
    
    args = parser.parse_args()
    
    # Create extractor and run
    extractor = LogoExtractor()
    extractor.run(limit=args.limit, vendor_filter=args.vendor)


if __name__ == "__main__":
    main()
