#!/bin/bash
# Script to generate placeholder SVG logos for missing vendors

VENDOR_DIR="/Users/achugustave/Downloads/Investoreducationwebupdate241025/Backups/vendor-logos"

# Array of vendors needing placeholders
vendors=(
  "himss:HIMSS"
  "epic:EPIC"
  "meditech:MEDITECH"
  "allscripts:ALLSCRIPTS"
  "nextgen:NEXTGEN"
  "athenahealth:athenahealth"
  "teladoc:TELADOC"
  "doxyme:Doxy.me"
  "aaham:AAHAM"
  "aapc:AAPC"
  "hfma:HFMA"
  "infor:INFOR"
  "changehealthcare:CHANGE"
  "ashp:ASHP"
  "aha:AHA"
  "kronos:KRONOS"
  "aami:AAMI"
  "canon:CANON"
  "hologic:HOLOGIC"
  "aapm:AAPM"
  "sas:SAS"
  "tableau:TABLEAU"
  "ibm:IBM"
  "healthcatalyst:Health Catalyst"
  "hitrust:HITRUST"
  "nist:NIST"
  "drii:DRII"
  "hhs:HHS"
  "eu:EU"
  "tjc:TJC"
  "cap:CAP"
  "acrp:ACRP"
  "scdm:SCDM"
  "socra:SOCRA"
  "ich:ICH"
  "veeva:VEEVA"
  "medidata:MEDIDATA"
  "medrio:MEDRIO"
  "eclinical:eClinical"
  "labvantage:LabVantage"
  "thermofisher:Thermo Fisher"
  "benchling:BENCHLING"
  "abbott:ABBOTT"
  "labware:LabWare"
  "tecan:TECAN"
  "hamilton:HAMILTON"
  "arisglobal:ArisGlobal"
  "dsci:DSCI"
  "drugsafety:Drug Safety"
  "raps:RAPS"
  "fda:FDA"
  "ema:EMA"
  "nih:NIH/NCBI"
  "illumina:ILLUMINA"
  "jhu:JHU"
  "seqera:SEQERA"
  "galaxy:GALAXY"
  "10xgenomics:10x Genomics"
  "ispor:ISPOR"
  "duke:DUKE"
  "roche:ROCHE"
  "iqvia:IQVIA"
  "trinetx:TriNetX"
)

for vendor in "${vendors[@]}"; do
  IFS=':' read -r filename displayname <<< "$vendor"
  
  cat > "${VENDOR_DIR}/placeholder-${filename}.svg" << EOF
<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg">
  <defs>
    <linearGradient id="grad-${filename}" x1="0%" y1="0%" x2="100%" y2="100%">
      <stop offset="0%" style="stop-color:#1e3a8a;stop-opacity:1" />
      <stop offset="100%" style="stop-color:#3b82f6;stop-opacity:1" />
    </linearGradient>
  </defs>
  <rect width="100" height="100" fill="url(#grad-${filename})"/>
  <text x="50" y="50" font-family="Arial, sans-serif" font-size="14" font-weight="bold" fill="white" text-anchor="middle" dominant-baseline="middle">${displayname}</text>
  <text x="50" y="70" font-family="Arial, sans-serif" font-size="8" fill="rgba(255,255,255,0.7)" text-anchor="middle" dominant-baseline="middle">PLACEHOLDER</text>
</svg>
EOF

  echo "Created placeholder-${filename}.svg"
done

echo "All placeholder logos created!"
