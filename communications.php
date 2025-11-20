<?php
$page_title = "Communications & Satellite Technology (5G / RF / DAS) — Investor Education Program";
$meta_description = "Lead in 5G, B-VoIP, DAS, satellite, and wireless communications. Limited to 100 leaders per industry.";
$og_title = $page_title;
$og_description = $meta_description;
$og_image = "https://og-image.vercel.app/Communications.png?theme=light&md=1&fontSize=80px";
$og_url = "https://invest.btheducationgroup.com/communications.php";
?>
<?php $page_styles = ['assets/css/page/communications.css']; ?>
<?php include 'header.php'; ?>

<?php 
$breadcrumb_items = [
  ['label' => 'Home', 'href' => 'index.php'],
  ['label' => 'Industries', 'href' => 'index.php#industries'],
  ['label' => 'Communications & Satellite']
];
include 'breadcrumbs.php';
?>


<section class="comms container" id="main" role="main">
  <!-- HERO -->
  <header>
    <div class="hero">
      <div class="hero-left">
        <span class="eyebrow">Investor Education • Communications & Satellite</span>
        <h1>Design. Deploy. Optimize.<br><strong>5G • RF • DAS • Satcom</strong></h1>
        <p class="lead">Plan and deliver carrier‑grade wireless — 5G RAN/Core, VoIP/UC, in‑building DAS and satellite backhaul — via certified <strong>1:50 communications pods</strong>.</p>
        <div class="cta-row">
          <a class="btn" href="#apply">Become a Team Leader (1:50)</a>
          <a class="btn-outline" href="#commercials">View Finance Pack & ROI</a>
        </div>
        <div class="stats">
          <div class="stat"><div class="stat-value" data-countup="14440" data-suffix=" USD">0</div><div class="stat-label" style="font-size:13px;white-space:nowrap;">Month‑3 commission</div></div>
          <div class="stat"><div class="stat-value" data-countup="328880" data-suffix=" USD">0</div><div class="stat-label" style="font-size:13px;white-space:nowrap;">Annual residual (managed)</div></div>
          <div class="stat"><div class="stat-value" data-countup="120" data-suffix="+ sites/mo">0</div><div class="stat-label" style="font-size:13px;white-space:nowrap;">Delivery velocity</div></div>
        </div>
      </div>
      <div class="hero-right card">
        <h3>Why Communications Pods Matter</h3>
        <ul>
          <li>RF‑first designs and verified coverage</li>
          <li>Turnkey deployment with safety & QA</li>
          <li>OSS/BSS integration and monitoring</li>
          <li>Sustainable Opex with SLAs</li>
        </ul>
      </div>
    </div>
  </header>

  <!-- QUICK NAV -->
  <section id="nav" class="section quick-nav" role="navigation" aria-label="Section navigation">
    <h2>Quick Navigation</h2>
    <div class="grid">
      <a class="card" href="#solutions">What We Deliver</a>
      <a class="card" href="#proof">Proof & Portfolio</a>
      <a class="card" href="#team">1:50 Team & Roles</a>
      <a class="card" href="#platforms">Platforms & Tooling</a>
      <a class="card" href="#compliance">Compliance & Safety</a>
      <a class="card" href="#packages">Solution Packages</a>
      <a class="card" href="#kpis">KPIs & SLAs</a>
      <a class="card" href="#commercials">Commercials & ROI</a>
      <a class="card" href="#pathways">Certifications & Pathways</a>
      <a class="card" href="#ecosystem">Vendor Ecosystem</a>
      <a class="card" href="#apply">Apply / Hire</a>
    </div>
  </section>

  <!-- SOLUTIONS -->
  <section id="solutions" class="section">
    <h2>What We Deliver — Wireless & Satcom</h2>
    <div class="tile-4">
      <div class="card"><h3>5G RAN</h3><p>Site acquisition, RF planning, eNodeB/gNodeB, integration and tuning.</p></div>
      <div class="card"><h3>Core & IMS</h3><p>5GC/IMS deployment, policy/charging, VoNR/VoLTE enablement.</p></div>
      <div class="card"><h3>DAS & IBW</h3><p>In‑building systems with iBwave‑quality designs and PIM/sweep tests.</p></div>
      <div class="card"><h3>Satellite & Backhaul</h3><p>VSAT, LEO/MEO, microwave/LTE backhaul and redundancy.</p></div>
    </div>
  </section>

  <!-- PROOF -->
  <section id="proof" class="section">
    <h2>Proof & Portfolio — Outcomes We Deliver</h2>
    <div class="tile-3">
      <div class="card"><h3>Coverage</h3><p>Indoor coverage improved from 62% → 94% (post‑DAS).</p></div>
      <div class="card"><h3>Capacity</h3><p>Throughput ↑ 2.3× with carrier aggregation and small cells.</p></div>
      <div class="card"><h3>Availability</h3><p>Backhaul diversity reduces outages by 48%.</p></div>
    </div>
  </section>

  <!-- TEAM -->
  <section id="team" class="section">
    <h2>1:50 Team — Roles & Delivery Pods</h2>
    <div class="tile-4">
      <div class="card"><h3>Leadership</h3><ul><li>Comms Program Lead</li><li>PM / Field Ops</li><li>QA & Audit</li></ul></div>
      <div class="card"><h3>RF/Field</h3><ul><li>RF Engineers</li><li>Riggers/Installers</li><li>Commissioning</li></ul></div>
      <div class="card"><h3>Core/Voice</h3><ul><li>Core/IMS Engineers</li><li>VoIP/UC</li><li>Security</li></ul></div>
      <div class="card"><h3>NOC/OSS</h3><ul><li>NOC Analysts</li><li>OSS/BSS</li><li>Automation</li></ul></div>
    </div>
  </section>

  <!-- PLATFORMS & TOOLING -->
  <section id="platforms" class="section">
    <h2>Platforms & Tooling</h2>
    <details class="card"><summary><strong>RF Planning</strong></summary><p>Propagation models, clutter, drive test, optimization and KPIs.</p></details>
    <details class="card"><summary><strong>Core/IMS</strong></summary><p>Policy, charging, SBCs, media gateways and lawful intercept.</p></details>
    <details class="card"><summary><strong>OSS/BSS</strong></summary><p>Inventory, provisioning, ticketing, telemetry and SLAs.</p></details>
    <details class="card"><summary><strong>Security</strong></summary><p>SIM/eSIM lifecycle, encryption, signaling firewalls and audits.</p></details>
  </section>

  <!-- COMPLIANCE & SAFETY -->
  <section id="compliance" class="section">
    <h2>Compliance & Safety</h2>
    <div class="tile-3">
      <div class="card"><h3>RF Exposure</h3><p>ICNIRP/FCC limits, signage, site access and lock‑out/tag‑out.</p></div>
      <div class="card"><h3>Standards</h3><p>3GPP, ITU, ETSI, local codes and spectrum licensing.</p></div>
      <div class="card"><h3>Field Safety</h3><p>Rigging, working at height, EME safety and HSE plans.</p></div>
    </div>
  </section>

  <!-- PACKAGES -->
  <section id="packages" class="section">
    <h2>Solution Packages</h2>
    <div class="tile-3">
      <div class="card"><h3>DAS Turn‑Up</h3><p>4–8 weeks • survey, design, install, PIM/sweep • 60‑day warranty.</p></div>
      <div class="card"><h3>5G Site Build</h3><p>6–10 weeks • RAN + backhaul + integration • 90‑day warranty.</p></div>
      <div class="card"><h3>Sat Backhaul</h3><p>3–6 weeks • VSAT/LEO link + failover • 60‑day warranty.</p></div>
    </div>
  </section>

  <!-- KPIs -->
  <section id="kpis" class="section">
    <h2>KPIs & SLAs</h2>
    <div class="kpi-grid">
      <div class="card kpi-card"><div class="val">≥ 95%</div><div class="lab">Indoor coverage</div></div>
      <div class="card kpi-card"><div class="val">≤ 1.5%</div><div class="lab">Drop call rate</div></div>
      <div class="card kpi-card"><div class="val">≥ 99.9%</div><div class="lab">Availability</div></div>
      <div class="card kpi-card"><div class="val">≤ 20ms</div><div class="lab">Latency (edge)</div></div>
      <div class="card kpi-card"><div class="val">≤ 24h</div><div class="lab">TTFR (priority)</div></div>
      <div class="card kpi-card"><div class="val">≥ 98%</div><div class="lab">On‑time delivery</div></div>
    </div>
  </section>

  <!-- COMMERCIALS -->
  <section id="commercials" class="section">
    <h2>Commercials — Pod Economics & Leader ROI</h2>
    <div class="card" style="margin:12px 0 18px;">
      <strong>Investor Snapshot</strong>
      <p class="muted" style="margin-top:6px;">Standardized builds and managed services underpin predictable unit economics.</p>
    </div>
    <h3>Pod Economics (Illustrative)</h3>
    <table class="econ-table">
      <tr><th>Pod Type</th><th>Velocity (jobs/mo)</th><th>Monthly Rate (USD)</th><th>Typical Scope</th></tr>
      <tr><td>RAN/DAS</td><td>60–100</td><td>$45k–$90k</td><td>RF, build, commissioning</td></tr>
      <tr><td>Core/Voice</td><td>20–40</td><td>$60k–$110k</td><td>Core/IMS, policy/charging</td></tr>
      <tr><td>Backhaul</td><td>20–40</td><td>$50k–$95k</td><td>Microwave/sat, resilience</td></tr>
    </table>
    <h3 style="margin-top:28px;">Leader ROI Ladder (Illustrative)</h3>
    <table class="roi-table">
      <tr><th>Milestone</th><th>Active Commission</th><th>Residual (Managed)</th><th>Cumulative Annualized</th></tr>
      <tr><td>Month 3</td><td>$14,440</td><td>$120k–$240k</td><td>$300k–$620k</td></tr>
      <tr><td>Month 6</td><td>$28,880</td><td>$280k–$560k</td><td>$760k–$1.4M</td></tr>
      <tr><td>Month 12</td><td>$43,800</td><td>$0.9M–$1.8M</td><td>$1.9M+</td></tr>
    </table>
  </section>

  <!-- CERTIFICATIONS -->
  <section id="pathways" class="section">
    <h2>Certifications & Pathways</h2>
    <div class="tile-3">
      <div class="card"><h3>Wireless/RF</h3><ul><li>CWNA/CWNP</li><li>RF Safety</li><li>DAS/Small Cells</li></ul></div>
      <div class="card"><h3>Core/Voice</h3><ul><li>SBC/IMS</li><li>VoIP/UC</li><li>Security</li></ul></div>
      <div class="card"><h3>Field/HSE</h3><ul><li>Rigging</li><li>Electrical LV</li><li>HSE</li></ul></div>
    </div>
  </section>

  <!-- ECOSYSTEM -->
  <section id="ecosystem" class="section">
    <h2>Vendor Ecosystem</h2>
    <p class="muted">Representative OEMs and platforms used in delivery. Logos shown are indicative.</p>
    <div class="ecosystem-logos">
      <img src="Backups/vendor-logos/cisco.svg" alt="Cisco" loading="lazy" decoding="async">
      <img src="Backups/vendor-logos/juniper.svg" alt="Juniper" loading="lazy" decoding="async">
      <img src="Backups/vendor-logos/aws.svg" alt="AWS" loading="lazy" decoding="async">
      <img src="Backups/vendor-logos/microsoft.svg" alt="Microsoft" loading="lazy" decoding="async">
      <img src="Backups/vendor-logos/default-logo.svg" alt="iBwave (placeholder)" loading="lazy" decoding="async">
    </div>
  </section>

  <!-- APPLY / HIRE -->
  <section id="apply" class="section" style="background:#f9fafb;">
    <h2>Apply / Hire — Communications & Satellite</h2>
    <p class="muted">Join as a <strong>1:50 Team Leader</strong> or <strong>engage a communications pod</strong>.</p>
    <form method="post" action="send-mail.php" class="card apply-form" data-event="form-apply-comms">
      <input type="text" name="company" tabindex="-1" aria-hidden="true" style="position:absolute;left:-10000px;opacity:0;" autocomplete="off">
      <div class="form-row">
        <div class="field"><label for="name">Full Name</label><input type="text" id="name" name="name" required></div>
        <div class="field"><label for="email">Email</label><input type="email" id="email" name="email" required></div>
      </div>
      <div class="form-row">
        <div class="field"><label for="phone">Phone / WhatsApp</label><input type="text" id="phone" name="phone" required></div>
        <div class="field"><label for="iam">I am a</label><select id="iam" name="iam" required>
          <option value="">Select one</option>
          <option value="prospective-leader">Prospective 1:50 Team Leader</option>
          <option value="operator">Operator / Carrier</option>
          <option value="enterprise">Enterprise</option>
          <option value="integrator">System Integrator</option>
          <option value="other">Other</option>
        </select></div>
      </div>
      <div class="form-row">
        <div class="field"><label for="interest">I'm interested in</label><select id="interest" name="interest" required>
          <option value="">Select one</option>
          <option value="join-leadership">Joining the leadership program</option>
          <option value="hire-pod">Hiring a communications pod</option>
          <option value="managed">Managed service (NOC/monitoring)</option>
          <option value="other">Other</option>
        </select></div>
        <div class="field"><label for="scope">Scope</label><input id="scope" name="scope" placeholder="5G RAN, DAS/IBW, Core/IMS, Sat backhaul…"></div>
      </div>
      <div class="field" style="grid-column:1 / -1;"><label for="message">Briefly describe your need</label><textarea id="message" name="message" rows="4"></textarea></div>
      <input type="hidden" name="industry" value="Communications & Satellite Technology (5G / RF / DAS)">
      <input type="hidden" name="source" value="Apply/Hire • Communications">
      <button type="submit" class="btn">Submit</button>
      <p class="muted" style="margin-top:8px;">We respect your privacy. See our <a href="privacy-policy.php">Privacy Policy</a>.</p>
    </form>
  </section>
</section>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Communications & Satellite — 5G / RF / DAS",
  "description": "Design and delivery of 5G RAN/Core, in-building DAS, VoIP/UC, and satellite/microwave backhaul via 1:50 pods.",
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
    {"@type": "ListItem", "position": 3, "name": "Communications & Satellite", "item": "<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>"}
  ]
}
</script>

<?php include 'footer.php'; ?>
