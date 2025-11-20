<?php
$page_title = "Government & Civic Technology (GovTech) — Digital Services • Secure • Scale";
$meta_description = "e-Government portals, citizen services, national ID, secure digital governance and compliance — delivered via certified 1:50 leadership.";
$og_title = $page_title;
$og_description = $meta_description;
$og_image = "https://og-image.vercel.app/Government%20%26%20Civic%20Technology%20(GovTech).png?theme=light&md=1&fontSize=80px";
$og_url = "https://invest.btheducationgroup.com/govtech.php";
include 'header.php';
?>

<?php 
$breadcrumb_items = [
  ['label' => 'Home', 'href' => 'index.php'],
  ['label' => 'Industries', 'href' => 'index.php#industries'],
  ['label' => 'Government & Civic Technology (GovTech)']
];
include 'breadcrumbs.php';
?>


<header>
  <div class="hero">
    <div class="hero-left">
      <h1>Serve. Secure. Modernize.<br><strong>Government &amp; Civic Technology (GovTech)</strong></h1>
      <p class="lead">
        Build secure, accessible digital public services — identity, licensing, benefits, payments,
        records and open data — governed to policy and audit standards. Delivered via the
        Investor Education <strong>1:50 leadership model</strong> across ministries and agencies.
      </p>
      <div class="cta-row">
        <a class="btn" href="#hire-govtech">Request GovTech Program</a>
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
              <option selected>Government &amp; Civic Technology (GovTech)</option>
              <option>Intelligent Cloud, Data &amp; AI</option>
              <option>Cybersecurity &amp; Digital Defense</option>
              <option>Software &amp; Systems Engineering</option>
            </select>
          </div>
          <input type="hidden" name="source" value="Quick Apply • GovTech">
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
    <a class="card" href="#platforms">Platforms &amp; Architecture</a>
    <a class="card" href="#compliance">Compliance &amp; Governance</a>
    <a class="card" href="#packages">Solution Packages</a>
    <a class="card" href="#kpis">KPIs &amp; SLAs</a>
    <a class="card" href="#commercials">Commercials &amp; ROI</a>
    <a class="card" href="#pathways">Certifications &amp; Pathways</a>
    <a class="card" href="#boundaries">Cross-Links</a>
    <a class="card" href="#hire-govtech">Request Program</a>
    <a class="card" href="#apply">Apply</a>
  </div>
</section>

<section id="solutions" class="section">
  <h2>What We Deliver — Digital Public Services</h2>
  <div class="grid">
    <div class="card"><h3>Citizen Identity</h3><p>OIDC/SAML federation, onboarding, credentials, consent and secure access.</p></div>
    <div class="card"><h3>Licensing &amp; Permitting</h3><p>End-to-end workflows, payments, inspections, notifications and audit trails.</p></div>
    <div class="card"><h3>Benefits &amp; Payments</h3><p>Eligibility, disbursement, reconciliation, fraud control and reporting.</p></div>
    <div class="card"><h3>Case &amp; Record Mgmt</h3><p>Records lifecycle, FOI/RTI, correspondence, retention and discovery.</p></div>
    <div class="card"><h3>Open Data</h3><p>Datasets, APIs, metadata, governance and developer engagement.</p></div>
    <div class="card"><h3>Contact Center</h3><p>Omnichannel intake, triage, knowledge bases and service analytics.</p></div>
  </div>
</section>

<section id="proof" class="section">
  <h2>Proof &amp; Portfolio — Outcomes We Deliver</h2>
  <div class="grid">
    <div class="card"><h3>National ID</h3><p>Documents verification, federation and citizen onboarding; wait times ↓ 62%.</p></div>
    <div class="card"><h3>Business One‑Stop</h3><p>Online registration, licensing and payments; processing time ↓ 48%.</p></div>
    <div class="card"><h3>Benefits Platform</h3><p>Eligibility rules, case handling, disbursement; fraud loss ↓ 21%.</p></div>
    <div class="card"><h3>Open Data Portal</h3><p>Datasets/APIs, usage analytics; developer adoption ↑ 3.4×.</p></div>
  </div>
</section>

<section id="team" class="section">
  <h2>1:50 Team — Roles &amp; Delivery Pods</h2>
  <div class="grid">
    <div class="card"><h3>Leadership</h3><ul><li>GovTech Program Lead</li><li>PM / Scrum Master</li><li>Policy Liaison</li></ul></div>
    <div class="card"><h3>Service &amp; UX</h3><ul><li>Service Designer</li><li>UX Writer/Researcher</li><li>Accessibility Specialist</li></ul></div>
    <div class="card"><h3>Platform</h3><ul><li>Solutions Architect</li><li>Platform Engineer</li><li>SRE</li></ul></div>
    <div class="card"><h3>Engineering</h3><ul><li>Frontend/Backend</li><li>Integration/API</li><li>Mobile</li></ul></div>
    <div class="card"><h3>Data</h3><ul><li>Data Engineer</li><li>Analytics Developer</li><li>ML/Insights</li></ul></div>
    <div class="card"><h3>Compliance</h3><ul><li>Security/GRC</li><li>Privacy/DPO</li><li>Audit &amp; QA</li></ul></div>
  </div>
</section>

<section id="platforms" class="section">
  <h2>Platforms &amp; Architecture</h2>
  <details class="card"><summary><strong>Digital Platform</strong></summary><p>Identity, content, forms, workflow, payments, notifications and search.</p></details>
  <details class="card"><summary><strong>Integration</strong></summary><p>APIs, ESB/eventing, data sync, document services and master data.</p></details>
  <details class="card"><summary><strong>Observability</strong></summary><p>Telemetry, dashboards, SLIs/SLOs, error budgets and incident response.</p></details>
  <details class="card"><summary><strong>Resilience</strong></summary><p>HA, DR/BCP, backup/restore, chaos drills, change windows and runbooks.</p></details>
</section>

<section id="compliance" class="section">
  <h2>Compliance &amp; Governance</h2>
  <div class="grid">
    <div class="card"><h3>Security</h3><p>Zero Trust, secrets, encryption, SBOMs, supply chain and secure SDLC.</p></div>
    <div class="card"><h3>Privacy</h3><p>Consent, DPIAs, subject rights, retention and lawful basis controls.</p></div>
    <div class="card"><h3>Accessibility</h3><p>WCAG 2.2 AA, usability testing, assistive tech and inclusive design.</p></div>
    <div class="card"><h3>Audit</h3><p>Policies/controls, evidence packs, change records and reporting.</p></div>
  </div>
</section>

<section id="packages" class="section">
  <h2>Solution Packages</h2>
  <div class="grid">
    <div class="card"><h3>Citizen Identity Launch</h3><p>6–8 weeks • identity, onboarding, federation • warranty 60 days.</p></div>
    <div class="card"><h3>One‑Stop Business Portal</h3><p>10–14 weeks • registration, licensing, payments • warranty 90 days.</p></div>
    <div class="card"><h3>Benefits Program</h3><p>8–12 weeks • eligibility, disbursement, reporting • warranty 90 days.</p></div>
  </div>
</section>

<section id="kpis" class="section">
  <h2>KPIs &amp; SLAs</h2>
  <div class="grid">
    <div class="card"><h3>Service Times</h3><p>Processing time and queue SLAs by service.</p></div>
    <div class="card"><h3>Availability</h3><p>Target 99.9%+ with planned maintenance windows.</p></div>
    <div class="card"><h3>Accessibility</h3><p>WCAG conformance, issues backlog and fix rate.</p></div>
    <div class="card"><h3>Security</h3><p>Patch latency, vuln backlog and incident metrics.</p></div>
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
        <tr><td style="padding:8px;">Platform/Eng</td><td style="padding:8px;">80–120</td><td style="padding:8px;">$60k–$100k</td><td style="padding:8px;">Platform, integration, observability</td></tr>
        <tr><td style="padding:8px;">Apps/Services</td><td style="padding:8px;">100–140</td><td style="padding:8px;">$70k–$110k</td><td style="padding:8px;">Workflows, portals, payments</td></tr>
        <tr><td style="padding:8px;">Data/BI</td><td style="padding:8px;">90–130</td><td style="padding:8px;">$65k–$95k</td><td style="padding:8px;">Records, reporting, open data</td></tr>
      </tbody>
    </table>
    <p class="muted">Ranges vary by scope, geography and SLAs.</p>
  </div>
  <div class="card">
    <h3>Leader ROI Ladder (Illustrative)</h3>
    <table style="width:100%;border-collapse:collapse;">
      <thead><tr>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Milestone</th>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Active Commission</th>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Residual (Managed GovTech)</th>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Cumulative Annualized</th>
      </tr></thead>
      <tbody>
        <tr><td style="padding:8px;">Month 3</td><td style="padding:8px;">$14,440</td><td style="padding:8px;">$120k–$240k</td><td style="padding:8px;">$300k–$600k</td></tr>
        <tr><td style="padding:8px;">Month 6</td><td style="padding:8px;">$28,880</td><td style="padding:8px;">$480k–$960k</td><td style="padding:8px;">$1.0M–$2.0M</td></tr>
        <tr><td style="padding:8px;">Month 12</td><td style="padding:8px;">$44,321</td><td style="padding:8px;">$1.2M–$2.4M</td><td style="padding:8px;">$2.1M+</td></tr>
      </tbody>
    </table>
    <p class="muted">Aligned to recurring managed services and multi-program delivery.</p>
  </div>
  <div class="commercials-footer">
    <div class="commercials-footer-cta">
      <a class="btn" href="#hire-govtech">Discuss GovTech Program</a>
      <a class="btn" href="#apply">Apply as 1:50 GovTech Leader</a>
      <a class="btn" href="docs/govtech-finance-pack.pdf" target="_blank" rel="noopener" download>
        Download Finance Pack (PDF)
      </a>
      <a class="btn" href="docs/govtech-brochure.pdf" target="_blank" rel="noopener" download>
        Download Services Brochure
      </a>
    </div>
    <div class="commercials-footer-note">
      Use the finance pack for modeling and multi-program rollouts. Custom structures available.
    </div>
  </div>
</section>

<section id="pathways" class="section">
  <h2>Certifications &amp; Pathways</h2>
  <div class="grid">
    <div class="card"><h3>Security/GRC</h3><p>ISO 27001 LI/LA • CCSK/CCSP • DPO • ITIL</p></div>
    <div class="card"><h3>Cloud/Platform</h3><p>Azure/AWS/GCP Associate → Professional • CKA/CKAD</p></div>
    <div class="card"><h3>Data/BI</h3><p>dbt • Power BI • Tableau • Data governance</p></div>
    <div class="card"><h3>Delivery</h3><p>PMI/PRINCE2 • Agile PM • Service Design</p></div>
  </div>
</section>

<section id="boundaries" class="section">
  <h2>Cross-Links &amp; Boundaries</h2>
  <div class="grid">
    <a class="card" href="cybersecurity.php"><h3>Cybersecurity</h3><p>SOC/MDR and compliance programs.</p></a>
    <a class="card" href="software-engineering.php"><h3>Software Engineering</h3><p>Feature builds and product delivery.</p></a>
    <a class="card" href="intelligent-cloud.php"><h3>Cloud, Data &amp; AI</h3><p>Platform enablement and analytics.</p></a>
    <a class="card" href="information-technology.php"><h3>IT Operations</h3><p>Endpoint, network and collaboration.</p></a>
  </div>
</section>

<section id="hire-govtech" class="section">
  <h2>Request a GovTech Program</h2>
  <form method="post" action="send-mail.php" class="application-form">
    <div class="form-row">
      <div class="field"><label>Organization</label><input name="company" required></div>
      <div class="field"><label>Email</label><input name="email" type="email" required></div>
    </div>
    <div class="form-row">
      <div class="field"><label>Scope</label><input name="workload" placeholder="Identity, licensing, benefits, open data…"></div>
      <div class="field"><label>Timeline</label><input name="timeline" placeholder="e.g., 60–120 days"></div>
    </div>
    <div class="form-row">
      <div class="field"><label>Budget Range (USD)</label><input name="budget" placeholder="$50k–$500k+"></div>
      <div class="field"><label>Compliance Targets</label><input name="compliance" placeholder="ISO, SOC 2, data protection…"></div>
    </div>
    <div class="field"><label>Notes</label><textarea name="message" rows="5"></textarea></div>
    <input type="hidden" name="industry" value="Government &amp; Civic Technology (GovTech)">
    <input type="hidden" name="source" value="Hire GovTech • Request Program">
    <button class="btn" type="submit">Send Request</button>
  </form>
</section>

<section id="apply" class="section">
  <h2>Apply to Lead a GovTech Team</h2>
  <p style="color:#6b7280;max-width:900px;margin:0 auto 30px;text-align:center;">Only <strong>100 Team Leaders</strong> per industry.</p>
  <form method="post" action="send-mail.php" class="application-form">
    <div class="form-row">
      <div class="field"><label>Full Name</label><input name="name" required></div>
      <div class="field"><label>Email</label><input name="email" type="email" required></div>
    </div>
    <div class="form-row">
      <div class="field"><label>Phone</label><input name="phone" required></div>
      <div class="field"><label>Primary Focus</label><input name="stack" placeholder="Identity, portals, benefits, open data…"></div>
    </div>
    <div class="field"><label>Why are you a fit?</label><textarea name="message" rows="5"></textarea></div>
    <input type="hidden" name="industry" value="Government &amp; Civic Technology (GovTech)">
    <input type="hidden" name="source" value="Full Apply • GovTech">
    <button class="btn" type="submit">Submit Application</button>
  </form>
</section>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Government & Civic Technology (GovTech)",
  "description": "Secure, accessible digital public services — identity, licensing, benefits, payments and open data — delivered via 1:50 leadership pods.",
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
    {"@type": "ListItem", "position": 3, "name": "Government & Civic Technology (GovTech)", "item": "<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>"}
  ]
}
</script>

<?php include 'footer.php'; ?>
