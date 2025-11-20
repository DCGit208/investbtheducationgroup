

<?php
// ============================================
// Page meta for header.php (OG/Twitter)
// ============================================
$page_title       = "Software & Systems Engineering — Design • Build • Ship";
$meta_description = "World-class software engineering aligned to the Investor Education 1:50 model: product discovery, architecture, cloud-native delivery, DevOps/SRE, security-by-design, data/AI, mobile/web/desktop/IoT, and compliance.";
$og_title         = $page_title;
$og_description   = $meta_description;
$og_image         = "https://invest.btheducationgroup.com/image/logo-og.png";
$og_url           = "https://invest.btheducationgroup.com/software-engineering";
include 'header.php';
?>

<header>
  <div class="hero">
    <!-- Hero Left -->
    <div class="hero-left">
      <h1>Design. Build. Ship.<br><strong>Software &amp; Systems Engineering</strong></h1>
      <p class="lead">
        We architect and deliver production-grade software — web, mobile, desktop, APIs, data platforms, real‑time systems, edge/IoT, and AI — 
        with <strong>DevOps, SRE, and security-by-design</strong> baked in. 
        Deployed through the Investor Education <strong>1:50 leadership model</strong> for scalable delivery across enterprises, ministries, and high‑growth organizations.
      </p>
      <div class="cta-row">
        <a class="btn" href="#apply">Become a Team Leader</a>
        <a class="btn-outline" href="#nav">Explore the Stack</a>
      </div>
      <div class="stats">
        <div class="stat"><div class="stat-value">44,321 USD</div><div class="stat-label" style="font-size:13px;white-space:nowrap;">Team-building commission</div></div>
        <div class="stat"><div class="stat-value">2,127,372 USD</div><div class="stat-label" style="font-size:13px;white-space:nowrap;">Leader annual income</div></div>
        <div class="stat"><div class="stat-value">63,822 USD</div><div class="stat-label" style="font-size:13px;white-space:nowrap;">Member annual income</div></div>
      </div>
    </div>

    <!-- Hero Right (Quick Apply Form) -->
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
              <option selected>Software &amp; Systems Engineering</option>
              <option>Information Technology</option>
              <option>Intelligent Cloud, Data &amp; AI</option>
              <option>Cybersecurity &amp; Digital Defense</option>
              <option>Medical Technology / Healthcare IT</option>
            </select>
          </div>
          <input type="hidden" name="source" value="Quick Apply • Software Engineering">
          <button class="btn" type="submit">Apply Now</button>
        </form>
      </div>
    </div>
  </div>
</header>

<!-- Quick Navigation -->
<section id="nav" class="section">
  <h2>Quick Navigation</h2>
  <div class="grid">
    <a class="card" href="#value">What We Build</a>
    <a class="card" href="#team">1:50 Team &amp; Roles</a>
    <a class="card" href="#architecture">Architecture &amp; Tech Stack</a>
    <a class="card" href="#devops">DevOps, SRE &amp; Platform</a>
    <a class="card" href="#security">Security-by-Design &amp; Compliance</a>
    <a class="card" href="#quality">Quality Engineering</a>
    <a class="card" href="#dataai">Data, AI &amp; MLOps</a>
    <a class="card" href="#specialized">Specialized Domains</a>
    <a class="card" href="#packages">Solution Packages</a>
    <a class="card" href="#pathways">Certifications &amp; Pathways</a>
    <a class="card" href="#engagement">Engagement &amp; Pricing Models</a>
    <a class="card" href="#faq">FAQs</a>
  </div>
</section>

<!-- 1. What We Build -->
<section id="value" class="section">
  <h2>What We Build — From Idea to Global Scale</h2>
  <div class="grid">
    <div class="card"><h3>Web Platforms</h3><p>Enterprise portals, e‑commerce, marketplaces, B2B integrations, partner ecosystems, public services.</p></div>
    <div class="card"><h3>Mobile Apps</h3><p>iOS, Android, and Flutter cross‑platform apps with offline sync, secure auth, analytics, and OTA updates.</p></div>
    <div class="card"><h3>APIs &amp; Integrations</h3><p>REST, GraphQL, gRPC, WebSockets; ERP/CRM/HRIS/Payments; event‑driven and batch integrations.</p></div>
    <div class="card"><h3>Cloud‑Native Backends</h3><p>Microservices, serverless, containers, message buses, multi‑tenant SaaS, multiregion HA/DR.</p></div>
    <div class="card"><h3>Realtime &amp; Streaming</h3><p>Chat, collaboration, telemetry, trading, streaming media, low‑latency delivery, stateful services.</p></div>
    <div class="card"><h3>Edge &amp; IoT</h3><p>Device firmware, gateways, OTA, digital twins, time‑series pipelines, secure device identity &amp; fleet mgmt.</p></div>
    <div class="card"><h3>Data Products</h3><p>Data lakes/warehouses, ELT/ETL pipelines, semantic layers, governed self‑service BI, reverse ETL.</p></div>
    <div class="card"><h3>AI Systems</h3><p>LLM apps, RAG, agents, copilots, vector search, model serving, evaluation &amp; monitoring, Responsible AI.</p></div>
    <div class="card"><h3>Desktop &amp; Embedded</h3><p>Electron/Tauri/.NET MAUI, native C/C++, Rust, real‑time &amp; embedded systems, hardware integrations.</p></div>
    <div class="card"><h3>XR &amp; 3D</h3><p>Unity/Unreal for training, simulation, digital showrooms, AR operations, and immersive learning.</p></div>
  </div>
  <p class="muted" style="margin-top:10px">All delivery includes UX/UI, accessibility (WCAG 2.2), localization (i18n/L10n), telemetry, observability, documentation, and secure SDLC.</p>
</section>

<!-- 2. 1:50 Team -->
<section id="team" class="section">
  <h2>1:50 Team — Roles &amp; Delivery Pods</h2>
  <p>One certified leader orchestrates five delivery pods (8–10 members each) to cover product, platform, and compliance end‑to‑end.</p>
  <div class="grid">
    <div class="card">
      <h3>Leadership</h3>
      <ul>
        <li>Team Leader (Architect/Eng Manager)</li>
        <li>Product Manager / Owner</li>
        <li>Project Manager / Scrum Master</li>
      </ul>
    </div>
    <div class="card">
      <h3>Architecture &amp; Platform</h3>
      <ul>
        <li>Solution / Cloud Architect</li>
        <li>Platform Engineer (K8s/IaC/GitOps)</li>
        <li>SRE (SLO/SLI, reliability, cost)</li>
      </ul>
    </div>
    <div class="card">
      <h3>Engineering</h3>
      <ul>
        <li>Frontend (React/Angular/Vue/Svelte)</li>
        <li>Backend (Node/Java/.NET/Go/Rust/Python)</li>
        <li>Mobile (Flutter/Android/iOS)</li>
        <li>Desktop/Embedded (C/C++/Rust/.NET MAUI)</li>
      </ul>
    </div>
    <div class="card">
      <h3>Data &amp; AI</h3>
      <ul>
        <li>Data Engineer / Analytics</li>
        <li>ML Engineer / MLOps</li>
        <li>GenAI Engineer (RAG/Agents)</li>
      </ul>
    </div>
    <div class="card">
      <h3>Quality &amp; Security</h3>
      <ul>
        <li>QA (Unit/Integration/E2E/Contract)</li>
        <li>Performance/Chaos Testing</li>
        <li>AppSec (Threat Modeling, SAST/DAST)</li>
      </ul>
    </div>
    <div class="card">
      <h3>Experience &amp; Enablement</h3>
      <ul>
        <li>UX/UI &amp; Design Systems</li>
        <li>Tech Writing / Developer Docs</li>
        <li>Enablement &amp; Training</li>
      </ul>
    </div>
  </div>
  <p class="muted">Scaled by the Investor Education model — recruit, certify, and mentor a 50‑person workforce with recurring delivery capacity.</p>
</section>

<!-- 3. Architecture & Tech Stack -->
<section id="architecture" class="section">
  <h2>Architecture &amp; Technology Coverage</h2>

  <details class="card"><summary><strong>Languages</strong></summary>
    <p>TypeScript/JavaScript, Python, Java, C#, Go, Rust, C/C++, Swift, Kotlin, Dart (Flutter), SQL, Bash.</p>
  </details>

  <details class="card"><summary><strong>Frontend</strong></summary>
    <p>React, Angular, Vue, Svelte/SvelteKit, Next.js, Nuxt, Vite, Tailwind, Web Components, PWAs, WebAssembly.</p>
  </details>

  <details class="card"><summary><strong>Backend</strong></summary>
    <p>Node.js (Express, NestJS, Fastify), Java (Spring/Spring Boot), .NET (ASP.NET Core), Python (Django, FastAPI), Go (Gin/Fiber), Rust (Actix/Tonic), PHP (Laravel), Ruby (Rails).</p>
  </details>

  <details class="card"><summary><strong>APIs &amp; Interop</strong></summary>
    <p>REST, GraphQL, gRPC, WebSockets, SSE, AsyncAPI; OAuth2/OIDC, SAML, SCIM; OpenAPI/Swagger; API Gateways &amp; Developer Portals.</p>
  </details>

  <details class="card"><summary><strong>Eventing &amp; Messaging</strong></summary>
    <p>Kafka, RabbitMQ, NATS, Pulsar, MQTT, Chronicle Queue; outbox/inbox patterns, saga orchestration, idempotency.</p>
  </details>

  <details class="card"><summary><strong>Data Stores</strong></summary>
    <p>PostgreSQL, MySQL, SQL Server, Oracle; MongoDB, DynamoDB, Cassandra; Redis/Memcached; Neo4j (graph); Elasticsearch/OpenSearch; Time‑series (InfluxDB, TimescaleDB); Lakehouse (Delta/Iceberg); Object storage (S3/Blob).</p>
  </details>

  <details class="card"><summary><strong>Caching/CDN/Edge</strong></summary>
    <p>CloudFront, Azure Front Door, Fastly, Cloudflare; edge workers/functions, KV stores, CDN invalidation strategies.</p>
  </details>

  <details class="card"><summary><strong>Mobile &amp; Desktop</strong></summary>
    <p>Flutter, React Native, native iOS/Android; Electron, Tauri, .NET MAUI; background sync, deep links, secure storage.</p>
  </details>

  <details class="card"><summary><strong>IoT &amp; Embedded</strong></summary>
    <p>MCU (C/C++/Rust), RTOS, device identity, OTA, MQTT/AMQP, digital twins, OPC UA, industrial protocols.</p>
  </details>

  <details class="card"><summary><strong>XR, Games &amp; Media</strong></summary>
    <p>Unity/Unreal, WebXR, 3D visualization, video encoding/packaging, low‑latency streaming.</p>
  </details>
</section>

<!-- 4. DevOps, SRE & Platform -->
<section id="devops" class="section">
  <h2>DevOps, SRE &amp; Platform Engineering</h2>
  <div class="grid">
    <div class="card"><h3>CI/CD</h3><p>GitHub Actions, GitLab CI, Jenkins; trunk‑based development, feature flags, blue‑green/canary, progressive delivery.</p></div>
    <div class="card"><h3>IaC &amp; GitOps</h3><p>Terraform, Pulumi, Bicep; Helm, Kustomize; Argo CD/Flux; policy‑as‑code (OPA), drift detection, golden paths.</p></div>
    <div class="card"><h3>Kubernetes &amp; Serverless</h3><p>EKS/AKS/GKE, autoscaling, service mesh, multi‑cluster; Lambda/Functions, event orchestration, queues &amp; streams.</p></div>
    <div class="card"><h3>Observability</h3><p>OpenTelemetry, Prometheus/Grafana, ELK/OpenSearch, tracing, log hygiene, incident response runbooks.</p></div>
    <div class="card"><h3>Reliability &amp; FinOps</h3><p>SLO/SLI, error budgets, capacity mgmt, chaos engineering, cost visibility and optimization.</p></div>
  </div>
</section>

<!-- 5. Security -->
<section id="security" class="section">
  <h2>Security‑by‑Design &amp; Compliance</h2>
  <div class="grid">
    <div class="card"><h3>Secure SDLC</h3><p>Threat modeling, STRIDE, SDL/ASVS, secure code guidelines, secrets mgmt, SBOM (CycloneDX), supply chain (Sigstore).</p></div>
    <div class="card"><h3>Testing</h3><p>SAST/DAST/IAST, dependency scanning, container scanning, IaC scanning, fuzzing; vulnerability mgmt &amp; patch windows.</p></div>
    <div class="card"><h3>Identity &amp; Access</h3><p>OAuth2/OIDC, SAML, Zero Trust, MFA, PAM, fine‑grained authZ (ABAC/RBAC), Keycloak/Cognito/Entra ID.</p></div>
    <div class="card"><h3>Compliance</h3><p>ISO 27001, SOC 2, PCI DSS, HIPAA, GDPR, COPPA, FedRAMP‑aligned patterns; data residency &amp; retention.</p></div>
    <div class="card"><h3>Privacy &amp; Safety</h3><p>PIA/DPIA, differential privacy patterns, policy enforcement, AI safety guardrails, audit trails.</p></div>
  </div>
</section>

<!-- 6. Quality Engineering -->
<section id="quality" class="section">
  <h2>Quality Engineering</h2>
  <div class="grid">
    <div class="card"><h3>Test Strategy</h3><p>Unit, integration, E2E, contract, snapshot, property‑based testing; test data mgmt, environments.</p></div>
    <div class="card"><h3>Automation</h3><p>Jest/Vitest, JUnit/TestNG, pytest, Cypress/Playwright, Pact, Testcontainers, K6/Locust/Gatling.</p></div>
    <div class="card"><h3>Performance</h3><p>Perf budgets, RUM, synthetic monitoring, load/stress, flamegraphs, tuning, CDN/edge optimization.</p></div>
    <div class="card"><h3>Resilience</h3><p>Chaos testing, retries/backoff, circuit breakers, bulkheads, graceful degradation, disaster recovery drills.</p></div>
  </div>
</section>

<!-- 7. Data, AI & MLOps -->
<section id="dataai" class="section">
  <h2>Data, AI &amp; MLOps</h2>
  <div class="grid">
    <div class="card"><h3>Data Engineering</h3><p>Airflow/Prefect, dbt, Kafka streams; lakehouse (Delta/Iceberg), semantic layers, data contracts, lineage.</p></div>
    <div class="card"><h3>Analytics &amp; BI</h3><p>Power BI, Tableau, Looker, Superset; governed self‑service, reverse ETL, metrics catalog.</p></div>
    <div class="card"><h3>ML Engineering</h3><p>MLflow/Kubeflow/SageMaker; feature stores; model registry, A/B testing, drift detection, monitoring.</p></div>
    <div class="card"><h3>GenAI</h3><p>RAG (vector DBs like Pinecone/pgvector), agents, tool use, evaluation harnesses, safety, cost control.</p></div>
  </div>
</section>

<!-- 8. Specialized Domains -->
<section id="specialized" class="section">
  <h2>Specialized Domain Delivery</h2>
  <div class="grid">
    <div class="card"><h3>FinTech</h3><p>Payments, wallets, core banking integrations, KYC/AML, PCI DSS, ISO 20022, open banking APIs.</p></div>
    <div class="card"><h3>HealthTech</h3><p>FHIR/HL7, EHR/EMR, HIPAA, imaging workflows, telehealth, clinical analytics, device connectivity.</p></div>
    <div class="card"><h3>GovTech</h3><p>e‑Gov portals, citizen identity, digital signatures, data residency, accessibility, auditability.</p></div>
    <div class="card"><h3>EdTech</h3><p>LMS/LRS, proctoring, virtual labs, learning analytics, credentialing, content pipelines.</p></div>
    <div class="card"><h3>Industrial/IoT</h3><p>SCADA/MES integration, OPC UA, predictive maintenance, edge analytics, secure OTA.</p></div>
    <div class="card"><h3>Media/Commerce</h3><p>High‑scale streaming, DRM, personalization, multi‑vendor marketplaces, OMS/WMS/ERP links.</p></div>
  </div>
</section>

<!-- 9. Solution Packages -->
<section id="packages" class="section">
  <h2>Solution Packages (Client‑Friendly)</h2>
  <div class="grid">
    <div class="card"><h3>MVP in 90 Days</h3><p>Discovery → design system → build → pilot. Fixed scope, runway for traction &amp; funding.</p></div>
    <div class="card"><h3>Legacy Modernization</h3><p>Strangler‑fig approach: carve services, add tests, migrate data, cut over with zero downtime.</p></div>
    <div class="card"><h3>API Platform</h3><p>Gateway, auth, quotas, analytics, developer portal, monetization; internal &amp; external APIs.</p></div>
    <div class="card"><h3>Mobile Launchpad</h3><p>Flutter core, native bridges, CI for OTA, analytics, crash reporting, store ops &amp; growth.</p></div>
    <div class="card"><h3>Data Platform</h3><p>Ingest → model → metrics layer → BI; quality gates, lineage, and governance.</p></div>
    <div class="card"><h3>GenAI Copilots</h3><p>RAG, tool use, human‑in‑the‑loop, evals, observability, safety; on Azure/AWS/GCP.</p></div>
    <div class="card"><h3>ERP/CRM Integration</h3><p>SAP/Dynamics/Salesforce/Odoo — clean contracts, async patterns, robust reconciliation.</p></div>
    <div class="card"><h3>Commerce @ Scale</h3><p>Catalog, search, recommendations, payments, fraud control, OMS/WMS, omnichannel.</p></div>
  </div>
</section>

<!-- 10. Certifications & Pathways -->
<section id="pathways" class="section">
  <h2>Certification Pathways for the 1:50 Team</h2>
  <div class="grid">
    <div class="card"><h3>Architecture &amp; Cloud</h3><p>Azure Solutions Architect Expert • AWS Solutions Architect Professional • Google Cloud Professional Architect • TOGAF.</p></div>
    <div class="card"><h3>DevOps &amp; Platform</h3><p>Azure DevOps Engineer Expert • AWS DevOps Pro • CKA/CKAD • Terraform Associate • Kubernetes Security (CKS).</p></div>
    <div class="card"><h3>Security</h3><p>Security+ • CEH • CSSLP • CISSP • ISO 27001 Lead Implementer • OWASP/ASVS practices.</p></div>
    <div class="card"><h3>Frontend &amp; Mobile</h3><p>React/Angular/Flutter Professional tracks • Web performance &amp; accessibility badges.</p></div>
    <div class="card"><h3>Backend &amp; Data</h3><p>Spring/.NET/Node Pro • Database Admin (Postgres/SQL Server) • Power BI/Looker • Azure Data Engineer.</p></div>
    <div class="card"><h3>Management</h3><p>PMP • PRINCE2 • Scrum Master/PO • ITIL Managing Professional • Product Manager certs.</p></div>
  </div>
  <p class="muted">Mapped to revenue ladders and the Investor Education commission model (active + residual).</p>
</section>

<!-- 11. Engagement & Pricing -->
<section id="engagement" class="section">
  <h2>Engagement &amp; Pricing Models</h2>
  <div class="grid">
    <div class="card"><h3>Fixed‑Scope Projects</h3><p>Clear SOW, milestones, acceptance criteria, and change control — ideal for MVPs and well‑defined features.</p></div>
    <div class="card"><h3>Product Pods</h3><p>Dedicated cross‑functional squad with monthly velocity targets and roadmap governance.</p></div>
    <div class="card"><h3>Augmentation</h3><p>Certified engineers embedded with your team, backed by our platform/SRE and QA guilds.</p></div>
    <div class="card"><h3>Managed Products</h3><p>We own SLAs, SLOs, releases, uptime, and performance with transparent monthly reporting.</p></div>
  </div>
  <p class="muted">Leaders earn team‑building commission (44,321 USD) and scale to multi‑million USD service capacity via recurring delivery. Detailed finance pack available on request.</p>
</section>

<!-- 12. FAQs -->
<section id="faq" class="section">
  <h2>Frequently Asked Questions</h2>
  <details class="card"><summary><strong>How do you guarantee quality at scale?</strong></summary><p>Design systems, coding standards, guild reviews, CI policies, automated tests, staging gates, SLOs/SLIs, and production error budgets.</p></details>
  <details class="card"><summary><strong>How do you mitigate delivery risk?</strong></summary><p>Risk registers, feature flags, gradual rollouts, canary/blue‑green, rollback playbooks, chaos drills, and observability with actionable alerts.</p></details>
  <details class="card"><summary><strong>How does security stay first‑class?</strong></summary><p>Threat modeling at inception, secure defaults, policy‑as‑code, automated scans, SBOMs, periodic pentests, and compliance mapping.</p></details>
  <details class="card"><summary><strong>Can you work with our stack?</strong></summary><p>Yes — we integrate with your languages, clouds, pipelines, and compliance posture, or establish a modern platform where needed.</p></details>
</section>

<!-- Apply -->
<section id="apply" class="section">
  <h2>Apply to Lead a Software Engineering Team</h2>
  <p style="color:#6b7280;max-width:900px;margin:0 auto 30px;text-align:center;">
    Only <strong>100 Team Leaders</strong> are accepted per industry. Build a certified 50‑person delivery unit and deploy contracts globally.
  </p>
  <form method="post" action="send-mail.php" class="application-form">
    <div class="form-row">
      <div class="field"><label>Full Name</label><input name="name" required></div>
      <div class="field"><label>Email</label><input name="email" type="email" required></div>
    </div>
    <div class="form-row">
      <div class="field"><label>Phone</label><input name="phone" required></div>
      <div class="field"><label>Primary Stack</label><input name="stack" placeholder="e.g., React/Node, .NET, Java/Spring, Flutter, Go, Rust"></div>
    </div>
    <div class="field">
      <label>Why are you a fit to lead a 50‑person delivery unit?</label>
      <textarea name="message" rows="5" placeholder="Briefly describe your leadership, architecture, and delivery experience…"></textarea>
    </div>
    <input type="hidden" name="industry" value="Software &amp; Systems Engineering">
    <input type="hidden" name="source" value="Full Apply • Software Engineering">
    <button class="btn" type="submit">Submit Application</button>
  </form>
</section>

<?php include 'footer.php'; ?>