/* ==========================================================================
   Industry Cards + Accordion (Robust)
   - Keeps your industry cards reveal
   - Adds resilient, animated accordions (Industry + Emerging)
   - A11y + keyboard support, no layout dependencies
   ========================================================================== */

// ------------------------------
// 0) Utilities
// ------------------------------
const raf = (fn) => requestAnimationFrame(() => requestAnimationFrame(fn));
const isReducedMotion = () =>
  window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

// Safely set height for animation
const setPanelHeight = (panel, toPx) => {
  // Always set to full scrollHeight for open panels
  if (panel.classList.contains('active')) {
    panel.style.maxHeight = panel.scrollHeight + 'px';
  } else {
    panel.style.maxHeight = toPx ? `${toPx}px` : null;
  }
};

// Open with animation
const openPanel = (btn, panel) => {
  if (!panel) return;
  btn.setAttribute('aria-expanded', 'true');
  panel.classList.add('active');

  if (isReducedMotion()) {
    setPanelHeight(panel, panel.scrollHeight);
    return;
  }
  setPanelHeight(panel, 0);
  raf(() => {
    setPanelHeight(panel, panel.scrollHeight);
    // Double-check after a short delay for dynamic content
    setTimeout(() => setPanelHeight(panel, panel.scrollHeight), 100);
  });
  panel.style.opacity = 1;
};

// Close with animation
const closePanel = (btn, panel) => {
  if (!panel) return;
  btn.setAttribute('aria-expanded', 'false');

  if (isReducedMotion()) {
    panel.classList.remove('active');
    setPanelHeight(panel, 0);
    panel.style.opacity = 0;
    return;
  }

  // Set to current height, then to 0 for smooth collapse
  const current = panel.scrollHeight;
  setPanelHeight(panel, current);
  raf(() => {
    panel.classList.remove('active'); // can remove now; CSS keeps transition smooth
    setPanelHeight(panel, 0);
    panel.style.opacity = 0;
  });
};

// Find the group root to limit "close others" to the same section
const findGroupRoot = (button) =>
  button.closest('[data-accordion-group]') ||
  button.closest('.section') ||
  button.parentElement ||
  document;

// Close siblings within group
const closeSiblings = (button, content) => {
  const root = findGroupRoot(button);
  const buttons = root.querySelectorAll('.accordion-button');
  buttons.forEach((b) => {
    const p = b.nextElementSibling;
    if (b !== button && p && p.classList.contains('accordion-content')) {
      closePanel(b, p);
    }
  });
};

// Keep open panels sized correctly on viewport/content changes
const recalcOpenPanels = () => {
  document.querySelectorAll('.accordion-content.active').forEach((panel) => {
    // Force re-measure
    setPanelHeight(panel, panel.scrollHeight);
  });
};

// Handle images/async content inside panels
const observePanelContent = (() => {
  let observer;
  return () => {
    if (observer) return observer;
    observer = new MutationObserver(() => recalcOpenPanels());
    document.querySelectorAll('.accordion-content').forEach((el) => {
      observer.observe(el, { childList: true, subtree: true, characterData: true });
      // Also reflow when images load
      el.querySelectorAll('img').forEach((img) =>
        img.addEventListener('load', recalcOpenPanels, { once: true })
      );
    });
    return observer;
  };
})();

// ------------------------------
// 1) Industry Cards Click-to-Reveal
// ------------------------------
document.addEventListener('DOMContentLoaded', () => {
  const cards = document.querySelectorAll('.industry');

  cards.forEach((card) => {
    card.setAttribute('tabindex', '0'); // keyboard focusable

    card.addEventListener('click', (e) => {
      // Allow links/buttons inside the card to work normally
      const tag = (e.target.tagName || '').toLowerCase();
      if (tag === 'a' || tag === 'button' || e.target.closest('a,button')) return;

      const expanded = card.getAttribute('aria-expanded') === 'true';
      card.setAttribute('aria-expanded', String(!expanded));

      const details = card.querySelector('.extra-details');
      if (!details) return;

      if (!expanded) {
        details.hidden = false;
      } else {
        // Hide after transition (matches your CSS ~400ms)
        setTimeout(() => {
          details.hidden = true;
        }, 420);
      }
    });

    card.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        card.click();
      }
    });
  });
});

// ------------------------------
// 2) Accordions (Industry + Emerging)
//    Event delegation for resilience
// ------------------------------
document.addEventListener('DOMContentLoaded', () => {
  // Ensure we observe content changes (images, async)
  observePanelContent();

  document.addEventListener('click', (e) => {
    const button = e.target.closest('.accordion-button');
    if (!button) return;

    // Safety: prevent accidental form submit if inside a form
    if (!button.hasAttribute('type')) button.setAttribute('type', 'button');

    const panel = button.nextElementSibling;
    if (!panel || !panel.classList.contains('accordion-content')) return;

    const isOpen = panel.classList.contains('active');

    // Close siblings in the same group
    closeSiblings(button, panel);

    if (isOpen) {
      closePanel(button, panel);
    } else {
      openPanel(button, panel);
    }
  });

  // Keyboard support
  document.addEventListener('keydown', (e) => {
    if (e.key !== 'Enter' && e.key !== ' ') return;
    const button = e.target.closest('.accordion-button');
    if (!button) return;
    e.preventDefault();
    button.click();
  });

  // Recalculate on resize and after fonts load
  window.addEventListener('resize', recalcOpenPanels);
  if (document.fonts && document.fonts.ready) {
    document.fonts.ready.then(recalcOpenPanels).catch(() => {});
  }

  // Deep-link: open a panel if URL hash points to its ID
  if (location.hash) {
    const target = document.querySelector(location.hash);
    if (target && target.classList.contains('accordion-content')) {
      const button = target.previousElementSibling;
      if (button && button.classList.contains('accordion-button')) {
        openPanel(button, target);
        // Scroll into view after open
        setTimeout(() => button.scrollIntoView({ behavior: 'smooth', block: 'start' }), 200);
      }
    }
  }
});
