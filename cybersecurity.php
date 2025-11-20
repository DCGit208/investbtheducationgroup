<?php
// ====================================
// Cybersecurity & Digital Defense
// ====================================
$page_title       = "Cybersecurity & Digital Defense — Defend • Detect • Comply";
$meta_description = "Managed SOC/MDR/XDR, pentesting, AppSec programs, GRC & audits, DFIR — aligned to regulated sectors and delivered via the 1:50 leadership model.";
$og_title         = $page_title;
$og_description   = $meta_description;
$og_image         = "https://invest.btheducationgroup.com/image/logo-og.png";
$og_url           = "https://invest.btheducationgroup.com/cybersecurity.php";
include 'header.php';
?>
<?php 
$breadcrumb_items = [
  ['label' => 'Home', 'href' => 'index.php'],
  ['label' => 'Industries', 'href' => 'index.php#industries'],
  ['label' => 'Cybersecurity & Digital Defense']
];
include 'breadcrumbs.php';
?>

<header>
  <div class="hero">
    <div class="hero-left">
      <h1>Defend. Detect. Comply.<br><strong>Cybersecurity &amp; Digital Defense</strong></h1>
      <p class="lead">
        SOC/MDR, SIEM/XDR, offensive security, AppSec governance, GRC &amp; audits, and DFIR —
        operated by certified 1:50 teams for banks, MFIs, telcos, ministries and enterprises.
      </p>
      <div class="cta-row">
        <a class="btn" href="#hire-security">Request Security Program</a>
        <a class="btn-outline" href="#apply">Become a Team Leader</a>
      </div>
      <div class="stats">
        <div class="stat"><div class="stat-value" data-countup="44321" data-suffix=" USD">0</div><div class="stat-label" style="font-size:13px;white-space:nowrap;">Team-building commission</div></div>
        <div class="stat"><div class="stat-value" data-countup="2127372" data-suffix=" USD">0</div><div class="stat-label" style="font-size:13px;white-space:nowrap;">Leader annual income</div></div>
        <div class="stat"><div class="stat-value" data-countup="63822" data-suffix=" USD">0</div><div class="stat-label" style="font-size:13px;white-space:nowrap;">Member annual income</div></div>
      </div>
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
              <option selected>Cybersecurity &amp; Digital Defense</option>
              <option>Software &amp; Systems Engineering</option>
              <option>Intelligent Cloud, Data &amp; AI</option>
              <option>Information Technology</option>
              <option>Medical Technology / Healthcare IT</option>
            </select>
          </div>
          <input type="hidden" name="source" value="Quick Apply • Cybersecurity">
          <button class="btn" type="submit">Apply Now</button>
        </form>
      </div>
    </div>
  </div>
</header>

<section id="nav" class="section">
  <h2>Quick Navigation</h2>
  <div class="grid">
    <a class="card" href="#solutions">MSSP Catalog</a>
    <a class="card" href="#proof">Proof &amp; Portfolio</a>
    <a class="card" href="#team">1:50 Team &amp; Roles</a>
    <a class="card" href="#offense">Offensive Security (Red/Purple)</a>
    <a class="card" href="#grc">Governance, Risk &amp; Compliance</a>
    <a class="card" href="#dfir">DFIR Readiness &amp; Response</a>
    <a class="card" href="#packages">Solution Packages</a>
    <a class="card" href="#kpis">KPIs &amp; SLAs</a>
    <a class="card" href="#commercials">Commercials &amp; ROI</a>
    <a class="card" href="#pathways">Certifications &amp; Pathways</a>
    <a class="card" href="#boundaries">Cross-Links</a>
    <a class="card" href="#hire-security">Request Program</a>
    <a class="card" href="#apply">Apply</a>
  </div>
</section>

<section id="solutions" class="section">
  <h2>MSSP Catalog — What We Operate For You</h2>
  <div class="grid">
    <div class="card"><h3>SOC/MDR/XDR</h3><p>24/7 monitoring, triage, incident handling, content engineering, threat intel, SIEM tuning.</p></div>
    <div class="card"><h3>Vulnerability Mgmt</h3><p>Continuous scanning, prioritization, patch windows, SBOM ingestion, exposure mgmt.</p></div>
    <div class="card"><h3>Pentesting</h3><p>External/internal, web/app/API, mobile, wireless, cloud posture; executive &amp; dev reports.</p></div>
    <div class="card"><h3>AppSec Program</h3><p>SSDLC, SAST/DAST/IAST, code review, secrets policy, SBOM/signing and supply chain.</p></div>
    <div class="card"><h3>Identity Security</h3><p>Zero Trust, MFA, SSO, PAM, conditional access, fine-grained authorization.</p></div>
    <div class="card"><h3>Email/SaaS Security</h3><p>Phishing defense, DLP, CASB/SSPM, SaaS hardening &amp; continuous configuration.</p></div>
    <div class="card"><h3>Cloud Security</h3><p>CSPM, CWPP, CIEM; IaC scanning; workload hardening &amp; evidence packs.</p></div>
    <div class="card"><h3>OT/IoT Security</h3><p>Asset inventory, segmentation, protocol monitoring, anomaly detection.</p></div>
    <div class="card"><h3>Compliance &amp; Audit</h3><p>PCI DSS, ISO 27001, SOC 2, HIPAA, GDPR; policy stack, evidence and readiness.</p></div>
    <div class="card"><h3>Security Awareness</h3><p>CSCU v3 training, role-based modules, phishing simulations and coaching.</p></div>
  </div>
</section>

<section id="proof" class="section">
  <h2>Proof &amp; Portfolio — Outcomes We Deliver</h2>
  <div class="grid">
    <div class="card"><h3>MFI/Bank SOC Uplift</h3><p>MTTD ↓ 46%, MTTR ↓ 39%, PCI pass with clean findings.</p></div>
    <div class="card"><h3>National MDR</h3><p>Centralized detections, purple team alignment to ATT&amp;CK; executive dashboards.</p></div>
    <div class="card"><h3>AppSec + Pentest</h3><p>OWASP coverage, remediation sprints, SSDLC coaching; risk ↓ 35%.</p></div>
    <div class="card"><h3>IR Readiness</h3><p>Tabletops, playbooks, chain of custody; quarterly exercises; audit-ready evidence.</p></div>
  </div>
</section>

<section id="team" class="section">
  <h2>1:50 Team — Roles &amp; Delivery Pods</h2>
  <div class="grid">
    <div class="card"><h3>Leadership</h3><ul><li>CISO-as-a-Service</li><li>Security Program Lead</li><li>PM</li></ul></div>
    <div class="card"><h3>Blue Team</h3><ul><li>SOC Analysts L1–L3</li><li>Threat Hunter</li><li>Content/SIEM Engineer</li></ul></div>
    <div class="card"><h3>Red/Purple</h3><ul><li>Pentester</li><li>AppSec Engineer</li><li>Adversary Simulation</li></ul></div>
    <div class="card"><h3>GRC</h3><ul><li>ISO/PCI Lead</li><li>Risk &amp; Policy Analyst</li><li>Auditor</li></ul></div>
    <div class="card"><h3>DFIR</h3><ul><li>IR Lead</li><li>Forensics</li><li>Malware Analyst</li></ul></div>
    <div class="card"><h3>Cloud/AppSec</h3><ul><li>Cloud Security Architect</li><li>DevSecOps Engineer</li></ul></div>
  </div>
</section>

<section id="offense" class="section">
  <h2>Offensive Security (Red/Purple)</h2>
  <p>External/internal, app/API/mobile, cloud posture and phishing/social engineering — mapped to MITRE ATT&amp;CK with purple team exercises and executive debriefs.</p>
</section>

<section id="grc" class="section">
  <h2>Governance, Risk &amp; Compliance</h2>
  <div class="grid">
    <div class="card"><h3>Risk &amp; Policy</h3><p>Risk registers, policies/standards, vendor risk, data protection, DPIAs.</p></div>
    <div class="card"><h3>Compliance</h3><p>PCI, ISO 27001, SOC 2, HIPAA, GDPR; control coverage and evidence packs.</p></div>
    <div class="card"><h3>Continuous Controls</h3><p>Control monitoring, audit trails, dashboards, reporting to boards &amp; regulators.</p></div>
  </div>
</section>

<section id="dfir" class="section">
  <h2>DFIR Readiness &amp; Response</h2>
  <p>Playbooks, SLAs, tabletop exercises, war-room procedures, forensics tooling and legal/comms alignment for effective incident response.</p>
</section>

<section id="packages" class="section">
  <h2>Solution Packages (Client-Friendly)</h2>
  <div class="grid">
    <div class="card"><h3>SOC in 60 Days</h3><p>MDR/XDR onboarding, SIEM/XDR tuning, runbooks and reporting; 24/7 operations.</p></div>
    <div class="card"><h3>Quarterly Pentest</h3><p>Apps/APIs/cloud/network; risk reports for execs and developers; re-tests included.</p></div>
    <div class="card"><h3>AppSec Enablement</h3><p>SSDLC rollout, toolchain integration, developer training, security gates in CI.</p></div>
    <div class="card"><h3>Compliance Readiness</h3><p>PCI/ISO/SOC2 scope, gap assess, policies, evidence packs, audit liaison.</p></div>
  </div>
</section>

<section id="kpis" class="section">
  <h2>KPIs &amp; SLAs</h2>
  <div class="grid">
    <div class="card"><h3>MTTD / MTTR</h3><p>Detection and response targets by severity with quarterly improvements.</p></div>
    <div class="card"><h3>Phishing Resilience</h3><p>Resilience rate increase through simulations and coaching.</p></div>
    <div class="card"><h3>Vuln Backlog</h3><p>Prioritized burn-down and patch latency windows.</p></div>
    <div class="card"><h3>Audit Pass Rate</h3><p>Quarterly control health and clean findings goals.</p></div>
  </div>
</section>

<section id="commercials" class="section">
  <h2>Commercials — Pods &amp; Leader ROI</h2>
  <div class="card" style="overflow:auto;margin-bottom:20px">
    <h3>Pod Economics (Illustrative)</h3>
    <table style="width:100%;border-collapse:collapse;">
      <thead><tr>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Pod Type</th>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Velocity (pts/mo)</th>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Monthly Rate (USD)</th>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Scope</th>
      </tr></thead>
      <tbody>
        <tr><td style="padding:8px;">SOC/MDR</td><td style="padding:8px;">—</td><td style="padding:8px;">$60k–$120k</td><td style="padding:8px;">24/7 monitoring &amp; response</td></tr>
        <tr><td style="padding:8px;">Red/Purple</td><td style="padding:8px;">—</td><td style="padding:8px;">$30k–$70k</td><td style="padding:8px;">Offensive security &amp; simulation</td></tr>
        <tr><td style="padding:8px;">GRC</td><td style="padding:8px;">—</td><td style="padding:8px;">$25k–$60k</td><td style="padding:8px;">Compliance &amp; audit readiness</td></tr>
        <tr><td style="padding:8px;">DFIR</td><td style="padding:8px;">—</td><td style="padding:8px;">$40k–$90k</td><td style="padding:8px;">Response readiness &amp; forensics</td></tr>
      </tbody>
    </table>
    <p class="muted">Ranges depend on geography, tooling and SLAs.</p>
  </div>

  <div class="card" style="overflow:auto">
    <h3>Leader ROI Ladder (Illustrative)</h3>
    <table style="width:100%;border-collapse:collapse;">
      <thead><tr>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Milestone</th>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Active Commission</th>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Residual (Managed Security)</th>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Cumulative Annualized</th>
      </tr></thead>
      <tbody>
        <tr><td style="padding:8px;">Month 3</td><td style="padding:8px;">$14,440</td><td style="padding:8px;">$120k–$240k</td><td style="padding:8px;">$300k–$600k</td></tr>
        <tr><td style="padding:8px;">Month 6</td><td style="padding:8px;">$28,880</td><td style="padding:8px;">$480k–$960k</td><td style="padding:8px;">$1.0M–$2.0M</td></tr>
        <tr><td style="padding:8px;">Month 12</td><td style="padding:8px;">$44,321</td><td style="padding:8px;">$1.2M–$2.4M</td><td style="padding:8px;">$2.1M+</td></tr>
      </tbody>
    </table>
    <p class="muted">Aligned to the 1:50 model and recurring MSSP services.</p>
  </div>
</section>

<section id="pathways" class="section">
  <h2>Certifications &amp; Pathways (by Role)</h2>
  <div class="grid">
    <div class="card"><h3>Blue/SOC</h3><p>Security+ • CySA+ • SIEM/XDR (Sentinel/Splunk) • GCIA (optional)</p></div>
    <div class="card"><h3>Red</h3><p>CEH → CPENT/LPT Master • OSCP/OSWE (optional)</p></div>
    <div class="card"><h3>GRC</h3><p>ISO 27001 Lead Implementer/Auditor • CISA/CISM (optional) • DPO</p></div>
    <div class="card"><h3>Cloud/AppSec</h3><p>CCSK/CCSP • CKS • Provider security</p></div>
    <div class="card"><h3>Awareness</h3><p>CSCU v3 for end-users; trainer accreditations where applicable</p></div>
  </div>
</section>

<section id="boundaries" class="section">
  <h2>Cross-Links &amp; Boundaries</h2>
  <div class="grid">
    <a class="card" href="software-engineering.php"><h3>Software &amp; Systems Engineering</h3><p>SSDLC delivery during builds.</p></a>
    <a class="card" href="intelligent-cloud.php"><h3>Intelligent Cloud, Data &amp; AI</h3><p>Platform enablement and AI scale.</p></a>
    <a class="card" href="information-technology.php"><h3>Technology &amp; Infrastructure</h3><p>Identity, endpoint, network operations.</p></a>
  </div>
</section>

<section id="hire-security" class="section">
  <h2>Request a Security Program</h2>
  <form method="post" action="send-mail.php" class="application-form">
    <div class="form-row">
      <div class="field"><label>Organization</label><input name="company" required></div>
      <div class="field"><label>Email</label><input name="email" type="email" required></div>
    </div>
    <div class="form-row">
      <div class="field"><label>Scope</label><input name="workload" placeholder="SOC/MDR, pentest, AppSec, compliance…"></div>
      <div class="field"><label>Timeline</label><input name="timeline" placeholder="e.g., 60–120 days"></div>
    </div>
    <div class="form-row">
      <div class="field"><label>Budget Range (USD)</label><input name="budget" placeholder="$30k–$500k+"></div>
      <div class="field"><label>Compliance Targets</label><input name="compliance" placeholder="PCI, ISO 27001, SOC 2, HIPAA…"></div>
    </div>
    <div class="field"><label>Notes</label><textarea name="message" rows="5" placeholder="Current tools, gaps, incidents, board priorities…"></textarea></div>
    <input type="hidden" name="industry" value="Cybersecurity &amp; Digital Defense">
    <input type="hidden" name="source" value="Hire Security • Request Program">
    <button class="btn" type="submit">Send Request</button>
  </form>
</section>

<section id="apply" class="section">
  <h2>Apply to Lead a Cybersecurity Team</h2>
  <p style="color:#6b7280;max-width:900px;margin:0 auto 30px;text-align:center;">Only <strong>100 Team Leaders</strong> per industry.</p>
  <form method="post" action="send-mail.php" class="application-form">
    <div class="form-row">
      <div class="field"><label>Full Name</label><input name="name" required></div>
      <div class="field"><label>Email</label><input name="email" type="email" required></div>
    </div>
    <div class="form-row">
      <div class="field"><label>Phone</label><input name="phone" required></div>
      <div class="field"><label>Primary Security Domain</label><input name="stack" placeholder="SOC, Red Team, GRC, CloudSec…"></div>
    </div>
    <div class="field"><label>Why are you a fit?</label><textarea name="message" rows="5"></textarea></div>
    <input type="hidden" name="industry" value="Cybersecurity &amp; Digital Defense">
    <input type="hidden" name="source" value="Full Apply • Cybersecurity">
    <button class="btn" type="submit">Submit Application</button>
  </form>
</section>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Cybersecurity & Digital Defense",
  "description": "Managed SOC/MDR/XDR, pentesting, AppSec, GRC/audits and DFIR delivered via certified 1:50 teams.",
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
    {"@type": "ListItem", "position": 3, "name": "Cybersecurity & Digital Defense", "item": "<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>"}
  ]
}
</script>

<?php include 'footer.php'; ?>