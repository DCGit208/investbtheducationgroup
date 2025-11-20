<?php
$page_title = "Business Development & Management — Investor Education Program";
$meta_description = "Fortune-500 grade growth: multi-country GTM, PMO, partner ecosystems, ERP/CRM alignment — delivered by a certified 1:50 pod with governance, KPIs, and clear commercials.";
$og_title = $page_title;
$og_description = $meta_description;
$og_image = "https://og-image.vercel.app/Business%20Development%20%26%20Management.png?theme=light&md=1&fontSize=80px";
$og_url = "https://invest.btheducationgroup.com/business-development.php";
?>
<?php 
// Page-scoped CSS for Business Development
$page_styles = ['assets/css/page/business-development.css'];
include 'header.php'; ?>

<?php 
$breadcrumb_items = [
  ['label' => 'Home', 'href' => 'index.php'],
  ['label' => 'Industries', 'href' => 'index.php#industries'],
  ['label' => 'Business Development & Management']
];
include 'breadcrumbs.php';
?>

<!-- Styles moved to assets/css/page/business-development.css -->

<section class="container bd-page">

  <!-- 1) Enterprise Hero -->
  <header>
    <div class="hero">
      <div class="hero-left">
        <h1>Lead. Scale. Govern.<br>Business Development &amp; Management Pods for Enterprise Growth</h1>
        <p class="lead">
          Multi-country GTM, PMO, partner ecosystems, ERP/CRM alignment—delivered by a certified <strong>1:50</strong> pod, governed to Fortune-500 standards.
        </p>
        <div class="cta-row">
          <a class="btn" href="#contact">Request Enterprise Scope Call</a>
          <a class="btn btn-outline" href="#leadership">Become a Team Leader (1:50)</a>
        </div>
        <div class="hero-kpis">
          <div class="k">
            <div style="opacity:.8;">Team-leader commission</div>
            <div style="font-weight:800;">
              <span class="hero-kpi-number" data-target="44321">44,321</span>&nbsp;USD
            </div>
          </div>
          <div class="k">
            <div style="opacity:.8;">Example leader annual income</div>
            <div style="font-weight:800;">
              <span class="hero-kpi-number" data-target="2127372">2,127,372</span>&nbsp;USD
            </div>
          </div>
          <div class="k">
            <div style="opacity:.8;">Example member annual income</div>
            <div style="font-weight:800;">
              <span class="hero-kpi-number" data-target="63822">63,822</span>&nbsp;USD
            </div>
          </div>
        </div>
        <div class="trust-strip">
          <span>PMI</span>•<span>PRINCE2</span>•<span>ITIL</span>•<span>ISO 9001/27001</span>•<span>SOC 2</span>•<span>GDPR</span>
        </div>
      </div>
      <div class="hero-right card">
        <h3>Why enterprises choose us</h3>
        <ul style="padding-left:18px; margin-top:8px;">
          <li>Repeatable market entries in months, not years</li>
          <li>Board-grade governance (OKRs, QBRs, benefits realization)</li>
          <li>ERP/CRM alignment across sales, finance, and ops</li>
          <li>Partner-sourced revenue motions that scale</li>
        </ul>
      </div>
    </div>
  </header>

  <!-- 2) Quick Navigation -->
  <section id="nav" class="section">
    <h2>Quick Navigation</h2>
    <div class="grid">
      <a class="card" href="#proof">Proof &amp; References</a>
      <a class="card" href="#deliver">What We Deliver</a>
      <a class="card" href="#operating-model">Operating Model (1:50)</a>
      <a class="card" href="#packages">Offer Packages</a>
      <a class="card" href="#governance">Enterprise Governance</a>
      <a class="card" href="#stack">Data &amp; Tech Stack</a>
      <a class="card" href="#commercials">Commercials &amp; ROI</a>
      <a class="card" href="#cases">Case Studies</a>
      <a class="card" href="#playbook">Engagement Playbook</a>
      <a class="card" href="#bd-leadership-journey">1:50 Leadership Journey</a>
      <a class="card" href="#leadership">Leadership &amp; Certification</a>
      <a class="card" href="#compliance">Compliance &amp; Security</a>
      <a class="card" href="#faqs">FAQs</a>
      <a class="card" href="#contact">Contact</a>
    </div>
  </section>

  <!-- 3) Proof & References -->
  <section id="proof" class="section">
    <h2>Proof &amp; References</h2>
    <div class="kpi-bar" style="margin-top:10px;">
      <div class="kpi"><strong>18+</strong><br/>Countries served</div>
      <div class="kpi"><strong>200+</strong><br/>Programs shipped</div>
      <div class="kpi"><strong>−25–40%</strong><br/>Cycle time reduction</div>
      <div class="kpi"><strong>$100M+</strong><br/>Portfolio value governed</div>
    </div>
    <p class="muted" style="margin-top:10px;">Aligned to PMI • PRINCE2 • ITIL • ISO 9001/27001 • SOC 2 • GDPR</p>

    <ul class="microproof">
      <li><strong>Tech scale-up:</strong> Multi-country GTM and PMO support for a B2B SaaS firm expanding into six markets within 12 months.</li>
      <li><strong>Public sector:</strong> Portfolio governance for a national digital services program consolidating 40+ initiatives into a unified roadmap.</li>
      <li><strong>Industrial group:</strong> ERP/CRM alignment and executive dashboards across a multi-site manufacturing network with measurable cost and cycle-time reductions.</li>
    </ul>
    <p class="muted" style="margin-top:6px;">
      Want the full story? <a href="docs/business-development-enterprise-deck.pdf" target="_blank">Download the Enterprise Deck (PDF)</a> or request a custom executive briefing.
    </p>
  </section>

  <!-- 4) What Your Pod Delivers -->
  <section id="deliver" class="section" style="background:#fff;">
    <h2>What Your 50-Person Pod Delivers</h2>
    <div class="tile-6" style="margin-top:12px;">
      <div class="card">
        <h3>🎯 Corporate Growth & GTM</h3>
        <ul>
          <li>Market entry & vertical expansion</li>
          <li>Launch playbooks & enablement</li>
          <li>Competitive intelligence & pricing</li>
        </ul>
        <p class="acc-note">Why buy: faster revenue. KPI: +pipeline, +market share.</p>
      </div>
      <div class="card">
        <h3>🤝 Partner Ecosystems</h3>
        <ul>
          <li>Channel recruitment & onboarding</li>
          <li>Incentives, MDF & performance dashboards</li>
          <li>Co-innovation labs & alliances</li>
        </ul>
        <p class="acc-note">Why buy: partner-sourced growth. KPI: indirect revenue.</p>
      </div>
      <div class="card">
        <h3>📋 Program / Portfolio (PMO)</h3>
        <ul>
          <li>RAID & change control governance</li>
          <li>Benefits realization tracking</li>
          <li>Resource capacity & portfolio cadence</li>
        </ul>
        <p class="acc-note">Why buy: on-time, on-budget. KPI: delivery reliability.</p>
      </div>
      <div class="card">
        <h3>📊 OKRs & Executive Dashboards</h3>
        <ul>
          <li>Strategy cascade & KPI frameworks</li>
          <li>Power BI / Tableau board packs</li>
          <li>Anomaly detection & variance alerts</li>
        </ul>
        <p class="acc-note">Why buy: better decisions. KPI: time-to-insight.</p>
      </div>
      <div class="card">
        <h3>🏢 ERP/CRM Alignment</h3>
        <ul>
          <li>Salesforce / Dynamics / SAP / NetSuite</li>
          <li>Cross-function workflow orchestration</li>
          <li>MDM & data governance</li>
        </ul>
        <p class="acc-note">Why buy: cross-team flow. KPI: conversion & DSO.</p>
      </div>
      <div class="card">
        <h3>⚖️ Governance & Compliance</h3>
        <ul>
          <li>SOX/GDPR/ESG program build</li>
          <li>Audit trails & policy management</li>
          <li>Ethics channels & risk registers</li>
        </ul>
        <p class="acc-note">Why buy: audit-ready. KPI: issues resolved.</p>
      </div>
      <div class="card">
        <h3>🤖 Revenue Ops &amp; AI</h3>
        <ul>
          <li>ICP, TAM/SAM/SOM, territory design, quota setting</li>
          <li>Pipeline hygiene, deal health, forecast accuracy</li>
          <li>AI assist: lead scoring, next-best-action, pricing guardrails</li>
          <li>Attribution &amp; board-ready insights (Power BI/Tableau)</li>
        </ul>
        <p class="acc-note">
          Why buy: predictable revenue. KPI: forecast accuracy, win rate, CAC/LTV.
          <a href="marketing-sales.php">See Marketing &amp; Sales Leadership</a> for execution pods.
        </p>
      </div>
    </div>
  </section>

  <!-- 5) Operating Model (Investor 1:50) -->
  <section id="operating-model" class="section" style="background:#f9fafb;">
    <h2>Operating Model — Investor 1:50</h2>
    <div class="model-grid" style="margin-top:10px;">
      <div class="card">
        <h3>Org & Role Mix</h3>
        <p><strong>1 Leader : 50 Certified Professionals</strong></p>
        <p>Mix: 12 BAs, 10 PM/Program, 8 CRM/ERP, 8 Partner/Alliance, 7 Ops Analysts, 5 Governance/Compliance.</p>
      </div>
      <div class="card pod-diagram">
        <h3>Pods</h3>
        <p>Strategy • PMO • Partner • ERP/CRM • Data/BI • Compliance</p>
        <p class="muted">Clear handoffs to: <a href="information-technology.php">IT Ops</a>, <a href="cybersecurity.php">Cybersecurity</a>, <a href="intelligent-cloud.php">Cloud & Data</a>.</p>
      </div>
      <div class="card">
        <h3>Cadence & Control</h3>
        <p>Discovery → Blueprint (10 days) → Pilot sprint (6–8 weeks) → Scale → QBR & benefits tracking.</p>
        <p class="muted">Risk managed via RAID, change control, and portfolio governance.</p>
      </div>
    </div>
  </section>

  <!-- 6) Offer Packages -->
  <section id="packages" class="section">
    <h2>Offer Packages (Buy-Now Clarity)</h2>
    <div class="tile-4" style="margin-top:12px;">
      <div class="pkg">
        <h3>Market Expansion Starter</h3>
        <div class="meta">4–8 weeks • Discovery & GTM blueprint • Enablement</div>
        <ul>
          <li>Country/vertical GTM playbooks</li>
          <li>Partner shortlist & onboarding plan</li>
          <li>Enablement & success metrics</li>
        </ul>
      </div>
      <div class="pkg">
        <h3>Program Management Plus</h3>
        <div class="meta">12–24 weeks • PMO setup • Portfolio cadence • QBRs</div>
        <ul>
          <li>Governance (RAID, change, benefits)</li>
          <li>Resource planning & roadmaps</li>
          <li>Executive dashboards & OKRs</li>
        </ul>
      </div>
      <div class="pkg">
        <h3>Enterprise Operations Suite</h3>
        <div class="meta">12–18 months • ERP/CRM alignment • BI • Compliance</div>
        <ul>
          <li>Salesforce/D365/SAP/NetSuite orchestration</li>
          <li>BI pipelines & board-grade reporting</li>
          <li>GDPR/SOX/ESG program alignment</li>
        </ul>
      </div>
      <div class="pkg">
        <h3>Global Partner Ecosystem</h3>
        <div class="meta">Ongoing • Channels • Alliances • MDF & performance</div>
        <ul>
          <li>Recruit & enable channels in target geos</li>
          <li>Co-innovation motions with KPI scorecards</li>
          <li>MDF governance & incentive design</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- 7) Enterprise Governance -->
  <section id="governance" class="section" style="background:#f9fafb;">
    <h2>Enterprise Governance (How We De-Risk Delivery)</h2>
    <div class="gov-grid" style="margin-top:10px;">
      <div class="card">
        <h3>Method</h3>
        <p>PMI/PRINCE2 hybrid, RAID logs, change control, benefits realization, QBRs, RACI-driven handoffs.</p>
      </div>
      <div class="card">
        <h3>KPIs & Reliability</h3>
        <p>Lead time, on-time %, budget variance, benefits capture %, stakeholder NPS.</p>
      </div>
      <div class="card">
        <h3>Quality Gates</h3>
        <p>Definition of Ready/Done, portfolio cadence, stage gates, management reviews.</p>
      </div>
      <div class="card">
        <h3>Operational Performance &amp; Benefits</h3>
        <ul>
          <li>Benefits register with owner, baseline, target, realization date</li>
          <li>Throughput &amp; flow: lead/cycle time, WIP limits, on-time rate</li>
          <li>Financial tracing: budget variance, cost-to-benefit, payback horizon</li>
          <li>Executive cadence: monthly ops review, quarterly benefits review (QBR)</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- 8) Data & Tech Stack -->
  <section id="stack" class="section">
    <h2>Data &amp; Tech Stack</h2>
    <div class="tile-4" style="margin-top:12px;">
      <div class="card">
        <h3>CRM &amp; ERP</h3>
        <ul><li>Salesforce</li><li>Microsoft Dynamics 365</li><li>SAP S/4HANA</li><li>Oracle NetSuite</li></ul>
      </div>
      <div class="card">
        <h3>PPM / PMO</h3>
        <ul><li>Microsoft Project / Project Online</li><li>Planview / Clarity</li><li>Smartsheet / Asana</li></ul>
      </div>
      <div class="card">
        <h3>BI &amp; Analytics</h3>
        <ul><li>Power BI / Tableau / Looker</li><li>Snowflake / BigQuery</li><li>dbt / Fivetran</li></ul>
      </div>
      <div class="card">
        <h3>Governance &amp; Risk</h3>
        <ul><li>ServiceNow</li><li>OneTrust / TrustArc</li><li>Mulesoft / Boomi / Azure Integration Services</li></ul>
      </div>
    </div>
  </section>

  <!-- 9) Commercials & ROI -->
  <section id="commercials" class="section" style="background:#f9fafb;">
    <h2>Commercials — 1:50 Pods &amp; Leader ROI</h2>
    <div class="roi-grid" style="margin-top:12px;">
      <div class="card">
        <h3>Pod Economics</h3>
        <p><strong>1 Leader : 50 Certified Professionals</strong></p>
        <p>12 BAs • 10 PM/Program • 8 CRM/ERP • 8 Partner/Alliance • 7 Ops Analysts • 5 Governance/Compliance.</p>
        <p class="muted">Training, certifications, and equipment included. Leaders manage deployment, QA, and escalations.</p>
      </div>
      <div class="card">
        <h3>Managed Programs</h3>
        <p>Tiered service: GTM strategy • PMO • ERP rollout • partner ecosystems • BI & compliance. Scales across business units, geographies, and regulatory environments.</p>
        <p class="muted">Handoffs: <a href="information-technology.php">IT</a>, <a href="cybersecurity.php">Cybersecurity</a>, <a href="intelligent-cloud.php">Cloud</a>.</p>
      </div>
      <div class="card">
        <h3>Leader ROI Ladder</h3>
        <p>Active commission: <strong>44,321&nbsp;USD</strong>. Residuals scale with multi-year programs, regional expansion, and retainer-based operations support. Month-3/6/12 bands in the Finance Pack.</p>
        <div class="card-footer">
          <a class="btn" href="#contact" aria-label="Request Finance Pack">Request Finance Pack</a>
        </div>
      </div>
    </div>
  </section>

  <!-- 10) Case Studies (details = no JS conflicts) -->
  <section id="cases" class="section">
    <h2>Enterprise Case Studies</h2>

    <details class="bd-acc"><summary>🏢 Enterprise Tech — Multi-Country GTM Expansion</summary>
      <div>
        <p><strong>Challenge:</strong> Launch in 8 countries within 12 months.</p>
        <p><strong>Solution:</strong> Country GTM playbooks, channel recruitment, multi-currency CRM/ERP, training.</p>
        <p><strong>Outcome:</strong> 8 launches on time, 34 partners onboarded, $12M year-1 new-region revenue.</p>
      </div>
    </details>

    <details class="bd-acc"><summary>🏭 Manufacturing — Digital Transformation PMO</summary>
      <div>
        <p><strong>Challenge:</strong> Modernize IoT/ERP without halting production.</p>
        <p><strong>Solution:</strong> PMO, parallel streams (IT/OT/HR/Finance), SAP S/4HANA integration, change mgmt.</p>
        <p><strong>Outcome:</strong> −22% downtime, $8M savings via predictive maintenance.</p>
      </div>
    </details>

    <details class="bd-acc"><summary>🏛 Government — National Digital Services Platform</summary>
      <div>
        <p><strong>Challenge:</strong> Consolidate 40+ e-services into a unified portal.</p>
        <p><strong>Solution:</strong> Inter-agency governance, API standards, federated identity, GovCloud portal.</p>
        <p><strong>Outcome:</strong> 2.3M registrations in year 1, 68% paperwork reduction, 14-month launch.</p>
      </div>
    </details>

    <details class="bd-acc"><summary>🏥 Healthcare — Multi-Hospital ERP &amp; Supply Chain</summary>
      <div>
        <p><strong>Challenge:</strong> Fragmented supply & financial visibility across 12 sites.</p>
        <p><strong>Solution:</strong> Unified ERP, procurement integration, real-time CFO/COO dashboards.</p>
        <p><strong>Outcome:</strong> −30% supply cost, 99% inventory accuracy, site P&amp;L visibility.</p>
      </div>
    </details>
  </section>

  <!-- 11) Engagement Playbook -->
  <section id="playbook" class="section" style="background:#f9fafb;">
    <h2>Engagement Playbook</h2>
    <div class="play-steps" style="margin-top:10px;">
      <div class="step"><strong>1) 45-min Scope Call</strong><br/>Clarify outcomes, KPIs, constraints.</div>
      <div class="step"><strong>2) Blueprint (10 days)</strong><br/>Roadmap, resourcing, governance, risk posture.</div>
      <div class="step"><strong>3) Pilot Sprint (6–8 wks)</strong><br/>Prove value on a defined scope with KPIs.</div>
      <div class="step"><strong>4) Scale</strong><br/>Rollout across units & geos; portfolio cadence.</div>
      <div class="step"><strong>5) QBR & Benefits</strong><br/>Quarterly reviews, benefits realization tracking.</div>
    </div>
  </section>

  <!-- 11b) 1:50 Leadership Journey -->
  <section id="bd-leadership-journey" class="section" style="background:#f9fafb;">
    <h2>How the 1:50 Business Development Leadership Works</h2>
    <div class="play-steps" style="margin-top:10px;">
      <div class="step"><strong>Train</strong><br/>You complete structured tracks in strategy, PMO, commercial design, revenue ops, governance and HEXAD mentoring (PD → TE).</div>
      <div class="step"><strong>Build</strong><br/>You recruit and shape a 1:50 pod — analysts, PMs, ERP/CRM specialists, partner managers, governance leads — aligned to enterprise-grade delivery.</div>
      <div class="step"><strong>Deploy</strong><br/>Your pod runs GTM expansions, program portfolios, ERP/CRM alignment and partner ecosystems across multiple business units and regions.</div>
      <div class="step"><strong>Earn</strong><br/>You earn leadership commissions and residuals as programs scale, aligned to the ROI ladder in the Commercials section.</div>
    </div>
  </section>

  <!-- 12) Leadership & Certification (tabs: Leader vs Team) -->
  <section id="leadership" class="section">
    <h2>Leadership &amp; Certification</h2>
    <div class="tabs" role="tablist" aria-label="Certification tabs">
      <button class="tbtn active" data-tpanel="leader" role="tab" aria-selected="true">Leader Track (1:50)</button>
      <button class="tbtn" data-tpanel="team" role="tab" aria-selected="false">Team Tracks</button>
    </div>

    <div id="leader" class="tpanel active" role="tabpanel">
      <div class="grid" style="margin-top:10px;">
        <div class="card">
          <h3>Program Leadership</h3>
          <ul>
            <li>PMP / PRINCE2 Practitioner</li>
            <li>ITIL 4 Strategist</li>
            <li>Portfolio Management Professional (PfMP)</li>
          </ul>
        </div>
        <div class="card">
          <h3>Commercial &amp; Strategy</h3>
          <ul>
            <li>CIMA Strategic (Management Accounting)</li>
            <li>Certified Strategic Partnership Professional (CSPP)</li>
          </ul>
        </div>
        <div class="card">
          <h3>Governance &amp; Risk</h3>
          <ul>
            <li>ISO 27001 Foundation/Auditor (awareness)</li>
            <li>GDPR/DPA practitioner (awareness)</li>
          </ul>
        </div>
      </div>
    </div>

    <div id="team" class="tpanel" role="tabpanel">
      <div class="grid" style="margin-top:10px;">
        <div class="card">
          <h3>Business Analysis &amp; PM</h3>
          <ul><li>IIBA-ECBA/CCBA</li><li>PMP/PRINCE2</li><li>Agile (PSM I/CSM)</li></ul>
        </div>
        <div class="card">
          <h3>CRM/ERP</h3>
          <ul><li>Salesforce Admin</li><li>Dynamics 365</li><li>SAP/NetSuite modules</li></ul>
        </div>
        <div class="card">
          <h3>Data &amp; BI</h3>
          <ul><li>Power BI / Tableau</li><li>Snowflake/BigQuery</li><li>dbt/Fivetran</li></ul>
        </div>
        <div class="card">
          <h3>Compliance</h3>
          <ul><li>ITIL 4 Foundation</li><li>ISO awareness</li><li>Risk &amp; audit process</li></ul>
        </div>
      </div>
      <p class="muted" style="margin-top:10px;">Full matrix available on request (role → certs → timeline → cost models).</p>
    </div>
  </section>

  <!-- 13) Compliance & Security -->
  <section id="compliance" class="section" style="background:#f9fafb;">
    <h2>Compliance, Security &amp; ESG</h2>
    <div class="grid" style="margin-top:10px;">
      <div class="card">
        <h3>Compliance Grid</h3>
        <p>SOX • GDPR • ISO 27001 • SOC 2 • ESG — controls designed at build time; audit trails & documentation included.</p>
      </div>
      <div class="card">
        <h3>Security Posture</h3>
        <p>SSO, least privilege, secrets mgmt, change control, data residency options where available.</p>
      </div>
      <div class="card">
        <h3>Data Processing</h3>
        <p>DPA available. Clear responsibilities & boundaries with vendors and internal teams.</p>
      </div>
    </div>
  </section>

  <!-- 14) FAQs -->
  <section id="faqs" class="section">
    <h2>FAQs &amp; Objection Handling</h2>
    <div class="faq-grid" style="margin-top:10px;">
      <div class="card">
        <h3>Build vs Buy?</h3>
        <p>We accelerate outcomes with ready pods and governance. You retain IP and can insource later.</p>
      </div>
      <div class="card">
        <h3>IP Ownership?</h3>
        <p>Engagement terms specify ownership and licensing. Custom IP can be transferred under MSA.</p>
      </div>
      <div class="card">
        <h3>Vendor Lock-in?</h3>
        <p>Open standards, handover packages, and documented runbooks prevent lock-in.</p>
      </div>
      <div class="card">
        <h3>Scope Changes?</h3>
        <p>Change control within governance. We re-baseline with transparent impact analysis.</p>
      </div>
      <div class="card">
        <h3>Regulated Proof?</h3>
        <p>Portfolio of regulated rollouts (finance/health/gov) available under NDA.</p>
      </div>
    </div>
  </section>

  <!-- 15) Enterprise CTA & Dual-Use Form -->
  <section id="contact" class="section" style="background:#f9fafb;">
    <h2>Get Started</h2>
    <div class="cta-tabs" role="tablist" aria-label="Contact intent">
      <button class="ctabtn active" data-intent="client" role="tab" aria-selected="true">Hire a Pod (Client)</button>
      <button class="ctabtn" data-intent="leader" role="tab" aria-selected="false">Become a Team Leader (1:50)</button>
    </div>

    <form class="apply-form" method="POST" action="send-mail.php" novalidate>
      <input type="hidden" name="form_type" id="form_type" value="Hire Business Development & Management Pod">

      <div class="form-row">
        <div class="form-group">
          <label id="org_label">Organization Name</label>
          <input type="text" name="organization" id="org_input" required>
        </div>
        <div class="form-group">
          <label id="role_label">Your Role / Title</label>
          <input type="text" name="role" id="role_input" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" required>
        </div>
        <div class="form-group">
          <label>Phone</label>
          <input type="tel" name="phone" required>
        </div>
      </div>

      <div class="form-group" id="needs_group">
        <label id="needs_label">Business Development & Management Needs</label>
        <textarea name="needs" id="needs_textarea" rows="4" placeholder="Example: Need GTM for APAC, PMO for $20M transformation, ERP integration across 5 BUs." required></textarea>
      </div>

      <div class="form-row" id="client_row">
        <div class="form-group">
          <label>Target Launch Date</label>
          <input type="date" name="launch_date">
        </div>
        <div class="form-group">
          <label>Budget Range (USD)</label>
          <select name="budget">
            <option value="">Select...</option>
            <option>$50k - $100k</option>
            <option>$100k - $250k</option>
            <option>$250k - $500k</option>
            <option>$500k - $1M</option>
            <option>$1M+</option>
          </select>
        </div>
      </div>

      <div class="form-row" id="leader_row" style="display:none;">
        <div class="form-group">
          <label>Industry (for 1:50 leadership)</label>
          <input type="text" name="industry" placeholder="e.g., Business Dev & Mgmt, FinTech, GovTech...">
        </div>
        <div class="form-group">
          <label>Experience Summary</label>
          <input type="text" name="experience" placeholder="Years, certifications, leadership roles">
        </div>
      </div>

      <button type="submit" class="btn">Submit</button>
    </form>
  </section>

</section><!-- /.container.bd-page -->

<script>
// ===== small, scoped JS (no global conflicts) =====

// cert tabs (Leader / Team)
document.querySelectorAll('.bd-page .tbtn').forEach(btn => {
  btn.addEventListener('click', () => {
    const id = btn.dataset.tpanel;
    document.querySelectorAll('.bd-page .tbtn').forEach(b => b.classList.remove('active'));
    document.querySelectorAll('.bd-page .tpanel').forEach(p => p.classList.remove('active'));
    btn.classList.add('active');
    document.querySelector('.bd-page #' + id).classList.add('active');
    btn.setAttribute('aria-selected', 'true');
    document.querySelectorAll('.bd-page .tbtn').forEach(b => { if (b !== btn) b.setAttribute('aria-selected', 'false'); });
  });
});

// contact intent tabs (Client / Leader) with field toggles
(function(){
  const clientBtn = document.querySelector('.bd-page .ctabtn[data-intent="client"]');
  const leaderBtn = document.querySelector('.bd-page .ctabtn[data-intent="leader"]');
  const formType = document.getElementById('form_type');
  const needsLabel = document.getElementById('needs_label');
  const needsTextarea = document.getElementById('needs_textarea');
  const clientRow = document.getElementById('client_row');
  const leaderRow = document.getElementById('leader_row');
  const orgLabel = document.getElementById('org_label');
  const roleLabel = document.getElementById('role_label');

  function activate(intent){
    document.querySelectorAll('.bd-page .ctabtn').forEach(b => b.classList.remove('active'));
    const btn = document.querySelector('.bd-page .ctabtn[data-intent="'+intent+'"]');
    if (btn) btn.classList.add('active');

    if (intent === 'client') {
      formType.value = 'Hire Business Development & Management Pod';
      needsLabel.textContent = 'Business Development & Management Needs';
      needsTextarea.placeholder = 'Example: Need GTM for APAC, PMO for $20M transformation, ERP integration across 5 BUs.';
      clientRow.style.display = '';
      leaderRow.style.display = 'none';
      orgLabel.textContent = 'Organization Name';
      roleLabel.textContent = 'Your Role / Title';
    } else {
      formType.value = 'Become a Team Leader (1:50) — Business Development & Management';
      needsLabel.textContent = 'Motivation & Leadership Goals';
      needsTextarea.placeholder = 'Tell us your leadership goals, preferred industry sectors, and planned 1:50 team strategy.';
      clientRow.style.display = 'none';
      leaderRow.style.display = '';
      orgLabel.textContent = 'Full Name';
      roleLabel.textContent = 'Current Role / Title';
    }
  }

  clientBtn && clientBtn.addEventListener('click', () => activate('client'));
  leaderBtn && leaderBtn.addEventListener('click', () => activate('leader'));
  // default to client on load
  activate('client');
})();

// internal anchor validation (console report)
(function(){
  const ids = Array.from(document.querySelectorAll('.bd-page [id]')).map(n => n.id);
  document.querySelectorAll('.bd-page #nav a[href^="#"]').forEach(a => {
    const target = a.getAttribute('href').replace('#','');
    if (!ids.includes(target)) {
      console.warn('[QuickNav] Missing section id:', target);
    }
  });
})();

// hero KPI counter-up animation
(function(){
  const nums = document.querySelectorAll('.bd-page .hero-kpi-number');
  if (!nums.length) return;

  function animate(el){
    const target = parseInt(el.dataset.target, 10);
    if (!target || isNaN(target)) return;
    const duration = 1200;
    const start = performance.now();

    function step(ts){
      const progress = Math.min((ts - start) / duration, 1);
      const value = Math.floor(progress * target);
      el.textContent = value.toLocaleString();
      if (progress < 1) {
        requestAnimationFrame(step);
      }
    }
    requestAnimationFrame(step);
  }

  const hero = document.querySelector('.bd-page .hero');
  if (!hero) return;

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        nums.forEach(n => {
          if (!n.dataset.animated) {
            n.dataset.animated = '1';
            animate(n);
          }
        });
        observer.disconnect();
      }
    });
  }, { threshold: 0.4 });

  observer.observe(hero);
})();
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Business Development & Management",
  "description": "Multi-country GTM, PMO, partner ecosystems, and ERP/CRM alignment delivered by certified 1:50 pods.",
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
    {"@type": "ListItem", "position": 3, "name": "Business Development & Management", "item": "<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>"}
  ]
}
</script>

<?php include 'footer.php'; ?>