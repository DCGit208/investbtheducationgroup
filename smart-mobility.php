<?php
$page_title = "Logistics & Smart Mobility (Supply Chain 4.0) — Track • Optimize • Automate";
$meta_description = "Fleet telematics, route optimization, warehouse automation, and smart delivery networks — delivered by certified 1:50 logistics pods.";
$og_title = $page_title;
$og_description = $meta_description;
$og_image = "https://og-image.vercel.app/Logistics%20%26%20Smart%20Mobility%20(Supply%20Chain%204.0).png?theme=light&md=1&fontSize=80px";
$og_url = "https://invest.btheducationgroup.com/smart-mobility.php";
include 'header.php';
?>

<?php 
$breadcrumb_items = [
  ['label' => 'Home', 'href' => 'index.php'],
  ['label' => 'Industries', 'href' => 'index.php#industries'],
  ['label' => 'Logistics & Smart Mobility (Supply Chain 4.0)']
];
include 'breadcrumbs.php';
?>


<header>
  <div class="hero">
    <div class="hero-left">
      <h1>Track. Optimize. Automate.<br><strong>Logistics &amp; Smart Mobility (Supply Chain 4.0)</strong></h1>
      <p class="lead">Digitize supply chains end‑to‑end — telematics, routing, WMS/automation and last‑mile delivery — with measurable KPIs and governance via certified <strong>1:50 logistics pods</strong>.</p>
      <div class="cta-row">
        <a class="btn" href="#hire-mobility">Request Logistics Program</a>
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
              <option selected>Logistics &amp; Smart Mobility (Supply Chain 4.0)</option>
              <option>Information Technology</option>
              <option>Intelligent Cloud, Data &amp; AI</option>
              <option>Agricultural Technology (AgriTech)</option>
            </select>
          </div>
          <input type="hidden" name="source" value="Quick Apply • Smart Mobility">
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
    <a class="card" href="#platforms">Platform &amp; Integrations</a>
    <a class="card" href="#packages">Solution Packages</a>
    <a class="card" href="#kpis">KPIs &amp; SLAs</a>
    <a class="card" href="#commercials">Commercials &amp; ROI</a>
    <a class="card" href="#pathways">Certifications &amp; Pathways</a>
    <a class="card" href="#boundaries">Cross-Links</a>
    <a class="card" href="#hire-mobility">Request Program</a>
    <a class="card" href="#apply">Apply</a>
  </div>
  <div class="commercials-footer">
    <div class="commercials-footer-cta">
      <a class="btn" href="#hire-mobility">Discuss Logistics Program</a>
      <a class="btn" href="#apply">Apply as 1:50 Logistics Leader</a>
      <a class="btn" href="docs/smart-mobility-finance-pack.pdf" target="_blank" rel="noopener" download>
        Download Finance Pack (PDF)
      </a>
      <a class="btn" href="docs/smart-mobility-brochure.pdf" target="_blank" rel="noopener" download>
        Download Services Brochure
      </a>
    </div>
    <div class="commercials-footer-note">
      Use the finance pack for deeper modeling and fleet/site rollouts. Custom commercial structures and multi‑site portfolios available.
    </div>
  </div>
</section>

<section id="solutions" class="section">
  <h2>What We Deliver — Logistics &amp; Mobility</h2>
  <div class="grid">
    <div class="card"><h3>Telematics</h3><p>Fleet tracking, driver behavior, maintenance and fuel analytics.</p></div>
    <div class="card"><h3>Routing</h3><p>Optimization, dispatch, ETA and dynamic re‑planning.</p></div>
    <div class="card"><h3>WMS &amp; Automation</h3><p>Warehouse management, scanners, conveyors and robotics.</p></div>
    <div class="card"><h3>Cold Chain</h3><p>Temperature, door and location monitoring with alerts.</p></div>
    <div class="card"><h3>Last‑Mile</h3><p>Delivery apps, proof‑of‑delivery and customer comms.</p></div>
  </div>
</section>

<section id="proof" class="section">
  <h2>Proof &amp; Portfolio — Outcomes We Deliver</h2>
  <div class="grid">
    <div class="card"><h3>Fuel Savings</h3><p>Fuel spend ↓ 16% with route and behavior optimization.</p></div>
    <div class="card"><h3>OTD &amp; SLAs</h3><p>On‑time delivery ↑ 11% with better dispatch/ETA accuracy.</p></div>
    <div class="card"><h3>Inventory Accuracy</h3><p>Cycle counts accuracy ↑ and shrink ↓ 18% with WMS.</p></div>
  </div>
</section>

<section id="team" class="section">
  <h2>1:50 Team — Roles &amp; Delivery Pods</h2>
  <div class="grid">
    <div class="card"><h3>Leadership</h3><ul><li>Logistics Program Lead</li><li>PM / Operations Lead</li></ul></div>
    <div class="card"><h3>Platform</h3><ul><li>Solutions Architect</li><li>Integration Engineer</li><li>SRE</li></ul></div>
    <div class="card"><h3>Data/IoT</h3><ul><li>Data Engineer</li><li>Telemetry/Edge</li><li>BI/Analytics</li></ul></div>
    <div class="card"><h3>Apps</h3><ul><li>Mobile</li><li>Dispatch/Portal</li><li>WMS</li></ul></div>
  </div>
</section>

<section id="platforms" class="section">
  <h2>Platform &amp; Integrations</h2>
  <details class="card"><summary><strong>Telematics</strong></summary><p>Devices, gateways, data ingestion and fleet apps.</p></details>
  <details class="card"><summary><strong>Routing/Dispatch</strong></summary><p>Optimization engines, maps, ETA and driver apps.</p></details>
  <details class="card"><summary><strong>WMS</strong></summary><p>Warehouse systems, scanners, automation interfaces and KPIs.</p></details>
  <details class="card"><summary><strong>Analytics</strong></summary><p>Dashboards, alerts, forecasting and cost reporting.</p></details>
</section>

<section id="packages" class="section">
  <h2>Solution Packages</h2>
  <div class="grid">
    <div class="card"><h3>Telematics Starter</h3><p>4–8 weeks • devices + dashboards • warranty 30 days.</p></div>
    <div class="card"><h3>Routing Launch</h3><p>6–10 weeks • optimization + driver app • warranty 60 days.</p></div>
    <div class="card"><h3>WMS Rollout</h3><p>8–14 weeks • warehouse + automation • warranty 90 days.</p></div>
  </div>
</section>

<section id="kpis" class="section">
  <h2>KPIs &amp; SLAs</h2>
  <div class="grid">
    <div class="card"><h3>Cost</h3><p>Fuel/route costs and utilization.</p></div>
    <div class="card"><h3>Delivery</h3><p>On‑time rate and ETA accuracy.</p></div>
    <div class="card"><h3>Warehouse</h3><p>Throughput and inventory accuracy.</p></div>
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
        <tr><td style="padding:8px;">Telematics</td><td style="padding:8px;">—</td><td style="padding:8px;">$40k–$80k</td><td style="padding:8px;">Devices, ingestion, fleet apps</td></tr>
        <tr><td style="padding:8px;">Routing</td><td style="padding:8px;">—</td><td style="padding:8px;">$45k–$85k</td><td style="padding:8px;">Optimization, dispatch, driver apps</td></tr>
        <tr><td style="padding:8px;">WMS</td><td style="padding:8px;">—</td><td style="padding:8px;">$60k–$110k</td><td style="padding:8px;">Warehouse and automation</td></tr>
      </tbody>
    </table>
    <p class="muted">Ranges depend on fleet size, sites and SLAs.</p>
  </div>
  <div class="card">
    <h3>Leader ROI Ladder (Illustrative)</h3>
    <table style="width:100%;border-collapse:collapse;">
      <thead><tr>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Milestone</th>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Active Commission</th>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Residual (Managed Logistics)</th>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Cumulative Annualized</th>
      </tr></thead>
      <tbody>
        <tr><td style="padding:8px;">Month 3</td><td style="padding:8px;">$14,440</td><td style="padding:8px;">$90k–$180k</td><td style="padding:8px;">$220k–$450k</td></tr>
        <tr><td style="padding:8px;">Month 6</td><td style="padding:8px;">$28,880</td><td style="padding:8px;">$340k–$680k</td><td style="padding:8px;">$850k–$1.7M</td></tr>
        <tr><td style="padding:8px;">Month 12</td><td style="padding:8px;">$44,321</td><td style="padding:8px;">$0.9M–$1.8M</td><td style="padding:8px;">$1.9M+</td></tr>
      </tbody>
    </table>
    <p class="muted">Aligned to recurring telemetry, routing and WMS operations.</p>
  </div>
</section>

<section id="pathways" class="section">
  <h2>Certifications &amp; Pathways</h2>
  <div class="grid">
    <div class="card"><h3>Operations</h3><p>APICS • CSCP • Safety/Compliance</p></div>
    <div class="card"><h3>Data/IoT</h3><p>IoT/Edge • Power BI/Tableau</p></div>
    <div class="card"><h3>Platform</h3><p>Cloud • DevOps/SRE</p></div>
  </div>
</section>

<section id="boundaries" class="section">
  <h2>Cross-Links &amp; Boundaries</h2>
  <div class="grid">
    <a class="card" href="intelligent-cloud.php"><h3>Cloud, Data &amp; AI</h3><p>Data platform and analytics.</p></a>
    <a class="card" href="software-engineering.php"><h3>Software Engineering</h3><p>Apps, portals and integrations.</p></a>
    <a class="card" href="information-technology.php"><h3>IT Operations</h3><p>Networking and endpoint ops.</p></a>
  </div>
</section>

<section id="hire-mobility" class="section">
  <h2>Request a Logistics Program</h2>
  <form method="post" action="send-mail.php" class="application-form">
    <div class="form-row">
      <div class="field"><label>Organization</label><input name="company" required></div>
      <div class="field"><label>Email</label><input name="email" type="email" required></div>
    </div>
    <div class="form-row">
      <div class="field"><label>Scope</label><input name="workload" placeholder="Telematics, routing, WMS, cold chain…"></div>
      <div class="field"><label>Timeline</label><input name="timeline" placeholder="e.g., 60–120 days"></div>
    </div>
    <div class="form-row">
      <div class="field"><label>Fleet/Sites</label><input name="notes" placeholder="# vehicles, sites, warehouses…"></div>
      <div class="field"><label>Budget Range (USD)</label><input name="budget" placeholder="$50k–$800k+"></div>
    </div>
    <input type="hidden" name="industry" value="Logistics &amp; Smart Mobility (Supply Chain 4.0)">
    <input type="hidden" name="source" value="Hire Logistics • Request Program">
    <button class="btn" type="submit">Send Request</button>
  </form>
</section>

<section id="apply" class="section">
  <h2>Apply to Lead a Logistics Team</h2>
  <p style="color:#6b7280;max-width:900px;margin:0 auto 30px;text-align:center;">Only <strong>100 Team Leaders</strong> per industry.</p>
  <form method="post" action="send-mail.php" class="application-form">
    <div class="form-row">
      <div class="field"><label>Full Name</label><input name="name" required></div>
      <div class="field"><label>Email</label><input name="email" type="email" required></div>
    </div>
    <div class="form-row">
      <div class="field"><label>Phone</label><input name="phone" required></div>
      <div class="field"><label>Primary Focus</label><input name="stack" placeholder="Telematics, routing, WMS…"></div>
    </div>
    <div class="field"><label>Why are you a fit?</label><textarea name="message" rows="5"></textarea></div>
    <input type="hidden" name="industry" value="Logistics &amp; Smart Mobility (Supply Chain 4.0)">
    <input type="hidden" name="source" value="Full Apply • Smart Mobility">
    <button class="btn" type="submit">Submit Application</button>
  </form>
</section>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Logistics & Smart Mobility (Supply Chain 4.0)",
  "description": "Telematics, routing, WMS/automation and last‑mile delivery with governance via certified 1:50 logistics pods.",
  "provider": {"@type": "Organization", "name": "Investor Education Program"},
  "areaServed": "Global",
  "url": "<?php echo htmlspecialchars($og_url ?? 'https://invest.btheducationgroup.com/smart-mobility.php', ENT_QUOTES); ?>"
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://invest.btheducationgroup.com/index.php"},
    {"@type": "ListItem", "position": 2, "name": "Industries", "item": "https://invest.btheducationgroup.com/index.php#industries"},
    {"@type": "ListItem", "position": 3, "name": "Logistics & Smart Mobility", "item": "<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>"}
  ]
}
</script>

<?php include 'footer.php'; ?>
