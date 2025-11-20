<?php
// ===============================================
// Manufacturing & Industrial Systems (Welding, Automation)
// ===============================================
$page_title       = "Manufacturing & Industrial Systems — Weld • Automate • Maintain";
$meta_description = "Certified welding, fabrication, industrial automation, robotics, maintenance & reliability — delivered via 1:50 pods for energy, heavy industry, OEMs and infrastructure projects.";
$og_title         = $page_title;
$og_description   = $meta_description;
$og_image         = "https://invest.btheducationgroup.com/image/logo-og.png";
$og_url           = "https://invest.btheducationgroup.com/manufacturing-industrial.php";
// Page-scoped CSS for Manufacturing
$page_styles = ['assets/css/page/manufacturing.css'];
include 'header.php';
?>

<?php 
$breadcrumb_items = [
  ['label' => 'Home', 'href' => 'index.php'],
  ['label' => 'Industries', 'href' => 'index.php#industries'],
  ['label' => 'Manufacturing & Industrial Systems']
];
include 'breadcrumbs.php';
?>

<?php
  // Configure hero video (no overlay). Prefer MP4/WebM if available; keep MOV as fallback.
  // Poster detection
  if (!isset($hero_video_poster) || !$hero_video_poster) {
    foreach (['media/industrial/hero-poster.webp','media/industrial/hero-poster.jpg','media/industrial/hero-poster.png'] as $p) {
      if (file_exists($p)) { $hero_video_poster = $p; break; }
    }
    if (!isset($hero_video_poster)) $hero_video_poster = '';
  }

  // Source detection
  if (!isset($hero_video_sources) || !is_array($hero_video_sources) || empty($hero_video_sources)) {
    $hero_video_sources = [];
    if (file_exists('media/industrial/hero.webm')) {
      $hero_video_sources[] = [ 'src' => 'media/industrial/hero.webm', 'type' => 'video/webm' ];
    }
    if (file_exists('media/industrial/hero.mp4')) {
      $hero_video_sources[] = [ 'src' => 'media/industrial/hero.mp4', 'type' => 'video/mp4' ];
    }
    // Always add MOV fallbacks (raw and URL-encoded)
    $hero_video_sources[] = [ 'src' => 'Backups/Welding/welding school classes online instagram post  (1).mov', 'type' => 'video/quicktime' ];
    $hero_video_sources[] = [ 'src' => 'Backups/Welding/welding%20school%20classes%20online%20instagram%20post%20%20(1).mov', 'type' => 'video/quicktime' ];
  }

  $has_hero_video = !empty($hero_video_sources) && is_array($hero_video_sources);
?>
<header<?php echo $has_hero_video ? ' class="has-hero-video"' : ''; ?>>
  <?php if ($has_hero_video): ?>
    <div class="hero-video-bg" aria-hidden="true">
      <video class="hero-video" autoplay muted loop playsinline webkit-playsinline preload="auto" <?php if (!empty($hero_video_poster)) { echo 'poster="' . htmlspecialchars($hero_video_poster, ENT_QUOTES) . '"'; } ?>>
        <?php foreach ($hero_video_sources as $source): ?>
          <?php if (!empty($source['src']) && !empty($source['type'])): ?>
            <source src="<?php echo htmlspecialchars($source['src'], ENT_QUOTES); ?>" type="<?php echo htmlspecialchars($source['type'], ENT_QUOTES); ?>">
          <?php endif; ?>
        <?php endforeach; ?>
      </video>
    </div>
  <?php endif; ?>
  <div class="hero">
    <div class="hero-left">
      <h1>Weld. Automate. Maintain.<br><strong>Manufacturing &amp; Industrial Systems Pods</strong></h1>

      <p class="lead">
        Certified <strong>welding &amp; fabrication</strong>, <strong>PLC/SCADA &amp; robotics automation</strong>, and
        <strong>maintenance &amp; reliability engineering</strong> — delivered through a managed
        <strong>1:50 Manufacturing &amp; Industrial pod</strong> for energy, heavy industry, OEMs and
        large infrastructure projects.
      </p>

      <p class="lead" style="font-size:0.95rem;color:#dbeafe;max-width:720px;margin-top:8px;">
        Built for <strong>code-compliant weld quality, uptime and safety</strong> across AWS, ISO, IEC, NFPA,
        OSHA, SMRP and global industrial standards — from fabrication shops to refineries and smart factories.
      </p>

      <div class="cta-row">
        <a class="btn" href="#apply">Become a Manufacturing &amp; Industrial Team Leader</a>
        <a class="btn-outline" href="#hire-industrial">Request Industrial Engagement</a>
      </div>

      <div class="stats">
        <div class="stat">
          <div class="stat-value" data-target="44321" data-suffix=" USD">0 USD</div>
          <div class="stat-label" style="font-size:13px;white-space:nowrap;">Team-Building Commission</div>
        </div>
        <div class="stat">
          <div class="stat-value" data-target="2127372" data-suffix=" USD">0 USD</div>
          <div class="stat-label" style="font-size:13px;white-space:nowrap;">Leader Annual Income Potential</div>
        </div>
        <div class="stat">
          <div class="stat-value" data-target="63822" data-suffix=" USD">0 USD</div>
          <div class="stat-label" style="font-size:13px;white-space:nowrap;">Member Annual Income Potential</div>
        </div>
      </div>

      <div style="margin-top:12px;display:flex;flex-wrap:wrap;gap:8px;">
        <span class="badge">AWS CWI &amp; Welding Codes</span>
        <span class="badge">ETA Industrial Electronics</span>
        <span class="badge">ISA Automation &amp; PLC/SCADA</span>
        <span class="badge">SMRP Reliability &amp; Maintenance</span>
        <span class="badge">OSHA / NEBOSH Safety Aligned</span>
      </div>
    </div>

    <div class="hero-right">
      <div class="card">
        <strong>Quick Apply — Manufacturing &amp; Industrial Systems</strong>
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
              <option>Heavy Industry / Manufacturing Plant</option>
              <option>Oil &amp; Gas / Petrochemical / Refinery</option>
              <option>Power / Utilities / Renewable Energy</option>
              <option>Fabrication Shop / OEM / EPC Contractor</option>
              <option>Mining / Metals / Cement</option>
              <option>Port / Logistics / Infrastructure Operator</option>
              <option>Individual Leader (Investor Education)</option>
            </select>
          </div>
          <div class="field">
            <label>I’m interested in</label>
            <select name="interest" required>
              <option value="">Select…</option>
              <option>Engaging BTH for Welding &amp; Fabrication Services</option>
              <option>Engaging BTH for Automation &amp; Maintenance Services</option>
              <option>Becoming a 1:50 Manufacturing &amp; Industrial Team Leader</option>
              <option>Joining a 1:50 Manufacturing &amp; Industrial Team</option>
            </select>
          </div>
          <input type="hidden" name="industry" value="Manufacturing & Industrial Systems (Welding & Automation)">
          <input type="hidden" name="source" value="Quick Apply • Manufacturing & Industrial">
          <button class="btn" type="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
 </header>

<section id="nav" class="section">
  <h2>Quick Navigation</h2>
  <div class="grid">
    <a class="card" href="#value">What We Deliver</a>
    <a class="card" href="#welding">Welding &amp; Fabrication Processes</a>
    <a class="card" href="#automation">Automation &amp; Industrial Systems</a>
    <a class="card" href="#team">1:50 Team &amp; Delivery Pods</a>
    <a class="card" href="#leadership">How 1:50 Leadership Works</a>
    <a class="card" href="#pathways">Training &amp; Certification Pathways</a>
    <a class="card" href="#safety">Safety, Codes &amp; Compliance</a>
    <a class="card" href="javascript:openIndustrialProcessesModal()">
      Processes &amp; Codes Manual
    </a>
    <a class="card" href="#commercials">Commercials &amp; Leader ROI</a>
    <a class="card" href="#engagement">Engagement Models</a>
    <a class="card" href="#case-studies">Case Studies &amp; Outcomes</a>
    <a class="card" href="#ecosystem">Ecosystem &amp; Technology Partners</a>
    <a class="card" href="#hire-industrial">Request Engagement</a>
    <a class="card" href="#apply">Apply to Lead</a>
  </div>
</section>

<section id="value" class="section">
  <h2>What We Deliver — Fabrication, Automation &amp; Reliability at Scale</h2>
  <div class="grid">
    <div class="card">
      <h3>Code-Compliant Welding &amp; Fabrication</h3>
      <p>From structural steel to pressure parts — SMAW, GMAW, FCAW, GTAW, SAW and brazing — qualified to AWS, ASME and EN standards.</p>
    </div>
    <div class="card">
      <h3>PLC/SCADA &amp; Industrial Controls</h3>
      <p>Siemens, Rockwell, Schneider, Mitsubishi and IEC-based control systems for production lines, utilities and process plants.</p>
    </div>
    <div class="card">
      <h3>Robotics &amp; Automated Cells</h3>
      <p>FANUC, ABB, KUKA, Yaskawa robotic cells for welding, handling, cutting, painting and packaging — from concept to commissioning.</p>
    </div>
    <div class="card">
      <h3>Maintenance &amp; Reliability Engineering</h3>
      <p>Preventive &amp; predictive maintenance, vibration analysis, failure analysis and reliability programs aligned with SMRP &amp; ISO.</p>
    </div>
    <div class="card">
      <h3>Industrial Electronics &amp; Drives</h3>
      <p>VFDs, soft starters, MCCs, industrial electronics troubleshooting and power quality for heavy rotating equipment and drives.</p>
    </div>
    <div class="card">
      <h3>Smart Factory &amp; OEE Optimization</h3>
      <p>IIoT sensors, OEE dashboards, digital twins and energy monitoring to drive throughput and reduce downtime.</p>
    </div>
    <div class="card">
      <h3>Shutdowns &amp; Turnarounds</h3>
      <p>Integrated welding, maintenance and automation teams for major shutdowns, outages and industrial turnarounds.</p>
    </div>
    <div class="card">
      <h3>Retrofits &amp; Modernization</h3>
      <p>Control upgrades, legacy equipment retrofits and modernization of lines to meet productivity, quality and safety targets.</p>
    </div>
  </div>
</section>

<section id="welding" class="section">
  <h2>Welding &amp; Fabrication Processes — End-to-End Capability</h2>
  <p class="muted" style="max-width:900px;margin:0 auto 20px;">
    Your 1:50 pod covers core manual, semi-automatic and fully automated welding processes — from shop fabrication to field work
    on refineries, pipelines, plants and infrastructure.
  </p>
  <div class="grid">
    <div class="card">
      <h3>Core Arc Welding (Manual &amp; Semi-Automatic)</h3>
      <ul>
        <li><strong>SMAW</strong> — Shielded Metal Arc Welding (Stick)</li>
        <li><strong>GMAW</strong> — Gas Metal Arc Welding (MIG)</li>
        <li><strong>GMAW-S</strong> — Short-Circuit Transfer</li>
        <li><strong>GMAW-P</strong> — Pulsed Spray Transfer</li>
        <li><strong>FCAW</strong> — Flux Cored Arc Welding (gas-shielded &amp; self-shielded)</li>
        <li><strong>GTAW</strong> — Gas Tungsten Arc Welding (TIG)</li>
      </ul>
    </div>
    <div class="card">
      <h3>Submerged Arc, Brazing &amp; Special Processes</h3>
      <ul>
        <li><strong>SAW</strong> — Submerged Arc Welding (single &amp; multi-wire)</li>
        <li><strong>BZ</strong> — Brazing and braze welding</li>
        <li>Oxy-fuel welding &amp; cutting</li>
        <li>Carbon arc gouging &amp; back-gouging</li>
        <li>Thermal spraying / hardfacing</li>
      </ul>
    </div>
    <div class="card">
      <h3>Cutting, Fit-Up &amp; NDT</h3>
      <ul>
        <li>Plasma cutting &amp; CNC profile cutting</li>
        <li>Fit-up, tack welding &amp; positional welding</li>
        <li>Visual inspection (VT) &amp; weld gauge checks</li>
        <li>Coordination with NDT (PT, MT, UT, RT) teams</li>
        <li>Welding procedure qualification (WPS/PQR) support</li>
      </ul>
    </div>
    <div class="card">
      <h3>Shop &amp; Field Applications</h3>
      <ul>
        <li>Structural steel fabrication &amp; erection</li>
        <li>Piping systems &amp; process spools</li>
        <li>Pressure vessels, tanks &amp; boilers (with code partners)</li>
        <li>Rail, shipyard and heavy equipment repairs</li>
      </ul>
    </div>
  </div>
</section>

<section id="automation" class="section">
  <h2>Automation &amp; Industrial Systems Services</h2>
  <p class="muted" style="max-width:900px;margin:0 auto 20px;">
    Beyond welding, your pod delivers full automation, controls and reliability services across manufacturing lines, refineries,
    utilities and smart factories.
  </p>
  <div class="grid">
    <div class="card">
      <h3>PLC &amp; SCADA Programming</h3>
      <ul>
        <li>PLC programming: Siemens, Rockwell, Schneider, Mitsubishi</li>
        <li>SCADA systems: Ignition, Wonderware, WinCC and others</li>
        <li>Process interlocks, alarms and sequence logic</li>
        <li>Integration with sensors, drives, MCCs and safety systems</li>
      </ul>
    </div>
    <div class="card">
      <h3>Industrial Robotics &amp; Cells</h3>
      <ul>
        <li>Robotic welding cells (FANUC, ABB, KUKA, Yaskawa)</li>
        <li>Pick-and-place, palletizing, cutting, painting &amp; packaging robots</li>
        <li>End-of-arm tooling design and fixture concepts</li>
        <li>Robot safety, guarding and risk assessment</li>
      </ul>
    </div>
    <div class="card">
      <h3>Maintenance &amp; Reliability</h3>
      <ul>
        <li>Preventive &amp; predictive maintenance plans (PdM)</li>
        <li>Vibration, thermography and oil analysis coordination</li>
        <li>Criticality analysis, RCM and FMEA/FMECA support</li>
        <li>Maintenance KPIs: MTBF, MTTR, availability, OEE contribution</li>
      </ul>
    </div>
    <div class="card">
      <h3>Industrial Electronics &amp; Drives</h3>
      <ul>
        <li>VFDs, soft starters, servo drives and motion control</li>
        <li>MCCs, starters, panels and industrial controls</li>
        <li>PLC–drive integration and energy optimization</li>
        <li>Troubleshooting of industrial electronics circuits</li>
      </ul>
    </div>
    <div class="card">
      <h3>Smart Factory &amp; IIoT</h3>
      <ul>
        <li>OEE monitoring and production dashboards</li>
        <li>IIoT sensor networks for machines and lines</li>
        <li>Digital twin concepts for production and layout</li>
        <li>Energy, compressed air and utility performance tracking</li>
      </ul>
    </div>
    <div class="card">
      <h3>Shutdowns, Turnarounds &amp; Retrofits</h3>
      <ul>
        <li>Integrated weld, automation &amp; maintenance teams for turnarounds</li>
        <li>Legacy PLC migrations and panel retrofits</li>
        <li>De-bottlenecking and modernization projects</li>
        <li>Commissioning, loop checks and performance tests</li>
      </ul>
    </div>
  </div>
</section>

<section id="team" class="section">
  <h2>1:50 Team — Welding, Automation &amp; Reliability Pods</h2>
  <p class="muted" style="max-width:900px;margin:0 auto 20px;">
    One certified leader coordinates five tightly integrated pods — welding/fabrication, automation, maintenance, electronics
    and safety — to deliver industrial outcomes for multiple plants and projects.
  </p>
  <div class="grid">
    <div class="card">
      <h3>Leadership &amp; Coordination</h3>
      <ul>
        <li>Manufacturing &amp; Industrial Team Leader (1)</li>
        <li>Project / Turnaround Coordinator</li>
        <li>QA/QC &amp; Document Control</li>
      </ul>
    </div>
    <div class="card">
      <h3>Welding &amp; Fabrication Pod</h3>
      <ul>
        <li>Certified Welders (SMAW/GMAW/FCAW/GTAW/SAW)</li>
        <li>Fitters &amp; Fabricators</li>
        <li>Welding Supervisors &amp; Inspectors (with AWS-aligned partners)</li>
      </ul>
    </div>
    <div class="card">
      <h3>Automation &amp; Controls Pod</h3>
      <ul>
        <li>PLC/SCADA Programmers (Siemens/Rockwell etc.)</li>
        <li>Control Systems Technicians (ISA CCST track)</li>
        <li>HMI/SCADA Engineers &amp; Field Integrators</li>
      </ul>
    </div>
    <div class="card">
      <h3>Robotics &amp; Mechatronics Pod</h3>
      <ul>
        <li>Robotics Technicians (FANUC/ABB/KUKA/Yaskawa)</li>
        <li>Mechatronics Technicians (Siemens/NIMS tracks)</li>
        <li>Vision &amp; Sensor Integration Specialists</li>
      </ul>
    </div>
    <div class="card">
      <h3>Maintenance &amp; Reliability Pod</h3>
      <ul>
        <li>Industrial Maintenance Technicians</li>
        <li>Predictive Maintenance &amp; Vibration Techs</li>
        <li>Reliability &amp; Planning Support (CMRP-aligned)</li>
      </ul>
    </div>
    <div class="card">
      <h3>Safety &amp; Compliance Pod</h3>
      <ul>
        <li>Safety Officers (OSHA/NEBOSH aligned)</li>
        <li>Permit-to-work &amp; LOTO Coordinators</li>
        <li>Audit &amp; Compliance Support for ISO/IEC/OSHA</li>
      </ul>
    </div>
  </div>
</section>

<section id="leadership" class="section">
  <h2>How the 1:50 Industrial Leadership Works</h2>
  <p class="muted" style="max-width:900px;margin:0 auto 20px;">
    The Manufacturing &amp; Industrial leadership program is built on the Investor Education 1:50 model and the HEXAD mentoring
    framework — Personal, Professional, Occupational (Work Production), Financial and Truth Education — so that leaders don’t
    just run projects; they build industrial workforces and long-term industrial portfolios.
  </p>
  <div class="grid">
    <div class="card">
      <h3>Train — Form the Leader &amp; the Pod</h3>
      <ul>
        <li>Leader progresses through AWS, ISA, ETA, SMRP and safety-aligned certification tracks, mapped to industrial sectors.</li>
        <li>Members are trained in welding, automation, maintenance, electronics and safety streams, aligned to your 18-sector framework.</li>
        <li>HEXAD mentoring (PD → TE) ensures work ethic, safety culture, leadership and financial literacy are embedded from day one.</li>
      </ul>
    </div>
    <div class="card">
      <h3>Build — Assemble &amp; Govern the 1:50 Pod</h3>
      <ul>
        <li>Leader recruits and mentors a 1:50 team across welding/fabrication, automation, maintenance, safety and documentation.</li>
        <li>Clear role definitions, RACI, shift patterns and escalation paths across projects, plants and geographies.</li>
        <li>Governance via standardized procedures, job packs, safety talks, toolbox meetings and documented workflows.</li>
      </ul>
    </div>
    <div class="card">
      <h3>Deploy — Operate Across Multiple Plants &amp; Contracts</h3>
      <ul>
        <li>Pods are scheduled across refineries, power plants, fabrication shops, mines and infrastructure projects.</li>
        <li>Engagement models include project-based, managed services and capacity augmentation, with SLAs and KPIs agreed upfront.</li>
        <li>Leader coordinates with client engineering, HSE and operations to align scope, schedule and compliance requirements.</li>
      </ul>
    </div>
    <div class="card">
      <h3>Earn — Commissions, Residuals &amp; Industrial Portfolios</h3>
      <ul>
        <li>Leader earns active commissions for building and stabilizing the 1:50 pod, aligned with Investor Education financial models.</li>
        <li>Residual income is tied to recurring managed services contracts, plant support and long-term industrial programs.</li>
        <li>Over time, each leader builds a portfolio of industrial clients and contracts, with earning potential mapped to the ROI ladder.</li>
      </ul>
    </div>
  </div>
</section>

<section id="pathways" class="section">
  <h2>Training &amp; Certification Pathways</h2>
  <p class="muted" style="max-width:900px;margin:0 auto 20px;">
    Your 1:50 pod is built around global certifications, not generic training. Below are the core certification streams your
    leaders and members follow.
  </p>
  <div class="grid">
    <div class="card">
      <h3>Welding &amp; Fabrication</h3>
      <ul>
        <li>AWS Certified Welder (CW) — process &amp; position-specific</li>
        <li>AWS Certified Welding Inspector (CWI)</li>
        <li>AWS Certified Robotic Arc Welding (CRAW)</li>
        <li>ASME &amp; EN code-aligned procedure &amp; welder qualifications (with partners)</li>
      </ul>
    </div>
    <div class="card">
      <h3>Automation, PLC &amp; SCADA</h3>
      <ul>
        <li>ISA CCST (Control Systems Technician)</li>
        <li>ISA CAP (Certified Automation Professional)</li>
        <li>Siemens TIA Portal / S7 Certifications</li>
        <li>Rockwell ControlLogix / CompactLogix &amp; SCADA certifications</li>
        <li>Ignition SCADA / Wonderware certifications</li>
      </ul>
    </div>
    <div class="card">
      <h3>Robotics &amp; Mechatronics</h3>
      <ul>
        <li>FANUC Certified Education Robot Training (CERT)</li>
        <li>ABB / KUKA / Yaskawa robot programming certifications</li>
        <li>Siemens Mechatronics Systems Certification</li>
        <li>Vision &amp; sensing (Cognex &amp; equivalent training)</li>
      </ul>
    </div>
    <div class="card">
      <h3>Industrial Electronics &amp; Drives</h3>
      <ul>
        <li>ETA Industrial Electronics Technician</li>
        <li>ETA CET (Associate / Master)</li>
        <li>VFD &amp; Drives training (Siemens, Rockwell, Schneider)</li>
        <li>MCC, motor control &amp; industrial power systems training</li>
      </ul>
    </div>
    <div class="card">
      <h3>Maintenance &amp; Reliability</h3>
      <ul>
        <li>SMRP Certified Maintenance &amp; Reliability Professional (CMRP)</li>
        <li>ASQ Certified Reliability Engineer (CRE)</li>
        <li>Mobius vibration analysis &amp; condition monitoring</li>
        <li>RCM &amp; FMEA/FMECA methods training</li>
      </ul>
    </div>
    <div class="card">
      <h3>Safety, Codes &amp; Industrial Compliance</h3>
      <ul>
        <li>OSHA 30 / OSHA 10 for industry</li>
        <li>NEBOSH International General Certificate</li>
        <li>NFPA 70E electrical safety training</li>
        <li>ISO/IEC, energy &amp; environmental standards (with partners)</li>
      </ul>
    </div>
  </div>
</section>

<section id="safety" class="section">
  <h2>Safety, Codes &amp; Compliance</h2>
  <p class="muted" style="max-width:900px;margin:0 auto 20px;">
    Every pod is structured to support your existing code-of-construction and safety obligations — not to replace your licensed
    engineers or regulators, but to give them a disciplined, audit-ready field force.
  </p>
  <div style="text-align:center;margin:20px 0 10px;">
    <button type="button" class="btn-outline" onclick="openIndustrialProcessesModal()">
      View Full Processes &amp; Codes Manual
    </button>
  </div>
  <div class="grid">
    <div class="card">
      <h3>Safety KPIs — Lagging Indicators</h3>
      <ul>
        <li>TRIR (Total Recordable Incident Rate) and LTIR (Lost-Time Incident Rate) tracked per project and per site.</li>
        <li>Recordable and near-miss events logged with corrective and preventive actions (CAPA).</li>
        <li>Weld repair rates, rework and defect trends monitored as quality-linked safety signals.</li>
      </ul>
    </div>
    <div class="card">
      <h3>Safety KPIs — Leading Indicators</h3>
      <ul>
        <li>Toolbox talks, safety meetings and JSAs completed per shift and per crew.</li>
        <li>Training hours per worker (OSHA/NEBOSH-aligned, task-specific safety refreshers).</li>
        <li>LOTO, permits-to-work, confined-space and hot-work controls tracked and audited.</li>
      </ul>
    </div>
    <div class="card">
      <h3>SLAs &amp; Governance</h3>
      <ul>
        <li>Contract-specific safety and environmental targets defined at engagement start.</li>
        <li>Regular safety reporting cadence for clients (weekly/monthly dashboards and incident summaries).</li>
        <li>Joint audits with client HSE teams and continuous-improvement reviews across the 1:50 pod.</li>
      </ul>
    </div>
  </div>
  <div class="grid">
    <div class="card">
      <h3>Welding &amp; Fabrication Codes</h3>
      <ul>
        <li>AWS structural &amp; pipe welding codes</li>
        <li>Alignment with ASME &amp; EN pressure equipment standards (via your code engineers)</li>
        <li>WPS/PQR support, welder performance qualification and continuity tracking</li>
      </ul>
    </div>
    <div class="card">
      <h3>Automation, Controls &amp; Electrical Safety</h3>
      <ul>
        <li>IEC &amp; ISA control standards</li>
        <li>NFPA 70/70E for industrial electrical systems (with your licensed teams)</li>
        <li>Lock-out/tag-out (LOTO), arc flash and permit-to-work processes</li>
      </ul>
    </div>
    <div class="card">
      <h3>Industrial Safety &amp; Environment</h3>
      <ul>
        <li>OSHA / NEBOSH frameworks for industrial operations</li>
        <li>Confined space, hot work and working-at-height protocols</li>
        <li>Support for ISO 45001 and ISO 14001 programs</li>
      </ul>
    </div>
  </div>
</section>

<section id="commercials" class="section">
  <h2>Commercials — Pods &amp; Leader ROI</h2>

  <!-- Styles moved to assets/css/page/manufacturing.css -->

  <div class="card" style="overflow:auto;margin-bottom:20px;">
    <h3>Pod Economics (Illustrative)</h3>
    <p class="muted" style="margin-bottom:10px;">
      Each 1:50 Manufacturing &amp; Industrial pod operates like a serious industrial contractor — priced on delivered capacity,
      risk profile and SLA, not just headcount.
    </p>
    <table class="pod-economics-table">
      <thead>
        <tr>
          <th>
            Pod Type
          </th>
          <th>
            Velocity (pts/mo)
            <span class="help-icon" title="Velocity is a capacity metric indicating how much accepted work the pod completes per month. Higher points mean more executed scope across plants and projects.">?</span>
          </th>
          <th>
            Monthly Rate (USD)
            <span class="help-icon" title="Typical monthly commercial range for a fully deployed 1:50 pod. Exact figures depend on geography, risk profile and SLA.">?</span>
          </th>
          <th>
            Typical Scope
            <span class="help-icon" title="Representative work packages and outcomes delivered by this pod type in heavy industry, energy and infrastructure.">?</span>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr class="pod-row-welding">
          <td>Welding &amp; Fabrication</td>
          <td>80–120</td>
          <td>$60k–$100k</td>
          <td>Structural, piping, tank repairs, shutdown weld teams</td>
        </tr>
        <tr class="pod-row-automation">
          <td>Automation &amp; Robotics</td>
          <td>90–130</td>
          <td>$70k–$115k</td>
          <td>PLC/SCADA, robot cells, upgrades, commissioning</td>
        </tr>
        <tr class="pod-row-maintenance">
          <td>Maintenance &amp; Reliability</td>
          <td>90–140</td>
          <td>$65k–$105k</td>
          <td>PdM programs, reliability projects, shutdown support</td>
        </tr>
      </tbody>
    </table>
    <p class="muted">Rates vary by geography, risk profile, scope and SLA. Figures are illustrative and can be tailored per engagement.</p>
  </div>

  <div class="card" style="overflow:auto;">
    <h3>Leader ROI Ladder (Illustrative)</h3>
    <p class="muted" style="margin-bottom:10px;">
      As a 1:50 Manufacturing &amp; Industrial Team Leader, your income grows from active team-building commissions into residual
      earnings from multi-contract industrial portfolios.
    </p>
    <table class="roi-table">
      <thead>
        <tr>
          <th>Milestone</th>
          <th>
            Active Commission
            <span class="help-icon" title="Performance-linked commission for building and stabilizing your 1:50 Manufacturing &amp; Industrial pod.">?</span>
          </th>
          <th>
            Residual (Managed Services)
            <span class="help-icon" title="Income bands linked to recurring plant support, shutdown and modernization contracts managed by your pod.">?</span>
          </th>
          <th>
            Cumulative Annualized
            <span class="help-icon" title="Illustrative annualized view combining commission and residuals across multiple contracts.">?</span>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Month 3</td>
          <td>
            <span class="counter-value" data-prefix="$" data-target="14440">0</span>
          </td>
          <td>$120k–$240k</td>
          <td>$300k–$600k</td>
        </tr>
        <tr>
          <td>Month 6</td>
          <td>
            <span class="counter-value" data-prefix="$" data-target="28880">0</span>
          </td>
          <td>$480k–$960k</td>
          <td>$1.0M–$2.0M</td>
        </tr>
        <tr>
          <td>Month 12</td>
          <td>
            <span class="counter-value" data-prefix="$" data-target="44321">0</span>
          </td>
          <td>$1.2M–$2.4M</td>
          <td>$2.1M+</td>
        </tr>
      </tbody>
    </table>
    <p class="muted">
      All figures are illustrative and aligned to the Investor Education 1:50 model. Actual earnings depend on performance, number of
      active contracts, risk, geography and long-term client retention.
    </p>
  </div>

  <div class="commercials-footer">
    <div class="commercials-footer-cta">
      <a class="btn" href="#hire-industrial">Discuss Industrial Engagement</a>
      <a class="btn" href="#apply">Apply as 1:50 Industrial Leader</a>
      <a class="btn" href="docs/manufacturing-industrial-finance-pack.pdf" target="_blank" rel="noopener" download>
        Download Finance Pack (PDF)
      </a>
      <a class="btn" href="docs/manufacturing-industrial-brochure.pdf" target="_blank" rel="noopener" download>
        Download Services Brochure
      </a>
    </div>
    <div class="commercials-footer-note">
      Use the finance pack for deeper modeling and board-level reviews. Custom commercial structures, multi-site portfolios and
      joint-venture models can be developed on request.
    </div>
  </div>
</section>

<section id="engagement" class="section">
  <h2>Engagement Models — How Clients Work With Your 1:50 Pod</h2>
  <div class="grid">
    <div class="card">
      <h3>1. Project-Based (EPC, Turnaround, Retrofit)</h3>
      <p>
        Fixed-duration engagements for shutdowns, turnarounds, fabrication packages, automation upgrades or retrofits —
        with clear scopes, milestones and acceptance criteria.
      </p>
    </div>
    <div class="card">
      <h3>2. Managed Services (Plant Support)</h3>
      <p>
        Long-term contracts where your 1:50 pod provides ongoing welding, automation and maintenance support for one or more
        plants with defined SLAs and KPIs.
      </p>
    </div>
    <div class="card">
      <h3>3. Capacity Augmentation</h3>
      <p>
        When a client already has strong engineering, your pod plugs in as additional skilled capacity — welders, technicians,
        PLC/SCADA integrators, reliability analysts — under their supervision, with BTH governance and training.
      </p>
    </div>
  </div>
</section>

<section id="case-studies" class="section">
  <h2>Case Studies &amp; Outcomes</h2>
  <div class="grid">
    <div class="card">
      <h3>Refinery Turnaround — Weld &amp; Automation Pod</h3>
      <p>
        Coordinated welding, automation and maintenance teams delivered critical scope on a major refinery turnaround:
        code-compliant weld repair, PLC logic modifications and reliability improvements.
      </p>
      <ul>
        <li>On-time delivery &amp; zero recordable incidents</li>
        <li>Weld repair rework &lt; 2%</li>
        <li>Startup ahead of schedule with improved reliability indicators</li>
      </ul>
    </div>
    <div class="card">
      <h3>Smart Factory Upgrade — Robotics &amp; OEE</h3>
      <p>
        Robotics and IIoT-enabled OEE monitoring introduced on a high-volume manufacturing line, with a 1:50 pod managing
        design, commissioning and stabilization.
      </p>
      <ul>
        <li>Unplanned downtime reduced by ~30%</li>
        <li>OEE increased by 10–15% over 9 months</li>
        <li>Standardized maintenance &amp; reliability workflows implemented</li>
      </ul>
    </div>
  </div>
</section>

<section id="ecosystem" class="section">
  <h2>Ecosystem &amp; Technology Partners</h2>
  <p class="muted" style="max-width:900px;margin:0 auto 20px;">
    Your 1:50 pod is trained and tooled on the same vendors, standards and ecosystems used by Fortune 500 manufacturers,
    EPC firms and global industrial players.
  </p>
  <div class="grid">
    <div class="card">
      <h3>Welding &amp; Fabrication</h3>
      <p>AWS • Lincoln Electric • Miller • ESAB • Fronius</p>
    </div>
    <div class="card">
      <h3>Automation &amp; PLC/SCADA</h3>
      <p>Siemens • Rockwell • Schneider • Mitsubishi • AVEVA • Inductive Automation</p>
    </div>
    <div class="card">
      <h3>Robotics &amp; Mechatronics</h3>
      <p>FANUC • ABB • KUKA • Yaskawa • Cognex</p>
    </div>
    <div class="card">
      <h3>Reliability &amp; Safety</h3>
      <p>SMRP • ASQ • NFPA • OSHA • NEBOSH</p>
    </div>
  </div>
</section>

<section id="hire-industrial" class="section">
  <h2>Request a Manufacturing &amp; Industrial Engagement</h2>
  <p style="color:#6b7280;max-width:900px;margin:0 auto 30px;text-align:center;">
    Use this form if you are a manufacturing, energy, infrastructure or industrial organization seeking welding, automation,
    maintenance or modernization services from a certified 1:50 pod.
  </p>
  <form method="post" action="send-mail.php" class="application-form">
    <div class="form-row">
      <div class="field">
        <label>Organization</label>
        <input name="company" required>
      </div>
      <div class="field">
        <label>Contact Email</label>
        <input name="email" type="email" required>
      </div>
    </div>
    <div class="form-row">
      <div class="field">
        <label>Scope of Work</label>
        <input name="workload" placeholder="e.g., Welding & fabrication, PLC/SCADA, shutdown, modernization…">
      </div>
      <div class="field">
        <label>Timeline</label>
        <input name="timeline" placeholder="e.g., 30–180 days, recurring support">
      </div>
    </div>
    <div class="form-row">
      <div class="field">
        <label>Site / Location</label>
        <input name="location" placeholder="Country, city, plant or project name">
      </div>
      <div class="field">
        <label>Compliance Targets</label>
        <input name="compliance" placeholder="e.g., AWS, ASME, ISO, OSHA, NEBOSH">
      </div>
    </div>
    <div class="field">
      <label>Additional Details</label>
      <textarea name="message" rows="5" placeholder="Project context, existing systems, constraints, safety requirements…"></textarea>
    </div>
    <input type="hidden" name="industry" value="Manufacturing & Industrial Systems (Welding & Automation)">
    <input type="hidden" name="source" value="Hire Industrial • Request Engagement">
    <button class="btn" type="submit">Send Request</button>
  </form>
</section>

<section id="apply" class="section">
  <h2>Apply to Lead a Manufacturing &amp; Industrial Team</h2>
  <p style="color:#6b7280;max-width:900px;margin:0 auto 30px;text-align:center;">
    Only <strong>100 Team Leaders</strong> are selected for Manufacturing &amp; Industrial Systems globally.
    Each leads a 1:50 pod across welding, automation and reliability for multiple industrial clients and projects.
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
        <label>Primary Strength</label>
        <input name="strength" placeholder="e.g., Welding / Automation / Maintenance / Robotics">
      </div>
    </div>
    <div class="field">
      <label>Why are you a fit to lead a 1:50 Manufacturing &amp; Industrial team?</label>
      <textarea name="message" rows="5"></textarea>
    </div>
    <input type="hidden" name="industry" value="Manufacturing & Industrial Systems (Welding & Automation)">
    <input type="hidden" name="source" value="Full Apply • Manufacturing & Industrial">
    <button class="btn" type="submit">Submit Application</button>
  </form>
</section>

<div id="industrial-processes-modal"
     aria-hidden="true"
     style="position:fixed;inset:0;background:rgba(15,23,42,0.9);display:none;align-items:flex-start;justify-content:center;padding:40px 16px;z-index:9999;overflow-y:auto;">
  <div style="max-width:1100px;width:100%;background:#020617;color:#e5e7eb;border-radius:16px;padding:24px 24px 32px;box-shadow:0 25px 50px rgba(0,0,0,0.7);position:relative;">
    <button type="button"
            onclick="closeIndustrialProcessesModal()"
            aria-label="Close"
            style="position:absolute;top:12px;right:16px;background:transparent;border:none;color:#9ca3af;font-size:24px;cursor:pointer;">&times;</button>

    <h2 style="margin-top:0;margin-bottom:12px;font-size:1.6rem;">Processes &amp; Codes — Manufacturing &amp; Industrial Systems</h2>
    <p style="color:#9ca3af;margin-bottom:16px;font-size:0.95rem;">
      This technical overview summarizes the core welding, fabrication, automation, safety and compliance frameworks
      your 1:50 Manufacturing &amp; Industrial pod is aligned to. It is designed for plant owners, EPCs, OEMs and
      regulators who need to understand how we work against global standards.
    </p>

    <h3 style="margin-top:20px;margin-bottom:8px;font-size:1.2rem;">1. Welding &amp; Fabrication Processes</h3>
    <ul style="margin:0 0 8px 18px;padding:0;font-size:0.95rem;line-height:1.6;">
      <li><strong>Core Arc Welding:</strong> SMAW, GMAW (globular, spray, pulsed), GMAW-S, FCAW (gas &amp; self-shielded), GTAW.</li>
      <li><strong>Special Processes:</strong> SAW (single &amp; multi-wire), brazing/braze welding, oxy-fuel welding &amp; cutting, carbon arc gouging, hardfacing/thermal spray.</li>
      <li><strong>Applications:</strong> structural steel, pipe spool fabrication, tanks, vessels (with your code engineers), heavy equipment, shipyard and rail repairs.</li>
      <li><strong>Procedure Support:</strong> WPS/PQR/WPQR support and welder performance qualification in alignment with client code-of-construction.</li>
    </ul>

    <h3 style="margin-top:18px;margin-bottom:8px;font-size:1.2rem;">2. Codes &amp; Standards Alignment</h3>
    <ul style="margin:0 0 8px 18px;padding:0;font-size:0.95rem;line-height:1.6;">
      <li><strong>Welding &amp; Fabrication Codes:</strong> AWS structural &amp; piping codes (e.g., AWS D1.x, pipe codes), ASME Section IX (via your licensed engineers), EN/ISO welding standards and quality systems (e.g., ISO 3834) as required by project.</li>
      <li><strong>Automation &amp; Controls:</strong> IEC 61131, IEC 61439, ISA S88/S95, OEM PLC/SCADA vendor guidelines (Siemens, Rockwell, Schneider, Mitsubishi, AVEVA, Ignition).</li>
      <li><strong>Electrical &amp; Safety:</strong> NFPA 70/70E practices (with your licensed electrical teams), lock-out/tag-out (LOTO), permit-to-work, confined space and hot work processes.</li>
      <li><strong>Management Systems:</strong> Support for ISO 45001 (safety), ISO 14001 (environment), and client-specific QHSE frameworks.</li>
    </ul>

    <h3 style="margin-top:18px;margin-bottom:8px;font-size:1.2rem;">3. Inspection, NDT &amp; Quality Control</h3>
    <ul style="margin:0 0 8px 18px;padding:0;font-size:0.95rem;line-height:1.6;">
      <li><strong>Visual &amp; Dimensional:</strong> VT, weld gauge checks, fit-up and alignment verification, dimensional control for structures and spools.</li>
      <li><strong>NDT Coordination:</strong> PT, MT, UT, RT and advanced NDT (PAUT/TOFD) in collaboration with client-approved NDT providers.</li>
      <li><strong>Traceability:</strong> heat numbers, material certificates, welder IDs, consumable batch tracking where required by project.</li>
    </ul>

    <h3 style="margin-top:18px;margin-bottom:8px;font-size:1.2rem;">4. Automation, Robotics &amp; Industrial Systems</h3>
    <ul style="margin:0 0 8px 18px;padding:0;font-size:0.95rem;line-height:1.6;">
      <li><strong>PLC/SCADA:</strong> design, programming and commissioning for Siemens, Rockwell, Schneider, Mitsubishi and modern SCADA platforms.</li>
      <li><strong>Robotics:</strong> robot cell setup, basic path programming, I/O integration and safety interlocks for welding/handling robots (FANUC, ABB, KUKA, Yaskawa).</li>
      <li><strong>Drives &amp; MCCs:</strong> VFDs, soft starters, servo drives and MCC integration with PLCs and plant systems.</li>
      <li><strong>Smart Factory &amp; IIoT:</strong> OEE dashboards, sensor networks and data collection aligned with client digital strategies.</li>
    </ul>

    <h3 style="margin-top:18px;margin-bottom:8px;font-size:1.2rem;">5. Maintenance, Reliability &amp; Turnarounds</h3>
    <ul style="margin:0 0 8px 18px;padding:0;font-size:0.95rem;line-height:1.6;">
      <li><strong>Maintenance Strategy:</strong> preventive and predictive programs, basic condition monitoring (vibration/thermal/oil via partner labs), and reliability methods (RCM, FMEA) under client engineering leadership.</li>
      <li><strong>Turnaround Support:</strong> integrated weld, automation and maintenance teams for shutdowns/turnarounds with clear scopes, job packs and handover documentation.</li>
      <li><strong>KPIs:</strong> alignment with availability, reliability and OEE targets agreed at contract stage.</li>
    </ul>

    <p style="color:#9ca3af;margin-top:18px;font-size:0.9rem;">
      <em>Note:</em> All work is delivered under the client’s licensed engineering authority and regulatory framework.
      The 1:50 pod is structured to give them an audit-ready, standards-aligned field execution force for welding, automation,
      maintenance and reliability work.
    </p>
  </div>
</div>
<script>
// Animate hero stats on load
(function(){
  function animateCount(el, target, duration){
    let startTime = null;
    const fmt = new Intl.NumberFormat('en-US');
    const suffix = el.dataset.suffix || '';
    const d = duration || 1500;
    function step(ts){
      if(!startTime) startTime = ts;
      const progress = Math.min((ts - startTime) / d, 1);
      const eased = 1 - Math.pow(1 - progress, 3); // easeOutCubic
      const value = Math.floor(eased * target);
      el.textContent = fmt.format(value) + suffix;
      if(progress < 1) requestAnimationFrame(step);
    }
    requestAnimationFrame(step);
  }
  function init(){
    const nodes = document.querySelectorAll('header .stats .stat-value');
    nodes.forEach((el)=>{
      if(el.dataset.animated === 'true') return;
      const raw = el.dataset.target || el.textContent.replace(/[^0-9]/g,'');
      const target = parseInt(raw, 10);
      if(!target || target <= 0) return;
      el.dataset.animated = 'true';
      const suffix = el.dataset.suffix || '';
      el.textContent = '0' + suffix;
      animateCount(el, target, 1500);
    });
  }
  if(document.readyState === 'complete' || document.readyState === 'interactive'){
    setTimeout(init, 50);
  } else {
    document.addEventListener('DOMContentLoaded', init);
  }
})();
</script>
<script>
(function(){
  const modal = document.getElementById('industrial-processes-modal');
  if(!modal) return;

  window.openIndustrialProcessesModal = function(){
    modal.style.display = 'flex';
    modal.setAttribute('aria-hidden', 'false');
  };

  window.closeIndustrialProcessesModal = function(){
    modal.style.display = 'none';
    modal.setAttribute('aria-hidden', 'true');
  };

  modal.addEventListener('click', function(e){
    if(e.target === modal){
      window.closeIndustrialProcessesModal();
    }
  });

  document.addEventListener('keydown', function(e){
    if(e.key === 'Escape' && modal.style.display === 'flex'){
      window.closeIndustrialProcessesModal();
    }
  });
})();
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Manufacturing & Industrial Systems",
  "description": "Welding/fabrication, industrial automation (PLC/SCADA/robotics), and maintenance & reliability delivered via 1:50 pods.",
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
    {"@type": "ListItem", "position": 3, "name": "Manufacturing & Industrial Systems", "item": "<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>"}
  ]
}
</script>

<?php include 'footer.php'; ?>
<script>
// Keep hero video playing (no overlay present)
(function(){
  const vid = document.querySelector('header.has-hero-video .hero-video-bg video');
  if(!vid) return;
  // Ensure all autoplay requirements are set
  vid.muted = true;
  vid.defaultMuted = true;
  vid.playsInline = true;
  vid.setAttribute('muted','');
  vid.setAttribute('playsinline','');
  vid.setAttribute('webkit-playsinline','');

  function tryPlay(){
    const p = vid.play();
    if(p && typeof p.catch === 'function') {
      p.catch(() => {
        // Force muted and retry
        vid.muted = true;
        vid.defaultMuted = true;
        setTimeout(() => vid.play().catch(()=>{}), 150);
      });
    }
  }

  function ensurePlaying(){
    if(vid.paused || vid.readyState < 2) {
      tryPlay();
    }
  }

  const init = () => setTimeout(ensurePlaying, 50);
  if(document.readyState === 'complete' || document.readyState === 'interactive') init();
  else document.addEventListener('DOMContentLoaded', init);

  vid.addEventListener('loadedmetadata', ensurePlaying);
  vid.addEventListener('canplay', ensurePlaying);
  vid.addEventListener('canplaythrough', ensurePlaying);
  vid.addEventListener('loadstart', ensurePlaying);
  vid.addEventListener('stalled', ensurePlaying);
  vid.addEventListener('suspend', ensurePlaying);
  vid.addEventListener('abort', ensurePlaying);
  vid.addEventListener('emptied', ensurePlaying);
  vid.addEventListener('error', ensurePlaying);
  document.addEventListener('visibilitychange', ()=> { if(!document.hidden) ensurePlaying(); });

  // Periodic nudge
  const interval = setInterval(()=>{ if(!document.hidden) ensurePlaying(); }, 5000);
  window.addEventListener('beforeunload', ()=> clearInterval(interval));
})();
</script>
<script>
  (function() {
    function animateCounter(el) {
      var target = parseInt(el.getAttribute('data-target'), 10);
      if (!target || isNaN(target)) return;
      var prefix = el.getAttribute('data-prefix') || '';
      var suffix = el.getAttribute('data-suffix') || '';
      var start = 0;
      var duration = 1800;
      var startTime = null;

      function step(timestamp) {
        if (!startTime) startTime = timestamp;
        var progress = Math.min((timestamp - startTime) / duration, 1);
        var value = Math.floor(progress * target);
        el.textContent = prefix + value.toLocaleString() + (suffix ? ' ' + suffix : '');
        if (progress < 1) {
          window.requestAnimationFrame(step);
        }
      }

      window.requestAnimationFrame(step);
    }

    function initCounters() {
      var counters = document.querySelectorAll('.stat-value, .counter-value');
      if (!counters.length) return;

      if ('IntersectionObserver' in window) {
        var observer = new IntersectionObserver(function(entries) {
          entries.forEach(function(entry) {
            if (entry.isIntersecting && !entry.target.dataset.animated) {
              entry.target.dataset.animated = '1';
              animateCounter(entry.target);
            }
          });
        }, { threshold: 0.3 });

        counters.forEach(function(el) {
          observer.observe(el);
        });
      } else {
        counters.forEach(function(el) {
          if (!el.dataset.animated) {
            el.dataset.animated = '1';
            animateCounter(el);
          }
        });
      }
    }

    if (document.readyState === 'complete' || document.readyState === 'interactive') {
      initCounters();
    } else {
      document.addEventListener('DOMContentLoaded', initCounters);
    }
  })();
</script>