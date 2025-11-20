<?php
$page_title = "Creative & Digital Media Technology — Create • Visualize • Engage";
$meta_description = "Brand systems, interactive content, 3D visualization, and training media — delivered by certified 1:50 creative technology pods.";
$og_title = $page_title;
$og_description = $meta_description;
$og_image = "https://og-image.vercel.app/Creative%20%26%20Digital%20Media%20Technology.png?theme=light&md=1&fontSize=80px";
$og_url = "https://invest.btheducationgroup.com/creative-media.php";
include 'header.php';
?>

<?php 
$breadcrumb_items = [
  ['label' => 'Home', 'href' => 'index.php'],
  ['label' => 'Industries', 'href' => 'index.php#industries'],
  ['label' => 'Creative & Digital Media Technology']
];
include 'breadcrumbs.php';
?>

<header>
  <div class="hero">
    <div class="hero-left">
      <h1>Create. Visualize. Engage.<br><strong>Creative &amp; Digital Media Technology</strong></h1>
      <p class="lead">Ship world‑class content and experiences — brand systems, interactive learning, motion/3D/XR and training assets — delivered by certified <strong>1:50 creative pods</strong> for education and enterprise.</p>
      <div class="cta-row">
        <a class="btn" href="#hire-creative">Request Creative Program</a>
        <a class="btn-outline" href="#apply">Become a Team Leader</a>
      </div>
      <div class="stats">
        <div class="stat"><div class="stat-value" data-countup="44321" data-suffix=" USD">0</div><div class="stat-label" style="font-size:13px;white-space:nowrap;">Team-building commission</div></div>
        <div class="stat"><div class="stat-value" data-countup="2127372" data-suffix=" USD">0</div><div class="stat-label" style="font-size:13px;white-space:nowrap;">Leader annual income</div></div>
        <div class="stat"><div class="stat-value" data-countup="63822" data-suffix=" USD">0</div><div class="stat-label" style="font-size:13px;white-space:nowrap;">Member annual income</div></div>
      </div>
    </div>
    <div class="hero-right">
      <div class="card">
        <strong>Quick Apply</strong>
        <form method="post" action="send-mail.php">
          <div class="field"><label>Name</label><input name="name" required></div>
          <div class="field"><label>Email</label><input name="email" type="email" required></div>
          <div class="field"><label>Phone</label><input name="phone" required></div>
          <div class="field">
            <label>Industry</label>
            <select name="industry" required>
              <option value="">Select...</option>
              <option selected>Creative &amp; Digital Media Technology</option>
              <option>Education Technology (EdTech)</option>
              <option>Software &amp; Systems Engineering</option>
            </select>
          </div>
          <input type="hidden" name="source" value="Quick Apply • Creative Tech">
          <button class="btn" type="submit">Apply Now</button>
        </form>
      </div>
    </div>
  </div>
</header>

<section id="nav" class="section">
  <h2>Quick Navigation</h2>
  <div class="grid">
    <a class="card" href="#solutions">What We Deliver</a>
    <a class="card" href="#proof">Proof &amp; Portfolio</a>
    <a class="card" href="#team">1:50 Team &amp; Roles</a>
    <a class="card" href="#stack">Creative Stack</a>
    <a class="card" href="#packages">Solution Packages</a>
    <a class="card" href="#kpis">KPIs &amp; SLAs</a>
    <a class="card" href="#commercials">Commercials &amp; ROI</a>
    <a class="card" href="#pathways">Certifications &amp; Pathways</a>
    <a class="card" href="#boundaries">Cross-Links</a>
    <a class="card" href="#hire-creative">Request Program</a>
    <a class="card" href="#apply">Apply</a>
  </div>
</section>

<section id="solutions" class="section">
  <h2>What We Deliver — Content &amp; Experiences</h2>
  <div class="grid">
    <div class="card"><h3>Brand &amp; Systems</h3><p>Design systems, templates, guidelines and asset libraries.</p></div>
    <div class="card"><h3>Interactive Learning</h3><p>SCORM/xAPI modules, micro‑courses and simulations.</p></div>
    <div class="card"><h3>Motion/Video</h3><p>Explainers, training series, post‑production and localization.</p></div>
    <div class="card"><h3>3D &amp; XR</h3><p>Visualization, product demos and immersive training.</p></div>
    <div class="card"><h3>Campaign Assets</h3><p>Cross‑channel content for demand and education.</p></div>
  </div>
</section>

<section id="proof" class="section">
  <h2>Proof &amp; Portfolio — Outcomes We Deliver</h2>
  <div class="grid">
    <div class="card"><h3>Interactive Safety</h3><p>Incidents ↓ 18% after rollout of safety micro‑courses.</p></div>
    <div class="card"><h3>Product 3D</h3><p>Sales cycle ↓ 22% with interactive 3D demos.</p></div>
    <div class="card"><h3>Training Series</h3><p>Onboarding time ↓ 27% with localized video series.</p></div>
  </div>
</section>

<section id="team" class="section">
  <h2>1:50 Team — Roles &amp; Delivery Pods</h2>
  <div class="grid">
    <div class="card"><h3>Leadership</h3><ul><li>Creative Director / Program Lead</li><li>PM / Producer</li></ul></div>
    <div class="card"><h3>Design</h3><ul><li>Brand/Visual</li><li>Interaction/Instructional</li></ul></div>
    <div class="card"><h3>Media</h3><ul><li>Motion/Video</li><li>Audio</li><li>Localization</li></ul></div>
    <div class="card"><h3>3D/XR</h3><ul><li>Unity/Unreal</li><li>3D Artists</li></ul></div>
    <div class="card"><h3>Dev</h3><ul><li>Front‑end</li><li>LMS Integration</li></ul></div>
  </div>
</section>

<section id="stack" class="section">
  <h2>Creative Stack</h2>
  <details class="card"><summary><strong>Design &amp; Media</strong></summary><p>Adobe suite, Figma, motion pipelines and localization.</p></details>
  <details class="card"><summary><strong>3D &amp; XR</strong></summary><p>Unity/Unreal, shaders, light/bake, performance and interactivity.</p></details>
  <details class="card"><summary><strong>Delivery</strong></summary><p>CDN, streaming, LMS/xAPI, accessibility and analytics.</p></details>
</section>

<section id="packages" class="section">
  <h2>Solution Packages</h2>
  <div class="grid">
    <div class="card"><h3>Interactive Course</h3><p>4–8 weeks • storyboard → SCORM/xAPI • warranty 30 days.</p></div>
    <div class="card"><h3>Motion Explainer</h3><p>3–6 weeks • script → animation • warranty 30 days.</p></div>
    <div class="card"><h3>3D Showcase</h3><p>6–10 weeks • assets → interactive • warranty 60 days.</p></div>
  </div>
</section>

<section id="kpis" class="section">
  <h2>KPIs &amp; SLAs</h2>
  <div class="grid">
    <div class="card"><h3>Delivery</h3><p>On‑time rate and change control.</p></div>
    <div class="card"><h3>Engagement</h3><p>Completion and satisfaction metrics.</p></div>
    <div class="card"><h3>Accessibility</h3><p>WCAG 2.2 AA conformance goals.</p></div>
  </div>
</section>

<section id="commercials" class="section">
  <h2>Commercials — Pods &amp; Leader ROI</h2>
  <div class="card" style="margin-bottom:20px">
    <h3>Pod Economics (Illustrative)</h3>
    <table style="width:100%;border-collapse:collapse;">
      <thead><tr>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Pod Type</th>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Velocity (pts/mo)</th>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Monthly Rate (USD)</th>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Scope</th>
      </tr></thead>
      <tbody>
        <tr><td style="padding:8px;">Design/Content</td><td style="padding:8px;">—</td><td style="padding:8px;">$30k–$70k</td><td style="padding:8px;">Brand, UI, instructional content</td></tr>
        <tr><td style="padding:8px;">Motion/Video</td><td style="padding:8px;">—</td><td style="padding:8px;">$35k–$75k</td><td style="padding:8px;">Explainers, series, localization</td></tr>
        <tr><td style="padding:8px;">3D/XR</td><td style="padding:8px;">—</td><td style="padding:8px;">$45k–$95k</td><td style="padding:8px;">Visualization and immersive</td></tr>
      </tbody>
    </table>
    <p class="muted">Ranges vary by complexity, media length and interactivity.</p>
  </div>
  <div class="card">
    <h3>Leader ROI Ladder (Illustrative)</h3>
    <table style="width:100%;border-collapse:collapse;">
      <thead><tr>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Milestone</th>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Active Commission</th>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Residual (Managed Creative)</th>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Cumulative Annualized</th>
      </tr></thead>
      <tbody>
        <tr><td style="padding:8px;">Month 3</td><td style="padding:8px;">$14,440</td><td style="padding:8px;">$70k–$140k</td><td style="padding:8px;">$180k–$360k</td></tr>
        <tr><td style="padding:8px;">Month 6</td><td style="padding:8px;">$28,880</td><td style="padding:8px;">$260k–$520k</td><td style="padding:8px;">$650k–$1.3M</td></tr>
        <tr><td style="padding:8px;">Month 12</td><td style="padding:8px;">$44,321</td><td style="padding:8px;">$0.7M–$1.4M</td><td style="padding:8px;">$1.6M+</td></tr>
      </tbody>
    </table>
    <p class="muted">Aligned to recurring content and learning programs.</p>
  </div>
  <div class="commercials-footer">
    <div class="commercials-footer-cta">
      <a class="btn" href="#hire-creative">Discuss Creative Program</a>
      <a class="btn" href="#apply">Apply as 1:50 Creative Leader</a>
      <a class="btn" href="docs/creative-media-finance-pack.pdf" target="_blank" rel="noopener" download>
        Download Finance Pack (PDF)
      </a>
      <a class="btn" href="docs/creative-media-brochure.pdf" target="_blank" rel="noopener" download>
        Download Services Brochure
      </a>
    </div>
    <div class="commercials-footer-note">
      Use the finance pack for content program planning and multi-channel release.
    </div>
  </div>
</section>

<section id="pathways" class="section">
  <h2>Certifications &amp; Pathways</h2>
  <div class="grid">
    <div class="card"><h3>Design</h3><p>Adobe Certified Professional • Figma</p></div>
    <div class="card"><h3>3D/XR</h3><p>Unity/Unreal • 3D pipelines</p></div>
    <div class="card"><h3>Instructional</h3><p>Learning design • Accessibility</p></div>
  </div>
</section>

<section id="boundaries" class="section">
  <h2>Cross-Links &amp; Boundaries</h2>
  <div class="grid">
    <a class="card" href="edtech.php"><h3>EdTech</h3><p>LMS and delivery.</p></a>
    <a class="card" href="software-engineering.php"><h3>Software Engineering</h3><p>Integrations and platforms.</p></a>
  </div>
</section>

<section id="hire-creative" class="section">
  <h2>Request a Creative Program</h2>
  <form method="post" action="send-mail.php" class="application-form">
    <div class="form-row">
      <div class="field"><label>Organization</label><input name="company" required></div>
      <div class="field"><label>Email</label><input name="email" type="email" required></div>
    </div>
    <div class="form-row">
      <div class="field"><label>Scope</label><input name="workload" placeholder="Brand, interactive, motion, 3D/XR…"></div>
      <div class="field"><label>Timeline</label><input name="timeline" placeholder="e.g., 30–90 days"></div>
    </div>
    <div class="form-row">
      <div class="field"><label>Budget Range (USD)</label><input name="budget" placeholder="$20k–$500k+"></div>
      <div class="field"><label>Notes</label><input name="notes" placeholder="Channels, formats, audiences…"></div>
    </div>
    <input type="hidden" name="industry" value="Creative &amp; Digital Media Technology">
    <input type="hidden" name="source" value="Hire Creative • Request Program">
    <button class="btn" type="submit">Send Request</button>
  </form>
</section>

<section id="apply" class="section">
  <h2>Apply to Lead a Creative Tech Team</h2>
  <p style="color:#6b7280;max-width:900px;margin:0 auto 30px;text-align:center;">Only <strong>100 Team Leaders</strong> per industry.</p>
  <form method="post" action="send-mail.php" class="application-form">
    <div class="form-row">
      <div class="field"><label>Full Name</label><input name="name" required></div>
      <div class="field"><label>Email</label><input name="email" type="email" required></div>
    </div>
    <div class="form-row">
      <div class="field"><label>Phone</label><input name="phone" required></div>
      <div class="field"><label>Primary Focus</label><input name="stack" placeholder="Brand, interactive, motion, 3D/XR…"></div>
    </div>
    <div class="field"><label>Why are you a fit?</label><textarea name="message" rows="5"></textarea></div>
    <input type="hidden" name="industry" value="Creative &amp; Digital Media Technology">
    <input type="hidden" name="source" value="Full Apply • Creative Tech">
    <button class="btn" type="submit">Submit Application</button>
  </form>
</section>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Creative & Digital Media Technology",
  "description": "Brand systems, interactive learning, motion/3D/XR and training media delivered by 1:50 creative pods.",
  "provider": {"@type": "Organization", "name": "Investor Education Program"},
  "areaServed": "Global",
  "url": "<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>"
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://invest.btheducationgroup.com/index.php"},
    {"@type": "ListItem", "position": 2, "name": "Industries", "item": "https://invest.btheducationgroup.com/index.php#industries"},
    {"@type": "ListItem", "position": 3, "name": "Creative & Digital Media Technology", "item": "<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>"}
  ]
}
</script>

<?php include 'footer.php'; ?>
