# Automated Logo Extraction Tool

This tool automatically extracts and downloads vendor logos from official sources including Wikimedia Commons and vendor press kit pages.

## Features

- 📄 **Parses LOGO-REPLACEMENT-LIST.md** to extract vendor information
- 🔍 **Multi-source search**: Wikimedia Commons, press kits, media pages
- ⬇️ **Automatic download** with proper file naming
- 📊 **Progress tracking** and detailed reporting
- 🎯 **Smart filtering** by vendor name or limit
- ⏭️ **Skip existing** files to avoid re-downloading

## Installation

1. Make sure you have Python 3.7+ installed:
```bash
python3 --version
```

2. Install required dependencies:
```bash
pip3 install -r requirements.txt
```

Or install manually:
```bash
pip3 install requests beautifulsoup4 lxml
```

## Usage

### Basic Usage

Extract all logos:
```bash
python3 extract_logos.py
```

### Test Mode (Recommended First Run)

Test with just 5 vendors:
```bash
python3 extract_logos.py --limit 5
```

### Filter by Vendor Name

Extract logos for specific vendors:
```bash
# Single vendor
python3 extract_logos.py --vendor "Epic"

# Multiple vendors matching pattern
python3 extract_logos.py --vendor "health"
```

### Combine Options

```bash
python3 extract_logos.py --limit 10 --vendor "IBM"
```

## How It Works

1. **Parsing**: Reads `LOGO-REPLACEMENT-LIST.md` and extracts:
   - Vendor name
   - Placeholder filename
   - Official website URL
   - Description

2. **Search Strategy**:
   - **First**: Searches Wikimedia Commons (most reliable, free to use)
   - **Second**: Scrapes vendor press kit/media pages
   - Common paths checked: `/press`, `/media`, `/brand`, `/logos`, etc.

3. **Download**: 
   - Downloads logo to correct filename
   - Replaces `placeholder-` prefix with actual logo
   - Preserves file extension (SVG, PNG, JPG)

4. **Reporting**:
   - Real-time progress in terminal
   - Final statistics summary
   - JSON report saved to `extraction_report.json`

## Output

### Terminal Output
```
🚀 Starting Automated Logo Extraction

📄 Parsing LOGO-REPLACEMENT-LIST.md...
✅ Found 63 vendors to process

============================================================
[1/63] 🔍 Processing: HIMSS
   Website: https://www.himss.org
   Output: himss.svg
  📚 Searching Wikimedia Commons...
  ✅ Found on Wikimedia: https://...
  ⬇️  Downloading...
  ✅ Successfully downloaded to himss.svg
...

📊 EXTRACTION REPORT
============================================================
Total vendors processed: 63
✅ Successfully downloaded: 45
⏭️  Skipped (already exists): 10
❌ Failed: 8

Success rate: 84.9%
```

### Generated Files
- Downloaded logos (replacing placeholders)
- `extraction_report.json` - detailed statistics

## Tips

### For Best Results

1. **Test First**: Always run with `--limit 5` first to test
2. **Vendor Strict**: Some vendors (Epic, Oracle) are very protective of logos
3. **Government Logos**: FDA, NIH, HHS logos are usually public domain
4. **Be Patient**: Script includes delays to respect server limits
5. **Manual Backup**: Some logos may need manual download from vendor sites

### Manual Download Guide

For vendors that fail automatic extraction:

1. Visit the vendor's website
2. Look for pages like:
   - "Press Kit" or "Media Resources"
   - "Brand Guidelines" or "Brand Assets"
   - "Logos" or "Downloads"
3. Download the logo (prefer SVG format)
4. Rename to match the placeholder filename:
   - `placeholder-epic.svg` → `epic.svg`
5. Place in the vendor-logos directory

### Common Press Kit URLs

- `https://www.vendor.com/press`
- `https://www.vendor.com/media`
- `https://www.vendor.com/brand`
- `https://www.vendor.com/newsroom`
- `https://www.vendor.com/company/media`

## Troubleshooting

### "No module named 'requests'"
```bash
pip3 install requests beautifulsoup4 lxml
```

### "Permission denied"
```bash
chmod +x extract_logos.py
python3 extract_logos.py
```

### Downloads failing
- Check internet connection
- Some vendors may block automated downloads
- Try manual download from vendor website

### Rate limiting
- Script includes 1-second delays between requests
- If issues persist, add `--limit 10` to process in batches

## Legal & Ethical Notes

- ✅ Respects robots.txt and server delays
- ✅ Uses public domain sources (Wikimedia) when available
- ✅ Only downloads from official vendor sources
- ⚠️ Always check vendor brand guidelines before use
- ⚠️ Some logos require permission for commercial use

## Advanced Usage

### Modify Search Paths

Edit the `press_kit_paths` list in the script to add custom paths:

```python
press_kit_paths = [
    '/press', '/media', '/newsroom',
    '/your-custom-path'  # Add custom paths here
]
```

### Add Custom Vendor

Edit `LOGO-REPLACEMENT-LIST.md` following the format:

```markdown
**Vendor Name** - `placeholder-filename.svg`
- Description
- Official website: https://www.vendor.com
```

Then re-run the script.

## Support

For issues or questions:
1. Check the `extraction_report.json` for detailed error info
2. Review the terminal output for specific errors
3. Try manual download from vendor website as fallback

---

**Created**: November 2025
**Version**: 1.0
**License**: Use responsibly and respect vendor trademarks
