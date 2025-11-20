#!/usr/bin/env python3
from pathlib import Path
from io import BytesIO
from typing import Tuple

from reportlab.pdfgen import canvas
from reportlab.lib.pagesizes import letter
from reportlab.lib.colors import Color
from reportlab.pdfbase.pdfmetrics import stringWidth
from pypdf import PdfReader, PdfWriter

FOOTER_LINES = [
    "© 2025 BTH Education Group — Investor Education & Industrial Systems Division",
    "Authorized Industrial Services • Weld | Automate | Maintain | Scale",
    "Email: invest@btheducationgroup.com | Web: https://invest.btheducationgroup.com",
    "All rights reserved. Unauthorized reproduction or distribution is prohibited.",
]


def _make_overlay_page(size: Tuple[float, float]) -> BytesIO:
    width, height = size
    packet = BytesIO()
    c = canvas.Canvas(packet, pagesize=(width, height))

    # Footer styling
    font_name = "Helvetica"
    font_size = 9
    line_gap = 11
    bottom_margin = 24
    text_color = Color(0.85, 0.88, 0.93)  # light gray-blue for dark backgrounds; still readable on white

    c.setFillColor(text_color)
    c.setFont(font_name, font_size)

    # Draw lines centered at bottom
    total_height = len(FOOTER_LINES) * line_gap
    start_y = bottom_margin + total_height
    for i, line in enumerate(FOOTER_LINES):
        y = start_y - i * line_gap
        # Center the text
        text_w = stringWidth(line, font_name, font_size)
        x = (width - text_w) / 2.0
        c.drawString(x, y, line)

    c.save()
    packet.seek(0)
    return packet


def add_footer(input_pdf: Path, output_pdf: Path):
    reader = PdfReader(str(input_pdf))
    writer = PdfWriter()

    # Determine page size from first page mediabox
    first_page = reader.pages[0]
    mb = first_page.mediabox
    width = float(mb.width)
    height = float(mb.height)

    overlay_stream = _make_overlay_page((width, height))
    overlay_reader = PdfReader(overlay_stream)
    overlay_page = overlay_reader.pages[0]

    for page in reader.pages:
        # Merge footer overlay onto each page
        page.merge_page(overlay_page)
        writer.add_page(page)

    output_pdf.parent.mkdir(parents=True, exist_ok=True)
    with output_pdf.open('wb') as f:
        writer.write(f)


def main():
    import argparse
    ap = argparse.ArgumentParser(description="Add standardized footer to a PDF")
    ap.add_argument("input", type=Path, help="Input PDF path")
    ap.add_argument("output", type=Path, help="Output PDF path")
    args = ap.parse_args()

    add_footer(args.input, args.output)


if __name__ == "__main__":
    main()
