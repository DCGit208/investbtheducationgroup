<?php
// ============================
// Intelligent Cloud, Data & AI
// ============================
$page_title       = "Intelligent Cloud, Data & AI — Architect • Migrate • Scale";
$meta_description = "Cloud landing zones, data platforms, analytics & AI, platform engineering, SRE and FinOps — delivered via the 1:50 leadership model for enterprises and public sector.";
$og_title         = $page_title;
$og_description   = $meta_description;
$og_image         = "https://invest.btheducationgroup.com/image/logo-og.png";
$og_url           = "https://invest.btheducationgroup.com/intelligent-cloud.php";
include 'header.php';
?>
<?php 
$breadcrumb_items = [
  ['label' => 'Home', 'href' => 'index.php'],
  ['label' => 'Industries', 'href' => 'index.php#industries'],
  ['label' => 'Intelligent Cloud, Data & AI']
];
include 'breadcrumbs.php';
?>

<header>
  <div class="hero">
    <div class="hero-left">
      <h1>Architect. Migrate. Scale.<br><strong>Intelligent Cloud, Data &amp; AI</strong></h1>
      <p class="lead">
        Landing zones, data platforms, analytics &amp; AI — with <strong>platform engineering, SRE and FinOps</strong> baked in.
        Delivered through the Investor Education <strong>1:50 leadership model</strong> across enterprises and ministries.
      </p>
      <div class="cta-row">
        <a class="btn" href="#apply">Become a Team Leader</a>
        <a class="btn-outline" href="#hire-cloud">Request Proposal</a>
      </div>
      <div class="stats">
        <div class="stat"><div class="stat-value">44,321 USD</div><div class="stat-label" style="font-size:13px;white-space:nowrap;">Team-building commission</div></div>
        <div class="stat"><div class="stat-value">2,127,372 USD</div><div class="stat-label" style="font-size:13px;white-space:nowrap;">Leader annual income</div></div>
        <div class="stat"><div class="stat-value">63,822 USD</div><div class="stat-label" style="font-size:13px;white-space:nowrap;">Member annual income</div></div>
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
              <option selected>Intelligent Cloud, Data &amp; AI</option>
              <option>Software &amp; Systems Engineering</option>
              <option>Information Technology</option>
              <option>Cybersecurity &amp; Digital Defense</option>
              <option>Medical Technology / Healthcare IT</option>
            </select>
          </div>
          <input type="hidden" name="source" value="Quick Apply • Intelligent Cloud">
          <button class="btn" type="submit">Apply Now</button>
        </form>
      </div>
    </div>
  </div>
</header>

<section id="nav" class="section">
  <h2>Quick Navigation</h2>
  <div class="grid">
    <a class="card" href="#value">What We Deliver</a>
    <a class="card" href="#proof">Proof &amp; Portfolio</a>
    <a class="card" href="#team">1:50 Team &amp; Roles</a>
    <a class="card" href="#platform">Cloud Platform &amp; Data Stack</a>
    <a class="card" href="#ai">AI/ML &amp; GenAI</a>
    <a class="card" href="#governance">Governance, Security &amp; FinOps</a>
    <a class="card" href="#packages">Solution Packages</a>
    <a class="card" href="#kpis">KPIs &amp; SLAs</a>
    <a class="card" href="#commercials">Commercials &amp; ROI</a>
    <a class="card" href="#pathways">Certifications &amp; Pathways</a>
    <a class="card" href="#boundaries">Cross-Links</a>
    <a class="card" href="#hire-cloud">Request Proposal</a>
    <a class="card" href="#apply">Apply</a>
  </div>
</section>

<section id="value" class="section">
  <h2>What We Deliver — Platform, Data &amp; AI at Scale</h2>
  <div class="grid">
    <div class="card"><h3>Landing Zones</h3><p>Identity, network, policies, logging, monitoring, baseline security and org hierarchy.</p></div>
    <div class="card"><h3>Hybrid Connectivity</h3><p>ExpressRoute/Direct Connect/Interconnect, SD-WAN, private link, service endpoints.</p></div>
    <div class="card"><h3>Data Platforms</h3><p>Ingestion/ELT, lakehouse (Delta/Iceberg), semantic layer, lineage &amp; data contracts.</p></div>
    <div class="card"><h3>Analytics &amp; BI</h3><p>Power BI/Tableau/Looker, governed self-serve, reverse ETL, metrics catalog.</p></div>
    <div class="card"><h3>AI Enablement</h3><p>Feature stores, model registry, online inference, RAG/agents, evals &amp; guardrails.</p></div>
    <div class="card"><h3>Platform/SRE</h3><p>IaC/GitOps, observability, autoscaling, SLO/SLI, cost control and reliability playbooks.</p></div>
    <div class="card"><h3>Edge &amp; CDN</h3><p>CloudFront/Front Door/Fastly/Cloudflare, edge workers, caching and performance.</p></div>
    <div class="card"><h3>DR/BCP</h3><p>Multi-region HA, backup/restore, ransomware resilience, failover runbooks.</p></div>
  </div>
</section>

<section id="proof" class="section">
  <h2>Proof &amp; Portfolio — Outcomes We Deliver</h2>
  <div class="grid">
    <div class="card"><h3>Public Sector Analytics</h3><p>National data platform and dashboards; p95 &lt; 350ms; data freshness &lt; 15 min; cost ↓ 22%.</p></div>
    <div class="card"><h3>Financial Risk Analytics</h3><p>Stream ingestion, credit risk models, lineage and audits; fraud loss ↓ 28%.</p></div>
    <div class="card"><h3>Edge Media Delivery</h3><p>Global CDN, edge compute, observability; 99.97% availability; egress cost ↓ 19%.</p></div>
    <div class="card"><h3>Industrial Predictive</h3><p>IoT ingestion, feature store, anomaly detection; unplanned downtime ↓ 33%.</p></div>
  </div>
</section>

<section id="team" class="section">
  <h2>1:50 Team — Roles &amp; Delivery Pods</h2>
  <p>Five pods led by one certified leader: platform, data, AI, integration and quality.</p>
  <div class="grid">
    <div class="card"><h3>Leadership</h3><ul><li>Cloud Architect</li><li>Program/Project Manager</li></ul></div>
    <div class="card"><h3>Platform/SRE</h3><ul><li>Platform Engineer (IaC/GitOps)</li><li>SRE (SLO/SLI, reliability, cost)</li><li>Cloud Network/Security Engineer</li></ul></div>
    <div class="card"><h3>Data/AI</h3><ul><li>Data Engineer</li><li>Analytics Developer</li><li>ML/GenAI Engineer</li><li>MLOps Engineer</li></ul></div>
    <div class="card"><h3>Integration</h3><ul><li>API/Messaging Engineer</li><li>Identity &amp; Access (Entra/Cognito/Keycloak)</li></ul></div>
    <div class="card"><h3>Quality</h3><ul><li>QA (data tests, contract tests)</li><li>Performance/FinOps Analyst</li></ul></div>
  </div>
</section>

<section id="platform" class="section">
  <h2>Cloud Platform &amp; Data Stack</h2>
  <details class="card"><summary><strong>Landing Zones</strong></summary><p>Org structure, subscriptions/projects, policy-as-code, logging/monitoring.</p></details>
  <details class="card"><summary><strong>IaC &amp; GitOps</strong></summary><p>Terraform/Pulumi/Bicep, Helm/Kustomize, Argo CD/Flux, OPA policies.</p></details>
  <details class="card"><summary><strong>Ingestion &amp; Processing</strong></summary><p>Kafka/Event Hub/PubSub, dbt/ELT, stream/batch, orchestration (Airflow/Prefect).</p></details>
  <details class="card"><summary><strong>Storage &amp; Lakehouse</strong></summary><p>Object store, Delta/Iceberg, catalog, schema evolution, governance.</p></details>
  <details class="card"><summary><strong>Analytics &amp; BI</strong></summary><p>Power BI/Tableau/Looker, semantic layers, reverse ETL, data contracts and lineage.</p></details>
  <details class="card"><summary><strong>Edge &amp; CDN</strong></summary><p>Edge functions, KV stores, caching strategies, image/media optimization.</p></details>
</section>

<section id="ai" class="section">
  <h2>AI/ML &amp; GenAI Build Tracks</h2>
  <div class="grid">
    <div class="card"><h3>MLOps</h3><p>Feature stores, model registry, CI/CD for models, drift and fairness monitoring.</p></div>
    <div class="card"><h3>GenAI</h3><p>RAG (vector DBs), agents, evaluation harnesses, safety guardrails, cost controls.</p></div>
    <div class="card"><h3>Inference</h3><p>Batch/stream/online inference, autoscaling, telemetry and model A/B tests.</p></div>
  </div>
</section>

<section id="governance" class="section">
  <h2>Governance, Security &amp; FinOps</h2>
  <div class="grid">
    <div class="card"><h3>Guardrails</h3><p>Policy-as-code (OPA), tagging, budgets, org-level controls, workload identities.</p></div>
    <div class="card"><h3>Security Baselines</h3><p>CIS/NIST alignment, encryption, secrets management, zero-trust APIs.</p></div>
    <div class="card"><h3>FinOps</h3><p>Rightsizing, reserved capacity, storage lifecycle, cost visibility and alerts.</p></div>
    <div class="card"><h3>Evidence Packs</h3><p>Artifacts, SBOMs, audit trails to support compliance audits.</p></div>
  </div>
  <p class="muted">Note: SOC/MDR, pentesting and DFIR are delivered on the <a href="cybersecurity.php">Cybersecurity</a> page.</p>
</section>

<section id="packages" class="section">
  <h2>Solution Packages (Client-Friendly)</h2>
  <div class="grid">
    <div class="card"><h3>Landing Zone in 30 Days</h3><p><strong>Pods:</strong> Platform/SRE • <strong>Sprints:</strong> 6 × 1 week • <strong>Deliverables:</strong> org, identity, policies, logs, monitoring • <strong>Warranty:</strong> 30 days.</p></div>
    <div class="card"><h3>Data Platform Fast-Track</h3><p><strong>Pods:</strong> Data + Platform • <strong>Sprints:</strong> 8 × 2 weeks • <strong>Deliverables:</strong> ingestion, lakehouse, BI, lineage • <strong>Warranty:</strong> 60 days.</p></div>
    <div class="card"><h3>AI Enablement Sprint</h3><p><strong>Pods:</strong> AI/ML + Data • <strong>Sprints:</strong> 6 × 2 weeks • <strong>Deliverables:</strong> feature store, registry, RAG/agents • <strong>Warranty:</strong> 60 days.</p></div>
    <div class="card"><h3>Modernization &amp; Scale</h3><p><strong>Pods:</strong> Platform + Integration + SRE • <strong>Sprints:</strong> 12 × 2 weeks • <strong>Deliverables:</strong> migration, observability, cost guardrails • <strong>Warranty:</strong> 90 days.</p></div>
  </div>
</section>

<section id="kpis" class="section">
  <h2>KPIs &amp; SLAs</h2>
  <div class="grid">
    <div class="card"><h3>Provisioning Lead Time</h3><p>Landing zone changes &lt; 1 day; platform releases daily.</p></div>
    <div class="card"><h3>Data Freshness</h3><p>Batch &lt; 60 min; near-real-time &lt; 5 min; streaming sub-second where applicable.</p></div>
    <div class="card"><h3>Reliability</h3><p>SLO/SLI targets per service; multi-region HA where required.</p></div>
    <div class="card"><h3>FinOps</h3><p>Cost reduction targets 10–30% with visibility and alerts.</p></div>
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
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Typical Scope</th>
      </tr></thead>
      <tbody>
        <tr><td style="padding:8px;">Platform/SRE</td><td style="padding:8px;">80–120</td><td style="padding:8px;">$70k–$110k</td><td style="padding:8px;">CI/CD, infra, observability, cost mgmt</td></tr>
        <tr><td style="padding:8px;">Data Platform</td><td style="padding:8px;">100–140</td><td style="padding:8px;">$65k–$95k</td><td style="padding:8px;">Ingestion, lakehouse, BI</td></tr>
        <tr><td style="padding:8px;">AI/ML Enablement</td><td style="padding:8px;">90–130</td><td style="padding:8px;">$75k–$115k</td><td style="padding:8px;">Feature store, registry, inference</td></tr>
      </tbody>
    </table>
    <p class="muted">Rates vary by geography, compliance and SLA.</p>
  </div>

  <div class="card" style="overflow:auto">
    <h3>Leader ROI Ladder (Illustrative)</h3>
    <table style="width:100%;border-collapse:collapse;">
      <thead><tr>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Milestone</th>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Active Commission</th>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Residual (Managed Cloud)</th>
        <th style="text-align:left;padding:8px;border-bottom:1px solid #ddd;">Cumulative Annualized</th>
      </tr></thead>
      <tbody>
        <tr><td style="padding:8px;">Month 3</td><td style="padding:8px;">$14,440</td><td style="padding:8px;">$120k–$240k</td><td style="padding:8px;">$300k–$600k</td></tr>
        <tr><td style="padding:8px;">Month 6</td><td style="padding:8px;">$28,880</td><td style="padding:8px;">$480k–$960k</td><td style="padding:8px;">$1.0M–$2.0M</td></tr>
        <tr><td style="padding:8px;">Month 12</td><td style="padding:8px;">$44,321</td><td style="padding:8px;">$1.2M–$2.4M</td><td style="padding:8px;">$2.1M+</td></tr>
      </tbody>
    </table>
    <p class="muted">Aligned to 1:50 leadership model and multi-contract scenarios.</p>
  </div>
</section>

<section id="pathways" class="section">
  <h2>Certifications &amp; Pathways (Cloud, Data &amp; AI)</h2>
  <div class="grid">
    <div class="card"><h3>Azure</h3><p>AZ-104 • AZ-305 • DP-203 • AI-102 • AZ-400</p></div>
    <div class="card"><h3>AWS</h3><p>SAA/SAP • SysOps • Developer • Data Analytics • Machine Learning</p></div>
    <div class="card"><h3>GCP</h3><p>Associate → Professional Architect • Data Engineer • ML Engineer</p></div>
    <div class="card"><h3>Data/BI</h3><p>dbt • Databricks • Power BI • Tableau • Looker</p></div>
    <div class="card"><h3>Kubernetes</h3><p>CKA • CKAD • CKS</p></div>
    <div class="card"><h3>Management</h3><p>ITIL • Agile PM</p></div>
  </div>
</section>

<section id="boundaries" class="section">
  <h2>Cross-Links &amp; Boundaries</h2>
  <div class="grid">
    <a class="card" href="software-engineering.php"><h3>Software &amp; Systems Engineering</h3><p>App build &amp; product delivery.</p></a>
    <a class="card" href="cybersecurity.php"><h3>Cybersecurity</h3><p>SOC/MDR, pentesting, DFIR and audits.</p></a>
    <a class="card" href="information-technology.php"><h3>Technology &amp; Infrastructure</h3><p>Endpoint, server, network, identity operations.</p></a>
  </div>
</section>

<section id="hire-cloud" class="section">
  <h2>Request a Cloud/Data/AI Proposal</h2>
  <form method="post" action="send-mail.php" class="application-form">
    <div class="form-row">
      <div class="field"><label>Organization</label><input name="company" required></div>
      <div class="field"><label>Email</label><input name="email" type="email" required></div>
    </div>
    <div class="form-row">
      <div class="field"><label>Workload / Scope</label><input name="workload" placeholder="Landing zone, data platform, AI enablement, modernization…"></div>
      <div class="field"><label>Timeline</label><input name="timeline" placeholder="e.g., 60–120 days"></div>
    </div>
    <div class="form-row">
      <div class="field"><label>Budget Range (USD)</label><input name="budget" placeholder="$50k–$500k+"></div>
      <div class="field"><label>Compliance Targets</label><input name="compliance" placeholder="e.g., ISO, SOC 2, HIPAA"></div>
    </div>
    <div class="field"><label>Notes</label><textarea name="message" rows="5" placeholder="Context, current tooling, constraints…"></textarea></div>
    <input type="hidden" name="industry" value="Intelligent Cloud, Data &amp; AI">
    <input type="hidden" name="source" value="Hire Cloud • Request Proposal">
    <button class="btn" type="submit">Send Request</button>
  </form>
</section>

<section id="apply" class="section">
  <h2>Apply to Lead a Cloud/Data/AI Team</h2>
  <p style="color:#6b7280;max-width:900px;margin:0 auto 30px;text-align:center;">Only <strong>100 Team Leaders</strong> per industry.</p>
  <form method="post" action="send-mail.php" class="application-form">
    <div class="form-row">
      <div class="field"><label>Full Name</label><input name="name" required></div>
      <div class="field"><label>Email</label><input name="email" type="email" required></div>
    </div>
    <div class="form-row">
      <div class="field"><label>Phone</label><input name="phone" required></div>
      <div class="field"><label>Primary Cloud</label><input name="stack" placeholder="Azure/AWS/GCP + Data/AI focus"></div>
    </div>
    <div class="field"><label>Why are you a fit?</label><textarea name="message" rows="5"></textarea></div>
    <input type="hidden" name="industry" value="Intelligent Cloud, Data &amp; AI">
    <input type="hidden" name="source" value="Full Apply • Intelligent Cloud">
    <button class="btn" type="submit">Submit Application</button>
  </form>
</section>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Intelligent Cloud, Data & AI",
  "description": "Cloud landing zones, data platforms, analytics/BI and AI with platform engineering, SRE and FinOps via 1:50 pods.",
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
    {"@type": "ListItem", "position": 3, "name": "Intelligent Cloud, Data & AI", "item": "<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>"}
  ]
}
</script>

<?php include 'footer.php'; ?>