<?php
$page_title = "Medical Technology — Investor Education Program";
$meta_description = "Become 1 of 100 Medical Technology Leaders. Build certified 1:50 teams delivering biomedical, telemedicine, healthcare IT, data analytics, compliance and managed services across hospitals, clinics, ministries, and payers.";
$og_title = $page_title;
$og_description = $meta_description;
$og_image = "https://invest.btheducationgroup.com/image/logo-og.png"; // update with final OG asset
$og_url = "https://invest.btheducationgroup.com/medical-technology.php";
?>
<?php include 'header.php'; ?>

<!-- ========================= -->
<!-- HERO / TOP SECTION        -->
<!-- ========================= -->
<header class="hero">
  <div class="hero-left">
    <h1>Empower. Heal. Transform.</h1>
    <h2 style="font-size:1.6em;font-weight:700;margin:10px 0 18px;line-height:1.2;">
      Medical Technology, Compliance &amp; Healthcare IT Leadership
    </h2>
    <p class="lead">
      Biomedical systems, telemedicine, analytics &amp; data governance — delivered through certified 1:50 pods aligned with ISO 13485, AHIMA &amp; ETA International standards.
    </p>
    <div class="cta-row">
      <a class="btn" href="#apply">Apply to Lead (1 of 100)</a>
      <a class="btn-outline" href="#partnership">Request Healthcare Partnership</a>
    </div>
    <div class="stats">
      <div class="stat">
        <div class="stat-value">44,321 USD</div>
        <div class="stat-label">Team-Building Commission</div>
      </div>
      <div class="stat">
        <div class="stat-value">2,127,372 USD</div>
        <div class="stat-label">Leader Annual Income Potential</div>
      </div>
      <div class="stat">
        <div class="stat-value">63,822 USD</div>
        <div class="stat-label">Member Annual Income Potential</div>
      </div>
    </div>
    <div class="trust-strip" style="margin-top:24px;font-size:15px;color:#1a365d;">
      Aligned with <strong>ETA International</strong> | <strong>AHIMA</strong> | <strong>ISO 13485</strong> | <strong>IAPP</strong> | <strong>IHE</strong> | <strong>WHO Digital Health Standards</strong>
    </div>
  </div>
  <div class="hero-right">
    <div class="card">
      <strong>Quick Apply — Medical Technology</strong>
      <form method="post" action="send-mail.php">
        <div class="field"><label>Full Name</label><input name="name" required></div>
        <div class="field"><label>Email</label><input name="email" type="email" required></div>
        <div class="field"><label>Phone</label><input name="phone" required></div>
        <div class="field"><label>I'm interested in</label>
          <select name="interest" required>
            <option value="">Select...</option>
            <option>Becoming a Team Leader (1 of 100)</option>
            <option>Joining a 1:50 Team</option>
            <option>Healthcare / Hospital Partnership</option>
          </select>
        </div>
        <input type="hidden" name="industry" value="Medical Technology">
        <input type="hidden" name="source" value="Quick Apply - Medical Technology">
        <button class="btn" type="submit">Submit</button>
      </form>
    </div>
  </div>
</header>

<!-- local hero styling -->
<style>
.medtech-hero {
  background: linear-gradient(180deg, var(--brand), #153e59);
  color:#fff;
  padding:36px;
  border-radius:8px;
  margin-bottom:40px;
}
.medtech-hero .hero-inner {
  display:flex;
  gap:24px;
  flex-wrap:wrap;
  align-items:flex-start;
}
.medtech-hero .hero-left {
  flex:1;
  min-width:280px;
}
.medtech-hero .hero-right {
  min-width:280px;
  max-width:360px;
}
.medtech-hero h1 {
  margin-top:0;
  font-size:32px;
  line-height:1.1;
}
.medtech-hero .lead {
  color:#e6f0fb;
  margin:12px 0 20px;
  font-size:1rem;
}
.medtech-hero .cta-row {
  display:flex;
  flex-wrap:wrap;
  gap:12px;
  margin-bottom:16px;
}
.stat-value {
  font-weight:800;
  font-size:20px;
  color:#fff;
}
.stat-label {
  font-size:13px;
  color:#e8f3ff;
}
@media (max-width:640px){
  .medtech-hero h1 {font-size:22px;}
  .medtech-hero .hero-inner {flex-direction:column;}
  .medtech-hero .hero-right {width:100%;}
}
</style>

<!-- ========================= -->
<!-- WHY THIS PROGRAM WINS     -->
<!-- ========================= -->
<section class="section" id="why-wins">
  <h2>Why This Program Wins</h2>

  <div class="win-cards">
    <div class="win-card">
      <h3>🏥 Critical Industry</h3>
      <p>Healthcare never shuts down. Hospitals, diagnostic centers, pharmacies, and ministries all require 24/7 uptime, compliance, traceability, and reliable clinical systems. You lead the team that keeps them running.</p>
    </div>

    <div class="win-card">
      <h3>📜 Regulated, High-Barrier Market</h3>
      <p>Most IT professionals are not allowed to touch clinical infrastructure. We train you in biomedical systems, ISO&nbsp;13485, AHIMA standards, Epic EHR workflows, data privacy, and patient safety — so you are recognized and trusted.</p>
    </div>

    <div class="win-card">
      <h3>💸 Recurring Contract Revenue</h3>
      <p>Hospitals, labs, and payer networks pay monthly retainers for device uptime, EHR availability, telemedicine continuity, claims accuracy, and regulatory reporting. This creates predictable recurring income for you and your 1:50 team.</p>
    </div>
  </div>
</section>

<style>
.win-cards {
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
  gap:18px;
}
.win-card {
  background:#fff;
  border-radius:10px;
  box-shadow:0 6px 18px rgba(2,6,23,0.07);
  padding:16px 18px;
  border-left:4px solid var(--brand);
  animation:fadeInUp .8s ease forwards;
}
.win-card h3 {
  margin:0 0 8px;
  color:var(--brand);
  font-size:1.05rem;
  font-weight:600;
}
.win-card p {
  margin:0;
  color:var(--text-dark);
  font-size:.95rem;
  line-height:1.45;
}
</style>

<!-- ========================= -->
<!-- HOW IT WORKS (INVESTOR MODEL) -->
<!-- ========================= -->
<section class="section" id="how-it-works">
  <h2>How the Medical Technology Investor Program Works</h2>
  <div class="how-grid">
    <div class="how-step">
      <strong>1. Train</strong>
      <p>You complete structured expert tracks in biomedical systems, Healthcare IT (HCIT), telemedicine delivery, data governance, compliance, and service operations management.</p>
    </div>
    <div class="how-step">
      <strong>2. Build</strong>
      <p>You recruit and mentor a 1:50 medical technology team — biomedical technicians, EHR support specialists, telemedicine deployment engineers, revenue cycle analysts, compliance & quality officers.</p>
    </div>
    <div class="how-step">
      <strong>3. Deploy</strong>
      <p>Your team delivers ongoing services to hospitals, diagnostic centers, ministries, payers, NGOs, and health startups: device uptime, EHR support, telemedicine rollouts, data analytics, regulatory readiness.</p>
    </div>
    <div class="how-step">
      <strong>4. Earn</strong>
      <p>You earn leadership compensation (approximately $650 USD/month for 5 years, plus performance commissions) and scale recurring managed service contracts that can reach $2,127,372+ USD/year per leader portfolio.</p>
    </div>
  </div>

  <div class="how-note">There are only <strong>100 Medical Technology Team Leaders</strong>. Each leader runs one 1:50 delivery unit and services multiple healthcare organizations in parallel.</div>
</section>

<style>
.how-grid {
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
  gap:18px;
}
.how-step {
  background:var(--bg-light);
  border-radius:8px;
  border-left:4px solid var(--brand);
  padding:14px 16px;
}
.how-step strong {
  color:var(--brand);
  display:block;
  margin-bottom:6px;
}
.how-note {
  margin-top:16px;
  font-size:.9rem;
  color:var(--muted);
  background:#f7fbff;
  border-left:4px solid var(--accent);
  border-radius:6px;
  padding:12px 14px;
}
</style>

<!-- ====================================================== -->
<!-- HEALTHCARE TECHNOLOGY DELIVERY PORTFOLIO (WHAT YOU SELL) -->
<!-- ====================================================== -->
<section class="section" id="delivery-portfolio">
  <h2>Healthcare Technology Delivery Portfolio — What Your Team Delivers</h2>
  <p class="muted">
    This is the live services catalog your 1:50 team sells and delivers to hospitals, clinics,
    ministries, diagnostic labs, insurers, pharmacies, and donor-funded health programs.
    Every item below is a contract line.
  </p>

  <div class="accordion-block">

    <!-- ========================= -->
    <!-- PILLAR A                  -->
    <!-- ========================= -->
    <button class="accordion-button" aria-expanded="false">
      A. Clinical Systems &amp; Healthcare IT (HCIT)
    </button>
    <div class="accordion-content">
      <!-- SERVICE: EHR -->
      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Electronic Health Record (EHR) deployment, optimization &amp; support</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> We deploy, configure, and optimize EHR platforms; manage user access; train clinical staff; and keep clinical data accurate and available.</p>
          <p><strong>Why hospitals pay:</strong> Better documentation, fewer errors, audit-ready records, and higher clinical productivity.</p>
          <p><strong>Engagement model:</strong> Managed EHR support, on-call assistance, and recurring optimization reviews.</p>
          <p><strong>Roles delivered by your 1:50 team:</strong> EHR Systems Specialist, Clinical Application Support Lead.</p>
        </div>
      </div>

      <!-- SERVICE: Telehealth -->
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

      <!-- SERVICE: Population Health -->
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

      <!-- SERVICE: CDSS -->
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

      <!-- SERVICE: LIS -->
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

      <!-- SERVICE: PACS/VNA -->
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

      <!-- SERVICE: Dose Mgmt -->
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

      <!-- SERVICE: Remote Monitoring -->
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

      <!-- SERVICE: Interop -->
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

    <!-- ========================= -->
    <!-- PILLAR B                  -->
    <!-- ========================= -->
    <button class="accordion-button" aria-expanded="false">
      B. Revenue Cycle, Admin &amp; Operational Systems
    </button>
    <div class="accordion-content">
      <!-- SERVICE: RCM -->
      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Revenue Cycle Management (front / mid / back-end RCM)</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> We implement and optimize patient registration, coding, billing, claims submission, denial management, and collections workflows.</p>
          <p><strong>Why finance directors pay:</strong> Faster reimbursement, fewer claim denials, predictable cashflow.</p>
          <p><strong>Engagement model:</strong> On-site process audit → system configuration → monthly performance review and recovery reporting.</p>
          <p><strong>Roles delivered by your 1:50 team:</strong> RCM Analyst, Coding &amp; Billing Optimization Lead, Claims Recovery Specialist.</p>
        </div>
      </div>

      <!-- SERVICE: Pharmacy / Audit -->
      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Pharmacy Information Systems &amp; audit / analysis</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Digital control of dispensing, stock, expiry, controlled substances, and billing integration for hospital / retail pharmacies.</p>
          <p><strong>Why pharmacies pay:</strong> Shrinkage control, formulary enforcement, compliance traceability for audits.</p>
          <p><strong>Engagement model:</strong> System setup, user training, monthly compliance / variance reporting to leadership.</p>
          <p><strong>Roles delivered:</strong> Pharmacy Informatics Specialist, Medication Audit Analyst.</p>
        </div>
      </div>

      <!-- SERVICE: Supply Chain -->
      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Supply Chain &amp; Inventory Management Systems</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Track devices, consumables, implants, reagents, and medication stock across departments and satellite clinics.</p>
          <p><strong>Why operations teams pay:</strong> Cuts waste, prevents stock-out, supports regulatory traceability on critical items.</p>
          <p><strong>Engagement model:</strong> System rollout + barcoding / labeling design + recurring inventory audits.</p>
          <p><strong>Roles delivered:</strong> Clinical Supply Chain Technologist, Hospital Asset Controller.</p>
        </div>
      </div>

      <!-- SERVICE: Workforce Mgmt -->
      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Workforce Management &amp; Shift Allocation Systems</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Digital scheduling, shift compliance, overtime control, and allocation of qualified staff to required care levels / units.</p>
          <p><strong>Why nursing / admin leadership pays:</strong> Predictable staffing, reduced burnout claims, auditable coverage for accreditation.</p>
          <p><strong>Engagement model:</strong> Needs assessment → roster automation rollout → monthly optimization service.</p>
          <p><strong>Roles delivered:</strong> Clinical Operations Technologist, Workforce Allocation Analyst.</p>
        </div>
      </div>

      <!-- SERVICE: CRM / Patient Journey -->
      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Patient CRM / Engagement &amp; Follow-up Systems</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Patient messaging, reminders, follow-up tracking, retention and loyalty programs, post-discharge engagement.</p>
          <p><strong>Why executives pay:</strong> Higher patient retention, better recall for chronic programs, documented outcomes for funders.</p>
          <p><strong>Engagement model:</strong> CRM deployment, scripting workflows, post-visit engagement analytics.</p>
          <p><strong>Roles delivered:</strong> Patient Experience Systems Lead, Outcomes Tracking Analyst.</p>
        </div>
      </div>

      <div class="pillar-meta">
        <div class="why-line"><strong>Why this pillar matters:</strong> You protect and grow hospital cashflow. You reduce leakages. You make sure work done = money received.</div>
        <div class="contract-line"><strong>Typical contract types:</strong> RCM optimization retainer · Pharmacy compliance &amp; audit service · Outsourced scheduling ops.</div>
        <div class="roles-line"><strong>Core roles in this pillar:</strong> RCM Analyst · Pharmacy Informatics Specialist · Clinical Supply Chain Technologist · Workforce Allocation Analyst.</div>
      </div>
    </div>

    <!-- ========================= -->
    <!-- PILLAR C                  -->
    <!-- ========================= -->
    <button class="accordion-button" aria-expanded="false">
      C. Biomedical Engineering &amp; Clinical Equipment Operations
    </button>
    <div class="accordion-content">
      <!-- SERVICE: Biomedical Maintenance -->
      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Biomedical device installation, preventative maintenance &amp; calibration</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> We install, configure, test, and calibrate biomedical and life-support equipment, and maintain safety logs.</p>
          <p><strong>Why hospitals pay:</strong> Legal duty of care. Failing equipment = liability and accreditation risk.</p>
          <p><strong>Engagement model:</strong> Maintenance SLAs (monthly / quarterly), emergency response availability.</p>
          <p><strong>Roles delivered:</strong> Biomedical Field Engineer, Clinical Equipment Uptime Lead.</p>
        </div>
      </div>

      <!-- SERVICE: Imaging Support -->
      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Medical Imaging Systems Support (CT, MRI, Ultrasound, X-ray)</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Uptime, calibration, QA documentation, and first-line troubleshooting for imaging modalities and viewing stations.</p>
          <p><strong>Why imaging centers pay:</strong> Downtime = lost revenue and patient backlog. Compliance requires performance logs.</p>
          <p><strong>Engagement model:</strong> Monthly/quarterly uptime contracts tied to SLAs.</p>
          <p><strong>Roles delivered:</strong> Imaging Systems Specialist, Radiology Workflow Engineer.</p>
        </div>
      </div>

      <!-- SERVICE: Asset Tracking -->
      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Lifecycle asset tracking &amp; audit trail for clinical devices</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Full device registry: ownership, maintenance history, safety incidents, calibration dates, location.</p>
          <p><strong>Why administrators pay:</strong> Proof of compliance, insurance defensibility, predictable replacement budgeting.</p>
          <p><strong>Engagement model:</strong> System setup + recurring audit service + executive compliance reporting.</p>
          <p><strong>Roles delivered:</strong> Clinical Asset Controller, Compliance Reporting Lead.</p>
        </div>
      </div>

      <!-- SERVICE: ETA / Certification Path -->
      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">ETA International Biomedical Certification Path (CET → BMD → BIET)</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> We align your technicians to globally recognized biomedical electronics certifications.</p>
          <p><strong>Why hospitals pay:</strong> They get audited technicians with verifiable credentials instead of “in-house fixes with no paper trail.”</p>
          <p><strong>Engagement model:</strong> Workforce certification program + on-site coverage contract.</p>
          <p><strong>Roles delivered:</strong> Certified Biomedical Equipment Technician, Biomedical Imaging Equipment Technician.</p>
        </div>
      </div>

      <div class="pillar-meta">
        <div class="why-line"><strong>Why this pillar matters:</strong> This is safety and uptime. If a ventilator fails, someone is liable. You make sure it doesn’t fail — and you document it.</div>
        <div class="contract-line"><strong>Typical contract types:</strong> Clinical equipment uptime SLA · Imaging systems support retainer · Compliance / audit trail management.</div>
        <div class="roles-line"><strong>Core roles in this pillar:</strong> Biomedical Field Engineer · Imaging Systems Specialist · Clinical Asset Controller.</div>
      </div>
    </div>

    <!-- ========================= -->
    <!-- PILLAR D                  -->
    <!-- ========================= -->
    <button class="accordion-button" aria-expanded="false">
      D. Healthcare Data, Analytics &amp; AI
    </button>
    <div class="accordion-content">
      <!-- SERVICE: Clinical Analytics -->
      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Clinical outcomes &amp; quality analytics</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Dashboards and scorecards showing quality of care, outcomes, readmission risk, infection trends, adherence to protocols.</p>
          <p><strong>Why executives pay:</strong> They need defensible quality data for boards, ministries, accreditation, and funders.</p>
          <p><strong>Engagement model:</strong> KPI definition → dashboard build → monthly reporting and review meetings with executives.</p>
          <p><strong>Roles delivered:</strong> Clinical Quality Analyst, Outcomes Data Lead.</p>
        </div>
      </div>

      <!-- SERVICE: Operational Analytics -->
      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Operational &amp; throughput analytics (wait time, bed usage, bottlenecks)</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Performance analytics on patient flow, capacity utilization, care delays, equipment idle time.</p>
          <p><strong>Why COOs pay:</strong> Faster patient movement = higher revenue and happier regulators.</p>
          <p><strong>Engagement model:</strong> Data pulls from EHR/LIS → dashboard rollout → recurring ops performance sessions.</p>
          <p><strong>Roles delivered:</strong> Operations Analytics Lead, Patient Flow Analyst.</p>
        </div>
      </div>

      <!-- SERVICE: Financial / Fraud Analytics -->
      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Financial analytics &amp; fraud detection (claims, reimbursements, payers)</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> We analyze claims patterns and reimbursement behavior to detect fraud, leakage, or billing anomalies.</p>
          <p><strong>Why payers pay:</strong> Fraud control and leakage reduction directly protect cashflow and reputation.</p>
          <p><strong>Engagement model:</strong> Claims data integration → alerting dashboards → quarterly fraud/risk review.</p>
          <p><strong>Roles delivered:</strong> Claims Integrity Analyst, Health Finance Data Specialist.</p>
        </div>
      </div>

      <!-- SERVICE: Public Health / Surveillance -->
      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Disease surveillance &amp; public health reporting (ministry / NGO)</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Population dashboards for outbreaks, maternal health, vaccine coverage, rural access.</p>
          <p><strong>Why ministries &amp; donors pay:</strong> They need hard numbers to unlock funding, justify policy, and report impact.</p>
          <p><strong>Engagement model:</strong> National / regional data aggregation → visualization → executive briefing packs.</p>
          <p><strong>Roles delivered:</strong> Population Analytics Lead, Public Health Data Reporting Specialist.</p>
        </div>
      </div>

      <!-- SERVICE: Predictive / AI -->
      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Predictive analytics &amp; AI-assisted forecasting</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Models that forecast staffing needs, drug consumption, readmission probability, risk scoring, fraud risk flags.</p>
          <p><strong>Why leadership pays:</strong> Moves them from reactive firefighting to proactive planning and cost control.</p>
          <p><strong>Engagement model:</strong> Model deployment + CIO/COO advisory + ongoing model tuning.</p>
          <p><strong>Roles delivered:</strong> Healthcare AI Analyst, Forecasting &amp; Risk Stratification Lead.</p>
        </div>
      </div>

      <div class="pillar-meta">
        <div class="why-line"><strong>Why this pillar matters:</strong> You don’t just “keep systems on.” You turn hospital operations into measurable, optimizable, fundable performance.</div>
        <div class="contract-line"><strong>Typical contract types:</strong> Executive dashboard service · Public health surveillance program · Fraud analytics retainer.</div>
        <div class="roles-line"><strong>Core roles in this pillar:</strong> Clinical Quality Analyst · Claims Integrity Analyst · Healthcare AI Analyst.</div>
      </div>
    </div>

    <!-- ========================= -->
    <!-- PILLAR E                  -->
    <!-- ========================= -->
    <button class="accordion-button" aria-expanded="false">
      E. Compliance, Governance &amp; Clinical Security
    </button>
    <div class="accordion-content">
      <!-- SERVICE: ISO 13485 / QMS -->
      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">ISO 13485 Quality Management Systems for medical devices</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> We build and maintain documented quality systems for handling, servicing, and tracking clinical devices.</p>
          <p><strong>Why leadership pays:</strong> Without this, they can fail accreditation and lose contracts or donor funding.</p>
          <p><strong>Engagement model:</strong> QMS buildout + SOP writing + ongoing audit prep / internal audit rehearsal.</p>
          <p><strong>Roles delivered:</strong> Clinical Quality &amp; Compliance Lead, Device Governance Officer.</p>
        </div>
      </div>

      <!-- SERVICE: Health Data Governance -->
      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Health data governance &amp; privacy (AHIMA, IAPP, ISO 27001)</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> Policies, access control, audit trails, breach response plans, retention standards for patient data.</p>
          <p><strong>Why CIOs / compliance officers pay:</strong> Legal exposure and regulatory penalties are existential threats.</p>
          <p><strong>Engagement model:</strong> Policy creation, access matrix design, audit procedure buildout, readiness drills.</p>
          <p><strong>Roles delivered:</strong> Health Data Privacy Officer, Information Governance Analyst.</p>
        </div>
      </div>

      <!-- SERVICE: Continuity / DR -->
      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Clinical continuity &amp; disaster recovery planning</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> We develop recovery runbooks for EHR downtime, imaging outages, network loss, ransomware events.</p>
          <p><strong>Why hospitals pay:</strong> Lost clinical operations = patient risk + regulatory exposure + revenue stop.</p>
          <p><strong>Engagement model:</strong> Risk assessment → DR/BCP document set → live drills and after-action reviews.</p>
          <p><strong>Roles delivered:</strong> Clinical Continuity Lead, Incident Response Coordinator (Healthcare SOC-aware).</p>
        </div>
      </div>

      <!-- SERVICE: Regulatory Readiness -->
      <div class="pillar-service-group">
        <button class="service-toggle" aria-expanded="false">
          <span class="service-title">Regulatory readiness &amp; accreditation reporting</span>
          <span class="service-arrow">▼</span>
        </button>
        <div class="service-detail">
          <p><strong>What it is:</strong> We prepare documentation, metric packs, and evidence trails for health ministries, accreditation bodies, payers, donor audits.</p>
          <p><strong>Why boards pay:</strong> Passing accreditation = legal license to operate and access funding.</p>
          <p><strong>Engagement model:</strong> Gap analysis → remediation plan → executive briefing pack generation.</p>
          <p><strong>Roles delivered:</strong> Accreditation Readiness Officer, Compliance Reporting Specialist.</p>
        </div>
      </div>

      <div class="pillar-meta">
        <div class="why-line"><strong>Why this pillar matters:</strong> You make the hospital/ministry “pass inspection” — legally, clinically, financially.</div>
        <div class="contract-line"><strong>Typical contract types:</strong> ISO 13485 QMS program · Data governance &amp; privacy office build · Accreditation readiness engagement.</div>
        <div class="roles-line"><strong>Core roles in this pillar:</strong> Clinical Quality &amp; Compliance Lead · Health Data Privacy Officer · Accreditation Readiness Officer.</div>
      </div>
    </div>

  </div>
</section>

<style>
.accordion-block {
  margin-top:20px;
}

.accordion-button {
  background:var(--bg-light);
  border:1px solid #d1d5db;
  padding:14px 18px;
  border-radius:10px;
  width:100%;
  text-align:left;
  font-weight:600;
  cursor:pointer;
  margin-bottom:10px;
  display:flex;
  justify-content:space-between;
  align-items:center;
  transition:background .3s ease, box-shadow .3s ease;
  position:relative;
  color:var(--text-dark);
}
.accordion-button:hover {
  background:#e6f0fb;
  box-shadow:0 4px 12px rgba(11,79,122,0.12);
}
.accordion-button::before {
  content:'+';
  font-weight:700;
  color:var(--brand);
  margin-right:8px;
  display:inline-block;
}
.accordion-button[aria-expanded="true"]::before {
  content:'−';
}
.accordion-button:after {
  content:'\25BC';
  transition:transform .3s ease;
  margin-left:12px;
  color:var(--brand);
}
.accordion-button[aria-expanded="true"]:after {
  transform:rotate(-180deg);
}

.accordion-content {
  max-height:0;
  overflow:hidden;
  opacity:0;
  padding-top:0;
  padding-bottom:0;
  transition:max-height .4s ease, opacity .4s ease, padding .3s ease;
  background:#fff;
  border-radius:8px;
  box-shadow:0 6px 18px rgba(2,6,23,0.07);
  border:1px solid #d1d5db;
  margin-top:-2px;
  margin-bottom:16px;
}

/* Pillar service groups */
.pillar-service-group {
  background:#fff;
  border:1px solid #d1d5db;
  border-radius:8px;
  margin:12px 16px;
  box-shadow:0 4px 14px rgba(2,6,23,0.04);
  overflow:hidden;
}

.service-toggle {
  width:100%;
  background:transparent;
  border:0;
  padding:14px 16px;
  text-align:left;
  font-size:.95rem;
  line-height:1.4;
  font-weight:600;
  color:var(--text-dark);
  display:flex;
  align-items:flex-start;
  justify-content:space-between;
  cursor:pointer;
}
.service-toggle:focus {
  outline:2px solid var(--accent);
  outline-offset:2px;
}
.service-title {
  max-width:90%;
  color:var(--brand);
}
.service-arrow {
  font-size:.8rem;
  line-height:1;
  color:var(--brand);
  transition:transform .3s ease;
}
.service-toggle[aria-expanded="true"] .service-arrow {
  transform:rotate(-180deg);
}

/* Detail panel (animated open/close) */
.service-detail {
  padding:0 16px 0 16px;
  border-top:1px solid #d1d5db;
  background:#f7fbff;
  font-size:.9rem;
  line-height:1.45;
  color:var(--text-dark);
  max-height:0;
  overflow:hidden;
  opacity:0;
  transition:max-height .35s ease, opacity .35s ease, padding .25s ease;
}
.service-detail p {
  margin:10px 0 0 0;
  font-size:.9rem;
  line-height:1.45;
}

.pillar-meta {
  background:#fff;
  border:1px solid #d1d5db;
  border-radius:8px;
  margin:20px 16px 16px 16px;
  padding:14px 16px;
  box-shadow:0 4px 14px rgba(2,6,23,0.04);
  font-size:.9rem;
  line-height:1.45;
  color:var(--text-dark);
}
.why-line,
.contract-line,
.roles-line {
  margin-top:10px;
  background:#f7fbff;
  border-left:4px solid var(--accent);
  border-radius:6px;
  padding:10px 12px;
  font-size:.85rem;
  color:var(--muted);
  line-height:1.45;
}
.why-line:first-child { margin-top:0; }

@media (max-width:640px){
  .service-toggle { font-size:.93rem; }
  .service-detail p { font-size:.9rem; }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {

  // helper: animate open
  function animateOpen(panel, {paddingTop='16px', paddingBottom='16px'} = {}) {
    // measure full natural height by temporarily unlocking
    panel.style.transition = 'none';
    panel.style.maxHeight = 'none';
    panel.style.paddingTop = paddingTop;
    panel.style.paddingBottom = paddingBottom;
    panel.style.opacity = '1';

    const full = panel.scrollHeight;

    // go back to collapsed instantly
    panel.style.maxHeight = '0px';
    panel.style.paddingTop = '0px';
    panel.style.paddingBottom = '0px';
    panel.style.opacity = '0';

    // force reflow to lock start state
    void panel.offsetHeight;

    // now animate to measured height (+ buffer so last line never clips)
    panel.style.transition = 'max-height .4s ease, opacity .4s ease, padding .3s ease';
    panel.style.maxHeight = (full + 40) + 'px';
    panel.style.paddingTop = paddingTop;
    panel.style.paddingBottom = paddingBottom;
    panel.style.opacity = '1';
  }

  // helper: animate close
  function animateClose(panel) {
    // start from current displayed height
    const full = panel.scrollHeight;
    panel.style.maxHeight = full + 'px';
    panel.style.opacity = '1';

    // force reflow to lock start state
    void panel.offsetHeight;

    // collapse
    panel.style.transition = 'max-height .4s ease, opacity .4s ease, padding .3s ease';
    panel.style.maxHeight = '0px';
    panel.style.paddingTop = '0px';
    panel.style.paddingBottom = '0px';
    panel.style.opacity = '0';
  }

  // ================================
  // MAIN ACCORDION (Pillars A–E)
  // ================================
  const pillarButtons = document.querySelectorAll('#delivery-portfolio .accordion-button');

  pillarButtons.forEach(btn => {
    const content = btn.nextElementSibling;

    btn.addEventListener('click', () => {
      const isOpen = btn.getAttribute('aria-expanded') === 'true';

      // close other pillars
      pillarButtons.forEach(otherBtn => {
        const otherContent = otherBtn.nextElementSibling;
        if (otherBtn !== btn) {
          otherBtn.setAttribute('aria-expanded','false');
          animateClose(otherContent);
          // also close all inner service details inside those other pillars
          const innerDetails = otherContent.querySelectorAll('.service-detail');
          const innerToggles = otherContent.querySelectorAll('.service-toggle');
          innerDetails.forEach(d => animateClose(d));
          innerToggles.forEach(t => t.setAttribute('aria-expanded','false'));
        }
      });

      if (!isOpen) {
        btn.setAttribute('aria-expanded','true');
        animateOpen(content, {paddingTop:'16px', paddingBottom:'16px'});
      } else {
        btn.setAttribute('aria-expanded','false');
        animateClose(content);
      }
    });
  });

  // ================================
  // INNER SERVICE TOGGLES (all pillars)
  // ================================
  const serviceToggles = document.querySelectorAll('#delivery-portfolio .service-toggle');

  serviceToggles.forEach(toggle => {
    toggle.addEventListener('click', () => {
      const detail = toggle.nextElementSibling;
      const isOpen = toggle.getAttribute('aria-expanded') === 'true';

      // close siblings in same pillar section
      const samePillarContent = toggle.closest('.accordion-content');
      const siblingToggles = samePillarContent.querySelectorAll('.service-toggle');
      const siblingDetails = samePillarContent.querySelectorAll('.service-detail');

      siblingToggles.forEach(otherToggle => {
        if (otherToggle !== toggle) {
          otherToggle.setAttribute('aria-expanded','false');
        }
      });
      siblingDetails.forEach(otherDetail => {
        if (otherDetail !== detail) {
          animateClose(otherDetail);
        }
      });

      if (!isOpen) {
        toggle.setAttribute('aria-expanded','true');
        animateOpen(detail, {paddingTop:'14px', paddingBottom:'14px'});
      } else {
        toggle.setAttribute('aria-expanded','false');
        animateClose(detail);
      }
    });
  });

});
</script>

<!-- ====================================================== -->
<!-- TRAINING & CERTIFICATION TRACKS                        -->
<!-- ====================================================== -->
<section class="section" id="certifications">
  <h2>Training &amp; Certification Tracks</h2>
  <p class="muted">This is not generic IT. These are regulated roles. We align you with globally recognized certification bodies so that hospitals, ministries, and insurers will authorize you to touch critical systems.</p>

  <div class="cert-grid">
    <!-- Track 1: Biomedical & Clinical Engineering -->
    <div class="cert-card">
      <h3>Track 1. Biomedical &amp; Clinical Engineering</h3>
      <ul>
        <li>ETA International: <strong>CET</strong> (Certified Electronics Technician Associate)</li>
        <li>ETA International: <strong>BMD</strong> (Biomedical Electronics Technician)</li>
        <li>ETA International: <strong>BIET</strong> (Biomedical Imaging Equipment Technician)</li>
        <li><strong>CBET</strong> (Certified Biomedical Equipment Technician)</li>
        <li>OEM Modality Training (CT, MRI, Ultrasound, Lab Analyzers)</li>
      </ul>
      <div class="role-hint">Roles: Biomedical Field Engineer, Imaging Systems Specialist, Hospital Equipment Uptime Lead</div>
    </div>

    <!-- Track 2: Healthcare IT / Digital Health Systems -->
    <div class="cert-card">
      <h3>Track 2. Healthcare IT &amp; Digital Health Systems</h3>
      <ul>
        <li>Epic Systems Certifications (EpicCare, MyChart)</li>
        <li>Healthcare IT Technician / Health Informatics certs</li>
        <li>Telemedicine Specialist Certification (remote care delivery, virtual clinics)</li>
        <li>HL7 / FHIR interoperability integration training</li>
      </ul>
      <div class="role-hint">Roles: Clinical Systems Integrator, Telehealth Deployment Lead, EHR Support Lead</div>
    </div>

    <!-- Track 3: Health Information Management & Privacy -->
    <div class="cert-card">
      <h3>Track 3. Health Information Management &amp; Data Governance</h3>
      <ul>
        <li>AHIMA: <strong>RHIA</strong> (Registered Health Information Administrator)</li>
        <li>AHIMA: <strong>RHIT</strong> (Registered Health Information Technician)</li>
        <li>AHIMA: <strong>CCS</strong> (Certified Coding Specialist)</li>
        <li>IAPP: <strong>CIPM</strong> (Certified Information Privacy Manager)</li>
        <li>IAPP: <strong>CIPP/US</strong> (HIPAA-aligned privacy competency)</li>
        <li>ISO 27001 (Health Data Security / Information Security Management)</li>
      </ul>
      <div class="role-hint">Roles: Health Data Privacy Officer, Medical Records Compliance Lead, Revenue Integrity Analyst</div>
    </div>

    <!-- Track 4: Revenue, Workflow & Operations in Healthcare -->
    <div class="cert-card">
      <h3>Track 4. Healthcare Revenue, Quality &amp; Operations</h3>
      <ul>
        <li>Revenue Cycle Management Specialist</li>
        <li>Healthcare Quality / ISO&nbsp;13485 Quality Management Systems</li>
        <li>Healthcare Supply Chain &amp; Inventory Systems Management</li>
        <li>Healthcare Workforce Management &amp; Scheduling Systems</li>
      </ul>
      <div class="role-hint">Roles: Revenue Cycle Lead, Clinical Operations Technologist, Health Systems Process Manager</div>
    </div>

    <!-- Track 5: Security & Infrastructure for Health -->
    <div class="cert-card">
      <h3>Track 5. Healthcare Security &amp; Continuity</h3>
      <ul>
        <li>CompTIA Tech+, A+, Network+ (infrastructure fundamentals in clinical environments)</li>
        <li>Security+ / Healthcare SOC awareness</li>
        <li>Continuity &amp; Disaster Recovery for clinical uptime</li>
        <li>Medical data protection and ransomware defense for hospitals, pharmacies, payers</li>
      </ul>
      <div class="role-hint">Roles: Clinical Infrastructure Specialist, Health SOC Analyst, Continuity &amp; Resilience Lead</div>
    </div>
  </div>
</section>

<style>
.cert-grid {
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
  gap:18px;
}
.cert-card {
  background:#fff;
  border-radius:10px;
  box-shadow:0 6px 18px rgba(2,6,23,0.07);
  padding:16px 18px;
  animation:fadeInUp .8s ease forwards;
  border-top:4px solid var(--brand);
}
.cert-card h3 {
  margin-top:0;
  font-size:1rem;
  font-weight:600;
  color:var(--brand);
  margin-bottom:8px;
}
.cert-card ul {
  margin:0 0 12px 18px;
  padding:0;
  font-size:.95rem;
  color:var(--text-dark);
  line-height:1.45;
}
.cert-card li { margin-bottom:6px; }
.role-hint {
  font-size:.85rem;
  color:var(--muted);
  background:#f7fbff;
  border-left:4px solid var(--accent);
  border-radius:6px;
  padding:10px 12px;
}
.cred-ribbon {
  margin-top:16px;
  background:#f7fbff;
  border-left:4px solid var(--brand);
  border-radius:6px;
  padding:12px 14px;
  font-size:.9rem;
  color:var(--text-dark);
  line-height:1.45;
}
</style>

<!-- ====================================================== -->
<!-- 5-YEAR TIMELINE / WORK-STUDY MODEL                      -->
<!-- ====================================================== -->
<section class="section" id="timeline">
  <h2>Your 5-Year Leadership Path (Work-Study Model)</h2>
  <p class="muted">You are not just taking courses. You are being positioned to operate, manage and sell healthcare technology services at scale.</p>

  <div class="timeline-grid five-cards">
    <div class="timeline-card">
      <div class="timeline-year">Year 1 — Foundation</div>
      <p>CompTIA Tech+, A+, basic networking in clinical environments. Shadow biomedical / HCIT teams. Learn EHR, PACS, RCM fundamentals. Understand clinical uptime culture.</p>
    </div>

    <div class="timeline-card">
      <div class="timeline-year">Year 2 — Clinical Systems &amp; Biomedical Ops</div>
      <p>ETA International CET → BMD / BIET path. Hands-on with imaging, monitoring, lab analyzers. Preventative maintenance, calibration logs, safety documentation.</p>
    </div>

    <div class="timeline-card">
      <div class="timeline-year">Year 3 — Digital Health &amp; Telemedicine Deployment</div>
      <p>Epic workflows, telemedicine rollout, HL7 / FHIR integration, remote patient monitoring, interoperability. You begin driving live hospital/clinic projects.</p>
    </div>

    <div class="timeline-card">
      <div class="timeline-year">Year 4 — Compliance, Revenue &amp; Governance</div>
      <p>AHIMA (RHIT/RHIA/CCS), IAPP privacy (CIPM / CIPP), ISO 13485, Revenue Cycle Management, pharmacy informatics, supply chain, fraud analytics, claims optimization.</p>
    </div>

    <div class="timeline-card">
      <div class="timeline-year">Year 5 — Leadership &amp; Scale</div>
      <p>You operate as Healthcare Technology Operations Lead. You manage uptime, reporting, compliance, analytics, and recurring support contracts across multiple facilities with a 50-person team.</p>
    </div>
  </div>
  <div class="cred-ribbon">
    Our leaders align to ETA International (Biomedical), AHIMA (Health Information Management), Epic Systems (EHR), IAPP (Privacy & Data Governance), ISO&nbsp;13485 (Medical Device Quality), and ISO&nbsp;27001 (Health Data Security). These are frameworks hospitals, ministries and payers already recognize.
  </div>
</section>

<style>
.timeline-grid.five-cards {
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
  gap:18px;
}
.timeline-card {
  background:#fff;
  border-radius:10px;
  box-shadow:0 6px 18px rgba(2,6,23,0.07);
  padding:16px 18px;
  border-left:4px solid var(--brand);
  animation:fadeInUp .8s ease forwards;
}
.timeline-year {
  font-weight:600;
  color:var(--brand);
  margin-bottom:6px;
}
.timeline-card p {
  font-size:.95rem;
  color:var(--text-dark);
  line-height:1.45;
  margin:0;
}
</style>

<!-- ====================================================== -->
<!-- WHO PAYS / TARGET CLIENTS                              -->
<!-- ====================================================== -->
<section class="section" id="buyers">
  <h2>Who Pays for These Services?</h2>
  <p class="muted">Your 1:50 team delivers managed services and compliance outcomes that hospitals and payers cannot ignore.</p>

  <div class="buyers-grid">
    <div class="buyer-card"><strong>Hospitals &amp; Clinics</strong><br>Uptime, compliance, telemedicine readiness, imaging and device support.</div>
    <div class="buyer-card"><strong>Ambulatory &amp; Assisted Care</strong><br>Home health, assisted living, remote monitoring, mobility devices, caregiver dashboards.</div>
    <div class="buyer-card"><strong>Diagnostic &amp; Imaging Centers</strong><br>Calibration, PACS/VNA, radiation dose management, regulatory documentation.</div>
    <div class="buyer-card"><strong>Pharmacies &amp; Pharmacy Networks</strong><br>Inventory control, audit trail, fraud analytics, e-prescription workflow.</div>
    <div class="buyer-card"><strong>Payers &amp; Health Financing Networks</strong><br>Claims management, fraud detection, population health analytics, revenue recovery.</div>
    <div class="buyer-card"><strong>Public Health Ministries &amp; NGOs</strong><br>Population health dashboards, disease surveillance, grant reporting, national telehealth programs.</div>
    <div class="buyer-card"><strong>Healthtech Startups</strong><br>Telemedicine platforms, AI triage, remote care logistics, data compliance frameworks.</div>
  </div>

  <div class="buyers-cta">This is recurring revenue. Hospitals, labs, pharmacies, NGOs, and payer networks all require <strong>continuous compliance, uptime, reporting, and billing accuracy</strong>. Your team becomes the external partner that guarantees this.</div>
</section>

<style>
.buyers-grid {
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
  gap:18px;
}
.buyer-card {
  background:#fff;
  border-radius:10px;
  box-shadow:0 6px 18px rgba(2,6,23,0.07);
  padding:16px 18px;
  font-size:.95rem;
  color:var(--text-dark);
  line-height:1.45;
  border-top:4px solid var(--accent);
}
.buyers-cta {
  margin-top:16px;
  background:#f7fbff;
  border-left:4px solid var(--brand);
  border-radius:6px;
  padding:12px 14px;
  font-size:.9rem;
  color:var(--muted);
}
</style>

<!-- ====================================================== -->
<!-- APPLY / CTA                                            -->
<!-- ====================================================== -->
<section class="section" id="apply">
  <h2>Apply to Become a Medical Technology Team Leader</h2>
  <p class="muted">There are 100 Medical Technology Team Leaders. Each one manages a 50-person delivery unit and supports multiple healthcare organizations, with the potential to scale into $2,127,372+ USD/year in recurring managed services. Fill in the form below and our team will follow up within 48 hours. Note: Only 100 Medical Technology Team Leaders are approved globally.</p>

  <form method="post" action="send-mail.php" style="max-width:760px">
    <div class="field"><label>Full Name</label><input name="name" required></div>
    <div class="field"><label>Email</label><input name="email" type="email" required></div>
    <div class="field"><label>Phone</label><input name="phone" required></div>

    <div class="field"><label>I am</label>
      <select name="profile" required>
        <option value="">Select...</option>
        <option>Applying as a Medical Technology Team Leader (1 of 100)</option>
        <option>Joining a 1:50 Medical Technology Team</option>
        <option>Representing a Hospital / Ministry / Healthcare Organization</option>
      </select>
    </div>

    <div class="field"><label>Short Message</label><textarea name="message" rows="4" placeholder="Tell us your focus: Biomedical, Telemedicine, HCIT, Compliance, Revenue Cycle, etc."></textarea></div>

    <input type="hidden" name="industry" value="Medical Technology">
    <input type="hidden" name="source" value="Full Apply - Medical Technology">

    <button class="btn" type="submit">Submit Application</button>
  </form>
</section>

<?php include 'footer.php'; ?>
