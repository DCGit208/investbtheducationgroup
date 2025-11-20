#!/bin/bash
# Quick start script for logo extraction

echo "🚀 Logo Extraction Quick Start"
echo ""

# Check if Python 3 is installed
if ! command -v python3 &> /dev/null; then
    echo "❌ Python 3 is not installed. Please install Python 3.7 or later."
    exit 1
fi

echo "✅ Python 3 found: $(python3 --version)"
echo ""

# Check if dependencies are installed
echo "📦 Checking dependencies..."
if ! python3 -c "import requests, bs4" 2>/dev/null; then
    echo "⚠️  Dependencies not found. Installing..."
    pip3 install -r requirements.txt
    if [ $? -ne 0 ]; then
        echo "❌ Failed to install dependencies. Please run manually:"
        echo "   pip3 install -r requirements.txt"
        exit 1
    fi
    echo "✅ Dependencies installed"
else
    echo "✅ Dependencies already installed"
fi

echo ""
echo "Choose an option:"
echo "1. Test run (5 vendors)"
echo "2. Extract all logos"
echo "3. Extract specific vendor"
echo "4. Show help"
echo ""
read -p "Enter choice (1-4): " choice

case $choice in
    1)
        echo ""
        echo "🧪 Running test with 5 vendors..."
        python3 extract_logos.py --limit 5
        ;;
    2)
        echo ""
        read -p "⚠️  This will process all 63 vendors. Continue? (y/n): " confirm
        if [ "$confirm" = "y" ] || [ "$confirm" = "Y" ]; then
            echo "🚀 Extracting all logos..."
            python3 extract_logos.py
        else
            echo "Cancelled."
        fi
        ;;
    3)
        echo ""
        read -p "Enter vendor name (or keyword): " vendor
        echo "🔍 Searching for vendors matching '$vendor'..."
        python3 extract_logos.py --vendor "$vendor"
        ;;
    4)
        python3 extract_logos.py --help
        ;;
    *)
        echo "Invalid choice. Exiting."
        exit 1
        ;;
esac

echo ""
echo "✨ Done! Check extraction_report.json for details."
