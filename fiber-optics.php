
<?php
$page_title = "Fiber Optics & Data Cabling — Investor Education Program";
$meta_description = "Enterprise‑grade fiber design, splicing, OTDR, testing, certification, and structured cabling delivered through the 1:50 Investor Education leadership model. FOA, BICSI, ETA pathways.";
$og_title = $page_title;
$og_description = $meta_description;
$og_image = "https://og-image.vercel.app/Fiber%20Optics%20%26%20Data%20Cabling.png?theme=light&md=1&fontSize=80px";
$og_url = "https://invest.btheducationgroup.com/fiber-optics.php";
?>
<?php $page_styles = ['assets/css/page/fiber.css']; ?>
<?php include 'header.php'; ?>

<?php 
$breadcrumb_items = [
  ['label' => 'Home', 'href' => 'index.php'],
  ['label' => 'Industries', 'href' => 'index.php#industries'],
  ['label' => 'Fiber Optics & Data Cabling']
];
include 'breadcrumbs.php';
?>

<section class="fo container" id="main" role="main">

<!-- HERO -->
<header>
  <div class="hero">
    <div class="hero-left">
      <span class="eyebrow">Investor Education • Fiber Optics & Data Cabling</span>
      <h1>Design. Splice. Cable.<br><strong>Enterprise Fiber & Data Cabling Leadership</strong></h1>
      <p class="lead">
        Engineer world‑class <strong>fiber optics and structured data cabling</strong> with a certified <strong>1:50 FOA/BICSI‑aligned pod</strong> delivering campus backbones, industrial OT networks, data centers and carrier‑grade metro rings — with full testing, documentation and audit‑ready reports.
      </p>

      <div class="cta-row">
        <a class="btn" href="#apply?iam=prospective-leader&interest=join-leadership" data-event="cta-hero-leader">Become a Team Leader (1:50)</a>
        <a class="btn-outline" href="#commercials" data-event="cta-hero-finance">View Finance Pack & ROI</a>
        <div class="quick-apply">
        <button type="button" class="quick-apply-toggle" aria-expanded="false" aria-controls="qa-form" data-event="toggle-quick-apply">Quick Apply</button>
        <div id="qa-form" class="quick-apply-form" hidden>
          <div class="field">
            <label for="qa-email" class="muted">Email</label>
            <input type="email" id="qa-email" placeholder="you@example.com">
          </div>
          <div class="field">
            <label for="qa-iam" class="muted">I am a</label>
            <select id="qa-iam">
              <option value="">Select one</option>
              <option value="prospective-leader">Prospective 1:50 Team Leader</option>
              <option value="enterprise-client">Enterprise / Campus Client</option>
              <option value="industrial-client">Industrial / Energy Client</option>
              <option value="telco-client">Telco / ISP</option>
              <option value="other">Other</option>
            </select>
          </div>
          <div class="field">
            <button type="button" class="btn" id="qa-submit" data-event="submit-quick-apply">Go</button>
          </div>
        </div>
        </div>
      </div>

      <div class="stats">
        <div class="stat">
          <div class="stat-value" data-countup="44321" data-suffix=" USD">44,321 USD</div>
          <div class="muted">Team‑Building Commission (Illustrative)</div>
        </div>
        <div class="stat">
          <div class="stat-value" data-countup="2127372" data-suffix=" USD">2,127,372 USD</div>
          <div class="muted">Leader Annual Income Potential</div>
        </div>
        <div class="stat">
          <div class="stat-value" data-countup="63822" data-suffix=" USD">63,822 USD</div>
          <div class="muted">Member Annual Income Potential</div>
        </div>
      </div>
    </div>

    <div class="hero-right card">
      <h3>Why Fiber & Cabling Pods Matter</h3>
      <ul>
        <li>End‑to‑end <strong>OSP, ISP & structured cabling</strong></li>
        <li>FOA/BICSI‑aligned design, splicing & testing</li>
        <li>Tier‑ready certification (TIA‑568 / ISO 11801)</li>
        <li>Documentation, labeling & as‑built drawings</li>
      </ul>
    </div>
  </div>
</header>

<!-- QUICK NAV -->
<a href="#main" class="skip-link">Skip to main content</a>
<section id="nav" class="section quick-nav" role="navigation" aria-label="Section navigation">
  <h2>Quick Navigation</h2>
  <div class="grid">
    <a class="card" href="#portfolio">Delivery Portfolio (A–F)</a>
    <a class="card" href="#solutions">Solutions &amp; Value</a>
    <a class="card" href="#certifications">Certification Ladders</a>
    <a class="card" href="#use-cases">Use Cases</a>
    <a class="card" href="#ecosystem">Vendor Ecosystem</a>
    <a class="card" href="#pods">Pod Composition (1:50)</a>
    <a class="card" href="#tools">Tools &amp; Test Stack</a>
    <a class="card" href="#compliance">Compliance &amp; Safety</a>
    <a class="card" href="#offers">Offer Packages</a>
    <a class="card" href="#kpis">KPIs &amp; Outcomes</a>
    <a class="card" href="#commercials">Commercials &amp; ROI</a>
    <a class="card" href="#leadership">Leadership Journey</a>
    <a class="card" href="#crosslinks">Pathways &amp; Cross‑Links</a>
    <a class="card" href="#apply">Apply / Hire</a>
  </div>
</section>

<!-- DELIVERY PORTFOLIO -->
<section id="portfolio" class="section" style="background:#f9fafb;">
  <h2>Delivery Portfolio — What Your Fiber &amp; Cabling Pod Delivers (A–F)</h2>
  <p class="muted">Accordion view (like healthcare) to reduce visual load. Each pillar expands to show contract line items, value drivers, roles and KPIs.</p>
  <div class="accordion-block">
    <button class="accordion-button" id="acc-A" aria-expanded="false" aria-controls="pillar-A" data-acc-target="pillar-A" data-event="acc-toggle" data-acc-id="A">A. Outside Plant (OSP) Construction</button>
    <div id="pillar-A" class="accordion-panel" role="region" aria-labelledby="acc-A" hidden>
      <ul>
        <li>Aerial & underground build: ducts, handholes, closures</li>
        <li>Route survey, permitting, right‑of‑way coordination</li>
        <li>Duct bank & micro‑duct design for future capacity</li>
        <li>Long‑haul splicing & mid‑span access management</li>
        <li>Full as‑built drawings + labeling & acceptance pack</li>
      </ul>
      <p class="muted"><strong>Value:</strong> Carrier‑grade reliability & low loss for metro / campus backbones.</p>
      <p class="muted"><strong>Roles:</strong> OSP Leads, Splicers, QA Inspectors, Safety Supervisors.</p>
      <p class="muted"><strong>KPIs:</strong> Avg splice loss, build variance %, permit cycle time.</p>
    </div>

    <button class="accordion-button" id="acc-B" aria-expanded="false" aria-controls="pillar-B" data-acc-target="pillar-B" data-event="acc-toggle" data-acc-id="B">B. Inside Plant (ISP) & Structured Cabling</button>
    <div id="pillar-B" class="accordion-panel" role="region" aria-labelledby="acc-B" hidden>
      <ul>
        <li>Fiber & copper backbones, risers, rack & patch layouts</li>
        <li>TIA‑568 / ISO 11801 compliance & labeling (TIA‑606‑B)</li>
        <li>Room CAD, rack elevation & pathway documentation</li>
        <li>Cat6A/Cat7 copper runs + PoE/PoE++ power budget validation</li>
        <li>Moves / Adds / Changes (MAC) program setup</li>
      </ul>
      <p class="muted"><strong>Value:</strong> Standards‑based structured cabling enabling predictable expansion.</p>
      <p class="muted"><strong>Roles:</strong> BICSI Installers, Cabling Techs, CAD & Documentation Officers.</p>
      <p class="muted"><strong>KPIs:</strong> First‑pass install %, labeling accuracy, MAC turnaround time.</p>
    </div>

    <button class="accordion-button" id="acc-C" aria-expanded="false" aria-controls="pillar-C" data-acc-target="pillar-C" data-event="acc-toggle" data-acc-id="C">C. Splicing, OTDR, Tier‑Ready Testing & Acceptance</button>
    <div id="pillar-C" class="accordion-panel" role="region" aria-labelledby="acc-C" hidden>
      <ul>
        <li>Fusion & mechanical splicing + MPO/MTP polarity checks</li>
        <li>OTDR bi‑directional traces, OLTS/LSPM power & loss budgets</li>
        <li>Copper cert (NEXT/PSNEXT, RL, length, TCL) & remediation</li>
        <li>Automated acceptance report & variance closure workflows</li>
        <li>Tier‑ready certification / warranty documentation packs</li>
      </ul>
      <p class="muted"><strong>Value:</strong> Faster acceptance, lower rework, predictable performance baselines.</p>
      <p class="muted"><strong>Roles:</strong> Splicing Specialists, OTDR Analysts, QA Leads.</p>
      <p class="muted"><strong>KPIs:</strong> First‑pass cert %, avg loss dB, remediation cycle time.</p>
    </div>

    <button class="accordion-button" id="acc-D" aria-expanded="false" aria-controls="pillar-D" data-acc-target="pillar-D" data-event="acc-toggle" data-acc-id="D">D. Enterprise & Data Center Fiber</button>
    <div id="pillar-D" class="accordion-panel" role="region" aria-labelledby="acc-D" hidden>
      <ul>
        <li>MDA/HDA/ZDA spine‑leaf design & MPO/MTP trunking</li>
        <li>High‑density harness optimization & migration pathways</li>
        <li>Rack/row/hall expansion & speed upgrades (10G→400G)</li>
        <li>DCIM integration & capacity telemetry handover</li>
        <li>Retrofit / re‑architecture planning for consolidation</li>
      </ul>
      <p class="muted"><strong>Value:</strong> Throughput, scalability & structured growth for mission‑critical workloads.</p>
      <p class="muted"><strong>Roles:</strong> Data Center Fiber Engineers, Cabling Designers, Commissioning Specialists.</p>
      <p class="muted"><strong>KPIs:</strong> Throughput uplift %, port utilization %, upgrade cycle time.</p>
    </div>

    <button class="accordion-button" id="acc-E" aria-expanded="false" aria-controls="pillar-E" data-acc-target="pillar-E" data-event="acc-toggle" data-acc-id="E">E. Industrial OT & Harsh‑Environment Cabling</button>
    <div id="pillar-E" class="accordion-panel" role="region" aria-labelledby="acc-E" hidden>
      <ul>
        <li>Armoured & EMI‑resistant fiber/copper routes</li>
        <li>Redundant OT backbone & segmented control zones</li>
        <li>Environmental sealing, vibration & temperature resilience</li>
        <li>Plant expansion brownfield/greenfield integration</li>
        <li>Predictive monitoring tie‑in for OT events</li>
      </ul>
      <p class="muted"><strong>Value:</strong> Uptime & safety in electrically noisy / harsh industrial sites.</p>
      <p class="muted"><strong>Roles:</strong> OT Fiber Engineers, Industrial Cable Specialists, Field QA & Monitoring Leads.</p>
      <p class="muted"><strong>KPIs:</strong> OT uptime %, incident containment time, environmental failure rate.</p>
    </div>

    <button class="accordion-button" id="acc-F" aria-expanded="false" aria-controls="pillar-F" data-acc-target="pillar-F" data-event="acc-toggle" data-acc-id="F">F. Telco Backbone & Carrier Networks</button>
    <div id="pillar-F" class="accordion-panel" role="region" aria-labelledby="acc-F" hidden>
      <ul>
        <li>Metro rings & long‑haul segment deployment</li>
        <li>Carrier interconnect & peering facility builds</li>
        <li>Redundancy / diversity redesign & low‑loss optimization</li>
        <li>FTTx aggregation & PON feeder integration</li>
        <li>Long‑haul maintenance: splice enclosure audits & repairs</li>
      </ul>
      <p class="muted"><strong>Value:</strong> High‑capacity backbone enabling carrier & ISP growth.</p>
      <p class="muted"><strong>Roles:</strong> OSP Teams, Splice Supervisors, Test Engineers, NOC Field Engineers.</p>
      <p class="muted"><strong>KPIs:</strong> Backbone loss dB, diversity coverage %, mean repair time.</p>
    </div>
  </div>

  
</section>

<!-- SOLUTIONS & VALUE -->
<section id="solutions" class="section">
  <h2>Solutions &amp; Value</h2>
  <div class="tile-4">
    <div class="card">
      <h3>Campus &amp; Enterprise Networks</h3>
      <p>End‑to‑end fiber and data cabling for universities, hospitals, corporate HQs and public campuses — from survey and design to testing and handover.</p>
    </div>
    <div class="card">
      <h3>Industrial &amp; OT Connectivity</h3>
      <p>Hardened fiber paths and structured cabling inside plants, factories and energy sites, designed for uptime and safe integration with industrial control systems.</p>
    </div>
    <div class="card">
      <h3>Data Center &amp; Cloud On‑Ramps</h3>
      <p>High‑density fiber and structured cabling to connect racks, rows, data halls and metro on‑ramps feeding cloud and content platforms.</p>
    </div>
    <div class="card">
      <h3>Telco &amp; Carrier Expansion</h3>
      <p>Construction, splicing, testing and documentation to grow telecom footprints across cities, regions and cross‑border corridors.</p>
    </div>
  </div>
</section>

<!-- USE CASES -->
<section id="use-cases" class="section" style="background:#f9fafb;">
  <h2>Use Cases — Where Your Pod Operates</h2>
  <div class="tile-4">
    <div class="card">
      <h3>University &amp; Hospital Campuses</h3>
      <p>Backbone and building‑to‑building fiber, structured cabling to wards, labs, lecture halls and data rooms, with full labeling and documentation.</p>
    </div>
    <div class="card">
      <h3>Industrial Plants &amp; Energy Sites</h3>
      <p>Redundant OT fiber paths, control‑room connectivity, and rugged cabling for refineries, power plants and manufacturing facilities.</p>
    </div>
    <div class="card">
      <h3>Metros, Telcos &amp; ISPs</h3>
      <p>Metro ring builds, long‑haul spans, FTTx aggregation and carrier‑to‑carrier interconnects with Tier‑ready testing.</p>
    </div>
    <div class="card">
      <h3>Colocation &amp; Data Centers</h3>
      <p>Rack‑to‑rack, row‑to‑row and hall‑to‑hall high‑density connectivity with MPO/MTP systems and optimised patching architectures.</p>
    </div>
  </div>
</section>

<!-- CERTIFICATION LADDERS -->
<section id="certifications" class="section" style="background:#f9fafb;">
  <h2>Certification Ladders — FOA • ETA • BICSI</h2>
  <div class="tile-3">
    <div class="card">
      <h3>FOA Pathway</h3>
      <ul>
        <li>CFOT — Fiber Optics Technician</li>
        <li>CFOS/S — Splicing Specialist</li>
        <li>CFOS/T — Testing &amp; OTDR</li>
        <li>CFOS/O — Outside Plant</li>
        <li>CFOS/D — Design Specialist</li>
      </ul>
    </div>
    <div class="card">
      <h3>ETA International</h3>
      <ul>
        <li>FOI — Fiber Optics Installer</li>
        <li>FOT — Fiber Optics Technician</li>
        <li>OSP — Outside Plant Specialist</li>
      </ul>
    </div>
    <div class="card">
      <h3>BICSI Track</h3>
      <ul>
        <li>Installer 1 &amp; Installer 2</li>
        <li>Technician</li>
        <li>RCDD — Registered Communications Distribution Designer</li>
      </ul>
    </div>
  </div>
</section>

<!-- VENDOR ECOSYSTEM -->
<section id="ecosystem" class="section">
  <h2>Vendor Ecosystem</h2>
  <p class="muted">Aligned with leading fiber, cabling and test equipment manufacturers.</p>
  <div class="ecosystem-logos">
    <img src="Backups/vendor-logos/corning.jpg" alt="Corning" loading="lazy" decoding="async">
    <img src="Backups/vendor-logos/prysmian.svg" alt="Prysmian" loading="lazy" decoding="async">
    <img src="Backups/vendor-logos/commscope.png" alt="CommScope" loading="lazy" decoding="async">
    <img src="Backups/vendor-logos/belden.jpg" alt="Belden" loading="lazy" decoding="async">
    <img src="Backups/vendor-logos/Fluke.webp" alt="Fluke Networks" loading="lazy" decoding="async">
    <img src="Backups/vendor-logos/exfo.png" alt="EXFO" loading="lazy" decoding="async">
    <img src="Backups/vendor-logos/viavi.jpg" alt="VIAVI" loading="lazy" decoding="async">
    <!-- Standards & Certification Bodies -->
    <img src="Backups/vendor-logos/foa.png" alt="FOA – Fiber Optic Association" loading="lazy" decoding="async">
    <img src="Backups/vendor-logos/bicsi.png" alt="BICSI" loading="lazy" decoding="async">
    <img src="Backups/vendor-logos/eta.svg" alt="ETA International" loading="lazy" decoding="async">
  </div>
</section>

<!-- TOOLS & TEST STACK -->
<section id="tools" class="section" style="background:#f9fafb;">
  <h2>Tools &amp; Test Stack</h2>
  <div class="tile-3">
    <div class="card">
      <h3>Testing &amp; Certification</h3>
      <ul>
        <li>OTDR platforms (EXFO, VIAVI)</li>
        <li>OLTS / LSPM &amp; Tier‑ready testers</li>
        <li>Encircled flux compliant launch cords</li>
        <li>Automatic report generation &amp; trace archiving</li>
      </ul>
    </div>
    <div class="card">
      <h3>Installation &amp; Splicing</h3>
      <ul>
        <li>Fusion splicers &amp; cleavers</li>
        <li>High‑precision strippers &amp; tools</li>
        <li>Patch panels, enclosures, fiber shelves</li>
        <li>Labeling systems &amp; cable management</li>
      </ul>
    </div>
    <div class="card">
      <h3>Design, Docs &amp; Monitoring</h3>
      <ul>
        <li>CAD for route &amp; rack layouts</li>
        <li>Documentation &amp; as‑built packages</li>
        <li>Monitoring integrations for OT/NOC teams</li>
        <li>Change control &amp; lifecycle tracking</li>
      </ul>
    </div>
  </div>
</section>

<!-- COMPLIANCE & SAFETY -->
<section id="compliance" class="section">
  <h2>Compliance &amp; Safety</h2>
  <div class="tile-3">
    <div class="card">
      <h3>Standards Alignment</h3>
      <ul>
        <li>TIA‑568 / ISO 11801 structured cabling</li>
        <li>TIA‑569 pathways &amp; spaces</li>
        <li>NEC / local electrical codes (coordination)</li>
        <li>FOA best practices &amp; recommendations</li>
      </ul>
    </div>
    <div class="card">
      <h3>Safety &amp; Work Practices</h3>
      <ul>
        <li>Job hazard analysis &amp; risk assessments</li>
        <li>Confined space &amp; working at height alignment</li>
        <li>Fiber scrap management &amp; eye‑safety training</li>
        <li>Toolbox talks &amp; safety drills with clients</li>
      </ul>
    </div>
    <div class="card">
      <h3>Documentation &amp; Audit Trails</h3>
      <ul>
        <li>Method statements &amp; work procedures</li>
        <li>Test reports, traces &amp; acceptance sign‑offs</li>
        <li>As‑built drawings &amp; labeling schedules</li>
        <li>Change logs &amp; revision control</li>
      </ul>
    </div>
  </div>
</section>

<!-- OFFER PACKAGES -->
<section id="offers" class="section" style="background:#f9fafb;">
  <h2>Offer Packages — How Clients Engage</h2>
  <div class="tile-3">
    <div class="card">
      <h3>Assessment &amp; Certification</h3>
      <p>Short‑term engagements to test, certify and document existing fiber and structured cabling assets.</p>
      <ul>
        <li>OTDR &amp; Tier‑ready testing</li>
        <li>Remediation recommendations</li>
        <li>Updated diagrams &amp; reports</li>
      </ul>
    </div>
    <div class="card">
      <h3>Project Delivery Pod</h3>
      <p>Full project teams to design, build, splice, test and hand over OSP/ISP and data center connectivity.</p>
      <ul>
        <li>Fixed scope &amp; timeline</li>
        <li>Dedicated pod &amp; supervision</li>
        <li>Milestone‑based billing</li>
      </ul>
    </div>
    <div class="card">
      <h3>Managed Fiber &amp; Cabling Services</h3>
      <p>Ongoing lifecycle support with SLAs — moves/adds/changes, troubleshooting and growth projects.</p>
      <ul>
        <li>Monthly retainer + call‑off fees</li>
        <li>Document upkeep &amp; traceability</li>
        <li>Integration with NOC/OT teams</li>
      </ul>
    </div>
  </div>
</section>

<!-- KPIs & OUTCOMES -->
<section id="kpis" class="section">
  <h2>KPIs &amp; Outcomes</h2>
  <!-- Numeric KPI grid (3x2) -->
  <div class="kpi-grid">
    <div class="card kpi-card"><div class="val">&lt;0.35 dB</div><div class="lab">Avg splice loss</div></div>
    <div class="card kpi-card"><div class="val">&gt;95%</div><div class="lab">First‑pass cert</div></div>
    <div class="card kpi-card"><div class="val">&gt;99.99%</div><div class="lab">Core uptime</div></div>
    <div class="card kpi-card"><div class="val">−30–45%</div><div class="lab">MTTR reduction</div></div>
    <div class="card kpi-card"><div class="val">&lt;2.5%</div><div class="lab">Warranty rework</div></div>
    <div class="card kpi-card"><div class="val">&gt;85%</div><div class="lab">Tech utilization</div></div>
  </div>
  <div class="tile-3">
    <div class="card">
      <h3>Technical KPIs</h3>
      <ul>
        <li>Loss budgets consistently within design targets</li>
        <li>OTDR traces clean and documented per link</li>
        <li>Tier‑ready certification across defined segments</li>
      </ul>
    </div>
    <div class="card">
      <h3>Operational KPIs</h3>
      <ul>
        <li>On‑time delivery against project baselines</li>
        <li>Mean‑time‑to‑repair (MTTR) for fiber faults</li>
        <li>MAC (moves/adds/changes) turnaround times</li>
      </ul>
    </div>
    <div class="card">
      <h3>Business Outcomes</h3>
      <ul>
        <li>Higher network uptime and throughput</li>
        <li>Better audit scores and compliance posture</li>
        <li>Reduced rework and lifecycle cost</li>
      </ul>
    </div>
  </div>
</section>

<!-- POD COMPOSITION -->
<section id="pods" class="section" style="background:#f9fafb;">
  <h2>Pod Composition (1:50)</h2>
  <p class="muted">A full 1:50 fiber optics &amp; data cabling pod built for enterprise, industrial and carrier‑grade work.</p>
  <div class="tile-4">
    <div class="card">
      <h3>Leadership &amp; Design (5)</h3>
      <ul>
        <li>1× Pod Leader (Investor Education)</li>
        <li>2× Fiber &amp; Cabling Design Engineers</li>
        <li>2× Project / Construction Managers</li>
      </ul>
    </div>
    <div class="card">
      <h3>OSP &amp; Field Construction (18)</h3>
      <ul>
        <li>OSP Construction Supervisors</li>
        <li>Duct &amp; cable crews</li>
        <li>Safety &amp; logistics coordination</li>
      </ul>
    </div>
    <div class="card">
      <h3>Splicing, Testing &amp; QA (15)</h3>
      <ul>
        <li>Fusion Splicing Specialists</li>
        <li>OTDR &amp; Tier‑ready Test Engineers</li>
        <li>Quality &amp; documentation reviewers</li>
      </ul>
    </div>
    <div class="card">
      <h3>ISP, Cabling &amp; Documentation (12)</h3>
      <ul>
        <li>Structured cabling installers</li>
        <li>Rack/room technicians &amp; labelers</li>
        <li>CAD &amp; as‑built documentation team</li>
      </ul>
    </div>
  </div>
</section>

<!-- COMMERCIALS -->
<section id="commercials" class="section">
  <h2>Commercials — Pod Economics &amp; Leader ROI</h2>
  <div class="card" style="margin:12px 0 18px;">
    <strong>Investor Snapshot</strong>
    <p class="muted" style="margin-top:6px;">
      Residual revenue stacking (Design → Build → Cert → Ops → MAC → Expansion), high utilization, low rework %, upgrade velocity, and diversification across carrier and data center programs underpin attractive unit economics.
    </p>
  </div>

  <h3>Pod Economics (Illustrative)</h3>
  <table class="econ-table">
    <tr>
      <th>Pod Type</th>
      <th>Velocity (pts/mo)</th>
      <th>Monthly Rate (USD)</th>
      <th>Typical Scope</th>
    </tr>
    <tr>
      <td>Campus / Enterprise</td>
      <td>80–120</td>
      <td>$60k–$100k</td>
      <td>Backbone, risers, structured cabling &amp; certification</td>
    </tr>
    <tr>
      <td>Industrial / OT</td>
      <td>90–130</td>
      <td>$70k–$115k</td>
      <td>Harsh‑environment fiber, OT redundancy &amp; upgrades</td>
    </tr>
    <tr>
      <td>Telco / Carrier</td>
      <td>100–150</td>
      <td>$85k–$150k</td>
      <td>Metro rings, long‑haul segments, interconnect builds</td>
    </tr>
  </table>

  <h3 style="margin-top:28px;">Leader ROI Ladder (Illustrative)</h3>
  <table class="roi-table">
    <tr>
      <th>Milestone</th>
      <th>Active Commission</th>
      <th>Residual (Managed Services)</th>
      <th>Cumulative Annualized</th>
    </tr>
    <tr>
      <td>Month 3</td>
      <td>$14,440</td>
      <td>$120k–$240k</td>
      <td>$300k–$600k</td>
    </tr>
    <tr>
      <td>Month 6</td>
      <td>$28,880</td>
      <td>$480k–$960k</td>
      <td>$1.0M–$2.0M</td>
    </tr>
    <tr>
      <td>Month 12</td>
      <td>$44,321</td>
      <td>$1.2M–$2.4M</td>
      <td>$2.1M+</td>
    </tr>
  </table>
</section>

<!-- LEADERSHIP JOURNEY -->
<section id="leadership" class="section" style="background:#f9fafb;">
  <h2>How Fiber &amp; Cabling 1:50 Leadership Works</h2>
  <div class="journey-steps">
    <div class="step">
      <strong>Train</strong><br>
      Complete FOA/ETA/BICSI pathways plus the HEXAD mentoring framework for personal, professional and work‑production growth.
    </div>
    <div class="step">
      <strong>Build</strong><br>
      Recruit and mentor a 1:50 pod of OSP, ISP, splicing, testing and documentation talent across campuses, plants and telco projects.
    </div>
    <div class="step">
      <strong>Deploy</strong><br>
      Deliver multi‑site programs — campuses, data centers, industrial OT and carrier networks — under clear SLAs and KPIs.
    </div>
    <div class="step">
      <strong>Earn</strong><br>
      Combine active team‑building commission with multi‑year residual revenue from managed fiber &amp; cabling services.
    </div>
  </div>
</section>

<!-- PATHWAYS & CROSS-LINKS -->
<section id="crosslinks" class="section">
  <h2>Pathways &amp; Cross‑Links</h2>
  <p class="muted">
    Fiber Optics &amp; Data Cabling intersects with other Investor Education sectors:
  </p>
  <ul>
    <li><strong>Information Technology (Operations &amp; Infrastructure):</strong> Campus LAN, Wi‑Fi and core routing that depend on solid fiber &amp; cabling foundations.</li>
    <li><strong>Communications &amp; Satellite:</strong> Backhaul &amp; terrestrial connectivity for microwave, satellite and 5G deployments.</li>
    <li><strong>Manufacturing &amp; Industrial Systems:</strong> OT networks, control rooms and safety systems that ride on hardened fiber paths.</li>
    <li><strong>Intelligent Cloud, Data &amp; AI:</strong> Data center and cloud on‑ramp fiber that feeds analytics, AI and core workloads.</li>
  </ul>
</section>

<!-- APPLY / HIRE -->
<section id="apply" class="section" style="background:#f9fafb;">
  <h2>Apply / Hire — Fiber Optics &amp; Data Cabling</h2>
  <p class="muted">
    Use this form to <strong>join as a 1:50 Team Leader</strong> or to <strong>engage a fiber &amp; data cabling pod</strong> for your organization.
  </p>
  <form method="post" action="submit-form.php" class="card apply-form" data-event="form-apply">
    <input type="text" name="company" tabindex="-1" aria-hidden="true" style="position:absolute;left:-10000px;opacity:0;" autocomplete="off">
    <div class="form-row">
      <div class="field">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="field">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
    </div>
    <div class="form-row">
      <div class="field">
        <label for="phone">Phone / WhatsApp</label>
        <input type="text" id="phone" name="phone" required>
      </div>
      <div class="field">
        <label for="iam">I am a</label>
        <select id="iam" name="iam" required>
          <option value="">Select one</option>
          <option value="prospective-leader">Prospective 1:50 Team Leader</option>
          <option value="enterprise-client">Enterprise / Campus Client</option>
          <option value="industrial-client">Industrial / Energy Client</option>
          <option value="telco-client">Telco / ISP</option>
          <option value="other">Other</option>
        </select>
      </div>
    </div>
    <div class="form-row">
      <div class="field" style="grid-column:1 / -1;">
        <label for="interest">I'm interested in</label>
        <select id="interest" name="interest" required>
          <option value="">Select one</option>
          <option value="join-leadership">Joining the Investor Education leadership program</option>
          <option value="hire-pod">Hiring a fiber &amp; data cabling pod</option>
          <option value="joint-venture">Joint venture / partnership</option>
          <option value="other">Other</option>
        </select>
      </div>
    </div>
    <div class="field" style="grid-column:1 / -1;">
      <label for="message">Briefly describe your need</label>
      <textarea id="message" name="message" rows="4"></textarea>
    </div>
    <button type="submit" class="btn">Submit</button>
    <p class="muted" style="margin-top:8px;">We respect your privacy. See our <a href="privacy-policy.php">Privacy Policy</a>.</p>
  </form>
</section>

</section>

<script>
// Accordion interactions for Delivery Portfolio (A–F)
(function(){
  const buttons = document.querySelectorAll('.fo .accordion-button');
  if(!buttons.length) return;
  buttons.forEach(btn => {
    btn.addEventListener('click', () => {
      const targetId = btn.getAttribute('data-acc-target');
      const panel = document.getElementById(targetId);
      const expanded = btn.getAttribute('aria-expanded') === 'true';
      // Close other panels
      buttons.forEach(b => {
        if(b!==btn){
          b.setAttribute('aria-expanded','false');
          const pid=b.getAttribute('data-acc-target');
          const p=document.getElementById(pid);
          if(p){ p.hidden=true; p.setAttribute('aria-hidden','true'); }
        }
      });
      // Toggle current
      btn.setAttribute('aria-expanded', expanded ? 'false' : 'true');
      if(panel){ panel.hidden = expanded; panel.setAttribute('aria-hidden', expanded ? 'true' : 'false'); }
    });
  });
})();

// Quick Apply toggle + submit (builds URL params, pre-fills main form)
(function(){
  const toggle = document.querySelector('.fo .quick-apply-toggle');
  const form = document.getElementById('qa-form');
  if(toggle && form){
    toggle.addEventListener('click', () => {
      const open = toggle.getAttribute('aria-expanded') === 'true';
      toggle.setAttribute('aria-expanded', open ? 'false' : 'true');
      form.hidden = open;
      form.style.display = open ? 'none' : 'flex';
    });
  }
  const submit = document.getElementById('qa-submit');
  if(submit){
    submit.addEventListener('click', () => {
      const email = document.getElementById('qa-email')?.value || '';
      const iam = document.getElementById('qa-iam')?.value || '';
      const url = new URL(window.location.href);
      if(email) url.searchParams.set('email', email);
      if(iam) url.searchParams.set('iam', iam);
      url.searchParams.set('interest', iam && iam.includes('client') ? 'hire-pod' : 'join-leadership');
      url.hash = 'apply';
      window.location.href = url.toString();
    });
  }
})();

// Auto-fill main form from URL params
(function(){
  const params = new URLSearchParams(window.location.search);
  const email = params.get('email');
  const iam = params.get('iam');
  const interest = params.get('interest');
  if(email){ const el=document.getElementById('email'); if(el) el.value=email; }
  if(iam){ const el=document.getElementById('iam'); if(el) el.value=iam; }
  if(interest){ const el=document.getElementById('interest'); if(el) el.value=interest; }
})();

// Count-up animation for hero stats
(function(){
  const els = document.querySelectorAll('[data-countup]');
  if(!('IntersectionObserver' in window) || !els.length) return;
  const animate = (el) => {
    const target = parseInt(el.getAttribute('data-countup'), 10) || 0;
    const suffix = el.getAttribute('data-suffix') || '';
    const dur = 1200; // ms
    const start = performance.now();
    const startVal = 0;
    const step = (t) => {
      const p = Math.min(1, (t - start)/dur);
      const v = Math.floor(startVal + (target - startVal) * p);
      el.textContent = v.toLocaleString() + (suffix ? ` ${suffix.trim()}` : '');
      if(p < 1) requestAnimationFrame(step);
    };
    requestAnimationFrame(step);
  };
  const io = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if(e.isIntersecting){ animate(e.target); io.unobserve(e.target); }
    });
  }, { threshold: 0.4 });
  els.forEach(el => io.observe(el));
})();

// Add a simple sticky CTA for mobile users
(function(){
  const cta = document.createElement('div');
  cta.className = 'sticky-cta';
  cta.innerHTML = '<a href="#apply" data-event="sticky-cta-apply">Apply / Hire</a>';
  document.body.appendChild(cta);
})();
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Fiber Optics & Data Cabling",
  "description": "Enterprise‑grade fiber design, splicing, OTDR, testing, certification, and structured cabling delivered through the 1:50 leadership model.",
  "provider": {
    "@type": "Organization",
    "name": "Investor Education Program"
  },
  "areaServed": "Global",
  "url": "<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>",
  "brand": {
    "@type": "Brand",
    "name": "FOA / BICSI / ETA aligned"
  }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://invest.btheducationgroup.com/index.php"},
    {"@type": "ListItem", "position": 2, "name": "Industries", "item": "https://invest.btheducationgroup.com/index.php#industries"},
    {"@type": "ListItem", "position": 3, "name": "Fiber Optics & Data Cabling", "item": "<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>"}
  ]
}
</script>

<?php include 'footer.php'; ?>
