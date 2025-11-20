<?php
$page_title = "Financial Services & Investment Technology (FinTech) — Build • Secure • Scale";
$meta_description = "Digital banking, payments integration, fraud prevention, and AI credit scoring — delivered by certified 1:50 FinTech pods.";
$og_title = $page_title;
$og_description = $meta_description;
$og_image = "https://og-image.vercel.app/Financial%20Services%20%26%20Investment%20Technology%20(FinTech).png?theme=light&md=1&fontSize=80px";
$og_url = "https://invest.btheducationgroup.com/fintech.php";
include 'header.php';
?>

<?php 
$breadcrumb_items = [
  ['label' => 'Home', 'href' => 'index.php'],
  ['label' => 'Industries', 'href' => 'index.php#industries'],
  ['label' => 'Financial Services & Investment Technology (FinTech)']
];
include 'breadcrumbs.php';
?>

<header>
  <div class="hero">
    <div class="hero-left">
      <h1>Build. Secure. Scale.<br><strong>Financial Services &amp; Investment Technology (FinTech)</strong></h1>
      <p class="lead">
        Launch compliant digital finance — core banking, wallets, payments, fraud prevention and AI‑driven credit — with
        strong governance and reliability via the Investor Education <strong>1:50 leadership model</strong>.
      </p>
      <div class="cta-row">
        <a class="btn" href="#hire-fintech">Request FinTech Program</a>
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
              <option selected>Financial Services &amp; Investment Technology (FinTech)</option>
              <option>Cybersecurity &amp; Digital Defense</option>
              <option>Software &amp; Systems Engineering</option>
              <option>Intelligent Cloud, Data &amp; AI</option>
            </select>
          </div>
          <input type="hidden" name="source" value="Quick Apply • FinTech">
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
    <a class="card" href="#platform">Platform &amp; Integrations</a>
    <a class="card" href="#compliance">Compliance &amp; Risk</a>
    <a class="card" href="#packages">Solution Packages</a>
    <a class="card" href="#kpis">KPIs &amp; SLAs</a>
    <a class="card" href="#commercials">Commercials &amp; ROI</a>
    <a class="card" href="#pathways">Certifications &amp; Pathways</a>
    <a class="card" href="#boundaries">Cross-Links</a>
    <a class="card" href="#hire-fintech">Request Program</a>
    <a class="card" href="#apply">Apply</a>
  </div>
</section>

<section id="solutions" class="section">
  <h2>What We Deliver — Digital Finance</h2>
  <div class="grid">
    <div class="card"><h3>Digital Banking</h3><p>Core banking, wallets, onboarding, statements and servicing.</p></div>
    <div class="card"><h3>Payments</h3><p>Gateways, orchestration, ISO 20022, reconciliation and settlement.</p></div>
    <div class="card"><h3>Risk &amp; Fraud</h3><p>Device signals, behavioral analytics, rules &amp; models, chargeback mgmt.</p></div>
    <div class="card"><h3>Credit &amp; Score</h3><p>Traditional + alt‑data scoring, underwriting, collections analytics.</p></div>
    <div class="card"><h3>RegTech</h3><p>KYC/AML, screening, reporting and audit evidence packs.</p></div>
  </div>
</section>

<section id="proof" class="section">
  <h2>Proof &amp; Portfolio — Outcomes We Deliver</h2>
  <div class="grid">
    <div class="card"><h3>Real‑Time Payments</h3><p>p99 &lt; 200ms; fraud loss ↓ 35%; ops cost ↓ 24%.</p></div>
    <div class="card"><h3>Wallet &amp; KYC</h3><p>Sign‑up conversion ↑ 2.2×; verification failures ↓ 31%.</p></div>
    <div class="card"><h3>Credit Analytics</h3><p>Approval ↑ 18% @ constant risk; NPLs stable.</p></div>
  </div>
</section>

<section id="team" class="section">
  <h2>1:50 Team — Roles &amp; Delivery Pods</h2>
  <div class="grid">
    <div class="card"><h3>Leadership</h3><ul><li>FinTech Program Lead</li><li>PM / Product Lead</li></ul></div>
    <div class="card"><h3>Platform</h3><ul><li>Solutions Architect</li><li>Platform Engineer</li><li>SRE</li></ul></div>
    <div class="card"><h3>Engineering</h3><ul><li>Backend/API</li><li>Frontend/Mobile</li><li>Data/ML</li></ul></div>
    <div class="card"><h3>Risk/Compliance</h3><ul><li>Fraud Analyst</li><li>AML/KYC Ops</li><li>GRC/Audit</li></ul></div>
  </div>
</section>

<section id="platform" class="section">
  <h2>Platform &amp; Integrations</h2>
  <details class="card"><summary><strong>Core &amp; Wallets</strong></summary><p>Core banking, ledger, accounts, wallets and statements.</p></details>
  <details class="card"><summary><strong>Payments</strong></summary><p>Gateways, routing/orchestration, 3DS, chargebacks and settlement.</p></details>
  <details class="card"><summary><strong>Risk</strong></summary><p>Signals, models, feature stores, rule engines and case mgmt.</p></details>
  <details class="card"><summary><strong>Data &amp; BI</strong></summary><p>ETL/ELT, lakehouse, semantic layers and regulatory reporting.</p></details>
</section>

<section id="compliance" class="section">
  <h2>Compliance &amp; Risk</h2>
  <div class="grid">
    <div class="card"><h3>Security</h3><p>SAST/DAST, secrets, encryption, keys, SBOMs and supply chain.</p></div>
    <div class="card"><h3>Regulatory</h3><p>PCI DSS, ISO/SOC 2, PSD2/Open Banking and data protection.</p></div>
    <div class="card"><h3>Operational</h3><p>DR/BCP, incident response, SLAs and change control.</p></div>
  </div>
</section>

<section id="packages" class="section">
  <h2>Solution Packages</h2>
  <div class="grid">
    <div class="card"><h3>Payments Launch</h3><p>8–12 weeks • orchestration, KYC, settlement • warranty 90 days.</p></div>
    <div class="card"><h3>Wallet + Risk</h3><p>6–10 weeks • wallet, 3DS, fraud engine • warranty 60 days.</p></div>
    <div class="card"><h3>Credit Analytics</h3><p>8–12 weeks • scoring, models, dashboards • warranty 90 days.</p></div>
  </div>
</section>

<section id="kpis" class="section">
  <h2>KPIs &amp; SLAs</h2>
  <div class="grid">
    <div class="card"><h3>Latency</h3><p>p95/p99 for critical flows.</p></div>
    <div class="card"><h3>Availability</h3><p>Error budgets and uptime targets.</p></div>
    <div class="card"><h3>Fraud</h3><p>Loss rate, false positives and recovery.</p></div>
    <div class="card"><h3>Regulatory</h3><p>Audit readiness and evidence packs.</p></div>
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
        <tr><td style="padding:8px;">Platform</td><td style="padding:8px;">—</td><td style="padding:8px;">$70k–$120k</td><td style="padding:8px;">Core/wallets, payments, integrations</td></tr>
        <tr><td style="padding:8px;">Risk</td><td style="padding:8px;">—</td><td style="padding:8px;">$40k–$80k</td><td style="padding:8px;">Signals, rules, models, cases</td></tr>
        <tr><td style="padding:8px;">Data/BI</td><td style="padding:8px;">—</td><td style="padding:8px;">$50k–$90k</td><td style="padding:8px;">ETL/ELT, lakehouse, reporting</td></tr>
      </tbody>
    </table>
    <p class="muted">Ranges depend on regulatory scope, geography and SLAs.</p>
  </div>
  <div class="card">
    <h3>Leader ROI Ladder (Illustrative)</h3>
    <table style="width:100%;border-collapse:collapse;">
      <thead><tr>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Milestone</th>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Active Commission</th>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Residual (Managed FinTech)</th>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Cumulative Annualized</th>
      </tr></thead>
      <tbody>
        <tr><td style="padding:8px;">Month 3</td><td style="padding:8px;">$14,440</td><td style="padding:8px;">$150k–$300k</td><td style="padding:8px;">$360k–$720k</td></tr>
        <tr><td style="padding:8px;">Month 6</td><td style="padding:8px;">$28,880</td><td style="padding:8px;">$600k–$1.2M</td><td style="padding:8px;">$1.2M–$2.4M</td></tr>
        <tr><td style="padding:8px;">Month 12</td><td style="padding:8px;">$44,321</td><td style="padding:8px;">$1.5M–$3.0M</td><td style="padding:8px;">$2.5M+</td></tr>
      </tbody>
    </table>
    <p class="muted">Aligned to recurring managed platform operations and risk services.</p>
  </div>
  <div class="commercials-footer">
    <div class="commercials-footer-cta">
      <a class="btn" href="#hire-fintech">Discuss FinTech Program</a>
      <a class="btn" href="#apply">Apply as 1:50 FinTech Leader</a>
      <a class="btn" href="docs/fintech-finance-pack.pdf" target="_blank" rel="noopener" download>
        Download Finance Pack (PDF)
      </a>
      <a class="btn" href="docs/fintech-brochure.pdf" target="_blank" rel="noopener" download>
        Download Services Brochure
      </a>
    </div>
    <div class="commercials-footer-note">
      Use the finance pack for banking/payments modeling and regulatory planning.
    </div>
  </div>
</section>

<section id="pathways" class="section">
  <h2>Certifications &amp; Pathways</h2>
  <div class="grid">
    <div class="card"><h3>Security</h3><p>PCI • ISO/SOC 2 • CCSK/CCSP • CKS</p></div>
    <div class="card"><h3>Platform</h3><p>Azure/AWS/GCP • CKA/CKAD • DevOps/SRE</p></div>
    <div class="card"><h3>Data/AI</h3><p>dbt • Power BI/Tableau • ML/GenAI</p></div>
    <div class="card"><h3>Delivery</h3><p>PMI/PRINCE2 • Product • Agile</p></div>
  </div>
</section>

<section id="boundaries" class="section">
  <h2>Cross-Links &amp; Boundaries</h2>
  <div class="grid">
    <a class="card" href="cybersecurity.php"><h3>Cybersecurity</h3><p>Offensive security and SOC/MDR.</p></a>
    <a class="card" href="software-engineering.php"><h3>Software Engineering</h3><p>Apps and platform build.</p></a>
    <a class="card" href="intelligent-cloud.php"><h3>Cloud, Data &amp; AI</h3><p>Data platform and scale.</p></a>
  </div>
</section>

<section id="hire-fintech" class="section">
  <h2>Request a FinTech Program</h2>
  <form method="post" action="send-mail.php" class="application-form">
    <div class="form-row">
      <div class="field"><label>Organization</label><input name="company" required></div>
      <div class="field"><label>Email</label><input name="email" type="email" required></div>
    </div>
    <div class="form-row">
      <div class="field"><label>Scope</label><input name="workload" placeholder="Banking, payments, risk, credit…"></div>
      <div class="field"><label>Timeline</label><input name="timeline" placeholder="e.g., 60–120 days"></div>
    </div>
    <div class="form-row">
      <div class="field"><label>Budget Range (USD)</label><input name="budget" placeholder="$100k–$2M+"></div>
      <div class="field"><label>Compliance Targets</label><input name="compliance" placeholder="PCI, ISO, SOC 2, data protection…"></div>
    </div>
    <div class="field"><label>Notes</label><textarea name="message" rows="5"></textarea></div>
    <input type="hidden" name="industry" value="Financial Services &amp; Investment Technology (FinTech)">
    <input type="hidden" name="source" value="Hire FinTech • Request Program">
    <button class="btn" type="submit">Send Request</button>
  </form>
</section>

<section id="apply" class="section">
  <h2>Apply to Lead a FinTech Team</h2>
  <p style="color:#6b7280;max-width:900px;margin:0 auto 30px;text-align:center;">Only <strong>100 Team Leaders</strong> per industry.</p>
  <form method="post" action="send-mail.php" class="application-form">
    <div class="form-row">
      <div class="field"><label>Full Name</label><input name="name" required></div>
      <div class="field"><label>Email</label><input name="email" type="email" required></div>
    </div>
    <div class="form-row">
      <div class="field"><label>Phone</label><input name="phone" required></div>
      <div class="field"><label>Primary Focus</label><input name="stack" placeholder="Banking, payments, risk, credit…"></div>
    </div>
    <div class="field"><label>Why are you a fit?</label><textarea name="message" rows="5"></textarea></div>
    <input type="hidden" name="industry" value="Financial Services &amp; Investment Technology (FinTech)">
    <input type="hidden" name="source" value="Full Apply • FinTech">
    <button class="btn" type="submit">Submit Application</button>
  </form>
</section>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Financial Services & Investment Technology (FinTech)",
  "description": "Digital banking, payments, fraud/risk and AI credit analytics delivered by 1:50 FinTech pods.",
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
    {"@type": "ListItem", "position": 3, "name": "Financial Services & Investment Technology (FinTech)", "item": "<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>"}
  ]
}
</script>

<?php include 'footer.php'; ?>
