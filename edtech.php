<?php
$page_title = "Education Technology (EdTech) — Learn • Measure • Scale";
$meta_description = "LMS, virtual labs, digital learning platforms, and AI student analytics — delivered by certified 1:50 EdTech pods.";
$og_title = $page_title;
$og_description = $meta_description;
$og_image = "https://og-image.vercel.app/Education%20Technology%20(EdTech).png?theme=light&md=1&fontSize=80px";
$og_url = "https://invest.btheducationgroup.com/edtech.php";
include 'header.php';
?>

<?php 
$breadcrumb_items = [
  ['label' => 'Home', 'href' => 'index.php'],
  ['label' => 'Industries', 'href' => 'index.php#industries'],
  ['label' => 'Education Technology (EdTech)']
];
include 'breadcrumbs.php';
?>

<header>
  <div class="hero">
    <div class="hero-left">
      <h1>Learn. Measure. Scale.<br><strong>Education Technology (EdTech)</strong></h1>
      <p class="lead">Deploy LMS, virtual labs, and data‑driven analytics to transform outcomes across schools, universities and ministries, governed to accessibility and privacy standards via <strong>1:50 EdTech pods</strong>.</p>
      <div class="cta-row">
        <a class="btn" href="#hire-edtech">Request EdTech Program</a>
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
              <option selected>Education Technology (EdTech)</option>
              <option>Software &amp; Systems Engineering</option>
              <option>Intelligent Cloud, Data &amp; AI</option>
              <option>Creative &amp; Digital Media Technology</option>
            </select>
          </div>
          <input type="hidden" name="source" value="Quick Apply • EdTech">
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
    <a class="card" href="#platforms">Platforms &amp; Content</a>
    <a class="card" href="#accessibility">Accessibility &amp; Privacy</a>
    <a class="card" href="#packages">Solution Packages</a>
    <a class="card" href="#kpis">KPIs &amp; SLAs</a>
    <a class="card" href="#commercials">Commercials &amp; ROI</a>
    <a class="card" href="#pathways">Certifications &amp; Pathways</a>
    <a class="card" href="#boundaries">Cross-Links</a>
    <a class="card" href="#hire-edtech">Request Program</a>
    <a class="card" href="#apply">Apply</a>
  </div>
</section>

<section id="solutions" class="section">
  <h2>What We Deliver — Digital Learning</h2>
  <div class="grid">
    <div class="card"><h3>LMS &amp; Content</h3><p>Deployment, migration, SCORM/xAPI, catalogs and governance.</p></div>
    <div class="card"><h3>Virtual Labs</h3><p>Hands‑on labs, classroom virtualization, proctoring and safety.</p></div>
    <div class="card"><h3>Analytics</h3><p>Student success dashboards, early warning and interventions.</p></div>
    <div class="card"><h3>Ed Portals</h3><p>Admissions, courses, payments and records.</p></div>
  </div>
</section>

<section id="proof" class="section">
  <h2>Proof &amp; Portfolio — Outcomes We Deliver</h2>
  <div class="grid">
    <div class="card"><h3>Virtual Labs</h3><p>Lab utilization ↑ 2.7×; support tickets ↓ 33%.</p></div>
    <div class="card"><h3>LMS Migration</h3><p>Content migration with zero data loss; uptime 99.95%.</p></div>
    <div class="card"><h3>Student Analytics</h3><p>At‑risk alerts with actionable insights; retention ↑ 11%.</p></div>
  </div>
</section>

<section id="team" class="section">
  <h2>1:50 Team — Roles &amp; Delivery Pods</h2>
  <div class="grid">
    <div class="card"><h3>Leadership</h3><ul><li>EdTech Program Lead</li><li>PM / Instructional Lead</li></ul></div>
    <div class="card"><h3>Platform</h3><ul><li>LMS Admin</li><li>Integration Engineer</li><li>SRE</li></ul></div>
    <div class="card"><h3>Content</h3><ul><li>Instructional Designer</li><li>Media/Interactive</li><li>Localization</li></ul></div>
    <div class="card"><h3>Analytics</h3><ul><li>Data Engineer</li><li>BI/Insights</li><li>ML/AI</li></ul></div>
    <div class="card"><h3>Accessibility</h3><ul><li>WCAG Specialist</li><li>QA &amp; Testing</li></ul></div>
  </div>
</section>

<section id="platforms" class="section">
  <h2>Platforms &amp; Content</h2>
  <details class="card"><summary><strong>LMS &amp; LRS</strong></summary><p>Open edX/Moodle/Canvas, xAPI/LRS, catalogs and governance.</p></details>
  <details class="card"><summary><strong>Delivery</strong></summary><p>Scaling, CDN, media pipelines, offline and device support.</p></details>
  <details class="card"><summary><strong>Interactivity</strong></summary><p>Simulations, virtual labs, assessments and proctoring.</p></details>
</section>

<section id="accessibility" class="section">
  <h2>Accessibility &amp; Privacy</h2>
  <div class="grid">
    <div class="card"><h3>WCAG</h3><p>Design, testing and remediation for WCAG 2.2 AA.</p></div>
    <div class="card"><h3>Privacy</h3><p>Consent, data minimization, retention and audits.</p></div>
    <div class="card"><h3>Safety</h3><p>Content policies, moderation and incident response.</p></div>
  </div>
</section>

<section id="packages" class="section">
  <h2>Solution Packages</h2>
  <div class="grid">
    <div class="card"><h3>LMS Launch</h3><p>6–10 weeks • migration, training, governance • warranty 60 days.</p></div>
    <div class="card"><h3>Virtual Lab Rollout</h3><p>6–10 weeks • environment, content, proctoring • warranty 60 days.</p></div>
    <div class="card"><h3>Analytics Starter</h3><p>4–8 weeks • dashboards and alerts • warranty 30 days.</p></div>
  </div>
</section>

<section id="kpis" class="section">
  <h2>KPIs &amp; SLAs</h2>
  <div class="grid">
    <div class="card"><h3>Availability</h3><p>Uptime targets and error budgets.</p></div>
    <div class="card"><h3>Engagement</h3><p>Completion, time‑on‑task, retention.</p></div>
    <div class="card"><h3>Support</h3><p>Ticket volume and resolution times.</p></div>
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
        <tr><td style="padding:8px;">Platform</td><td style="padding:8px;">—</td><td style="padding:8px;">$45k–$85k</td><td style="padding:8px;">LMS, delivery, integrations</td></tr>
        <tr><td style="padding:8px;">Content</td><td style="padding:8px;">—</td><td style="padding:8px;">$30k–$70k</td><td style="padding:8px;">Instructional &amp; media production</td></tr>
        <tr><td style="padding:8px;">Analytics</td><td style="padding:8px;">—</td><td style="padding:8px;">$35k–$75k</td><td style="padding:8px;">Dashboards and insights</td></tr>
      </tbody>
    </table>
    <p class="muted">Ranges depend on learners, content complexity and SLAs.</p>
  </div>
  <div class="card">
    <h3>Leader ROI Ladder (Illustrative)</h3>
    <table style="width:100%;border-collapse:collapse;">
      <thead><tr>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Milestone</th>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Active Commission</th>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Residual (Managed EdTech)</th>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Cumulative Annualized</th>
      </tr></thead>
      <tbody>
        <tr><td style="padding:8px;">Month 3</td><td style="padding:8px;">$14,440</td><td style="padding:8px;">$80k–$160k</td><td style="padding:8px;">$200k–$400k</td></tr>
        <tr><td style="padding:8px;">Month 6</td><td style="padding:8px;">$28,880</td><td style="padding:8px;">$280k–$560k</td><td style="padding:8px;">$700k–$1.4M</td></tr>
        <tr><td style="padding:8px;">Month 12</td><td style="padding:8px;">$44,321</td><td style="padding:8px;">$0.8M–$1.6M</td><td style="padding:8px;">$1.7M+</td></tr>
      </tbody>
    </table>
    <p class="muted">Aligned to recurring platform ops and content programs.</p>
  </div>
  <div class="commercials-footer">
    <div class="commercials-footer-cta">
      <a class="btn" href="#hire-edtech">Discuss EdTech Program</a>
      <a class="btn" href="#apply">Apply as 1:50 EdTech Leader</a>
      <a class="btn" href="docs/edtech-finance-pack.pdf" target="_blank" rel="noopener" download>
        Download Finance Pack (PDF)
      </a>
      <a class="btn" href="docs/edtech-brochure.pdf" target="_blank" rel="noopener" download>
        Download Services Brochure
      </a>
    </div>
    <div class="commercials-footer-note">
      Use the finance pack for campus/Ministry program modeling and rollouts.
    </div>
  </div>
</section>

<section id="pathways" class="section">
  <h2>Certifications &amp; Pathways</h2>
  <div class="grid">
    <div class="card"><h3>Platform</h3><p>LMS Admin • Cloud Fundamentals</p></div>
    <div class="card"><h3>Content</h3><p>Instructional Design • Media • Accessibility</p></div>
    <div class="card"><h3>Analytics</h3><p>Power BI/Tableau • Data Engineering</p></div>
  </div>
</section>

<section id="boundaries" class="section">
  <h2>Cross-Links &amp; Boundaries</h2>
  <div class="grid">
    <a class="card" href="creative-media.php"><h3>Creative Tech</h3><p>Interactive content and media.</p></a>
    <a class="card" href="intelligent-cloud.php"><h3>Cloud, Data &amp; AI</h3><p>Data platforms and analytics.</p></a>
    <a class="card" href="software-engineering.php"><h3>Software Engineering</h3><p>Custom apps and integrations.</p></a>
  </div>
</section>

<section id="hire-edtech" class="section">
  <h2>Request an EdTech Program</h2>
  <form method="post" action="send-mail.php" class="application-form">
    <div class="form-row">
      <div class="field"><label>Organization</label><input name="company" required></div>
      <div class="field"><label>Email</label><input name="email" type="email" required></div>
    </div>
    <div class="form-row">
      <div class="field"><label>Scope</label><input name="workload" placeholder="LMS, labs, analytics…"></div>
      <div class="field"><label>Timeline</label><input name="timeline" placeholder="e.g., 60–120 days"></div>
    </div>
    <div class="form-row">
      <div class="field"><label>Budget Range (USD)</label><input name="budget" placeholder="$50k–$500k+"></div>
      <div class="field"><label>Accessibility &amp; Privacy Targets</label><input name="compliance" placeholder="WCAG, data protection…"></div>
    </div>
    <div class="field"><label>Notes</label><textarea name="message" rows="5"></textarea></div>
    <input type="hidden" name="industry" value="Education Technology (EdTech)">
    <input type="hidden" name="source" value="Hire EdTech • Request Program">
    <button class="btn" type="submit">Send Request</button>
  </form>
</section>

<section id="apply" class="section">
  <h2>Apply to Lead an EdTech Team</h2>
  <p style="color:#6b7280;max-width:900px;margin:0 auto 30px;text-align:center;">Only <strong>100 Team Leaders</strong> per industry.</p>
  <form method="post" action="send-mail.php" class="application-form">
    <div class="form-row">
      <div class="field"><label>Full Name</label><input name="name" required></div>
      <div class="field"><label>Email</label><input name="email" type="email" required></div>
    </div>
    <div class="form-row">
      <div class="field"><label>Phone</label><input name="phone" required></div>
      <div class="field"><label>Primary Focus</label><input name="stack" placeholder="LMS, labs, analytics…"></div>
    </div>
    <div class="field"><label>Why are you a fit?</label><textarea name="message" rows="5"></textarea></div>
    <input type="hidden" name="industry" value="Education Technology (EdTech)">
    <input type="hidden" name="source" value="Full Apply • EdTech">
    <button class="btn" type="submit">Submit Application</button>
  </form>
</section>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Education Technology (EdTech)",
  "description": "LMS deployments, virtual labs, learning content and student analytics delivered by 1:50 EdTech pods.",
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
    {"@type": "ListItem", "position": 3, "name": "Education Technology (EdTech)", "item": "<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>"}
  ]
}
</script>

<?php include 'footer.php'; ?>
