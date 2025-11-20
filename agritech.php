<?php
$page_title = "Agricultural Technology (AgriTech) — Sensors • Analytics • Yield";
$meta_description = "Smart farming sensors, telemetry, crop analytics, and traceability — delivered by certified 1:50 AgriTech pods.";
$og_title = $page_title;
$og_description = $meta_description;
$og_image = "https://og-image.vercel.app/Agricultural%20Technology%20(AgriTech).png?theme=light&md=1&fontSize=80px";
$og_url = "https://invest.btheducationgroup.com/agritech.php";
include 'header.php';
?>

<?php 
$breadcrumb_items = [
  ['label' => 'Home', 'href' => 'index.php'],
  ['label' => 'Industries', 'href' => 'index.php#industries'],
  ['label' => 'Agricultural Technology (AgriTech)']
];
include 'breadcrumbs.php';
?>

<header>
  <div class="hero">
    <div class="hero-left">
      <h1>Measure. Optimize. Grow.<br><strong>Agricultural Technology (AgriTech)</strong></h1>
      <p class="lead">Deploy sensors, telemetry and analytics for precision agriculture — water, soil, climate, livestock and supply-chain — with measurable yield and cost outcomes, delivered by certified <strong>1:50 AgriTech pods</strong>.</p>
      <div class="cta-row">
        <a class="btn" href="#hire-agri">Request AgriTech Program</a>
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
              <option selected>Agricultural Technology (AgriTech)</option>
              <option>Intelligent Cloud, Data &amp; AI</option>
              <option>Software &amp; Systems Engineering</option>
              <option>Information Technology</option>
            </select>
          </div>
          <input type="hidden" name="source" value="Quick Apply • AgriTech">
          <button class="btn" type="submit">Apply Now</button>
        </form>
      </div>
    </div>
  </div>
</header>

<section id="nav" class="section">
  <h2>Quick Navigation</h2>
  <div class="grid">
    <a class="card" href="#value">What We Deliver</a>
    <a class="card" href="#proof">Proof &amp; Portfolio</a>
    <a class="card" href="#team">1:50 Team &amp; Roles</a>
    <a class="card" href="#stack">IoT/Data Stack</a>
    <a class="card" href="#packages">Solution Packages</a>
    <a class="card" href="#kpis">KPIs &amp; SLAs</a>
    <a class="card" href="#commercials">Commercials &amp; ROI</a>
    <a class="card" href="#pathways">Certifications &amp; Pathways</a>
    <a class="card" href="#boundaries">Cross-Links</a>
    <a class="card" href="#hire-agri">Request Program</a>
    <a class="card" href="#apply">Apply</a>
  </div>
</section>

<section id="value" class="section">
  <h2>What We Deliver — Precision Agriculture</h2>
  <div class="grid">
    <div class="card"><h3>Sensors &amp; Telemetry</h3><p>Soil moisture, nutrients, weather, water levels, greenhouse and cold-chain.</p></div>
    <div class="card"><h3>Livestock &amp; Assets</h3><p>Tags, gateways, geofencing, health and utilization analytics.</p></div>
    <div class="card"><h3>Yield Analytics</h3><p>Field performance, forecasting, anomaly detection and recommendations.</p></div>
    <div class="card"><h3>Traceability</h3><p>Farm-to-fork provenance, quality data, audits and export compliance.</p></div>
    <div class="card"><h3>Advisory</h3><p>Best-practice cultivation, irrigation plans and agronomic insights.</p></div>
  </div>
</section>

<section id="proof" class="section">
  <h2>Proof &amp; Portfolio — Outcomes We Deliver</h2>
  <div class="grid">
    <div class="card"><h3>Smart Irrigation</h3><p>Water use ↓ 28% with yield maintained; pump runtime analytics.</p></div>
    <div class="card"><h3>Livestock Health</h3><p>Losses ↓ 17% via early alerts; better feed efficiency.</p></div>
    <div class="card"><h3>Cold Chain</h3><p>Waste ↓ 22% with temperature alerts and route optimization.</p></div>
  </div>
</section>

<section id="team" class="section">
  <h2>1:50 Team — Roles &amp; Delivery Pods</h2>
  <div class="grid">
    <div class="card"><h3>Leadership</h3><ul><li>AgriTech Program Lead</li><li>PM / Field Ops Lead</li></ul></div>
    <div class="card"><h3>IoT/Edge</h3><ul><li>Field Technicians</li><li>Edge/Device Engineer</li><li>Network/Connectivity</li></ul></div>
    <div class="card"><h3>Data/AI</h3><ul><li>Data Engineer</li><li>Analytics Developer</li><li>ML/Insights</li></ul></div>
    <div class="card"><h3>App/Integration</h3><ul><li>Mobile/Web</li><li>APIs</li><li>GIS/Maps</li></ul></div>
    <div class="card"><h3>Quality</h3><ul><li>QA</li><li>Support</li><li>Training</li></ul></div>
  </div>
</section>

<section id="stack" class="section">
  <h2>IoT &amp; Data Stack</h2>
  <details class="card"><summary><strong>Devices &amp; Gateways</strong></summary><p>LoRa/Cellular, MQTT/HTTP, firmware, OTA and security.</p></details>
  <details class="card"><summary><strong>Ingestion &amp; Storage</strong></summary><p>Stream/batch processing, time-series DB, lakehouse and schema.</p></details>
  <details class="card"><summary><strong>Analytics &amp; Apps</strong></summary><p>Dashboards, alerts, mobile apps, GIS and offline-first sync.</p></details>
</section>

<section id="packages" class="section">
  <h2>Solution Packages</h2>
  <div class="grid">
    <div class="card"><h3>Greenhouse Kit</h3><p>4–6 weeks • sensors, gateway, dashboard • warranty 60 days.</p></div>
    <div class="card"><h3>Farm Telemetry</h3><p>6–10 weeks • multi-field telemetry, mobile app • warranty 90 days.</p></div>
    <div class="card"><h3>Traceability</h3><p>8–12 weeks • batch/lot tracking and audits • warranty 90 days.</p></div>
  </div>
</section>

<section id="kpis" class="section">
  <h2>KPIs &amp; SLAs</h2>
  <div class="grid">
    <div class="card"><h3>Uptime</h3><p>Sensor uptime targets by field/site.</p></div>
    <div class="card"><h3>Data Freshness</h3><p>Streaming/near-real-time update goals.</p></div>
    <div class="card"><h3>Yield &amp; Cost</h3><p>Yield lift and input cost reduction KPIs.</p></div>
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
        <tr><td style="padding:8px;">IoT/Edge</td><td style="padding:8px;">—</td><td style="padding:8px;">$40k–$80k</td><td style="padding:8px;">Devices, gateways, field ops</td></tr>
        <tr><td style="padding:8px;">Data/Analytics</td><td style="padding:8px;">—</td><td style="padding:8px;">$50k–$90k</td><td style="padding:8px;">Pipelines, dashboards, ML</td></tr>
        <tr><td style="padding:8px;">Apps/Integration</td><td style="padding:8px;">—</td><td style="padding:8px;">$45k–$85k</td><td style="padding:8px;">Mobile, APIs, GIS</td></tr>
      </tbody>
    </table>
    <p class="muted">Ranges depend on acreage, connectivity and service levels.</p>
  </div>
  <div class="card">
    <h3>Leader ROI Ladder (Illustrative)</h3>
    <table style="width:100%;border-collapse:collapse;">
      <thead><tr>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Milestone</th>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Active Commission</th>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Residual (Managed AgriTech)</th>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Cumulative Annualized</th>
      </tr></thead>
      <tbody>
        <tr><td style="padding:8px;">Month 3</td><td style="padding:8px;">$14,440</td><td style="padding:8px;">$90k–$180k</td><td style="padding:8px;">$220k–$450k</td></tr>
        <tr><td style="padding:8px;">Month 6</td><td style="padding:8px;">$28,880</td><td style="padding:8px;">$320k–$640k</td><td style="padding:8px;">$800k–$1.6M</td></tr>
        <tr><td style="padding:8px;">Month 12</td><td style="padding:8px;">$44,321</td><td style="padding:8px;">$0.9M–$1.8M</td><td style="padding:8px;">$1.9M+</td></tr>
      </tbody>
    </table>
    <p class="muted">Aligned to recurring telemetry, analytics and advisory services.</p>
  </div>
  <div class="commercials-footer">
    <div class="commercials-footer-cta">
      <a class="btn" href="#hire-agri">Discuss AgriTech Program</a>
      <a class="btn" href="#apply">Apply as 1:50 AgriTech Leader</a>
      <a class="btn" href="docs/agritech-finance-pack.pdf" target="_blank" rel="noopener" download>
        Download Finance Pack (PDF)
      </a>
      <a class="btn" href="docs/agritech-brochure.pdf" target="_blank" rel="noopener" download>
        Download Services Brochure
      </a>
    </div>
    <div class="commercials-footer-note">
      Use the finance pack for modeling field deployments and multi-farm programs.
    </div>
  </div>
</section>

<section id="pathways" class="section">
  <h2>Certifications &amp; Pathways</h2>
  <div class="grid">
    <div class="card"><h3>IoT/Edge</h3><p>ETA/industry • Embedded • Networking</p></div>
    <div class="card"><h3>Cloud/Data</h3><p>Azure/AWS/GCP • dbt • Power BI/Tableau</p></div>
    <div class="card"><h3>Delivery</h3><p>PMI/PRINCE2 • ITIL • Safety</p></div>
  </div>
</section>

<section id="boundaries" class="section">
  <h2>Cross-Links &amp; Boundaries</h2>
  <div class="grid">
    <a class="card" href="intelligent-cloud.php"><h3>Cloud, Data &amp; AI</h3><p>Data platform and scale.</p></a>
    <a class="card" href="software-engineering.php"><h3>Software Engineering</h3><p>Apps, APIs and integrations.</p></a>
    <a class="card" href="information-technology.php"><h3>IT Operations</h3><p>Network and device ops.</p></a>
  </div>
</section>

<section id="hire-agri" class="section">
  <h2>Request an AgriTech Program</h2>
  <form method="post" action="send-mail.php" class="application-form">
    <div class="form-row">
      <div class="field"><label>Organization</label><input name="company" required></div>
      <div class="field"><label>Email</label><input name="email" type="email" required></div>
    </div>
    <div class="form-row">
      <div class="field"><label>Scope</label><input name="workload" placeholder="Telemetry, analytics, traceability…"></div>
      <div class="field"><label>Timeline</label><input name="timeline" placeholder="e.g., 60–120 days"></div>
    </div>
    <div class="form-row">
      <div class="field"><label>Budget Range (USD)</label><input name="budget" placeholder="$30k–$400k+"></div>
      <div class="field"><label>Notes</label><input name="notes" placeholder="Acreage, current systems, goals…"></div>
    </div>
    <input type="hidden" name="industry" value="Agricultural Technology (AgriTech)">
    <input type="hidden" name="source" value="Hire AgriTech • Request Program">
    <button class="btn" type="submit">Send Request</button>
  </form>
</section>

<section id="apply" class="section">
  <h2>Apply to Lead an AgriTech Team</h2>
  <p style="color:#6b7280;max-width:900px;margin:0 auto 30px;text-align:center;">Only <strong>100 Team Leaders</strong> per industry.</p>
  <form method="post" action="send-mail.php" class="application-form">
    <div class="form-row">
      <div class="field"><label>Full Name</label><input name="name" required></div>
      <div class="field"><label>Email</label><input name="email" type="email" required></div>
    </div>
    <div class="form-row">
      <div class="field"><label>Phone</label><input name="phone" required></div>
      <div class="field"><label>Primary Focus</label><input name="stack" placeholder="IoT, data, apps…"></div>
    </div>
    <div class="field"><label>Why are you a fit?</label><textarea name="message" rows="5"></textarea></div>
    <input type="hidden" name="industry" value="Agricultural Technology (AgriTech)">
    <input type="hidden" name="source" value="Full Apply • AgriTech">
    <button class="btn" type="submit">Submit Application</button>
  </form>
</section>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Agricultural Technology (AgriTech)",
  "description": "Sensors/telemetry, livestock/asset tracking, yield analytics and traceability delivered by 1:50 AgriTech pods.",
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
    {"@type": "ListItem", "position": 3, "name": "Agricultural Technology (AgriTech)", "item": "<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>"}
  ]
}
</script>

<?php include 'footer.php'; ?>
