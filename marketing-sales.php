<?php
// marketing-sales.php — Clean, stable, fully scoped page

// Page metadata (make both $title and $page_title available to header.php)
$title        = "Marketing & Sales Leadership — Investor Education Program";
$page_title   = $title;
$meta_description = "Lead funnel architecture, performance marketing, sales enablement, and RevOps at scale. Limited to 100 leaders per industry.";
$og_title     = $page_title;
$og_description = $meta_description;
$og_image     = "https://og-image.vercel.app/Marketing%20%26%20Sales%20Leadership.png?theme=light&md=1&fontSize=80px";
$og_url       = "https://invest.btheducationgroup.com/marketing-sales.php";

// Page-scoped CSS for Marketing & Sales
$page_styles = ['assets/css/page/marketing-sales.css'];
include 'header.php';
?>

<!-- Styles moved to assets/css/page/marketing-sales.css -->

<?php 
$breadcrumb_items = [
  ['label' => 'Home', 'href' => 'index.php'],
  ['label' => 'Industries', 'href' => 'index.php#industries'],
  ['label' => 'Marketing & Sales Leadership']
];
include 'breadcrumbs.php';
?>

<div class="ms-page">

  <!-- HERO (succinct, consistent with other pages) -->
  <header>
    <div class="hero">
      <div class="hero-left">
        <span class="eyebrow">Investor Education • Marketing &amp; Sales</span>
        <h1>Lead. Earn. Transform.<br><strong>Marketing &amp; Sales Leadership</strong></h1>
        <p class="lead">
          Build a certified 1:50 pod to deliver funnel architecture, performance marketing, sales enablement, and RevOps.
          Limited to <strong>100 team leaders per industry</strong>.
        </p>
        <div class="cta-row">
          <a class="btn" href="#hire-marketing-sales-team">Become a Team Leader</a>
          <a class="btn-outline" href="#commercials">How it Works</a>
        </div>
        <div class="stats">
          <div class="stat">
            <div class="stat-value" data-countup="44321" data-suffix=" USD">0</div>
            <div class="stat-label" style="font-size:13px;white-space:nowrap;">Team-building commission</div>
          </div>
          <div class="stat">
            <div class="stat-value" data-countup="2127372" data-suffix=" USD">0</div>
            <div class="stat-label" style="font-size:13px;white-space:nowrap;">Leader annual income (example)</div>
          </div>
          <div class="stat">
            <div class="stat-value" data-countup="63822" data-suffix=" USD">0</div>
            <div class="stat-label" style="font-size:13px;white-space:nowrap;">Member annual income (example)</div>
          </div>
        </div>
      </div>

      <div class="hero-right">
        <div class="card">
          <strong>Quick Apply</strong>
          <form class="apply-form" method="POST" action="send-mail.php">
            <input type="hidden" name="form_type" value="Hire Marketing &amp; Sales Pod">
            <div class="form-row">
              <div class="form-group">
                <label>Organization Name</label>
                <input type="text" name="organization" required>
              </div>
              <div class="form-group">
                <label>Your Role / Title</label>
                <input type="text" name="role" required>
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
            <div class="form-group">
              <label>Marketing &amp; Sales Needs</label>
              <textarea name="needs" rows="3" placeholder="Demand gen, ABM for top accounts, SDR enablement, RevOps dashboards..." required></textarea>
            </div>
            <button type="submit" class="btn">Submit Pod Request</button>
          </form>
        </div>
      </div>
    </div>
  </header>

  <!-- Quick Navigation -->
  <nav class="quick-nav" aria-label="Section navigation">
    <a href="#certifications">Certifications</a>
    <a href="#solutions">What You Deliver</a>
    <a href="#use-cases">Real-World Deployments</a>
    <a href="#commercials">1:50 & ROI</a>
    <a href="#packages">Packages</a>
    <a href="#stack">Tech Stack</a>
    <a href="#hire-marketing-sales-team">Request a Pod</a>
  </nav>

  <!-- Certification Pathways -->
  <section id="certifications" class="section" aria-labelledby="certifications-title">
    <h2 id="certifications-title">Certification Pathways (Beginner → Expert)</h2>
    <p class="muted" style="max-width: 800px; margin: 0 auto 30px;">
      Candidates progress from foundational digital marketing to advanced RevOps and enterprise sales leadership.
    </p>

    <div class="tab-system" role="tablist" aria-label="Certification levels">
      <button class="tab-btn active" data-tab="ms-beginner" role="tab" aria-selected="true" aria-controls="ms-beginner">Beginner</button>
      <button class="tab-btn" data-tab="ms-intermediate" role="tab" aria-selected="false" aria-controls="ms-intermediate">Intermediate</button>
      <button class="tab-btn" data-tab="ms-expert" role="tab" aria-selected="false" aria-controls="ms-expert">Expert</button>
    </div>

    <div class="tab-content active" id="ms-beginner" role="tabpanel" aria-labelledby="ms-beginner">
      <div class="grid">
        <div class="card">
          <h3>HubSpot Marketing Software</h3>
          <p>Inbound marketing, email campaigns, landing pages, lead scoring, workflow automation.</p>
          <p class="muted">HubSpot Academy credential.</p>
        </div>
        <div class="card">
          <h3>Google Analytics (GA4)</h3>
          <p>Web traffic analysis, conversion tracking, audience segmentation, campaign attribution.</p>
          <p class="muted">Google Skillshop certification.</p>
        </div>
        <div class="card">
          <h3>Meta Certified Digital Marketing Associate</h3>
          <p>Meta Ads, targeting, creative optimization, budget management.</p>
          <p class="muted">Meta Blueprint credential.</p>
        </div>
      </div>
    </div>

    <div class="tab-content" id="ms-intermediate" role="tabpanel" aria-labelledby="ms-intermediate">
      <div class="grid">
        <div class="card">
          <h3>Certified Sales Professional (CSP)</h3>
          <p>B2B methodology, pipeline management, consultative selling, negotiation.</p>
          <p class="muted">Recognized sales body credential.</p>
        </div>
        <div class="card">
          <h3>LinkedIn Sales Navigator Certified</h3>
          <p>Social selling, prospecting, ABM orchestration, outreach sequencing.</p>
          <p class="muted">LinkedIn credential.</p>
        </div>
        <div class="card">
          <h3>Content Marketing Certification</h3>
          <p>Content strategy, SEO writing, multimedia production, editorial ops.</p>
          <p class="muted">CMI or equivalent.</p>
        </div>
      </div>
    </div>

    <div class="tab-content" id="ms-expert" role="tabpanel" aria-labelledby="ms-expert">
      <div class="grid">
        <div class="card">
          <h3>Certified Revenue Operations Professional (CROP)</h3>
          <p>RevOps framework, alignment, forecast modeling, pipeline hygiene.</p>
          <p class="muted">RevOps-focused credential.</p>
        </div>
        <div class="card">
          <h3>Salesforce Certified Administrator</h3>
          <p>CRM configuration, dashboards, workflow automation, Sales Cloud optimization.</p>
          <p class="muted">Salesforce Trailhead.</p>
        </div>
        <div class="card">
          <h3>Chartered Marketer (CIM L7)</h3>
          <p>Strategic leadership, brand management, market research, orchestration.</p>
          <p class="muted">CIM (UK) or equivalent.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Solutions -->
  <section id="solutions" class="section" style="background:#f9fafb;">
    <h2>What Your 50-Person Pod Delivers</h2>
    <div class="grid">
      <div class="card">
        <h3>🎯 Funnel Architecture &amp; Optimization</h3>
        <ul>
          <li>Multi-stage funnels (awareness → decision)</li>
          <li>Landing page A/B testing</li>
          <li>Lead magnets, webinars, tools</li>
          <li>Automation (drips, nurture sequences)</li>
        </ul>
      </div>
      <div class="card">
        <h3>📊 Performance Marketing &amp; Paid Media</h3>
        <ul>
          <li>Google, Meta, LinkedIn campaign mgmt</li>
          <li>Creative testing, segmentation</li>
          <li>Budget allocation, ROI tracking</li>
          <li>Retargeting, lookalike strategies</li>
        </ul>
      </div>
      <div class="card">
        <h3>🎨 Brand &amp; Content Systems</h3>
        <ul>
          <li>Positioning, messaging frameworks</li>
          <li>SEO content: blogs, case studies, video</li>
          <li>Social calendars, community mgmt</li>
          <li>PR &amp; influencer programs</li>
        </ul>
      </div>
      <div class="card">
        <h3>🤝 Sales Enablement &amp; Training</h3>
        <ul>
          <li>Playbooks, objection scripts, demos</li>
          <li>CRM onboarding, pipeline hygiene</li>
          <li>Collateral (decks, one-pagers, ROI)</li>
          <li>Win/loss analysis &amp; improvement loops</li>
        </ul>
      </div>
      <div class="card">
        <h3>💰 Revenue Operations (RevOps)</h3>
        <ul>
          <li>Marketing–Sales–CS alignment (SLAs)</li>
          <li>Lead routing &amp; scoring</li>
          <li>Forecast accuracy &amp; velocity</li>
          <li>Data hygiene &amp; attribution</li>
        </ul>
      </div>
      <div class="card">
        <h3>📱 Field Force Automation &amp; Territories</h3>
        <ul>
          <li>Mobile apps, route planning, tracking</li>
          <li>Territory &amp; quota management</li>
          <li>Real-time manager dashboards</li>
          <li>Commission calc &amp; leaderboards</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Use Cases (Accordions) -->
  <section id="use-cases" class="section">
  <h2>Real-World Deployments</h2>
  <p class="muted" style="max-width:800px;margin:0 auto 30px;">
    Your 50-person pod scales across industries, geographies, and business models.
  </p>

  <details class="ms-acc" id="ms-retail">
    <summary>🛒 Retail &amp; E-Commerce — Omnichannel Growth Campaigns</summary>
    <div class="ms-acc-body">
      <p><strong>Challenge:</strong> Unify online/offline journeys, grow e-commerce +40% YoY.</p>
      <p><strong>Solution:</strong> Geo-targeted ads, loyalty app, abandoned-cart automation, in-store enablement.</p>
      <p><strong>Outcome:</strong> +38% online conversions, +22% store visits, 4.2x ROAS.</p>
    </div>
  </details>

  <details class="ms-acc" id="ms-saas">
    <summary>💻 SaaS &amp; B2B Tech — Demand Generation &amp; ABM</summary>
    <div class="ms-acc-body">
      <p><strong>Challenge:</strong> Low-quality leads, long cycles, misaligned handoffs.</p>
      <p><strong>Solution:</strong> ABM playbook, scoring, decision-maker content, SDR consultative outreach.</p>
      <p><strong>Outcome:</strong> +55% MQL→SQL, −30% cycle time, $2.4M pipeline (6 months).</p>
    </div>
  </details>

  <details class="ms-acc" id="ms-health">
    <summary>🏥 Healthcare &amp; Pharma — Compliant Multi-Channel Campaigns</summary>
    <div class="ms-acc-body">
      <p><strong>Challenge:</strong> Educate physicians under strict compliance.</p>
      <p><strong>Solution:</strong> HIPAA-compliant journeys, KOL webinars, digital detailing, CRM-integrated tracking.</p>
      <p><strong>Outcome:</strong> 1,200+ physician regs, 68% attendance, 19% adoption in 90 days.</p>
    </div>
  </details>

  <details class="ms-acc" id="ms-finance">
    <summary>💳 Financial Services — Trust-Based Lead Generation</summary>
    <div class="ms-acc-body">
      <p><strong>Challenge:</strong> Acquire HNWI without sales fatigue.</p>
      <p><strong>Solution:</strong> Thought-leadership series, LinkedIn ABM, invite-only events, personalized video nurtures.</p>
      <p><strong>Outcome:</strong> 84 HNWI leads, 12 onboardings ($18M AUM), 5.1x ROI.</p>
    </div>
  </details>

  <details class="ms-acc" id="ms-mfg">
    <summary>🏭 Manufacturing — Trade Show &amp; Partner Channel Marketing</summary>
    <div class="ms-acc-body">
      <p><strong>Challenge:</strong> Show-heavy strategy with weak follow-up &amp; partner motion.</p>
      <p><strong>Solution:</strong> Pre/post show sequences, QR capture, partner portal &amp; deal reg.</p>
      <p><strong>Outcome:</strong> +340% qualified leads, 28 partner activations, $5.6M partner-sourced revenue.</p>
    </div>
  </details>
</section>

  <!-- Commercials — 1:50 Pods & Leader ROI -->
  <section id="commercials" class="section" style="background:#f9fafb;">
    <h2>Commercials — 1:50 Pods &amp; Leader ROI</h2>
    <div class="grid">
      <div class="card">
        <h3>Pod Economics</h3>
        <p><strong>1 Team Leader : 50 Certified Professionals</strong></p>
        <p>Mix: 15 marketing strategists, 12 content creators, 8 paid media specialists, 10 sales enablement trainers, 5 RevOps analysts.</p>
        <p class="muted">Candidates train & certify; leaders manage deployment, QA, and escalations.</p>
      </div>
      <div class="card">
        <h3>Managed Marketing &amp; Sales Program</h3>
        <p>Tiered retainers: funnel audits, campaign execution, sales training, RevOps optimization. Scales across business units and geographies.</p>
        <p class="muted">Handoffs with Creative Media, Data Science, and GovTech where relevant.</p>
      </div>
      <div id="leader-roi-card-ms" class="card">
        <h3>Leader ROI Ladder</h3>
        <p>Active commission: <strong>44,321 USD</strong>. Residual income scales with multi-campaign retainers, regional expansion, and white-label partnerships. Month-3/6/12 bands available.</p>
        <a class="btn" href="#hire-marketing-sales-team" aria-label="Request Finance Pack in contact form">Request Finance Pack</a>
      </div>
    </div>
  </section>

  <!-- Offer Packaging -->
  <section id="packages" class="section">
    <h2>Offer Packaging (Buy-Now Clarity)</h2>
    <div class="grid">
      <div class="card">
        <h3>Marketing &amp; Sales Essentials</h3>
        <p>Campaign planning, funnel setup, basic CRM, social management, monthly reporting.</p>
        <p class="muted">For startups & SMBs launching GTM.</p>
      </div>
      <div class="card">
        <h3>Performance Marketing Plus</h3>
        <p>Multi-channel paid media, CRO, lead nurturing automation, enablement collateral.</p>
        <p class="muted">For growth-stage acquisition scaling.</p>
      </div>
      <div class="card">
        <h3>Enterprise RevOps Suite</h3>
        <p>Full-stack RevOps, ABM programs, pipeline analytics, forecasting dashboards.</p>
        <p class="muted">For global alignment across teams.</p>
      </div>
    </div>
  </section>

  <!-- Tech Stack -->
  <section id="stack" class="section" style="background:#f9fafb;">
    <h2>Technology Stack</h2>
    <div class="grid">
      <div class="card">
        <h3>Marketing Automation &amp; CRM</h3>
        <ul>
          <li>HubSpot Marketing Hub • Salesforce Marketing Cloud</li>
          <li>Marketo • Pardot</li>
          <li>Salesforce Sales Cloud • Microsoft Dynamics 365</li>
        </ul>
      </div>
      <div class="card">
        <h3>Paid Media &amp; Analytics</h3>
        <ul>
          <li>Google Ads • Meta Ads • LinkedIn Campaign Manager</li>
          <li>Google Analytics 4 • Adobe Analytics</li>
          <li>Mixpanel • Amplitude</li>
        </ul>
      </div>
      <div class="card">
        <h3>Content &amp; SEO</h3>
        <ul>
          <li>WordPress • Webflow • HubSpot CMS</li>
          <li>SEMrush • Ahrefs</li>
          <li>Canva • Adobe Creative Cloud</li>
        </ul>
      </div>
      <div class="card">
        <h3>Sales Enablement &amp; RevOps</h3>
        <ul>
          <li>Gong • Chorus.ai</li>
          <li>Outreach • SalesLoft</li>
          <li>Clari • InsightSquared</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Hire Pod Form -->
  <section id="hire-marketing-sales-team" class="section" aria-labelledby="hire-title">
    <h2 id="hire-title">How to Hire a Marketing &amp; Sales Pod</h2>
    <p style="max-width:800px;margin:0 auto 40px;color:#6b7280;">
      We match you with a certified Team Leader and deploy their 50-person pod to your funnels, campaigns, and sales operations.
    </p>
    <form class="apply-form" method="POST" action="send-mail.php">
      <input type="hidden" name="form_type" value="Hire Marketing &amp; Sales Pod">
      <div class="form-row">
        <div class="form-group">
          <label>Organization Name</label>
          <input type="text" name="organization" required>
        </div>
        <div class="form-group">
          <label>Your Role / Title</label>
          <input type="text" name="role" required>
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
      <div class="form-group">
        <label>Marketing &amp; Sales Needs</label>
        <textarea name="needs" rows="4" placeholder="Example: Demand gen for B2B SaaS, ABM for top 50 accounts, SDR enablement, RevOps dashboard for exec visibility." required></textarea>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label>Target Launch Date</label>
          <input type="date" name="launch_date" required>
        </div>
        <div class="form-group">
          <label>Budget Range (USD)</label>
          <select name="budget" required>
            <option value="">Select...</option>
            <option>$50k - $100k</option>
            <option>$100k - $250k</option>
            <option>$250k - $500k</option>
            <option>$500k - $1M</option>
            <option>$1M+</option>
          </select>
        </div>
      </div>
      <button type="submit" class="btn">Submit Pod Request</button>
    </form>
  </section>

</div><!-- /.ms-page -->

</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Marketing & Sales Leadership",
  "description": "Funnel architecture, performance marketing, sales enablement and RevOps delivered by a certified 1:50 pod.",
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
    {"@type": "ListItem", "position": 3, "name": "Marketing & Sales Leadership", "item": "<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>"}
  ]
}
</script>

<?php include 'footer.php'; ?>
   (safe, no global conflicts)
=================================*/
(function() {
  // Tabs
  const tabBtns = document.querySelectorAll('.ms-page .tab-btn');
  const tabContents = document.querySelectorAll('.ms-page .tab-content');
  tabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const target = btn.dataset.tab;
      tabBtns.forEach(b => {
<?php 
$breadcrumb_items = [
  ['label' => 'Home', 'href' => 'index.php'],
  ['label' => 'Industries', 'href' => 'index.php#industries'],
  ['label' => 'Marketing & Sales Leadership']
];
include 'breadcrumbs.php';
?>
        const isActive = b === btn;
        b.classList.toggle('active', isActive);
        b.setAttribute('aria-selected', isActive ? 'true' : 'false');
      });
      tabContents.forEach(c => c.classList.toggle('active', c.id === target));
    });
  });

  

  accButtons.forEach(button => {
    const targetId = button.getAttribute('data-target');
    const content = document.getElementById(targetId);

    // Initialize closed
    if (content) {
      content.classList.remove('active');
      content.style.maxHeight = '0px';
    }
    button.setAttribute('aria-expanded','false');

    button.addEventListener('click', () => {
      const isActive = content.classList.contains('active');

      // Close all
      accButtons.forEach(b => { b.classList.remove('active'); b.setAttribute('aria-expanded','false'); });
      accContents.forEach(c => { c.classList.remove('active'); c.style.maxHeight = '0px'; });

      // Open current
      if (!isActive) {
        button.classList.add('active');
        button.setAttribute('aria-expanded','true');
        content.classList.add('active');
        // ensure height fits content
        requestAnimationFrame(() => { content.style.maxHeight = content.scrollHeight + 'px'; });
      }
    });

    // Keep height correct on resize
    window.addEventListener('resize', () => {
      if (content && content.classList.contains('active')) {
        content.style.maxHeight = content.scrollHeight + 'px';
      }
    });
  });
})();
</script>
<script>
(function(){
  const accs = document.querySelectorAll('.ms-page details.ms-acc');
  accs.forEach(d => d.addEventListener('toggle', () => {
    if (d.open) accs.forEach(o => { if (o!==d) o.removeAttribute('open'); });
  }));
})();
</script>
<?php include 'footer.php'; ?>