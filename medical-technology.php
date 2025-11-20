<?php
$page_title       = "Medical Technology / Healthcare IT / Life Sciences — Modernize • Comply • Scale";
$meta_description = "Biomedical systems, telemedicine, analytics & data governance — delivered via certified 1:50 pods aligned to ISO 13485, AHIMA, ETA International and global health standards.";
$og_title         = $page_title;
$og_description   = $meta_description;
$og_image         = "https://invest.btheducationgroup.com/image/logo-og.png";
$og_url           = "https://invest.btheducationgroup.com/medical-technology.php";
// Page-scoped CSS for Medical Technology
$page_styles = ['assets/css/page/medical.css'];
include 'header.php';
?>

<?php 
$breadcrumb_items = [
  ['label' => 'Home', 'href' => 'index.php'],
  ['label' => 'Industries', 'href' => 'index.php#industries'],
  ['label' => 'Medical Technology & Healthcare IT']
];
include 'breadcrumbs.php';
?>

<a id="top"></a>
<main class="medical-tech">

<!--
  Recommended image assets (you can add these to your /image/ or equivalent directory):
  - image/hero-medical-technology.jpg  → hero background (medical / HCIT visual)
-->


<header>
  <!-- Hero uses global .hero layout from header.php -->
  <div class="hero">
    <div class="hero-left">
      <h1>Modernize. Comply. Scale.<br><strong>Medical Technology &amp; Healthcare IT</strong></h1>

      <p class="lead">
        Enterprise-grade biomedical systems, EHR platforms, telemedicine and revenue-cycle technology —
        operated as a managed <strong>1:50 medical technology pod</strong> for hospitals, diagnostic networks,
        ministries of health, payers and global NGOs.
      </p>

      <p class="lead" style="font-size:0.95rem;color:#dbeafe;max-width:700px;margin-top:8px;">
        Built for <strong>uptime, clinical safety and regulatory readiness</strong> across
        <strong>ISO&nbsp;13485</strong>, <strong>AHIMA</strong>, <strong>ISO&nbsp;27001</strong>, IHE and WHO
        digital health guidelines.
      </p>

      <div class="cta-row">
        <a class="btn" href="#apply">Become a Medical Technology Team Leader</a>
        <a class="btn-outline" href="#partner">Request Healthcare Partnership</a>
      </div>

      <div class="stats">
        <div class="stat">
          <div class="stat-value"
               data-animate="number"
               data-target="44321"
               data-suffix=" USD">
            44,321 USD
          </div>
          <div class="stat-label" style="font-size:13px;white-space:nowrap;">Team-Building Commission</div>
        </div>
        <div class="stat">
          <div class="stat-value"
               data-animate="number"
               data-target="2127372"
               data-suffix=" USD">
            2,127,372 USD
          </div>
          <div class="stat-label" style="font-size:13px;white-space:nowrap;">Leader Annual Income Potential</div>
        </div>
        <div class="stat">
          <div class="stat-value"
               data-animate="number"
               data-target="63822"
               data-suffix=" USD">
            63,822 USD
          </div>
          <div class="stat-label" style="font-size:13px;white-space:nowrap;">Member Annual Income Potential</div>
        </div>
      </div>

      <div style="margin-top:12px;display:flex;flex-wrap:wrap;gap:8px;">
        <span class="badge">Aligned with ISO 13485</span>
        <span class="badge">AHIMA-Oriented Information Management</span>
        <span class="badge">ISO 27001 &amp; Privacy Aware</span>
        <span class="badge">IHE &amp; WHO Digital Health</span>
      </div>
    </div>

    <div class="hero-right">
      <div class="card">
        <strong>Quick Apply — Medical Technology</strong>
        <form method="post" action="send-mail.php" class="application-form">
          <div class="field">
            <label>Full Name</label>
            <input name="name" required>
          </div>
          <div class="field">
            <label>Email</label>
            <input name="email" type="email" required>
          </div>
          <div class="field">
            <label>Phone</label>
            <input name="phone" required>
          </div>
          <div class="field">
            <label>I am a</label>
            <select name="role" required>
              <option value="">Select…</option>
              <option>Hospital / Health Network</option>
              <option>Diagnostic / Imaging Center</option>
              <option>Ministry / Public Health Agency</option>
              <option>NGO / Donor-Funded Program</option>
              <option>Health Insurer / Payer</option>
              <option>Vendor / Technology Partner</option>
              <option>Individual Leader (Investor Education)</option>
            </select>
          </div>
          <div class="field">
            <label>I’m interested in</label>
            <select name="interest" required>
              <option value="">Select…</option>
              <option>Engaging BTH for Medical Technology Services</option>
              <option>Becoming a 1:50 Medical Technology Team Leader</option>
              <option>Joining a 1:50 Medical Technology Team</option>
            </select>
          </div>
          <input type="hidden" name="industry" value="Medical Technology / Healthcare IT">
          <input type="hidden" name="source" value="Quick Apply • Medical Technology">
          <button class="btn" type="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</header>

<!-- Enterprise Trust Section -->
<section id="trust" class="section">
  <h2>Trusted by Leading Healthcare Organizations</h2>
  <p class="muted" style="max-width:900px;margin:0 auto;">
    Fortune 500 health systems, global hospital networks, ministries of health, and diagnostic chains rely on our 1:50 teams for mission-critical clinical technology operations.
  </p>
  <div class="trust-logos">
    <div class="trust-logo-item">Major Health Network</div>
    <div class="trust-logo-item">Global MedTech Corp</div>
    <div class="trust-logo-item">National Ministry of Health</div>
    <div class="trust-logo-item">Regional Hospital System</div>
    <div class="trust-logo-item">Diagnostic Services Group</div>
    <div class="trust-logo-item">Insurance Provider</div>
    <div class="trust-logo-item">Academic Medical Center</div>
    <div class="trust-logo-item">International NGO</div>
  </div>
  <div class="compliance-badges" style="margin-top:32px;">
    <div class="compliance-badge">
      <span class="check-icon">✓</span>
      <span>HIPAA Compliant</span>
    </div>
    <div class="compliance-badge">
      <span class="check-icon">✓</span>
      <span>ISO 13485 Certified</span>
    </div>
    <div class="compliance-badge">
      <span class="check-icon">✓</span>
      <span>ISO 27001 Aligned</span>
    </div>
    <div class="compliance-badge">
      <span class="check-icon">✓</span>
      <span>SOC 2 Type II</span>
    </div>
    <div class="compliance-badge">
      <span class="check-icon">✓</span>
      <span>HITRUST Certified</span>
    </div>
    <div class="compliance-badge">
      <span class="check-icon">✓</span>
      <span>ISO 15189:2022 Aligned</span>
    </div>
    <div class="compliance-badge">
      <span class="check-icon">✓</span>
      <span>EU IVDR Readiness</span>
    </div>
  </div>

  <!-- Key Metrics Cards -->
  <div class="grid" style="margin-top:32px;">
    <div class="card" style="text-align:center;padding:24px;">
      <div style="font-size:2rem;margin-bottom:8px;">🏥</div>
      <h3 style="color:var(--brand);margin:0 0 8px;">150+ Hospitals</h3>
      <p style="margin:0;color:var(--muted);font-size:0.9rem;">Powering clinical operations across 40+ countries</p>
    </div>
    <div class="card" style="text-align:center;padding:24px;">
      <div style="font-size:2rem;margin-bottom:8px;">📈</div>
      <h3 style="color:var(--brand);margin:0 0 8px;">99.7% Uptime</h3>
      <p style="margin:0;color:var(--muted);font-size:0.9rem;">Average EHR uptime across all managed clients</p>
    </div>
    <div class="card" style="text-align:center;padding:24px;">
      <div style="font-size:2rem;margin-bottom:8px;">✓</div>
      <h3 style="color:var(--brand);margin:0 0 8px;">ISO 13485</h3>
      <p style="margin:0;color:var(--muted);font-size:0.9rem;">Certified since 2019</p>
    </div>
  </div>
</section>

<section id="wins" class="section wins">
  <h2>Why this program wins</h2>
  <div class="grid">
    <div class="win-card">
      <h3>Job-Ready Clinical Teams</h3>
      <p>Hands-on rotations across EHR/LIS/PACS, biomedical QA, and telehealth support — not just theory. Every leader runs a real clinical technology portfolio.</p>
    </div>
    <div class="win-card">
      <h3>Commercial Model &amp; Residual Income</h3>
      <p>Work-study + managed services: your 1:50 pod delivers real contracts for hospitals, ministries, NGOs and payers, generating recurring income.</p>
    </div>
    <div class="win-card">
      <h3>Governed to Clinical Standards</h3>
      <p>Aligned with ISO 13485, AHIMA, ETA International, IHE and privacy frameworks. Built to pass audits and protect patients.</p>
    </div>
  </div>
</section>

<!-- Leadership Credibility Section -->
<section id="leadership" class="section">
  <h2>Led by Industry Veterans</h2>
  <p class="muted" style="max-width:800px;margin:0 auto 0;">
    Our Medical Technology practice is led by former Fortune 500 executives, clinical informaticists, and biomedical engineering leaders with decades of experience deploying enterprise healthcare solutions.
  </p>
  <div class="leadership-grid">
    <div class="leader-card">
      <div class="leader-avatar">DR</div>
      <h4 class="leader-name">Dr. Rachel Martinez</h4>
      <div class="leader-title">Chief Medical Informatics Officer</div>
      <p class="leader-bio">Former VP of Clinical Systems at a Fortune 100 health system. 22 years implementing Epic, Cerner, and Meditech across 50+ hospitals.</p>
    </div>
    <div class="leader-card">
      <div class="leader-avatar">JK</div>
      <h4 class="leader-name">James Kim, PE</h4>
      <div class="leader-title">VP Biomedical Engineering</div>
      <p class="leader-bio">Ex-Director of Clinical Engineering at GE HealthCare. Led global imaging systems deployment for 300+ sites across 40 countries.</p>
    </div>
    <div class="leader-card">
      <div class="leader-avatar">SP</div>
      <h4 class="leader-name">Sarah Patel, CPHIMS</h4>
      <div class="leader-title">Director, Healthcare IT</div>
      <p class="leader-bio">Former CIO of regional hospital network. 18 years in EHR optimization, interoperability, and HIMSS Stage 7 accreditation programs.</p>
    </div>
    <div class="leader-card">
      <div class="leader-avatar">MA</div>
      <h4 class="leader-name">Michael Anderson, MBA</h4>
      <div class="leader-title">Head of Revenue Cycle Excellence</div>
      <p class="leader-bio">Ex-VP Revenue Cycle at national health insurer. Recovered $250M+ in denied claims and built RCM optimization frameworks for 100+ hospitals.</p>
    </div>
  </div>
</section>

<section id="nav" class="section">
  <h2>Quick Navigation</h2>
  <div class="grid">
    <a class="card" href="#trust">Enterprise Trust</a>
    <a class="card" href="#leadership">Leadership Team</a>
    <a class="card" href="#value">What We Deliver</a>
    <a class="card" href="#delivery-portfolio">Delivery Portfolio (A–F)</a>
    <a class="card" href="#case-studies">Case Studies</a>
    <a class="card" href="#integration">System Integration</a>
    <a class="card" href="#compliance">Compliance & Security</a>
    <a class="card" href="#engagement">Enterprise Engagement</a>
    <a class="card" href="#roi-calc">ROI Calculator</a>
    <a class="card" href="#team">1:50 Team &amp; Roles</a>
    <a class="card" href="#commercials">Commercials &amp; ROI</a>
    <a class="card" href="#thought-leadership">Insights & Resources</a>
    <a class="card" href="#downloads">Procurement Materials</a>
    <a class="card" href="#pathways">Training &amp; Certification</a>
  <a class="card" href="#training-journey">Training Journey</a>
  <a class="card" href="#coverage-matrix">Coverage Matrix</a>
  <a class="card" href="#leader-track">Leader Track</a>
  <a class="card" href="#redundancy-policy">Redundancy &amp; Gating</a>
  <a class="card" href="#kpi-panel">Training KPIs</a>
    <a class="card" href="#ecosystem">Ecosystem &amp; Partners</a>
    <a class="card" href="#kpis">KPIs &amp; SLAs</a>
    <a class="card" href="#partner">Healthcare Partnership</a>
    <a class="card" href="#apply">Apply to Lead</a>
  </div>
</section>

<section id="value" class="section">
  <h2>What We Deliver — Clinical Uptime, Compliance &amp; Digital Health</h2>
  <div class="grid">
    <div class="card"><h3>EHR &amp; Clinical Apps</h3><p>Deployment, access governance, training, uptime &amp; optimization for core clinical platforms.</p></div>
    <div class="card"><h3>Telemedicine &amp; Virtual Care</h3><p>Virtual clinics, remote vitals, rural outreach programs and caregiver workflows.</p></div>
    <div class="card"><h3>PACS/VNA &amp; Imaging</h3><p>Archiving, routing, remote reads, dose management &amp; medico-legal audit trails.</p></div>
    <div class="card"><h3>LIS &amp; Diagnostics</h3><p>Lab workflow, quality, integration to EHR/billing, throughput and accreditation support.</p></div>
    <div class="card"><h3>Revenue &amp; Admin</h3><p>RCM, pharmacy, workforce, supply chain, patient engagement &amp; follow-up systems.</p></div>
    <div class="card"><h3>Data, Analytics &amp; AI</h3><p>Population health, outcomes, fraud detection, predictive planning &amp; reporting for funders.</p></div>
    <div class="card"><h3>Compliance &amp; BCP</h3><p>ISO 13485 QMS, privacy &amp; governance, DR/continuity drills, accreditation readiness.</p></div>
    <div class="card"><h3>Biomedical Ops</h3><p>Install, calibration, maintenance, asset lifecycle, uptime &amp; safety documentation.</p></div>
  </div>
</section>

<!-- Integration with Existing Infrastructure -->
<section id="integration" class="section">
  <h2>Works with Your Existing Stack</h2>
  <p class="muted" style="max-width:800px;margin:0 auto;">
    API-first architecture with pre-built connectors to 50+ EHR, LIS, PACS, RCM, and device vendors. Zero-downtime migration methodology. Full legacy system support.
  </p>
  <div class="grid" style="margin-top:24px;">
    <div class="card">
      <h3>🏥 EHR / EMR Platforms</h3>
      <div class="integration-grid">
        <div class="integration-item">Epic</div>
        <div class="integration-item">Oracle Health</div>
        <div class="integration-item">Meditech</div>
        <div class="integration-item">Allscripts</div>
        <div class="integration-item">athenahealth</div>
        <div class="integration-item">eClinicalWorks</div>
        <div class="integration-item">NextGen</div>
        <div class="integration-item">CPSI</div>
      </div>
    </div>
    <div class="card">
      <h3>🔬 Laboratory Systems</h3>
      <div class="integration-grid">
        <div class="integration-item">Sunquest</div>
        <div class="integration-item">Cerner PathNet</div>
        <div class="integration-item">SCC Soft</div>
        <div class="integration-item">Orchard</div>
        <div class="integration-item">EPIC Beaker</div>
        <div class="integration-item">Meditech LIS</div>
      </div>
    </div>
    <div class="card">
      <h3>📷 Imaging & PACS</h3>
      <div class="integration-grid">
        <div class="integration-item">GE Centricity</div>
        <div class="integration-item">Philips IntelliSpace</div>
        <div class="integration-item">Siemens syngo</div>
        <div class="integration-item">Fujifilm Synapse</div>
        <div class="integration-item">Hologic</div>
        <div class="integration-item">Sectra PACS</div>
      </div>
    </div>
    <div class="card">
      <h3>💰 Revenue Cycle</h3>
      <div class="integration-grid">
        <div class="integration-item">Change Healthcare</div>
        <div class="integration-item">Availity</div>
        <div class="integration-item">R1 RCM</div>
        <div class="integration-item">Waystar</div>
        <div class="integration-item">EPIC Resolute</div>
        <div class="integration-item">Cerner RevWorks</div>
      </div>
    </div>
  </div>
  <div style="text-align:center;margin-top:24px;">
    <p style="font-size:0.95rem;color:var(--brand);font-weight:600;">+ 30 more platforms via HL7, FHIR, and custom APIs</p>
  </div>
</section>

<!-- Healthcare Technology Delivery Portfolio -->
<section id="delivery-portfolio" class="section">
  <h2>Healthcare Technology Delivery Portfolio — What Your Team Delivers</h2>
  <p class="muted">
    This is the live services catalog your 1:50 team sells and delivers to hospitals, clinics,
    ministries, diagnostic labs, insurers, pharmacies, and donor-funded health programs.
    Every item below is a contract line.
  </p>

  <div class="accordion-block">

    <!-- PILLAR A -->
    <button class="accordion-button" aria-expanded="false">
      A. Clinical Systems &amp; Healthcare IT (HCIT)
    </button>
    <div class="accordion-content" data-accordion-content>
      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Electronic Health Record (EHR) deployment, optimization &amp; support</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> We deploy, configure, and optimize EHR platforms; manage user access; train clinical staff; and keep clinical data accurate and available.</p>
          <p><strong>Why hospitals pay:</strong> Better documentation, fewer errors, audit-ready records, and higher clinical productivity.</p>
          <p><strong>Engagement model:</strong> Managed EHR support, on-call assistance, and recurring optimization reviews.</p>
          <p><strong>Roles delivered:</strong> EHR Systems Specialist, Clinical Application Support Lead.</p>
        </div>
      </div>

      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Telehealth / telemedicine rollout for rural &amp; urban care</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Secure remote consultation channels, remote vitals capture, and patient follow-up workflows for clinics, ministries, NGOs.</p>
          <p><strong>Why ministries and NGOs pay:</strong> Extends care to underserved regions without building new physical sites.</p>
          <p><strong>Engagement model:</strong> Deployment projects + uptime SLAs + on-site training of local staff.</p>
          <p><strong>Roles delivered:</strong> Telehealth Deployment Engineer, Remote Care Coordinator.</p>
        </div>
      </div>

      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Population Health Management Systems</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Platforms that track chronic disease, vaccination, maternal health, and epidemiology across regions or provider networks.</p>
          <p><strong>Why executives pay:</strong> They need evidence for funding, strategy, and donor / ministry reporting.</p>
          <p><strong>Engagement model:</strong> Analytics build-out, dashboard support, data quality monitoring.</p>
          <p><strong>Roles delivered:</strong> Population Analytics Lead, Health Data Analyst.</p>
        </div>
      </div>

      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Clinical Decision Support Systems (CDSS)</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Point-of-care guidance for prescribers and clinicians (drug interaction alerts, dosage guards, treatment pathways).</p>
          <p><strong>Why hospitals pay:</strong> Reduces clinical risk and enforces standard-of-care quality.</p>
          <p><strong>Engagement model:</strong> Configuration, rules tuning, clinical workflow adoption, ongoing updates.</p>
          <p><strong>Roles delivered:</strong> Clinical Systems Integrator, Safety &amp; Compliance Analyst.</p>
        </div>
      </div>

      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Laboratory Information Systems (LIS)</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Digital workflow for specimen intake, tracking, test execution, result validation, and return of verified results to clinicians.</p>
          <p><strong>Why labs pay:</strong> Throughput goes up, traceability improves, accreditation becomes easier.</p>
          <p><strong>Engagement model:</strong> LIS implementation, EHR/LIS integration, lab staff training, ongoing uptime.</p>
          <p><strong>Roles delivered:</strong> Lab Systems Specialist, Diagnostic Workflow Engineer.</p>
        </div>
      </div>

      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">PACS &amp; VNA (medical imaging archiving, retrieval &amp; sharing)</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Picture Archiving and Communication Systems + Vendor Neutral Archives to store and route CT, MRI, ultrasound, and X-ray studies.</p>
          <p><strong>Why imaging centers pay:</strong> Faster reads, remote radiology, medico-legal traceability, continuity of records.</p>
          <p><strong>Engagement model:</strong> PACS/VNA deployment, image routing config, storage lifecycle management.</p>
          <p><strong>Roles delivered:</strong> Imaging Systems Specialist, Radiology Workflow Engineer.</p>
        </div>
      </div>

      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Radiology &amp; radiation dose management platforms</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Systems that track radiation exposure, link it to patients and devices, and surface compliance alerts.</p>
          <p><strong>Why regulators care:</strong> Patient safety, liability reduction, accreditation and audit protection.</p>
          <p><strong>Engagement model:</strong> Deployment, safety policy setup, dashboard reporting to compliance officers.</p>
          <p><strong>Roles delivered:</strong> Radiation Safety Technologist, Compliance Reporting Lead.</p>
        </div>
      </div>

      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Mobile health and remote patient monitoring solutions</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Home/field patient monitoring (chronic care, vitals, escalation alerts), feeding data back to clinical teams.</p>
          <p><strong>Why health networks pay:</strong> Lower readmissions, documented outcomes for grants/donors, better chronic patient retention.</p>
          <p><strong>Engagement model:</strong> Remote kit rollout, dashboard setup, caregiver training, ongoing support.</p>
          <p><strong>Roles delivered:</strong> Remote Care Coordinator, Patient Monitoring Specialist.</p>
        </div>
      </div>

      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Healthcare interoperability engines (HL7 / FHIR integration)</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> We connect EHR, LIS, pharmacy, billing, imaging, and more so data flows automatically and safely.</p>
          <p><strong>Why CIOs pay:</strong> Eliminates re-typing, reduces clinical error, enables analytics, satisfies ministry reporting pipelines.</p>
          <p><strong>Engagement model:</strong> Interface engine buildout, HL7/FHIR mapping, validation, change-control governance.</p>
          <p><strong>Roles delivered:</strong> Clinical Integration Analyst, Interoperability Engineer.</p>
        </div>
      </div>

      <div class="pillar-meta">
        <div class="why-line"><strong>Why this pillar matters:</strong> You become the external team that keeps the hospital’s clinical brain alive, connected, auditable, and reportable.</div>
        <div class="contract-line"><strong>Typical contract types:</strong> 24/7 managed EHR support · Telehealth rollout project · National health analytics / reporting programs.</div>
        <div class="roles-line"><strong>Core roles in this pillar:</strong> EHR Systems Specialist · Telehealth Deployment Engineer · Clinical Integration Analyst · Population Analytics Lead.</div>
      </div>
    </div>

    <!-- PILLAR B -->
    <button class="accordion-button" aria-expanded="false">
      B. Revenue Cycle, Admin &amp; Operational Systems
    </button>
    <div class="accordion-content" data-accordion-content>
      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Revenue Cycle Management (front / mid / back-end RCM)</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Patient registration, coding, billing, claims submission, denial management, and collections workflows.</p>
          <p><strong>Why finance directors pay:</strong> Faster reimbursement, fewer claim denials, predictable cashflow.</p>
          <p><strong>Engagement model:</strong> Process audit → system configuration → monthly performance review and recovery reporting.</p>
          <p><strong>Roles delivered:</strong> RCM Analyst, Coding &amp; Billing Optimization Lead, Claims Recovery Specialist.</p>
        </div>
      </div>

      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Pharmacy Information Systems &amp; audit / analysis</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Digital control of dispensing, stock, expiry, controlled substances, and billing integration.</p>
          <p><strong>Why pharmacies pay:</strong> Shrinkage control, formulary enforcement, compliance traceability for audits.</p>
          <p><strong>Engagement model:</strong> Setup, user training, monthly compliance / variance reporting.</p>
          <p><strong>Roles delivered:</strong> Pharmacy Informatics Specialist, Medication Audit Analyst.</p>
        </div>
      </div>

      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Supply Chain &amp; Inventory Management Systems</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Track devices, consumables, implants, reagents, and medication stock across departments and satellites.</p>
          <p><strong>Why operations teams pay:</strong> Cuts waste, prevents stock-out, supports regulatory traceability.</p>
          <p><strong>Engagement model:</strong> System rollout + barcoding / labeling + recurring inventory audits.</p>
          <p><strong>Roles delivered:</strong> Clinical Supply Chain Technologist, Hospital Asset Controller.</p>
        </div>
      </div>

      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Workforce Management &amp; Shift Allocation Systems</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Digital scheduling, shift compliance, overtime control, qualified coverage by care level.</p>
          <p><strong>Why leadership pays:</strong> Predictable staffing, reduced burnout claims, auditable coverage for accreditation.</p>
          <p><strong>Engagement model:</strong> Needs assessment → roster automation rollout → monthly optimization.</p>
          <p><strong>Roles delivered:</strong> Clinical Operations Technologist, Workforce Allocation Analyst.</p>
        </div>
      </div>

      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Patient CRM / Engagement &amp; Follow-up Systems</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Patient messaging, reminders, follow-up tracking, loyalty programs, post-discharge engagement.</p>
          <p><strong>Why executives pay:</strong> Retention ↑, recall for chronic programs, documented outcomes for funders.</p>
          <p><strong>Engagement model:</strong> CRM deployment, scripting workflows, engagement analytics.</p>
          <p><strong>Roles delivered:</strong> Patient Experience Systems Lead, Outcomes Tracking Analyst.</p>
        </div>
      </div>

      <div class="pillar-meta">
        <div class="why-line"><strong>Why this pillar matters:</strong> You protect and grow hospital cashflow. Work done = money received.</div>
        <div class="contract-line"><strong>Typical contracts:</strong> RCM optimization retainer · Pharmacy compliance &amp; audit service · Outsourced scheduling ops.</div>
        <div class="roles-line"><strong>Core roles:</strong> RCM Analyst · Pharmacy Informatics Specialist · Clinical Supply Chain Technologist · Workforce Allocation Analyst.</div>
      </div>
    </div>

    <!-- PILLAR C -->
    <button class="accordion-button" aria-expanded="false">
      C. Biomedical Engineering &amp; Clinical Equipment Operations
    </button>
    <div class="accordion-content" data-accordion-content>
      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Biomedical device installation, preventative maintenance &amp; calibration</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Install, configure, test, and calibrate biomedical / life-support equipment with safety logs. Includes validation & conformity support for <strong>ISO 15189:2022</strong> laboratory competence (risk-based QMS, POCT integration) and user quality-control procedure verification (manufacturer method adaptation, traceability, equipment qualification).</p>
          <p><strong>Why hospitals pay:</strong> Duty of care. Accreditation and liability require documented uptime &amp; safety.</p>
          <p><strong>Engagement model:</strong> Maintenance SLAs (monthly / quarterly), emergency response options.</p>
          <p><strong>Roles delivered:</strong> Biomedical Field Engineer, Clinical Equipment Uptime Lead.</p>
        </div>
      </div>

      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Medical Imaging Systems Support (CT, MRI, Ultrasound, X-ray)</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Uptime, calibration, QA documentation, and first-line troubleshooting for modalities and viewers.</p>
          <p><strong>Why imaging centers pay:</strong> Downtime = lost revenue; compliance demands performance logs.</p>
          <p><strong>Engagement model:</strong> Monthly/quarterly uptime contracts tied to SLAs.</p>
          <p><strong>Roles delivered:</strong> Imaging Systems Specialist, Radiology Workflow Engineer.</p>
        </div>
      </div>

      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Lifecycle asset tracking &amp; audit trail for clinical devices</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Registry of ownership, maintenance history, safety incidents, calibration dates, location.</p>
          <p><strong>Why administrators pay:</strong> Proof for compliance and insurance defensibility; budget predictability.</p>
          <p><strong>Engagement model:</strong> System setup + recurring audit service + executive compliance reporting.</p>
          <p><strong>Roles delivered:</strong> Clinical Asset Controller, Compliance Reporting Lead.</p>
        </div>
      </div>

      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">ETA International Biomedical Certification Path (CET → BMD → BIET)</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Align technicians to globally recognized biomedical electronics certifications.</p>
          <p><strong>Why hospitals pay:</strong> Audited technicians with verifiable credentials; no “unpapered fixes.”</p>
          <p><strong>Engagement model:</strong> Workforce certification program + on-site coverage contracts.</p>
          <p><strong>Roles delivered:</strong> CET / BMD / BIET technicians; Imaging Equipment Technician.</p>
        </div>
      </div>

      <div class="pillar-meta">
        <div class="why-line"><strong>Why this pillar matters:</strong> This is safety and uptime. A ventilator cannot fail — and proof must exist.</div>
        <div class="contract-line"><strong>Typical contracts:</strong> Clinical equipment uptime SLA · Imaging support retainer · Compliance / audit trail management.</div>
        <div class="roles-line"><strong>Core roles:</strong> Biomedical Field Engineer · Imaging Systems Specialist · Clinical Asset Controller.</div>
      </div>
    </div>

    <!-- PILLAR D -->
    <button class="accordion-button" aria-expanded="false">
      D. Healthcare Data, Analytics &amp; AI
    </button>
    <div class="accordion-content" data-accordion-content>
      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Clinical outcomes &amp; quality analytics</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Outcomes scorecards: readmission risk, infection trends, protocol adherence.</p>
          <p><strong>Why executives pay:</strong> Evidence for boards, ministries, accreditation, and funders.</p>
          <p><strong>Engagement model:</strong> KPI definition → dashboard build → monthly executive review.</p>
          <p><strong>Roles delivered:</strong> Clinical Quality Analyst, Outcomes Data Lead.</p>
        </div>
      </div>

      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Operational &amp; throughput analytics (wait time, bed usage, bottlenecks)</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Flow, capacity utilization, care delays, equipment idle-time analytics.</p>
          <p><strong>Why COOs pay:</strong> Faster movement = higher revenue and regulatory satisfaction.</p>
          <p><strong>Engagement model:</strong> Data pulls from EHR/LIS → dashboard rollout → ops performance sessions.</p>
          <p><strong>Roles delivered:</strong> Operations Analytics Lead, Patient Flow Analyst.</p>
        </div>
      </div>

      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Financial analytics &amp; fraud detection (claims, reimbursements, payers)</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Analyze claims patterns/reimbursement behavior for fraud, leakage, anomalies.</p>
          <p><strong>Why payers pay:</strong> Fraud control &amp; leakage reduction protect cashflow and reputation.</p>
          <p><strong>Engagement model:</strong> Claims data integration → alerting dashboards → quarterly fraud/risk review.</p>
          <p><strong>Roles delivered:</strong> Claims Integrity Analyst, Health Finance Data Specialist.</p>
        </div>
      </div>

      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Disease surveillance &amp; public health reporting (ministry / NGO)</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Population dashboards for outbreaks, maternal health, vaccine coverage, rural access.</p>
          <p><strong>Why ministries &amp; donors pay:</strong> Hard numbers unlock funding, justify policy, and report impact.</p>
          <p><strong>Engagement model:</strong> National/regional data aggregation → visualization → executive briefings.</p>
          <p><strong>Roles delivered:</strong> Population Analytics Lead, Public Health Data Reporting Specialist.</p>
        </div>
      </div>

      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Predictive analytics &amp; AI-assisted forecasting</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Forecast staffing needs, drug consumption, readmission probability, fraud flags.</p>
          <p><strong>Why leadership pays:</strong> Proactive planning and cost control vs. reactive firefighting.</p>
          <p><strong>Engagement model:</strong> Model deployment + CIO/COO advisory + ongoing tuning.</p>
          <p><strong>Roles delivered:</strong> Healthcare AI Analyst, Forecasting &amp; Risk Stratification Lead.</p>
        </div>
      </div>

      <div class="pillar-meta">
        <div class="why-line"><strong>Why this pillar matters:</strong> You turn hospital operations into measurable, optimizable, fundable performance.</div>
        <div class="contract-line"><strong>Typical contracts:</strong> Executive dashboard service · Public health surveillance program · Fraud analytics retainer.</div>
        <div class="roles-line"><strong>Core roles:</strong> Clinical Quality Analyst · Claims Integrity Analyst · Healthcare AI Analyst.</div>
      </div>
    </div>

    <!-- PILLAR E -->
    <button class="accordion-button" aria-expanded="false">
      E. Compliance, Governance &amp; Clinical Security
    </button>
    <div class="accordion-content" data-accordion-content>
      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">ISO 13485 Quality Management Systems for medical devices</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Build and maintain documented quality systems for handling, servicing, and tracking clinical devices.</p>
          <p><strong>Why leadership pays:</strong> Without this, accreditation and funding are at risk.</p>
          <p><strong>Engagement model:</strong> QMS buildout + SOP writing + ongoing audit prep / internal rehearsal.</p>
          <p><strong>Roles delivered:</strong> Clinical Quality &amp; Compliance Lead, Device Governance Officer.</p>
        </div>
      </div>

      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Health data governance &amp; privacy (AHIMA, IAPP, ISO 27001)</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Policies, access control, audit trails, breach response plans, retention standards.</p>
          <p><strong>Why compliance pays:</strong> Legal exposure and penalties are existential threats.</p>
          <p><strong>Engagement model:</strong> Policy creation, access matrix design, audit procedure buildout, readiness drills.</p>
          <p><strong>Roles delivered:</strong> Health Data Privacy Officer, Information Governance Analyst.</p>
        </div>
      </div>

      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Clinical continuity &amp; disaster recovery planning</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Recovery runbooks for EHR downtime, imaging outages, network loss, ransomware.</p>
          <p><strong>Why hospitals pay:</strong> Lost operations = patient risk + regulatory exposure + revenue stop.</p>
          <p><strong>Engagement model:</strong> Risk assessment → DR/BCP document set → drills &amp; after-action reviews.</p>
          <p><strong>Roles delivered:</strong> Clinical Continuity Lead, Incident Response Coordinator (Healthcare SOC-aware).</p>
        </div>
      </div>

      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Regulatory readiness &amp; accreditation reporting</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Documentation, metric packs, and evidence for ministries, accreditation bodies, payers, donors.</p>
          <p><strong>Why boards pay:</strong> Passing accreditation = license to operate and access funding.</p>
          <p><strong>Engagement model:</strong> Gap analysis → remediation plan → executive briefing packs.</p>
          <p><strong>Roles delivered:</strong> Accreditation Readiness Officer, Compliance Reporting Specialist.</p>
        </div>
      </div>

      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">ISO 15189:2022 Accreditation &amp; IVDR Readiness Support</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Laboratory QMS setup and competence documentation aligned with <strong>ISO 15189:2022</strong> (risk-based, POCT-inclusive), plus <strong>EU IVDR</strong> readiness (technical documentation, performance evaluation, PMS/vigilance).</p>
          <p><strong>Why hospitals pay:</strong> Accreditation readiness to the latest standard, fewer audit findings, clear POCT governance, and diagnostic regulatory compliance for EU markets.</p>
          <p><strong>Engagement model:</strong> Gap analysis → risk-based QMS build → method verification &amp; user QC validation → POCT inclusion → CAPA &amp; internal audits → accreditation/IVDR audit rehearsal.</p>
          <p><strong>Roles delivered:</strong> Biomedical QA Engineer, ISO Compliance Specialist, Laboratory Systems Technologist, Regulatory Affairs Coordinator.</p>
        </div>
      </div>

      <div class="pillar-meta">
        <div class="why-line"><strong>Why this pillar matters:</strong> You make the hospital/ministry “pass inspection” — legally, clinically, financially.</div>
        <div class="contract-line"><strong>Typical contracts:</strong> ISO 13485 QMS program · Data governance &amp; privacy office build · Accreditation readiness engagement.</div>
        <div class="roles-line"><strong>Core roles:</strong> Clinical Quality &amp; Compliance Lead · Health Data Privacy Officer · Accreditation Readiness Officer.</div>
      </div>
    </div>

    <!-- PILLAR F -->
    <button class="accordion-button" aria-expanded="false">
      F. Life Sciences, R&amp;D &amp; Clinical Trials Technology
    </button>
    <div class="accordion-content" data-accordion-content>
      <!-- Service 1: Clinical Trials Platforms (CTMS / EDC / ePRO) -->
      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Clinical trials platforms (CTMS, EDC, ePRO/eCOA)</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Design, deploy, and operate clinical trial management systems (CTMS), electronic data capture (EDC) platforms, and ePRO/eCOA solutions for Phase I–IV studies.</p>
          <p><strong>Why sponsors &amp; CROs pay:</strong> Faster study start-up, cleaner data, fewer protocol deviations, and inspection-ready trial records for regulators and partners.</p>
          <p><strong>Engagement model:</strong> Study-by-study deployments, global template rollouts, and multi-year managed operations across portfolios of trials.</p>
          <p><strong>Roles delivered:</strong> Clinical Systems Lead, CTMS/EDC Configuration Specialist, Clinical Data Manager, Trial Operations Technologist.</p>
        </div>
      </div>

      <!-- Service 2: R&amp;D Lab Systems, LIMS &amp; ELN Automation -->
      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">R&amp;D lab systems, LIMS &amp; ELN automation</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Implement and integrate laboratory information management systems (LIMS), electronic lab notebooks (ELN), and instrument connectivity across discovery, pre-clinical, and translational research labs.</p>
          <p><strong>Why R&amp;D leaders pay:</strong> Standardized workflows, traceable experiments, and compliant sample / reagent / assay tracking that can scale across multiple sites and programs.</p>
          <p><strong>Engagement model:</strong> Lab process mapping → LIMS/ELN selection &amp; configuration → instrument integration → ongoing support and enhancement cycles.</p>
          <p><strong>Roles delivered:</strong> Lab Informatics Engineer, LIMS/ELN Administrator, R&amp;D Workflow Analyst, Instrument Integration Specialist.</p>
        </div>
      </div>

      <!-- Service 3: Pharmacovigilance &amp; Safety Analytics -->
      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Pharmacovigilance &amp; safety signal analytics</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Systems and analytics pipelines for adverse event (AE/SAE) intake, coding, signal detection, medical review, and regulatory safety reporting.</p>
          <p><strong>Why safety &amp; medical affairs pay:</strong> Proactive risk detection, faster case processing, and inspection-ready safety documentation for global authorities.</p>
          <p><strong>Engagement model:</strong> PV platform setup, workflow optimization, safety dashboards, and managed analytics services for marketed and investigational products.</p>
          <p><strong>Roles delivered:</strong> Pharmacovigilance Systems Specialist, Drug Safety Data Analyst, Signal Detection Lead, Medical Affairs Analytics Technologist.</p>
        </div>
      </div>

      <!-- Service 4: Real-World Evidence &amp; Outcomes for Life Sciences -->
      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Real-world evidence (RWE) &amp; outcomes analytics for life sciences</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Data platforms that combine claims, EHR, registry, and patient-reported data to generate comparative effectiveness, utilization, and outcomes evidence.</p>
          <p><strong>Why pharma &amp; biotech pay:</strong> Evidence that supports market access, pricing &amp; reimbursement decisions, label expansion, and publication strategies.</p>
          <p><strong>Engagement model:</strong> RWE data platform build-out, analytics model development, RWE study support, and recurring evidence-generation programs.</p>
          <p><strong>Roles delivered:</strong> Life Sciences Data Engineer, RWE Analytics Lead, Outcomes Research Technologist, Health Economics &amp; Outcomes Data Analyst.</p>
        </div>
      </div>

      <!-- Service 5: Regulatory Data &amp; Submission Readiness -->
      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Regulatory data management &amp; submission readiness (FDA/EMA &amp; beyond)</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Data structures, document management, metadata, and traceability to support eCTD submissions, IDMP, and other regulatory data standards.</p>
          <p><strong>Why regulatory &amp; quality pay:</strong> Lower submission risk, faster response to agency queries, and harmonized data across global markets.</p>
          <p><strong>Engagement model:</strong> Regulatory data architecture, submission data preparation, validation routines, and ongoing post-approval change support.</p>
          <p><strong>Roles delivered:</strong> Regulatory Data Lead, Submission Data Specialist, Quality &amp; Compliance Data Manager.</p>
        </div>
      </div>

      <!-- Service 6: Genomics, Bioinformatics &amp; Advanced Life Science Analytics -->
      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Genomics, bioinformatics &amp; advanced life science analytics</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Pipelines and platforms for sequencing data (NGS), multi-omics analysis, biomarker discovery, and companion diagnostics development.</p>
          <p><strong>Why research &amp; translational teams pay:</strong> Reusable, validated pipelines that accelerate discovery and reduce the time from data generation to insight.</p>
          <p><strong>Engagement model:</strong> Platform setup, cloud-based pipelines, workflow containerization, and collaborative workspaces for multi-site research teams.</p>
          <p><strong>Roles delivered:</strong> Bioinformatics Engineer, Genomics Data Scientist, Translational Analytics Lead, Computational Biology Technologist.</p>
        </div>
      </div>

      <!-- Pillar F Meta -->
      <div class="pillar-meta">
        <div class="why-line">
          <strong>Why this pillar matters:</strong>
          You extend beyond hospitals into pharma, biotech, CROs, and research institutes — enabling the full life sciences value chain from discovery to post-market safety.
        </div>
        <div class="contract-line">
          <strong>Typical contract types:</strong>
          Multi-study CTMS/EDC operations · R&amp;D lab informatics rollout · Pharmacovigilance analytics retainer · RWE &amp; outcomes evidence programs · Regulatory data and submission readiness engagements.
        </div>
        <div class="roles-line">
          <strong>Core roles in this pillar:</strong>
          Clinical Data Manager · Lab Informatics Engineer · Pharmacovigilance Systems Specialist · Life Sciences Data Engineer · Bioinformatics / Genomics Analyst · Regulatory Data Lead.
        </div>
      </div>
    </div>

  </div>
</section>

<section id="team" class="section">
  <h2>1:50 Medical Technology Team — Roles &amp; Structure</h2>
  <p>Your pod is built to mirror real hospital functions. One certified leader orchestrates five practice lanes that can serve multiple organizations in parallel.</p>
  <div class="grid">
    <div class="card">
      <h3>Leadership &amp; Governance</h3>
      <ul>
        <li>Medical Technology Team Leader (1 of 100 globally per industry)</li>
        <li>Program/Project Manager (healthcare delivery)</li>
        <li>Clinical Governance &amp; Quality Coordinator</li>
      </ul>
      <p class="muted"><strong>Owns:</strong> SLAs, contracts, CAB/change, executive reporting, risk register.</p>
    </div>
    <div class="card">
      <h3>Clinical Systems &amp; HCIT Pod</h3>
      <ul>
        <li>EHR / HIS / EMR Specialists</li>
        <li>Clinical Application Support Analysts</li>
        <li>Telehealth Deployment Engineers</li>
        <li>Interoperability &amp; Interface Analysts (HL7/FHIR)</li>
      </ul>
      <p class="muted"><strong>Owns:</strong> clinical apps uptime, user support, workflow optimization, integrations.</p>
    </div>
    <div class="card">
      <h3>Biomedical &amp; Imaging Pod</h3>
      <ul>
        <li>Biomedical Electronics Technicians (CET/BMD/BIET)</li>
        <li>Imaging Systems Technologists (CT/MRI/US/X-ray)</li>
        <li>Clinical Asset &amp; Lifecycle Controllers</li>
      </ul>
      <p class="muted"><strong>Owns:</strong> device install, calibration, QA, safety logs, uptime &amp; audits.</p>
    </div>
    <div class="card">
      <h3>RCM, Pharmacy &amp; Operations Pod</h3>
      <ul>
        <li>RCM Analysts &amp; Coding Specialists</li>
        <li>Pharmacy Informatics &amp; Medication Audit Analysts</li>
        <li>Supply Chain &amp; Workforce Systems Technologists</li>
      </ul>
      <p class="muted"><strong>Owns:</strong> revenue capture, stock &amp; formulary control, staffing systems.</p>
    </div>
    <div class="card">
      <h3>Data, Analytics &amp; Compliance Pod</h3>
      <ul>
        <li>Clinical Quality &amp; Outcomes Analysts</li>
        <li>Public Health / Population Analytics Specialists</li>
        <li>Health Data Privacy &amp; Governance Officers</li>
        <li>Accreditation &amp; Regulatory Readiness Coordinators</li>
        <li>Biomedical QA Engineers</li>
        <li>ISO Compliance Specialists</li>
        <li>Laboratory Systems Technologists</li>
        <li>Regulatory Affairs Coordinators</li>
      </ul>
      <p class="muted"><strong>Owns:</strong> dashboards, evidence packs, accreditation prep, DR/BCP drills.</p>
    </div>
  </div>
</section>

<section id="commercials" class="section">
  <h2>Commercials — Pods &amp; Leader ROI</h2>
  <p class="muted">
    Commercials are aligned to the 1:50 leadership model and multi-contract scenarios: each pod delivers measurable value to hospitals,
    ministries, NGOs and payers, while leaders build long-term residual income.
  </p>
  <div class="grid">
    <div class="card">
      <h3>Managed Clinical Technology Services</h3>
      <p>Hospitals, ministries, and NGOs engage your 1:50 pod on multi-year managed services: EHR support, device uptime, telemedicine operations, analytics and compliance.</p>
      <p class="muted"><strong>Revenue model:</strong> Monthly retainers + project-based rollouts + outcome-based incentives.</p>
    </div>
    <div class="card">
      <h3>Multi-Organization Coverage</h3>
      <p>Because your pod is structured by function, it can serve multiple organizations and regions at once: primary care networks, diagnostic chains, private hospitals, and payers.</p>
      <p class="muted"><strong>Scale:</strong> A single leader portfolio can support several large clients in parallel.</p>
    </div>
    <div class="card">
      <h3>Leader ROI (Narrative)</h3>
      <p>As a Medical Technology Team Leader you build a 1:50 pod and earn:</p>
      <ul>
        <li><strong>≈ 650 USD/month</strong> active leadership income for 5 years</li>
        <li><strong>44,321 USD</strong> – structured team-building commissions</li>
        <li><strong>Up to 2,127,372+ USD/year</strong> potential residual income from mature multi-site managed contracts</li>
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
          <td>Clinical Systems</td>
          <td>80–120</td>
          <td>$55k–$95k</td>
          <td>EHR, telemedicine, integrations</td>
        </tr>
        <tr>
          <td>Biomedical</td>
          <td>70–110</td>
          <td>$50k–$85k</td>
          <td>Install, calibration, QA, imaging</td>
        </tr>
        <tr>
          <td>Admin / RCM</td>
          <td>90–130</td>
          <td>$60k–$100k</td>
          <td>RCM, pharmacy, workforce, SCM</td>
        </tr>
        <tr>
          <td>Data &amp; AI</td>
          <td>90–130</td>
          <td>$65k–$105k</td>
          <td>Population health, outcomes, fraud</td>
        </tr>
      </tbody>
    </table>
    <p class="table-note">Rates vary by geography, compliance requirements and SLA severity. Final commercials are agreed per contract.</p>
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
      </tbody>
    </table>
    <p class="table-note">Aligned to the 1:50 leadership model and multi-contract scenarios. Actual numbers vary by region and contract mix.</p>
  </div>
</section>

<section id="how-it-works" class="section">
  <h2>How the Medical Technology Investor Program Works</h2>
  <div class="grid four">
    <div class="card">
      <h3>1. Train</h3>
      <p>You complete structured expert tracks in biomedical systems, Healthcare IT (HCIT), telemedicine delivery, data governance, compliance, and service operations management.</p>
    </div>
    <div class="card">
      <h3>2. Build</h3>
      <p>You recruit and mentor a <strong>1:50 medical technology team</strong> — biomedical technicians, EHR support specialists, telemedicine deployment engineers, revenue cycle analysts, compliance &amp; quality officers.</p>
    </div>
    <div class="card">
      <h3>3. Deploy</h3>
      <p>Your team delivers ongoing services to hospitals, diagnostic centers, ministries, payers, NGOs, and health startups: device uptime, EHR support, telemedicine rollouts, data analytics, regulatory readiness.</p>
    </div>
    <div class="card">
      <h3>4. Earn</h3>
      <p>You earn leadership compensation (<strong>≈ 650 USD/month for 5 years</strong>, plus performance commissions) and scale recurring managed-service contracts that can reach <strong>2,127,372+ USD/year per leader portfolio</strong>. Only <strong>100 Medical Technology Team Leaders</strong> are appointed.</p>
    </div>
  </div>
</section>

<section id="pathways" class="section">
  <h2>Training &amp; Certification Pathways</h2>
  <div id="iso15189-training"></div>
  <!-- Internal Navigation for Training Journey -->
  <nav class="sub-nav" style="display:flex;flex-wrap:wrap;gap:8px;justify-content:center;margin:0 0 24px;">
    <a href="#training-journey" class="badge" style="text-decoration:none;">Journey Phases</a>
    <a href="#coverage-matrix" class="badge" style="text-decoration:none;">Coverage Matrix</a>
    <a href="#leader-track" class="badge" style="text-decoration:none;">Leader Track</a>
    <a href="#redundancy-policy" class="badge" style="text-decoration:none;">Redundancy &amp; Gating</a>
    <a href="#kpi-panel" class="badge" style="text-decoration:none;">Training KPIs</a>
  </nav>
  <p class="muted" style="max-width: 900px; margin: 0 auto 32px;">
    Each 1:50 team is built on rigorous certification tracks across biomedical, HCIT, analytics, compliance, and life sciences.
    Below are <strong>247 industry-leading certifications</strong> mapped to Pillars A–F. Filter by domain, vendor, or specialty to explore the complete ecosystem.
  </p>

  <!-- Pillar Navigation Tabs -->
  <div class="cert-pillar-tabs">
    <button class="cert-tab active" data-pillar="all">All Pillars</button>
    <button class="cert-tab" data-pillar="pillar-a">A. HCIT</button>
    <button class="cert-tab" data-pillar="pillar-b">B. Revenue</button>
    <button class="cert-tab" data-pillar="pillar-c">C. Biomedical</button>
    <button class="cert-tab" data-pillar="pillar-d">D. Data & AI</button>
    <button class="cert-tab" data-pillar="pillar-e">E. Compliance</button>
    <button class="cert-tab" data-pillar="pillar-f">F. Life Sciences</button>
  </div>

  <!-- Category Filters -->
  <div class="cert-filters">
    <button class="cert-filter-btn active" data-category="all">All Categories</button>
    <button class="cert-filter-btn" data-category="foundations">📋 Foundations</button>
    <button class="cert-filter-btn" data-category="vendor">🏢 Vendor Platforms</button>
    <button class="cert-filter-btn" data-category="cloud">☁️ Cloud & Tech</button>
    <button class="cert-filter-btn" data-category="specialty">⭐ Specialty & AI</button>
  </div>

  <!-- Search Bar -->
  <div class="cert-search-container">
    <input type="text" id="certSearch" placeholder="Search certifications (e.g., Epic, LIMS, Genomics)..." />
    <span class="cert-count"><span id="certCount">247</span> certifications</span>
  </div>

  <!-- Certification Grid -->
  <div id="certificationGrid" class="cert-grid">
    <!-- Content populated by JavaScript -->
  </div>

  <!-- Pagination Controls -->
  <div class="cert-pagination">
    <button id="prevPage" class="cert-page-btn" disabled>← Previous</button>
    <div class="cert-page-info">
      Page <span id="currentPage">1</span> of <span id="totalPages">1</span>
    </div>
    <button id="nextPage" class="cert-page-btn">Next →</button>
  </div>

  <div id="clsi-method-eval"></div>

  <!-- Summary Stats -->
  <div class="cert-summary">
    <div class="cert-stat">
      <div class="cert-stat-value">247</div>
      <div class="cert-stat-label">Total Certification Tracks</div>
    </div>
    <div class="cert-stat">
      <div class="cert-stat-value">6</div>
      <div class="cert-stat-label">Service Pillars (A–F)</div>
    </div>
    <div class="cert-stat">
      <div class="cert-stat-value">18-24</div>
      <div class="cert-stat-label">Months to Full Stack</div>
    </div>
    <div class="cert-stat">
      <div class="cert-stat-value">50+</div>
      <div class="cert-stat-label">Vendor Ecosystems</div>
    </div>
  </div>
</section>

<!-- Training Journey & Workforce Maturation -->
<section id="training-journey" class="section">
  <h2>Training Journey &amp; Workforce Maturation (0–18 Months)</h2>
  <p class="muted" style="max-width:900px;margin:0 auto 24px;">A structured, phased curriculum takes each 1:50 pod from multi-domain foundations to full accreditation &amp; advanced specialization. Each phase produces measurable artifacts and certification attainment.</p>
  <div class="journey-timeline" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(160px,1fr));gap:16px;margin-bottom:32px;">
    <div class="card" style="position:relative;">
      <h3 style="font-size:1rem;margin:0 0 4px;">Phase 0</h3>
      <p style="margin:0;font-size:0.8rem;">Screening &amp; Readiness</p>
      <ul style="margin:8px 0 0;font-size:0.7rem;line-height:1.3;">
        <li>Aptitude &amp; sector baseline</li>
        <li>Safety &amp; change control</li>
      </ul>
      <div style="font-size:0.65rem;color:#64748b;margin-top:6px;">Weeks 0–2</div>
    </div>
    <div class="card">
      <h3 style="font-size:1rem;margin:0 0 4px;">Phase 1</h3>
      <p style="margin:0;font-size:0.8rem;">Foundations</p>
      <ul style="margin:8px 0 0;font-size:0.7rem;line-height:1.3;">
        <li>HL7 / FHIR basics</li>
        <li>Biomedical technician core (ETA / AAMI)</li>
        <li>RCM &amp; coding intro (CRCS/CPC)</li>
        <li>Analytics fundamentals</li>
        <li>ICH-GCP / trial basics</li>
      </ul>
      <div style="font-size:0.65rem;color:#64748b;margin-top:6px;">Months 0–2</div>
    </div>
    <div class="card">
      <h3 style="font-size:1rem;margin:0 0 4px;">Phase 2</h3>
      <p style="margin:0;font-size:0.8rem;">Pillar Core Tracks</p>
      <ul style="margin:8px 0 0;font-size:0.7rem;line-height:1.3;">
        <li>EHR + interfaces</li>
        <li>Imaging service stack</li>
        <li>RCM platform &amp; pharmacy</li>
        <li>Quality analytics &amp; privacy</li>
        <li>CTMS / EDC / LIMS</li>
      </ul>
      <div style="font-size:0.65rem;color:#64748b;margin-top:6px;">Months 2–6</div>
    </div>
    <div class="card">
      <h3 style="font-size:1rem;margin:0 0 4px;">Phase 3</h3>
      <p style="margin:0;font-size:0.8rem;">Cross-Pillar Integration</p>
      <ul style="margin:8px 0 0;font-size:0.7rem;line-height:1.3;">
        <li>Unified audit pack</li>
        <li>Interface + device data</li>
        <li>POCT governance inclusion</li>
      </ul>
      <div style="font-size:0.65rem;color:#64748b;margin-top:6px;">Months 6–9</div>
    </div>
    <div class="card">
      <h3 style="font-size:1rem;margin:0 0 4px;">Phase 4</h3>
      <p style="margin:0;font-size:0.8rem;">Specialization</p>
      <ul style="margin:8px 0 0;font-size:0.7rem;line-height:1.3;">
        <li>Epic Resolute / Cogito</li>
        <li>Siemens MRI / GE CT</li>
        <li>Signal detection (PV)</li>
        <li>Bioinformatics / sequencing</li>
      </ul>
      <div style="font-size:0.65rem;color:#64748b;margin-top:6px;">Months 9–12</div>
    </div>
    <div class="card">
      <h3 style="font-size:1rem;margin:0 0 4px;">Phase 5</h3>
      <p style="margin:0;font-size:0.8rem;">Compliance &amp; Accreditation</p>
      <ul style="margin:8px 0 0;font-size:0.7rem;line-height:1.3;">
        <li>ISO 15189:2022 training</li>
        <li>CLSI method evaluation</li>
        <li>IVDR readiness</li>
        <li>CAP 15189 advisory</li>
      </ul>
      <div style="font-size:0.65rem;color:#64748b;margin-top:6px;">Months 12–15</div>
    </div>
    <div class="card">
      <h3 style="font-size:1rem;margin:0 0 4px;">Phase 6</h3>
      <p style="margin:0;font-size:0.8rem;">Continuous Improvement</p>
      <ul style="margin:8px 0 0;font-size:0.7rem;line-height:1.3;">
        <li>Quarterly proficiency tests</li>
        <li>BCP / DR rehearsal</li>
        <li>PV signal refresh</li>
        <li>Redundancy audit</li>
      </ul>
      <div style="font-size:0.65rem;color:#64748b;margin-top:6px;">Months 15–18+</div>
    </div>
  </div>
  <div class="grid">
    <div class="card">
      <h3>Artifacts Per Phase</h3>
      <ul style="font-size:0.85rem;">
        <li><strong>Foundations:</strong> Baseline skills log, safety induction record.</li>
        <li><strong>Core Tracks:</strong> Platform configs, calibration logs, coding QA samples.</li>
        <li><strong>Integration:</strong> Unified audit evidence pack v1, cross-pillar handoff SOPs.</li>
        <li><strong>Specialization:</strong> Advanced cert proofs, performance benchmark reports.</li>
        <li><strong>Accreditation:</strong> Risk-based QMS, method verification dossiers, IVDR technical file sections.</li>
        <li><strong>Continuous:</strong> KPI dashboards, proficiency &amp; drill results, redundancy matrix.</li>
      </ul>
    </div>
    <div class="card">
      <h3>Leader Augmentation Track</h3>
      <ul style="font-size:0.85rem;">
        <li>RAC Regulatory + CAP 15189 advisory modules</li>
        <li>Portfolio governance &amp; multi-contract economics</li>
        <li>Risk board &amp; CAB facilitation simulation</li>
        <li>Executive reporting &amp; accreditation briefing construction</li>
      </ul>
      <p class="muted" style="font-size:0.75rem;">Leaders complete augmentation parallel to Phases 4–6 to scale multi-organization coverage.</p>
    </div>
  </div>
</section>

<!-- Role-Service Coverage Matrix -->
<section id="coverage-matrix" class="section">
  <h2>Role–Service Coverage Matrix</h2>
  <p class="muted" style="max-width:900px;margin:0 auto 24px;">Every service line has at least two primary certified roles and one cross-trained backup to maintain continuity and audit resilience.</p>
  <div class="card" style="overflow-x:auto;">
    <table style="width:100%;min-width:780px;font-size:0.75rem;border-collapse:collapse;">
      <thead>
        <tr style="background:#f1f5f9;">
          <th style="text-align:left;padding:8px;">Pillar / Service Theme</th>
          <th style="text-align:left;padding:8px;">Primary Roles</th>
          <th style="text-align:left;padding:8px;">Key Certifications</th>
          <th style="text-align:left;padding:8px;">Backup Role</th>
          <th style="text-align:left;padding:8px;">Redundancy Target</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="padding:6px 8px;">A. HCIT / Interoperability</td>
          <td style="padding:6px 8px;">EHR Specialist, Interface Analyst</td>
          <td style="padding:6px 8px;">
            <span class="matrix-cert" data-cert="Epic Ambulatory">Epic Ambulatory</span>,
            <span class="matrix-cert" data-cert="HL7 Interface Specialist">HL7 Interface</span>,
            <span class="matrix-cert" data-cert="FHIR Developer">FHIR Developer</span>
          </td>
          <td style="padding:6px 8px;">Clinical Integration Analyst</td>
          <td style="padding:6px 8px;">2+ primary, 1 backup</td>
        </tr>
        <tr>
          <td style="padding:6px 8px;">B. Revenue &amp; Admin</td>
          <td style="padding:6px 8px;">RCM Analyst, Coding Specialist</td>
          <td style="padding:6px 8px;">
            <span class="matrix-cert" data-cert="CRCS">CRCS</span>,
            <span class="matrix-cert" data-cert="CPC Coder">CPC</span>,
            <span class="matrix-cert" data-cert="Epic Resolute">Epic Resolute</span>
          </td>
          <td style="padding:6px 8px;">HFMA Certified Analyst</td>
          <td style="padding:6px 8px;">2+ primary, 1 backup</td>
        </tr>
        <tr>
          <td style="padding:6px 8px;">C. Biomedical &amp; Imaging</td>
          <td style="padding:6px 8px;">Biomedical Tech, Imaging Systems Specialist</td>
          <td style="padding:6px 8px;">
            <span class="matrix-cert" data-cert="AAMI CBET">AAMI CBET</span>,
            <span class="matrix-cert" data-cert="Siemens CT Service">Siemens CT Service</span>,
            <span class="matrix-cert" data-cert="IEC 60601 Safety">IEC 60601 Safety</span>
          </td>
          <td style="padding:6px 8px;">Biomedical QA Engineer</td>
          <td style="padding:6px 8px;">2+ primary, 1 backup</td>
        </tr>
        <tr>
          <td style="padding:6px 8px;">D. Data, AI &amp; Outcomes</td>
          <td style="padding:6px 8px;">Clinical Quality Analyst, Population Analytics Specialist</td>
          <td style="padding:6px 8px;">
            <span class="matrix-cert" data-cert="Healthcare Analytics">Healthcare Analytics</span>,
            <span class="matrix-cert" data-cert="Epic Cogito Analytics">Epic Cogito</span>,
            <span class="matrix-cert" data-cert="Power BI Healthcare">Power BI Healthcare</span>
          </td>
          <td style="padding:6px 8px;">Healthcare AI Analyst</td>
          <td style="padding:6px 8px;">2+ primary, 1 backup</td>
        </tr>
        <tr>
          <td style="padding:6px 8px;">E. Compliance &amp; Security</td>
          <td style="padding:6px 8px;">Privacy Officer, Accreditation Readiness Officer</td>
          <td style="padding:6px 8px;">
            <span class="matrix-cert" data-cert="ISO 27001 Lead">ISO 27001 Lead</span>,
            <span class="matrix-cert" data-cert="ISO 15189:2022–aligned Training: Medical Lab Quality & Competence Systems">ISO 15189:2022 Training</span>,
            <span class="matrix-cert" data-cert="CAP 15189 Consultant Prep Program">CAP 15189 Prep</span>
          </td>
          <td style="padding:6px 8px;">ISO Compliance Specialist</td>
          <td style="padding:6px 8px;">2+ primary, 1 backup</td>
        </tr>
        <tr>
          <td style="padding:6px 8px;">F. Life Sciences &amp; Trials</td>
          <td style="padding:6px 8px;">Clinical Data Manager, Lab Informatics Engineer</td>
          <td style="padding:6px 8px;">
            <span class="matrix-cert" data-cert="Medidata Rave EDC">Medidata Rave EDC</span>,
            <span class="matrix-cert" data-cert="LabWare LIMS">LabWare LIMS</span>,
            <span class="matrix-cert" data-cert="DIA Safety & Pharmacovigilance Certificate">DIA Safety &amp; PV</span>
          </td>
          <td style="padding:6px 8px;">Regulatory Affairs Coordinator</td>
          <td style="padding:6px 8px;">2+ primary, 1 backup</td>
        </tr>
      </tbody>
    </table>
    <p style="font-size:0.7rem;color:#64748b;margin-top:8px;">Redundancy matrix audited quarterly; gaps trigger cross-training or accelerated certification assignment.</p>
  </div>
  <div class="config-actions" style="display:flex;gap:8px;justify-content:flex-end;margin-top:12px;">
    <button id="copyConfigBtn" class="btn-outline" type="button">Copy JSON Config</button>
    <button id="downloadConfigBtn" class="btn" type="button">Download JSON</button>
  </div>
</section>

<!-- Leader Track Card (Dedicated Highlight) -->
<section id="leader-track" class="section">
  <h2>Leader Track vs Specialist Track</h2>
  <div class="grid">
    <div class="card">
      <h3>Leader Track (Incremental)</h3>
      <ul style="font-size:0.85rem;">
        <li>RAC (Regulatory Affairs Certification)</li>
        <li>CAP 15189 Consultant Prep Program</li>
        <li>Portfolio economics modeling &amp; KPI governance</li>
        <li>Risk board &amp; CAB facilitation methodology</li>
        <li>Executive accreditation briefing construction</li>
        <li>Multi-contract redundancy planning</li>
      </ul>
    </div>
    <div class="card">
      <h3>Specialist Track (Depth)</h3>
      <ul style="font-size:0.85rem;">
        <li>Platform specialization (Epic Cogito, Siemens MRI, Medidata)</li>
        <li>Method performance (CLSI) &amp; QMS execution (ISO 15189:2022)</li>
        <li>Pharmacovigilance &amp; signal analytics (DIA, GPPC, Data Mining)</li>
        <li>Bioinformatics &amp; sequencing (Illumina, NIH Bioinformatics)</li>
        <li>Advanced analytics (Healthcare AI, NVIDIA Clara)</li>
        <li>Privacy &amp; security (ISO 27001, HITRUST, GDPR)</li>
      </ul>
    </div>
  </div>
</section>

<!-- Redundancy & Gating Criteria -->
<section id="redundancy-policy" class="section">
  <h2>Redundancy &amp; Gating Criteria</h2>
  <div class="grid">
    <div class="card">
      <h3>Gating Metrics</h3>
      <ul style="font-size:0.8rem;">
        <li>QMS document set completeness &ge; 90%</li>
        <li>Calibration &amp; maintenance record compliance &ge; 98%</li>
        <li>EHR / PACS uptime &ge; 99.5%</li>
        <li>Interface incident median resolution &lt; 4 hrs</li>
        <li>Claim denial reduction &ge; 30% vs baseline</li>
        <li>PV signal triage turnaround &lt; 5 business days</li>
        <li>DR/BCP drill success &ge; 95% objectives met</li>
      </ul>
    </div>
    <div class="card">
      <h3>Redundancy Policy</h3>
      <ul style="font-size:0.8rem;">
        <li>Each service mapped to ≥ 2 certified primaries + 1 cross-trained backup.</li>
        <li>Quarterly redundancy audit; gaps addressed within 30 days.</li>
        <li>Cross-pillar shadow rotation schedule (every 60 days).</li>
        <li>Backup readiness drill (simulate primary absence) twice per year.</li>
        <li>Succession matrix maintained for all advanced platforms.</li>
      </ul>
      <p class="muted" style="font-size:0.7rem;">Ensures continuity under turnover, surge demand, or incident conditions.</p>
    </div>
  </div>
</section>

<!-- Training KPI & Accreditation Outcomes -->
<section id="kpi-panel" class="section">
  <h2>Training KPIs &amp; Accreditation Outcomes</h2>
  <div class="grid">
    <div class="card">
      <h3>Operational KPIs</h3>
      <ul style="font-size:0.8rem;">
        <li>Uptime (EHR, PACS, Modality)</li>
        <li>Incident MTTR (clinical systems / devices)</li>
        <li>RCM denial rate &amp; recovery volume</li>
        <li>Telehealth session success &amp; utilization</li>
      </ul>
    </div>
    <div class="card">
      <h3>Compliance &amp; Accreditation</h3>
      <ul style="font-size:0.8rem;">
        <li>Audit nonconformities per cycle</li>
        <li>ISO 15189:2022 alignment index</li>
        <li>Method verification dossier completion</li>
        <li>IVDR technical file readiness score</li>
      </ul>
    </div>
    <div class="card">
      <h3>Clinical &amp; Economic Impact</h3>
      <ul style="font-size:0.8rem;">
        <li>Outcome measure improvement (e.g., LOS reduction)</li>
        <li>Population health reporting timeliness</li>
        <li>Cost avoidance (emergency service calls)</li>
        <li>Recovered revenue (denials / write-offs)</li>
      </ul>
    </div>
    <div class="card">
      <h3>Training Effectiveness</h3>
      <ul style="font-size:0.8rem;">
        <li>Cert attainment velocity (avg months per cert)</li>
        <li>Redundancy coverage index (% services fully covered)</li>
        <li>Cross-pillar competency score (internal assessments)</li>
        <li>Drill performance trend (BCP / audit rehearsal)</li>
      </ul>
    </div>
  </div>
  <p class="muted" style="font-size:0.7rem;max-width:900px;margin:24px auto 0;">KPIs reviewed monthly; quarterly executive summary drives improvement roadmap and certification reallocation decisions.</p>
</section>

<!-- Certification Detail Modal -->
<div id="certModal" class="cert-modal">
  <div class="cert-modal-overlay"></div>
  <div class="cert-modal-content">
    <button class="cert-modal-close">&times;</button>
    <div class="cert-modal-header">
      <img id="modalLogo" class="cert-modal-logo" src="" alt="">
      <div>
        <h3 id="modalTitle" class="cert-modal-title"></h3>
        <p id="modalVendor" class="cert-modal-vendor"></p>
      </div>
    </div>
    <div class="cert-modal-body">
      <div class="cert-modal-section">
        <h4>📋 Overview</h4>
        <p id="modalDescription"></p>
      </div>
      <div class="cert-modal-section">
        <h4>🎯 Key Competencies</h4>
        <ul id="modalCompetencies"></ul>
      </div>
      <div class="cert-modal-section">
        <h4>📚 Learning Path</h4>
        <p id="modalPath"></p>
      </div>
      <div class="cert-modal-section">
        <h4>👥 Team Roles in 1:50 Pod</h4>
        <p id="modalRoles"></p>
      </div>
      <div class="cert-modal-section">
        <h4>💼 Career Value</h4>
        <p id="modalValue"></p>
      </div>
      <div class="cert-modal-footer">
        <div class="cert-modal-meta">
          <span><strong>Duration:</strong> <span id="modalDuration"></span></span>
          <span><strong>Level:</strong> <span id="modalLevel"></span></span>
          <span><strong>Pillar:</strong> <span id="modalPillar"></span></span>
        </div>
      </div>
    </div>
  </div>
</div>

<section id="ecosystem" class="section">
  <h2>Clinical, Technology &amp; Certification Ecosystem</h2>
  <p class="muted">
    Your 1:50 pod operates inside a proven ecosystem of healthcare vendors, cloud platforms, and certification bodies.
    This gives hospitals and ministries confidence that every engagement aligns with global best practices.
  </p>
  <div class="grid">
    <div class="card">
      <h3>Certifications &amp; Standards</h3>
      <ul class="logo-list">
        <li>ETA International</li>
        <li>AHIMA</li>
        <li>ISO 13485</li>
        <li>ISO 27001</li>
        <li>IHE</li>
        <li>WHO Digital Health</li>
        <li>IAPP</li>
      </ul>
    </div>
    <div class="card">
      <h3>Cloud &amp; Tech Partners</h3>
      <ul class="logo-list">
        <li>AWS for Health</li>
        <li>Microsoft Cloud for Healthcare</li>
        <li>Red Hat Healthcare OpenShift</li>
        <li>Oracle Cloud Infrastructure</li>
      </ul>
    </div>
    <div class="card">
      <h3>Industry Vendors (HCIT &amp; Devices)</h3>
      <ul class="logo-list">
        <li>Siemens Healthineers</li>
        <li>GE HealthCare</li>
        <li>Philips Healthcare</li>
        <li>Oracle Health (Cerner)</li>
        <li>Epic Systems</li>
        <li>Meditech</li>
        <li>Dell Health Solutions</li>
        <li>Cisco Healthcare Networking</li>
      </ul>
    </div>
  </div>
</section>

<!-- Executive-Grade Case Studies -->
<section id="case-studies" class="section">
  <h2>Enterprise Success Stories</h2>
  <p class="muted" style="max-width:800px;margin:0 auto 24px;">
    Real deployments, measurable outcomes, Fortune 500-scale impact.
  </p>

  <div class="case-study">
    <span class="case-study-tag">Multi-Site EHR Migration</span>
    <h4>15-Hospital Network • Epic Systems Deployment</h4>
    <p>
      <strong>Challenge:</strong> Regional health system needed to migrate 15 hospitals from legacy HIS to Epic across 4 states. 2,400 beds, 12,000 staff, zero-downtime requirement.
    </p>
    <p>
      <strong>Solution:</strong> Deployed 3 Medical Technology 1:50 pods (150 team members) for 18-month phased rollout. Each pod covered clinical systems, biomedical uptime, integration, training, and go-live support.
    </p>
    <p>
      <strong>Impact:</strong> Completed on schedule with 99.8% uptime during cutover. System achieved HIMSS Stage 7 within 9 months post-go-live.
    </p>
    <div class="case-study-meta">
      <div class="case-study-metric">
        <span class="metric-value">99.8%</span>
        <div class="metric-label">Uptime During Migration</div>
      </div>
      <div class="case-study-metric">
        <span class="metric-value">18 mo</span>
        <div class="metric-label">Full Deployment Timeline</div>
      </div>
      <div class="case-study-metric">
        <span class="metric-value">$14M</span>
        <div class="metric-label">Annual Efficiency Gains</div>
      </div>
    </div>
  </div>

  <div class="case-study">
    <span class="case-study-tag">National Telemedicine Rollout</span>
    <h4>Ministry of Health • 200 Rural Clinics</h4>
    <p>
      <strong>Challenge:</strong> Government program to extend specialist care to 200 rural clinics serving 3M population. Limited local IT capacity and connectivity challenges.
    </p>
    <p>
      <strong>Solution:</strong> 2 Medical Technology pods deployed telemedicine infrastructure, trained 800+ local health workers, established remote monitoring protocols, and built data pipelines to national health dashboard.
    </p>
    <p>
      <strong>Impact:</strong> 92,000 remote consultations in Year 1. Reduced patient travel by 65%. WHO recognized as model digital health program.
    </p>
    <div class="case-study-meta">
      <div class="case-study-metric">
        <span class="metric-value">92K</span>
        <div class="metric-label">Remote Consultations (Y1)</div>
      </div>
      <div class="case-study-metric">
        <span class="metric-value">65%</span>
        <div class="metric-label">Reduction in Patient Travel</div>
      </div>
      <div class="case-study-metric">
        <span class="metric-value">200</span>
        <div class="metric-label">Clinics Connected</div>
      </div>
    </div>
  </div>

  <div class="case-study">
    <span class="case-study-tag">Revenue Cycle Optimization</span>
    <h4>Health System • $450M Annual Revenue</h4>
    <p>
      <strong>Challenge:</strong> 8-hospital system struggling with 18% claim denial rate, 72-day average A/R, and $47M in uncollected revenue over 3 years.
    </p>
    <p>
      <strong>Solution:</strong> 1 Medical Technology RCM pod conducted process audit, implemented denial management workflows, automated coding QA, trained billing teams, and deployed real-time analytics dashboards.
    </p>
    <p>
      <strong>Impact:</strong> Denial rate dropped to 6.2% within 12 months. A/R reduced to 38 days. Recovered $12.4M in previously written-off claims.
    </p>
    <div class="case-study-meta">
      <div class="case-study-metric">
        <span class="metric-value">$12.4M</span>
        <div class="metric-label">Revenue Recovered</div>
      </div>
      <div class="case-study-metric">
        <span class="metric-value">6.2%</span>
        <div class="metric-label">New Denial Rate (from 18%)</div>
      </div>
      <div class="case-study-metric">
        <span class="metric-value">38 days</span>
        <div class="metric-label">Average A/R (from 72)</div>
      </div>
    </div>
  </div>

  <div class="case-study">
    <span class="case-study-tag">Biomedical Fleet Management</span>
    <h4>Diagnostic Chain • 45 Imaging Centers</h4>
    <p>
      <strong>Challenge:</strong> Multi-state imaging chain with 120+ modalities (CT, MRI, PET, X-ray) facing inconsistent uptime, untracked maintenance, and regulatory audit exposure.
    </p>
    <p>
      <strong>Solution:</strong> 1 Biomedical Engineering pod deployed asset tracking system, established PM schedules, trained on-site technicians, created audit-ready documentation, and provided 24/7 on-call support.
    </p>
    <p>
      <strong>Impact:</strong> Device uptime increased from 87% to 98.3%. Passed full regulatory audit. Reduced emergency service costs by $380K annually.
    </p>
    <div class="case-study-meta">
      <div class="case-study-metric">
        <span class="metric-value">98.3%</span>
        <div class="metric-label">Device Uptime (from 87%)</div>
      </div>
      <div class="case-study-metric">
        <span class="metric-value">$380K</span>
        <div class="metric-label">Annual Service Cost Savings</div>
      </div>
      <div class="case-study-metric">
        <span class="metric-value">100%</span>
        <div class="metric-label">Regulatory Audit Pass Rate</div>
      </div>
    </div>
  </div>
</section>

<section id="kpis" class="section">
  <h2>Clinical KPIs &amp; SLAs</h2>
  <p class="muted">
    Every contract is governed by clear KPIs and SLAs. Leaders are trained to report and improve on these metrics for boards, ministries and donors.
  </p>
  <div class="grid">
    <div class="card">
      <h3>Clinical Systems &amp; HCIT</h3>
      <ul>
        <li>EHR / HIS uptime targets (e.g., ≥ 99.5%).</li>
        <li>Average time-to-resolution for P1 clinical incidents.</li>
        <li>Order-to-result turn-around for LIS-integrated workflows.</li>
        <li>Telemedicine session success rate and call quality metrics.</li>
      </ul>
    </div>
    <div class="card">
      <h3>Biomedical &amp; Imaging</h3>
      <ul>
        <li>Device uptime per modality and per ward.</li>
        <li>Calibration and maintenance compliance percentage.</li>
        <li>Response time to device-critical incidents.</li>
        <li>Documented QA logs and audit-readiness status.</li>
      </ul>
    </div>
    <div class="card">
      <h3>Revenue &amp; Admin</h3>
      <ul>
        <li>Claim denial rates and recovery percentages.</li>
        <li>Average days in A/R and cash collection performance.</li>
        <li>Stock-out incidents in pharmacy and clinical supply chain.</li>
        <li>Shift coverage compliance for critical departments.</li>
      </ul>
    </div>
    <div class="card">
      <h3>Data, AI &amp; Compliance</h3>
      <ul>
        <li>Completeness and timeliness of public health reporting.</li>
        <li>Number of actionable insights delivered to leadership per quarter.</li>
        <li>Privacy incident count and remediation cycle time.</li>
        <li>DR/BCP drill success rate and RPO/RTO adherence.</li>
      </ul>
    </div>
  </div>
</section>

<!-- Compliance & Security Section -->
<section id="compliance" class="section">
  <h2>Enterprise Compliance & Security Posture</h2>
  <p class="muted" style="max-width:800px;margin:0 auto 24px;">
    Fortune 500 healthcare organizations demand uncompromising security, privacy, and regulatory readiness. We meet that standard.
  </p>

  <div class="grid">
    <div class="card">
      <h3>🔒 Security & Privacy</h3>
      <ul>
        <li><strong>ISO 27001</strong> Information Security Management System certified</li>
        <li><strong>SOC 2 Type II</strong> audit attestation for service organizations</li>
        <li><strong>HITRUST CSF</strong> certified for healthcare data protection</li>
        <li><strong>HIPAA Business Associate Agreement</strong> compliance with all covered entities</li>
        <li>Annual penetration testing by independent security firms</li>
        <li>24/7 Security Operations Center (SOC) monitoring</li>
        <li>Encryption at rest (AES-256) and in transit (TLS 1.3)</li>
        <li>Multi-factor authentication (MFA) enforced for all access</li>
      </ul>
    </div>
    <div class="card">
      <h3>⚕️ Clinical & Device Quality</h3>
      <ul>
        <li><strong>ISO 13485</strong> Quality Management for Medical Devices</li>
        <li><strong>AHIMA</strong> aligned health information management practices</li>
        <li><strong>IHE</strong> (Integrating the Healthcare Enterprise) profiles</li>
        <li><strong>WHO Digital Health</strong> guidelines compliance</li>
        <li>ETA International biomedical technician certifications</li>
        <li>Documented QMS with audit trails for device servicing</li>
        <li>Clinical safety risk management (ISO 14971)</li>
        <li>Adverse event reporting and CAPA procedures</li>
      </ul>
    </div>
    <div class="card">
      <h3>🌍 Data Governance & Privacy Laws</h3>
      <ul>
        <li><strong>GDPR</strong> compliance for European Union operations</li>
        <li><strong>CCPA/CPRA</strong> California privacy law adherence</li>
        <li><strong>PIPEDA</strong> compliance for Canadian health data</li>
        <li><strong>POPIA</strong> (South Africa) and local privacy frameworks</li>
        <li>Data residency options (US, EU, Asia-Pacific, Africa)</li>
        <li>Right-to-access and right-to-erasure workflows</li>
        <li>Privacy Impact Assessments (PIAs) for new services</li>
        <li>IAPP-trained privacy professionals on staff</li>
      </ul>
    </div>
    <div class="card">
      <h3>📋 Audit & Documentation</h3>
      <ul>
        <li>Full audit trail for every clinical data access</li>
        <li>Automated compliance reporting dashboards</li>
        <li>Quarterly executive security & compliance briefings</li>
        <li>Documentation packages for regulatory inspections</li>
        <li>Evidence repository for accreditation bodies</li>
        <li>Incident response playbooks (P1-P4 severity)</li>
        <li>Business continuity and disaster recovery (BC/DR) plans</li>
        <li>RTO ≤ 4 hours, RPO ≤ 15 minutes for critical systems</li>
      </ul>
    </div>
  </div>

  <div style="text-align:center;margin-top:32px;">
    <h3 style="color:var(--brand);margin-bottom:16px;">Insurance & Liability Coverage</h3>
    <div class="grid" style="max-width:900px;margin:0 auto;">
      <div class="card" style="text-align:left;">
        <h4>Professional Liability</h4>
        <p><strong>$10M</strong> per occurrence / <strong>$20M</strong> aggregate coverage for clinical technology errors & omissions.</p>
      </div>
      <div class="card" style="text-align:left;">
        <h4>Cyber Insurance</h4>
        <p><strong>$25M</strong> cyber liability coverage including breach response, forensics, regulatory defense, and patient notification.</p>
      </div>
      <div class="card" style="text-align:left;">
        <h4>General Liability</h4>
        <p><strong>$5M</strong> general liability for on-site operations, including biomedical equipment installation and maintenance.</p>
      </div>
    </div>
  </div>
</section>

<!-- Enterprise Engagement Model -->
<section id="engagement" class="section">
  <h2>Enterprise Engagement Model</h2>
  <p class="muted" style="max-width:800px;margin:0 auto 24px;">
    We meet Fortune 500 buyers where they are — with proof-of-concept programs, executive briefings, white-glove onboarding, and risk-managed pilots.
  </p>

  <div class="engagement-box">
    <h4>🧪 Proof-of-Concept Program</h4>
    <p><strong>30-day pilot in one ward, department, or satellite clinic.</strong></p>
    <ul>
      <li>Deploy a focused 1:10 sub-team for a single use case (e.g., EHR support for 1 ICU, biomedical uptime for imaging center)</li>
      <li>Deliver measurable results: uptime %, incident response time, user satisfaction scores</li>
      <li>Executive readout with ROI projection for full-scale deployment</li>
      <li><strong>No long-term commitment required</strong> — pay only for pilot period</li>
    </ul>
  </div>

  <div class="engagement-box">
    <h4>👔 Executive Briefing Sessions</h4>
    <p><strong>Private demo and strategy session for C-suite, board, or procurement committee.</strong></p>
    <ul>
      <li>1-hour virtual or on-site briefing led by our Chief Medical Informatics Officer or VP of Biomedical Engineering</li>
      <li>Customized presentation showing how 1:50 pods address your specific challenges</li>
      <li>Live demo of dashboards, workflows, and compliance documentation</li>
      <li>Q&A with technical, clinical, and commercial leadership</li>
    </ul>
  </div>

  <div class="engagement-box">
    <h4>🤝 White-Glove Onboarding</h4>
    <p><strong>Dedicated account management from contract signature through go-live and beyond.</strong></p>
    <ul>
      <li>Named Client Success Manager with healthcare IT or biomedical background</li>
      <li>Weekly check-ins during first 90 days, monthly thereafter</li>
      <li>Escalation hotline direct to VP-level leadership</li>
      <li>Quarterly Business Reviews (QBRs) with KPI scorecards and improvement roadmaps</li>
    </ul>
  </div>

  <div class="engagement-box">
    <h4>🛡️ Risk-Free Diagnostic Assessment</h4>
    <p><strong>Complimentary 2-week assessment of your clinical technology environment.</strong></p>
    <ul>
      <li>Our team audits your EHR/LIS/PACS uptime, biomedical asset management, RCM processes, and compliance posture</li>
      <li>Deliver a written report with findings, risks, and recommended improvements</li>
      <li>No cost, no obligation — just actionable intelligence</li>
      <li><strong>Perfect for budget planning and vendor evaluation</strong></li>
    </ul>
  </div>

  <div style="text-align:center;margin-top:32px;">
    <a class="btn" href="#partner" style="font-size:1.1rem;padding:14px 32px;">Request Enterprise Engagement</a>
  </div>
</section>

<!-- ROI Calculator -->
<section id="roi-calc" class="section">
  <h2>Executive ROI Calculator</h2>
  <p class="muted" style="max-width:700px;margin:0 auto;">
    See projected cost savings, efficiency gains, and risk reduction for your organization.
  </p>

  <div class="roi-calculator">
    <h3>Calculate Your Potential ROI</h3>
    <form id="roi-form">
      <div class="roi-inputs">
        <div class="field">
          <label>Hospital Beds / Sites</label>
          <input type="number" id="beds" placeholder="e.g., 500" min="1" required>
        </div>
        <div class="field">
          <label>Current EHR Downtime (hrs/month)</label>
          <input type="number" id="downtime" placeholder="e.g., 12" min="0" step="0.1" required>
        </div>
        <div class="field">
          <label>Average Claim Denial Rate (%)</label>
          <input type="number" id="denial" placeholder="e.g., 15" min="0" max="100" step="0.1" required>
        </div>
        <div class="field">
          <label>Annual Clinical Technology Budget (USD)</label>
          <input type="number" id="budget" placeholder="e.g., 5000000" min="0" required>
        </div>
      </div>
      <button type="button" class="btn" onclick="calculateROI()" style="width:100%;">Calculate ROI</button>
    </form>

    <div class="roi-result" id="roi-result" style="display:none;">
      <span class="result-value" id="roi-value">$0</span>
      <div class="result-label">Estimated Annual Savings & Revenue Recovery</div>
      <p style="margin-top:12px;font-size:0.9rem;color:var(--muted);">
        Based on 40% downtime reduction, 50% denial improvement, and 18% operational efficiency gains. 
        <strong style="color:var(--brand);">Schedule an ROI workshop for detailed analysis.</strong>
      </p>
    </div>
  </div>
</section>

<!-- Thought Leadership & Resources -->
<section id="thought-leadership" class="section">
  <h2>Insights from the Field</h2>
  <p class="muted" style="max-width:800px;margin:0 auto 24px;">
    Thought leadership, research, and industry insights for healthcare CIOs, CTOs, biomedical directors, and clinical executives.
  </p>

  <div class="grid">
    <div class="card">
      <h4>📄 Quarterly Whitepapers</h4>
      <p><strong>Latest:</strong> "The State of EHR Uptime in Multi-Site Health Systems" (Q4 2024)</p>
      <p style="font-size:0.85rem;color:var(--muted);margin-top:8px;">
        Analysis of 200+ hospitals showing correlation between managed service models and clinical system reliability.
      </p>
      <a href="#downloads" style="font-size:0.9rem;color:var(--brand);font-weight:600;">Download →</a>
    </div>
    <div class="card">
      <h4>🎥 Webinar Series for CIOs</h4>
      <p><strong>Next:</strong> "Biomedical Asset Management at Scale" — Jan 15, 2026</p>
      <p style="font-size:0.85rem;color:var(--muted);margin-top:8px;">
        Live session with our VP of Biomedical Engineering on lifecycle tracking, compliance documentation, and uptime SLAs.
      </p>
      <a href="#partner" style="font-size:0.9rem;color:var(--brand);font-weight:600;">Register →</a>
    </div>
    <div class="card">
      <h4>🎤 Industry Conference Speaking</h4>
      <p><strong>Upcoming:</strong> HIMSS Global Health Conference 2026, AAMI Clinical Engineering Summit</p>
      <p style="font-size:0.85rem;color:var(--muted);margin-top:8px;">
        Our leadership presents on telemedicine deployment, ISO 13485 for service organizations, and RCM optimization.
      </p>
    </div>
    <div class="card">
      <h4>🔬 Research Partnerships</h4>
      <p><strong>Collaborating with:</strong> Academic medical centers on AI-assisted population health analytics</p>
      <p style="font-size:0.85rem;color:var(--muted);margin-top:8px;">
        Joint research on predictive staffing models, readmission risk stratification, and fraud detection algorithms.
      </p>
    </div>
  </div>
</section>

<!-- Procurement-Ready Materials -->
<section id="downloads" class="section">
  <h2>Procurement-Ready Documentation</h2>
  <p class="muted" style="max-width:800px;margin:0 auto 24px;">
    Everything your procurement, legal, and compliance teams need to evaluate and onboard us.
  </p>

  <div class="download-grid">
    <div class="download-card">
      <div class="download-icon">📋</div>
      <h4>Master Service Agreement (MSA)</h4>
      <p>Standard contract template with SLAs, pricing models, and terms.</p>
    </div>
    <div class="download-card">
      <div class="download-icon">🔐</div>
      <h4>Security Questionnaire Responses</h4>
      <p>Pre-filled answers to standard HIPAA, ISO 27001, SOC 2 questionnaires.</p>
    </div>
    <div class="download-card">
      <div class="download-icon">🛡️</div>
      <h4>Insurance Certificates</h4>
      <p>Professional liability, cyber, and general liability coverage documentation.</p>
    </div>
    <div class="download-card">
      <div class="download-icon">✅</div>
      <h4>Compliance Documentation</h4>
      <p>ISO 13485, HITRUST, SOC 2 Type II audit reports and certifications.</p>
    </div>
    <div class="download-card">
      <div class="download-icon">📞</div>
      <h4>References List</h4>
      <p>Contact information for hospital CIOs, biomedical directors, CFOs (with NDAs).</p>
    </div>
    <div class="download-card">
      <div class="download-icon">📊</div>
      <h4>Case Study Portfolio</h4>
      <p>Detailed PDF case studies with metrics, timelines, and client testimonials.</p>
    </div>
  </div>

  <div style="text-align:center;margin-top:32px;">
    <p style="font-size:1rem;color:var(--text-dark);margin-bottom:12px;">
      <strong>Need custom documentation or an NDA before downloading?</strong>
    </p>
    <a class="btn-outline" href="#partner">Request Documentation Package</a>
  </div>
</section>

<section id="partner" class="section">
  <h2>Request a Healthcare Partnership</h2>
  <p class="muted" style="max-width:780px;">
    Hospitals, ministries, NGOs and health-tech vendors can connect here to explore multi-year partnerships with
    Medical Technology 1:50 pods. Share your context and we’ll propose a structured engagement.
  </p>

  <div class="grid">
    <div class="card">
      <h3>Who We Partner With</h3>
      <ul>
        <li>Hospital groups and private clinic networks.</li>
        <li>Imaging centers and diagnostic chains.</li>
        <li>Ministries of Health and public health agencies.</li>
        <li>Global health NGOs and donor-funded programs.</li>
        <li>Health-tech and MedTech vendors needing deployment capacity.</li>
      </ul>
    </div>
    <div class="card">
      <h3>What We Typically Deliver</h3>
      <ul>
        <li>Clinical systems rollout and ongoing support.</li>
        <li>Biomedical uptime and imaging systems coverage.</li>
        <li>RCM, pharmacy, workforce and supply chain systems.</li>
        <li>Data &amp; AI for outcomes, population health and fraud.</li>
        <li>Quality, accreditation and regulatory readiness programs.</li>
      </ul>
    </div>
  </div>

  <form method="post" action="send-mail.php" class="application-form" style="max-width:900px;margin:24px auto 0;">
    <div class="form-row">
      <div class="field">
        <label>Organization Name</label>
        <input name="company" required>
      </div>
      <div class="field">
        <label>Country / Region</label>
        <input name="location" required>
      </div>
    </div>
    <div class="form-row">
      <div class="field">
        <label>Organization Type</label>
        <select name="org_type" required>
          <option value="">Select…</option>
          <option>Hospital / Health System</option>
          <option>Clinic Network / Diagnostic Chain</option>
          <option>Ministry / Public Health Agency</option>
          <option>NGO / Donor Program</option>
          <option>Health-Tech / MedTech Vendor</option>
          <option>Other</option>
        </select>
      </div>
      <div class="field">
        <label>Scale (sites, beds, or population served)</label>
        <input name="scale" placeholder="e.g., 3 hospitals, 20 clinics, 2M population">
      </div>
    </div>
    <div class="field">
      <label>What would you like a Medical Technology 1:50 team to help you with?</label>
      <textarea name="message" rows="4" placeholder="Describe your current challenges, priorities, and any timelines."></textarea>
    </div>
    <input type="hidden" name="industry" value="Medical Technology / Healthcare IT">
    <input type="hidden" name="source" value="Healthcare Partnership • Medical Technology">
    <button class="btn" type="submit">Submit Partnership Request</button>
  </form>
</section>

<!-- Tiered CTAs Section -->
<section id="apply" class="section">
  <h2>Get Started — Choose Your Path</h2>
  <p class="muted" style="max-width:800px;margin:0 auto 24px;">
    Whether you're a Fortune 500 decision-maker, a mid-size provider, or an aspiring Medical Technology leader — we have a path for you.
  </p>

  <div class="cta-tier-grid">
    <!-- Enterprise / Fortune 500 -->
    <div class="cta-tier-box enterprise">
      <span class="cta-tier-label">Enterprise / Fortune 500</span>
      <h3>Request Executive Briefing</h3>
      <p>Private strategy session with our Chief Medical Informatics Officer or VP of Biomedical Engineering.</p>
      <a class="btn" href="#partner">Schedule Briefing</a>
      <p style="margin-top:12px;font-size:0.85rem;color:var(--muted);">
        ✓ Custom ROI analysis<br>
        ✓ Proof-of-concept program<br>
        ✓ Dedicated account team
      </p>
    </div>

    <!-- Small/Mid-size -->
    <div class="cta-tier-box">
      <span class="cta-tier-label" style="background:#059669;">Small / Mid-Size Providers</span>
      <h3>Request Healthcare Partnership</h3>
      <p>Explore managed service contracts for hospitals, clinics, diagnostics labs, and health systems.</p>
      <a class="btn-outline" href="#partner">Submit Partnership Inquiry</a>
      <p style="margin-top:12px;font-size:0.85rem;color:var(--muted);">
        ✓ Fast response (48 hours)<br>
        ✓ Flexible engagement models<br>
        ✓ Scalable from 1 site to 50+
      </p>
    </div>

    <!-- Team Leaders -->
    <div class="cta-tier-box">
      <span class="cta-tier-label" style="background:#7c3aed;">Aspiring Leaders</span>
      <h3>Become a Medical Technology Team Leader</h3>
      <p>Join 1 of 100 globally appointed leaders. Build a 1:50 pod and earn up to $2.1M+ annual income.</p>
      <a class="btn-outline" href="#apply-form">Apply to Lead</a>
      <p style="margin-top:12px;font-size:0.85rem;color:var(--muted);">
        ✓ Fortune 500-caliber training<br>
        ✓ Real enterprise deployments<br>
        ✓ Residual income model
      </p>
    </div>
  </div>
</section>

<!-- Detailed Application Form -->
<section id="apply-form" class="section" style="background:#f7fbff;padding:40px 20px;">
  <h2>Apply to Become a Medical Technology Team Leader</h2>
  <p class="muted" style="max-width:760px;margin:0 auto;">
    There are only <strong>100 Medical Technology Team Leaders</strong> globally. Share your details and our team will follow up
    with eligibility assessment, timelines, and the full investor education roadmap.
  </p>
  <form method="post" action="send-mail.php" class="application-form" style="max-width:900px;margin:24px auto 0;background:#fff;padding:28px;border-radius:12px;box-shadow:0 4px 12px rgba(11,79,122,0.1);">
    <div class="form-row">
      <div class="field">
        <label>Full Name</label>
        <input name="name" required>
      </div>
      <div class="field">
        <label>Email</label>
        <input name="email" type="email" required>
      </div>
    </div>
    <div class="form-row">
      <div class="field">
        <label>Phone / WhatsApp</label>
        <input name="phone" required>
      </div>
      <div class="field">
        <label>Country / City</label>
        <input name="location" required>
      </div>
    </div>
    <div class="form-row">
      <div class="field">
        <label>Current Role / Background</label>
        <input name="background" placeholder="e.g., Biomedical Technician, HCIT Analyst, Nurse, Engineer">
      </div>
      <div class="field">
        <label>Primary Interest</label>
        <select name="interest" required>
          <option value="">Select…</option>
          <option>Become a Medical Technology Team Leader (1 of 100)</option>
          <option>Join a Medical Technology 1:50 Team</option>
          <option>Healthcare / Hospital / Ministry Partnership</option>
          <option>Vendor / MedTech Partnership</option>
        </select>
      </div>
    </div>
    <div class="field">
      <label>Tell us about your goals</label>
      <textarea name="message" rows="4" placeholder="Share your experience, vision, and what you’d like this program to help you build."></textarea>
    </div>
    <input type="hidden" name="industry" value="Medical Technology / Healthcare IT">
    <input type="hidden" name="source" value="Apply • Medical Technology Leader">
    <button class="btn" type="submit">Submit Your Application</button>
  </form>
</section>

<a href="#top" class="back-to-top">Back to top</a>

</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Medical Technology & Healthcare IT",
  "description": "Biomedical systems, EHR, telemedicine and revenue-cycle technology aligned to ISO 13485, AHIMA and global health standards via 1:50 pods.",
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
    {"@type": "ListItem", "position": 3, "name": "Medical Technology / Healthcare IT / Life Sciences", "item": "<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>"}
  ]
}
</script>

<script>
  const beds = parseFloat(document.getElementById('beds').value) || 0;
  const downtime = parseFloat(document.getElementById('downtime').value) || 0;
  const denial = parseFloat(document.getElementById('denial').value) || 0;
  const budget = parseFloat(document.getElementById('budget').value) || 0;

  if (beds === 0 || budget === 0) {
    alert('Please fill in all required fields');
    return;
  }

  // Estimated savings calculation
  // 40% downtime reduction: assume $5K/hour downtime cost
  const downtimeSavings = downtime * 0.4 * 5000 * 12;
  
  // 50% denial improvement: assume denial represents lost revenue
  const avgRevPerBed = 500000; // industry avg
  const totalRevenue = beds * avgRevPerBed;
  const currentDenials = totalRevenue * (denial / 100);
  const denialRecovery = currentDenials * 0.5;
  
  // 18% operational efficiency on budget
  const efficiencyGains = budget * 0.18;
  
  const totalROI = downtimeSavings + denialRecovery + efficiencyGains;

  document.getElementById('roi-value').textContent = 
    '$' + totalROI.toLocaleString('en-US', { maximumFractionDigits: 0 });
  document.getElementById('roi-result').style.display = 'block';
}

document.addEventListener('DOMContentLoaded', function() {
  // ===== Pillar A–E outer accordions =====
  const accordionButtons = document.querySelectorAll('.accordion-button');
  accordionButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const content = btn.nextElementSibling;
      const isOpen = btn.getAttribute('aria-expanded') === 'true';

      // Close others
      accordionButtons.forEach(other => {
        if (other !== btn) {
          other.setAttribute('aria-expanded', 'false');
          const otherContent = other.nextElementSibling;
          if (otherContent && otherContent.classList.contains('accordion-content')) {
            otherContent.classList.remove('open');
          }
        }
      });

      // Toggle this one
      btn.setAttribute('aria-expanded', isOpen ? 'false' : 'true');
      if (content && content.classList.contains('accordion-content')) {
        if (isOpen) {
          content.classList.remove('open');
        } else {
          content.classList.add('open');
        }
      }
    });
  });

  // ===== Inner service toggles =====
  const serviceToggles = document.querySelectorAll('.service-toggle');
  serviceToggles.forEach(toggle => {
    toggle.addEventListener('click', () => {
      const detail = toggle.nextElementSibling;
      const isOpen = toggle.getAttribute('aria-expanded') === 'true';

      toggle.setAttribute('aria-expanded', isOpen ? 'false' : 'true');
      if (detail && detail.classList.contains('service-detail')) {
        if (isOpen) {
          detail.classList.remove('open');
        } else {
          detail.classList.add('open');
        }
      }
    });
  });

  // ===== Number animation for hero stats =====
  const counters = document.querySelectorAll('[data-animate="number"]');
  if (counters.length) {
    const animateNumber = (el) => {
      const target = parseInt(el.getAttribute('data-target'), 10);
      const suffix = el.getAttribute('data-suffix') || '';
      let current = 0;
      const duration = 1200; // ms
      const start = performance.now();

      const step = (now) => {
        const progress = Math.min((now - start) / duration, 1);
        current = Math.floor(target * progress);
        el.textContent = current.toLocaleString('en-US') + suffix;
        if (progress < 1) {
          requestAnimationFrame(step);
        }
      };
      requestAnimationFrame(step);
    };

    if ('IntersectionObserver' in window) {
      const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            animateNumber(entry.target);
            obs.unobserve(entry.target);
          }
        });
      }, { threshold: 0.4 });

      counters.forEach(c => observer.observe(c));
    } else {
      counters.forEach(c => animateNumber(c));
    }
  }
});

// ========================================
// CERTIFICATION MATRIX SYSTEM
// ========================================

const certifications = [
  // PILLAR A: Clinical Systems & HCIT
  // Foundations
  {pillar: 'pillar-a', category: 'foundations', icon: '🔗', name: 'HL7 Interface Specialist', vendor: 'HL7 International'},
  {pillar: 'pillar-a', category: 'foundations', icon: '🔗', name: 'FHIR Developer', vendor: 'HL7 International'},
  {pillar: 'pillar-a', category: 'foundations', icon: '🏥', name: 'CAHIMS', vendor: 'HIMSS'},
  {pillar: 'pillar-a', category: 'foundations', icon: '💻', name: 'CompTIA Healthcare IT', vendor: 'CompTIA'},
  {pillar: 'pillar-a', category: 'foundations', icon: '📊', name: 'CPHIMS', vendor: 'HIMSS'},
  // Vendor Platforms
  {pillar: 'pillar-a', category: 'vendor', icon: '🏢', name: 'Epic Ambulatory', vendor: 'Epic Systems'},
  {pillar: 'pillar-a', category: 'vendor', icon: '🏢', name: 'Epic Inpatient', vendor: 'Epic Systems'},
  {pillar: 'pillar-a', category: 'vendor', icon: '🏢', name: 'Epic MyChart', vendor: 'Epic Systems'},
  {pillar: 'pillar-a', category: 'vendor', icon: '🏢', name: 'Epic Cogito', vendor: 'Epic Systems'},
  {pillar: 'pillar-a', category: 'vendor', icon: '🏢', name: 'Epic Clarity', vendor: 'Epic Systems'},
  {pillar: 'pillar-a', category: 'vendor', icon: '🏢', name: 'Oracle Millennium', vendor: 'Oracle Health'},
  {pillar: 'pillar-a', category: 'vendor', icon: '🏢', name: 'Cerner HealtheIntent', vendor: 'Oracle Health'},
  {pillar: 'pillar-a', category: 'vendor', icon: '🏢', name: 'Cerner CareAware', vendor: 'Oracle Health'},
  {pillar: 'pillar-a', category: 'vendor', icon: '🏢', name: 'Meditech Expanse', vendor: 'Meditech'},
  {pillar: 'pillar-a', category: 'vendor', icon: '🏢', name: 'Meditech Magic', vendor: 'Meditech'},
  {pillar: 'pillar-a', category: 'vendor', icon: '🏢', name: 'Allscripts Sunrise', vendor: 'Allscripts'},
  {pillar: 'pillar-a', category: 'vendor', icon: '🏢', name: 'NextGen Healthcare', vendor: 'NextGen'},
  {pillar: 'pillar-a', category: 'vendor', icon: '🏢', name: 'athenahealth', vendor: 'athenahealth'},
  // Cloud
  {pillar: 'pillar-a', category: 'cloud', icon: '☁️', name: 'AWS HealthLake', vendor: 'Amazon'},
  {pillar: 'pillar-a', category: 'cloud', icon: '☁️', name: 'Azure Health Data', vendor: 'Microsoft'},
  {pillar: 'pillar-a', category: 'cloud', icon: '☁️', name: 'Google Healthcare API', vendor: 'Google'},
  {pillar: 'pillar-a', category: 'cloud', icon: '☁️', name: 'Oracle Cloud Health', vendor: 'Oracle'},
  // Specialty
  {pillar: 'pillar-a', category: 'specialty', icon: '📹', name: 'Teladoc Platform', vendor: 'Teladoc'},
  {pillar: 'pillar-a', category: 'specialty', icon: '📹', name: 'Doxy.me Specialist', vendor: 'Doxy.me'},
  {pillar: 'pillar-a', category: 'specialty', icon: '🖼️', name: 'PACS Administrator', vendor: 'Sectra/GE'},
  {pillar: 'pillar-a', category: 'specialty', icon: '🖼️', name: 'VNA Specialist', vendor: 'Philips'},

  // PILLAR B: Revenue & Admin
  // Foundations
  {pillar: 'pillar-b', category: 'foundations', icon: '💰', name: 'CRCS', vendor: 'AAHAM'},
  {pillar: 'pillar-b', category: 'foundations', icon: '📋', name: 'CPC Coder', vendor: 'AAPC'},
  {pillar: 'pillar-b', category: 'foundations', icon: '📋', name: 'CCS Coder', vendor: 'AHIMA'},
  {pillar: 'pillar-b', category: 'foundations', icon: '💼', name: 'HFMA Certified', vendor: 'HFMA'},
  {pillar: 'pillar-b', category: 'foundations', icon: '📊', name: 'RHIA', vendor: 'AHIMA'},
  // Vendor Platforms
  {pillar: 'pillar-b', category: 'vendor', icon: '🏢', name: 'Epic Revenue Cycle', vendor: 'Epic Systems'},
  {pillar: 'pillar-b', category: 'vendor', icon: '🏢', name: 'Epic Resolute', vendor: 'Epic Systems'},
  {pillar: 'pillar-b', category: 'vendor', icon: '🏢', name: 'Epic Cadence', vendor: 'Epic Systems'},
  {pillar: 'pillar-b', category: 'vendor', icon: '🏢', name: 'Cerner Revenue Cycle', vendor: 'Oracle Health'},
  {pillar: 'pillar-b', category: 'vendor', icon: '🏢', name: 'Infor CloudSuite', vendor: 'Infor'},
  {pillar: 'pillar-b', category: 'vendor', icon: '🏢', name: 'Change Healthcare', vendor: 'Change Healthcare'},
  // Specialty
  {pillar: 'pillar-b', category: 'specialty', icon: '💊', name: 'ASHP Pharmacy', vendor: 'ASHP'},
  {pillar: 'pillar-b', category: 'specialty', icon: '📦', name: 'AHRMM Supply Chain', vendor: 'AHA'},
  {pillar: 'pillar-b', category: 'specialty', icon: '⏰', name: 'Kronos Workforce', vendor: 'Kronos'},
  {pillar: 'pillar-b', category: 'specialty', icon: '⏰', name: 'API Healthcare', vendor: 'GE Healthcare'},

  // PILLAR C: Biomedical & Imaging
  // Foundations
  {pillar: 'pillar-c', category: 'foundations', icon: '🔧', name: 'ETA CET', vendor: 'ETA International'},
  {pillar: 'pillar-c', category: 'foundations', icon: '🔧', name: 'ETA BMD', vendor: 'ETA International'},
  {pillar: 'pillar-c', category: 'foundations', icon: '🔧', name: 'ETA BIET', vendor: 'ETA International'},
  {pillar: 'pillar-c', category: 'foundations', icon: '⚙️', name: 'AAMI CBET', vendor: 'AAMI'},
  {pillar: 'pillar-c', category: 'foundations', icon: '⚙️', name: 'AAMI CRES', vendor: 'AAMI'},
  {pillar: 'pillar-c', category: 'foundations', icon: '⚙️', name: 'AAMI CLES', vendor: 'AAMI'},
  // Vendor OEM
  {pillar: 'pillar-c', category: 'vendor', icon: '🏭', name: 'Siemens CT Service', vendor: 'Siemens'},
  {pillar: 'pillar-c', category: 'vendor', icon: '🏭', name: 'Siemens MRI Service', vendor: 'Siemens'},
  {pillar: 'pillar-c', category: 'vendor', icon: '🏭', name: 'Siemens Ultrasound', vendor: 'Siemens'},
  {pillar: 'pillar-c', category: 'vendor', icon: '🏭', name: 'GE Healthcare Tech', vendor: 'GE Healthcare'},
  {pillar: 'pillar-c', category: 'vendor', icon: '🏭', name: 'GE CT/MRI Service', vendor: 'GE Healthcare'},
  {pillar: 'pillar-c', category: 'vendor', icon: '🏭', name: 'Philips Imaging', vendor: 'Philips'},
  {pillar: 'pillar-c', category: 'vendor', icon: '🏭', name: 'Philips Ultrasound', vendor: 'Philips'},
  {pillar: 'pillar-c', category: 'vendor', icon: '🏭', name: 'Canon Medical', vendor: 'Canon'},
  {pillar: 'pillar-c', category: 'vendor', icon: '🏭', name: 'Hologic Mammography', vendor: 'Hologic'},
  // Specialty
  {pillar: 'pillar-c', category: 'specialty', icon: '✅', name: 'ISO 13485 Auditor', vendor: 'ISO'},
  {pillar: 'pillar-c', category: 'specialty', icon: '⚡', name: 'IEC 60601 Safety', vendor: 'IEC'},
  {pillar: 'pillar-c', category: 'specialty', icon: '📐', name: 'Radiation Safety', vendor: 'AAPM'},

  // PILLAR D: Data & AI
  // Foundations
  {pillar: 'pillar-d', category: 'foundations', icon: '📊', name: 'Healthcare Analytics', vendor: 'AHIMA'},
  {pillar: 'pillar-d', category: 'foundations', icon: '📈', name: 'SAS Healthcare', vendor: 'SAS Institute'},
  {pillar: 'pillar-d', category: 'foundations', icon: '📉', name: 'Tableau Healthcare', vendor: 'Tableau'},
  {pillar: 'pillar-d', category: 'foundations', icon: '🎓', name: 'Power BI Healthcare', vendor: 'Microsoft'},
  // AI/ML Specialty
  {pillar: 'pillar-d', category: 'specialty', icon: '🤖', name: 'NVIDIA Clara AI', vendor: 'NVIDIA'},
  {pillar: 'pillar-d', category: 'specialty', icon: '🤖', name: 'TensorFlow Health', vendor: 'Google'},
  {pillar: 'pillar-d', category: 'specialty', icon: '🤖', name: 'AWS ML Healthcare', vendor: 'Amazon'},
  {pillar: 'pillar-d', category: 'specialty', icon: '🤖', name: 'Azure Data Scientist', vendor: 'Microsoft'},
  {pillar: 'pillar-d', category: 'specialty', icon: '🧠', name: 'IBM Watson Health', vendor: 'IBM'},
  // Vendor Platforms
  {pillar: 'pillar-d', category: 'vendor', icon: '🏢', name: 'Epic Cogito Analytics', vendor: 'Epic Systems'},
  {pillar: 'pillar-d', category: 'vendor', icon: '🏢', name: 'Health Catalyst', vendor: 'Health Catalyst'},
  {pillar: 'pillar-d', category: 'vendor', icon: '🏢', name: 'Cerner HealtheIntent', vendor: 'Oracle Health'},
  {pillar: 'pillar-d', category: 'cloud', icon: '☁️', name: 'AWS QuickSight', vendor: 'Amazon'},
  {pillar: 'pillar-d', category: 'cloud', icon: '☁️', name: 'Azure Synapse', vendor: 'Microsoft'},
  {pillar: 'pillar-d', category: 'cloud', icon: '☁️', name: 'Google BigQuery', vendor: 'Google'},

  // PILLAR E: Compliance & Security
  // Foundations
  {pillar: 'pillar-e', category: 'foundations', icon: '✅', name: 'ISO 13485 Lead', vendor: 'ISO'},
  {pillar: 'pillar-e', category: 'foundations', icon: '🔒', name: 'ISO 27001 Lead', vendor: 'ISO'},
  {pillar: 'pillar-e', category: 'foundations', icon: '🔐', name: 'CHPS', vendor: 'AHIMA'},
  {pillar: 'pillar-e', category: 'foundations', icon: '🔐', name: 'HCISPP', vendor: 'ISC²'},
  {pillar: 'pillar-e', category: 'foundations', icon: '🔐', name: 'CIPP/US', vendor: 'IAPP'},
  {pillar: 'pillar-e', category: 'foundations', icon: '🔐', name: 'CIPT', vendor: 'IAPP'},
  // Specialty
  {pillar: 'pillar-e', category: 'specialty', icon: '🛡️', name: 'HITRUST CSF', vendor: 'HITRUST'},
  {pillar: 'pillar-e', category: 'specialty', icon: '🛡️', name: 'NIST Cybersecurity', vendor: 'NIST'},
  {pillar: 'pillar-e', category: 'specialty', icon: '🚨', name: 'DRII BCP', vendor: 'DRII'},
  {pillar: 'pillar-e', category: 'specialty', icon: '⚖️', name: 'HIPAA Compliance', vendor: 'HHS'},
  {pillar: 'pillar-e', category: 'specialty', icon: '⚖️', name: 'GDPR Healthcare', vendor: 'EU Commission'},
  {pillar: 'pillar-e', category: 'specialty', icon: '📋', name: 'Joint Commission', vendor: 'TJC'},
  {pillar: 'pillar-e', category: 'specialty', icon: '📋', name: 'CAP Accreditation', vendor: 'CAP'},
  {pillar: 'pillar-e', category: 'specialty', icon: '📋', name: 'ISO 15189 Lab', vendor: 'ISO'},
  {pillar: 'pillar-e', category: 'foundations', icon: '🧪', name: 'ISO 15189:2022–aligned Training: Medical Lab Quality & Competence Systems', vendor: 'ISO'},
  {pillar: 'pillar-e', category: 'specialty', icon: '🧪', name: 'CLSI Method Evaluation & Verification', vendor: 'CLSI'},

  // PILLAR F: Life Sciences, R&D & Clinical Trials
  // Clinical Trials Foundations
  {pillar: 'pillar-f', category: 'foundations', icon: '🔬', name: 'ACRP CRC', vendor: 'ACRP'},
  {pillar: 'pillar-f', category: 'foundations', icon: '🔬', name: 'ACRP CCRA', vendor: 'ACRP'},
  {pillar: 'pillar-f', category: 'foundations', icon: '🔬', name: 'SCDM CCDM', vendor: 'SCDM'},
  {pillar: 'pillar-f', category: 'foundations', icon: '🔬', name: 'SOCRA CCRP', vendor: 'SOCRA'},
  {pillar: 'pillar-f', category: 'foundations', icon: '📜', name: 'ICH-GCP', vendor: 'ICH'},
  // Clinical Trial Platforms
  {pillar: 'pillar-f', category: 'vendor', icon: '🏢', name: 'Veeva Vault CTMS', vendor: 'Veeva Systems'},
  {pillar: 'pillar-f', category: 'vendor', icon: '🏢', name: 'Veeva Vault EDC', vendor: 'Veeva Systems'},
  {pillar: 'pillar-f', category: 'vendor', icon: '🏢', name: 'Medidata Rave EDC', vendor: 'Medidata'},
  {pillar: 'pillar-f', category: 'vendor', icon: '🏢', name: 'Medidata CTMS', vendor: 'Medidata'},
  {pillar: 'pillar-f', category: 'vendor', icon: '🏢', name: 'Oracle InForm', vendor: 'Oracle'},
  {pillar: 'pillar-f', category: 'vendor', icon: '🏢', name: 'Medrio EDC', vendor: 'Medrio'},
  {pillar: 'pillar-f', category: 'vendor', icon: '🏢', name: 'eClinical Elligo', vendor: 'eClinical'},
  // LIMS & Lab Informatics
  {pillar: 'pillar-f', category: 'vendor', icon: '🧪', name: 'LabVantage LIMS', vendor: 'LabVantage'},
  {pillar: 'pillar-f', category: 'vendor', icon: '🧪', name: 'Thermo LIMS', vendor: 'Thermo Fisher'},
  {pillar: 'pillar-f', category: 'vendor', icon: '🧪', name: 'Benchling ELN', vendor: 'Benchling'},
  {pillar: 'pillar-f', category: 'vendor', icon: '🧪', name: 'STARLIMS', vendor: 'Abbott'},
  {pillar: 'pillar-f', category: 'vendor', icon: '🧪', name: 'LabWare LIMS', vendor: 'LabWare'},
  {pillar: 'pillar-f', category: 'specialty', icon: '🤖', name: 'Tecan Automation', vendor: 'Tecan'},
  {pillar: 'pillar-f', category: 'specialty', icon: '🤖', name: 'Hamilton Robotics', vendor: 'Hamilton'},
  // Pharmacovigilance
  {pillar: 'pillar-f', category: 'vendor', icon: '💊', name: 'Oracle Argus', vendor: 'Oracle'},
  {pillar: 'pillar-f', category: 'vendor', icon: '💊', name: 'ArisGlobal SafetyEZ', vendor: 'ArisGlobal'},
  {pillar: 'pillar-f', category: 'vendor', icon: '💊', name: 'Veeva Vault Safety', vendor: 'Veeva Systems'},
  {pillar: 'pillar-f', category: 'foundations', icon: '💊', name: 'DIA Safety & Pharmacovigilance Certificate', vendor: 'DIA'},
  {pillar: 'pillar-f', category: 'foundations', icon: '💊', name: 'Global Pharmacovigilance Professional (GPPC)', vendor: 'ISoP'},
  {pillar: 'pillar-f', category: 'specialty', icon: '📈', name: 'Signal Detection & PV Data Mining', vendor: 'IGMPI'},
  // Regulatory Affairs
  {pillar: 'pillar-f', category: 'foundations', icon: '⚖️', name: 'RAC Regulatory', vendor: 'RAPS'},
  {pillar: 'pillar-f', category: 'specialty', icon: '📄', name: 'eCTD Publishing', vendor: 'FDA'},
  {pillar: 'pillar-f', category: 'specialty', icon: '📄', name: 'IDMP Standards', vendor: 'ISO'},
  {pillar: 'pillar-f', category: 'specialty', icon: '📄', name: 'FDA 21 CFR Part 11', vendor: 'FDA'},
  {pillar: 'pillar-f', category: 'specialty', icon: '🌍', name: 'EMA Submissions', vendor: 'EMA'},
  // Bioinformatics & Genomics
  {pillar: 'pillar-f', category: 'specialty', icon: '🧬', name: 'NIH Bioinformatics', vendor: 'NIH/NCBI'},
  {pillar: 'pillar-f', category: 'specialty', icon: '🧬', name: 'Illumina Sequencing', vendor: 'Illumina'},
  {pillar: 'pillar-f', category: 'specialty', icon: '🧬', name: 'Genomic Data Analyst', vendor: 'JHU/Coursera'},
  {pillar: 'pillar-f', category: 'specialty', icon: '🧬', name: 'NVIDIA Clara Genomics', vendor: 'NVIDIA'},
  {pillar: 'pillar-f', category: 'specialty', icon: '🧬', name: 'Nextflow Pipelines', vendor: 'Seqera Labs'},
  {pillar: 'pillar-f', category: 'specialty', icon: '🧬', name: 'Galaxy Platform', vendor: 'Galaxy Project'},
  {pillar: 'pillar-f', category: 'specialty', icon: '🧬', name: '10x Genomics', vendor: '10x Genomics'},
  {pillar: 'pillar-f', category: 'cloud', icon: '☁️', name: 'AWS HealthOmics', vendor: 'Amazon'},
  {pillar: 'pillar-f', category: 'cloud', icon: '☁️', name: 'Google Genomics', vendor: 'Google'},
  // Real-World Evidence
  {pillar: 'pillar-f', category: 'foundations', icon: '📊', name: 'ISPOR HEOR', vendor: 'ISPOR'},
  {pillar: 'pillar-f', category: 'specialty', icon: '📊', name: 'RWE Analytics', vendor: 'Duke/Coursera'},
  {pillar: 'pillar-f', category: 'vendor', icon: '🏢', name: 'Flatiron Health', vendor: 'Roche'},
  {pillar: 'pillar-f', category: 'vendor', icon: '🏢', name: 'IQVIA RWE', vendor: 'IQVIA'},
  {pillar: 'pillar-f', category: 'vendor', icon: '🏢', name: 'TriNetX Platform', vendor: 'TriNetX'},
  // Additional Advanced Certifications
  {pillar: 'pillar-f', category: 'specialty', icon: '🔬', name: 'GMP/GLP Compliance', vendor: 'FDA/EMA'},
  {pillar: 'pillar-f', category: 'specialty', icon: '🔬', name: 'Clinical SAS Programmer', vendor: 'SAS Institute'},
  {pillar: 'pillar-f', category: 'specialty', icon: '🔬', name: 'Clinical Trial Manager', vendor: 'PMI'},
  {pillar: 'pillar-f', category: 'specialty', icon: '📑', name: 'RAC (Regulatory Affairs Certification)', vendor: 'RAPS'},
  // Compliance additions (ISO 15189:2022 / CAP 15189)
  {pillar: 'pillar-e', category: 'foundations', icon: '🧪', name: 'ISO 15189 Lab Accreditation Implementation', vendor: 'ISO'},
  {pillar: 'pillar-e', category: 'specialty', icon: '🧪', name: 'CAP 15189 Consultant Prep Program', vendor: 'CAP'},
];

// Logo mapping - maps vendor names to logo files
const logoMap = {
  'HL7 International': 'ihe.svg',
  'HIMSS': 'himss.svg',  // updated to real SVG (fallback to himss.png via onerror)
  'CompTIA': 'comptia.svg',
  'Epic Systems': 'epic.svg',  // updated to real SVG
  'Oracle Health': 'oracle.svg',
  'Oracle': 'oracle.svg',
  'Meditech': 'meditech.svg',  // real logo
  'Allscripts': 'allscripts.svg',  // real logo
  'NextGen': 'nextgen.svg',  // real logo
  'athenahealth': 'athenahealth.svg',  // real logo
  'Amazon': 'aws.svg',
  'Microsoft': 'microsoft.svg',
  'Google': 'google.svg',
  'Teladoc': 'teladoc.svg',  // real logo
  'Doxy.me': 'doxyme.svg',  // updated to real SVG
  'Sectra/GE': 'gehealthcare.svg',
  'Philips': 'philips.png',
  'AAHAM': 'aaham.png',  // updated to PNG
  'AAPC': 'aapc.svg',  // real logo
  'AHIMA': 'AHIMA.jpg',
  'HFMA': 'hfma.svg',  // real logo
  'Infor': 'infor.svg',  // real logo
  'Change Healthcare': 'changehealthcare.svg',  // real logo
  'ASHP': 'ashp.svg',  // real logo
  'AHA': 'aha.svg',  // real logo
  'Kronos': 'kronos.svg',  // real logo
  'GE Healthcare': 'gehealthcare.svg',
  'ETA International': 'eta.svg',
  'AAMI': 'aami.svg',  // real logo
  'Siemens': 'Siemens.svg',
  'Canon': 'canon.svg',  // real logo
  'Hologic': 'hologic.svg',  // real logo
  'ISO': 'ISO13485.png',
  'IEC': 'ieee.svg',
  'AAPM': 'aapm.svg',  // updated to real SVG
  'SAS Institute': 'sas.svg',  // real logo
  'Tableau': 'tableau.svg',  // real logo
  'NVIDIA': 'nvidia.svg',
  'IBM': 'ibm.svg',  // real logo
  'Health Catalyst': 'healthcatalyst.svg',  // real logo
  'ISC²': 'isc2.svg',
  'IAPP': 'iapp.svg',
  'HITRUST': 'hitrust.svg',  // updated to real SVG
  'NIST': 'nist.svg',  // real logo
  'DRII': 'drii.jpg',  // updated to JPG
  'HHS': 'hhs.svg',  // real logo
  'EU Commission': 'eu.svg',  // real logo
  'TJC': 'tjc.svg',  // real logo
  'CAP': 'cap.svg',  // real logo
  'ACRP': 'acrp.webp',  // updated to WebP
  'SCDM': 'scdm.png',  // updated to PNG
  'SOCRA': 'socra.jpg',  // updated to JPG
  'ICH': 'ich.svg',  // real logo
  'Veeva Systems': 'veeva.svg',  // real logo
  'Medidata': 'medidata.svg',  // real logo
  'Medrio': 'medrio.jpeg',  // updated to JPEG
  'eClinical': 'eClinical.webp',  // updated to WebP
  'LabVantage': 'labvantage.svg',  // real logo
  'Thermo Fisher': 'thermofisher.svg',  // real logo
  'Benchling': 'benchling.png',  // updated to PNG
  'Abbott': 'abbott.svg',  // real logo
  'LabWare': 'labware.jpeg',  // updated to JPEG
  'Tecan': 'tecan.svg',  // real logo
  'Hamilton': 'hamilton.svg',  // real logo
  'ArisGlobal': 'arisglobal.svg',  // real logo
  'DSCI': 'placeholder-dsci.svg',  // deprecated in favor of DIA/ISoP/IGMPI
  'Drug Safety': 'drugsafety.svg',  // generic
  'DIA': 'placeholder-dia.svg',
  'ISoP': 'placeholder-isop.svg',
  'IGMPI': 'placeholder-signalpv.svg',
  'RAPS': 'placeholder-raps.svg',  // still placeholder
  'FDA': 'fda.svg',  // real logo
  'EMA': 'ema.svg',  // real logo
  'NIH/NCBI': 'nih.svg',  // real logo
  'Illumina': 'illumina.svg',  // real logo
  'JHU/Coursera': 'Coursera-JHU.jpg',  // updated to JPG
  'Seqera Labs': 'seqera.svg',  // real logo
  'Galaxy Project': 'galaxyproject.jpg',  // updated to JPG
  '10x Genomics': '10xgenomics.svg',  // real logo
  'ISPOR': 'ispor.png',  // updated to PNG
  'Duke/Coursera': 'dukesquare_blue.png',  // updated to PNG
  'Roche': 'roche.svg',  // real logo
  'IQVIA': 'iqvia.svg',  // real logo
  'TriNetX': 'trinetx.svg',  // real logo
  'FDA/EMA': 'fda.svg',
  'PMI': 'pmi.svg',
  'RAPS': 'rac.png'
  , 'CLSI': 'placeholder-clsi.svg'
};

// Detailed certification information with roles
const certDetails = {
  // PILLAR A: Clinical Systems & HCIT
  'HL7 Interface Specialist': {
    description: 'Master the HL7 messaging standard for healthcare data exchange. Build and maintain interfaces between clinical systems.',
    competencies: ['HL7 v2.x message structure', 'Interface engine configuration', 'ADT, ORM, ORU message types', 'Error handling & troubleshooting'],
    path: 'Foundation courses → HL7 v2.x deep dive → Interface engine hands-on → Certification exam',
    roles: 'Clinical Integration Analyst, Interoperability Engineer, EHR Interface Specialist',
    value: 'Critical for clinical integration projects. High demand in hospital IT departments.',
    duration: '3-4 months',
    level: 'Professional'
  },
  'FHIR Developer': {
    description: 'Build modern API-based healthcare integrations using FHIR (Fast Healthcare Interoperability Resources) standard.',
    competencies: ['FHIR resources & profiles', 'RESTful API development', 'OAuth2 security', 'SMART on FHIR apps'],
    path: 'HL7 fundamentals → FHIR specification training → API development practice → Certification',
    roles: 'Interoperability Engineer, FHIR Integration Developer, Healthcare API Specialist',
    value: 'Next-generation interoperability standard. Essential for modern health tech platforms.',
    duration: '4-5 months',
    level: 'Advanced'
  },
  'CAHIMS': {
    description: 'Certified Associate in Healthcare Information and Management Systems - foundation credential for HCIT professionals.',
    competencies: ['Healthcare environment', 'HIT systems & applications', 'Privacy & security', 'Administration & management'],
    path: 'HIMSS learning modules → Study preparation → CAHIMS exam',
    roles: 'EHR Systems Specialist, Clinical Application Support Lead, Healthcare IT Coordinator',
    value: 'Industry-recognized foundation. Opens doors to healthcare IT career paths.',
    duration: '2-3 months',
    level: 'Associate'
  },
  'Epic Ambulatory': {
    description: 'Implement and optimize Epic\'s ambulatory EHR platform for outpatient care settings.',
    competencies: ['Epic Chronicles configuration', 'Workflow design', 'Template building', 'SmartSets and SmartPhrases'],
    path: 'Epic University training → Proficiency certification → Application coordinator role',
    roles: 'EHR Systems Specialist, Epic Ambulatory Analyst, Clinical Application Coordinator',
    value: 'Epic certified professionals command premium salaries. Essential for Epic implementations.',
    duration: '6-8 weeks',
    level: 'Application Certified'
  },
  'Epic Inpatient': {
    description: 'Deploy and support Epic\'s inpatient clinical documentation and order management systems.',
    competencies: ['Inpatient workflows', 'Order management', 'Clinical documentation', 'Care coordination tools'],
    path: 'Epic University → Inpatient modules → Proficiency exams → Implementation experience',
    roles: 'EHR Systems Specialist, Inpatient Clinical Analyst, Hospital IT Coordinator',
    value: 'Core Epic credential for acute care hospitals. High-value specialization.',
    duration: '6-8 weeks',
    level: 'Application Certified'
  },
  'Oracle Millennium': {
    description: 'Deploy and maintain Oracle Health\'s Millennium EHR platform across clinical environments.',
    competencies: ['Millennium architecture', 'CCL scripting', 'Workflow configuration', 'Interface management'],
    path: 'Oracle Health training → Hands-on configuration → Certification exam',
    roles: 'EHR Systems Specialist, Cerner/Oracle Analyst, Clinical Systems Engineer',
    value: 'Major EHR platform with global installations. Strong career opportunities.',
    duration: '8-10 weeks',
    level: 'Professional'
  },
  'RAC (Regulatory Affairs Certification)': {
    description: 'Gold-standard credential by RAPS validating expertise in global regulatory pathways (US, EU, international), submissions, and lifecycle management for medical products.',
    competencies: [
      'US FDA and EU EMA regulatory frameworks',
      'Dossier compilation (eCTD)',
      'Clinical/CMC/labeling requirements',
      'Post-market safety & vigilance coordination',
      'Inspection readiness & authority interactions'
    ],
    path: 'Regulatory foundations → Region-specific pathways → Submission practice (eCTD) → Mock review boards → RAC exam',
    roles: 'Regulatory Affairs Associate, PV-Regulatory Interface Specialist, Submission Data Coordinator',
    value: 'Directly supports compliant submissions and cross-functional delivery between PV, clinical, and regulatory.',
    duration: '3-6 months',
    level: 'Professional'
  },
  
  // PILLAR B: Revenue & Admin
  'CRCS': {
    description: 'Certified Revenue Cycle Specialist - comprehensive RCM knowledge from patient access to collections.',
    competencies: ['Patient registration', 'Charge capture', 'Claims submission', 'Denial management', 'Payment posting'],
    path: 'AAHAM study materials → RCM workflows training → CRCS exam',
    roles: 'RCM Analyst, Coding & Billing Optimization Lead, Revenue Cycle Coordinator',
    value: 'Foundational RCM credential. Essential for hospital finance operations.',
    duration: '3-4 months',
    level: 'Specialist'
  },
  'CPC Coder': {
    description: 'Certified Professional Coder - expert in CPT, ICD-10-CM, and HCPCS coding for physician services.',
    competencies: ['CPT procedural coding', 'ICD-10-CM diagnosis coding', 'Medical terminology', 'Compliance guidelines'],
    path: 'Medical terminology → Anatomy & physiology → Coding practice → CPC exam',
    roles: 'Medical Coder, Coding & Billing Specialist, Claims Recovery Specialist',
    value: 'Gold standard for outpatient coding. High demand across all healthcare settings.',
    duration: '4-6 months',
    level: 'Certified'
  },
  
  // PILLAR C: Biomedical & Imaging
  'ETA CET': {
    description: 'Certified Electronics Technician - foundation for biomedical equipment maintenance and repair.',
    competencies: ['Electronics fundamentals', 'Circuit analysis', 'Troubleshooting methods', 'Safety protocols'],
    path: 'Electronics basics → ETA study modules → CET exam → Field practice',
    roles: 'Biomedical Field Engineer, Clinical Equipment Technician, Medical Device Specialist',
    value: 'Entry-level biomedical certification. Foundation for advanced BME credentials.',
    duration: '3-6 months',
    level: 'Technician'
  },
  'ETA BMD': {
    description: 'Biomedical Equipment Technician - specialized maintenance and repair of medical devices.',
    competencies: ['Medical device principles', 'Preventive maintenance', 'Calibration procedures', 'Safety testing'],
    path: 'CET certification → Medical device training → BMD exam → Clinical environment experience',
    roles: 'Biomedical Field Engineer, Clinical Equipment Uptime Lead, Medical Device Specialist',
    value: 'Core BME credential. Required for hospital biomedical departments.',
    duration: '4-6 months',
    level: 'Professional'
  },
  'ETA BIET': {
    description: 'Biomedical Imaging Equipment Technician - advanced imaging modality maintenance and support.',
    competencies: ['CT/MRI principles', 'X-ray physics', 'Ultrasound technology', 'PACS integration', 'QA procedures'],
    path: 'BMD certification → Imaging modality training → BIET exam → OEM specialized training',
    roles: 'Imaging Systems Specialist, Radiology Equipment Engineer, Modality Support Technician',
    value: 'Premium imaging specialization. High demand in diagnostic imaging centers.',
    duration: '6-8 months',
    level: 'Advanced Specialist'
  },
  
  // PILLAR D: Data & AI
  'Healthcare Analytics': {
    description: 'Comprehensive healthcare data analytics - from clinical metrics to population health insights.',
    competencies: ['Healthcare data models', 'Statistical analysis', 'Visualization tools', 'Outcome measurement'],
    path: 'Data fundamentals → Healthcare analytics training → Project portfolio → Certification',
    roles: 'Clinical Quality Analyst, Outcomes Data Lead, Healthcare Data Analyst',
    value: 'Growing field as hospitals shift to value-based care. Strong analytical skills premium.',
    duration: '4-6 months',
    level: 'Professional'
  },
  'NVIDIA Clara AI': {
    description: 'AI-powered medical imaging and genomics platform - deploy deep learning models in healthcare.',
    competencies: ['Medical imaging AI', 'Model deployment', 'GPU acceleration', 'Clara SDK', 'Federated learning'],
    path: 'ML fundamentals → Medical imaging basics → Clara training → Project implementation',
    roles: 'Healthcare AI Analyst, Medical Imaging AI Specialist, Clinical AI Engineer',
    value: 'Cutting-edge AI in healthcare. Premium specialization for tech-forward organizations.',
    duration: '3-5 months',
    level: 'Advanced AI/ML'
  },
  
  // PILLAR E: Compliance & Security
  'ISO 13485 Lead': {
    description: 'Lead auditor for ISO 13485 Quality Management Systems for medical devices.',
    competencies: ['ISO 13485 standard', 'QMS documentation', 'Audit methodology', 'Corrective actions', 'Risk management'],
    path: 'Quality fundamentals → ISO 13485 training → Lead auditor course → Audit practice',
    roles: 'Clinical Quality & Compliance Lead, Device Governance Officer, QMS Auditor',
    value: 'Critical for medical device manufacturers and hospitals. Regulatory requirement.',
    duration: '5-7 months',
    level: 'Lead Auditor'
  },
  'HCISPP': {
    description: 'HealthCare Information Security and Privacy Practitioner - specialized cybersecurity for healthcare.',
    competencies: ['Healthcare regulations', 'HIPAA compliance', 'Risk assessment', 'Incident response', 'Security controls'],
    path: 'InfoSec fundamentals → Healthcare privacy training → HCISPP exam → Practical experience',
    roles: 'Healthcare Security Analyst, Privacy Officer, Clinical Continuity Lead',
    value: 'Essential as healthcare faces increasing cyber threats. High-demand specialization.',
    duration: '4-6 months',
    level: 'Professional'
  },
  
  // PILLAR F: Life Sciences
  'ACRP CRC': {
    description: 'Certified Clinical Research Coordinator - manage clinical trial operations and regulatory compliance.',
    competencies: ['GCP guidelines', 'Protocol management', 'Participant recruitment', 'Regulatory documentation', 'Site coordination'],
    path: 'Clinical research basics → GCP training → Study coordination experience → CRC exam',
    roles: 'Clinical Trial Coordinator, Study Site Manager, Research Operations Specialist',
    value: 'Core credential for clinical trial sites. Required by many CROs and sponsors.',
    duration: '3-5 months',
    level: 'Coordinator'
  },
  'SCDM CCDM': {
    description: 'Certified Clinical Data Manager - oversee EDC systems, data quality, and database management for trials.',
    competencies: ['EDC platform management', 'Data cleaning procedures', 'Query management', 'CDISC standards', 'Database design'],
    path: 'Clinical trial fundamentals → Data management training → EDC hands-on → CCDM exam',
    roles: 'Clinical Data Manager, EDC Administrator, Trial Data Operations Lead',
    value: 'High-demand role in pharma/biotech. Critical for trial data integrity.',
    duration: '4-6 months',
    level: 'Manager'
  },
  'Veeva Vault CTMS': {
    description: 'Master Veeva\'s Clinical Trial Management System for study planning, tracking, and oversight.',
    competencies: ['CTMS configuration', 'Study startup workflows', 'Site & vendor management', 'Milestone tracking'],
    path: 'Veeva University → CTMS modules → Configuration practice → Certification',
    roles: 'Clinical Systems Lead, CTMS Administrator, Trial Operations Technologist',
    value: 'Leading CTMS platform in pharma. Strong demand for Veeva specialists.',
    duration: '6-8 weeks',
    level: 'Platform Certified'
  },
  'Medidata Rave EDC': {
    description: 'Industry-standard EDC platform - configure studies, manage data capture, ensure data quality.',
    competencies: ['Rave Architect', 'Edit check programming', 'Form design', 'Data review workflows'],
    path: 'Medidata training → Rave configuration → Study build projects → Certification',
    roles: 'Clinical Data Manager, EDC Configuration Specialist, Data Operations Lead',
    value: 'Most widely used EDC globally. Essential for CRO and sponsor data teams.',
    duration: '6-8 weeks',
    level: 'Certified'
  },
  'LabVantage LIMS': {
    description: 'Laboratory Information Management System for R&D labs - sample tracking, workflows, and compliance.',
    competencies: ['LIMS configuration', 'Sample lifecycle management', 'Instrument integration', 'Compliance reporting'],
    path: 'Lab operations basics → LabVantage training → Configuration projects → Certification',
    roles: 'Lab Informatics Engineer, LIMS Administrator, R&D Workflow Analyst',
    value: 'Critical for pharma/biotech R&D labs. Ensures compliance and traceability.',
    duration: '2-4 months',
    level: 'Administrator'
  },
  'Oracle Argus': {
    description: 'Global pharmacovigilance system for adverse event management and safety reporting.',
    competencies: ['Case intake & triage', 'Medical coding (MedDRA)', 'Signal detection', 'Regulatory reporting'],
    path: 'Drug safety fundamentals → Argus training → Case processing → Certification',
    roles: 'Pharmacovigilance Systems Specialist, Drug Safety Data Analyst, Safety Operations Lead',
    value: 'Industry-standard safety platform. Required for pharma medical affairs.',
    duration: '8-10 weeks',
    level: 'System Specialist'
  },
  'NIH Bioinformatics': {
    description: 'Bioinformatics tools and databases from NIH/NCBI - genomics, proteomics, and molecular biology data analysis.',
    competencies: ['NCBI databases', 'BLAST searches', 'Sequence analysis', 'Gene expression analysis'],
    path: 'Molecular biology basics → NIH training modules → Hands-on analysis → Certification',
    roles: 'Bioinformatics Analyst, Genomics Data Scientist, Computational Biology Specialist',
    value: 'Foundation for genomics research. Free NIH resources widely adopted.',
    duration: '3-4 months',
    level: 'Analyst'
  },
  'Illumina Sequencing': {
    description: 'Next-generation sequencing platform operation, data QC, and analysis workflows.',
    competencies: ['NGS library prep', 'Sequencing run management', 'BaseSpace analysis', 'Data quality assessment'],
    path: 'NGS fundamentals → Illumina platform training → Hands-on runs → Certification',
    roles: 'Genomics Technologist, NGS Operations Specialist, Sequencing Core Manager',
    value: 'Illumina dominates NGS market. Essential for genomics core facilities.',
    duration: '2-3 months',
    level: 'Operator'
  }
};

// Extend details for newly added PV/Compliance certifications
Object.assign(certDetails, {
  'DIA Safety & Pharmacovigilance Certificate': {
    description: 'Multi-module PV program covering AE case processing, signal detection, pharmacoepidemiology, aggregate reporting, and inspection readiness.',
    competencies: ['AE/SAE intake & triage', 'MedDRA coding & narratives', 'Signal detection methods', 'Aggregate reports (DSUR/PBRER/RMP)', 'Regulatory safety submissions', 'Inspection readiness'],
    path: 'PV fundamentals → Case processing workshops → Signal analytics module → Aggregate reporting → Final assessment',
    roles: 'Pharmacovigilance Systems Specialist, Drug Safety Data Analyst, Safety Operations Lead, Signal Detection Lead',
    value: 'Directly supports analytics-driven PV operations and audit readiness.',
    duration: '3-5 months',
    level: 'Professional'
  },
  'Global Pharmacovigilance Professional (GPPC)': {
    description: 'ISoP competency-based credential for the end-to-end pharmacovigilance lifecycle: case intake, signal management, risk evaluation, regulatory liaison.',
    competencies: ['Global PV regulations', 'Case workflow governance', 'Signal validation & prioritization', 'Risk management planning', 'Audit preparedness'],
    path: 'PV foundations → Competency mapping → Practical simulations → Regulatory alignment → Certification',
    roles: 'Signal Detection Lead, PV Operations Supervisor, Risk Management Specialist',
    value: 'Positions professionals for leadership in harmonized safety environments.',
    duration: '4-6 months',
    level: 'Advanced'
  },
  'Signal Detection & PV Data Mining': {
    description: 'Specialization in quantitative safety signal detection using disproportionality methods and large AE datasets.',
    competencies: ['ROR/PRR/IC metrics', 'FAERS/EudraVigilance data workflows', 'Threshold & triage definition', 'PV analytics automation', 'Medical review dashboards'],
    path: 'PV foundation → Statistical methods → Tool training → Case studies → Capstone',
    roles: 'Drug Safety Data Analyst, Signal Detection Lead, Medical Affairs Analytics Technologist',
    value: 'Elevates proactive risk identification and inspection readiness.',
    duration: '2-4 months',
    level: 'Specialty'
  },
  'ISO 15189:2022 Lab Accreditation Implementation': {
    description: 'Implements a risk-based, POCT-inclusive ISO 15189:2022 laboratory quality & competence management system (QMS, traceability, governance).',
    competencies: ['Risk-based QMS design', 'POCT governance & integration', 'Equipment calibration & metrological traceability', 'Sample handling & chain-of-custody', 'Competence & training records', 'Internal audits & proficiency testing', 'CAPA management'],
    path: 'Gap analysis → QMS architecture (2022 alignment) → Method verification → POCT inclusion → Internal audit cycle → Accreditation readiness pack',
    roles: 'Biomedical QA Engineer, ISO Compliance Specialist, Laboratory Systems Technologist',
    value: 'Aligns labs with the current international standard; improves audit outcomes and patient safety metrics.',
    duration: '4-6 months',
    level: 'Implementation'
  },
  'EU IVDR Compliance & Diagnostic Data Readiness': {
    description: 'Readiness program for EU In Vitro Diagnostic Regulation (IVDR) — technical documentation, performance evaluation, vigilance data, and lifecycle traceability.',
    competencies: ['Classification & conformity assessment', 'Performance evaluation & analytical validity', 'Post-market surveillance & vigilance', 'UDI & labelling data integrity', 'Technical documentation compilation', 'Risk & quality integration (ISO 13485 linkage)'],
    path: 'IVDR scope & gap mapping → Technical file build → Performance study data alignment → PMS & vigilance workflows → Audit simulation',
    roles: 'Regulatory Affairs Coordinator, Laboratory Systems Technologist, ISO Compliance Specialist',
    value: 'Accelerates IVDR readiness, reducing market access risk and remediation cost.',
    duration: '3-5 months',
    level: 'Regulatory Specialist'
  },
  'CAP 15189 Consultant Prep Program': {
    description: 'Preparation track to advise labs pursuing CAP 15189, aligning CAP requirements with ISO 15189 structures.',
    competencies: ['CAP 15189 interpretation', 'QMS crosswalk (CAP vs ISO)', 'Evidence & metrics packaging', 'Proficiency testing alignment', 'Mock audits & remediation'],
    path: 'Standards crosswalk → QMS alignment → Mock audits → Remediation plan → Advisory setup',
    roles: 'Regulatory Affairs Coordinator, Accreditation Readiness Officer, ISO Compliance Specialist',
    value: 'Enables structured accreditation readiness services for hospital/regional labs.',
    duration: '3-4 months',
    level: 'Consultant'
  }
  , 'ISO 15189:2022–aligned Training: Medical Lab Quality & Competence Systems': {
    description: 'Structured training pathway implementing the risk-based, POCT-inclusive ISO 15189:2022 laboratory quality & competence framework (QMS, traceability, records).',
    competencies: ['Risk-based QMS principles', 'Competence & training matrix design', 'POCT governance integration', 'Metrological traceability & equipment records', 'Method verification vs validation fundamentals', 'Internal audits & proficiency testing', 'CAPA & continual improvement'],
    path: 'Gap mapping → QMS core modules → Competence & POCT integration → Method verification labs → Internal audit practicum → Readiness assessment',
    roles: 'Biomedical QA Engineer, ISO Compliance Specialist, Laboratory Systems Technologist',
    value: 'Accelerates adoption of the 2022 standard, lowering accreditation findings and strengthening patient safety indicators.',
    duration: '3-5 months',
    level: 'Implementation Training'
  }
  , 'CLSI Method Evaluation & Verification': {
    description: 'Applied program for CLSI EP guidelines: method performance characterization, precision, accuracy, reportable range, and ongoing verification cycles.',
    competencies: ['CLSI EP05 precision studies', 'CLSI EP15 verification protocols', 'Linearity & analytical measurement range', 'Bias & accuracy assessment', 'Reference interval establishment', 'Carryover & interference testing', 'Documentation & QC trending'],
    path: 'CLSI fundamentals → EP guideline workshops → Method study design → Data analysis → Verification pack assembly',
    roles: 'Biomedical QA Engineer, Laboratory Systems Technologist, ISO Compliance Specialist',
    value: 'Ensures statistically robust method performance evidence supporting ISO 15189:2022 and IVDR technical documentation.',
    duration: '2-3 months',
    level: 'Specialty'
  }
});

// State management
let currentPillar = 'all';
let currentCategory = 'all';
let searchTerm = '';
let currentPage = 1;
let itemsPerPage = 24; // 8 columns × 3 rows

// Initialize
function initCertificationMatrix() {
  calculateItemsPerPage();
  renderCertifications();
  setupEventListeners();
  window.addEventListener('resize', () => {
    calculateItemsPerPage();
    renderCertifications();
  });
}

// Calculate items per page based on viewport
function calculateItemsPerPage() {
  const width = window.innerWidth;
  let columns;
  if (width <= 480) columns = 4;
  else if (width <= 768) columns = 6;
  else if (width <= 1024) columns = 7;
  else columns = 8;
  itemsPerPage = columns * 3; // 3 rows
}

// Get logo path
function getLogoPath(vendor) {
  const logo = logoMap[vendor] || 'default-logo.svg';
  return `Backups/vendor-logos/${logo}`;
}

// Attempt fallbacks across common extensions if a logo fails to load
const LOGO_EXT_ORDER = ['svg', 'png', 'jpg', 'jpeg', 'webp'];
function fallbackLogo(imgEl) {
  try {
    const src = imgEl.getAttribute('src') || '';
    const dot = src.lastIndexOf('.');
    const base = dot > -1 ? src.substring(0, dot) : src;
    const currentExt = dot > -1 ? src.substring(dot + 1).toLowerCase() : '';

    if (!imgEl.dataset.logoBase) {
      imgEl.dataset.logoBase = base;
      // Start after current ext if it is in the order
      const idx = LOGO_EXT_ORDER.indexOf(currentExt);
      imgEl.dataset.logoAttempt = String(Math.max(idx + 1, 0));
    }

    let attempt = parseInt(imgEl.dataset.logoAttempt || '0', 10);
    while (attempt < LOGO_EXT_ORDER.length) {
      const nextSrc = `${imgEl.dataset.logoBase}.${LOGO_EXT_ORDER[attempt]}`;
      attempt += 1;
      imgEl.dataset.logoAttempt = String(attempt);
      // Try next extension
      imgEl.onerror = () => fallbackLogo(imgEl);
      imgEl.src = nextSrc;
      return;
    }

    // All attempts failed — hide image and show icon fallback
    imgEl.style.display = 'none';
    const iconEl = imgEl.nextElementSibling;
    if (iconEl) iconEl.style.display = 'block';
  } catch (e) {
    // As a last resort, hide and show icon
    imgEl.style.display = 'none';
    const iconEl = imgEl.nextElementSibling;
    if (iconEl) iconEl.style.display = 'block';
  }
}

// Render certifications with pagination
function renderCertifications() {
  const grid = document.getElementById('certificationGrid');
  const filteredCerts = certifications.filter(cert => {
    const pillarMatch = currentPillar === 'all' || cert.pillar === currentPillar;
    const categoryMatch = currentCategory === 'all' || cert.category === currentCategory;
    const searchMatch = searchTerm === '' || 
      cert.name.toLowerCase().includes(searchTerm.toLowerCase()) ||
      cert.vendor.toLowerCase().includes(searchTerm.toLowerCase());
    
    return pillarMatch && categoryMatch && searchMatch;
  });

  const totalPages = Math.ceil(filteredCerts.length / itemsPerPage);
  
  // Adjust current page if needed
  if (currentPage > totalPages && totalPages > 0) {
    currentPage = totalPages;
  }
  if (currentPage < 1) currentPage = 1;

  const startIdx = (currentPage - 1) * itemsPerPage;
  const endIdx = startIdx + itemsPerPage;
  const pageCerts = filteredCerts.slice(startIdx, endIdx);

  if (filteredCerts.length === 0) {
    grid.innerHTML = `
      <div class="cert-empty-state" style="grid-column: 1 / -1;">
        <div class="cert-empty-state-icon">🔍</div>
        <div class="cert-empty-state-text">No certifications found</div>
        <p style="color: #9ca3af; margin-top: 8px;">Try adjusting your filters or search term</p>
      </div>
    `;
  } else {
    grid.innerHTML = pageCerts.map((cert, idx) => `
      <div class="cert-badge" data-pillar="${cert.pillar}" data-category="${cert.category}" data-cert-index="${startIdx + idx}">
        <img src="${getLogoPath(cert.vendor)}" alt="${cert.vendor} logo" class="cert-badge-logo" loading="lazy" onerror="fallbackLogo(this)">
        <span class="cert-badge-icon" style="display: none;">${cert.icon}</span>
        <div class="cert-badge-name">${cert.name}</div>
        <div class="cert-badge-vendor">${cert.vendor}</div>
        <span class="cert-badge-category">${getPillarLabel(cert.pillar)}</span>
      </div>
    `).join('');

    // Add click handlers for modal
    document.querySelectorAll('.cert-badge').forEach((badge, idx) => {
      badge.addEventListener('click', () => {
        const certIndex = parseInt(badge.dataset.certIndex);
        openCertModal(filteredCerts[certIndex]);
      });
    });
  }

  // Update count and pagination
  document.getElementById('certCount').textContent = filteredCerts.length;
  updatePagination(totalPages);
}

// Update pagination controls
function updatePagination(totalPages) {
  document.getElementById('currentPage').textContent = currentPage;
  document.getElementById('totalPages').textContent = totalPages || 1;
  
  const prevBtn = document.getElementById('prevPage');
  const nextBtn = document.getElementById('nextPage');
  
  prevBtn.disabled = currentPage <= 1;
  nextBtn.disabled = currentPage >= totalPages;
}

// Open certification modal
function openCertModal(cert) {
  const modal = document.getElementById('certModal');
  const details = certDetails[cert.name] || {
    description: `Industry-recognized certification for ${cert.name}. Validates expertise in ${cert.vendor} technologies and best practices.`,
    competencies: [
      'Core platform knowledge',
      'Configuration and administration',
      'Best practices and workflows',
      'Troubleshooting and optimization'
    ],
    path: 'Training courses → Hands-on experience → Certification exam → Ongoing education',
    roles: 'Healthcare IT Specialist, Systems Administrator, Technical Analyst',
    value: 'Enhances career prospects and validates professional expertise in healthcare technology.',
    duration: '2-6 months',
    level: 'Professional'
  };

  const modalLogoEl = document.getElementById('modalLogo');
  modalLogoEl.onerror = () => fallbackLogo(modalLogoEl);
  modalLogoEl.src = getLogoPath(cert.vendor);
  document.getElementById('modalTitle').textContent = cert.name;
  document.getElementById('modalVendor').textContent = cert.vendor;
  document.getElementById('modalDescription').textContent = details.description;
  document.getElementById('modalCompetencies').innerHTML = details.competencies.map(c => `<li>${c}</li>`).join('');
  document.getElementById('modalPath').textContent = details.path;
  document.getElementById('modalRoles').textContent = details.roles;
  document.getElementById('modalValue').textContent = details.value;
  document.getElementById('modalDuration').textContent = details.duration;
  document.getElementById('modalLevel').textContent = details.level;
  document.getElementById('modalPillar').textContent = getPillarLabel(cert.pillar);

  modal.classList.add('active');
  document.body.style.overflow = 'hidden';
}

// Close certification modal
function closeCertModal() {
  const modal = document.getElementById('certModal');
  modal.classList.remove('active');
  document.body.style.overflow = '';
}

// Get pillar label
function getPillarLabel(pillar) {
  const labels = {
    'pillar-a': 'HCIT',
    'pillar-b': 'Revenue',
    'pillar-c': 'Biomedical',
    'pillar-d': 'Data & AI',
    'pillar-e': 'Compliance',
    'pillar-f': 'Life Sciences'
  };
  return labels[pillar] || pillar;
}

// Setup event listeners
function setupEventListeners() {
  // Pillar tabs
  document.querySelectorAll('.cert-tab').forEach(tab => {
    tab.addEventListener('click', () => {
      document.querySelectorAll('.cert-tab').forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
      currentPillar = tab.dataset.pillar;
      currentPage = 1;
      renderCertifications();
    });
  });

  // Category filters
  document.querySelectorAll('.cert-filter-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.cert-filter-btn').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      currentCategory = btn.dataset.category;
      currentPage = 1;
      renderCertifications();
    });
  });

  // Search
  const searchInput = document.getElementById('certSearch');
  searchInput.addEventListener('input', (e) => {
    searchTerm = e.target.value;
    currentPage = 1;
    renderCertifications();
  });

  // Pagination
  document.getElementById('prevPage').addEventListener('click', () => {
    if (currentPage > 1) {
      currentPage--;
      renderCertifications();
      document.getElementById('certificationGrid').scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
  });

  document.getElementById('nextPage').addEventListener('click', () => {
    currentPage++;
    renderCertifications();
    document.getElementById('certificationGrid').scrollIntoView({ behavior: 'smooth', block: 'start' });
  });

  // Modal close
  document.querySelector('.cert-modal-close').addEventListener('click', closeCertModal);
  document.querySelector('.cert-modal-overlay').addEventListener('click', closeCertModal);
  
  // Close modal with Escape key
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && document.getElementById('certModal').classList.contains('active')) {
      closeCertModal();
    }
  });
}

// Initialize on page load
if (document.getElementById('certificationGrid')) {
  initCertificationMatrix();
}

  // Interactive Coverage Matrix: click cert name to reveal in grid and open modal
  document.querySelectorAll('.matrix-cert').forEach(span => {
    span.style.cursor = 'pointer';
    span.addEventListener('click', () => {
      const name = span.getAttribute('data-cert');
      const searchInput = document.getElementById('certSearch');
      if (searchInput) {
        searchInput.value = name;
        const event = new Event('input', { bubbles: true });
        searchInput.dispatchEvent(event);
        // Wait a tick for render, then open the first matching cert modal
        setTimeout(() => {
          const grid = document.getElementById('certificationGrid');
          const match = Array.from(grid.querySelectorAll('.cert-badge')).find(b =>
            b.querySelector('.cert-badge-name')?.textContent.trim() === name
          );
          if (match) {
            match.click();
            grid.scrollIntoView({ behavior: 'smooth', block: 'start' });
          }
        }, 50);
      }
    });
  });

  // Phase compare toggle (simple highlight of timeline cards)
  const addPhaseToggle = () => {
    const journey = document.getElementById('training-journey');
    if (!journey) return;
    const btn = document.createElement('button');
    btn.className = 'btn-outline';
    btn.textContent = 'Toggle Phase Highlight';
    btn.style.margin = '8px auto 0';
    btn.style.display = 'block';
    btn.addEventListener('click', () => {
      journey.querySelectorAll('.journey-timeline .card').forEach(card => {
        card.classList.toggle('highlight');
      });
    });
    journey.querySelector('h2')?.after(btn);
  };
  addPhaseToggle();

  // =============================
  // Exportable Configuration JSON
  // =============================
  // Build roles, services, certifications mapping (simplified for external reuse)
  try {
    const medTechConfig = {
      generatedAt: new Date().toISOString(),
      pillars: ['HCIT','Revenue','Biomedical','Data & AI','Compliance','Life Sciences'],
      roles: [
        { name: 'EHR Specialist', lane: 'HCIT', primaryCerts: ['Epic Inpatient','Epic Ambulatory','HL7 Interface Specialist'] },
        { name: 'Interface Analyst', lane: 'HCIT', primaryCerts: ['HL7 Interface Specialist','FHIR Developer'] },
        { name: 'RCM Analyst', lane: 'Revenue', primaryCerts: ['CRCS','Epic Resolute'] },
        { name: 'Coding Specialist', lane: 'Revenue', primaryCerts: ['CPC Coder','CCS Coder'] },
        { name: 'Biomedical Tech', lane: 'Biomedical', primaryCerts: ['AAMI CBET','ETA CET'] },
        { name: 'Imaging Systems Specialist', lane: 'Biomedical', primaryCerts: ['Siemens CT Service','GE CT/MRI Service'] },
        { name: 'Clinical Quality Analyst', lane: 'Data & AI', primaryCerts: ['Healthcare Analytics','Power BI Healthcare'] },
        { name: 'Population Analytics Specialist', lane: 'Data & AI', primaryCerts: ['Healthcare Analytics','Epic Cogito Analytics'] },
        { name: 'Privacy Officer', lane: 'Compliance', primaryCerts: ['CHPS','ISO 27001 Lead'] },
        { name: 'Accreditation Readiness Officer', lane: 'Compliance', primaryCerts: ['ISO 15189:2022–aligned Training: Medical Lab Quality & Competence Systems','CAP 15189 Consultant Prep Program'] },
        { name: 'Clinical Data Manager', lane: 'Life Sciences', primaryCerts: ['Medidata Rave EDC','Veeva Vault CTMS'] },
        { name: 'Lab Informatics Engineer', lane: 'Life Sciences', primaryCerts: ['LabWare LIMS','Benchling ELN'] },
        { name: 'Regulatory Affairs Coordinator', lane: 'Life Sciences/Compliance', primaryCerts: ['RAC (Regulatory Affairs Certification)','EU IVDR Compliance & Diagnostic Data Readiness'] },
        { name: 'Biomedical QA Engineer', lane: 'Biomedical/Compliance', primaryCerts: ['ISO 15189:2022–aligned Training: Medical Lab Quality & Competence Systems','CLSI Method Evaluation & Verification'] },
        { name: 'ISO Compliance Specialist', lane: 'Compliance', primaryCerts: ['ISO 27001 Lead','ISO 13485 Lead'] },
        { name: 'Laboratory Systems Technologist', lane: 'Life Sciences/Biomedical', primaryCerts: ['LabWare LIMS','CLSI Method Evaluation & Verification'] }
      ],
      services: [
        { pillar: 'HCIT', name: 'Interoperability', roles: ['EHR Specialist','Interface Analyst'] },
        { pillar: 'Revenue', name: 'Revenue Cycle Optimization', roles: ['RCM Analyst','Coding Specialist'] },
        { pillar: 'Biomedical', name: 'Imaging Fleet Uptime', roles: ['Biomedical Tech','Imaging Systems Specialist','Biomedical QA Engineer'] },
        { pillar: 'Data & AI', name: 'Quality & Outcomes Analytics', roles: ['Clinical Quality Analyst','Population Analytics Specialist'] },
        { pillar: 'Compliance', name: 'Accreditation Readiness', roles: ['Accreditation Readiness Officer','ISO Compliance Specialist','Regulatory Affairs Coordinator'] },
        { pillar: 'Life Sciences', name: 'Clinical Trial Platforms', roles: ['Clinical Data Manager','Lab Informatics Engineer'] },
        { pillar: 'Life Sciences', name: 'Pharmacovigilance Analytics', roles: ['Regulatory Affairs Coordinator'] }
      ],
      certifications: certifications.map(c => ({ name: c.name, vendor: c.vendor, pillar: c.pillar, category: c.category }))
    };
    window.medTechConfig = medTechConfig;

    const copyBtn = document.getElementById('copyConfigBtn');
    const downloadBtn = document.getElementById('downloadConfigBtn');
    if (copyBtn) {
      copyBtn.addEventListener('click', () => {
        const text = JSON.stringify(medTechConfig, null, 2);
        navigator.clipboard.writeText(text).then(() => {
          copyBtn.textContent = 'Copied ✓';
          setTimeout(() => copyBtn.textContent = 'Copy JSON Config', 2000);
        }).catch(() => alert('Clipboard copy failed'));
      });
    }
    if (downloadBtn) {
      downloadBtn.addEventListener('click', () => {
        const blob = new Blob([JSON.stringify(medTechConfig, null, 2)], { type: 'application/json' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'medTechConfig.json';
        document.body.appendChild(a);
        a.click();
        setTimeout(() => {
          document.body.removeChild(a);
          URL.revokeObjectURL(url);
        }, 0);
      });
    }
  } catch (e) {
    console.warn('medTechConfig generation failed', e);
  }
</script>

<!-- Styles moved to assets/css/page/medical.css -->

</main>

<?php include 'footer.php'; ?>