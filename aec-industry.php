<?php
$page_title = "Architecture, Engineering & Construction (AEC) — Investor Education Program";
$meta_description = "BIM, coordination, codes & compliance, and program delivery for buildings & infrastructure via a 1:50 pod model. Transparent economics and quality controls.";
$og_title = $page_title;
$og_description = $meta_description;
$og_image = "https://og-image.vercel.app/Architecture,%20Engineering%20%26%20Construction.png?theme=light&md=1&fontSize=80px";
$og_url = "https://invest.btheducationgroup.com/aec-industry.php";
// Page-scoped CSS bundle for AEC
$page_styles = ['assets/css/page/aec.css'];
?>
<?php include 'header.php'; ?>

<?php 
$breadcrumb_items = [
  ['label' => 'Home', 'href' => 'index.php'],
  ['label' => 'Industries', 'href' => 'index.php#industries'],
  ['label' => 'Architecture, Engineering & Construction (AEC)']
];
include 'breadcrumbs.php';
?>

<section class="aec container" id="main" role="main">

<!-- HERO -->
<header>
  <div class="hero">
    <div class="hero-left">
      <span class="eyebrow">Investor Education • AEC</span>
      <h1>Design. Coordinate. Deliver.<br><strong>Architecture, Engineering & Construction Leadership</strong></h1>
      <p class="lead">Execute <strong>BIM, coordination, codes &amp; program delivery</strong> for buildings and infrastructure — with quality, safety and commercial control — through a certified <strong>1:50 pod</strong>.</p>
      <div class="cta-row">
        <a class="btn" href="#apply?iam=prospective-leader&interest=join-leadership" data-event="cta-hero-leader">Become a Team Leader (1:50)</a>
        <a class="btn-outline" href="#commercials" data-event="cta-hero-finance">View Finance Pack & ROI</a>
        <div class="quick-apply">
          <button type="button" class="quick-apply-toggle" aria-expanded="false" aria-controls="qa-form" data-event="toggle-quick-apply">Quick Apply</button>
          <div id="qa-form" class="quick-apply-form" hidden>
            <div class="field"><label for="qa-email" class="muted">Email</label><input type="email" id="qa-email" placeholder="you@example.com"></div>
            <div class="field"><label for="qa-iam" class="muted">I am a</label><select id="qa-iam"><option value="">Select one</option><option value="prospective-leader">Prospective 1:50 Team Leader</option><option value="enterprise-client">Owner / Developer</option><option value="industrial-client">Contractor / Subcontractor</option><option value="other">Other</option></select></div>
            <div class="field"><button type="button" class="btn" id="qa-submit" data-event="submit-quick-apply">Go</button></div>
          </div>
        </div>
      </div>
      <div class="stats">
        <div class="stat"><div class="stat-value" data-countup="2500000" data-suffix=" m²">2,500,000 m²</div><div class="muted">BIM Modeled</div></div>
        <div class="stat"><div class="stat-value" data-countup="820" data-suffix=" RFIs">820 RFIs</div><div class="muted">Resolved</div></div>
        <div class="stat"><div class="stat-value" data-countup="125" data-suffix=" projects">125 projects</div><div class="muted">Delivered</div></div>
      </div>
    </div>
    <div class="hero-right card">
      <h3>Why AEC Pods Matter</h3>
      <ul>
        <li>Coordination clarity reduces rework and change orders</li>
        <li>Standards, codes and safety are embedded</li>
        <li>Predictable delivery and commercial control</li>
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
    <a class="card" href="#methodology">Delivery Methodology</a>
    <a class="card" href="#sustainability">Sustainability &amp; ESG</a>
    <a class="card" href="#risk-controls">Risk &amp; Controls</a>
    <a class="card" href="#digital-twin">Reality Capture &amp; Digital Twin</a>
    <a class="card" href="#pods">Pod Composition (1:50)</a>
    <a class="card" href="#tools">Tools &amp; Docs Stack</a>
    <a class="card" href="#compliance">Compliance &amp; Safety</a>
    <a class="card" href="#offers">Offer Packages</a>
    <a class="card" href="#kpis">KPIs &amp; Outcomes</a>
    <a class="card" href="#commercials">Commercials &amp; ROI</a>
    <a class="card" href="#leadership">Leadership Journey</a>
    <a class="card" href="#crosslinks">Pathways &amp; Cross‑Links</a>
    <a class="card" href="#proof">Proof &amp; Testimonials</a>
    <a class="card" href="#apply">Apply / Hire</a>
  </div>
</section>

<!-- DELIVERY PORTFOLIO -->
<section id="portfolio" class="section" style="background:#f9fafb;">
  <h2>Delivery Portfolio — What Your AEC Pod Delivers (A–F)</h2>
  <p class="muted">Accordion view for scope, roles and KPIs.</p>
  <div class="accordion-block">
    <button class="accordion-button" id="acc-A" aria-expanded="false" aria-controls="pillar-A" data-acc-target="pillar-A" data-event="acc-toggle" data-acc-id="A">A. BIM &amp; Coordination</button>
    <div id="pillar-A" class="accordion-panel" role="region" aria-labelledby="acc-A" hidden>
      <ul>
        <li>Authoring (Revit), clash detection (Navisworks), LOD and BEP</li>
        <li>2D sheets, 3D views, 4D/5D links to schedule &amp; cost</li>
        <li>Shop drawings, as‑builts and COBie/handover data</li>
      </ul>
      <p class="muted"><strong>KPIs:</strong> Clash density, RFI count, rework rate.</p>
    </div>
    <button class="accordion-button" id="acc-B" aria-expanded="false" aria-controls="pillar-B" data-acc-target="pillar-B" data-event="acc-toggle" data-acc-id="B">B. Design &amp; Engineering</button>
    <div id="pillar-B" class="accordion-panel" role="region" aria-labelledby="acc-B" hidden>
      <ul>
        <li>Architectural, structural and MEP design packages</li>
        <li>Value engineering, constructability and alternatives</li>
        <li>Peer review and compliance checks</li>
      </ul>
      <p class="muted"><strong>KPIs:</strong> Design variance %, RFIs from design, approvals cycle time.</p>
    </div>
    <button class="accordion-button" id="acc-C" aria-expanded="false" aria-controls="pillar-C" data-acc-target="pillar-C" data-event="acc-toggle" data-acc-id="C">C. Planning &amp; Controls</button>
    <div id="pillar-C" class="accordion-panel" role="region" aria-labelledby="acc-C" hidden>
      <ul>
        <li>Schedules (4D), cost control (5D), earned value (EVM)</li>
        <li>Risk registers, change control and reporting</li>
        <li>Claims support and delay analysis</li>
      </ul>
      <p class="muted"><strong>KPIs:</strong> SPI/CPI, change order %, delay days.</p>
    </div>
    <button class="accordion-button" id="acc-D" aria-expanded="false" aria-controls="pillar-D" data-acc-target="pillar-D" data-event="acc-toggle" data-acc-id="D">D. Construction &amp; QA/QC</button>
    <div id="pillar-D" class="accordion-panel" role="region" aria-labelledby="acc-D" hidden>
      <ul>
        <li>Site logistics, supervision and progress tracking</li>
        <li>Inspection &amp; test plans, quality audits and handover</li>
        <li>Defects closeout and warranties</li>
      </ul>
      <p class="muted"><strong>KPIs:</strong> NCR rate, first‑time pass %, rework hours.</p>
    </div>
    <button class="accordion-button" id="acc-E" aria-expanded="false" aria-controls="pillar-E" data-acc-target="pillar-E" data-event="acc-toggle" data-acc-id="E">E. Safety &amp; Compliance</button>
    <div id="pillar-E" class="accordion-panel" role="region" aria-labelledby="acc-E" hidden>
      <ul>
        <li>HSE plans, toolbox talks, permits to work</li>
        <li>Codes and standards conformance and audits</li>
        <li>Incident investigation and corrective actions</li>
      </ul>
      <p class="muted"><strong>KPIs:</strong> TRIR, LTIFR, audit scores.</p>
    </div>
    <button class="accordion-button" id="acc-F" aria-expanded="false" aria-controls="pillar-F" data-acc-target="pillar-F" data-event="acc-toggle" data-acc-id="F">F. Handover &amp; Operations</button>
    <div id="pillar-F" class="accordion-panel" role="region" aria-labelledby="acc-F" hidden>
      <ul>
        <li>Commissioning plans and tests</li>
        <li>As‑built documentation and O&amp;M manuals</li>
        <li>Digital twins, CMMS/EAM integration</li>
      </ul>
      <p class="muted"><strong>KPIs:</strong> Punch‑list burn down, O&amp;M readiness.</p>
    </div>
  </div>
</section>

<!-- SOLUTIONS & VALUE -->
<section id="solutions" class="section">
  <h2>Solutions &amp; Value</h2>
  <div class="tile-4">
    <div class="card"><h3>Buildings (Hospitals, Campuses)</h3><p>Full multidisciplinary design, coordination and delivery control.</p></div>
    <div class="card"><h3>Industrial &amp; Plants</h3><p>Heavy MEP, process integration and brownfield programs.</p></div>
    <div class="card"><h3>Infrastructure</h3><p>Stations, transit and public works with complex stakeholders.</p></div>
    <div class="card"><h3>Fit‑out &amp; Interiors</h3><p>Fast‑track delivery with high finish quality.</p></div>
  </div>
</section>

<!-- USE CASES -->
<section id="use-cases" class="section" style="background:#f9fafb;">
  <h2>Use Cases</h2>
  <div class="tile-4">
    <div class="card"><h3>BIM to Field</h3><p>Shop drawings, coordinated models and site change control.</p></div>
    <div class="card"><h3>Design‑Build</h3><p>Early contractor involvement and constructability.</p></div>
    <div class="card"><h3>Program Controls</h3><p>Schedule/cost integration and risk control.</p></div>
    <div class="card"><h3>Green Building</h3><p>LEED/BREEAM advisory and commissioning.</p></div>
  </div>
</section>

<!-- CERTIFICATION LADDERS -->
<section id="certifications" class="section" style="background:#f9fafb;">
  <h2>Certification Ladders — BIM • PMP • LEED</h2>
  <div class="tile-3">
    <div class="card"><h3>BIM</h3><ul><li>Autodesk Certified Professional</li><li>BIM Coordination Specialist</li><li>ISO 19650 process (practice)</li></ul></div>
    <div class="card"><h3>Project Control</h3><ul><li>PMP / PRINCE2</li><li>Scheduling &amp; Cost Control</li><li>Claims &amp; Delay</li></ul></div>
    <div class="card"><h3>Green &amp; Safety</h3><ul><li>LEED GA/AP</li><li>OSHA 30</li><li>NEBOSH</li></ul></div>
  </div>
</section>

<!-- VENDOR ECOSYSTEM -->
<section id="ecosystem" class="section">
  <h2>Vendor Ecosystem</h2>
  <p class="muted">Design, coordination, controls, documentation and sustainability technology underpinning scalable AEC delivery.</p>
  <div class="ecosystem-logos" aria-label="Core Platforms">
    <img src="Backups/vendor-logos/autodesk.svg" alt="Autodesk – Authoring & Coordination" loading="lazy" decoding="async">
    <img src="Backups/vendor-logos/adobe.svg" alt="Adobe – Design & Publishing" loading="lazy" decoding="async">
    <img src="Backups/vendor-logos/microsoft.svg" alt="Microsoft – Productivity & Collaboration" loading="lazy" decoding="async">
    <img src="Backups/vendor-logos/aws.svg" alt="AWS – Cloud & Data Infrastructure" loading="lazy" decoding="async">
    <img src="Backups/vendor-logos/Siemens.svg" alt="Siemens – Engineering & Industrial Platforms" loading="lazy" decoding="async">
    <img src="Backups/vendor-logos/pmi.svg" alt="PMI – Project Management Standards" loading="lazy" decoding="async">
    <img src="Backups/vendor-logos/ibm.svg" alt="IBM – Data & Analytics" loading="lazy" decoding="async">
    <img src="Backups/vendor-logos/oracle.svg" alt="Oracle – Primavera / ERP" loading="lazy" decoding="async">
    <img src="Backups/vendor-logos/azure.svg" alt="Azure – Cloud Services" loading="lazy" decoding="async">
    <img src="Backups/vendor-logos/leed.png" alt="USGBC LEED – Green Building" loading="lazy" decoding="async">
    <img src="Backups/vendor-logos/trimble.png" alt="Trimble – Construction Technology" loading="lazy" decoding="async">
    <img src="Backups/vendor-logos/Procore.jpg" alt="Procore – Construction Management" loading="lazy" decoding="async">
    <img src="Backups/vendor-logos/bluebeam.png" alt="Bluebeam – Markup & Collaboration" loading="lazy" decoding="async">
    <img src="Backups/vendor-logos/revizto.webp" alt="Revizto – Coordination Platform" loading="lazy" decoding="async">
    <img src="Backups/vendor-logos/solibri.jpg" alt="Solibri – Model Checking" loading="lazy" decoding="async">
    <img src="Backups/vendor-logos/Leica.png" alt="Leica Geosystems – Reality Capture" loading="lazy" decoding="async">
    <img src="Backups/vendor-logos/bentley.svg" alt="Bentley Systems – Infrastructure Engineering" loading="lazy" decoding="async">
    <img src="Backups/vendor-logos/esri.png" alt="Esri – GIS & Mapping" loading="lazy" decoding="async">
    <img src="Backups/vendor-logos/sap.png" alt="SAP – ERP & Asset Management" loading="lazy" decoding="async">
    <img src="Backups/vendor-logos/plangrid.png" alt="PlanGrid – Field Productivity" loading="lazy" decoding="async">
  </div>
  <div class="vendor-cats">
    <div class="card"><h3>Authoring & Coordination</h3><ul><li>Revit / AutoCAD (Autodesk)</li><li>IFC / BCF exchange workflows</li><li>Model federation & clash cycles</li></ul></div>
    <div class="card"><h3>Controls & Analytics</h3><ul><li>Schedule & Cost (Primavera, MS Project)</li><li>EVM dashboards (Power BI)</li><li>Risk / change tracking</li></ul></div>
    <div class="card"><h3>Field & Quality</h3><ul><li>Mobile inspections & ITP logging</li><li>Issue workflows & punch‑list burn down</li><li>Digital handover packs</li></ul></div>
    <div class="card"><h3>Data & Platforms</h3><ul><li>Cloud hosting (AWS / Azure)</li><li>Document control & CDE policies</li><li>Security & access governance</li></ul></div>
    <div class="card"><h3>Sustainability</h3><ul><li>Energy modeling & simulations</li><li>Embodied carbon tracking</li><li>Commissioning analytics</li></ul></div>
    <div class="card"><h3>Future / Emerging</h3><ul><li>Reality capture (laser scan, drones)</li><li>Digital twins integration</li><li>Predictive AI (schedule / quality)</li></ul></div>
  </div>
  <p class="muted" style="margin-top:12px;">Ecosystem shown is illustrative, not exhaustive.</p>
</section>

<!-- DELIVERY METHODOLOGY -->
<section id="methodology" class="section" style="background:#f9fafb;">
  <h2>Delivery Methodology</h2>
  <div class="tile-3">
    <div class="card"><h3>BEP & Lifecycle</h3><ul><li>Kickoff: Requirements, BEP drafting</li><li>Design: LOD progression & approvals</li><li>Pre‑construction: Coordination freeze & shop drawings</li><li>Construction: Field updates & change control</li><li>Handover: As‑built, COBie, digital twin readiness</li></ul></div>
    <div class="card"><h3>RFI & Clash Flow</h3><ul><li>Automated clash detection (daily cycles)</li><li>Issue triage & ownership assignment</li><li>RFI drafting → review → closure SLA</li><li>Metrics: clash density, closure time</li></ul></div>
    <div class="card"><h3>Stage Gates & Reviews</h3><ul><li>Concept, Schematic, Design Dev, IFC</li><li>Value engineering checkpoints</li><li>Constructability & safety reviews</li><li>Formal sign‑off and audit trail</li></ul></div>
  </div>
</section>

<!-- SUSTAINABILITY & ESG -->
<section id="sustainability" class="section">
  <h2>Sustainability &amp; ESG</h2>
  <div class="tile-4">
    <div class="card"><h3>Energy Performance</h3><p>Early energy & daylight modeling, HVAC optimization, performance gap tracking post‑commissioning.</p></div>
    <div class="card"><h3>Embodied Carbon</h3><p>Material quantity extraction, carbon factors application, reduction strategies & design alternatives log.</p></div>
    <div class="card"><h3>Materials & Waste</h3><p>Responsible sourcing policies, waste segregation KPIs, recycling / diversion reporting.</p></div>
    <div class="card"><h3>Commissioning & Monitoring</h3><p>Functional performance tests, seasonal commissioning plan, integration to BMS analytics.</p></div>
  </div>
  <div class="tile-3" style="margin-top:20px;">
    <div class="card"><h3>Certifications</h3><ul><li>LEED / BREEAM pathways</li><li>WELL & health metrics</li><li>Energy codes compliance</li></ul></div>
    <div class="card"><h3>ESG Reporting</h3><ul><li>Data capture for GHG Scope</li><li>Stakeholder disclosure pack</li><li>Continuous improvement cycles</li></ul></div>
    <div class="card"><h3>Resilience</h3><ul><li>Climate risk checks</li><li>Redundancy & passive design</li><li>Adaptation recommendations</li></ul></div>
  </div>
</section>

<!-- RISK & CONTROLS -->
<section id="risk-controls" class="section" style="background:#f9fafb;">
  <h2>Risk &amp; Controls</h2>
  <div class="tile-3">
    <div class="card"><h3>Schedule & Cost</h3><ul><li>Baseline + rolling wave updates</li><li>EVM SPI/CPI dashboards</li><li>Change order impact modeling</li><li>Delay analysis & claims support</li></ul></div>
    <div class="card"><h3>Quality & Safety</h3><ul><li>ITP matrix & inspection logs</li><li>NCR tracking & root cause</li><li>HSE audits & leading indicators</li><li>Behavioral safety observations</li></ul></div>
    <div class="card"><h3>Data & Governance</h3><ul><li>CDE access & permissions roles</li><li>Model naming/versioning policy</li><li>Security & IP protection</li><li>Backup & retention schedules</li></ul></div>
  </div>
</section>

<!-- REALITY CAPTURE & DIGITAL TWIN -->
<section id="digital-twin" class="section">
  <h2>Reality Capture &amp; Digital Twin</h2>
  <div class="digital-grid">
    <div class="card"><h3>Laser Scanning</h3><p>High‑density point clouds (as‑built validation, deviation analysis) feeding coordinated models and clash prevention.</p><ul><li>Scan planning & control points</li><li>Point cloud registration QC</li><li>Deviation heatmaps</li></ul></div>
    <div class="card"><h3>Drones & Photogrammetry</h3><p>Progress tracking, earthworks volumes, façade inspections and site logistics optimization.</p><ul><li>Flight plans & permits</li><li>Orthomosaic generation</li><li>Volume calc & progress KPIs</li></ul></div>
    <div class="card"><h3>Digital Twin Integration</h3><p>Structured asset data (COBie), sensor streams (IoT/BMS) and analytics models for performance & maintenance forecasting.</p><ul><li>Asset registry ingestion</li><li>Tag standardization</li><li>Predictive maintenance models</li></ul></div>
    <div class="card"><h3>AR/VR & Field Coordination</h3><p>Immersive review of design intent vs site reality, reducing misinterpretation and accelerating approval cycles.</p><ul><li>Model simplification / optimization</li><li>Field overlay alignment checks</li><li>Review session capture</li></ul></div>
    <div class="card"><h3>Data Pipeline & Governance</h3><p>Automated ETL from capture tools into CDE; validation, versioning, retention and access security controls.</p><ul><li>Ingestion & naming rules</li><li>Automated QA scripts</li><li>Backup / archive policy</li></ul></div>
    <div class="card"><h3>Value & KPIs</h3><p>Reduced rework, faster progress validation, richer asset lifecycle data.</p><ul><li>Scan turnaround time</li><li>Deviation closure rate</li><li>Twin data completeness %</li></ul></div>
  </div>
</section>

<!-- PROOF & TESTIMONIALS -->
<section id="proof" class="section">
  <h2>Proof &amp; Testimonials</h2>
  <div class="tile-3">
    <div class="card"><h3>Case Metrics</h3><ul><li>Hospital Expansion: Clash density reduced 42%</li><li>Industrial Plant: RFI turnaround cut from 9→4 days</li><li>Campus Retrofit: Rework cost avoided $1.3M</li></ul></div>
    <div class="card"><h3>Outcomes</h3><ul><li>Avg schedule adherence &gt;95%</li><li>Change order variance &lt;8%</li><li>Energy performance gap &lt;10%</li></ul></div>
    <div class="card"><h3>Testimonials</h3><p><em>“Coordination clarity saved weeks on our critical path.”</em><br><span class="muted">— Director, Healthcare Project (anonymized)</span></p><p><em>“Data‑driven cost control kept variance under 5%.”</em><br><span class="muted">— Owner Rep, Industrial Facility</span></p></div>
  </div>
</section>

<!-- TOOLS & DOCS STACK -->
<section id="tools" class="section" style="background:#f9fafb;">
  <h2>Tools &amp; Docs Stack</h2>
  <div class="tile-3">
    <div class="card"><h3>Authoring &amp; Coordination</h3><ul><li>Revit, Navisworks, AutoCAD</li><li>IFC exchange &amp; BCF issues</li><li>Clash &amp; model checks</li></ul></div>
    <div class="card"><h3>Controls &amp; Reporting</h3><ul><li>4D/5D links</li><li>Power BI dashboards</li><li>EVM and risk logs</li></ul></div>
    <div class="card"><h3>Documentation</h3><ul><li>Method statements</li><li>ITPs, ITRs</li><li>Handover packs (COBie)</li></ul></div>
  </div>
</section>

<!-- COMPLIANCE & SAFETY -->
<section id="compliance" class="section">
  <h2>Compliance &amp; Safety</h2>
  <div class="tile-3">
    <div class="card"><h3>Codes &amp; Standards</h3><ul><li>IBC, local building codes</li><li>NFPA &amp; electrical codes</li><li>ISO 9001/45001 (practice)</li></ul></div>
    <div class="card"><h3>Safety</h3><ul><li>Construction HSE plans</li><li>Permits to work</li><li>Incident management</li></ul></div>
    <div class="card"><h3>Quality</h3><ul><li>Inspections &amp; tests</li><li>NCR &amp; closeout</li><li>Handover audits</li></ul></div>
  </div>
</section>

<!-- OFFER PACKAGES -->
<section id="offers" class="section" style="background:#f9fafb;">
  <h2>Offer Packages — How Clients Engage</h2>
  <div class="offers-grid">
    <div class="card"><h3>BIM &amp; Coordination Core</h3><p>Federated models, clash cycles, shop drawings & field change tracking.</p><ul><li>Weekly clash report KPIs</li><li>LOD progression roadmap</li><li>Field redline integration</li></ul></div>
    <div class="card"><h3>Integrated Digital Delivery</h3><p>End‑to‑end digital workflows: model governance, CDE automation, analytics dashboards.</p><ul><li>CDE policy & roles</li><li>Data quality scorecards</li><li>Power BI / twin sync</li></ul></div>
    <div class="card"><h3>Managed PMO & Controls</h3><p>Schedule, cost, risk, change & reporting with EVM and predictive analytics.</p><ul><li>Monthly risk workshops</li><li>Variance early warnings</li><li>Claims support pack</li></ul></div>
    <div class="card"><h3>Commissioning & Closeout</h3><p>Test scripts, deficiency management, O&amp;M documentation, digital twin handover.</p><ul><li>Functional test tracking</li><li>Punch‑list burn down</li><li>COBie completeness scans</li></ul></div>
    <div class="card"><h3>Sustainability & ESG Advisory</h3><p>Energy modeling, embodied carbon reduction plans, ESG reporting enablement.</p><ul><li>Carbon baseline & targets</li><li>Material optimization options</li><li>ESG data capture map</li></ul></div>
    <div class="card"><h3>Reality Capture Services</h3><p>Laser scan & drone programs with deviation analytics to reduce rework.</p><ul><li>Scan schedule cadence</li><li>Deviation closure SLA</li><li>Progress volume dashboards</li></ul></div>
  </div>
</section>

<!-- KPIs & OUTCOMES -->
<section id="kpis" class="section">
  <h2>KPIs &amp; Outcomes</h2>
  <div class="kpi-grid">
    <div class="card kpi-card"><div class="val">&lt;2%</div><div class="lab">Rework Rate</div></div>
    <div class="card kpi-card"><div class="val">&gt;95%</div><div class="lab">First‑time Pass</div></div>
    <div class="card kpi-card"><div class="val">&gt;0.9</div><div class="lab">SPI/CPI Index</div></div>
    <div class="card kpi-card"><div class="val">&lt;5d</div><div class="lab">RFI Turnaround</div></div>
    <div class="card kpi-card"><div class="val">&lt;8%</div><div class="lab">Change Order Variance</div></div>
    <div class="card kpi-card"><div class="val">&lt;0.35</div><div class="lab">Clashes / 100m² (steady)</div></div>
    <div class="card kpi-card"><div class="val">&lt;10%</div><div class="lab">Energy Gap vs Model</div></div>
    <div class="card kpi-card"><div class="val">−15%</div><div class="lab">Embodied Carbon Reduction</div></div>
    <div class="card kpi-card"><div class="val">&gt;98%</div><div class="lab">Data Governance Compliance</div></div>
    <div class="card kpi-card"><div class="val">&lt;0.8</div><div class="lab">TRIR (Target)</div></div>
    <div class="card kpi-card"><div class="val">&gt;92%</div><div class="lab">Handover Readiness</div></div>
    <div class="card kpi-card"><div class="val">&lt;4%</div><div class="lab">Cost Forecast Variance</div></div>
  </div>
</section>

<!-- POD COMPOSITION -->
<section id="pods" class="section" style="background:#f9fafb;">
  <h2>Pod Composition (1:50)</h2>
  <div class="tile-4">
    <div class="card"><h3>Leadership &amp; Design (8)</h3><ul><li>Pod Leader</li><li>Architect/Engineers</li><li>Coordination Lead</li></ul></div>
    <div class="card"><h3>Controls &amp; Docs (12)</h3><ul><li>Planners/Cost</li><li>Doc Control</li><li>BI &amp; Reporting</li></ul></div>
    <div class="card"><h3>Construction &amp; QA/QC (18)</h3><ul><li>Supervisors</li><li>Inspectors</li><li>Handover</li></ul></div>
    <div class="card"><h3>HSE &amp; Compliance (12)</h3><ul><li>HSE Leads</li><li>Auditors</li><li>Training</li></ul></div>
  </div>
</section>

<!-- COMMERCIALS -->
<section id="commercials" class="section">
  <h2>Commercials — Pod Economics &amp; Leader ROI</h2>
  <div class="card" style="margin:12px 0 18px;"><strong>Investor Snapshot</strong><p class="muted" style="margin-top:6px;">Rework avoidance, schedule control and predictable handover drive economics.</p></div>
  <h3>Pod Economics (Illustrative)</h3>
  <table class="econ-table">
    <tr><th>Pod Type</th><th>Velocity (pts/mo)</th><th>Monthly Rate (USD)</th><th>Typical Scope</th></tr>
    <tr><td>Hospitals/Campuses</td><td>90–140</td><td>$90k–$160k</td><td>BIM, coordination, construction &amp; handover</td></tr>
    <tr><td>Infrastructure</td><td>80–130</td><td>$85k–$150k</td><td>Design, controls and safety</td></tr>
    <tr><td>Industrial</td><td>90–140</td><td>$95k–$165k</td><td>Process, heavy MEP, QA/QC</td></tr>
  </table>
  <h3 style="margin-top:28px;">Leader ROI Ladder (Illustrative)</h3>
  <table class="roi-table">
    <tr><th>Milestone</th><th>Active Commission</th><th>Residual (Managed Services)</th><th>Cumulative Annualized</th></tr>
    <tr><td>Month 3</td><td>$15,200</td><td>$180k–$360k</td><td>$480k–$900k</td></tr>
    <tr><td>Month 6</td><td>$29,600</td><td>$420k–$840k</td><td>$1.1M–$2.0M</td></tr>
    <tr><td>Month 12</td><td>$46,900</td><td>$1.0M–$2.0M</td><td>$2.4M+</td></tr>
  </table>
  <p style="margin-top:10px;"><a class="btn-outline" href="docs/aec-brochure.pdf">Download Brochure</a> <a class="btn-outline" href="docs/aec-finance-pack.pdf">Download Finance Pack</a></p>
</section>

<!-- LEADERSHIP JOURNEY -->
<section id="leadership" class="section" style="background:#f9fafb;">
  <h2>How AEC 1:50 Leadership Works</h2>
  <div class="journey-steps">
    <div class="card"><strong>Train</strong><br>BIM, PMP/PRINCE2, safety, sustainability & data governance foundations.</div>
    <div class="card"><strong>Build</strong><br>Assemble multidisciplinary squad, implement BEP & CDE policies.</div>
    <div class="card"><strong>Deploy</strong><br>Execute portfolio: coordination, controls, sustainability, reality capture.</div>
    <div class="card"><strong>Optimize</strong><br>Apply analytics & twin insights to improve cost, schedule, carbon KPIs.</div>
    <div class="card"><strong>Earn</strong><br>Scale active + residual revenue (Managed PMO, digital delivery, ESG advisory).</div>
  </div>
  <h3 style="margin-top:28px;">Leadership Timeline (Illustrative)</h3>
  <div class="timeline">
    <div class="milestone"><strong>0–3 Months</strong><br>Cert prep (BIM/PMP), BEP draft, initial pod recruitment.</div>
    <div class="milestone"><strong>3–6 Months</strong><br>First project delivery, clash KPI stabilization, baseline governance.</div>
    <div class="milestone"><strong>6–12 Months</strong><br>Portfolio expansion, reality capture integration, ESG baseline set.</div>
    <div class="milestone"><strong>12+ Months</strong><br>Digital twin optimization, advanced analytics, carbon reduction tracking.</div>
  </div>
  <h3 style="margin-top:24px;">Skill Matrix</h3>
  <table class="matrix-table" aria-label="Leadership Skill Matrix">
    <tr><th>Domain</th><th>Entry</th><th>Proficient</th><th>Advanced</th></tr>
    <tr><td>BIM Coordination</td><td>Basic clash runs</td><td>Automated issue workflow</td><td>Predictive clash analytics</td></tr>
    <tr><td>Project Controls</td><td>Baseline schedule</td><td>EVM dashboards</td><td>AI variance forecasts</td></tr>
    <tr><td>Sustainability</td><td>Energy code checks</td><td>Energy & carbon modeling</td><td>Lifecycle optimization</td></tr>
    <tr><td>Reality Capture</td><td>Scan ingestion</td><td>Deviation analytics</td><td>Twin-driven predictive maintenance</td></tr>
    <tr><td>Data Governance</td><td>Naming conventions</td><td>CDE automation</td><td>Cross-project data lake & KPIs</td></tr>
  </table>
</section>

<!-- PATHWAYS & CROSS-LINKS -->
<section id="crosslinks" class="section">
  <h2>Pathways &amp; Cross‑Links</h2>
  <ul>
    <li><strong>Information Technology (Ops):</strong> BIM data, analytics and dashboards.</li>
    <li><strong>Manufacturing &amp; Industrial Systems:</strong> Process integration and safety.</li>
    <li><strong>Intelligent Cloud, Data &amp; AI:</strong> Predictive quality and schedule analytics.</li>
  </ul>
</section>

<!-- APPLY / HIRE -->
<section id="apply" class="section" style="background:#f9fafb;">
  <h2>Apply / Hire — AEC</h2>
  <p class="muted">Join as a <strong>1:50 Team Leader</strong> or <strong>engage an AEC pod</strong>.</p>
  <form method="post" action="send-mail.php" class="card apply-form" data-event="form-apply">
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
        <option value="enterprise-client">Owner / Developer</option>
        <option value="industrial-client">Contractor / Subcontractor</option>
        <option value="other">Other</option>
      </select></div>
    </div>
    <div class="form-row"><div class="field" style="grid-column:1 / -1;"><label for="interest">I'm interested in</label><select id="interest" name="interest" required>
      <option value="">Select one</option>
      <option value="join-leadership">Joining the Investor Education leadership program</option>
      <option value="hire-pod">Hiring an AEC pod</option>
      <option value="joint-venture">Joint venture / partnership</option>
      <option value="other">Other</option>
    </select></div></div>
    <div class="field" style="grid-column:1 / -1;"><label for="message">Briefly describe your need</label><textarea id="message" name="message" rows="4"></textarea></div>
    <button type="submit" class="btn">Submit</button>
    <p class="muted" style="margin-top:8px;">We respect your privacy. See our <a href="privacy-policy.php">Privacy Policy</a>.</p>
  </form>
</section>

</section>

<script>
// Accordion interactions
(function(){
  const buttons = document.querySelectorAll('.aec .accordion-button'); if(!buttons.length) return;
  buttons.forEach(btn => btn.addEventListener('click', () => {
    const panel = document.getElementById(btn.getAttribute('data-acc-target'));
    const expanded = btn.getAttribute('aria-expanded') === 'true';
    buttons.forEach(b => { if(b!==btn){ b.setAttribute('aria-expanded','false'); const p=document.getElementById(b.getAttribute('data-acc-target')); if(p){ p.hidden=true; p.setAttribute('aria-hidden','true'); } } });
    btn.setAttribute('aria-expanded', expanded ? 'false' : 'true'); if(panel){ panel.hidden = expanded; panel.setAttribute('aria-hidden', expanded ? 'true' : 'false'); }
  }));
})();
// Quick Apply toggle + submit
(function(){ const toggle=document.querySelector('.aec .quick-apply-toggle'); const form=document.getElementById('qa-form'); if(toggle&&form){ toggle.addEventListener('click', ()=>{ const open=toggle.getAttribute('aria-expanded')==='true'; toggle.setAttribute('aria-expanded', open?'false':'true'); form.hidden=open; form.style.display=open?'none':'flex'; }); }
  const submit=document.getElementById('qa-submit'); if(submit){ submit.addEventListener('click', ()=>{ const email=document.getElementById('qa-email')?.value||''; const iam=document.getElementById('qa-iam')?.value||''; const url=new URL(window.location.href); if(email) url.searchParams.set('email',email); if(iam) url.searchParams.set('iam',iam); url.searchParams.set('interest', iam && iam.includes('client') ? 'hire-pod' : 'join-leadership'); url.hash='apply'; window.location.href=url.toString(); }); }})();
// Auto-fill
(function(){ const p=new URLSearchParams(window.location.search); ['email','iam','interest'].forEach(k=>{ const v=p.get(k); if(v){ const el=document.getElementById(k); if(el) el.value=v; } }); })();
// Count-up
(function(){ const els=document.querySelectorAll('.aec [data-countup]'); if(!('IntersectionObserver' in window)||!els.length) return; const animate=el=>{ const target=parseInt(el.getAttribute('data-countup'),10)||0; const suffix=el.getAttribute('data-suffix')||''; const dur=1200; const start=performance.now(); const step=t=>{ const p=Math.min(1,(t-start)/dur); const v=Math.floor(target*p); el.textContent=v.toLocaleString()+(suffix?` ${suffix.trim()}`:''); if(p<1) requestAnimationFrame(step); }; requestAnimationFrame(step); }; const io=new IntersectionObserver(es=>{ es.forEach(e=>{ if(e.isIntersecting){ animate(e.target); io.unobserve(e.target); } }); },{threshold:0.4}); els.forEach(el=>io.observe(el)); })();
// Sticky CTA
(function(){ const c=document.createElement('div'); c.className='sticky-cta'; c.innerHTML='<a href="#apply" data-event="sticky-cta-apply">Apply / Hire</a>'; document.body.appendChild(c); })();
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "name": "Investor Education Program",
      "url": "<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>",
      "sameAs": ["https://www.linkedin.com/","https://twitter.com/"]
    },
    {
      "@type": "Service",
      "name": "AEC Design & Coordination",
      "serviceType": "BIM Authoring & Clash Management",
      "provider": {"@type": "Organization", "name": "Investor Education Program"},
      "areaServed": "Global"
    },
    {
      "@type": "Service",
      "name": "Project Controls & PMO",
      "serviceType": "Schedule, Cost & Risk Management",
      "provider": {"@type": "Organization", "name": "Investor Education Program"},
      "areaServed": "Global"
    },
    {
      "@type": "Service",
      "name": "Sustainability & ESG Advisory",
      "serviceType": "Energy Modeling, Carbon Tracking, ESG Reporting",
      "provider": {"@type": "Organization", "name": "Investor Education Program"},
      "areaServed": "Global"
    },
    {
      "@type": "Service",
      "name": "Reality Capture & Digital Twin",
      "serviceType": "Laser Scanning, Drone Photogrammetry, Twin Integration",
      "provider": {"@type": "Organization", "name": "Investor Education Program"},
      "areaServed": "Global"
    },
    {
      "@type": "Course",
      "name": "AEC 1:50 Leadership Development",
      "description": "Structured pathway covering BIM, controls, sustainability, reality capture and data governance to lead a 1:50 AEC pod.",
      "provider": {"@type": "Organization", "name": "Investor Education Program"}
    }
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://invest.btheducationgroup.com/index.php"},
    {"@type": "ListItem", "position": 2, "name": "Industries", "item": "https://invest.btheducationgroup.com/index.php#industries"},
    {"@type": "ListItem", "position": 3, "name": "Architecture, Engineering & Construction (AEC)", "item": "<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>"}
  ]
}
</script>

<?php include 'footer.php'; ?>

