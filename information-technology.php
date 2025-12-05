<?php
// ============================================
// Page meta for header.php (OG/Twitter picked up here)
// ============================================
$page_title       = "Information Technology (Operations & Infrastructure) — Operate • Secure • Scale";
$meta_description = "World-class IT Operations & Infrastructure aligned to the Investor Education 1:50 leadership model: ITIL service management, identity & endpoint, network & Wi-Fi, collaboration, backup/DR/BCP, monitoring/NOC, and governance — with clear boundaries to Software Engineering, Intelligent Cloud, and Cybersecurity.";
$og_title         = $page_title;
$og_description   = $meta_description;
$og_image         = "https://invest.btheducationgroup.com/image/logo-og.png";
$og_url           = "https://invest.btheducationgroup.com/information-technology.php";

// Page-scoped CSS for IT Operations & Infrastructure
$page_styles = ['assets/css/page/it.css'];
include 'header.php';
?>
<!-- Styles moved to assets/css/page/it.css -->

<?php 
$breadcrumb_items = [
  ['label' => 'Home', 'href' => 'index.php'],
  ['label' => 'Industries', 'href' => 'index.php#industries'],
  ['label' => 'Information Technology (Operations & Infrastructure)']
];
include 'breadcrumbs.php';
?>

<header>
  <div class="hero">
    <div class="hero-left">
      <h1>Operate. Secure. Scale.<br><strong>Information Technology (Operations &amp; Infrastructure)</strong></h1>
      <p class="lead">
        Run mission-critical IT with ITIL-driven operations, modern endpoint &amp; identity, network core, collaboration,
        data protection, and business continuity — delivered through the Investor Education <strong>1:50 leadership model</strong>.
        This page focuses on <em>operations and infrastructure</em>. For feature builds/SDLC see
        <a href="software-engineering.php">Software &amp; Systems Engineering</a>;
        for PaaS/AI scale see <a href="intelligent-cloud.php">Intelligent Cloud</a>;
        for SOC/MDR/IR see <a href="cybersecurity.php">Cybersecurity</a>.
        Each fully built 1:50 IT leadership unit can realistically support <strong>$3M–$8M per year</strong> in managed services and project revenue across multi-site portfolios.
      </p>
      <div class="cta-row">
        <a class="btn" href="#apply-leader">Become a Team Leader</a>
        <a class="btn-outline" href="#services">See Services</a>
        <a class="btn-outline" href="#packages">See Packages</a>
        <a class="btn-outline" href="#hire-it-team">Hire a 1:50 IT Team</a>
      </div>
      <div class="stats">
        <div class="stat">
          <div style="font-weight:800;font-size:20px">44,321 USD</div>
          <div style="font-size:13px;color:#e8f3ff;white-space:nowrap">Team-building commission</div>
        </div>
        <div class="stat">
          <div style="font-weight:800;font-size:20px">2,127,372 USD</div>
          <div style="font-size:13px;color:#e8f3ff;white-space:nowrap">Leader annual income</div>
        </div>
        <div class="stat">
          <div style="font-weight:800;font-size:20px">63,822 USD</div>
          <div style="font-size:13px;color:#e8f3ff;white-space:nowrap">Member annual income</div>
        </div>
      </div>
      <p class="kpi-caption" style="margin-top:16px;font-size:13px;color:#b8d4f0;max-width:600px;line-height:1.5">
        Illustrative ranges, based on multi-contract 1:50 IT portfolios. Total annual revenue capacity per unit: <strong style="color:#e8f3ff">$3M–$8M</strong>.
      </p>
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
              <option selected>Information Technology</option>
              <option>Intelligent Cloud</option>
              <option>Cybersecurity</option>
              <option>Medical Technology</option>
              <option>Welding Industry</option>
              <option>Automotive Industry</option>
              <option>Architecture, Engineering & Construction</option>
              <option>Business Development, Marketing & Sales</option>
              <option>Management Accounting</option>
              <option>Communications</option>
              <option>Fiber Optics & Data Cabling</option>
              <option>Smart Home & Security</option>
              <option>Renewable Energy</option>
            </select>
          </div>
          <input type="hidden" name="source" value="Quick Apply • IT">
          <button class="btn" type="submit">Apply Now</button>
        </form>
      </div>
    </div>
  </div>
</header>

<!-- Quick Navigation -->
<section id="quick-nav" class="section">
  <h2>Quick Navigation</h2>
  <div class="grid">
    <a class="card" href="#model">How the 1:50 IT Model Works</a>
    <a class="card" href="#pods">Pod Composition &amp; Governance</a>
    <a class="card" href="#services">Service Catalog (What We Run)</a>
    <a class="card" href="#packages">Tiered Managed Service Packages</a>
    <a class="card" href="#compliance">Compliance &amp; Enterprise Standards</a>
    <a class="card" href="#kpis">KPIs &amp; SLA Targets</a>
    <a class="card" href="#commercials">Commercials &amp; ROI</a>
    <a class="card" href="#portfolio">Proof &amp; Case Studies</a>
    <a class="card" href="#governance">ITIL, Governance &amp; Security Boundaries</a>
    <a class="card" href="#leadership-pathways">Leadership Journey (1:50 IT Leader)</a>
    <a class="card" href="#hire-it-team">Hire a 1:50 IT Team</a>
    <a class="card" href="#apply-leader">Apply to Become a Team Leader</a>
  </div>
</section>

<!-- (0) Model Mapping -->
<section id="model" class="section">
  <h2>How the Investor Education IT Model Works</h2>
  <div class="how">
    <div class="step"><strong>Train</strong><br/>Leader completes pathways (ITIL/ITSM, identity/endpoint, network, collaboration, backup/DR) + leadership & commercial training.</div>
    <div class="step"><strong>Build</strong><br/>Leader recruits and mentors a <strong>1:50 team</strong> through a work-study delivery model.</div>
    <div class="step"><strong>Deploy</strong><br/>Team delivers multi-site services with SLAs: workplace, identity, network/Wi-Fi, collaboration, NOC/monitoring, data protection.</div>
    <div class="step"><strong>Earn</strong><br/>Team-building commission + residual revenues from managed services & recurring projects.</div>
  </div>
  <p style="margin-top:10px;color:var(--muted)">
    <strong>Example financials:</strong> Team-building commission 44,321 USD. Residual revenue per team can scale to multi-million USD/yr across client branches (see finance pack).
  </p>
</section>

<!-- 1:50 Team — Roles & Delivery Pods -->
<section id="pods" class="section">
  <h2>1:50 Team — Roles &amp; Delivery Pods</h2>
  <p><strong>Governance:</strong> One certified IT Operations Leader governs the full 1:50 pod, runs CAB, approves change windows, and reports on KPIs, SLAs, and financial performance.</p>
  <p>Five delivery pods execute with clear accountability. One certified leader orchestrates governance, SLAs and commercial outcomes.</p>
  <div class="grid">
    <div class="card">
      <h3>Leadership Pod</h3>
      <ul>
        <li>IT Ops Architect / Team Leader</li>
        <li>Program/Project Manager (Scrum Master)</li>
        <li>vCIO Advisor / Stakeholder Mgmt</li>
      </ul>
      <p class="muted"><strong>SLA Ownership:</strong> overall SLA, CAB, exec reporting, commercials.</p>
    </div>
    <div class="card">
      <h3>Platform Pod</h3>
      <ul>
        <li>Identity &amp; Access (Entra ID/AD, SSO/MFA, CA)</li>
        <li>Endpoint/UEM (Intune/Jamf/Workspace ONE)</li>
        <li>Servers &amp; Virtualization (Windows/Linux, VMware/Hyper-V)</li>
        <li>Collaboration (M365/Google, Rooms, Voice)</li>
      </ul>
      <p class="muted"><strong>Deliverables:</strong> golden images, compliance baselines, collaboration governance.</p>
    </div>
    <div class="card">
      <h3>Network Pod</h3>
      <ul>
        <li>LAN/WAN/SD-WAN design &amp; operations</li>
        <li>Wi-Fi surveys, templates, and QoS</li>
        <li>NAC/802.1X segmentation &amp; ZTNA/VPN</li>
        <li>DHCP/DNS/IPAM (branch standards)</li>
      </ul>
      <p class="muted"><strong>Deliverables:</strong> site blueprints, change windows, performance reports.</p>
    </div>
    <div class="card">
      <h3>Data &amp; Protection Pod</h3>
      <ul>
        <li>DBA &amp; Storage operations (HA/perf/tuning)</li>
        <li>Backup, DR &amp; Business Continuity</li>
        <li>Recovery testing &amp; immutability</li>
        <li>Governed BI layers &amp; KPI dashboards</li>
      </ul>
      <p class="muted"><strong>Deliverables:</strong> RPO/RTO runbooks, quarterly DR drills, exec KPI packs.</p>
    </div>
    <div class="card">
      <h3>NOC &amp; Tooling Pod</h3>
      <ul>
        <li>Monitoring (logs/metrics/traces)</li>
        <li>Runbooks &amp; escalation playbooks</li>
        <li>CMDB &amp; asset/license governance</li>
        <li>Status pages &amp; on-call rotations</li>
      </ul>
      <p class="muted"><strong>Deliverables:</strong> alert hygiene, SLO dashboards, monthly SLA packs.</p>
    </div>
  </div>
</section>

<!-- Commercials — 1:50 Pods & Leader ROI -->
<section id="commercials" class="section" style="position:relative; z-index:2;">
  <h2>Commercials — 1:50 Pods &amp; Leader ROI</h2>
  <div class="grid">
    <div class="card">
      <h3>Pod Economics</h3>
      <p>Transparent monthly pod rates mapped to SLAs and velocity. Includes leadership, change governance, reporting, and defined acceptance criteria.</p>
      <p class="muted">Add-ons: 24×7 NOC, depot/IMACD, license mgmt, vendor governance.</p>
    </div>
    <div class="card">
      <h3>Managed IT Program</h3>
      <p>Tiered managed services aligned to uptime, performance, and recovery targets. Scales across branches with standardized templates.</p>
      <p class="muted">Handoffs with Cybersecurity (advanced detection/IR) and Software Eng. (feature builds).</p>
    </div>
    <div id="leader-roi-card" class="card" style="position:relative; z-index:3; overflow:visible; padding-bottom:24px;">
      <h3>Leader ROI Ladder</h3>
      <p>Active commission: <strong>44,321 USD</strong>. Residual income scales with managed services and multi-site contracts. Month-3/6/12 maturity bands available in the Finance Pack.</p>
      <a class="btn"
         href="#finance-pack"
         style="position:relative; z-index:4; pointer-events:auto;"
         aria-label="Request Finance Pack and contact form">Request Finance Pack</a>
    </div>
  </div>
</section>

<section id="finance-pack" class="section">
  <h2>Finance Pack — ROI Details & Model</h2>
  <div class="grid">
    <div class="card">
      <h3>What's Inside</h3>
      <ul>
        <li>1:50 pod economics & maturity bands (month 3/6/12)</li>
        <li>Leader commission breakdown (44,321 USD active)</li>
        <li>Residual revenue scenarios (multi-site, multi-branch)</li>
        <li>Cash-flow timeline, staffing curve, risk buffers</li>
      </ul>
      <p class="muted">We tailor numbers by sector and geography. Ready to review it with us?</p>
    </div>
    <div class="card">
      <h3>Get the Pack</h3>
      <p>Use the form below — we'll send the full Finance Pack and schedule a walkthrough.</p>
      <a class="btn" href="#hire-it-team">Request Via Hire Form</a>
    </div>
  </div>
</section>

<!-- Offer Packaging -->
<section id="packages" class="section">
  <h2>Offer Packaging (Buy-Now Clarity)</h2>
  <p style="color:#6b7280;max-width:900px;margin:0 auto 30px;text-align:center;">Three tiers aligned to complexity, coverage hours, and financial scale. Each tier shows uptime/response commitments and ideal organizational fit.</p>
  <div class="grid">
    <div class="card package-tier">
      <span class="tier-badge standard">Standard</span>
      <h3>Managed IT Core</h3>
      <p>Service desk, endpoint/UEM baseline, patching, backup policy, SLA reporting.</p>
      <div class="sla-box">
        <p><strong>SLA:</strong> 8×5 • P1 ≤ 1h • FCR ≥70% • Uptime ≥99.5%</p>
      </div>
      <p class="best-for"><strong>Best for:</strong> Organizations with 50–200 users, single-site or regional, standard business hours.</p>
    </div>
    <div class="card package-tier">
      <span class="tier-badge advanced">Advanced</span>
      <h3>Secure Workplace + Network Core</h3>
      <p>Identity hardening (MFA/CA), device compliance, zero-trust access, DLP policies. LAN/WAN/SD-WAN, Wi-Fi surveys, NAC, QoS.</p>
      <div class="sla-box">
        <p><strong>SLA:</strong> 12×5 • P1 ≤ 30m • FCR ≥80% • Uptime ≥99.7%</p>
      </div>
      <p class="best-for"><strong>Best for:</strong> Multi-site enterprises with 200–1000 users, compliance requirements (ISO 27001, SOC 2).</p>
    </div>
    <div class="card package-tier">
      <span class="tier-badge enterprise">Enterprise</span>
      <h3>Full-Stack Operations + BCP</h3>
      <p>All services plus business continuity, immutable backups, tested DR runbooks, tabletop exercises, 24×7 NOC.</p>
      <div class="sla-box">
        <p><strong>SLA:</strong> 24×7 • P1 ≤ 15m • FCR ≥85% • Uptime ≥99.9%</p>
      </div>
      <p class="best-for"><strong>Best for:</strong> Global organizations with 1000+ users, mission-critical systems, regulated industries.</p>
    </div>
  </div>
  <p class="muted" style="margin-top:20px;text-align:center;">Add-ons: Field services, depot/IMACD, license mgmt, vendor governance, telemetry wallboards, custom integrations.</p>
</section>

<!-- SRE for IT Operations -->
<section id="sre" class="section">
  <h2>SRE for IT Operations</h2>
  <ul>
    <li><strong>Golden Signals:</strong> latency, traffic, errors, saturation across infra &amp; services.</li>
    <li><strong>Error Budgets:</strong> change policies, maintenance windows, automated rollbacks.</li>
    <li><strong>Observability:</strong> logs/metrics/traces, synthetic &amp; RUM, actionable alerts.</li>
    <li><strong>Performance Targets:</strong> Wi-Fi p95 throughput/latency, restore time targets per class.</li>
  </ul>
</section>

<!-- ITIL & Governance -->
<section id="governance" class="section">
  <h2>ITIL v4 &amp; Governance</h2>
  <ul>
    <li>Incident, Request, Problem, Change, Release, Config/CMDB, Service Catalog, Knowledge.</li>
    <li>Patch &amp; vulnerability windows (advanced threat ops → <a href="cybersecurity.php">Cybersecurity</a>), CAB, access reviews.</li>
    <li>Monthly SLA packs, capacity/availability reports, asset/license compliance, cost dashboards.</li>
    <li>ISO/IEC 20000-ready; coordinates with ISO 27001/SOC 2 via Cybersecurity.</li>
  </ul>
</section>

<!-- Compliance & Enterprise Standards -->
<section id="compliance" class="section">
  <h2>Compliance &amp; Enterprise Standards Map</h2>
  <p class="muted" style="max-width:900px;margin:0 auto 30px;text-align:center;">
    IT Operations &amp; Infrastructure aligns with enterprise frameworks and hands off advanced security and GRC to the Cybersecurity and Intelligent Cloud teams.
  </p>

  <div class="table-wrapper">
    <table class="compliance-table">
      <thead>
        <tr>
          <th>Area</th>
          <th>Framework / Standard</th>
          <th>What This IT Pod Covers</th>
          <th>Handoffs</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Service Management</td>
          <td>ITIL v4, ISO/IEC 20000</td>
          <td>Incident, Request, Problem, Change, Service Catalog, SLAs, reporting</td>
          <td>Links to business risk &amp; audit with Cybersecurity</td>
        </tr>
        <tr>
          <td>Security &amp; Privacy</td>
          <td>ISO 27001, SOC 2, GDPR</td>
          <td>Baseline hardening, patch windows, access reviews, logs to SIEM</td>
          <td>Detection/response, GRC, data privacy led by Cybersecurity</td>
        </tr>
        <tr>
          <td>Continuity &amp; Resilience</td>
          <td>BCP/DR best practice, ISO 22301 (alignment)</td>
          <td>Backup, DR runbooks, RPO/RTO, failover tests</td>
          <td>Enterprise BCP steering with Business &amp; Governance</td>
        </tr>
        <tr>
          <td>Asset &amp; License Management</td>
          <td>ITIL Asset Mgmt, SAM best practice</td>
          <td>CMDB accuracy, license compliance, vendor governance</td>
          <td>Financial controls with Finance team</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<!-- KPIs & SLA Targets -->
<section id="kpis" class="section">
  <h2>KPIs &amp; SLA Targets — How We Are Measured</h2>
  <p class="muted" style="max-width:900px;margin:0 auto 30px;text-align:center;">
    Typical KPI &amp; SLA targets for an enterprise 1:50 IT Operations &amp; Infrastructure pod.
  </p>

  <div class="table-wrapper">
    <table class="kpi-table">
      <thead>
        <tr>
          <th>Service Area</th>
          <th>Key KPIs</th>
          <th>Typical Targets</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Service Desk &amp; End-User Support</td>
          <td>First Contact Resolution, SLA Attainment, CSAT</td>
          <td>FCR ≥ 70–80%, SLA ≥ 95%, CSAT ≥ 4.5/5</td>
        </tr>
        <tr>
          <td>Network &amp; Wi-Fi</td>
          <td>Uptime, p95 Latency, Incident MTTR</td>
          <td>Uptime ≥ 99.5–99.9%, p95 latency within agreed ms, MTTR ≤ 2–4h</td>
        </tr>
        <tr>
          <td>Backup &amp; DR</td>
          <td>Backup Success %, RPO/RTO, Tested Restores</td>
          <td>Success ≥ 98–99%, tested at least quarterly, documented RPO/RTO</td>
        </tr>
        <tr>
          <td>Asset &amp; License Management</td>
          <td>Inventory Accuracy, License Compliance</td>
          <td>≥ 95% CMDB accuracy, zero critical compliance gaps</td>
        </tr>
        <tr>
          <td>Change &amp; Release Management</td>
          <td>Change Success Rate, Emergency Changes, Rollback Rate</td>
          <td>Success ≥ 95%, Emergency ≤ 5%, Rollback ≤ 3%</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<!-- Recommended IT Services -->
<section id="services" class="section">
  <h2>Recommended IT Services (Distinct but Complementary)</h2>
  <div class="grid">
    <div class="card">
      <h3>IT Operations &amp; Managed Services</h3>
      <p>Helpdesk &amp; deskside, endpoint lifecycle, monitoring, backup &amp; DR, collaboration support, on-site/remote SLAs.</p>
      <p class="muted"><em>Boundary:</em> baseline hardening is here; advanced detection/IR is handled by <strong>Cybersecurity</strong>.</p>
    </div>
    <div class="card">
      <h3>Application Operations &amp; Integrations</h3>
      <p>Run and support business applications, light integrations, API gateways, identity/SSO, release windows and change control.</p>
      <p class="muted"><em>Boundary:</em> feature builds, major refactors &amp; SDLC → <a href="software-engineering.php"><strong>Software Engineering</strong></a>; platform-scale PaaS/AI → <strong>Intelligent Cloud</strong>.</p>
    </div>
    <div class="card">
      <h3>Data &amp; Analytics Services</h3>
      <p>Warehousing &amp; ETL, BI dashboards, KPI reporting, DBA services &amp; performance optimization.</p>
      <p class="muted"><em>Boundary:</em> SIEM/security analytics → <strong>Cybersecurity</strong>; big-data/ML platforms → <strong>Intelligent Cloud</strong>.</p>
    </div>
    <div class="card">
      <h3>IT Consulting &amp; Strategy</h3>
      <p>ITIL service design, vCIO advisory, digital roadmaps, vendor governance, change &amp; adoption programs.</p>
      <p class="muted"><em>Boundary:</em> GRC/compliance design coordinated with <strong>Cybersecurity</strong>.</p>
    </div>
    <div class="card">
      <h3>Industry-Specific IT Solutions</h3>
      <p>Healthcare (HIS/LIMS), Finance (branch IT, core interfaces), Manufacturing (MES/SCADA links), Education (LMS).</p>
      <p class="muted"><em>Boundary:</em> sector security/compliance delivered jointly with <strong>Cybersecurity</strong>.</p>
    </div>
  </div>
</section>

<!-- Enhanced Categorization (Service Domains) -->
<section id="domains" class="section">
  <h2>Enhanced Categorization (Service Domains)</h2>

  <button class="accordion-button" aria-expanded="false">Network &amp; Cloud Technologies</button>
  <div class="accordion-content">
    <ul>
      <li>LAN/WAN/Wi-Fi design, QoS &amp; performance tuning, hybrid connectivity basics</li>
      <li>Lightweight cloud integrations (identity, storage, collaboration)</li>
      <li>Baseline hardening &amp; patch windows (advanced SOC/MDR → Cybersecurity)</li>
    </ul>
    <p class="muted"><em>KPIs:</em> uptime, latency, change success rate, incident MTTR.</p>
  </div>

  <button class="accordion-button" aria-expanded="false">Hardware, Services &amp; Infrastructure</button>
  <div class="accordion-content">
    <ul>
      <li>Asset lifecycle: procure → image → deploy → refresh → retire</li>
      <li>Servers/VMs, printing, conference/collaboration rooms, endpoint standards</li>
      <li>Backup/restore, DR drills, continuity runbooks</li>
    </ul>
    <p class="muted"><em>KPIs:</em> SLA attainment, first-contact resolution, restore success, device compliance.</p>
  </div>

  <button class="accordion-button" aria-expanded="false">IT Management &amp; Strategy</button>
  <div class="accordion-content">
    <ul>
      <li>ITIL processes: Incident, Request, Problem, Change, Release, Service Catalog, SLAs/OLAs</li>
      <li>vCIO advisory, budgeting &amp; capacity planning, vendor management</li>
      <li>Transformation &amp; adoption (communications, training, champions network)</li>
    </ul>
    <p class="muted"><em>KPIs:</em> CSAT, backlog age, CAB success rate, SLA compliance.</p>
  </div>

  <button class="accordion-button" aria-expanded="false">Storage &amp; Data Management</button>
  <div class="accordion-content">
    <ul>
      <li>SAN/NAS/cloud storage planning, tiering, capacity &amp; performance</li>
      <li>Database admin (HA, backup/restore, tuning, observability)</li>
      <li>ETL pipelines, data quality &amp; stewardship, governed BI layers</li>
    </ul>
    <p class="muted"><em>KPIs:</em> job success %, data freshness, query performance, RTO/RPO.</p>
  </div>

  <button class="accordion-button" aria-expanded="false">Application Operations</button>
  <div class="accordion-content">
    <ul>
      <li>Run portals and internal tools, manage environments, service windows, rollbacks</li>
      <li>SSO/IAM integration, access reviews, telemetry &amp; availability SLOs (build work → Software Eng.)</li>
    </ul>
    <p class="muted"><em>KPIs:</em> uptime, incident MTTR, change success rate, adoption.</p>
  </div>

  <button class="accordion-button" aria-expanded="false">SDLC Coordination (Boundary)</button>
  <div class="accordion-content">
    <ul>
      <li>Change windows, release coordination, environment readiness, operational acceptance (A/B, blue-green)</li>
      <li>Feature builds/SDLC live on <a href="software-engineering.php">Software &amp; Systems Engineering</a></li>
    </ul>
    <p class="muted"><em>KPIs:</em> change success %, incident avoidance, handover quality.</p>
  </div>

  <button class="accordion-button" aria-expanded="false">Collaboration &amp; Productivity</button>
  <div class="accordion-content">
    <ul>
      <li>Microsoft 365/Google Workspace rollout, policies, governance</li>
      <li>Endpoint/security baselines (advanced controls → Cyber), adoption programs</li>
    </ul>
    <p class="muted"><em>KPIs:</em> adoption %, active usage, ticket reduction, automation coverage.</p>
  </div>

  <button class="accordion-button" aria-expanded="false">Training &amp; Enablement</button>
  <div class="accordion-content">
    <ul>
      <li>ITIL/ITSM foundations, service desk tooling, monitoring platforms</li>
      <li>End-user enablement (collaboration suites, best practices)</li>
    </ul>
    <p class="muted"><em>KPIs:</em> training CSAT, time-to-productivity, incident reductions.</p>
  </div>
</section>

<!-- Solutions by Category -->
<section id="solutions" class="section">
  <h2>Solutions by Category</h2>

  <button class="accordion-button" aria-expanded="false">IT Operations &amp; Managed Services</button>
  <div class="accordion-content">
    <ul>
      <li><strong>Enterprise IT Support:</strong> Multichannel helpdesk, deskside/VIP, shift coverage, knowledge base.</li>
      <li><strong>Monitoring &amp; Management:</strong> Server/endpoint/network monitoring, patching windows, SLA dashboards.</li>
      <li><strong>Endpoint Lifecycle:</strong> Procurement, imaging, deployment, refresh cycles, secure disposal.</li>
      <li><strong>Backup &amp; DR:</strong> Policy design, restoration testing, DR drills, continuity procedures.</li>
      <li><strong>Collaboration Support:</strong> M365/Workspace admin, license mgmt, adoption campaigns.</li>
    </ul>
    <p><strong>Use cases:</strong> SME managed IT; enterprise floor support; branch standardization; seasonal scale-ups.</p>
    <p><strong>Industry relevance:</strong> Banks, healthcare, manufacturing, education, government, retail.</p>
    <p><strong>Why it matters:</strong> Improves uptime, user productivity, predictable OPEX &amp; compliance with SLAs.</p>
    <p class="muted"><em>Boundary:</em> advanced detection, IR and SOC → <strong>Cybersecurity</strong>.</p>
  </div>

  <button class="accordion-button" aria-expanded="false">Application Operations &amp; Integrations</button>
  <div class="accordion-content">
    <ul>
      <li><strong>Run Business Apps:</strong> environment mgmt, configuration, access control, patch/change schedules.</li>
      <li><strong>Light Integrations:</strong> API gateways, secure connectors, partner onboarding, throttling &amp; quotas.</li>
      <li><strong>Release Coordination:</strong> CAB, maintenance windows, rollback playbooks, status pages.</li>
      <li><strong>Operational Telemetry:</strong> availability SLOs, error budgets, incident response runbooks.</li>
    </ul>
    <p><strong>Use cases:</strong> Keep portals reliable; coordinate releases across branches; ensure compliant access.</p>
    <p><strong>Industry relevance:</strong> Banking, health, government, education, industrial.</p>
    <p><strong>Why it matters:</strong> Protects uptime and user productivity while minimizing change risk.</p>
    <p class="muted"><em>Boundary:</em> new feature builds &amp; refactors → <a href="software-engineering.php"><strong>Software Engineering</strong></a>.</p>
  </div>

  <button class="accordion-button" aria-expanded="false">Data &amp; Analytics Services</button>
  <div class="accordion-content">
    <ul>
      <li><strong>DW &amp; ETL:</strong> Curated models, automated pipelines, data governance &amp; lineage.</li>
      <li><strong>BI &amp; Reporting:</strong> Executive dashboards, KPI scorecards, self-service analytics.</li>
      <li><strong>DBA Services:</strong> HA, performance tuning, backup/restore, capacity planning.</li>
    </ul>
    <p><strong>Use cases:</strong> Finance &amp; ops dashboards; compliance &amp; regulatory reporting; demand forecasting.</p>
    <p><strong>Industry relevance:</strong> Finance, retail, manufacturing, healthcare, public sector.</p>
    <p><strong>Why it matters:</strong> Trusted data for faster, better decisions and operational visibility.</p>
    <p class="muted"><em>Boundary:</em> SIEM/security analytics → <strong>Cybersecurity</strong>; large-scale data/ML → <strong>Intelligent Cloud</strong>.</p>
  </div>

  <button class="accordion-button" aria-expanded="false">IT Consulting &amp; Strategy</button>
  <div class="accordion-content">
    <ul>
      <li><strong>ITIL Service Mgmt:</strong> Process design, service catalog, SLAs/OLAs, reporting &amp; CSI.</li>
      <li><strong>vCIO Advisory:</strong> Roadmaps, budgeting, sourcing, vendor governance, KPI frameworks.</li>
      <li><strong>Digital Transformation:</strong> Operating model, adoption/change, communication playbooks.</li>
    </ul>
    <p><strong>Use cases:</strong> Maturity uplift; M&amp;A integration; vendor rationalization; cost-to-value alignment.</p>
    <p><strong>Industry relevance:</strong> Enterprises and SMEs scaling IT effectiveness and transparency.</p>
    <p><strong>Why it matters:</strong> Aligns IT spend to outcomes; boosts service quality &amp; stakeholder trust.</p>
    <p class="muted"><em>Boundary:</em> risk, compliance and security strategy coordinated with <strong>Cybersecurity</strong>.</p>
  </div>

  <button class="accordion-button" aria-expanded="false">Industry-Specific IT Solutions</button>
  <div class="accordion-content">
    <ul>
      <li><strong>Healthcare IT:</strong> HIS/LIMS deployment, device fleet mgmt, interoperability &amp; support.</li>
      <li><strong>Financial IT:</strong> Branch IT ops, teller endpoints, secure printing, core banking interfaces.</li>
      <li><strong>Manufacturing IT:</strong> MES/SCADA connectivity, shop-floor apps, rugged endpoint mgmt.</li>
      <li><strong>Education IT:</strong> LMS ops, campus networks, labs &amp; device management.</li>
    </ul>
    <p><strong>Use cases:</strong> Sector app rollouts; integrations; steady-state operational support.</p>
    <p><strong>Industry relevance:</strong> Hospitals, banks, factories, schools, ministries &amp; agencies.</p>
    <p><strong>Why it matters:</strong> Tailors IT to regulatory, operational and user realities by sector.</p>
    <p class="muted"><em>Boundary:</em> sector security/compliance delivered jointly with <strong>Cybersecurity</strong>.</p>
  </div>
</section>

<!-- Service Catalog -->
<section id="catalog" class="section">
  <h2>Service Catalog (Comprehensive)</h2>
  <div class="grid">
    <div class="card"><h3>A. Workplace &amp; Endpoint</h3><p>Imaging/Autopilot/DEP • UEM (Intune/Jamf/Workspace ONE) • app packaging • device posture • kiosk/VDI.</p></div>
    <div class="card"><h3>B. Identity &amp; Access</h3><p>Entra ID/AD • SSO/MFA • Conditional Access • SSPR • lifecycle (HR→IT) • B2B/B2C • RBAC reviews.</p></div>
    <div class="card"><h3>C. Network &amp; Connectivity</h3><p>LAN/WAN/SD-WAN • Wi-Fi surveys • NAC/802.1X • DHCP/DNS/IPAM • VPN/ZTNA • QoS • branch templates.</p></div>
    <div class="card"><h3>D. Servers &amp; Virtualization</h3><p>Windows/Linux • VMware/Hyper-V/KVM • file/print • cert services • config mgmt (Ansible/etc.).</p></div>
    <div class="card"><h3>E. Collaboration &amp; Voice</h3><p>M365/Google • Teams/Meet/Zoom • DLP &amp; retention • room systems • telephony/Teams Phone.</p></div>
    <div class="card"><h3>F. Data Protection &amp; DR/BCP</h3><p>Backup encryption • immutable backup • recovery testing • failover orchestration • tabletop exercises.</p></div>
    <div class="card"><h3>G. Monitoring, NOC &amp; Tooling</h3><p>Alert normalization • runbooks • escalation • CMDB sync • status pages • telemetry wallboards.</p></div>
    <div class="card"><h3>H. Service Desk &amp; Field</h3><p>ITSM tooling • knowledge mgmt • rotas • VIP support • depot/IMACD • vendor dispatch &amp; RMA.</p></div>
    <div class="card"><h3>I. Asset, License &amp; Vendor</h3><p>HAM/SAM • true-ups • shadow IT discovery • vendor scorecards • cost optimization.</p></div>
    <div class="card"><h3>J. Training &amp; Adoption</h3><p>Champion networks • floor walks • micro-learning • policy onboarding • productivity clinics.</p></div>
  </div>
</section>

<!-- Use Cases -->
<section id="use-cases" class="section">
  <h2>Use Cases</h2>
  <div class="grid">
    <div class="card"><h3>SME IT Foundations</h3><p>Helpdesk, endpoint mgmt, backup/DR, collaboration rollout with adoption training.</p></div>
    <div class="card"><h3>Branch Standardization</h3><p>Golden-image endpoints, network templates, asset tracking &amp; SLA reports across sites.</p></div>
    <div class="card"><h3>Hybrid Integration</h3><p>Connect on-prem apps with cloud; SSO; stable operations with defined change windows.</p></div>
    <div class="card"><h3>BI for Management</h3><p>ETL pipelines &amp; dashboards for finance, ops, and sales — trusted daily insights.</p></div>
    <div class="card"><h3>ITIL Service Excellence</h3><p>Incident, change, problem processes with live SLAs and a service catalog.</p></div>
    <div class="card"><h3>App Operational Readiness</h3><p>Release coordination, CAB, rollback runbooks, status pages; SDLC on Software Eng.</p></div>
    <div class="card"><h3>Vendor Governance</h3><p>Contracts, SLAs/OLAs, KPIs, and scorecards to control cost &amp; improve quality.</p></div>
    <div class="card"><h3>Industry Rollouts</h3><p>Healthcare, Finance, Manufacturing, Education — targeted deployments &amp; support.</p></div>
  </div>
</section>

<!-- Industry Playbooks -->
<section id="playbooks" class="section">
  <h2>Industry Playbooks</h2>
  <div class="grid">
    <div class="card"><h3>Healthcare IT</h3><p>Clinic Wi-Fi, device fleets, PHI handling in collaboration, DR for EHR; audits with Cyber.</p></div>
    <div class="card"><h3>Finance IT</h3><p>Branch templates, secure printing, teller endpoints, DR drills; PCI assist with Cyber.</p></div>
    <div class="card"><h3>Education IT</h3><p>Campus networks, labs, LMS ops, identity for staff/students; exam modes &amp; filtering.</p></div>
    <div class="card"><h3>Government</h3><p>Identity &amp; records ops, accessibility &amp; retention, VIP support; residency constraints.</p></div>
    <div class="card"><h3>Industrial</h3><p>Rugged endpoints, OT segmentation, maintenance windows, spares logistics.</p></div>
  </div>
</section>

<!-- Organizations That Benefit -->
<section id="orgs" class="section">
  <h2>Organizations That Benefit</h2>
  <ul>
    <li>Corporate IT departments scaling capacity and maturity (ITIL)</li>
    <li>SMEs needing end-to-end IT operations and application support</li>
    <li>Software companies seeking delivery partners for integrations &amp; ops</li>
    <li>IT consultancies requiring execution teams for transformation programs</li>
    <li>Healthcare, Finance, Manufacturing, Education — industry-specific enablement</li>
    <li>Government ministries &amp; agencies pursuing reliable digital services</li>
  </ul>
</section>

<!-- Related Practices -->
<section id="boundaries" class="section">
  <h2>Related Practices</h2>
  <div class="grid">
    <a class="card" href="software-engineering.php"><strong>Software &amp; Systems Engineering</strong><br/>Feature builds, SDLC, CI/CD, app architecture.</a>
    <a class="card" href="intelligent-cloud.php"><strong>Intelligent Cloud, Data &amp; AI</strong><br/>PaaS platforms, data/ML, MLOps, GenAI at scale.</a>
    <a class="card" href="cybersecurity.php"><strong>Cybersecurity &amp; Digital Defense</strong><br/>SOC/MDR, SIEM, IR, governance &amp; audits.</a>
    <a class="card" href="fiber-optics.php"><strong>Fiber Optics &amp; Data Cabling</strong><br/>ETA fiber/cabling buildouts and testing.</a>
  </div>
</section>

<!-- KPIs & SLAs -->
<section id="kpis" class="section">
  <h2>KPIs &amp; SLAs</h2>
  <ul>
    <li><strong>SLA:</strong> P1/P2 response &amp; restore targets; change success rate; patch compliance %; device compliance %.</li>
    <li><strong>Ops KPIs:</strong> CSAT ≥ 4.6/5; FCR ≥ 65–80%; MTTR bands by severity; restore test pass ≥ 98%; asset accuracy ≥ 99%.</li>
    <li><strong>Transparency:</strong> live status pages, monthly exec packs, cost dashboards, risk/improvement register.</li>
  </ul>
</section>

<!-- Proof & Portfolio -->
<section id="portfolio" class="section">
  <h2>Proof &amp; Portfolio</h2>
  <div class="grid">
    <div class="card"><h3>Banking — Branch Standardization</h3><p>Golden images &amp; Wi-Fi templates → <strong>CSAT +22%</strong>, tickets <strong>−31%</strong>.</p></div>
    <div class="card"><h3>Health — Clinic DR</h3><p>Immutable backup &amp; failover playbooks → <strong>RPO 15m</strong>, <strong>RTO 2h</strong>, audit pass.</p></div>
    <div class="card"><h3>Government — Collaboration Hardening</h3><p>MFA + retention + eDiscovery → phish click-through <strong>−67%</strong>, FOI compliance.</p></div>
    <div class="card"><h3>Education — Campus Wi-Fi</h3><p>Coverage + segmentation + champions → tickets <strong>−28%</strong>, adoption <strong>+35%</strong>.</p></div>
  </div>
</section>

<!-- Team Certification Pathways -->
<section id="certifications" class="section">
  <h2>Team Certification Pathways — IT Operations (No Overlap)</h2>
  <p class="muted">Organized in three ladders: <strong>Ops Core</strong>, <strong>Data &amp; Analytics (Ops)</strong>, and <strong>Strategy &amp; Sector</strong>. Development/SDLC, big-data/ML, and SOC/MDR live on Software Engineering, Intelligent Cloud, and Cybersecurity pages to avoid repetition.</p>

  <div class="tabs" role="tablist">
    <button class="tab-btn active" data-tab="ops-core" role="tab" aria-controls="tab-ops-core">A) Ops Core</button>
    <button class="tab-btn" data-tab="data-ops" role="tab" aria-controls="tab-data-ops">B) Data &amp; Analytics (Ops)</button>
    <button class="tab-btn" data-tab="strategy" role="tab" aria-controls="tab-strategy">C) Strategy &amp; Sector</button>
  </div>

  <div id="tab-ops-core" class="tab-panel active" role="tabpanel" aria-labelledby="ops-core">
    <h3>Ops Core — Foundation → Expert</h3>
    <ul>
      <li><strong>Foundation (Year 1):</strong> CompTIA Tech+ • A+ • ITIL 4 Foundation • MD-102 (Endpoint) • M365 Admin • CCNA.</li>
      <li><strong>Intermediate (Year 2):</strong> AZ-104 (Azure Admin) • Linux LFCS/LPIC-1 • Veeam Associate • ENWLSD/ENARSI (as needed).</li>
      <li><strong>Advanced (Year 3):</strong> ITIL Managing Professional • VMware/Hyper-V Admin • SD-WAN/NAC • ServiceNow/Jira SM Admin.</li>
      <li><strong>Expert (Year 4-5):</strong> ISO/IEC 20000 implementation • Architecture for IT Ops • SRE for IT Operations.</li>
    </ul>
  </div>

  <div id="tab-data-ops" class="tab-panel" role="tabpanel" aria-labelledby="data-ops">
    <h3>Data &amp; Analytics (Operations) — DBA/BI/ETL</h3>
    <ul>
      <li><strong>Foundation:</strong> SQL Admin Basics (Postgres/SQL Server) • Power BI/Looker Analyst Fundamentals • ETL basics.</li>
      <li><strong>Intermediate:</strong> dbt Fundamentals • Data Quality &amp; Lineage • Backup/Recovery for DBs.</li>
      <li><strong>Advanced:</strong> Performance tuning • HA/Failover • Governed BI layers • KPI dashboards for execs.</li>
      <li><strong>Boundary:</strong> Big data/ML/MLOps → Intelligent Cloud; SIEM/security analytics → Cybersecurity.</li>
    </ul>
  </div>

  <div id="tab-strategy" class="tab-panel" role="tabpanel" aria-labelledby="strategy">
    <h3>Strategy, Governance &amp; Sector Solutions</h3>
    <ul>
      <li><strong>Governance:</strong> ITIL v4 Managing Professional • ISO/IEC 20000 • Asset/License (HAM/SAM) badges • FinOps for IT.</li>
      <li><strong>Compliance &amp; Access:</strong> Access reviews, evidence packs, retention &amp; eDiscovery coordination.</li>
      <li><strong>Sector Ops:</strong> Healthcare (HIS/LIMS/EHR ops), Finance (branch ops, PCI evidence with Cyber), Education (LMS ops, labs).</li>
      <li><strong>Accessibility:</strong> WCAG 2.2 AA readiness for public sector and regulated workloads.</li>
    </ul>
  </div>
</section>

<!-- Leadership Journey -->
<section id="leadership-pathways" class="section">
  <h2>Leadership Journey — How a 1:50 IT Leader is Built</h2>
  <p class="muted" style="max-width:900px;margin:0 auto 30px;text-align:center;">
    This is not a student program or an employment scheme — it is an Investor Education leadership mandate for running a full IT operations business unit.
  </p>

  <div class="grid">
    <div class="card">
      <h3>Step 1 — Formed</h3>
      <p><strong>You complete expert tracks in:</strong></p>
      <ul style="margin:10px 0;padding-left:20px;line-height:1.8">
        <li>ITIL/ITSM, identity/endpoint, network, collaboration, backup/DR</li>
        <li>ISO/IEC 20000, ISO 27001 coordination, ServiceNow/Jira Service Mgmt</li>
        <li>Leadership & commercial training (negotiation, stakeholder management, financial ops)</li>
      </ul>
    </div>
    <div class="card">
      <h3>Step 2 — Build the 1:50 Pod</h3>
      <p><strong>You recruit and develop 50 members across 5 pods:</strong></p>
      <ul style="margin:10px 0;padding-left:20px;line-height:1.8">
        <li>Platform Pod (10): Workplace, identity, collaboration</li>
        <li>Network Pod (10): LAN/WAN, Wi-Fi, connectivity</li>
        <li>Data & Protection Pod (10): Backup/DR, data ops, BI</li>
        <li>NOC & Tooling Pod (10): Monitoring, runbooks, CMDB</li>
        <li>Leadership Pod (10): Governance, CAB, reporting</li>
      </ul>
      <p class="muted">Using the Investor Education work-study model.</p>
    </div>
    <div class="card">
      <h3>Step 3 — Deploy & Govern</h3>
      <p><strong>You run SLAs and coordinate operations:</strong></p>
      <ul style="margin:10px 0;padding-left:20px;line-height:1.8">
        <li>Chair CAB, approve change windows, manage incident/problem/change processes</li>
        <li>Coordinate with Cybersecurity (security posture) & Intelligent Cloud (platform scale)</li>
        <li>Report KPIs, SLAs, and financial performance to clients monthly</li>
        <li>Maintain ISO/IEC 20000 readiness and operational excellence</li>
      </ul>
    </div>
    <div class="card">
      <h3>Step 4 — Earn & Scale</h3>
      <p><strong>You earn from team-building and operational revenue:</strong></p>
      <ul style="margin:10px 0;padding-left:20px;line-height:1.8">
        <li><strong>Team-building commission:</strong> 44,321 USD upon forming the pod</li>
        <li><strong>Operational revenue share:</strong> Performance-based residuals from managed services</li>
        <li><strong>Total pod revenue capacity:</strong> $3M–$8M per year across multi-site client portfolios</li>
        <li>Scale by deploying multiple pods or expanding geographic coverage</li>
      </ul>
    </div>
  </div>

  <div style="margin-top:40px;padding:30px;background:#f7fbff;border-radius:12px;border:1px solid #cfe2ff;">
    <h3 style="margin-top:0;color:#0b4f7a;">Leadership Certification Pathways</h3>
    <div class="grid" style="margin-top:20px;">
      <div>
        <h4 style="color:#0b4f7a;margin-bottom:10px;">Technical Leadership</h4>
        <p style="font-size:14px;line-height:1.6;margin:0;">ITIL 4 Managing Professional • ISO/IEC 20000 Lead Implementer • ISO 27001 Lead Implementer (with Cyber) • SRE Foundations • ServiceNow/Jira Service Mgmt Admin • Architecture for IT Ops (capacity/availability).</p>
      </div>
      <div>
        <h4 style="color:#0b4f7a;margin-bottom:10px;">Program & Delivery</h4>
        <p style="font-size:14px;line-height:1.6;margin:0;">PMP or PRINCE2 • Agile Scrum Master/PO • Change Enablement • Vendor & Contract Management • Financial Ops (FinOps for IT).</p>
      </div>
      <div>
        <h4 style="color:#0b4f7a;margin-bottom:10px;">Commercial & Leadership</h4>
        <p style="font-size:14px;line-height:1.6;margin:0;">Negotiation & Procurement • Stakeholder Management • Executive Reporting • Compliance & Audit Readiness.</p>
      </div>
    </div>
  </div>
</section>

<!-- Hire a 1:50 IT Team -->
<section id="hire-it-team" class="section">
  <h2>Hire a 1:50 IT Team</h2>
  <p style="color:#6b7280;max-width:900px;margin:0 auto 30px;text-align:center;"><strong>For Organizations:</strong> Tell us about your environment and objectives. We'll propose the right package, pod composition, and SLAs tailored to your user count, sites, and compliance needs.</p>
  <form method="post" action="send-mail.php" class="application-form">
    <div class="form-row">
      <div class="field"><label>Full Name</label><input name="name" required></div>
      <div class="field"><label>Email</label><input name="email" type="email" required></div>
    </div>
    <div class="form-row">
      <div class="field"><label>Company / Organization</label><input name="company"></div>
      <div class="field"><label>Users / Sites</label><input name="scale" placeholder="e.g., 500 users across 8 sites"></div>
    </div>
    <div class="form-row">
      <div class="field"><label>Primary Need</label>
        <select name="need">
          <option>Managed IT Core</option>
          <option>Secure Workplace</option>
          <option>Network Core &amp; Campus Wi-Fi</option>
          <option>Business Continuity+</option>
          <option>Consulting / Strategy</option>
        </select>
      </div>
      <div class="field"><label>Timeline</label><input name="timeline" placeholder="e.g., 4–8 weeks"></div>
    </div>
    <div class="field">
      <label>Notes</label>
      <textarea name="message" rows="5" placeholder="Briefly describe goals, constraints, vendors in place, and compliance needs…"></textarea>
    </div>
    <input type="hidden" name="industry" value="Information Technology — Client Inquiry">
    <input type="hidden" name="source" value="Hire a 1:50 IT Team">
    <button class="btn" type="submit">Request Proposal</button>
  </form>
</section>

<!-- Apply (Team Leader) -->
<section id="apply-leader" class="section">
  <h2>Apply to Become a Team Leader</h2>
  <p style="color:#6b7280;max-width:900px;margin:0 auto 30px;text-align:center;">
    <strong>For Leaders:</strong> Only <strong>100 Team Leaders</strong> are accepted per industry. Build a certified 50-person delivery unit, deploy enterprise contracts, and earn $3M–$8M annually. This is not a client service—it's a leadership mandate in the 1:50 model.
  </p>
  <form method="post" action="send-mail.php" class="application-form">
    <div class="form-row">
      <div class="field"><label>Full Name</label><input name="name" required></div>
      <div class="field"><label>Email</label><input name="email" type="email" required></div>
    </div>
    <div class="form-row">
      <div class="field"><label>Phone</label><input name="phone" required></div>
      <div class="field"><label>Primary Focus</label><input name="focus" placeholder="e.g., Identity & Endpoint, Network/Wi-Fi, Collaboration, DR/BCP, NOC/Monitoring"></div>
    </div>
    <div class="field">
      <label>Why are you a fit to lead a 50-person operations unit?</label>
      <textarea name="message" rows="5" placeholder="Briefly describe your ITIL, infrastructure, identity, network, collaboration, and governance experience…"></textarea>
    </div>
    <input type="hidden" name="industry" value="Information Technology">
    <input type="hidden" name="source" value="Full Apply • IT Ops">
    <button class="btn" type="submit">Submit Application</button>
  </form>
</section>

<script>
// Wait for full DOM load
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initAccordions);
} else {
  initAccordions();
}

function initAccordions() {
  /* ==== Accordions ==== */
  const buttons = document.querySelectorAll('.accordion-button');
  
  if (!buttons.length) {
    console.warn('No accordion buttons found');
    return;
  }

  console.log('Initializing', buttons.length, 'accordion buttons');

  buttons.forEach((btn, index) => {
    // Skip if already initialized
    if (btn.dataset.initialized === '1') return;
    btn.dataset.initialized = '1';

    btn.onclick = function(e) {
      e.preventDefault();
      const content = this.nextElementSibling;
      
      if (!content || !content.classList.contains('accordion-content')) {
        console.error('Invalid accordion structure at index', index);
        return;
      }
      
      const isOpen = content.classList.contains('active');
      
      // Close all accordions
      document.querySelectorAll('.accordion-content').forEach(c => c.classList.remove('active'));
      document.querySelectorAll('.accordion-button').forEach(b => b.setAttribute('aria-expanded', 'false'));
      
      // Toggle current
      if (!isOpen) {
        content.classList.add('active');
        this.setAttribute('aria-expanded', 'true');
      }
      
      return false;
    };

    // Keyboard support
    btn.onkeydown = function(e) {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        this.click();
      }
    };
  });

  console.log('Accordions initialized successfully');
}

  /* ==== Tabs (Team Certification) ==== */
  initTabs();
}

function initTabs() {
  const tabBtns = document.querySelectorAll('.tab-btn');
  if (!tabBtns.length) {
    console.warn('No tab buttons found');
    return;
  }

  console.log('Initializing', tabBtns.length, 'tab buttons');

  const panels = {
    'ops-core': document.getElementById('tab-ops-core'),
    'data-ops': document.getElementById('tab-data-ops'),
    'strategy': document.getElementById('tab-strategy')
  };

  tabBtns.forEach((btn, index) => {
    // Skip if already initialized
    if (btn.dataset.tabInitialized === '1') return;
    btn.dataset.tabInitialized = '1';

    btn.onclick = function(e) {
      e.preventDefault();
      console.log('Tab clicked:', this.getAttribute('data-tab'));
      
      // Remove active from all tabs and panels
      tabBtns.forEach(b => b.classList.remove('active'));
      Object.values(panels).forEach(p => {
        if (p) p.classList.remove('active');
      });
      
      // Add active to clicked tab and corresponding panel
      this.classList.add('active');
      const key = this.getAttribute('data-tab');
      if (panels[key]) {
        panels[key].classList.add('active');
        console.log('Activated panel:', key);
      } else {
        console.error('Panel not found for:', key);
      }
      
      return false;
    };

    // Keyboard support
    btn.onkeydown = function(e) {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        this.click();
      }
    };
  });

  console.log('Tabs initialized successfully');
});

/* ==== Internal anchor validation (non-blocking) ==== */
(function(){
  const anchors = document.querySelectorAll('a[href^="#"]');
  anchors.forEach(a => {
    const id = a.getAttribute('href').slice(1);
    if (!id) return;
    if (!document.getElementById(id)) {
      console.warn('Missing section for anchor:', '#' + id);
    }
  });
})();
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Information Technology — Operations & Infrastructure",
  "description": "IT operations, identity/endpoint, network/Wi‑Fi, collaboration, backup/DR/BCP, monitoring and governance via 1:50 pods.",
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
    {"@type": "ListItem", "position": 3, "name": "Information Technology", "item": "<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>"}
  ]
}
</script>

<?php include 'footer.php'; ?>