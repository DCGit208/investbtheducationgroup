# Logo Extraction - Quick Reference

## 🚀 Quick Start (Recommended)

```bash
# Option 1: Use the interactive menu
./extract.sh

# Option 2: Direct Python command (test mode)
python3 extract_logos.py --limit 5
```

## 📝 Common Commands

### Test Run (5 vendors)
```bash
python3 extract_logos.py --limit 5
```

### Extract All Logos
```bash
python3 extract_logos.py
```

### Extract Specific Vendors
```bash
# Single vendor
python3 extract_logos.py --vendor "HIMSS"

# Healthcare vendors
python3 extract_logos.py --vendor "health"

# FDA, EMA, regulatory
python3 extract_logos.py --vendor "FDA"
```

### Batch Processing
```bash
# First 10
python3 extract_logos.py --limit 10

# Next 10 (manually edit script to skip first 10)
python3 extract_logos.py --limit 10
```

## 📊 Understanding Output

### Success (✅)
```
✅ Successfully downloaded to himss.svg
```
→ Logo downloaded and saved

### Skipped (⏭️)
```
⏭️  Logo already exists, skipping...
```
→ File already present, not re-downloaded

### Failed (❌)
```
⚠️  No logo source found for Epic Systems
```
→ Needs manual download

## 🔍 Where to Find Logos Manually

### Press Kit URLs
Try these URL patterns on vendor websites:
- `https://vendor.com/press`
- `https://vendor.com/media`
- `https://vendor.com/brand`
- `https://vendor.com/newsroom`
- `https://vendor.com/about/media`

### Search Tips
1. Google: `"vendor name" press kit`
2. Google: `"vendor name" brand guidelines`
3. Search vendor site for: "media resources", "press", "brand"

## 📈 Progress Tracking

### Check Report
```bash
cat extraction_report.json
```

### Count Downloaded
```bash
# Count placeholder files (still need download)
ls placeholder-*.svg | wc -l

# Count non-placeholder SVG files
ls *.svg | grep -v placeholder | wc -l
```

## 🛠️ Troubleshooting

### Install Dependencies
```bash
pip3 install -r requirements.txt
```

### Check Python Version
```bash
python3 --version
# Need 3.7 or higher
```

### Permission Error
```bash
chmod +x extract_logos.py extract.sh
```

### Network Timeout
- Check internet connection
- Try fewer vendors: `--limit 5`
- Some corporate networks block downloads

## 📋 Priority List

### High Priority (Easy to Get)
- Government agencies: FDA, NIH, HHS, EMA
- Major tech: IBM, SAS, Tableau
- Healthcare orgs: HIMSS, HITRUST

### Medium Priority
- Healthcare vendors: Epic, Meditech, Allscripts
- Industry groups: ACRP, SCDM, SOCRA
- Analytics: Health Catalyst, IQVIA

### Low Priority (May Need Permission)
- Specialized: Veeva, Medidata, Benchling
- Lab equipment: Thermo Fisher, Tecan
- Niche certifications: DSCI, ISPOR

## 🎯 Batch Strategy

### Day 1: Government & Non-Profit
```bash
python3 extract_logos.py --vendor "FDA"
python3 extract_logos.py --vendor "NIH"
python3 extract_logos.py --vendor "HHS"
python3 extract_logos.py --vendor "EMA"
```

### Day 2: Major Vendors
```bash
python3 extract_logos.py --vendor "IBM"
python3 extract_logos.py --vendor "SAS"
python3 extract_logos.py --vendor "Epic"
```

### Day 3: Healthcare Orgs
```bash
python3 extract_logos.py --vendor "HIMSS"
python3 extract_logos.py --vendor "HITRUST"
python3 extract_logos.py --vendor "AAHAM"
```

## 💡 Pro Tips

1. **Always test first**: `--limit 5` before full run
2. **Process in batches**: Easier to manage and debug
3. **Check Wikimedia first**: Most reliable source
4. **Manual is OK**: Some logos need hand-downloading
5. **Respect rate limits**: Script has built-in delays
6. **Save originals**: Keep high-res versions

## 📧 Manual Download Template

When contacting vendors:

> Subject: Logo Usage Request for Educational Website
> 
> Hello,
> 
> I'm developing an educational resource about healthcare technology certifications
> and would like to include your company logo to represent [certification/product name].
> 
> May I please download your logo from your press kit, or could you provide
> an official logo file (preferably SVG or high-resolution PNG)?
> 
> The logo will be used to help students identify certification providers
> and will be displayed alongside other vendor logos.
> 
> Thank you!

---

**Need Help?** Check `EXTRACTION-README.md` for full documentation.
