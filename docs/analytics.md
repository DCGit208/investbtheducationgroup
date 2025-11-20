# Leadership Page Analytics

The leadership page emits structured analytics events to `window.dataLayer` (preferred) or falls back to `gtag('event', ...)`. A unified naming layer standardizes key interactions for cross-page reporting while preserving granular legacy event names.

## Event Layers

1. Granular (legacy) CTA events — e.g. `cta-hero-apply`, `cta-sticky-finance` (one per click)
2. Unified CTA event — `leadership_cta_click` (contains metadata about every CTA click)
3. Section visibility events — `leadership_section_view` (first time each tracked section enters viewport ≥25%)
4. Stat animation event — `leadership_stat_animate` (when hero stats begin counting; respects reduced motion)
5. Form submission event — `lead_form_submit` (on both leadership forms)
6. Form error event — `leadership_form_error` (HTML5 validation failure on submit attempt)
7. Scroll depth events — `leadership_scroll_depth` (fires once at 25,50,75,90%)
8. Section time-in-view — `leadership_section_time` (emits once per section at ≥5s cumulative)

## Granular CTA Events (Existing)
Emitted for backwards compatibility / detailed dashboards:
```
cta-hero-apply
cta-hero-model
cta-hero-economics
cta-hero-briefing
cta-hero-micro-expert
cta-hero-micro-cap
cta-sticky-apply
cta-sticky-briefing
cta-sticky-finance
cta-finance-pack
cta-partner-briefing
```

## Unified CTA Event
`leadership_cta_click` fired alongside each granular CTA event.
Example payload:
```json
{
  "event": "leadership_cta_click",
  "page": "leadership",
  "lead_intent": "apply",
  "cta_event": "cta-hero-apply",
  "target": "#apply-leader",
  "cta_intent": "apply",
  "url": "https://invest.btheducationgroup.com/leadership.php"
}
```

## Section View Event
Fires once per section (`trusted`, `economics-depth`, `enterprise`, `apply-leader`).
```json
{
  "event": "leadership_section_view",
  "page": "leadership",
  "section": "economics-depth",
  "lead_intent": "apply",
  "url": "..."
}
```

## Stat Animation Event
```json
{
  "event": "leadership_stat_animate",
  "page": "leadership",
  "count": 3,
  "lead_intent": "apply",
  "url": "..."
}
```
Skipped entirely if `prefers-reduced-motion: reduce` is active (stats immediately render target values).

## Form Submission Event
## Form Error Event
```json
{
  "event": "leadership_form_error",
  "page": "leadership",
  "form_context": "Investor Education Leadership Application",
  "invalid_count": 2,
  "invalid_fields": "email,phone",
  "lead_intent": "apply",
  "url": "..."
}
```
Invalid field values are NOT sent; only names/ids.

## Scroll Depth Events
Emitted once per threshold when reached.
## Section Time-in-View Event
Emits once per tracked section (`trusted`, `economics-depth`, `enterprise`, `apply-leader`) when the user accumulates ≥5 seconds of view time (≥50% in view).
```json
{
  "event": "leadership_section_time",
  "page": "leadership",
  "section": "enterprise",
  "ms": 5830,
  "lead_intent": "apply",
  "url": "..."
}
```
```json
{
  "event": "leadership_scroll_depth",
  "page": "leadership",
  "depth_pct": 75,
  "lead_intent": "apply",
  "url": "..."
}
```
```json
{
  "event": "lead_form_submit",
  "page": "leadership",
  "form_context": "Investor Education Leadership Application",
  "lead_intent": "apply",
  "elapsed_ms": 54231,
  "url": "..."
}
```

## Core Payload Fields
| Field | Description |
|-------|-------------|
| `event` | Event name (granular or unified) |
| `page` | Constant `'leadership'` for segmentation |
| `lead_intent` | Current intent from URL/query (`apply`, `briefing`, `finance`, `partner`) |
| `url` | Full page URL at time of event |
| `target` | HREF of clicked element (CTA events) |
| `cta_event` | Original granular CTA event name (unified CTA only) |
| `cta_intent` | Intent bound to CTA (data-intent) or active page intent |
| `section` | Section id observed (section view) |
| `count` | Number of stat counters animated (stat animate) |
| `form_context` | Hidden form context value (form submit / form error) |
| `elapsed_ms` | Time since DOMContentLoaded until form submit |
| `invalid_count` | Number of invalid fields (form error) |
| `invalid_fields` | Comma list of invalid field names (form error, max 10) |
| `depth_pct` | Scroll depth threshold reached (scroll depth) |
| `ms` | Accumulated time in view for a section (section time) |

## Tracking Control
- Disable tracking: append `?tracking=off`
- Re-enable tracking: append `?tracking=on`
- Off-production hosts auto-disable tracking (set in `header.php`). Override with `?tracking=on`.

## Reduced Motion Behavior
- If user prefers reduced motion: no counting animation; `leadership_stat_animate` still fires? (Currently suppressed; only fires when animation starts.)
- Hover transitions on cards disabled via CSS.

## Implementation Notes
- `window.trackEvent` exposed globally for potential future modules.
- If neither `dataLayer` nor `gtag` is present events safely no-op.
- Form hidden fields still populate UTM/referrer/intent regardless of tracking state for server-side attribution.

## Extension Recommendations
| Enhancement | Rationale |
|-------------|-----------|
| Add `leadership_form_error` | Capture validation issues / friction |
| Add `leadership_section_time` | Time-in-view metrics for long sections |
| Add `leadership_scroll_depth` | Funnel engagement beyond CTA clicks |
| Map `lead_intent` to GA custom dimension | Consistent multi-page attribution |

## QA Checklist
1. Load with `?tracking=off` – confirm no pushes.
2. Load with `?tracking=on` – observe dataLayer entries on first CTA click.
3. Scroll until `#trusted` enters viewport – `leadership_section_view` appears once.
4. Stats animate – `leadership_stat_animate` appears (unless reduced motion enabled).
5. Submit form – `lead_form_submit` contains `elapsed_ms` > 0.
6. Switch intent via Briefing CTA – subsequent clicks carry updated `lead_intent`.
7. Trigger a failed submit (e.g., blank required email) – observe `leadership_form_error`.
8. Scroll to bottom – verify `leadership_scroll_depth` events for 25,50,75,90.
9. Dwell on `#enterprise` for ~5s – observe `leadership_section_time` with `ms` ≥ 5000.

## Privacy Considerations
- No PII included in event payloads (form fields are excluded).
- Timing + intent + structural identifiers only.
- Ensure dataLayer export pipeline redacts URL parameters containing personal info before external transmission.
