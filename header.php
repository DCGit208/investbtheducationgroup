<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <title><?php echo isset($page_title) ? $page_title : "Investor Education Program — Build Teams • Earn • Lead"; ?></title>
   <meta name="description" content="<?php echo isset($meta_description) ? $meta_description : "Join the Investor Education Program — build teams, earn commissions, lead industries. Limited to 100 leaders per sector. Apply now."; ?>" />

   <?php
   // Detect if we're on the index page
   $is_index = basename($_SERVER['PHP_SELF']) === 'index.php';
   $default_og_image = $is_index 
       ? 'https://invest.btheducationgroup.com/image/logo-og.png'
       : 'https://og-image.vercel.app/Investor%20Education%20Program.png?theme=light&md=1&fontSize=80px';
   ?>

   <!-- Open Graph / Facebook -->
   <meta property="og:type" content="website" />
   <meta property="og:title" content="<?php echo isset($og_title) ? $og_title : (isset($page_title) ? $page_title : "Investor Education Program"); ?>" />
   <meta property="og:description" content="<?php echo isset($og_description) ? $og_description : (isset($meta_description) ? $meta_description : "Join the Investor Education Program."); ?>" />
   <meta property="og:image" content="<?php echo isset($og_image) ? $og_image : $default_og_image; ?>" />
   <meta property="og:url" content="<?php echo (isset($og_url) ? $og_url : 'https://invest.btheducationgroup.com'); ?>" />

   <!-- Twitter -->
   <meta name="twitter:card" content="summary_large_image" />
   <meta name="twitter:title" content="<?php echo isset($og_title) ? $og_title : (isset($page_title) ? $page_title : "Investor Education Program"); ?>" />
   <meta name="twitter:description" content="<?php echo isset($og_description) ? $og_description : (isset($meta_description) ? $meta_description : "Join the Investor Education Program."); ?>" />
   <meta name="twitter:image" content="<?php echo isset($og_image) ? $og_image : $default_og_image; ?>" />
<?php
    // Helper to append file mtime as version for cache-busting.
    // Handles relative and root-relative paths; leaves absolute URLs unchanged.
    function iep_versioned_href($href) {
        if (preg_match('#^https?://|^//#', $href)) {
            return $href; // leave external URLs as-is
        }
        $parsed = parse_url($href);
        $path = isset($parsed['path']) ? $parsed['path'] : $href;

        // Compute filesystem path candidates
        $baseDir = __DIR__;
        $candidates = [];
        if ($path !== '' && $path[0] === '/') {
            $candidates[] = $baseDir . $path;
        } else {
            $candidates[] = $baseDir . '/' . $path;
        }
        $fsPath = null;
        foreach ($candidates as $c) {
            if (file_exists($c)) { $fsPath = $c; break; }
        }
        if (!$fsPath) {
            // If not found on disk, return original href unmodified
            return $path . (isset($parsed['query']) && $parsed['query'] !== '' ? ('?' . $parsed['query']) : '') . (isset($parsed['fragment']) ? ('#' . $parsed['fragment']) : '');
        }
        $ver = @filemtime($fsPath);
        // Merge existing query, removing any existing v
        $query = [];
        if (isset($parsed['query']) && $parsed['query'] !== '') {
            parse_str($parsed['query'], $query);
            unset($query['v']);
        }
        if ($ver) { $query['v'] = $ver; }
        $qs = http_build_query($query);
        $out = $path . ($qs ? ('?' . $qs) : '');
        if (isset($parsed['fragment'])) { $out .= '#' . $parsed['fragment']; }
        return $out;
    }
?>

    <link rel="stylesheet" href="<?php echo htmlspecialchars(iep_versioned_href('styles.css'), ENT_QUOTES, 'UTF-8'); ?>">
    <link rel="stylesheet" href="<?php echo htmlspecialchars(iep_versioned_href('main.css'), ENT_QUOTES, 'UTF-8'); ?>">
    <?php if (isset($page_styles) && is_array($page_styles)) { foreach ($page_styles as $href) { echo '<link rel="stylesheet" href="'.htmlspecialchars(iep_versioned_href($href), ENT_QUOTES, 'UTF-8').'">'; } } ?>
    <style>html{scroll-behavior:smooth;} #nav .grid a[aria-current="true"]{outline:2px solid #0b4f7a; outline-offset:2px; background:#e6f0fb;} .grid a.card:focus{outline:2px solid #0b4f7a; outline-offset:2px;} </style>
<?php
     // Simple environment flag based on host
     $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';
     $is_prod = (stripos($host, 'invest.btheducationgroup.com') !== false);
?>
     <script>
         // Expose environment and default tracking behavior
         (function(){
             var env = {
                 host: <?php echo json_encode($host); ?>,
                 isProd: <?php echo $is_prod ? 'true' : 'false'; ?>
             };
             window.__env = env;
             // Disable tracking by default outside prod; can be overridden via ?tracking=on
             if (!env.isProd) {
                 try { localStorage.setItem('tracking_off','1'); } catch (e) {}
                 window.__trackingDisabled__ = true;
             }
         })();
     </script>
</head>
<body>
<div class="container" role="main">