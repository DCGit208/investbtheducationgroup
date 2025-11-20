<?php
$page_title = "Renewable & Sustainable Energy (Wind, Solar & Storage) — Investor Education Program";
$meta_description = "Develop, deliver and operate solar PV, wind and battery storage with grid interconnection, SCADA/EMS, compliance and commercial ROI — executed through 1:50 pods.";
$og_title = $page_title;
$og_description = $meta_description;
$og_image = "https://og-image.vercel.app/Renewable%20Energy.png?theme=light&md=1&fontSize=80px";
$og_url = "https://invest.btheducationgroup.com/renewable-energy.php";
?>
<?php $page_styles = ['assets/css/page/renewable.css']; ?>
<?php include 'header.php'; ?>
 
<?php 
$breadcrumb_items = [
  ['label' => 'Home', 'href' => 'index.php'],
  ['label' => 'Industries', 'href' => 'index.php#industries'],
  ['label' => 'Renewable & Sustainable Energy']
];
include 'breadcrumbs.php';
?>


<section class="re container" id="main" role="main">

<!-- HERO -->
<header>
  <div class="hero">
    <div class="hero-left">
      <span class="eyebrow">Investor Education • Renewable Energy</span>
      <h1>Develop. Build. Operate.<br><strong>Wind, Solar & Battery Leadership</strong></h1>
      <p class="lead">
        Deliver <strong>utility‑scale and C&I solar PV, onshore wind and BESS</strong> with grid codes, SCADA/EMS, HSE and bankable documentation — through a certified <strong>1:50 pod</strong> model.
      </p>
      <div class="cta-row">
        <a class="btn" href="#apply?iam=prospective-leader&interest=join-leadership" data-event="cta-hero-leader">Become a Team Leader (1:50)</a>
        <a class="btn-outline" href="#commercials" data-event="cta-hero-finance">View Finance Pack & ROI</a>
        <div class="quick-apply">
          <button type="button" class="quick-apply-toggle" aria-expanded="false" aria-controls="qa-form" data-event="toggle-quick-apply">Quick Apply</button>
          <div id="qa-form" class="quick-apply-form" hidden>
            <div class="field">
              <label for="qa-email" class="muted">Email</label>
              <input type="email" id="qa-email" placeholder="you@example.com">
            </div>
            <div class="field">
              <label for="qa-iam" class="muted">I am a</label>
              <select id="qa-iam">
                <option value="">Select one</option>
                <option value="prospective-leader">Prospective 1:50 Team Leader</option>
                <option value="enterprise-client">C&I Client</option>
                <option value="industrial-client">Industrial / Energy Client</option>
                <option value="telco-client">Utility / IPP</option>
                <option value="other">Other</option>
              </select>
            </div>
            <div class="field">
              <button type="button" class="btn" id="qa-submit" data-event="submit-quick-apply">Go</button>
            </div>
          </div>
        </div>
      </div>

      <div class="stats">
        <div class="stat">
          <div class="stat-value" data-countup="180000" data-suffix=" MWh">180,000 MWh</div>
          <div class="muted">Annual Energy Yield (Illustrative)</div>
        </div>
        <div class="stat">
          <div class="stat-value" data-countup="756321" data-suffix=" tCO2e">756,321 tCO2e</div>
          <div class="muted">Avoided Emissions</div>
        </div>
        <div class="stat">
          <div class="stat-value" data-countup="125000000" data-suffix=" USD">125,000,000 USD</div>
          <div class="muted">Capex Delivered</div>
        </div>
      </div>
    </div>
    <div class="hero-right card">
      <h3>Why Renewable Energy Pods Matter</h3>
      <ul>
        <li>Bankable designs, permits and interconnect approvals</li>
        <li>EPC delivery with HSE, quality and commissioning</li>
        <li>SCADA/EMS, performance guarantees and O&M</li>
        <li>Transparent economics and investor reporting</li>
      </ul>
    </div>
  </div>
</header>

<!-- QUICK NAV -->
<a href="#main" class="skip-link">Skip to main content</a>
<section id="nav" class="section quick-nav" role="navigation" aria-label="Section navigation">
  <h2>Quick Navigation</h2>
  <div class="grid">
    <a class="card" href="#portfolio">Delivery Portfolio (A–F)</a>
    <a class="card" href="#solutions">Solutions &amp; Value</a>
    <a class="card" href="#certifications">Certification Ladders</a>
    <a class="card" href="#use-cases">Use Cases</a>
    <a class="card" href="#ecosystem">Vendor Ecosystem</a>
    <a class="card" href="#pods">Pod Composition (1:50)</a>
    <a class="card" href="#tools">Tools &amp; Control Stack</a>
    <a class="card" href="#compliance">Compliance &amp; HSE</a>
    <a class="card" href="#offers">Offer Packages</a>
    <a class="card" href="#kpis">KPIs &amp; Outcomes</a>
    <a class="card" href="#commercials">Commercials &amp; ROI</a>
    <a class="card" href="#leadership">Leadership Journey</a>
    <a class="card" href="#crosslinks">Pathways &amp; Cross‑Links</a>
    <a class="card" href="#apply">Apply / Hire</a>
  </div>
</section>

<!-- DELIVERY PORTFOLIO -->
<section id="portfolio" class="section" style="background:#f9fafb;">
  <h2>Delivery Portfolio — What Your Renewable Pod Delivers (A–F)</h2>
  <p class="muted">Accordion view to group complex scope. Each pillar includes scope, roles and KPIs.</p>
  <div class="accordion-block">
    <button class="accordion-button" id="acc-A" aria-expanded="false" aria-controls="pillar-A" data-acc-target="pillar-A" data-event="acc-toggle" data-acc-id="A">A. Solar PV — Utility &amp; C&amp;I</button>
    <div id="pillar-A" class="accordion-panel" role="region" aria-labelledby="acc-A" hidden>
      <ul>
        <li>Site selection, irradiance study, yield &amp; shading analysis (PVsyst)</li>
        <li>Concept design, stringing, inverter &amp; MV layout, protection study</li>
        <li>EPC delivery, QA/QC, commissioning and PAC/FAC handover</li>
        <li>O&amp;M programs, performance guarantees and warranty management</li>
      </ul>
      <p class="muted"><strong>Roles:</strong> PV Engineers, Electrical Designers, Construction &amp; HSE Leads, O&amp;M Supervisors.</p>
      <p class="muted"><strong>KPIs:</strong> PR %, availability %, kWh/kWp, NCR closeout time.</p>
    </div>

    <button class="accordion-button" id="acc-B" aria-expanded="false" aria-controls="pillar-B" data-acc-target="pillar-B" data-event="acc-toggle" data-acc-id="B">B. Wind — Onshore</button>
    <div id="pillar-B" class="accordion-panel" role="region" aria-labelledby="acc-B" hidden>
      <ul>
        <li>Wind resource assessment, micrositing and energy yield</li>
        <li>WTG foundation, electrical balance of plant, roads &amp; logistics</li>
        <li>Erection, commissioning, grid code compliance and testing</li>
        <li>Long‑term service &amp; condition monitoring</li>
      </ul>
      <p class="muted"><strong>Roles:</strong> WTG Package Leads, Civil &amp; Electrical Engineers, HSE &amp; Commissioning.</p>
      <p class="muted"><strong>KPIs:</strong> Availability %, curtailment %, mean time to repair.</p>
    </div>

    <button class="accordion-button" id="acc-C" aria-expanded="false" aria-controls="pillar-C" data-acc-target="pillar-C" data-event="acc-toggle" data-acc-id="C">C. Battery Energy Storage Systems (BESS)</button>
    <div id="pillar-C" class="accordion-panel" role="region" aria-labelledby="acc-C" hidden>
      <ul>
        <li>Use‑case design (arbitrage, peak‑shaving, FCAS/ancillary markets)</li>
        <li>PCS/inverter selection, EMS, fire &amp; safety systems</li>
        <li>EPC delivery, hazardous area compliance, commissioning</li>
        <li>Operations playbooks, degradation tracking and warranty</li>
      </ul>
      <p class="muted"><strong>Roles:</strong> BESS Engineers, Protection Engineers, EMS/SCADA Specialists, HSE.</p>
      <p class="muted"><strong>KPIs:</strong> MWh cycled, response time, round‑trip efficiency.</p>
    </div>

    <button class="accordion-button" id="acc-D" aria-expanded="false" aria-controls="pillar-D" data-acc-target="pillar-D" data-event="acc-toggle" data-acc-id="D">D. Grid‑Tie, Protection &amp; Interconnection</button>
    <div id="pillar-D" class="accordion-panel" role="region" aria-labelledby="acc-D" hidden>
      <ul>
        <li>Grid code studies (IEEE 1547, ENTSO‑E, G98/G99, NRS)</li>
        <li>Protection coordination, SCADA/RTU, PPC and test plans</li>
        <li>Utility approvals, witnessing, energization and Go‑Live</li>
        <li>Metering, settlement and compliance reporting</li>
      </ul>
      <p class="muted"><strong>KRIs:</strong> Non‑compliance events, failed tests, outage minutes.</p>
    </div>

    <button class="accordion-button" id="acc-E" aria-expanded="false" aria-controls="pillar-E" data-acc-target="pillar-E" data-event="acc-toggle" data-acc-id="E">E. C&amp;I Decarbonization &amp; Microgrids</button>
    <div id="pillar-E" class="accordion-panel" role="region" aria-labelledby="acc-E" hidden>
      <ul>
        <li>Rooftop/ground PV, BESS, genset integration and controls</li>
        <li>Energy efficiency, EMS and demand management</li>
        <li>Green tariffs, PPA advisory and carbon accounting</li>
      </ul>
      <p class="muted"><strong>KPIs:</strong> Energy cost reduction %, CO₂e reduction, payback.</p>
    </div>

    <button class="accordion-button" id="acc-F" aria-expanded="false" aria-controls="pillar-F" data-acc-target="pillar-F" data-event="acc-toggle" data-acc-id="F">F. Development &amp; Financing</button>
    <div id="pillar-F" class="accordion-panel" role="region" aria-labelledby="acc-F" hidden>
      <ul>
        <li>Land, permits, interconnect queue and offtake strategy</li>
        <li>Financial models, lenders’ technical advisor (LTA) interface</li>
        <li>EPC &amp; O&amp;M contracting, performance bonds and warranties</li>
      </ul>
      <p class="muted"><strong>Artifacts:</strong> IM deck, one‑pager, technical datasheets, bank model.</p>
    </div>
  </div>
</section>

<!-- SOLUTIONS & VALUE -->
<section id="solutions" class="section">
  <h2>Solutions &amp; Value</h2>
  <div class="tile-4">
    <div class="card"><h3>Utility‑Scale Solar</h3><p>Full lifecycle EPC &amp; O&amp;M with grid compliance and bankable documentation.</p></div>
    <div class="card"><h3>Onshore Wind</h3><p>Development to operation with availability and curtailment optimization.</p></div>
    <div class="card"><h3>Battery Storage</h3><p>Use‑case design, EMS/PPC controls and safe operations across lifetime.</p></div>
    <div class="card"><h3>C&amp;I Decarbonization</h3><p>PV+BESS microgrids, efficiency, tariffs and carbon accounting.</p></div>
  </div>
</section>

<!-- USE CASES -->
<section id="use-cases" class="section" style="background:#f9fafb;">
  <h2>Use Cases — Where Your Pod Operates</h2>
  <div class="tile-4">
    <div class="card"><h3>Utility / IPPs</h3><p>Greenfield &amp; brownfield solar/wind/BESS pipelines to COD and operations.</p></div>
    <div class="card"><h3>Industrial Sites</h3><p>Microgrids for energy cost stability, resilience and emissions goals.</p></div>
    <div class="card"><h3>Commercial Campuses</h3><p>Rooftop PV, BESS and EMS for predictable bills and ESG targets.</p></div>
    <div class="card"><h3>Public Sector</h3><p>Solar schools, health facilities and municipal fleets with financing.</p></div>
  </div>
</section>

<!-- CERTIFICATION LADDERS -->
<section id="certifications" class="section" style="background:#f9fafb;">
  <h2>Certification Ladders — NABCEP • GWO • OSHA</h2>
  <div class="tile-3">
    <div class="card"><h3>NABCEP (Solar)</h3><ul><li>PV Associate</li><li>PV Installation Professional</li><li>PV System Inspector</li></ul></div>
    <div class="card"><h3>GWO (Wind)</h3><ul><li>Basic Safety Training</li><li>Basic Technical Training</li><li>Advanced Rescue</li></ul></div>
    <div class="card"><h3>Project &amp; HSE</h3><ul><li>PMP / PRINCE2</li><li>OSHA 30</li><li>NEBOSH IGC</li></ul></div>
  </div>
</section>

<!-- VENDOR ECOSYSTEM -->
<section id="ecosystem" class="section">
  <h2>Vendor Ecosystem</h2>
  <p class="muted">Selected OEMs, platforms and cloud used in delivery. Logos shown are indicative.</p>
  <div class="ecosystem-logos">
    <img src="Backups/vendor-logos/Siemens.svg" alt="Siemens Energy" loading="lazy" decoding="async">
    <img src="Backups/vendor-logos/microsoft.svg" alt="Microsoft" loading="lazy" decoding="async">
    <img src="Backups/vendor-logos/aws.svg" alt="AWS" loading="lazy" decoding="async">
    <img src="Backups/vendor-logos/azure.svg" alt="Azure" loading="lazy" decoding="async">
    <img src="Backups/vendor-logos/huawei.svg" alt="Huawei" loading="lazy" decoding="async">
    <img src="Backups/vendor-logos/default-logo.svg" alt="SMA (placeholder)" loading="lazy" decoding="async">
    <img src="Backups/vendor-logos/default-logo.svg" alt="SolarEdge (placeholder)" loading="lazy" decoding="async">
  </div>
</section>

<!-- TOOLS & CONTROL STACK -->
<section id="tools" class="section" style="background:#f9fafb;">
  <h2>Tools &amp; Control Stack</h2>
  <div class="tile-3">
    <div class="card"><h3>Design &amp; Studies</h3><ul><li>PVsyst yield modeling</li><li>Wind resource &amp; micrositing</li><li>Protection &amp; grid code studies</li></ul></div>
    <div class="card"><h3>Controls &amp; Telemetry</h3><ul><li>SCADA/RTU, PPC, EMS</li><li>Historian &amp; performance analytics</li><li>Cloud dashboards &amp; alerts</li></ul></div>
    <div class="card"><h3>Documentation</h3><ul><li>EPC method statements</li><li>Inspection &amp; test plans</li><li>O&amp;M playbooks &amp; spares</li></ul></div>
  </div>
</section>

<!-- COMPLIANCE & HSE -->
<section id="compliance" class="section">
  <h2>Compliance &amp; HSE</h2>
  <div class="tile-3">
    <div class="card"><h3>Standards</h3><ul><li>IEEE 1547 / ENTSO‑E / G98,G99</li><li>UL 1741 / IEC 62109 / IEC 62933</li><li>NFPA 70 (NEC) / local codes</li></ul></div>
    <div class="card"><h3>HSE</h3><ul><li>Construction HSE plans</li><li>Confined space &amp; working at height</li><li>Fire suppression &amp; hazardous areas</li></ul></div>
    <div class="card"><h3>Quality &amp; Audit</h3><ul><li>ITP, NCR &amp; closeout</li><li>Commissioning packs</li><li>Performance test certificates</li></ul></div>
  </div>
</section>

<!-- OFFER PACKAGES -->
<section id="offers" class="section" style="background:#f9fafb;">
  <h2>Offer Packages — How Clients Engage</h2>
  <div class="tile-3">
    <div class="card"><h3>Feasibility &amp; Interconnect</h3><p>Screening, studies and permits to de‑risk projects.</p></div>
    <div class="card"><h3>EPC Delivery Pod</h3><p>End‑to‑end build, HSE, QA/QC, commissioning to COD.</p></div>
    <div class="card"><h3>Operate &amp; Optimize</h3><p>O&amp;M with analytics, guarantees and upgrades.</p></div>
  </div>
</section>

<!-- KPIs & OUTCOMES -->
<section id="kpis" class="section">
  <h2>KPIs &amp; Outcomes</h2>
  <div class="kpi-grid">
    <div class="card kpi-card"><div class="val">&gt;98.5%</div><div class="lab">Availability</div></div>
    <div class="card kpi-card"><div class="val">&lt;2.0%</div><div class="lab">Curtailment</div></div>
    <div class="card kpi-card"><div class="val">&gt;0.82</div><div class="lab">Performance ratio (PV)</div></div>
    <div class="card kpi-card"><div class="val">&lt;30 min</div><div class="lab">MTTR</div></div>
    <div class="card kpi-card"><div class="val">&gt;15%</div><div class="lab">Energy saving (C&amp;I)</div></div>
    <div class="card kpi-card"><div class="val">&lt;1.5%</div><div class="lab">NCR rework</div></div>
  </div>
</section>

<!-- POD COMPOSITION -->
<section id="pods" class="section" style="background:#f9fafb;">
  <h2>Pod Composition (1:50)</h2>
  <div class="tile-4">
    <div class="card"><h3>Leadership &amp; Engineering (8)</h3><ul><li>Pod Leader</li><li>PV/Wind/BESS Engineers</li><li>Grid/Protection Engineers</li><li>Permitting &amp; Interconnect</li></ul></div>
    <div class="card"><h3>Construction &amp; HSE (18)</h3><ul><li>Civil &amp; Electrical crews</li><li>QA/QC Inspectors</li><li>HSE Supervisors</li></ul></div>
    <div class="card"><h3>Controls &amp; Commissioning (12)</h3><ul><li>SCADA/EMS</li><li>Protection testing</li><li>Commissioning Leads</li></ul></div>
    <div class="card"><h3>Operations &amp; O&amp;M (12)</h3><ul><li>Technicians</li><li>Analysts</li><li>Spares &amp; Warranty</li></ul></div>
  </div>
</section>

<!-- COMMERCIALS -->
<section id="commercials" class="section">
  <h2>Commercials — Pod Economics &amp; Leader ROI</h2>
  <div class="card" style="margin:12px 0 18px;">
    <strong>Investor Snapshot</strong>
    <p class="muted" style="margin-top:6px;">Bankable development, construction velocity and stable O&amp;M revenue underpin attractive unit economics.</p>
  </div>
  <h3>Pod Economics (Illustrative)</h3>
  <table class="econ-table">
    <tr><th>Pod Type</th><th>Velocity (pts/mo)</th><th>Monthly Rate (USD)</th><th>Typical Scope</th></tr>
    <tr><td>Utility (Solar/Wind)</td><td>100–160</td><td>$120k–$220k</td><td>Design, EPC, SCADA, grid code, commissioning</td></tr>
    <tr><td>BESS</td><td>90–140</td><td>$110k–$200k</td><td>Use‑case, EMS, EPC, safety, operations</td></tr>
    <tr><td>C&amp;I</td><td>70–120</td><td>$70k–$130k</td><td>PV+BESS microgrids and EMS</td></tr>
  </table>
  <h3 style="margin-top:28px;">Leader ROI Ladder (Illustrative)</h3>
  <table class="roi-table">
    <tr><th>Milestone</th><th>Active Commission</th><th>Residual (Managed Services)</th><th>Cumulative Annualized</th></tr>
    <tr><td>Month 3</td><td>$18,800</td><td>$240k–$480k</td><td>$650k–$1.1M</td></tr>
    <tr><td>Month 6</td><td>$32,400</td><td>$600k–$1.2M</td><td>$1.6M–$2.8M</td></tr>
    <tr><td>Month 12</td><td>$49,900</td><td>$1.5M–$3.0M</td><td>$3.2M+</td></tr>
  </table>
  <p style="margin-top:10px;"><a class="btn-outline" href="docs/renewable-energy-brochure.pdf">Download Brochure</a> <a class="btn-outline" href="docs/renewable-energy-finance-pack.pdf">Download Finance Pack</a></p>
</section>

<!-- LEADERSHIP JOURNEY -->
<section id="leadership" class="section" style="background:#f9fafb;">
  <h2>How Renewable 1:50 Leadership Works</h2>
  <div class="journey-steps">
    <div class="card"><strong>Train</strong><br>Certifications (NABCEP/GWO) + grid code &amp; safety.</div>
    <div class="card"><strong>Build</strong><br>Recruit and mentor a specialized 1:50 pod.</div>
    <div class="card"><strong>Deploy</strong><br>Deliver programs to COD and long‑term O&amp;M.</div>
    <div class="card"><strong>Earn</strong><br>Blend active commission and residual services.</div>
  </div>
</section>

<!-- PATHWAYS & CROSS-LINKS -->
<section id="crosslinks" class="section">
  <h2>Pathways &amp; Cross‑Links</h2>
  <ul>
    <li><strong>Manufacturing &amp; Industrial Systems:</strong> Grid interconnect civil/electrical works, safety and monitoring.</li>
    <li><strong>Information Technology (Ops):</strong> Cloud dashboards, monitoring and analytics for fleets.</li>
    <li><strong>Smart Mobility:</strong> EV charging integrated with BESS and PV.</li>
  </ul>
</section>

<!-- APPLY / HIRE -->
<section id="apply" class="section" style="background:#f9fafb;">
  <h2>Apply / Hire — Renewable Energy</h2>
  <p class="muted">Join as a <strong>1:50 Team Leader</strong> or <strong>engage a renewable energy pod</strong>.</p>
  <form method="post" action="send-mail.php" class="card apply-form" data-event="form-apply">
    <input type="text" name="company" tabindex="-1" aria-hidden="true" style="position:absolute;left:-10000px;opacity:0;" autocomplete="off">
    <div class="form-row">
      <div class="field"><label for="name">Full Name</label><input type="text" id="name" name="name" required></div>
      <div class="field"><label for="email">Email</label><input type="email" id="email" name="email" required></div>
    </div>
    <div class="form-row">
      <div class="field"><label for="phone">Phone / WhatsApp</label><input type="text" id="phone" name="phone" required></div>
      <div class="field"><label for="iam">I am a</label><select id="iam" name="iam" required>
        <option value="">Select one</option>
        <option value="prospective-leader">Prospective 1:50 Team Leader</option>
        <option value="enterprise-client">C&amp;I Client</option>
        <option value="industrial-client">Industrial / Energy Client</option>
        <option value="utility">Utility / IPP</option>
        <option value="other">Other</option>
      </select></div>
    </div>
    <div class="form-row"><div class="field" style="grid-column:1 / -1;"><label for="interest">I'm interested in</label><select id="interest" name="interest" required>
      <option value="">Select one</option>
      <option value="join-leadership">Joining the Investor Education leadership program</option>
      <option value="hire-pod">Hiring a renewable energy pod</option>
      <option value="joint-venture">Joint venture / partnership</option>
      <option value="other">Other</option>
    </select></div></div>
    <div class="field" style="grid-column:1 / -1;"><label for="message">Briefly describe your need</label><textarea id="message" name="message" rows="4"></textarea></div>
    <button type="submit" class="btn">Submit</button>
    <p class="muted" style="margin-top:8px;">We respect your privacy. See our <a href="privacy-policy.php">Privacy Policy</a>.</p>
  </form>
</section>

</section>

<script>
// Accordion interactions
(function(){
  const buttons = document.querySelectorAll('.re .accordion-button');
  if(!buttons.length) return;
  buttons.forEach(btn => {
    btn.addEventListener('click', () => {
      const panel = document.getElementById(btn.getAttribute('data-acc-target'));
      const expanded = btn.getAttribute('aria-expanded') === 'true';
      buttons.forEach(b => {
        if(b!==btn){ b.setAttribute('aria-expanded','false'); const p=document.getElementById(b.getAttribute('data-acc-target')); if(p){ p.hidden=true; p.setAttribute('aria-hidden','true'); } }
      });
      btn.setAttribute('aria-expanded', expanded ? 'false' : 'true');
      if(panel){ panel.hidden = expanded; panel.setAttribute('aria-hidden', expanded ? 'true' : 'false'); }
    });
  });
})();
// Quick Apply toggle + submit
(function(){
  const toggle = document.querySelector('.re .quick-apply-toggle');
  const form = document.getElementById('qa-form');
  if(toggle && form){
    toggle.addEventListener('click', () => { const open = toggle.getAttribute('aria-expanded')==='true'; toggle.setAttribute('aria-expanded', open?'false':'true'); form.hidden=open; form.style.display = open ? 'none' : 'flex'; });
  }
  const submit = document.getElementById('qa-submit');
  if(submit){ submit.addEventListener('click', () => {
    const email = document.getElementById('qa-email')?.value||''; const iam = document.getElementById('qa-iam')?.value||'';
    const url = new URL(window.location.href); if(email) url.searchParams.set('email', email); if(iam) url.searchParams.set('iam', iam);
    url.searchParams.set('interest', iam && iam.includes('client') ? 'hire-pod' : 'join-leadership'); url.hash='apply'; window.location.href=url.toString();
  }); }
})();
// Auto-fill main form from URL params
(function(){ const p=new URLSearchParams(window.location.search); ['email','iam','interest'].forEach(k=>{ const v=p.get(k); if(v){ const el=document.getElementById(k); if(el) el.value=v; } }); })();
// Count-up animation
(function(){ const els=document.querySelectorAll('.re [data-countup]'); if(!('IntersectionObserver' in window)||!els.length) return; const animate=el=>{ const target=parseInt(el.getAttribute('data-countup'),10)||0; const suffix=el.getAttribute('data-suffix')||''; const dur=1200; const start=performance.now(); const step=t=>{ const p=Math.min(1,(t-start)/dur); const v=Math.floor(target*p); el.textContent=v.toLocaleString()+(suffix?` ${suffix.trim()}`:''); if(p<1) requestAnimationFrame(step); }; requestAnimationFrame(step); }; const io=new IntersectionObserver(es=>{ es.forEach(e=>{ if(e.isIntersecting){ animate(e.target); io.unobserve(e.target); } }); },{threshold:0.4}); els.forEach(el=>io.observe(el)); })();
// Sticky CTA
(function(){ const c=document.createElement('div'); c.className='sticky-cta'; c.innerHTML='<a href="#apply" data-event="sticky-cta-apply">Apply / Hire</a>'; document.body.appendChild(c); })();
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Renewable Energy — Wind, Solar & Storage",
  "description": "Utility-scale and C&I renewable energy development, EPC and O&M via 1:50 leadership pods.",
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
    {"@type": "ListItem", "position": 3, "name": "Renewable & Sustainable Energy", "item": "<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>"}
  ]
}
</script>

<?php include 'footer.php'; ?>
