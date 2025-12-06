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

<video autoplay muted loop playsinline class="page-video-bg">
  <source src="Videos/IT2.mp4" type="video/mp4">
</video>
<div class="page-video-overlay"></div>

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
    <a class="card" href="#model-efficiency">Why the 1:50 Model Works</a>
    <a class="card" href="#pods">Pod Composition &amp; Governance</a>
    <a class="card" href="#packages">Tiered Managed Service Packages</a>
    <a class="card" href="#compliance">Compliance &amp; Enterprise Standards</a>
    <a class="card" href="#kpis">KPIs &amp; SLA Targets</a>
    <a class="card" href="#timeline">Typical Delivery Timeline</a>
    <a class="card" href="#commercials">Commercials &amp; ROI</a>
    <a class="card" href="#governance">ITIL, Governance &amp; Security</a>
    <a class="card" href="#leadership-pathways">Leadership Journey</a>
    <a class="card" href="#faq">Common Questions (Investor FAQ)</a>
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

<!-- Why the 1:50 Model Works -->
<section id="model-efficiency" class="section">
  <h2>Why the 1:50 Model Works</h2>
  <p style="color:#6b7280;max-width:900px;margin:0 auto 30px;text-align:center;">
    The 1:50 ratio is purpose-built for IT operations efficiency. One certified leader governs 50 delivery professionals organized into 5 specialized pods of 10 each.
  </p>
  <div class="grid">
    <div class="card">
      <h3>Optimal Span of Control</h3>
      <p>Research shows 8–12 direct reports is optimal for technical leadership. With 5 pod leads reporting to 1 team leader, governance stays tight while pods maintain autonomy.</p>
      <p class="muted"><strong>Result:</strong> Clear accountability without micromanagement bottlenecks.</p>
    </div>
    <div class="card">
      <h3>Specialization at Scale</h3>
      <p>Each 10-person pod focuses on one domain (Platform, Network, Data Protection, NOC, Leadership). Deep expertise within pods, seamless handoffs between them.</p>
      <p class="muted"><strong>Result:</strong> Faster resolution, fewer escalations, higher first-contact resolution rates.</p>
    </div>
    <div class="card">
      <h3>Financial Viability</h3>
      <p>50-person teams generate $3M–$8M annually in managed services revenue. Leader overhead (governance, CAB, reporting) is 10–15% of billable hours—sustainable and scalable.</p>
      <p class="muted"><strong>Result:</strong> Profitable unit economics for both leader and organization.</p>
    </div>
    <div class="card">
      <h3>Enterprise-Grade SLAs</h3>
      <p>Pod structure supports 8×5, 12×5, or 24×7 coverage through shift rotation. One NOC pod handles monitoring; other pods respond to escalations within defined SLA windows.</p>
      <p class="muted"><strong>Result:</strong> Uptime commitments (99.5%–99.9%) backed by real capacity.</p>
    </div>
    <div class="card">
      <h3>Growth Path</h3>
      <p>Start with 1 pod (10 people, focused service). Add pods as client base grows. Leader scales to full 50-person team over 12–24 months, matching revenue growth.</p>
      <p class="muted"><strong>Result:</strong> Lower startup risk, phased investment, proven scalability.</p>
    </div>
    <div class="card">
      <h3>Work-Study Model</h3>
      <p>Team members gain certifications while delivering services. Leader mentors 50 professionals through ITIL, infrastructure, and commercial pathways—building institutional knowledge.</p>
      <p class="muted"><strong>Result:</strong> Continuous skill improvement, reduced reliance on external hires.</p>
    </div>
  </div>
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
<section id="commercials" class="section">
  <h2>Commercials — 1:50 Pods &amp; Leader ROI</h2>
  <p class="muted" style="max-width:900px;margin:0 auto 30px;text-align:center;">
    Commercials are aligned to the 1:50 leadership model and multi-contract scenarios: each pod delivers measurable value to enterprises, SMEs, and multi-site organizations, while leaders build long-term residual income from managed services.
  </p>
  <div class="grid">
    <div class="card">
      <h3>Managed IT Services Model</h3>
      <p>Enterprises and SMEs engage your 1:50 pod on multi-year managed services: helpdesk, endpoint/UEM, network operations, collaboration support, backup/DR, monitoring, and compliance reporting.</p>
      <p class="muted"><strong>Revenue model:</strong> Monthly retainers based on user count, sites, and SLA tiers (Standard/Advanced/Enterprise).</p>
    </div>
    <div class="card">
      <h3>Multi-Client Portfolio</h3>
      <p>Because your pod is structured by function (Platform, Network, Data Protection, NOC, Leadership), it can serve multiple organizations simultaneously: regional clients, branch networks, and sector-specific deployments.</p>
      <p class="muted"><strong>Scale:</strong> A single 50-person team portfolio can support 500–2000+ users across multiple clients in parallel.</p>
    </div>
    <div class="card">
      <h3>Leader ROI (Narrative)</h3>
      <p>As an IT Operations Team Leader you build a 1:50 pod and earn:</p>
      <ul>
        <li><strong>≈ 650 USD/month</strong> active leadership income for 5 years</li>
        <li><strong>44,321 USD</strong> – structured team-building commissions</li>
        <li><strong>$3M–$8M/year</strong> potential residual income from mature multi-site managed services contracts</li>
      </ul>
      <p class="muted">Figures are illustrative and calibrated per country and sector. Details live in the Finance Pack.</p>
    </div>
  </div>

  <h3 style="margin-top:24px;">Pod Economics (Illustrative)</h3>
  <div class="card">
    <table>
      <thead>
        <tr>
          <th>Pod Type</th>
          <th>Velocity (pts/mo)</th>
          <th>Monthly Rate (USD)</th>
          <th>Typical Scope</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Platform Pod</td>
          <td>80–120</td>
          <td>$45k–$75k</td>
          <td>Identity, endpoints, servers, collaboration</td>
        </tr>
        <tr>
          <td>Network Pod</td>
          <td>70–110</td>
          <td>$40k–$70k</td>
          <td>LAN/WAN, Wi-Fi, SD-WAN, NAC, QoS</td>
        </tr>
        <tr>
          <td>Data &amp; Protection Pod</td>
          <td>75–115</td>
          <td>$42k–$72k</td>
          <td>DBA, backup/DR, BCP, BI/analytics</td>
        </tr>
        <tr>
          <td>NOC &amp; Tooling Pod</td>
          <td>85–125</td>
          <td>$48k–$78k</td>
          <td>Monitoring, CMDB, service desk, ITSM</td>
        </tr>
        <tr>
          <td>Leadership Pod</td>
          <td>60–90</td>
          <td>$35k–$60k</td>
          <td>vCIO, CAB, governance, vendor mgmt</td>
        </tr>
      </tbody>
    </table>
    <p class="muted" style="margin-top:12px;font-size:14px;">Rates vary by geography, user count, SLA tier (Standard/Advanced/Enterprise), and coverage hours (8×5, 12×5, 24×7). Final commercials are agreed per contract.</p>
  </div>

  <h3 style="margin-top:24px;">Leader ROI Ladder (Illustrative)</h3>
  <div class="card">
    <table>
      <thead>
        <tr>
          <th>Milestone</th>
          <th>Active Commission</th>
          <th>Residual (Managed Services)</th>
          <th>Cumulative Annualized</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Month 3</td>
          <td>$14,440</td>
          <td>$600k–$1.2M</td>
          <td>$800k–$1.5M</td>
        </tr>
        <tr>
          <td>Month 6</td>
          <td>$28,880</td>
          <td>$1.5M–$3.0M</td>
          <td>$2.0M–$4.0M</td>
        </tr>
        <tr>
          <td>Month 12</td>
          <td>$44,321</td>
          <td>$3.0M–$8.0M</td>
          <td>$4.0M–$10M</td>
        </tr>
      </tbody>
    </table>
    <p class="muted" style="margin-top:12px;font-size:14px;">Aligned to the 1:50 leadership model and multi-client managed services portfolios. Actual numbers vary by region, client mix (SME vs. enterprise), and service tier adoption. Full breakdown in Finance Pack.</p>
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
    <p style="margin-top:12px;padding:10px;background:#f0f9ff;border-left:3px solid #0b4f7a;font-size:14px;">
      <strong>Delivered by:</strong> Network Pod<br>
      <strong>Typical scope:</strong> 100–2000 users, multi-site deployments<br>
      <strong>Contract value:</strong> $12K–$55K/month depending on sites, coverage (8×5 vs 24×7), and SD-WAN complexity
    </p>
  </div>

  <button class="accordion-button" aria-expanded="false">Hardware, Services &amp; Infrastructure</button>
  <div class="accordion-content">
    <ul>
      <li>Asset lifecycle: procure → image → deploy → refresh → retire</li>
      <li>Servers/VMs, printing, conference/collaboration rooms, endpoint standards</li>
      <li>Backup/restore, DR drills, continuity runbooks</li>
    </ul>
    <p class="muted"><em>KPIs:</em> SLA attainment, first-contact resolution, restore success, device compliance.</p>
    <p style="margin-top:12px;padding:10px;background:#f0f9ff;border-left:3px solid #0b4f7a;font-size:14px;">
      <strong>Delivered by:</strong> Platform Pod + Data & Protection Pod + NOC & Tooling Pod<br>
      <strong>Typical scope:</strong> 50–2000+ users, endpoint fleets, server/VM estates<br>
      <strong>Contract value:</strong> $15K–$70K/month depending on device count, DR requirements, and coverage hours
    </p>
  </div>

  <button class="accordion-button" aria-expanded="false">IT Management &amp; Strategy</button>
  <div class="accordion-content">
    <ul>
      <li>ITIL processes: Incident, Request, Problem, Change, Release, Service Catalog, SLAs/OLAs</li>
      <li>vCIO advisory, budgeting &amp; capacity planning, vendor management</li>
      <li>Transformation &amp; adoption (communications, training, champions network)</li>
    </ul>
    <p class="muted"><em>KPIs:</em> CSAT, backlog age, CAB success rate, SLA compliance.</p>
    <p style="margin-top:12px;padding:10px;background:#f0f9ff;border-left:3px solid #0b4f7a;font-size:14px;">
      <strong>Delivered by:</strong> Leadership Pod + NOC & Tooling Pod<br>
      <strong>Typical scope:</strong> All tiers — foundational governance for any 1:50 team engagement<br>
      <strong>Contract value:</strong> Included in base pod rates; consulting add-ons (vCIO, transformation) $8K–$25K/month
    </p>
  </div>

  <button class="accordion-button" aria-expanded="false">Storage &amp; Data Management</button>
  <div class="accordion-content">
    <ul>
      <li>SAN/NAS/cloud storage planning, tiering, capacity &amp; performance</li>
      <li>Database admin (HA, backup/restore, tuning, observability)</li>
      <li>ETL pipelines, data quality &amp; stewardship, governed BI layers</li>
    </ul>
    <p class="muted"><em>KPIs:</em> job success %, data freshness, query performance, RTO/RPO.</p>
    <p style="margin-top:12px;padding:10px;background:#f0f9ff;border-left:3px solid #0b4f7a;font-size:14px;">
      <strong>Delivered by:</strong> Data & Protection Pod<br>
      <strong>Typical scope:</strong> 10TB–500TB+ storage, 5–100 databases, BI for 50–2000 users<br>
      <strong>Contract value:</strong> $10K–$45K/month depending on data volumes, HA requirements, and BI complexity
    </p>
  </div>

  <button class="accordion-button" aria-expanded="false">Application Operations</button>
  <div class="accordion-content">
    <ul>
      <li>Run portals and internal tools, manage environments, service windows, rollbacks</li>
      <li>SSO/IAM integration, access reviews, telemetry &amp; availability SLOs (build work → Software Eng.)</li>
    </ul>
    <p class="muted"><em>KPIs:</em> uptime, incident MTTR, change success rate, adoption.</p>
    <p style="margin-top:12px;padding:10px;background:#f0f9ff;border-left:3px solid #0b4f7a;font-size:14px;">
      <strong>Delivered by:</strong> Platform Pod + NOC & Tooling Pod<br>
      <strong>Typical scope:</strong> 5–50 business applications, multi-environment (dev/test/prod)<br>
      <strong>Contract value:</strong> $8K–$35K/month per major application cluster depending on uptime SLAs and release cadence
    </p>
  </div>

  <button class="accordion-button" aria-expanded="false">SDLC Coordination (Boundary)</button>
  <div class="accordion-content">
    <ul>
      <li>Change windows, release coordination, environment readiness, operational acceptance (A/B, blue-green)</li>
      <li>Feature builds/SDLC live on <a href="software-engineering.php">Software &amp; Systems Engineering</a></li>
    </ul>
    <p class="muted"><em>KPIs:</em> change success %, incident avoidance, handover quality.</p>
    <p style="margin-top:12px;padding:10px;background:#fff9e6;border-left:3px solid #f59e0b;font-size:14px;">
      <strong>Delivered by:</strong> Leadership Pod (CAB governance) + Platform/NOC Pods (operational readiness)<br>
      <strong>Boundary:</strong> IT Ops coordinates releases; Software Engineering builds features. Collaborative handoff model.
    </p>
  </div>

  <button class="accordion-button" aria-expanded="false">Collaboration &amp; Productivity</button>
  <div class="accordion-content">
    <ul>
      <li>Microsoft 365/Google Workspace rollout, policies, governance</li>
      <li>Endpoint/security baselines (advanced controls → Cyber), adoption programs</li>
    </ul>
    <p class="muted"><em>KPIs:</em> adoption %, active usage, ticket reduction, automation coverage.</p>
    <p style="margin-top:12px;padding:10px;background:#f0f9ff;border-left:3px solid #0b4f7a;font-size:14px;">
      <strong>Delivered by:</strong> Platform Pod<br>
      <strong>Typical scope:</strong> 50–5000 users, M365/Google rollouts, adoption campaigns<br>
      <strong>Contract value:</strong> $6K–$30K/month depending on user count, advanced features (DLP, retention), and training programs
    </p>
  </div>

  <button class="accordion-button" aria-expanded="false">Training &amp; Enablement</button>
  <div class="accordion-content">
    <ul>
      <li>ITIL/ITSM foundations, service desk tooling, monitoring platforms</li>
      <li>End-user enablement (collaboration suites, best practices)</li>
    </ul>
    <p class="muted"><em>KPIs:</em> training CSAT, time-to-productivity, incident reductions.</p>
    <p style="margin-top:12px;padding:10px;background:#f0f9ff;border-left:3px solid #0b4f7a;font-size:14px;">
      <strong>Delivered by:</strong> Leadership Pod + Platform Pod<br>
      <strong>Typical scope:</strong> Onboarding programs, champions networks, certification pathways<br>
      <strong>Contract value:</strong> Included in Standard tier; dedicated programs $3K–$12K/month for large-scale transformations
    </p>
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
    <p style="margin-top:12px;padding:10px;background:#f0fdf4;border-left:3px solid #10b981;font-size:14px;">
      <strong>Package tiers:</strong> All tiers (Standard, Advanced, Enterprise) include core managed services<br>
      <strong>Typical ROI:</strong> 20–35% reduction in IT incident tickets within 6 months; 15–25% improvement in user satisfaction (CSAT) within 3–6 months; predictable monthly OPEX vs. variable break-fix costs
    </p>
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
    <p style="margin-top:12px;padding:10px;background:#f0fdf4;border-left:3px solid #10b981;font-size:14px;">
      <strong>Package tiers:</strong> Advanced & Enterprise tiers (requires CAB governance + release coordination)<br>
      <strong>Typical ROI:</strong> 30–50% reduction in production incidents caused by changes within 6–9 months; 95%+ change success rate; 40–60% faster release cycles with defined maintenance windows
    </p>
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
    <p style="margin-top:12px;padding:10px;background:#f0fdf4;border-left:3px solid #10b981;font-size:14px;">
      <strong>Package tiers:</strong> Available in all tiers; complexity scales with Advanced/Enterprise packages<br>
      <strong>Typical ROI:</strong> Executive dashboards operational within 8–12 weeks; 25–40% reduction in time spent on manual reporting; improved decision-making speed (data freshness from weekly to daily or real-time)
    </p>
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
    <p style="margin-top:12px;padding:10px;background:#f0fdf4;border-left:3px solid #10b981;font-size:14px;">
      <strong>Package tiers:</strong> Consulting add-on or standalone engagement (6–12 month programs)<br>
      <strong>Typical ROI:</strong> 15–30% reduction in IT operating costs within 12–18 months through vendor consolidation and process maturity; improved SLA compliance from 75–85% to 92–98%; measurable stakeholder satisfaction improvement
    </p>
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
    <p style="margin-top:12px;padding:10px;background:#f0fdf4;border-left:3px solid #10b981;font-size:14px;">
      <strong>Package tiers:</strong> Custom add-ons to Standard/Advanced/Enterprise base packages<br>
      <strong>Typical ROI:</strong> Sector-specific compliance achieved (HIPAA, PCI-DSS, FERPA) within 6–9 months; 20–35% faster sector app deployments vs. generic IT teams; reduced audit findings and regulatory risk
    </p>
  </div>
</section>

<!-- Service Catalog -->
<section id="catalog" class="section">
  <h2>Service Catalog (Comprehensive)</h2>
  <p style="color:#6b7280;max-width:900px;margin:0 auto 30px;text-align:center;">Quick reference showing what services each pod delivers, which tiers include them, and typical contract values.</p>
  <div class="grid">
    <div class="card">
      <h3>A. Workplace &amp; Endpoint</h3>
      <p>Imaging/Autopilot/DEP • UEM (Intune/Jamf/Workspace ONE) • app packaging • device posture • kiosk/VDI.</p>
      <p class="muted" style="margin-top:10px;font-size:13px;"><strong>Pod:</strong> Platform | <strong>Tiers:</strong> All | <strong>Value:</strong> $8K–$35K/mo</p>
    </div>
    <div class="card">
      <h3>B. Identity &amp; Access</h3>
      <p>Entra ID/AD • SSO/MFA • Conditional Access • SSPR • lifecycle (HR→IT) • B2B/B2C • RBAC reviews.</p>
      <p class="muted" style="margin-top:10px;font-size:13px;"><strong>Pod:</strong> Platform | <strong>Tiers:</strong> All | <strong>Value:</strong> $6K–$25K/mo</p>
    </div>
    <div class="card">
      <h3>C. Network &amp; Connectivity</h3>
      <p>LAN/WAN/SD-WAN • Wi-Fi surveys • NAC/802.1X • DHCP/DNS/IPAM • VPN/ZTNA • QoS • branch templates.</p>
      <p class="muted" style="margin-top:10px;font-size:13px;"><strong>Pod:</strong> Network | <strong>Tiers:</strong> All | <strong>Value:</strong> $12K–$55K/mo</p>
    </div>
    <div class="card">
      <h3>D. Servers &amp; Virtualization</h3>
      <p>Windows/Linux • VMware/Hyper-V/KVM • file/print • cert services • config mgmt (Ansible/etc.).</p>
      <p class="muted" style="margin-top:10px;font-size:13px;"><strong>Pod:</strong> Platform | <strong>Tiers:</strong> All | <strong>Value:</strong> $10K–$40K/mo</p>
    </div>
    <div class="card">
      <h3>E. Collaboration &amp; Voice</h3>
      <p>M365/Google • Teams/Meet/Zoom • DLP &amp; retention • room systems • telephony/Teams Phone.</p>
      <p class="muted" style="margin-top:10px;font-size:13px;"><strong>Pod:</strong> Platform | <strong>Tiers:</strong> All | <strong>Value:</strong> $6K–$30K/mo</p>
    </div>
    <div class="card">
      <h3>F. Data Protection &amp; DR/BCP</h3>
      <p>Backup encryption • immutable backup • recovery testing • failover orchestration • tabletop exercises.</p>
      <p class="muted" style="margin-top:10px;font-size:13px;"><strong>Pod:</strong> Data & Protection | <strong>Tiers:</strong> Advanced/Enterprise | <strong>Value:</strong> $12K–$50K/mo</p>
    </div>
    <div class="card">
      <h3>G. Monitoring, NOC &amp; Tooling</h3>
      <p>Alert normalization • runbooks • escalation • CMDB sync • status pages • telemetry wallboards.</p>
      <p class="muted" style="margin-top:10px;font-size:13px;"><strong>Pod:</strong> NOC & Tooling | <strong>Tiers:</strong> All | <strong>Value:</strong> $8K–$35K/mo</p>
    </div>
    <div class="card">
      <h3>H. Service Desk &amp; Field</h3>
      <p>ITSM tooling • knowledge mgmt • rotas • VIP support • depot/IMACD • vendor dispatch &amp; RMA.</p>
      <p class="muted" style="margin-top:10px;font-size:13px;"><strong>Pod:</strong> NOC & Tooling + Platform | <strong>Tiers:</strong> All | <strong>Value:</strong> $10K–$45K/mo</p>
    </div>
    <div class="card">
      <h3>I. Asset, License &amp; Vendor</h3>
      <p>HAM/SAM • true-ups • shadow IT discovery • vendor scorecards • cost optimization.</p>
      <p class="muted" style="margin-top:10px;font-size:13px;"><strong>Pod:</strong> NOC & Tooling + Leadership | <strong>Tiers:</strong> Advanced/Enterprise | <strong>Value:</strong> $5K–$20K/mo</p>
    </div>
    <div class="card">
      <h3>J. Training &amp; Adoption</h3>
      <p>Champion networks • floor walks • micro-learning • policy onboarding • productivity clinics.</p>
      <p class="muted" style="margin-top:10px;font-size:13px;"><strong>Pod:</strong> Leadership + Platform | <strong>Tiers:</strong> Standard (basic), Advanced/Enterprise (comprehensive) | <strong>Value:</strong> Included or $3K–$12K/mo</p>
    </div>
  </div>
</section>

<!-- Client Success Scenarios -->
<section id="use-cases" class="section">
  <h2>Client Success Scenarios</h2>
  <p style="color:#6b7280;max-width:900px;margin:0 auto 30px;text-align:center;">Real-world scenarios showing how 1:50 IT teams solve business problems, which pods deliver, and typical outcomes.</p>
  <div class="grid">
    <div class="card">
      <h3>SME IT Foundations</h3>
      <p><strong>Challenge:</strong> 150-user company with reactive break-fix IT, no SLAs, frequent downtime.</p>
      <p><strong>Solution:</strong> Standard tier managed services — helpdesk, endpoint mgmt, backup/DR, M365 rollout with adoption training.</p>
      <p class="muted" style="margin-top:8px;font-size:13px;"><strong>Pods:</strong> Platform + NOC & Tooling + Leadership</p>
      <p class="muted" style="font-size:13px;"><strong>Timeline:</strong> 8–12 weeks to steady-state</p>
      <p class="muted" style="font-size:13px;"><strong>Contract:</strong> $22K–$35K/month</p>
      <p style="margin-top:8px;font-size:14px;color:#059669;"><strong>Outcome:</strong> 28% reduction in incidents, 99.6% uptime, CSAT from 3.2 to 4.7/5 within 6 months.</p>
    </div>
    <div class="card">
      <h3>Multi-Site Branch Standardization</h3>
      <p><strong>Challenge:</strong> Regional bank with 12 branches, inconsistent IT setups, manual patching, compliance gaps.</p>
      <p><strong>Solution:</strong> Advanced tier with golden-image endpoints, network templates, centralized asset tracking, monthly SLA reporting.</p>
      <p class="muted" style="margin-top:8px;font-size:13px;"><strong>Pods:</strong> Platform + Network + NOC & Tooling + Leadership</p>
      <p class="muted" style="font-size:13px;"><strong>Timeline:</strong> 16–20 weeks (pilot 2 branches, then rollout)</p>
      <p class="muted" style="font-size:13px;"><strong>Contract:</strong> $65K–$85K/month</p>
      <p style="margin-top:8px;font-size:14px;color:#059669;"><strong>Outcome:</strong> 31% fewer tickets, patch compliance 97%+, audit pass, predictable OPEX vs. variable break-fix costs.</p>
    </div>
    <div class="card">
      <h3>Hybrid Cloud Integration</h3>
      <p><strong>Challenge:</strong> Manufacturer migrating on-prem ERP to cloud; needs SSO, stable operations, defined change windows for 24×7 production.</p>
      <p><strong>Solution:</strong> Enterprise tier with identity/SSO integration, CAB governance, release coordination, application operations support.</p>
      <p class="muted" style="margin-top:8px;font-size:13px;"><strong>Pods:</strong> Platform + NOC & Tooling + Leadership (CAB)</p>
      <p class="muted" style="font-size:13px;"><strong>Timeline:</strong> 12–16 weeks (planning, pilot, cutover)</p>
      <p class="muted" style="font-size:13px;"><strong>Contract:</strong> $55K–$75K/month</p>
      <p style="margin-top:8px;font-size:14px;color:#059669;"><strong>Outcome:</strong> Zero production incidents during migration, 99.8% uptime post-cutover, change success rate 96%.</p>
    </div>
    <div class="card">
      <h3>Executive BI & Analytics</h3>
      <p><strong>Challenge:</strong> Retail chain needs real-time sales/inventory dashboards; current reports are manual, weekly, error-prone.</p>
      <p><strong>Solution:</strong> Advanced tier with ETL pipelines, governed BI layers, executive KPI dashboards for finance, ops, sales teams.</p>
      <p class="muted" style="margin-top:8px;font-size:13px;"><strong>Pods:</strong> Data & Protection + Leadership</p>
      <p class="muted" style="font-size:13px;"><strong>Timeline:</strong> 10–14 weeks (data model, ETL, dashboards, training)</p>
      <p class="muted" style="font-size:13px;"><strong>Contract:</strong> $28K–$42K/month</p>
      <p style="margin-top:8px;font-size:14px;color:#059669;"><strong>Outcome:</strong> Data freshness from weekly to daily, 35% reduction in manual reporting time, faster inventory decisions.</p>
    </div>
    <div class="card">
      <h3>ITIL Service Maturity</h3>
      <p><strong>Challenge:</strong> Government agency needs ITIL processes, documented SLAs, compliance-ready reporting for audits.</p>
      <p><strong>Solution:</strong> Consulting engagement (6 months) + Advanced tier operations — design incident/change/problem processes, implement service catalog, live SLA tracking.</p>
      <p class="muted" style="margin-top:8px;font-size:13px;"><strong>Pods:</strong> Leadership + NOC & Tooling</p>
      <p class="muted" style="font-size:13px;"><strong>Timeline:</strong> 20–24 weeks (design, pilot, rollout, CSI)</p>
      <p class="muted" style="font-size:13px;"><strong>Contract:</strong> $48K–$62K/month</p>
      <p style="margin-top:8px;font-size:14px;color:#059669;"><strong>Outcome:</strong> SLA compliance from 78% to 94%, audit findings cleared, CSAT +18%, measurable service quality improvement.</p>
    </div>
    <div class="card">
      <h3>Healthcare Clinic IT Rollout</h3>
      <p><strong>Challenge:</strong> Healthcare network adding 8 new clinics; needs standardized IT, EHR integration, PHI-compliant workflows, DR readiness.</p>
      <p><strong>Solution:</strong> Advanced tier with healthcare-specific templates, device fleet mgmt, immutable backup, DR drills, audit support (with Cybersecurity).</p>
      <p class="muted" style="margin-top:8px;font-size:13px;"><strong>Pods:</strong> Platform + Network + Data & Protection + Leadership</p>
      <p class="muted" style="font-size:13px;"><strong>Timeline:</strong> 24–28 weeks (pilot 1 clinic, then rollout 7)</p>
      <p class="muted" style="font-size:13px;"><strong>Contract:</strong> $72K–$95K/month</p>
      <p style="margin-top:8px;font-size:14px;color:#059669;"><strong>Outcome:</strong> RPO 15m, RTO 2h, HIPAA audit pass, 26% fewer IT-related clinic delays, standardized support across all sites.</p>
    </div>
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
  <h2>Team Certification Pathways — Complete 1:50 Pod Coverage</h2>
  <p class="muted">Five certification tracks aligned to the five delivery pods, covering every service domain for $3M–$8M+ annual revenue capacity. Each track has Foundation → Intermediate → Advanced → Expert progression over 4–5 years. Development/SDLC, big-data/ML, and SOC/MDR live on Software Engineering, Intelligent Cloud, and Cybersecurity pages.</p>

  <div class="tabs" role="tablist">
    <button class="tab-btn active" onclick="switchTab('leadership')" role="tab" aria-controls="tab-leadership">A) Leadership & Governance</button>
    <button class="tab-btn" onclick="switchTab('platform')" role="tab" aria-controls="tab-platform">B) Platform & Collaboration</button>
    <button class="tab-btn" onclick="switchTab('network')" role="tab" aria-controls="tab-network">C) Network & Connectivity</button>
    <button class="tab-btn" onclick="switchTab('data-protection')" role="tab" aria-controls="tab-data-protection">D) Data & Protection</button>
    <button class="tab-btn" onclick="switchTab('noc-tooling')" role="tab" aria-controls="tab-noc-tooling">E) NOC & Tooling</button>
  </div>
  
  <script>
  function switchTab(tabId) {
    // Remove active from all buttons and panels
    document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
    document.querySelectorAll('.tab-panel').forEach(panel => panel.classList.remove('active'));
    
    // Add active to clicked button and corresponding panel
    event.target.classList.add('active');
    document.getElementById('tab-' + tabId).classList.add('active');
  }
  </script>

  <div id="tab-leadership" class="tab-panel active" role="tabpanel" aria-labelledby="leadership">
    <h3>A) Leadership & Governance Pod — Strategic IT Operations Leadership</h3>
    <p style="margin-bottom:16px;color:#6b7280;"><strong>Revenue impact:</strong> $35K–$60K/month pod revenue | <strong>Roles:</strong> IT Ops Architect, vCIO, PMO, CAB Chair | <strong>Service coverage:</strong> ITIL processes, governance, strategy, vendor management, financial/commercial oversight</p>
    <ul>
      <li><strong>Foundation (Year 1):</strong> ITIL 4 Foundation • PMP/PRINCE2 Foundation • Agile/Scrum basics • Financial Management for IT • Vendor Management fundamentals • Stakeholder Engagement.</li>
      <li><strong>Intermediate (Year 2):</strong> ITIL 4 Strategist • ISO/IEC 20000 Foundation • COBIT 2019 Foundation • Change Management (PROSCI/ADKAR) • vCIO Advisory frameworks • Contract & SLA negotiation.</li>
      <li><strong>Advanced (Year 3):</strong> ITIL 4 Managing Professional (full suite) • ISO/IEC 20000 Lead Implementer • Enterprise Architecture (TOGAF/Zachman) • FinOps Certified Practitioner • Asset/License Management (HAM/SAM) • Service Integration & Management (SIAM).</li>
      <li><strong>Expert (Year 4-5):</strong> ITIL 4 Strategic Leader • Business Relationship Management Professional (BRM) • Lean Six Sigma Green/Black Belt • IT Governance frameworks • Multi-site Operations Leadership • Executive Communication & Board Reporting.</li>
      <li><strong>Sector depth:</strong> Healthcare IT leadership (HIPAA ops), Financial IT (PCI coordination), Education (FERPA/accessibility), Public Sector (compliance frameworks).</li>
    </ul>
    <p class="muted" style="margin-top:12px;"><strong>Career path:</strong> IT Ops Team Leader → IT Operations Director → VP/Head of IT Operations → CIO track</p>
  </div>

  <div id="tab-platform" class="tab-panel" role="tabpanel" aria-labelledby="platform">
    <h3>B) Platform & Collaboration Pod — Identity, Endpoint, Servers, Productivity</h3>
    <p style="margin-bottom:16px;color:#6b7280;"><strong>Revenue impact:</strong> $45K–$75K/month pod revenue | <strong>Roles:</strong> Identity Engineer, Endpoint Specialist, Server Admin, Collaboration Engineer | <strong>Service coverage:</strong> Identity/access, endpoint/UEM, servers/virtualization, M365/Google, collaboration governance</p>
    <ul>
      <li><strong>Foundation (Year 1):</strong> CompTIA A+ • MS-900 (M365 Fundamentals) • MD-102 (Endpoint Administrator) • SC-900 (Security Fundamentals) • MS-102 (M365 Administrator) • Linux Essentials.</li>
      <li><strong>Intermediate (Year 2):</strong> SC-300 (Identity & Access Administrator) • AZ-104 (Azure Administrator) • Intune/Jamf/Workspace ONE certifications • MS-720 (Teams Administrator) • LFCS (Linux Foundation Certified SysAdmin) • VMware VCP or Hyper-V specialist.</li>
      <li><strong>Advanced (Year 3):</strong> SC-100 (Cybersecurity Architect — identity focus) • AZ-305 (Azure Solutions Architect) • Advanced UEM (zero-touch, kiosk, VDI) • MS-700 (Teams Voice Engineer) • RHCSA (Red Hat) or LPIC-2 • Advanced virtualization (vSphere, Hyper-V clustering).</li>
      <li><strong>Expert (Year 4-5):</strong> Entra ID/AD advanced architecture • Conditional Access policy frameworks • Privileged Identity Management (PIM) • Collaboration governance at scale (DLP, retention, compliance) • Server automation (Ansible, Chef, Puppet) • Multi-forest/multi-tenant architectures.</li>
      <li><strong>Sector depth:</strong> Healthcare device management (HIPAA endpoints), Financial branch endpoints (PCI-compliant imaging), Education (lab management, student devices), Manufacturing (rugged/industrial endpoints).</li>
    </ul>
    <p class="muted" style="margin-top:12px;"><strong>Career path:</strong> Platform Engineer → Senior Platform Architect → Principal Engineer (Identity/Collaboration/Endpoint specialization)</p>
  </div>

  <div id="tab-network" class="tab-panel" role="tabpanel" aria-labelledby="network">
    <h3>C) Network & Connectivity Pod — LAN, WAN, Wi-Fi, SD-WAN, Security</h3>
    <p style="margin-bottom:16px;color:#6b7280;"><strong>Revenue impact:</strong> $40K–$70K/month pod revenue | <strong>Roles:</strong> Network Engineer, Wi-Fi Specialist, SD-WAN Engineer, NAC Administrator | <strong>Service coverage:</strong> LAN/WAN design, Wi-Fi, SD-WAN, NAC, DHCP/DNS/IPAM, VPN/ZTNA, QoS, branch templates</p>
    <ul>
      <li><strong>Foundation (Year 1):</strong> CompTIA Network+ • CCNA (Cisco) or equivalent (Aruba, Juniper) • Wi-Fi fundamentals • DHCP/DNS/IPAM basics • Network security fundamentals • Cable plant & physical layer.</li>
      <li><strong>Intermediate (Year 2):</strong> CCNP Enterprise (ENCOR + ENARSI) or Aruba ACMP • Wi-Fi Design (CWDP/Ekahau) • SD-WAN fundamentals (Cisco Meraki/Fortinet/VMware VeloCloud) • NAC/802.1X (ClearPass, ISE, FortiNAC) • VPN/ZTNA architectures.</li>
      <li><strong>Advanced (Year 3):</strong> CCNP Enterprise Wireless (ENWLSD + ENWLSI) or Aruba ACMX • SD-WAN Professional (multi-vendor) • Advanced NAC policy design • QoS & traffic engineering • Multi-site WAN optimization • Network automation (Python, Ansible for networking).</li>
      <li><strong>Expert (Year 4-5):</strong> CCIE Enterprise Infrastructure or Aruba Expert • Wi-Fi 6E/7 advanced design • Zero Trust Network Architecture (ZTNA) • Branch-in-a-box templates • Multi-region connectivity (MPLS, Internet, 5G) • Network observability & telemetry • Carrier/ISP coordination.</li>
      <li><strong>Sector depth:</strong> Healthcare network segmentation (medical devices), Financial branch networking (PCI zones), Education (campus networks, high-density Wi-Fi), Manufacturing (OT/IT convergence, industrial protocols).</li>
    </ul>
    <p class="muted" style="margin-top:12px;"><strong>Career path:</strong> Network Engineer → Senior Network Architect → Principal Network Engineer → Network Infrastructure Director</p>
  </div>

  <div id="tab-data-protection" class="tab-panel" role="tabpanel" aria-labelledby="data-protection">
    <h3>D) Data & Protection Pod — DBA, Backup/DR/BCP, BI/Analytics</h3>
    <p style="margin-bottom:16px;color:#6b7280;"><strong>Revenue impact:</strong> $42K–$72K/month pod revenue | <strong>Roles:</strong> Database Administrator, Backup/DR Specialist, BI Analyst, Data Engineer | <strong>Service coverage:</strong> SQL/NoSQL admin, backup/restore, DR/BCP, storage, ETL, BI dashboards, data governance</p>
    <ul>
      <li><strong>Foundation (Year 1):</strong> SQL Fundamentals (Postgres/SQL Server/MySQL) • Backup basics (Veeam/Commvault/Rubrik Associate) • Storage fundamentals (SAN/NAS) • Power BI/Tableau/Looker Analyst • ETL basics • Data quality fundamentals.</li>
      <li><strong>Intermediate (Year 2):</strong> Database Administration Professional (Microsoft MCSA successor/Oracle OCP/PostgreSQL) • Veeam/Commvault/Rubrik Professional • Storage design & capacity planning • dbt Fundamentals • Data modeling & warehousing • BI governance & row-level security.</li>
      <li><strong>Advanced (Year 3):</strong> Advanced DBA (HA/clustering/replication/performance tuning) • Backup immutability & air-gap architectures • DR orchestration & failover automation • Business Continuity Planning (BCP) certification • Advanced BI (DAX, complex data models, paginated reports) • Data lineage & cataloging (Collibra/Alation).</li>
      <li><strong>Expert (Year 4-5):</strong> Database Architecture (multi-region, sharding, polyglot persistence) • Disaster Recovery Planning Professional (DRI/BCI) • Recovery testing frameworks & tabletop exercises • Executive KPI dashboards & data storytelling • DataOps & governed analytics • RPO/RTO optimization & cost modeling.</li>
      <li><strong>Sector depth:</strong> Healthcare data (HIPAA retention, EHR backup), Financial data (SOX compliance, transaction integrity), Education (student data protection, FERPA), Manufacturing (SCADA/historian backup).</li>
      <li><strong>Boundary:</strong> Big data/ML/data lakes → <strong>Intelligent Cloud</strong>; SIEM/security analytics → <strong>Cybersecurity</strong>.</li>
    </ul>
    <p class="muted" style="margin-top:12px;"><strong>Career path:</strong> DBA/BI Analyst → Senior Data Engineer → Principal Data Architect → Head of Data Operations</p>
  </div>

  <div id="tab-noc-tooling" class="tab-panel" role="tabpanel" aria-labelledby="noc-tooling">
    <h3>E) NOC & Tooling Pod — Monitoring, ITSM, CMDB, Automation, Incident Response</h3>
    <p style="margin-bottom:16px;color:#6b7280;"><strong>Revenue impact:</strong> $48K–$78K/month pod revenue | <strong>Roles:</strong> NOC Engineer, ITSM Administrator, Monitoring Specialist, Automation Engineer, On-call Coordinator | <strong>Service coverage:</strong> 24×7 monitoring, service desk/ITSM, CMDB, asset/license management, runbooks, on-call, status pages</p>
    <ul>
      <li><strong>Foundation (Year 1):</strong> CompTIA IT Fundamentals+ • ITIL 4 Foundation • HDI Support Center Analyst • Monitoring basics (Datadog/Splunk/ELK/Prometheus) • ServiceNow/Jira Service Management Fundamentals • Incident & Request Management.</li>
      <li><strong>Intermediate (Year 2):</strong> ITIL 4 Specialist (Monitor, Support & Fulfil) • ServiceNow System Administrator or Jira Admin • Monitoring platform professional (Datadog/Splunk/Grafana certifications) • CMDB design & population • Asset Management (ITAM Foundation) • PagerDuty/Opsgenie on-call design.</li>
      <li><strong>Advanced (Year 3):</strong> ITIL 4 Specialist (Create, Deliver & Support) • Advanced ITSM (change/problem/knowledge management) • Observability engineering (logs/metrics/traces correlation) • Runbook automation (Ansible/Python) • License optimization (SAM/HAM Professional) • SLA reporting & KPI dashboards.</li>
      <li><strong>Expert (Year 4-5):</strong> Site Reliability Engineering (SRE) for IT Ops • Advanced automation (self-healing, auto-remediation) • Chaos engineering for resilience testing • Enterprise CMDB federation • Status page & incident communication at scale • On-call culture & burnout prevention • Proactive monitoring & AIOps.</li>
      <li><strong>Sector depth:</strong> Healthcare NOC (patient safety-critical monitoring), Financial NOC (transaction monitoring, branch uptime), Education (academic calendar-aware support), Manufacturing (OT monitoring integration).</li>
    </ul>
    <p class="muted" style="margin-top:12px;"><strong>Career path:</strong> NOC Analyst → NOC Team Lead → Service Delivery Manager → IT Operations Manager → Head of Service Operations</p>
  </div>
</section>

<!-- Typical Delivery Timeline -->
<section id="timeline" class="section">
  <h2>Typical Delivery Timeline</h2>
  <p style="color:#6b7280;max-width:900px;margin:0 auto 30px;text-align:center;">
    From assessment to steady-state operations, here's how a 1:50 IT team typically deploys enterprise services.
  </p>
  <div class="grid">
    <div class="card">
      <h3>Phase 1: Assessment & Design (Weeks 1–4)</h3>
      <ul style="text-align:left;margin:10px 0;">
        <li>Discovery: user count, sites, infrastructure inventory</li>
        <li>Define SLA targets, coverage hours, escalation paths</li>
        <li>Map existing tools to ITIL processes</li>
        <li>Staffing plan: which pods launch first, phased hiring</li>
      </ul>
      <p class="muted"><strong>Deliverable:</strong> Service design document, pod roadmap, commercial proposal.</p>
    </div>
    <div class="card">
      <h3>Phase 2: Pilot & Onboarding (Weeks 5–12)</h3>
      <ul style="text-align:left;margin:10px 0;">
        <li>Launch first pod (typically Platform or Service Desk)</li>
        <li>Deploy tooling: ITSM, monitoring, CMDB baseline</li>
        <li>Run pilot with 1–2 sites or departments</li>
        <li>Refine runbooks, SLA reporting, escalation</li>
      </ul>
      <p class="muted"><strong>Deliverable:</strong> Pilot SLA report, lessons learned, go-live readiness.</p>
    </div>
    <div class="card">
      <h3>Phase 3: Rollout (Months 3–6)</h3>
      <ul style="text-align:left;margin:10px 0;">
        <li>Add remaining pods (Network, Data Protection, NOC)</li>
        <li>Expand to all sites using branch templates</li>
        <li>CAB goes live with change governance</li>
        <li>Monthly SLA packs, exec dashboards operational</li>
      </ul>
      <p class="muted"><strong>Deliverable:</strong> Full 1:50 team operational, all services in production.</p>
    </div>
    <div class="card">
      <h3>Phase 4: Steady-State & Optimization (Month 6+)</h3>
      <ul style="text-align:left;margin:10px 0;">
        <li>CSI: quarterly SLA reviews, KPI trend analysis</li>
        <li>Automation: reduce toil, improve FCR</li>
        <li>Capacity planning: add services or scale existing</li>
        <li>Residual revenue scales with multi-site growth</li>
      </ul>
      <p class="muted"><strong>Deliverable:</strong> Continuous improvement, predictable OPEX, SLA excellence.</p>
    </div>
  </div>
  <p style="margin-top:20px;color:#6b7280;text-align:center;">
    Timeline varies by organization size and complexity. Smaller deployments (50–200 users) may reach steady-state in 8–12 weeks. Enterprise rollouts (1000+ users) typically span 6–9 months.
  </p>
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

<!-- Common Questions (Investor & Buyer FAQ) -->
<section id="faq" class="section">
  <h2>Common Questions</h2>
  <p style="color:#6b7280;max-width:900px;margin:0 auto 30px;text-align:center;">
    Investors and enterprise buyers frequently ask these questions about the 1:50 IT Operations model.
  </p>

  <button class="accordion-button" aria-expanded="false">How does a 50-person team generate $3M–$8M annually?</button>
  <div class="accordion-content">
    <p>Managed services are priced per user/device with tiered SLAs. A team serving 500–2000 users across multiple sites, with Standard/Advanced/Enterprise packages, generates $250K–$650K monthly recurring revenue. Annual total: $3M–$8M. Leader commission (44,321 USD) covers team-building; residual revenue scales with contract growth.</p>
  </div>

  <button class="accordion-button" aria-expanded="false">Why 1:50 instead of smaller teams or outsourcing to large MSPs?</button>
  <div class="accordion-content">
    <p><strong>vs. smaller teams:</strong> Sub-10 person teams lack specialization—everyone does everything, limiting SLA commitments and scalability. 1:50 pods provide deep expertise per domain.<br><strong>vs. large MSPs:</strong> Traditional MSPs spread talent thin across many clients. 1:50 pods are dedicated units with one leader accountable for SLAs, governance, and financials. Higher consistency, faster response, tighter accountability.</p>
  </div>

  <button class="accordion-button" aria-expanded="false">What if our organization has fewer than 500 users?</button>
  <div class="accordion-content">
    <p>Start with 1–2 pods (10–20 people) focused on Service Desk + Platform or Network. Scale to full 50-person team as you grow sites, add services, or increase coverage hours (12×5 → 24×7). The model is flexible: pay for the pods you need, add capacity as revenue justifies.</p>
  </div>

  <button class="accordion-button" aria-expanded="false">How do you ensure SLA commitments (99.5%–99.9% uptime)?</button>
  <div class="accordion-content">
    <p>NOC pod provides 24×7 monitoring with defined escalation paths. Other pods rotate coverage for 8×5, 12×5, or 24×7 depending on tier. CAB governs change windows to minimize risk. Monthly SLA reports show actual vs. target; CSI process addresses gaps. SLAs are backed by real capacity, not promises.</p>
  </div>

  <button class="accordion-button" aria-expanded="false">What's the leader's role vs. pod leads?</button>
  <div class="accordion-content">
    <p><strong>Team Leader (1):</strong> Governs full 1:50 unit. Runs CAB, approves change windows, owns SLA reporting, manages commercials (invoicing, client escalations), and reports financial performance.<br><strong>Pod Leads (5):</strong> Each leads a 10-person specialized pod. Accountable for domain-specific SLAs (e.g., Network uptime, FCR for Service Desk). Report to Team Leader weekly on KPIs and risks.</p>
  </div>

  <button class="accordion-button" aria-expanded="false">Can we hire a 1:50 team for a fixed-term project, or is this long-term only?</button>
  <div class="accordion-content">
    <p>The model is designed for <strong>long-term managed services</strong> (12+ months) because building and certifying a 50-person team takes 3–6 months. For short-term projects (migrations, audits, consulting), consider our IT Consulting & Strategy services or hybrid engagement (1–2 pods for project + ongoing support).</p>
  </div>

  <button class="accordion-button" aria-expanded="false">How do you handle turnover in a 50-person team?</button>
  <div class="accordion-content">
    <p>Work-study model builds bench strength: junior team members progress through certifications while delivering services. Leader mentors succession pipeline within each pod. Typical turnover: 10–15% annually. Replacement hires onboard within 4–6 weeks using existing runbooks and shadowing. Institutional knowledge stays in the pod, not with individuals.</p>
  </div>

  <button class="accordion-button" aria-expanded="false">What happens if we outgrow one 1:50 team?</button>
  <div class="accordion-content">
    <p>Add a second 1:50 team with regional or service-line specialization (e.g., Team 1: Americas, Team 2: EMEA; or Team 1: Workplace/Network, Team 2: Data/Apps). Two leaders coordinate via shared CAB and SLA framework. This is the path to scaling beyond $8M annually while maintaining governance quality.</p>
  </div>
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