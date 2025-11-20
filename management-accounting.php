<?php
$page_title = "Management Accounting & Financial Technology — Investor Education Program";
$meta_description = "Lead in budgeting, cost control, financial strategy, and fintech systems. Limited to 100 leaders per industry.";
$og_title = $page_title;
$og_description = $meta_description;
$og_image = "https://og-image.vercel.app/Management%20Accounting.png?theme=light&md=1&fontSize=80px";
$og_url = "https://invest.btheducationgroup.com/management-accounting.php";
?>
<?php include 'header.php'; ?>

<?php 
$breadcrumb_items = [
  ['label' => 'Home', 'href' => 'index.php'],
  ['label' => 'Industries', 'href' => 'index.php#industries'],
  ['label' => 'Management Accounting & Financial Technology']
];
include 'breadcrumbs.php';
?>


<section class="section">
  <h1>🧾 Management Accounting &amp; Financial Technology</h1>
  <p>Lead in budgeting, cost control, and financial strategy with global accounting certifications.</p>
  <h2>Certifications</h2>
  <ul>
    <li>CIMA Certificate in Business Accounting (Beginner)</li>
    <li>CMA (Certified Management Accountant)</li>
    <li>ACCA (Association of Chartered Certified Accountants)</li>
    <li>IFRS Certification</li>
    <li>Chartered Accountant (Expert)</li>
  </ul>
  <h2>Solutions by Industry</h2>
  <ul>
    <li>Budgeting & forecasting</li>
    <li>Cost control systems</li>
    <li>Financial reporting</li>
    <li>Internal audit & compliance</li>
  </ul>
  <h2>Use Cases</h2>
  <ul>
    <li>Implementing cost-saving measures</li>
    <li>Preparing financial statements</li>
    <li>Ensuring regulatory compliance</li>
  </ul>
  <h2>Organizations</h2>
  <ul>
    <li>Accounting firms</li>
    <li>Corporate finance departments</li>
    <li>Consultancies</li>
  </ul>
  <a class="btn" href="index.php#apply">Apply as Accounting Leader</a>
</section>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Management Accounting & Financial Technology",
  "description": "Budgeting, cost control, financial reporting, audits and fintech systems delivered by certified leaders.",
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
    {"@type": "ListItem", "position": 3, "name": "Management Accounting & Financial Technology", "item": "<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>"}
  ]
}
</script>

<?php include 'footer.php'; ?>
