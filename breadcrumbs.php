<?php
// Visible breadcrumb component
// Usage: define $breadcrumb_items = [ ['label' => 'Home', 'href' => 'index.php'], ... ];
// The last item should either omit 'href' or set it to null.
?>
<nav class="breadcrumbs container" aria-label="Breadcrumb">
  <ol>
    <?php if (isset($breadcrumb_items) && is_array($breadcrumb_items) && count($breadcrumb_items) > 0): ?>
      <?php foreach ($breadcrumb_items as $i => $item): ?>
        <?php $isLast = ($i === count($breadcrumb_items) - 1); ?>
        <li <?php if ($isLast) echo 'aria-current="page"'; ?>>
          <?php if (!$isLast && !empty($item['href'])): ?>
            <a href="<?= htmlspecialchars($item['href'], ENT_QUOTES) ?>"><?= htmlspecialchars($item['label']) ?></a>
          <?php else: ?>
            <span><?= htmlspecialchars($item['label']) ?></span>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    <?php endif; ?>
  </ol>
</nav>
