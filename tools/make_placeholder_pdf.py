#!/usr/bin/env python3
from pathlib import Path
from reportlab.lib.pagesizes import letter
from reportlab.pdfgen import canvas
from reportlab.lib.units import inch
from reportlab.lib.colors import Color
import argparse


def make_simple_pdf(output: Path, title: str, subtitle: str = "Investor Education • BTH Education Group"):
    output.parent.mkdir(parents=True, exist_ok=True)
    c = canvas.Canvas(str(output), pagesize=letter)
    width, height = letter

    # Background
    c.setFillColor(Color(0.98, 0.99, 1.0))
    c.rect(0, 0, width, height, stroke=0, fill=1)

    # Title
    c.setFillColor(Color(0.12, 0.15, 0.2))
    c.setFont("Helvetica-Bold", 26)
    c.drawString(1.2 * inch, height - 2.0 * inch, title)

    # Subtitle
    c.setFont("Helvetica", 14)
    c.setFillColor(Color(0.25, 0.32, 0.4))
    c.drawString(1.2 * inch, height - 2.6 * inch, subtitle)

    # Footer placeholder (will be replaced by footer stamper)
    c.setFont("Helvetica", 9)
    c.setFillColor(Color(0.55, 0.6, 0.65))
    c.drawRightString(width - 0.8 * inch, 0.7 * inch, "Generated placeholder PDF")

    c.showPage()
    c.save()


def main():
    ap = argparse.ArgumentParser(description="Create a simple placeholder PDF with a title and subtitle")
    ap.add_argument("output", type=Path, help="Output PDF path")
    ap.add_argument("title", type=str, help="Title text")
    ap.add_argument("--subtitle", type=str, default="Investor Education • BTH Education Group")
    args = ap.parse_args()

    make_simple_pdf(args.output, args.title, args.subtitle)


if __name__ == "__main__":
    main()
