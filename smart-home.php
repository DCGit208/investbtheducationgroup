<?php
$page_title = "Smart Home & Building Automation — Investor Education Program";
$meta_description = "Lead in IoT, alarms, and automation for safer, smarter homes and businesses. Limited to 100 leaders per industry.";
$og_title = $page_title;
$og_description = $meta_description;
$og_image = "https://og-image.vercel.app/Smart%20Home%20%26%20Security.png?theme=light&md=1&fontSize=80px";
$og_url = "https://invest.btheducationgroup.com/smart-home.php";
?>
<?php $page_styles = ['assets/css/page/smart-home.css']; ?>
<?php include 'header.php'; ?>

<?php 
$breadcrumb_items = [
  ['label' => 'Home', 'href' => 'index.php'],
  ['label' => 'Industries', 'href' => 'index.php#industries'],
  ['label' => 'Smart Home & Building Automation']
];
include 'breadcrumbs.php';
?>


<section class="sh container" id="main" role="main">
  <!-- HERO -->
  <header>
    <div class="hero">
      <div class="hero-left">
        <span class="eyebrow">Investor Education • Smart Home & Building Automation</span>
        <h1>Secure. Automate. Optimize.<br><strong>Smart Home & Building Automation</strong></h1>
        <p class="lead">
          Deliver end‑to‑end residential and light‑commercial automation — security/alarms, access, video, lighting, HVAC, energy and voice — via certified <strong>1:50 field pods</strong>.
        </p>
        <div class="cta-row">
          <a class="btn" href="#apply">Become a Team Leader (1:50)</a>
          <a class="btn-outline" href="#commercials">View Finance Pack & ROI</a>
        </div>
        <div class="stats">
          <div class="stat"><div class="stat-value" data-countup="14440" data-suffix=" USD">0</div><div class="stat-label" style="font-size:13px;white-space:nowrap;">Month‑3 commission</div></div>
          <div class="stat"><div class="stat-value" data-countup="228800" data-suffix=" USD">0</div><div class="stat-label" style="font-size:13px;white-space:nowrap;">Annual residual (pods)</div></div>
          <div class="stat"><div class="stat-value" data-countup="2500" data-suffix="+ sites">0</div><div class="stat-label" style="font-size:13px;white-space:nowrap;">Install base potential</div></div>
        </div>
      </div>
      <div class="hero-right card">
        <h3>Why Smart Automation Pods Matter</h3>
        <ul>
          <li>Standardized installs, warranty and SLAs</li>
          <li>Security‑first (alarms, access, video, fire)</li>
          <li>Energy & comfort (lighting, HVAC, EVSE)</li>
          <li>Remote monitoring & upgrades</li>
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
      <a class="card" href="#platforms">Platforms & Topologies</a>
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
    <h2>What We Deliver — Smart Premises</h2>
    <div class="tile-4">
      <div class="card"><h3>Security & Life‑Safety</h3><p>Alarms, intrusion, access control, fire panels and sensors.</p></div>
      <div class="card"><h3>Video & Intercom</h3><p>IP cameras, NVRs, intercoms and privacy‑aware cloud access.</p></div>
      <div class="card"><h3>Lighting & HVAC</h3><p>Zigbee/Z‑Wave/Thread lighting, thermostats and scenes.</p></div>
      <div class="card"><h3>Energy & EVSE</h3><p>Smart meters, load control, PV/BESS integration and EV chargers.</p></div>
    </div>
  </section>

  <!-- PROOF -->
  <section id="proof" class="section">
    <h2>Proof & Portfolio — Outcomes We Deliver</h2>
    <div class="tile-3">
      <div class="card"><h3>Zero False Alarms</h3><p>Event filtering and verification reduce false dispatches by 60%.</p></div>
      <div class="card"><h3>Energy Savings</h3><p>Lighting/HVAC automation cuts energy use by 12–22%.</p></div>
      <div class="card"><h3>Faster Installs</h3><p>Standard playbooks shrink install time by 25–35%.</p></div>
    </div>
  </section>

  <!-- TEAM -->
  <section id="team" class="section">
    <h2>1:50 Team — Roles & Delivery Pods</h2>
    <div class="tile-4">
      <div class="card"><h3>Leadership</h3><ul><li>Smart Home Program Lead</li><li>PM / Dispatcher</li><li>QA & Warranty</li></ul></div>
      <div class="card"><h3>Field</h3><ul><li>Install Technicians</li><li>Security/Fire Techs</li><li>Commissioning</li></ul></div>
      <div class="card"><h3>Networks/IoT</h3><ul><li>Wi‑Fi/PoE</li><li>Controllers/Hubs</li><li>Cloud Integrations</li></ul></div>
      <div class="card"><h3>Support</h3><ul><li>Helpdesk</li><li>RMA/Spares</li><li>Training</li></ul></div>
    </div>
  </section>

  <!-- PLATFORMS -->
  <section id="platforms" class="section">
    <h2>Platforms & Topologies</h2>
    <details class="card"><summary><strong>Security</strong></summary><p>Panels, sensors, access, sirens and monitoring backhaul.</p></details>
    <details class="card"><summary><strong>Automation</strong></summary><p>Hubs/controllers (Zigbee/Z‑Wave/Thread/Matter), scenes and rules.</p></details>
    <details class="card"><summary><strong>Networking</strong></summary><p>Wi‑Fi/PoE, VLANs, secure remote access and updates.</p></details>
    <details class="card"><summary><strong>Energy</strong></summary><p>Sub‑metering, load control, PV/BESS and EV chargers.</p></details>
  </section>

  <!-- PACKAGES -->
  <section id="packages" class="section">
    <h2>Solution Packages</h2>
    <div class="tile-3">
      <div class="card"><h3>Alarm & Access</h3><p>2–4 weeks • intrusion + access • 30‑day warranty.</p></div>
      <div class="card"><h3>Automation Core</h3><p>4–6 weeks • lighting/HVAC + voice • 60‑day warranty.</p></div>
      <div class="card"><h3>Energy & EVSE</h3><p>6–8 weeks • sub‑metering + EV • 90‑day warranty.</p></div>
    </div>
  </section>

  <!-- KPIs -->
  <section id="kpis" class="section">
    <h2>KPIs & SLAs</h2>
    <div class="kpi-grid">
      <div class="card kpi-card"><div class="val">≤ 3%</div><div class="lab">Return rate</div></div>
      <div class="card kpi-card"><div class="val">≤ 48h</div><div class="lab">Warranty visit</div></div>
      <div class="card kpi-card"><div class="val">≥ 4.7★</div><div class="lab">Customer rating</div></div>
      <div class="card kpi-card"><div class="val">≤ 1%</div><div class="lab">False dispatch</div></div>
      <div class="card kpi-card"><div class="val">≥ 98%</div><div class="lab">On‑time install</div></div>
      <div class="card kpi-card"><div class="val">≤ 24h</div><div class="lab">Ticket response</div></div>
    </div>
  </section>

  <!-- COMMERCIALS -->
  <section id="commercials" class="section">
    <h2>Commercials — Pod Economics & Leader ROI</h2>
    <div class="card" style="margin:12px 0 18px;">
      <strong>Investor Snapshot</strong>
      <p class="muted" style="margin-top:6px;">Standardized SKUs and recurring monitoring/services underpin stable unit economics.</p>
    </div>
    <h3>Pod Economics (Illustrative)</h3>
    <table class="econ-table">
      <tr><th>Pod Type</th><th>Velocity (jobs/mo)</th><th>Monthly Rate (USD)</th><th>Typical Scope</th></tr>
      <tr><td>Security</td><td>60–100</td><td>$35k–$70k</td><td>Alarms, access, video, monitoring</td></tr>
      <tr><td>Automation</td><td>40–80</td><td>$45k–$85k</td><td>Lighting, HVAC, voice, scenes</td></tr>
      <tr><td>Energy</td><td>20–40</td><td>$50k–$90k</td><td>Sub‑metering, load control, EVSE</td></tr>
    </table>
    <h3 style="margin-top:28px;">Leader ROI Ladder (Illustrative)</h3>
    <table class="roi-table">
      <tr><th>Milestone</th><th>Active Commission</th><th>Residual (Managed Services)</th><th>Cumulative Annualized</th></tr>
      <tr><td>Month 3</td><td>$14,440</td><td>$120k–$240k</td><td>$300k–$620k</td></tr>
      <tr><td>Month 6</td><td>$28,880</td><td>$300k–$600k</td><td>$800k–$1.5M</td></tr>
      <tr><td>Month 12</td><td>$43,800</td><td>$0.9M–$1.6M</td><td>$1.9M+</td></tr>
    </table>
    <p style="margin-top:10px;"><a class="btn-outline" href="docs/smart-home-brochure.pdf">Download Brochure</a> <a class="btn-outline" href="docs/smart-home-finance-pack.pdf">Download Finance Pack</a></p>
  </section>

  <!-- PATHWAYS -->
  <section id="pathways" class="section">
    <h2>Certifications & Pathways</h2>
    <div class="tile-3">
      <div class="card"><h3>Security</h3><ul><li>Alarm/Intrusion</li><li>Access Control</li><li>Video/Intercom</li></ul></div>
      <div class="card"><h3>Automation/IoT</h3><ul><li>Zigbee/Z‑Wave/Thread</li><li>Matter</li><li>Voice Assistants</li></ul></div>
      <div class="card"><h3>Electrical/HSE</h3><ul><li>Low‑Voltage (LV)</li><li>OSHA/Safety</li><li>Codes & Standards</li></ul></div>
    </div>
  </section>

  <!-- ECOSYSTEM -->
  <section id="ecosystem" class="section">
    <h2>Vendor Ecosystem</h2>
    <p class="muted">Representative OEMs and platforms used in delivery. Logos shown are indicative.</p>
    <div class="ecosystem-logos">
      <img src="Backups/vendor-logos/eta.svg" alt="ETA International" loading="lazy" decoding="async">
      <img src="Backups/vendor-logos/microsoft.svg" alt="Microsoft" loading="lazy" decoding="async">
      <img src="Backups/vendor-logos/aws.svg" alt="AWS" loading="lazy" decoding="async">
      <img src="Backups/vendor-logos/default-logo.svg" alt="KNX (placeholder)" loading="lazy" decoding="async">
      <img src="Backups/vendor-logos/default-logo.svg" alt="Zigbee Alliance (placeholder)" loading="lazy" decoding="async">
    </div>
  </section>

  <!-- APPLY / HIRE -->
  <section id="apply" class="section" style="background:#f9fafb;">
    <h2>Apply / Hire — Smart Home & Building Automation</h2>
    <p class="muted">Join as a <strong>1:50 Team Leader</strong> or <strong>engage a smart automation pod</strong>.</p>
    <form method="post" action="send-mail.php" class="card apply-form" data-event="form-apply-smart-home">
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
          <option value="homeowner">Homeowner</option>
          <option value="small-business">Small Business</option>
          <option value="contractor">Contractor/Integrator</option>
          <option value="other">Other</option>
        </select></div>
      </div>
      <div class="form-row">
        <div class="field"><label for="interest">I'm interested in</label><select id="interest" name="interest" required>
          <option value="">Select one</option>
          <option value="join-leadership">Joining the leadership program</option>
          <option value="hire-pod">Hiring a smart automation pod</option>
          <option value="service-plan">Service/Monitoring Plan</option>
          <option value="other">Other</option>
        </select></div>
        <div class="field"><label for="scope">Scope</label><input id="scope" name="scope" placeholder="Alarms, video, lighting, HVAC, EVSE…"></div>
      </div>
      <div class="field" style="grid-column:1 / -1;"><label for="message">Briefly describe your need</label><textarea id="message" name="message" rows="4"></textarea></div>
      <input type="hidden" name="industry" value="Smart Home & Building Automation">
      <input type="hidden" name="source" value="Apply/Hire • Smart Home">
      <button type="submit" class="btn">Submit</button>
      <p class="muted" style="margin-top:8px;">We respect your privacy. See our <a href="privacy-policy.php">Privacy Policy</a>.</p>
    </form>
  </section>
</section>

 <script type="application/ld+json">
 {
   "@context": "https://schema.org",
   "@type": "Service",
   "name": "Smart Home & Building Automation",
   "description": "Residential and light-commercial security, automation, energy, and monitoring via 1:50 field pods.",
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
    {"@type": "ListItem", "position": 3, "name": "Smart Home & Building Automation", "item": "<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>"}
  ]
}
</script>

 <?php include 'footer.php'; ?>
