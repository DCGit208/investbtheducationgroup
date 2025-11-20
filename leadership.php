

<?php
  $page_title = "Investor Education Leadership — 1:50 Global Pods";
  $meta_description = "Become a certified industry leader in the Investor Education Work Network — build a 1:50 team, earn commissions, deliver contracts, and create lasting residual income across 20 global industry sectors.";
  $og_url = "https://invest.btheducationgroup.com/leadership.php";
  $page_styles = ['assets/css/page/leadership.css'];
  include 'header.php';
?>

<?php 
$breadcrumb_items = [
  ['label' => 'Home', 'href' => 'index.php'],
  ['label' => 'Leadership']
];
include 'breadcrumbs.php';
?>

<header class="leadership-hero">
  <div class="hero">
    <div class="hero-left">
      <p class="eyebrow">Investor Education Work Network</p>
      <h1>Lead. Scale. Govern.</h1>
      <p class="lead">
        Become a certified 1:50 pod leader across 20 global industry sectors. 
        Build a high-performance team, deliver real contracts, and grow a 
        multi-year residual income portfolio — backed by HEXAD mentoring and 
        global certification pathways.
      </p>
      <div class="cta-row">
        <a href="#apply-leader" class="btn" data-event="cta-hero-apply">Apply to Become a Team Leader</a>
        <a href="#model" class="btn-outline" data-event="cta-hero-model">How the 1:50 Model Works</a>
        <a href="#economics" class="btn-outline" data-event="cta-hero-economics">Leader Economics & ROI</a>
      </div>
      <div class="cta-row cta-sub">
        <a href="#apply-leader" class="btn-outline" data-intent="briefing" data-event="cta-hero-briefing">Request Leadership Briefing</a>
        <a href="#apply-leader" class="btn-outline" aria-label="No prior expert status required — we form you." data-event="cta-hero-micro-expert">No prior expert status required — we form you.</a>
        <a href="#apply-leader" class="btn-outline" aria-label="Capped at 100 leaders per sector." data-event="cta-hero-micro-cap">Capped at 100 leaders per sector.</a>
      </div>
      <div class="stats">
        <div class="stat">
          <div style="font-weight:700; font-size:1.1rem;"><span class="stat-number" data-target="44321" aria-label="Team-building commission per leader 44,321 US dollars">0</span> USD</div>
          <div style="font-size:0.9rem; opacity:0.9;">Team-building commission (per leader)</div>
        </div>
        <div class="stat">
          <div style="font-weight:700; font-size:1.1rem;"><span class="stat-number" data-target="2127372" aria-label="Illustrative leader annual income potential 2,127,372 US dollars">0</span> USD</div>
          <div style="font-size:0.9rem; opacity:0.9;">Illustrative leader annual income potential*</div>
        </div>
        <div class="stat">
          <div style="font-weight:700; font-size:1.1rem;"><span class="stat-number" data-target="63822" aria-label="Illustrative member annual income potential 63,822 US dollars">0</span> USD</div>
          <div style="font-size:0.9rem; opacity:0.9;">Illustrative member annual income potential*</div>
        </div>
      </div>
      <p style="margin-top:8px; font-size:0.8rem; color:#d1e3f5; max-width:520px;">
        *Illustrative models only. Earnings depend on contracts delivered, geography, 
        client volume and performance. Full finance pack available on request.
      </p>
    </div>
    <div class="hero-right card">
      <h3 style="margin-bottom:8px;">Quick Apply — Leadership</h3>
      <p style="font-size:0.9rem; color:#4b5563; margin-bottom:10px;">
        Express interest as an Investor Education Team Leader. A program specialist will follow up.
      </p>
      <form action="contact-handler.php" method="post">
        <input type="hidden" name="form_context" value="Investor Education Leadership Application" />
        <input type="hidden" name="utm_source" value="">
        <input type="hidden" name="utm_medium" value="">
        <input type="hidden" name="utm_campaign" value="">
        <input type="hidden" name="utm_content" value="">
        <input type="hidden" name="referrer" value="">
        <input type="hidden" name="gclid" value="">
        <input type="hidden" name="lead_intent" value="apply">
        <input type="text" name="website" value="" aria-hidden="true" tabindex="-1" style="position:absolute;left:-9999px;" autocomplete="off">
        <input type="hidden" name="client_elapsed_ms" value="0">
        <div class="field">
          <label for="full_name">Full Name</label>
          <input type="text" id="full_name" name="full_name" required />
        </div>
        <div class="field">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required />
        </div>
        <div class="field">
          <label for="phone">Phone / WhatsApp</label>
          <input type="text" id="phone" name="phone" required />
        </div>
        <div class="field">
          <label for="current_country">Country / Region</label>
          <input type="text" id="current_country" name="current_country" />
        </div>
        <div class="field">
          <label for="sector_interest">Primary Industry of Interest</label>
          <select id="sector_interest" name="sector_interest" required>
            <option value="">Select an industry</option>
            <option>Intelligent Cloud, Data & AI</option>
            <option>Cybersecurity & Digital Defense</option>
            <option>Information Technology (Operations & Infrastructure)</option>
            <option>Software & Systems Engineering</option>
            <option>Medical Technology / Healthcare IT / Life Sciences</option>
            <option>Renewable & Sustainable Energy</option>
            <option>Smart Home & Building Automation</option>
            <option>Fiber Optics & Data Cabling</option>
            <option>Communications & Satellite Technology</option>
            <option>Architecture, Engineering & Construction (AEC)</option>
            <option>Manufacturing & Industrial Systems (Welding, Automation)</option>
            <option>Business Development & Management</option>
            <option>Marketing & Sales Leadership</option>
            <option>Management Accounting & Financial Technology</option>
            <option>Government & Civic Technology (GovTech)</option>
            <option>Agricultural Technology (AgriTech)</option>
            <option>Financial Services & Investment Technology (FinTech)</option>
            <option>Education Technology (EdTech)</option>
            <option>Creative & Digital Media Technology</option>
            <option>Logistics & Smart Mobility (Supply Chain 4.0)</option>
          </select>
        </div>
        <div class="field">
          <label for="background">Brief Background (current role / experience)</label>
          <textarea id="background" name="background" rows="3"></textarea>
        </div>
        <button type="submit" class="btn" style="width:100%; margin-top:6px;">Submit Application</button>
      </form>
    </div>
  </div>
</header>

<!-- Trust & Standards Logo Strip -->
<section class="section logo-strip" id="trusted">
  <h2 class="logo-heading">Referenced Across Global Standards & Vendor Ecosystems</h2>
  <p class="logo-sub" style="color:#4b5563; max-width:840px; margin-top:4px;">
    Delivery playbooks align with enterprise platforms, security, data, infrastructure and compliance ecosystems — enabling work inside Fortune 500, public sector and multi-site environments.
  </p>
  <div class="logos">
    <figure><img src="Backups/vendor-logos/microsoft.svg" alt="Microsoft" loading="lazy" width="90" height="48"><figcaption>Microsoft</figcaption></figure>
    <figure><img src="Backups/vendor-logos/aws.svg" alt="Amazon Web Services" loading="lazy" width="90" height="48"><figcaption>AWS</figcaption></figure>
    <figure><img src="Backups/vendor-logos/cisco.svg" alt="Cisco" loading="lazy" width="90" height="48"><figcaption>Cisco</figcaption></figure>
    <figure><img src="Backups/vendor-logos/ibm.svg" alt="IBM" loading="lazy" width="90" height="48"><figcaption>IBM</figcaption></figure>
    <figure><img src="Backups/vendor-logos/siemens.svg" alt="Siemens" loading="lazy" width="90" height="48"><figcaption>Siemens</figcaption></figure>
    <figure><img src="Backups/vendor-logos/oracle.svg" alt="Oracle" loading="lazy" width="90" height="48"><figcaption>Oracle</figcaption></figure>
    <figure><img src="Backups/vendor-logos/paloaltonetworks.svg" alt="Palo Alto Networks" loading="lazy" width="90" height="48"><figcaption>Palo Alto</figcaption></figure>
    <figure><img src="Backups/vendor-logos/nvidia.svg" alt="NVIDIA" loading="lazy" width="90" height="48"><figcaption>NVIDIA</figcaption></figure>
    <figure><img src="Backups/vendor-logos/adobe.svg" alt="Adobe" loading="lazy" width="90" height="48"><figcaption>Adobe</figcaption></figure>
  </div>
</section>

<!-- Eligibility & Fit -->
<section class="section" id="eligibility">
  <h2>Are You a Fit for 1:50 Leadership?</h2>
  <p class="eligibility-intro">We’re selecting 100 leaders per sector — disciplined, governance‑ready operators who can own a delivery portfolio.</p>
  <div class="fit-grid">
    <div class="fit-card"><strong>Discipline & Ownership</strong><p>You lead delivery and people with accountability.</p></div>
    <div class="fit-card"><strong>Governance & Compliance</strong><p>Comfort operating audit‑ready, policy‑aligned programs.</p></div>
    <div class="fit-card"><strong>Sector Focus</strong><p>Cloud, cyber, medical, industrial, etc. — with ambition to grow.</p></div>
    <div class="fit-card"><strong>Client Leadership</strong><p>Steward enterprise relationships with clarity and rigor.</p></div>
    <div class="fit-card"><strong>Team Builder</strong><p>Mentor a 50‑person pod using proven playbooks.</p></div>
    <div class="fit-card"><strong>Performance Mindset</strong><p>Measured on KPIs, SLAs and portfolio outcomes.</p></div>
    <div class="fit-card"><strong>HEXAD‑Aligned Ethics</strong><p>Truth‑anchored, long‑term leadership standards.</p></div>
    <div class="fit-card fit-apply">
      <div class="fit-apply-inner">
        <a class="btn" href="#apply-leader">Meet 6 of these? Apply Now</a>
      </div>
    </div>
  </div>
</section>

<section class="section" id="leadership-keys">
  <h2>Leadership at a Glance &mdash; 10 Core Promises</h2>
  <p style="color:#4b5563; margin-bottom:12px;">
    At a glance, the Investor Education Leadership pathway is not a course, but a
    franchise-grade, consulting-grade and managed-services-grade leadership model
    built around 10 core promises:
  </p>
  <div class="grid">
    <div class="card">
      <h4>A. Certified Industry Authority</h4>
      <p>You are formed as a certified expert in one of 20 strategic sectors, not just a generalist.</p>
    </div>
    <div class="card">
      <h4>B. HEXAD-Formed Leader</h4>
      <p>Your leadership is formed across Personal, Professional, Work, Financial, Relationship and Truth dimensions.</p>
    </div>
    <div class="card">
      <h4>C. 1:50 Workforce Builder</h4>
      <p>You build, mentor and govern a 50-person pod with defined roles, standards and rhythms.</p>
    </div>
    <div class="card">
      <h4>D. Contract &amp; Portfolio Owner</h4>
      <p>You operate like a portfolio partner &mdash; owning scope, risk, value and client relationships.</p>
    </div>
    <div class="card">
      <h4>E. Managed Services Operator</h4>
      <p>Your pod delivers recurring services with SLAs, KPIs and dashboards, not one-off tasks.</p>
    </div>
    <div class="card">
      <h4>F. Compliance &amp; Governance Ready</h4>
      <p>Your work can sit in regulated environments (finance, health, energy, public sector) with audit trails.</p>
    </div>
    <div class="card">
      <h4>G. Multi-Contract Capacity</h4>
      <p>Pods are structured to serve multiple organizations and sites in parallel, not a single client only.</p>
    </div>
    <div class="card">
      <h4>H. Residual Income Engine</h4>
      <p>Your earnings grow from both team-building commissions and recurring managed-services portfolios.</p>
    </div>
    <div class="card">
      <h4>I. Global Work Network</h4>
      <p>You are plugged into the Investor Education Work Network (IEWN) for cross-sector support and opportunities.</p>
    </div>
    <div class="card">
      <h4>J. Scalable Leadership Path</h4>
      <p>As your first pod matures, cross-sector leadership and expanded portfolios become possible.</p>
    </div>
  </div>
</section>

<main>
  <section class="section" id="quick-nav">
    <h2>Quick Navigation</h2>
    <p style="margin-bottom:10px; color:#4b5563; max-width:640px;">
      Explore how the Investor Education Leadership model works, the 1:50 structure, 
      earnings, and sector opportunities.
    </p>
    <div class="grid">
      <a href="#model" class="card" style="text-decoration:none;">
        <h4>1. What is Investor Education Leadership?</h4>
        <p>Core promise, HEXAD foundation, and why the 1:50 design exists.</p>
      </a>
      <a href="#journey" class="card" style="text-decoration:none;">
        <h4>2. Leadership Journey — Train · Build · Deploy · Earn</h4>
        <p>Step-by-step journey from candidate to certified pod leader.</p>
      </a>
      <a href="#economics" class="card" style="text-decoration:none;">
        <h4>3. Economics — Commissions & Residuals</h4>
        <p>How commissions, residual income and contract portfolios work.</p>
      </a>
      <a href="#sectors" class="card" style="text-decoration:none;">
        <h4>4. 18 Industry Sectors</h4>
        <p>Where your 1:50 team can specialize and deliver services globally.</p>
      </a>
      <a href="#hexad" class="card" style="text-decoration:none;">
        <h4>5. HEXAD & Investor Education Work Network</h4>
        <p>Personal, professional and truth-anchored formation for leaders.</p>
      </a>
      <a href="#faq" class="card" style="text-decoration:none;">
        <h4>6. FAQs & Next Steps</h4>
        <p>Answers to the most important leadership questions.</p>
      </a>
      <a href="#team-roles" class="card" style="text-decoration:none;">
        <h4>7. 1:50 Team & Roles</h4>
        <p>See how a 50-person pod is structured across leadership, delivery and growth.</p>
      </a>
      <a href="#kpis-slas" class="card" style="text-decoration:none;">
        <h4>8. KPIs, SLAs & Governance</h4>
        <p>Understand how performance, quality and contracts are governed.</p>
      </a>
    </div>
  </section>

  <!-- Economics Depth Cards -->
  <section class="section economics-depth" id="economics-depth">
    <h2>Economics Depth — Multi-Year Impact Models</h2>
    <p style="color:#4b5563; max-width:900px;">
      Beyond activation and first-year residuals, disciplined leaders compound value via retention, adjacent sector expansion and multi-contract stacking. Illustrative cards below highlight three finance pack lenses.
    </p>
    <div class="econ-cards">
      <div class="econ-card">
        <h3>5-Year Residual Trajectory</h3>
        <p>Illustrative compounding of managed services + contract renewals across 5 annual cycles. Portfolio maturity drives expanding base ARR while churn governance protects downside.</p>
        <ul>
          <li>Year 1: Activation + initial MRR</li>
          <li>Year 3: Multi-client, cross-site footprint</li>
          <li>Year 5: Sector + adjacent expansion</li>
        </ul>
      </div>
      <div class="econ-card">
        <h3>3 / 6 / 12 Month Ramp</h3>
        <p>Activation milestones combining team formation, pilot delivery, then stabilized multi-client operations with governance dashboards live.</p>
        <div class="ramp">
          <div><strong>3</strong><span>Pod formed + first pilots</span></div>
          <div><strong>6</strong><span>Multi-client utilization</span></div>
          <div><strong>12</strong><span>Portfolio maturity & ROI</span></div>
        </div>
      </div>
      <div class="econ-card">
        <h3>Multi-Contract Compounding</h3>
        <p>Stacked contracts across delivery lanes (core ops, compliance, optimization, expansion projects) compound residual income with diversification.</p>
        <ul>
          <li>Base managed services platform</li>
          <li>Value-add optimization streams</li>
          <li>Strategic expansion projects</li>
        </ul>
      </div>
    </div>
    <div style="margin-top:18px;">
      <a href="#apply-leader" class="btn" data-intent="finance" data-event="cta-finance-pack">Request Full Finance Pack</a>
    </div>
  </section>

  <!-- Enterprise / Ministries Section -->
  <section class="section enterprise" id="enterprise">
    <h2>For Ministries & Enterprise Portfolios</h2>
    <p style="color:#4b5563; max-width:900px;">Leadership pods are engineered to plug into regulated, multi-site and public sector environments with audit-ready governance.</p>
    <div class="enterprise-grid">
      <div class="enterprise-card"><strong>Regulated Readiness</strong><p>Operates with compliance artefacts, change control and documented procedures.</p></div>
      <div class="enterprise-card"><strong>Multi-Site Scale</strong><p>Structured to serve several facilities, campuses or regions concurrently.</p></div>
      <div class="enterprise-card"><strong>Data & Security Alignment</strong><p>Integrates cloud, cyber and identity standards for risk-managed delivery.</p></div>
      <div class="enterprise-card"><strong>Outcome Governance</strong><p>KPIs, SLAs and quarterly portfolio reviews align with executive oversight.</p></div>
      <div class="enterprise-card"><strong>Workforce Formation</strong><p>Pipeline of specialists grown under HEXAD & certification ladders.</p></div>
      <div class="enterprise-card"><strong>Cost Stewardship</strong><p>Efficiency tooling and utilization models support budget ROI narratives.</p></div>
    </div>
    <div style="margin-top:20px;">
      <a href="#apply-leader" class="btn-outline" data-intent="partner" data-event="cta-partner-briefing">Request Partner Briefing</a>
    </div>
  </section>

  <section class="section" id="model">
    <h2>What is the Investor Education Leadership Model?</h2>
    <p>
      The Investor Education Leadership model is a work-production framework that forms
      <strong>certified industry leaders</strong> who build and govern 1:50 teams delivering
      real services, real contracts and real impact across 20 strategic industries.
    </p>
    <p style="margin-top:10px;">
      Each leader is not just a student — they are a <strong>portfolio architect</strong>:
    </p>
    <ul style="margin-top:8px; padding-left:20px;">
      <li>They complete expert-level certification pathways in their chosen industry.</li>
      <li>They build and mentor a team of 50 specialists (the 1:50 pod).</li>
      <li>Their pod delivers high-value contracts to enterprises, governments and communities.</li>
      <li>They earn both <strong>active commissions</strong> and <strong>residual income</strong> from recurring services.</li>
    </ul>
    <p style="margin-top:10px;">
      Underneath, leadership formation is anchored in the
      <strong>HEXAD Mentoring Framework</strong> — Personal Development, Professional Development,
      Occupational (Work) Development, Financial Development, Relationship Development and Truth Education.
    </p>
    <h3 style="margin-top:18px;">Why 1:50 Leaders Are Rare</h3>
    <p style="margin-top:6px;">
      A leader is not a student.<br>
      A leader is not an employee.<br>
      A leader is not a random certification seeker.
    </p>
    <p style="margin-top:8px;">
      A <strong>1:50 Leader</strong> in the Investor Education Work Network is a uniquely formed
      portfolio owner and governor of a full delivery unit.
    </p>
    <ul style="margin-top:8px; padding-left:20px;">
      <li>A certified industry expert in at least one strategic sector.</li>
      <li>A HEXAD-developed strategist with depth in personal, professional and truth education.</li>
      <li>A workforce builder who can attract, form and mentor a 50-person delivery pod.</li>
      <li>A contract operator who understands scope, risk, compliance and value creation.</li>
      <li>A service delivery governor who maintains standards, SLAs and client relationships.</li>
      <li>A portfolio owner in one or more of the 20 global industry sectors.</li>
    </ul>
    <p style="margin-top:8px;">
      The <strong>1:50 model</strong> is mathematically equivalent to a franchise plus a consulting firm
      plus a managed services company — but designed to run with lower operational friction and with
      HEXAD-informed leadership at the center.
    </p>
  </section>

  <section class="section" id="journey">
    <h2>Leadership Journey — Train · Build · Deploy · Earn</h2>
    <div class="how">
      <div class="step">
        <h4>1. Train</h4>
        <p>
          You begin with HEXAD mentoring and industry-specific expert tracks
          (cloud, cybersecurity, medical technology, industrial systems, etc.).
          Training is action-based: labs, simulations, and portfolio-building projects.
        </p>
      </div>
      <div class="step">
        <h4>2. Build</h4>
        <p>
          You recruit and form your <strong>1:50 team</strong> — carefully selected individuals
          who complete their own certification ladders under your guidance and the
          broader Investor Education support structure.
        </p>
      </div>
      <div class="step">
        <h4>3. Deploy</h4>
        <p>
          Your pod is deployed into real delivery: cloud migrations, SOC services,
          welding and industrial automation projects, healthcare IT rollouts,
          business development and marketing campaigns, and more.
        </p>
      </div>
      <div class="step">
        <h4>4. Earn</h4>
        <p>
          You earn structured commissions on team-building, plus
          multi-year residual income on managed services and recurring contracts
          that your 1:50 team delivers and sustains.
        </p>
      </div>
    </div>
  </section>

  <section class="section" id="economics">
    <h2>Economics — Commissions & Residuals</h2>
    <p>
      The Investor Education model is designed to reward leaders who can build,
      govern and scale high-performing teams that consistently deliver value.
    </p>
    <div class="grid" style="margin-top:16px;">
      <div class="card">
        <h3>1. Team-Building Commission</h3>
        <p>
          As a leader, you receive an <strong>illustrative commission of 44,321 USD</strong>
          for successfully forming and activating a complete 1:50 pod in your industry.
        </p>
        <p style="margin-top:8px;">
          This reflects the value of building a 50-person certified unit capable of
          delivering contracts worth millions of dollars in services over multiple years.
        </p>
      </div>
      <div class="card">
        <h3>2. Residual Income from Managed Services</h3>
        <p>
          Once your pod is deployed, you participate in the residual value of
          <strong>managed services, projects and recurring contracts</strong> delivered to
          enterprises, ministries, hospitals, factories and global organizations.
        </p>
        <p style="margin-top:8px;">
          Illustrative economic models show potential leader portfolios reaching
          <strong>2,127,372 USD per year</strong> and individual team member incomes reaching
          <strong>63,822 USD per year</strong> when pods are fully utilized across multiple clients.
        </p>
      </div>
      <div class="card">
        <h3>3. Portfolio Scaling Across Sectors</h3>
        <p>
          Leaders who prove capacity in one sector can extend into adjacent sectors
          (for example, from Intelligent Cloud into Cybersecurity, or from Medical
          Technology into Industrial Automation for healthcare plants), compounding
          their residual earnings over time.
        </p>
      </div>
    </div>
    <h3 style="margin-top:18px;">Leader ROI Ladder (Illustrative)</h3>
    <p style="margin-top:6px; font-size:0.9rem; color:#4b5563;">
      This ladder illustrates how active commissions and residual income can combine as your 1:50 pod
      moves from formation to multi-contract maturity. Figures are indicative and vary by sector,
      geography and portfolio size.
    </p>
    <div class="table-wrapper" style="margin-top:10px; overflow-x:auto;">
      <table style="width:100%; border-collapse:collapse; font-size:0.9rem;">
        <caption class="visually-hidden">Leader ROI ladder summarizing commissions and residual ranges at Month 3, 6 and 12 milestones.</caption>
        <thead>
          <tr style="background:#0f172a; color:#f9fafb;">
            <th scope="col" style="padding:8px; text-align:left;">Milestone</th>
            <th scope="col" style="padding:8px; text-align:left;">Active Commission (USD)</th>
            <th scope="col" style="padding:8px; text-align:left;">Residual (Managed Services)</th>
            <th scope="col" style="padding:8px; text-align:left;">Cumulative Annualized Potential</th>
          </tr>
        </thead>
        <tbody>
          <tr style="background:#0b1220; color:#e5e7eb;">
            <td style="padding:8px;">Month 3 &mdash; Pod Activation</td>
            <td style="padding:8px;">14,440</td>
            <td style="padding:8px;">120,000 &ndash; 240,000</td>
            <td style="padding:8px;">300,000 &ndash; 600,000</td>
          </tr>
          <tr style="background:#020617; color:#e5e7eb;">
            <td style="padding:8px;">Month 6 &mdash; Multi-Client Delivery</td>
            <td style="padding:8px;">28,880</td>
            <td style="padding:8px;">480,000 &ndash; 960,000</td>
            <td style="padding:8px;">1.0M &ndash; 2.0M</td>
          </tr>
          <tr style="background:#0b1220; color:#e5e7eb;">
            <td style="padding:8px;">Month 12 &mdash; Portfolio Maturity</td>
            <td style="padding:8px;">44,321</td>
            <td style="padding:8px;">1,200,000 &ndash; 2,400,000</td>
            <td style="padding:8px;">2.1M+</td>
          </tr>
        </tbody>
      </table>
    </div>
    <p style="margin-top:10px; font-size:0.9rem; color:#4b5563;">
      Full financial models, risk factors and assumptions are provided in the
      <strong>Investor Education Finance Pack</strong> — available on request.
    </p>
  </section>

  <section class="section" id="team-roles">
    <h2>1:50 Team &amp; Roles &mdash; Inside a Leadership Pod</h2>
    <p>
      Every Investor Education leader governs a <strong>50-person delivery pod</strong>. While the exact
      mix of roles changes by sector (cloud, cybersecurity, medical, industrial, etc.), every pod is
      architected around four core layers: leadership, core delivery, enablement and growth.
    </p>
    <div class="grid" style="margin-top:16px;">
      <div class="card">
        <h3>1. Leadership Spine</h3>
        <ul style="margin-top:8px; padding-left:18px;">
          <li><strong>1x Pod Leader (You)</strong> &mdash; overall portfolio owner, contracts governor, HEXAD-formed leader.</li>
          <li><strong>3&ndash;5x Leads</strong> &mdash; Technical/Delivery Lead, Operations/PM Lead, Quality &amp; Compliance Lead, Finance &amp; Commercial Lead.</li>
          <li>Steers vision, approves scope, signs off on SLAs and major decisions.</li>
        </ul>
      </div>
      <div class="card">
        <h3>2. Core Delivery Squads</h3>
        <ul style="margin-top:8px; padding-left:18px;">
          <li><strong>20&ndash;28x Certified Specialists</strong> in your sector (e.g. welders, cloud engineers, SOC analysts, biomedical techs).</li>
          <li>Own day-to-day production, implementation and operations work.</li>
          <li>Organised into 2&ndash;4 squads with clear sprint plans and output metrics.</li>
        </ul>
      </div>
      <div class="card">
        <h3>3. Enablement &amp; Quality</h3>
        <ul style="margin-top:8px; padding-left:18px;">
          <li><strong>8&ndash;12x Enablement Roles</strong> &mdash; project coordination, documentation, QA/QC, safety, training assistants.</li>
          <li>Keep standards, procedures, WIs, safety and documentation running.</li>
          <li>Provide the structure that lets specialists focus on production.</li>
        </ul>
      </div>
      <div class="card">
        <h3>4. Growth &amp; Client Layer</h3>
        <ul style="margin-top:8px; padding-left:18px;">
          <li><strong>4&ndash;8x Client &amp; Growth Roles</strong> &mdash; account stewards, pre-sales engineers, reporting analysts.</li>
          <li>Maintain client relationships, spot new opportunities and gather feedback.</li>
          <li>Work with you to extend contracts into multi-year, multi-site portfolios.</li>
        </ul>
      </div>
    </div>
    <p style="margin-top:10px; font-size:0.9rem; color:#4b5563;">
      This structure means a 1:50 pod is not a loose collection of people &mdash; it is a
      <strong>governed, role-based delivery engine</strong> that can be plugged into Fortune 500
      environments, ministries and large institutions with confidence.
    </p>
  </section>

  <section class="section" id="kpis-slas">
    <h2>KPIs, SLAs &amp; Governance &mdash; How Performance is Measured</h2>
    <p>
      High-trust clients demand visible evidence of control. Each 1:50 leadership pod operates
      with a clear set of <strong>key performance indicators (KPIs)</strong>, <strong>service level agreements (SLAs)</strong>
      and governance rhythms that can be explained to any board, regulator or audit team.
    </p>
    <div class="grid" style="margin-top:16px;">
      <div class="card">
        <h3>1. Delivery KPIs</h3>
        <ul style="margin-top:8px; padding-left:18px;">
          <li>On-time delivery rate for projects and milestones.</li>
          <li>Service uptime/availability for managed operations.</li>
          <li>Issue resolution time and backlog burn-down.</li>
          <li>Quality metrics (rework rate, defect escape rate, audit findings).</li>
        </ul>
      </div>
      <div class="card">
        <h3>2. People &amp; Capability KPIs</h3>
        <ul style="margin-top:8px; padding-left:18px;">
          <li>Certification completion rate across the 50-person team.</li>
          <li>Training hours per member (HEXAD + technical).</li>
          <li>Retention and succession strength on key roles.</li>
        </ul>
      </div>
      <div class="card">
        <h3>3. Financial &amp; Contract KPIs</h3>
        <ul style="margin-top:8px; padding-left:18px;">
          <li>Recurring revenue under management (MRR/ARR) per pod.</li>
          <li>Gross margin and project profitability bands.</li>
          <li>Contract renewal rates and upsell/expansion ratios.</li>
        </ul>
      </div>
      <div class="card">
        <h3>4. Governance Rhythms</h3>
        <ul style="margin-top:8px; padding-left:18px;">
          <li>Weekly pod stand-ups and risk reviews.</li>
          <li>Monthly client health checks and reporting.</li>
          <li>Quarterly portfolio reviews with Investor Education governance.</li>
          <li>Documented playbooks and escalation paths for incidents.</li>
        </ul>
      </div>
    </div>
    <p style="margin-top:10px; font-size:0.9rem; color:#4b5563;">
      As a leader, you are trained to <strong>read and act on these dashboards</strong> so that your
      pod remains audit-ready, contract-ready and expansion-ready at all times.
    </p>
  </section>

  <section class="section" id="sectors">
    <h2>20 Industry Sectors — Where Your 1:50 Team Can Lead</h2>
    <p>
      Each Investor Education leader is assigned to one or more of the following 20 strategic sectors. Every sector is designed with its own certification ladder,
      delivery portfolio and contract models.
    </p>
    <div class="grid" style="margin-top:16px;">
      <div class="card">
        <h4>1. ☁️ Intelligent Cloud, Data & AI</h4>
        <p>
          Cloud platforms, distributed computing, data analytics and AI automation.
          Your pod builds landing zones, data platforms, analytics stacks and AI
          applications for enterprises and ministries.
        </p>
      </div>
      <div class="card">
        <h4>2. 🔐 Cybersecurity & Digital Defense</h4>
        <p>
          Ethical hacking, network defense, governance and secure cloud architecture.
          Your pod operates SOC services, vulnerability assessments and compliance programs.
        </p>
      </div>
      <div class="card">
        <h4>3. 🧑‍💻 Information Technology (Operations & Infrastructure)</h4>
        <p>
          IT operations, service management, infrastructure, helpdesk and enterprise support.
          Your pod runs ITIL-based operations, endpoint management and hybrid infrastructure.
        </p>
      </div>
      <div class="card">
        <h4>4. 🧑‍💻 Software & Systems Engineering</h4>
        <p>
          Full-stack development, DevOps, CI/CD, microservices and platform engineering.
          Your pod delivers product builds, platform modernization and complex software projects.
        </p>
      </div>
      <div class="card">
        <h4>5. 🔬 Medical Technology / Healthcare IT / Life Sciences</h4>
        <p>
          Biomedical systems, HCIT, telemedicine, health analytics and regulatory compliance.
          Your pod supports hospitals, diagnostics, payers and global health programs.
        </p>
      </div>
      <div class="card">
        <h4>6. 🔌💡 Renewable & Sustainable Energy</h4>
        <p>
          Solar, wind, storage and smart grid solutions. Your pod designs, installs and
          manages renewable energy systems for communities and enterprises.
        </p>
      </div>
      <div class="card">
        <h4>7. 📲 Smart Home & Building Automation</h4>
        <p>
          IoT systems, electronic security, automation and energy efficiency.
          Your pod delivers smart buildings, security and comfort solutions.
        </p>
      </div>
      <div class="card">
        <h4>8. 🚠 Fiber Optics & Data Cabling</h4>
        <p>
          Optical networks, structured cabling and connectivity for enterprises,
          campuses and telecom networks.
        </p>
      </div>
      <div class="card">
        <h4>9. 📡 Communications & Satellite Technology</h4>
        <p>
          5G, microwave, satellite and B-VoIP infrastructure. Your pod supports
          telecom operators, ISPs and critical communications networks.
        </p>
      </div>
      <div class="card">
        <h4>10. 👷‍♂️ Architecture, Engineering & Construction (AEC)</h4>
        <p>
          BIM, smart infrastructure, project controls and construction technology for
          major projects and urban development.
        </p>
      </div>
      <div class="card">
        <h4>11. 🧑‍🏭 Manufacturing & Industrial Systems (Welding, Automation)</h4>
        <p>
          Certified welding, fabrication, robotics, PLC/SCADA and plant reliability
          support for heavy industry and energy.</p>
      </div>
      <div class="card">
        <h4>12. 📉 Business Development & Management</h4>
        <p>
          Strategy, PMO, governance and operational scaling. Your pod supports
          executive teams in achieving disciplined, measurable growth.
        </p>
      </div>
      <div class="card">
        <h4>13. 📣 Marketing & Sales Leadership</h4>
        <p>
          Demand generation, brand strategy and revenue operations. Your pod runs
          campaigns, funnels and sales systems for global clients.
        </p>
      </div>
      <div class="card">
        <h4>14. 🧾 Management Accounting & Financial Technology</h4>
        <p>
          Management accounting, ERP finance modules, analytics and automation for
          CFOs and finance teams.
        </p>
      </div>
      <div class="card">
        <h4>15. 🏛 Government & Civic Technology (GovTech)</h4>
        <p>
          Digital government systems, citizen portals, digital identity and public
          sector data platforms.
        </p>
      </div>
      <div class="card">
        <h4>16. 🌾 Agricultural Technology (AgriTech)</h4>
        <p>
          Smart farming, sensors, supply chain visibility and farm-to-market platforms
          for food security and agricultural value chains.
        </p>
      </div>
      <div class="card">
        <h4>17. 💳 Financial Services & Investment Technology (FinTech)</h4>
        <p>
          Digital banking, payments, wallets and investment platforms. Your pod
          supports banks, MFIs, fintech startups and capital markets.
        </p>
      </div>
      <div class="card">
        <h4>18. 🎓 Education Technology (EdTech)</h4>
        <p>
          Digital learning platforms, virtual labs, LMS deployment, AI student analytics
          for schools, universities, and ministries of education.
        </p>
      </div>
      <div class="card">
        <h4>19. 🎨 Creative &amp; Digital Media Technology</h4>
        <p>
          Brand systems, interactive content, 3D visualization, training media,
          immersive learning assets for education and enterprise.
        </p>
      </div>
      <div class="card">
        <h4>20. 🚚 Logistics &amp; Smart Mobility (Supply Chain 4.0)</h4>
        <p>
          Fleet telematics, route optimization, warehouse automation, smart delivery networks.
        </p>
      </div>
    </div>
  </section>

  <section class="section" id="hexad">
    <h2>HEXAD Mentoring & the Investor Education Work Network (IEWN)</h2>
    <p>
      Technical skill alone is not enough. The Investor Education Leadership pathway
      is built on the <strong>HEXAD Mentoring Framework</strong>, which forms leaders
      across six dimensions:
    </p>
    <ul style="margin-top:8px; padding-left:20px;">
      <li><strong>Personal Development</strong> — character, discipline and resilience.</li>
      <li><strong>Professional Development</strong> — excellence in craft and industry standards.</li>
      <li><strong>Occupational (Work) Development</strong> — real-world production and delivery.</li>
      <li><strong>Financial Development</strong> — stewardship, investment and wealth ethics.</li>
      <li><strong>Relationship Development</strong> — teamwork, governance and people systems.</li>
      <li><strong>Truth Education</strong> — anchoring work and leadership in enduring truth.</li>
    </ul>
    <p style="margin-top:10px;">
      The <strong>Investor Education Work Network (IEWN)</strong> then connects your 1:50
      pod into a larger ecosystem of leaders, sectors and contracts, so that no
      leader operates in isolation.
    </p>
    <p style="margin-top:8px; font-size:0.9rem;">
      Learn more about HEXAD at <a href="/hexad-mastery.html">btheducationgroup.org/hexad-mastery</a>.
    </p>
  </section>

  <section class="section" id="faq">
    <h2>Frequently Asked Questions</h2>
    <div class="grid">
      <div class="card">
        <h4>Is this only about certifications?</h4>
        <p>
          No. Certifications are important but they are only one layer. The core
          of Investor Education is <strong>work production</strong> — building teams that
          deliver contracts and value in the real world.
        </p>
      </div>
      <div class="card">
        <h4>How long before a leader can start earning?</h4>
        <p>
          Leaders begin with HEXAD formation and industry tracks. Many begin earning
          commission and project income between <strong>months 3–9</strong>, depending on sector,
          speed of team-building, and client deployment.
        </p>
      </div>
      <div class="card">
        <h4>Do I need to already be an expert?</h4>
        <p>
          You need maturity, discipline and capacity to learn and lead. The program
          provides the structured paths, mentorship and frameworks to grow you into
          an expert over time while you build your team.
        </p>
      </div>
      <div class="card">
        <h4>Can I lead in more than one sector?</h4>
        <p>
          Primary assignment is to one sector at a time. As your first pod reaches
          maturity and successful delivery, cross-sector opportunities may be opened
          to you based on performance and governance.
        </p>
      </div>
      <div class="card">
        <h4>How many leadership slots exist?</h4>
        <p>
          The Investor Education program is designed with
          <strong>100 team leaders per sector</strong>. These are highly selective positions
          with structured onboarding and evaluation.
        </p>
      </div>
      <div class="card">
        <h4>How do I proceed if I’m interested?</h4>
        <p>
          Submit the application form below. Our team will review your profile,
          schedule a call, and guide you through the next steps, timelines and
          sector allocation.
        </p>
      </div>
    </div>
  </section>

  <!-- Objection Buster -->
  <section class="section" id="objections">
    <h2>Key Answers — How 1:50 Leadership Works</h2>
    <details class="card"><summary><strong>How does 1:50 work?</strong></summary><p>It’s a governed delivery model. You own a 50‑person pod with defined roles, standards and rhythms. You lead portfolio outcomes across contracts with KPI/SLAs and governance reviews.</p></details>
    <details class="card"><summary><strong>How do I get trained?</strong></summary><p>Through HEXAD formation (personal → truth) and a sector certification roadmap. Training is action‑based with labs, simulations and portfolio work while you build your team.</p></details>
    <details class="card"><summary><strong>What are my responsibilities?</strong></summary><p>Portfolio ownership, team leadership, client stewardship, governance adherence and decision rights on scope, risk and quality. You run a real delivery unit, not just a class.</p></details>
    <details class="card"><summary><strong>What do I earn and when?</strong></summary><p>Illustrative: commissions during team activation; residual income ramps as managed services/contracts go live. See Month 3/6/12 tiers and ROI ladder below.</p></details>
    <details class="card"><summary><strong>What will my team do?</strong></summary><p>Produce sector‑grade work: cloud migrations, SOC ops, telehealth, fiber builds, AEC, industrial automation, etc., based on your sector assignment and playbooks.</p></details>
    <details class="card"><summary><strong>Who supports delivery?</strong></summary><p>Playbooks, QA/QC, compliance, vendor ecosystems and program governance. You are not alone — you’re the portfolio owner inside a larger network.</p></details>
    <details class="card"><summary><strong>How is this not MLM?</strong></summary><p>No multi‑level commissions, no product reselling. This mirrors Accenture/Deloitte pod delivery: professional work, contracts, SLAs and audited governance.</p></details>
  </section>

  <section class="section" id="apply-leader">
    <h2>Apply to Become an Investor Education Team Leader</h2>
    <p>
      Complete the form below to express interest in a leadership slot. Please
      provide accurate information so our team can evaluate and respond effectively.
    </p>
    <form action="contact-handler.php" method="post" style="margin-top:16px; max-width:720px;">
      <input type="hidden" name="form_context" value="Investor Education Leadership Application (Main Section)" />
      <input type="hidden" name="utm_source" value="">
      <input type="hidden" name="utm_medium" value="">
      <input type="hidden" name="utm_campaign" value="">
      <input type="hidden" name="utm_content" value="">
      <input type="hidden" name="referrer" value="">
      <input type="hidden" name="gclid" value="">
      <input type="hidden" name="lead_intent" value="apply">
      <input type="text" name="website" value="" aria-hidden="true" tabindex="-1" style="position:absolute;left:-9999px;" autocomplete="off">
      <input type="hidden" name="client_elapsed_ms" value="0">
      <div class="field">
        <label for="full_name_2">Full Name</label>
        <input type="text" id="full_name_2" name="full_name" required />
      </div>
      <div class="field">
        <label for="email_2">Email</label>
        <input type="email" id="email_2" name="email" required />
      </div>
      <div class="field">
        <label for="phone_2">Phone / WhatsApp</label>
        <input type="text" id="phone_2" name="phone" required />
      </div>
      <div class="field">
        <label for="country_2">Country / Region</label>
        <input type="text" id="country_2" name="country" />
      </div>
      <div class="field">
        <label for="sector_interest_2">Primary Industry of Interest</label>
        <select id="sector_interest_2" name="sector_interest" required>
          <option value="">Select an industry</option>
          <option>Intelligent Cloud, Data & AI</option>
          <option>Cybersecurity & Digital Defense</option>
          <option>Information Technology (Operations & Infrastructure)</option>
          <option>Software & Systems Engineering</option>
          <option>Medical Technology / Healthcare IT / Life Sciences</option>
          <option>Renewable & Sustainable Energy</option>
          <option>Smart Home & Building Automation</option>
          <option>Fiber Optics & Data Cabling</option>
          <option>Communications & Satellite Technology</option>
          <option>Architecture, Engineering & Construction (AEC)</option>
          <option>Manufacturing & Industrial Systems (Welding, Automation)</option>
          <option>Business Development & Management</option>
          <option>Marketing & Sales Leadership</option>
          <option>Management Accounting & Financial Technology</option>
          <option>Government & Civic Technology (GovTech)</option>
          <option>Agricultural Technology (AgriTech)</option>
          <option>Financial Services & Investment Technology (FinTech)</option>
          <option>Education Technology (EdTech)</option>
          <option>Creative & Digital Media Technology</option>
          <option>Logistics & Smart Mobility (Supply Chain 4.0)</option>
        </select>
      </div>
      <div class="field">
        <label for="experience">Relevant Experience / Why You Want to Lead</label>
        <textarea id="experience" name="experience" rows="4" required></textarea>
      </div>
      <div class="field">
        <label for="hear_about">How did you hear about the Investor Education Program?</label>
        <input type="text" id="hear_about" name="hear_about" />
      </div>
      <button type="submit" class="btn" style="margin-top:10px;">Submit Leadership Application</button>
    </form>
  </section>
</main>

<?php
  // Global Industry Proof (data-driven, link-out only; no third-party text copied)
  $proof_items = [];
  $proof_json_path = __DIR__ . '/data/industry-proof.json';
  if (is_readable($proof_json_path)) {
    $raw = @file_get_contents($proof_json_path);
    $data = json_decode($raw, true);
    if (is_array($data)) { $proof_items = $data; }
  }
?>
<section class="section industry-proof" id="industry-proof" aria-labelledby="industry-proof-heading">
  <h2 id="industry-proof-heading">Global Industry Proof — Independent Research & Standards</h2>
  <p style="color:#4b5563; max-width:900px;">
    Credibility is grounded in independent, global sources: certification bodies, standards organizations,
    and respected research. Explore the references below to understand workforce demand, delivery
    standards, and ROI narratives that your portfolio can align to.
  </p>
  <ul class="proof-grid" style="list-style:none; padding:0; margin-top:16px;">
    <?php foreach ($proof_items as $it):
      $title = isset($it['title']) ? $it['title'] : '';
      $url = isset($it['url']) ? $it['url'] : '';
      $source = isset($it['source']) ? $it['source'] : '';
      $summary = isset($it['summary']) ? $it['summary'] : '';
      $category = isset($it['category']) ? $it['category'] : '';
      $verified = isset($it['last_verified']) ? $it['last_verified'] : '';
    ?>
      <li class="proof-card" data-category="<?php echo htmlspecialchars($category, ENT_QUOTES); ?>">
        <div class="proof-chip"><?php echo htmlspecialchars($category, ENT_QUOTES); ?></div>
        <h3 class="proof-title" style="margin:6px 0 4px; font-size:1.05rem;">
          <a class="proof-link" href="<?php echo htmlspecialchars($url, ENT_QUOTES); ?>" target="_blank" rel="noopener nofollow"
             data-event="industry-proof-link" data-intent="research" data-source="<?php echo htmlspecialchars($source, ENT_QUOTES); ?>"
             data-title="<?php echo htmlspecialchars($title, ENT_QUOTES); ?>">
             <?php echo htmlspecialchars($title, ENT_QUOTES); ?>
          </a>
        </h3>
        <?php if ($summary): ?>
          <p class="proof-summary" style="color:#4b5563; font-size:0.92rem; line-height:1.35;">
            <?php echo htmlspecialchars($summary, ENT_QUOTES); ?>
          </p>
        <?php endif; ?>
        <div class="proof-meta" style="margin-top:8px; font-size:0.85rem; color:#64748b; display:flex; gap:8px; align-items:center; flex-wrap:wrap;">
          <span class="proof-source" aria-label="Source">
            <?php echo htmlspecialchars($source, ENT_QUOTES); ?>
          </span>
          <?php if ($verified): ?>
            <time class="proof-verified" datetime="<?php echo htmlspecialchars($verified, ENT_QUOTES); ?>">
              Verified <?php echo date('M Y', strtotime($verified)); ?>
            </time>
          <?php endif; ?>
        </div>
      </li>
    <?php endforeach; ?>
    <?php if (empty($proof_items)): ?>
      <li class="proof-card">
        <div class="proof-chip">Info</div>
        <p>No external references loaded. Add entries to <code>data/industry-proof.json</code>.</p>
      </li>
    <?php endif; ?>
  </ul>
  <p style="margin-top:12px; font-size:0.8rem; color:#64748b; max-width:900px;">
    Trademarks and logos are the property of their respective owners. Links provided for informational purposes only —
    no endorsement is implied. We cite and link to official sources; we do not reproduce their proprietary content.
  </p>
</section>

<?php if (!empty($proof_items)): ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": "Global Industry Proof — References",
  "itemListElement": [
    <?php foreach ($proof_items as $idx => $it): ?>
      {
        "@type": "ListItem",
        "position": <?php echo (int)($idx+1); ?>,
        "item": {
          "@type": "CreativeWork",
          "name": <?php echo json_encode($it['title'] ?? ''); ?>,
          "url": <?php echo json_encode($it['url'] ?? ''); ?>,
          "creator": <?php echo json_encode($it['source'] ?? ''); ?>
        }
      }<?php echo $idx < count($proof_items)-1 ? ',' : '' ?>
    <?php endforeach; ?>
  ]
}
</script>
<?php endif; ?>

<script>
// Leadership hero stat animation with viewport trigger + smoother easing
document.addEventListener('DOMContentLoaded', function () {
  const counters = Array.from(document.querySelectorAll('.stat-number'));
  if (!counters.length) return;

  const easeOutQuad = (t) => t * (2 - t); // simple easing

  function animateCounter(el) {
    const target = parseInt(el.getAttribute('data-target'), 10);
    if (isNaN(target)) return;
    const duration = 1800; // ms
    const startTime = performance.now();

    function frame(now) {
      const elapsed = now - startTime;
      const progress = Math.min(elapsed / duration, 1);
      const eased = easeOutQuad(progress);
      const value = Math.floor(eased * target);
      el.textContent = value.toLocaleString();
      if (progress < 1) requestAnimationFrame(frame);
    }
    requestAnimationFrame(frame);
  }

  // Respect reduced motion preference
  const prefersReduced = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (prefersReduced) {
    counters.forEach(el => {
      const target = parseInt(el.getAttribute('data-target'), 10);
      if (!isNaN(target)) el.textContent = target.toLocaleString();
    });
    return;
  }

  // Trigger when hero enters viewport (prevents firing if loaded off-screen)
  let statsTracked = false;
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        counters.forEach(c => animateCounter(c));
        if (!statsTracked && typeof window.trackEvent === 'function') {
          window.trackEvent('leadership_stat_animate', { count: counters.length });
          statsTracked = true;
        }
        observer.disconnect();
      }
    });
  }, { threshold: 0.3 });

  // Observe first stat parent
  const firstStat = document.querySelector('.stats');
  if (firstStat) observer.observe(firstStat);
});

// UTM/referrer capture + lead intent + simple elapsed time capture
document.addEventListener('DOMContentLoaded', function () {
  const params = new URLSearchParams(window.location.search);
  const utm = {
    utm_source: params.get('utm_source') || '',
    utm_medium: params.get('utm_medium') || '',
    utm_campaign: params.get('utm_campaign') || '',
    utm_content: params.get('utm_content') || '',
    gclid: params.get('gclid') || ''
  };
  const ref = document.referrer || '';
  const rawIntent = (params.get('lead_intent') || params.get('intent') || '').toLowerCase();
  const intent = rawIntent || 'apply';
  const forms = document.querySelectorAll('form[action="contact-handler.php"]');
  const start = Date.now();

  // Tracking on/off control via query or localStorage
  const trackingParam = (params.get('tracking') || '').toLowerCase();
  if (trackingParam === 'off') { try { localStorage.setItem('tracking_off', '1'); } catch (_) {} }
  if (trackingParam === 'on') { try { localStorage.removeItem('tracking_off'); } catch (_) {} }
  let isTrackingOff = false;
  try { isTrackingOff = localStorage.getItem('tracking_off') === '1'; } catch (_) { isTrackingOff = false; }
  window.__trackingDisabled__ = isTrackingOff;

  // Tracking utility (prefers dataLayer, falls back to gtag)
  function trackEvent(event, props={}){
    if (window.__trackingDisabled__) return;
    try {
      const payload = Object.assign({
        event,
        page: 'leadership',
        lead_intent: intent,
        url: window.location.href
      }, props);
      if (window.dataLayer && Array.isArray(window.dataLayer)) {
        window.dataLayer.push(payload);
      } else if (typeof window.gtag === 'function') {
        window.gtag('event', event, payload);
      }
    } catch (_) {}
  }
  // Expose globally for other inline scripts
  window.trackEvent = trackEvent;
  forms.forEach(f => {
    ['utm_source','utm_medium','utm_campaign','utm_content','gclid'].forEach(k => {
      const el = f.querySelector(`input[name="${k}"]`);
      if (el) el.value = utm[k] || '';
    });
    const refEl = f.querySelector('input[name="referrer"]'); if (refEl) refEl.value = ref;
    const intentEl = f.querySelector('input[name="lead_intent"]'); if (intentEl) intentEl.value = intent;
    f.addEventListener('submit', function(){
      const t = f.querySelector('input[name="client_elapsed_ms"]');
      if (t) t.value = String(Date.now() - start);
      const ctx = f.querySelector('input[name="form_context"]');
      trackEvent('lead_form_submit', {
        form_context: ctx ? ctx.value : 'Leadership Form',
        elapsed_ms: t ? Number(t.value) : (Date.now() - start)
      });
    });
  });

  // Briefing CTA sets intent on click
  document.querySelectorAll('[data-intent]').forEach(a => {
    a.addEventListener('click', function(){
      const val = (a.getAttribute('data-intent')||'').toLowerCase();
      if (val) {
        history.replaceState(null, '', updateQuery(window.location.href, { lead_intent: val }));
      }
    });
  });

  // Click tracking for elements with data-event
  document.querySelectorAll('[data-event]').forEach(el => {
    el.addEventListener('click', function(){
      const name = el.getAttribute('data-event');
      const target = el.getAttribute('href') || '';
      const ctaIntent = (el.getAttribute('data-intent')||intent);
      // Original specific event
      trackEvent(name, { target, cta_intent: ctaIntent });
      // Unified event pattern
      trackEvent('leadership_cta_click', { cta_event: name, target, cta_intent: ctaIntent });
    });
  });

  // Section view tracking (fires once per section)
  const sectionIds = ['trusted','economics-depth','enterprise','industry-proof','apply-leader'];
  const viewed = new Set();
  const sectionObserver = new IntersectionObserver((entries)=>{
    entries.forEach(entry=>{
      if (entry.isIntersecting) {
        const id = entry.target.id;
        if (!viewed.has(id)) {
          viewed.add(id);
          trackEvent('leadership_section_view', { section: id });
        }
      }
    });
  }, { root: null, threshold: 0.25, rootMargin: '0px 0px -40% 0px' });
  sectionIds.forEach(id => {
    const el = document.getElementById(id);
    if (el) sectionObserver.observe(el);
  });

  // Section time-in-view tracking (emit once when >=5s cumulative)
  const timeSections = ['trusted','economics-depth','enterprise','industry-proof','apply-leader'];
  const timeState = new Map(); // id -> { visible, enterTs, accMs, fired }
  timeSections.forEach(id => timeState.set(id, { visible:false, enterTs:0, accMs:0, fired:false }));

  const timeObserver = new IntersectionObserver((entries)=>{
    const now = performance.now();
    entries.forEach(entry => {
      const id = entry.target.id;
      if (!timeState.has(id)) return;
      const s = timeState.get(id);
      if (entry.isIntersecting && !s.visible) {
        s.visible = true; s.enterTs = now;
      } else if (!entry.isIntersecting && s.visible) {
        s.visible = false; s.accMs += Math.max(0, now - s.enterTs); s.enterTs = 0;
      }
      timeState.set(id, s);
    });
  }, { threshold: 0.5 });

  timeSections.forEach(id => { const el = document.getElementById(id); if (el) timeObserver.observe(el); });

  function flushSectionTimes(){
    const now = performance.now();
    timeState.forEach((s, id) => {
      let acc = s.accMs;
      if (s.visible) acc += Math.max(0, now - s.enterTs);
      if (!s.fired && acc >= 5000) { // 5 seconds
        s.fired = true;
        trackEvent('leadership_section_time', { section: id, ms: Math.round(acc) });
      }
    });
  }
  setInterval(flushSectionTimes, 1000);
  window.addEventListener('beforeunload', flushSectionTimes);

  // Scroll depth tracking
  const depthMarks = [25,50,75,90];
  const depthFired = new Set();
  function checkDepth(){
    const scrollTop = window.scrollY || document.documentElement.scrollTop;
    const docHeight = (document.documentElement.scrollHeight - document.documentElement.clientHeight) || 1;
    const pct = Math.round((scrollTop / docHeight) * 100);
    depthMarks.forEach(mark => {
      if (pct >= mark && !depthFired.has(mark)) {
        depthFired.add(mark);
        trackEvent('leadership_scroll_depth', { depth_pct: mark });
      }
    });
  }
  window.addEventListener('scroll', checkDepth, { passive: true });
  checkDepth();

  // Form error tracking (HTML5 validation)
  forms.forEach(f => {
    f.addEventListener('submit', function(e){
      if (!f.checkValidity()) {
        // Prevent firing duplicate during same attempt
        const invalidEls = Array.from(f.querySelectorAll(':invalid'));
        const names = invalidEls.map(el => el.name || el.id || el.tagName).filter(Boolean);
        trackEvent('leadership_form_error', {
          form_context: (f.querySelector('input[name="form_context"]')||{}).value || 'Leadership Form',
          invalid_count: names.length,
          invalid_fields: names.slice(0,10).join(',')
        });
      }
    }, true);
  });

  function updateQuery(url, patch){
    try {
      const u = new URL(url);
      Object.entries(patch).forEach(([k,v])=>{ if (v==null) u.searchParams.delete(k); else u.searchParams.set(k,String(v)); });
      return u.toString();
    } catch { return url; }
  }
});
</script>

<!-- Sticky Conversion Bar -->
<div class="sticky-convert" id="stickyConvert" hidden role="region" aria-label="Sticky quick actions">
  <div class="sticky-inner" role="navigation" aria-label="Quick actions">
    <a class="btn" href="#apply-leader" data-event="cta-sticky-apply">Apply Now</a>
    <a class="btn-outline" href="#apply-leader" data-event="cta-sticky-briefing" data-intent="briefing">Request Briefing</a>
    <a class="btn-outline" href="#economics" data-event="cta-sticky-finance">Finance Pack & ROI</a>
  </div>
</div>
<script>
// Sticky bar reveal
(function(){
  const bar = document.getElementById('stickyConvert');
  if(!bar) return;
  const revealAt = 0.3; // 30% scroll
  function onScroll(){
    const scrolled = (window.scrollY || document.documentElement.scrollTop);
    const height = (document.documentElement.scrollHeight - document.documentElement.clientHeight) || 1;
    if (scrolled/height > revealAt) {
      bar.hidden = false;
      document.body.classList.add('has-sticky');
    } else {
      bar.hidden = true;
      document.body.classList.remove('has-sticky');
    }
  }
  function updateParam(url,key,val){ try{ const u=new URL(url); u.searchParams.set(key,val); return u.toString(); }catch{return url;} }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();
})();
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://invest.btheducationgroup.com/index.php"},
    {"@type": "ListItem", "position": 2, "name": "Leadership", "item": "<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>"}
  ]
}
</script>

<!-- FAQPage JSON-LD derived from Objection Buster -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type": "Question","name": "How does 1:50 work?","acceptedAnswer": {"@type": "Answer","text": "A governed delivery model: a 50-person pod with roles, standards and rhythms. Leaders own portfolio outcomes across contracts with KPIs/SLAs and governance reviews."}},
    {"@type": "Question","name": "How do I get trained?","acceptedAnswer": {"@type": "Answer","text": "HEXAD formation plus a sector certification roadmap. Action-based training with labs, simulations and portfolio work while you build your team."}},
    {"@type": "Question","name": "What are my responsibilities?","acceptedAnswer": {"@type": "Answer","text": "Portfolio ownership, team leadership, client stewardship, governance adherence, decision rights on scope, risk and quality."}},
    {"@type": "Question","name": "What do I earn and when?","acceptedAnswer": {"@type": "Answer","text": "Illustrative commissions during activation; residuals ramp as managed services and contracts go live, with Month 3/6/12 tiers and an ROI ladder."}},
    {"@type": "Question","name": "What will my team do?","acceptedAnswer": {"@type": "Answer","text": "Sector-grade delivery: cloud migrations, SOC operations, telehealth, fiber builds, AEC, industrial automation and more depending on assignment."}},
    {"@type": "Question","name": "Who supports delivery?","acceptedAnswer": {"@type": "Answer","text": "Playbooks, QA/QC, compliance frameworks, vendor ecosystems and program governance support the leader and pod."}},
    {"@type": "Question","name": "How is this not MLM?","acceptedAnswer": {"@type": "Answer","text": "No multi-level commissions or product reselling. This mirrors consulting delivery pods (e.g., Accenture/Deloitte): professional services, contracts, SLAs and audited governance."}}
  ]
}
</script>

<!-- Leadership Service JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Investor Education Leadership — 1:50 Team Leader Program",
  "serviceType": "Leadership formation and managed services portfolio",
  "category": ["Education", "Consulting", "Managed Services"],
  "url": "<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>",
  "areaServed": "Worldwide",
  "audience": [
    {"@type": "Audience", "audienceType": "Enterprise"},
    {"@type": "Audience", "audienceType": "Public sector / Ministries"}
  ],
  "provider": {
    "@type": "Organization",
    "name": "Investor Education Work Network",
    "url": "https://invest.btheducationgroup.com/"
  },
  "hasPart": [
    {"@type": "WebPageElement", "name": "Economics — Commissions & Residuals", "url": "<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>#economics"},
    {"@type": "WebPageElement", "name": "Economics Depth — Multi-Year Impact Models", "url": "<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>#economics-depth"},
    {"@type": "WebPageElement", "name": "For Ministries & Enterprise Portfolios", "url": "<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>#enterprise"}
  ],
  "potentialAction": [
    {
      "@type": "ApplyAction",
      "name": "Apply to Become a Team Leader",
      "target": "<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>#apply-leader"
    },
    {
      "@type": "CommunicateAction",
      "name": "Request Leadership Briefing",
      "target": "<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>#apply-leader"
    }
  ]
}
</script>

<?php include 'footer.php'; ?>