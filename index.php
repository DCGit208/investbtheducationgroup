<?php
$page_title = "Investor Education Program — Build Teams • Earn • Lead";
$meta_description = "Join the Investor Education Work Network — become 1 of 100 team leaders per industry, build a certified 50-person workforce, deploy contracts, earn active and residual income.";
$og_title = $page_title;
$og_description = $meta_description;
$og_image = "https://invest.btheducationgroup.com/image/logo-og.png"; // <-- make sure this exists and is publicly accessible
$og_url = "https://invest.btheducationgroup.com/index.php";
include 'header.php';
?>

<header>
  <div class="hero">
    <!-- Hero Left -->
    <div class="hero-left">
      <h1>Lead. Earn. Transform.<br><strong>Investor Education Program</strong></h1>

      <p class="lead">
        Become a certified industry leader — build a 1:50 team, earn commissions,
        deliver contracts, and create lasting residual income.
        Limited to <strong>100 team leaders per industry</strong>.
      </p>

      <div class="cta-row">
        <!-- Primary = direct application (keep this for conversions) -->
        <a class="btn" href="#apply">Become a Team Leader</a>
        <!-- Secondary = deep-dive on the leadership model -->
        <a class="btn" href="leadership.php?utm_source=home&utm_medium=hero&utm_campaign=leadership&utm_content=journey#journey">See the 1:50 Leadership Journey →</a>
      </div>

      <div class="stats">
        <div class="stat">
          <div class="stat-value" data-target="44321">0</div>
          <div class="stat-label" style="font-size:13px;white-space:nowrap;">Team-building commission</div>
        </div>
        <div class="stat">
          <div class="stat-value" data-target="2127372">0</div>
          <div class="stat-label" style="font-size:13px;white-space:nowrap;">Leader annual income</div>
        </div>
        <div class="stat">
          <div class="stat-value" data-target="63822">0</div>
          <div class="stat-label" style="font-size:13px;white-space:nowrap;">Member annual income</div>
        </div>
      </div>
    </div>

    <!-- Hero Right (Quick Apply Form) -->
    <div class="hero-right">
      <div class="card">
        <strong>Quick Apply</strong>
        <form method="post" action="send-mail.php">
          <div class="field">
            <label>Name</label>
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
            <label>Industry (Primary Interest)</label>
            <select name="industry" required>
              <option value="">Select...</option>
              <option>Intelligent Cloud, Data & AI</option>
              <option>Cybersecurity & Digital Defense</option>
              <option>Information Technology & Software Engineering</option>
              <option>Medical Technology / Healthcare IT / Life Sciences</option>
              <option>Renewable & Sustainable Energy (Wind & Solar)</option>
              <option>Smart Home & Building Automation</option>
              <option>Fiber Optics & Data Cabling</option>
              <option>Communications & Satellite Technology (5G / RF / DAS)</option>
              <option>Architecture, Engineering & Construction (AEC)</option>
              <option>Manufacturing & Industrial Systems (Welding / Automation)</option>
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
          <input type="hidden" name="source" value="Quick Apply">
          <button class="btn" type="submit">Apply Now</button>
        </form>
      </div>
    </div>
  </div>
</header>

<!-- Trust Badges -->
<div class="trust-badges">
  <h3>Authorized Training & Certification Partner</h3>
  <div class="badge-grid">
    <img src="Backups/vendor-logos/comptia.svg" alt="CompTIA" title="CompTIA Partner">
    <img src="Backups/vendor-logos/aws.svg" alt="Amazon Web Services" title="AWS Partner">
    <img src="Backups/vendor-logos/microsoft.svg" alt="Microsoft" title="Microsoft Partner">
    <img src="Backups/vendor-logos/eccouncil.svg" alt="EC-Council" title="EC-Council Partner">
    <img src="Backups/vendor-logos/certiport.svg" alt="Certiport" title="Pearson VUE Certiport">
    <img src="Backups/vendor-logos/cisco.svg" alt="Cisco" title="Cisco Networking Academy">
    <img src="Backups/vendor-logos/redhat.svg" alt="Red Hat" title="Red Hat Partner">
    <img src="Backups/vendor-logos/oracle.svg" alt="Oracle" title="Oracle Academy">
  </div>
</div>

<!-- How it Works -->
<section id="how" class="section">
  <h2>How it Works</h2>
  <div class="how">
    <div class="step">
      <strong>1. Train &amp; Certify</strong><br>
      3-year technical + leadership path from foundation → expert.  
      Global certifications (CompTIA, AWS, ETA, EC-Council, AHIMA, PMI, etc).
    </div>
    <div class="step">
      <strong>2. Build Your Team (1:50)</strong><br>
      You recruit and mentor a 50-person certified workforce in your chosen industry.
      You’re 1 of only 100 leaders in that sector.
    </div>
    <div class="step">
      <strong>3. Deploy Contracts</strong><br>
      Your team delivers real services:
      Cloud migration, SOC monitoring, Telehealth rollout, Fiber buildout, Renewable installs,
      FinTech systems, GovTech portals, Smart Mobility logistics, and more.
    </div>
    <div class="step">
      <strong>4. Earn Active + Residual Income</strong><br>
      Active leadership commissions + recurring service contracts.
      Target leader earnings can exceed <strong>2,127,372 USD/year</strong> in mature deployment scenarios.
    </div>
  </div>
  <p style="margin-top:20px; text-align:center; font-size:0.95rem; color:#4b5563;">
    Want the full leadership and ROI blueprint? 
    <a href="leadership.php?utm_source=home&utm_medium=howitworks&utm_campaign=leadership&utm_content=economics#economics">View the 1:50 Leadership &amp; Economics Overview &raquo;</a>
  </p>
</section>
<p style="text-align:center; margin:-24px auto 40px;">
  <a class="btn-outline" href="leadership.php?utm_source=home&utm_medium=howitworks&utm_campaign=leadership&utm_content=economics#economics">Leader Economics & ROI →</a>
</p>

<!-- 18 Industries -->
<section class="section" id="industries">
  <h2>Choose Your Industry Track (20 Global Sectors)</h2>
  <p style="color: #6b7280; font-size: 16px; line-height: 1.7; max-width:900px; margin: 0 auto 40px;">
    Each industry below becomes a deployable 50-person workforce under a certified Team Leader.
    Focus. Certify. Build your 1:50 team. Deliver contracts. Earn.
  </p>

  <div class="grid">

    <!-- 1. Intelligent Cloud, Data & AI -->
    <a class="industry" href="intelligent-cloud.php">
      <h4>☁ Intelligent Cloud, Data &amp; AI</h4>
      <p>
        Cloud migration, data platforms, AI automation, analytics dashboards for enterprises and ministries.
        Cert paths: Azure / AWS / GCP / AI Engineer.
      </p>
    </a>

    <!-- 2. Cybersecurity & Digital Defense -->
    <a class="industry" href="cybersecurity.php">
      <h4>🔐 Cybersecurity &amp; Digital Defense</h4>
      <p>
        SOC operations, penetration testing, incident response, PCI-DSS / ISO 27001 compliance for banks and critical orgs.
        Cert paths: Security+ → CEH → CPENT/LPT.
      </p>
    </a>

    <!-- 3. Information Technology & Software Engineering -->
    <a class="industry" href="information-technology.php">
      <h4>🧑‍💻 Information Technology (Operations &amp; Infrastructure)</h4>
      <p>
        Enterprise IT support, secure infrastructure, identity &amp; endpoint, collaboration, backup/DR, network/Wi‑Fi.
        Focused on ITIL‑driven operations for SMEs, corporates, and public sector.
        Cert paths: Tech+ / A+ / Network+ / ITIL / AZ‑104.
      </p>
    </a>

    <!-- 4. Software & Systems Engineering -->
    <a class="industry" href="software-engineering.php">
      <h4>💻 Software &amp; Systems Engineering</h4>
      <p>
        Production-grade software — web, mobile, APIs, data platforms, real-time systems, edge/IoT, and AI — 
        with DevOps, SRE, and security-by-design baked in.
        Cert paths: Azure/AWS Solutions Architect • CKA/CKAD • Full-stack certifications.
      </p>
    </a>

    <!-- 5. Medical Technology / Healthcare IT / Life Sciences -->
    <a class="industry" href="medical-technology.php">
      <h4>🔬 Medical Technology / Healthcare IT / Life Sciences</h4>
      <p>
        EHR rollout, telehealth networks, biomedical device support, health data compliance.
        ETA Biomedical • AHIMA • Epic • AWS Healthcare.
      </p>
    </a>

    <!-- 6. Renewable & Sustainable Energy -->
    <a class="industry" href="renewable-energy.php">
      <h4>🔌 Renewable &amp; Sustainable Energy (Wind &amp; Solar)</h4>
      <p>
        Solar microgrids, storage systems, smart metering, field maintenance.
        Cert paths: ETA PV Installer → Microgrid Manager.
      </p>
    </a>

    <!-- 7. Smart Home & Building Automation -->
    <a class="industry" href="smart-home.php">
      <h4>📲 Smart Home &amp; Building Automation</h4>
      <p>
        IoT security systems, CCTV, access control, smart lighting / HVAC for residential, commercial and government facilities.
        ETA Smart Home / STS.
      </p>
    </a>

    <!-- 8. Fiber Optics & Data Cabling -->
    <a class="industry" href="fiber-optics.php">
      <h4>🚠 Fiber Optics &amp; Data Cabling</h4>
      <p>
        Fiber backbone build, splicing/testing, data center cabling, campus connectivity.
        ETA Fiber / FOA-equivalent pathways.
      </p>
    </a>

    <!-- 9. Communications & Satellite Technology -->
    <a class="industry" href="communications.php">
      <h4>📡 Communications &amp; Satellite Technology</h4>
      <p>
        5G, DAS, microwave links, RF interference mitigation, VSAT deployment for telcos and government.
        ETA 5G Tech • RFIM • Satellite.
      </p>
    </a>

    <!-- 10. AEC (Architecture, Engineering & Construction) -->
    <a class="industry" href="aec-industry.php">
      <h4>👷‍♀️ Architecture, Engineering &amp; Construction (AEC)</h4>
      <p>
        BIM delivery, infrastructure project supervision, green builds, smart city systems.
        Revit Pro • PMP • LEED.
      </p>
    </a>

    <!-- 11. Manufacturing & Industrial Systems -->
    <a class="industry" href="manufacturing-industrial.php">
      <h4>🧑‍🏭 Manufacturing &amp; Industrial Systems (Welding, Automation)</h4>
      <p>
        Certified welding, fabrication, machine maintenance, industrial robotics support for energy and heavy industry.
        AWS CWI • ETA Industrial Electronics.
      </p>
    </a>

    <!-- 12. Business Development & Management -->
    <a class="industry" href="business-development.php">
      <h4>� Business Development &amp; Management</h4>
      <p>
        Corporate growth strategy, GTM playbooks, partner ecosystems, program & portfolio management,
        operations dashboards, OKRs & governance, enterprise CRM/ERP alignment.
        Cert paths: PMP/PRINCE2 • ITIL (strategy) • CIMA (Mgmt) • CRM/ERP Admin.
      </p>
    </a>

    <!-- 13. Marketing & Sales Leadership -->
    <a class="industry" href="marketing-sales.php">
      <h4>📈 Marketing &amp; Sales Leadership</h4>
      <p>
        Funnel architecture, performance marketing, brand & content systems, sales enablement,
        RevOps, field force automation, multi-channel campaigns at scale.
        Cert paths: HubSpot • Google Analytics • Meta/LinkedIn Ads • Certified Sales Professional.
      </p>
    </a>

    <!-- 14. Management Accounting & Financial Technology -->
    <a class="industry" href="management-accounting.php">
      <h4>🧾 Management Accounting &amp; Financial Technology</h4>
      <p>
        Budget controls, cost reporting, compliance analytics, decision dashboards for boards and regulators.
        CIMA • CPA • Financial Data Analyst.
      </p>
    </a>

    <!-- 15. Government & Civic Technology (GovTech) -->
    <a class="industry" href="govtech.php">
      <h4>🏛 Government &amp; Civic Technology (GovTech)</h4>
      <p>
        e-Government portals, secure citizen services, national ID systems,
        digital governance and cybersecurity for ministries.
        GovCloud • Data Protection Officer.
      </p>
    </a>

    <!-- 16. Agricultural Technology (AgriTech) -->
    <a class="industry" href="agritech.php">
      <h4>🌾 Agricultural Technology (AgriTech)</h4>
      <p>
        Smart farming sensors, soil telemetry, crop analytics, supply-chain traceability platforms.
        IoT Data Analyst • Smart Agriculture Engineer.
      </p>
    </a>

    <!-- 17. Financial Services & Investment Technology (FinTech) -->
    <a class="industry" href="fintech.php">
      <h4>💳 Financial Services &amp; Investment Technology (FinTech)</h4>
      <p>
        Digital banking platforms, payments integration, anti-fraud automation,
        AI-driven credit scoring for microfinance and national payment rails.
        Certified FinTech Pro • Payments Security.
      </p>
    </a>

    <!-- 18. Education Technology (EdTech) -->
    <a class="industry" href="edtech.php">
      <h4>🎓 Education Technology (EdTech)</h4>
      <p>
        Digital learning platforms, virtual labs, LMS deployment, AI student analytics
        for schools, universities, and ministries of education.
        Google Educator • Learning Analytics.
      </p>
    </a>

    <!-- 19. Creative & Digital Media Technology -->
    <a class="industry" href="creative-media.php">
      <h4>🎨 Creative &amp; Digital Media Technology</h4>
      <p>
        Brand systems, interactive content, 3D visualization, training media,
        immersive learning assets for education and enterprise.
        Adobe Certified Professional • Unity.
      </p>
    </a>

    <!-- 20. Logistics & Smart Mobility (Supply Chain 4.0) -->
    <a class="industry" href="smart-mobility.php">
      <h4>🚚 Logistics &amp; Smart Mobility (Supply Chain 4.0)</h4>
      <p>
        Fleet telematics, route optimization, warehouse automation, smart delivery networks.
        APICS • CSCP • IoT Fleet Engineer.
      </p>
    </a>

  </div>
</section>

<!-- Full Apply Form -->
<section id="apply" class="section">
  <h2>Apply to Become a Team Leader</h2>
  <p style="color: #6b7280; font-size: 16px; line-height: 1.7; max-width:900px; margin: 0 auto 40px; text-align: center;">
    Fill the form below and we will contact you within 48 hours. You are applying for a leadership position
    in the Investor Education Work Network (IEWN). Only <strong>100 Team Leaders</strong> are accepted per industry.
  </p>

  <form method="post" action="send-mail.php" class="application-form">
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
        <label>Phone</label>
        <input name="phone" required>
      </div>

      <div class="field">
        <label>Industry of Interest</label>
        <select name="industry" required>
        <option value="">Select...</option>
        <option>Intelligent Cloud, Data & AI</option>
        <option>Cybersecurity & Digital Defense</option>
        <option>Information Technology & Software Engineering</option>
        <option>Medical Technology / Healthcare IT / Life Sciences</option>
        <option>Renewable & Sustainable Energy (Wind & Solar)</option>
        <option>Smart Home & Building Automation</option>
        <option>Fiber Optics & Data Cabling</option>
        <option>Communications & Satellite Technology (5G / RF / DAS)</option>
        <option>Architecture, Engineering & Construction (AEC)</option>
        <option>Manufacturing & Industrial Systems (Welding / Automation)</option>
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
    </div>

    <div class="field">
      <label>Why are you a fit to lead a 50-person delivery unit?</label>
      <textarea name="message" rows="5" placeholder="Tell us briefly about your leadership experience, technical background, and vision for building and managing a certified workforce in your chosen industry..."></textarea>
    </div>

    <input type="hidden" name="source" value="Full Apply">
    <button class="btn" type="submit">Submit Application</button>
  </form>
  <p style="text-align:center; margin-top:16px; font-size:0.95rem; color:#4b5563;">
    Need more detail on how the 1:50 pods work before you apply? 
    <a href="leadership.php?utm_source=home&utm_medium=below-form&utm_campaign=leadership">Read the full Leadership (1:50) Guide &raquo;</a>
  </p>
</section>

<script>
// Animated Counter for Stats
function animateCounter(element, target, duration = 2000) {
  const start = 0;
  const increment = target / (duration / 16); // 60fps
  let current = start;
  
  const timer = setInterval(() => {
    current += increment;
    if (current >= target) {
      current = target;
      clearInterval(timer);
    }
    
    // Format number with commas
    const formatted = Math.floor(current).toLocaleString('en-US');
    element.textContent = formatted + ' USD';
  }, 16);
}

// Trigger animation on page load
document.addEventListener('DOMContentLoaded', () => {
  const statValues = document.querySelectorAll('.stat-value[data-target]');
  
  // Delay slightly for better UX
  setTimeout(() => {
    statValues.forEach(stat => {
      const target = parseInt(stat.getAttribute('data-target'));
      animateCounter(stat, target);
    });
  }, 300);
});
</script>

<!-- Structured Data: Organization + Website + Breadcrumbs -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "name": "Investor Education Program",
      "url": "<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>",
      "logo": "https://invest.btheducationgroup.com/image/logo-og.png",
      "sameAs": [
        "https://linkedin.com/company/btheducationgroup",
        "https://twitter.com/btheducationgrp"
      ]
    },
    {
      "@type": "WebSite",
      "name": "Investor Education Program",
      "url": "<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>"
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>"
        }
      ]
    }
  ]
}
</script>

<?php include 'footer.php'; ?>