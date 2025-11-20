<?php
$page_title = "Investor Education Program — Build Teams • Earn • Lead";
$meta_description = "Join the Investor Education Program — build teams, earn commissions, lead industries. Limited to 100 leaders per sector. Apply now.";
$og_title = $page_title;
$og_description = $meta_description;
$og_image = "https://invest.btheducationgroup.com/image/logo-og.png"; // Your OG logo
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
        <a class="btn" href="#apply">Become a Team Leader</a>
        <a class="btn-outline" href="#how">How it Works</a>
      </div>
      <div class="stats">
        <div class="stat">
          <div class="stat-value" style="font-weight: 800; font-size: 20px;">44,321 USD</div>
          <div class="stat-label" style="font-size: 13px; white-space: nowrap;">Team-building commission</div>
        </div>
        <div class="stat">
          <div class="stat-value" style="font-weight: 800; font-size: 20px;">2,127,372 USD</div>
          <div class="stat-label" style="font-size: 13px; white-space: nowrap;">Leader annual income</div>
        </div>
        <div class="stat">
          <div class="stat-value" style="font-weight: 800; font-size: 20px;">63,822 USD</div>
          <div class="stat-label" style="font-size: 13px; white-space: nowrap;">Member annual income</div>
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
            <label>Industry</label>
            <select name="industry" required>
              <option value="">Select...</option>
              <option>Cybersecurity</option>
              <option>Intelligent Cloud</option>
              <option>Medical Technology</option>
              <option>Information Technology</option>
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
          <input type="hidden" name="source" value="Quick Apply">
          <button class="btn" type="submit">Apply Now</button>
        </form>
      </div>
    </div>
  </div>
</header>

<!-- How it Works -->
<section id="how" class="section">
  <h2>How it Works</h2>
  <div class="how">
    <div class="step">
      <strong>1. Train & Certify</strong><br>
      3 years of structured training from beginner → expert.
    </div>
    <div class="step">
      <strong>2. Build Your Team</strong><br>
      1:50 model — recruit and mentor a team of 50.
    </div>
    <div class="step">
      <strong>3. Deploy Contracts</strong><br>
      Deliver services to 10 companies × 10 branches monthly.
    </div>
    <div class="step">
      <strong>4. Earn Residual Income</strong><br>
      Up to <strong>2,127,372 USD</strong>/year per leader.
    </div>
  </div>
</section>

<!-- Industries -->
<section class="section">
  <h2>Explore Industries</h2>
  <div class="grid">
    <a class="industry" href="cybersecurity.php"><h4>🔐 Cybersecurity</h4><p>Certifications, SOC, PenTest, Compliance.</p></a>
    <a class="industry" href="intelligent-cloud.php"><h4>☁ Intelligent Cloud</h4><p>Cloud, Data & AI, Apps & Infra.</p></a>
    <a class="industry" href="medical-technology.php"><h4>🔬 Medical Technology</h4><p>Biomedical tech, telemedicine, devices.</p></a>
    <a class="industry" href="information-technology.php"><h4>🧑‍💻 Information Technology</h4><p>Full-stack, ITIL, enterprise systems.</p></a>
    <a class="industry" href="welding-industry.php"><h4>🧑‍🏭 Welding Industry</h4><p>Advanced welding, AWS cert, pipelines.</p></a>
    <a class="industry" href="automotive-industry.php"><h4>🚘 Automotive Industry</h4><p>EV tech, CAD/CAM, manufacturing.</p></a>
    <a class="industry" href="aec-industry.php"><h4>👷‍♀️ Architecture, Engineering & Construction</h4><p>BIM, project mgmt, green building.</p></a>
    <a class="industry" href="business-development.php"><h4>📉 Business Development, Marketing & Sales</h4><p>Sales, CRM, market expansion.</p></a>
    <a class="industry" href="management-accounting.php"><h4>🧾 Management Accounting</h4><p>CIMA, CMA, budgeting, cost control.</p></a>
    <a class="industry" href="communications.php"><h4>📡 Communications</h4><p>5G, B-VoIP, DAS, Satellite, WCM.</p></a>
    <a class="industry" href="fiber-optics.php"><h4>🚠 Fiber Optics & Data Cabling</h4><p>FOA, splicing, testing.</p></a>
    <a class="industry" href="smart-home.php"><h4>📲 Smart Home & Security</h4><p>IoT, alarms, automation.</p></a>
    <a class="industry" href="renewable-energy.php"><h4>🔌 Renewable Energy</h4><p>Solar, wind, batteries.</p></a>
  </div>
</section>

<!-- Full Apply Form -->
<section id="apply" class="section">
  <h2>Apply to Become a Team Leader</h2>
  <p class="muted">Fill the form below and we will contact you within 48 hours.</p>
  <form method="post" action="send-mail.php" style="max-width:760px">
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
      <label>Industry of Interest</label>
      <select name="industry" required>
        <option value="">Select...</option>
        <option>Cybersecurity</option>
        <option>Intelligent Cloud</option>
        <option>Medical Technology</option>
        <option>Information Technology</option>
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
    <div class="field">
      <label>Short Message</label>
      <textarea name="message" rows="4"></textarea>
    </div>
    <input type="hidden" name="source" value="Full Apply">
    <button class="btn" type="submit">Submit Application</button>
  </form>
</section>

<?php include 'footer.php'; ?>