<?php
$page_title = "Automotive Industry — Investor Education Program";
$meta_description = "Lead in EV technology, CAD/CAM, and automotive manufacturing. Limited to 100 leaders per industry.";
$og_title = $page_title;
$og_description = $meta_description;
$og_image = "https://og-image.vercel.app/Automotive%20Industry.png?theme=light&md=1&fontSize=80px";
$og_url = "https://invest.btheducationgroup.com/automotive-industry.php";
?>
<?php include 'header.php'; ?>

<?php 
$breadcrumb_items = [
  ['label' => 'Home', 'href' => 'index.php'],
  ['label' => 'Industries', 'href' => 'index.php#industries'],
  ['label' => 'Automotive Industry']
];
include 'breadcrumbs.php';
?>


<section class="section">
  <h1>🚘 Automotive Industry</h1>
  <p>Lead in EV technology, CAD/CAM, and automotive manufacturing for the future of mobility.</p>
  <h2>Certifications</h2>
  <ul>
    <li>Automotive Service Excellence (ASE) (Beginner)</li>
    <li>EV Technician Certification</li>
    <li>CAD/CAM Specialist</li>
    <li>Lean Manufacturing</li>
    <li>Automotive Engineering (Expert)</li>
  </ul>
  <h2>Solutions by Industry</h2>
  <ul>
    <li>EV maintenance & repair</li>
    <li>CAD/CAM design services</li>
    <li>Manufacturing process optimization</li>
    <li>Fleet management solutions</li>
  </ul>
  <h2>Use Cases</h2>
  <ul>
    <li>Designing electric vehicle components</li>
    <li>Optimizing assembly lines</li>
    <li>Fleet diagnostics for logistics companies</li>
  </ul>
  <h2>Organizations</h2>
  <ul>
    <li>Automotive manufacturers</li>
    <li>EV startups</li>
    <li>Auto repair shops</li>
  </ul>
  <a class="btn" href="index.php#apply">Apply as Automotive Leader</a>
</section>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Automotive Industry",
  "description": "EV technology, CAD/CAM, and automotive manufacturing services delivered by 1:50 leadership teams.",
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
    {"@type": "ListItem", "position": 3, "name": "Automotive Industry", "item": "<?php echo htmlspecialchars($og_url, ENT_QUOTES); ?>"}
  ]
}
</script>

<?php include 'footer.php'; ?>
