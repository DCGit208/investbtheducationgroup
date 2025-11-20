<?php
// Simple verification script for data/industry-proof.json
// Usage: php tools/verify_industry_proof.php [--update]
// Performs a HEAD/GET request to each URL and prints status; if --update provided and status is 200, updates last_verified to today.

$root = dirname(__DIR__);
$jsonPath = $root . '/data/industry-proof.json';
if (!is_readable($jsonPath)) {
    fwrite(STDERR, "ERROR: Cannot read data file at $jsonPath\n");
    exit(1);
}
$raw = file_get_contents($jsonPath);
$data = json_decode($raw, true);
if (!is_array($data)) {
    fwrite(STDERR, "ERROR: JSON decode failed.\n");
    exit(1);
}
$doUpdate = in_array('--update', $argv, true);
$today = date('Y-m-d');

function checkUrl($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 12);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'IndustryProofVerifier/1.0');
    curl_exec($ch);
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $final = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
    curl_close($ch);
    // Fallback GET if HEAD not allowed
    if ($status === 405 || $status === 403 || $status === 0) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 15);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_USERAGENT, 'IndustryProofVerifier/1.0');
        curl_exec($ch);
        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $final = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
        curl_close($ch);
    }
    return [$status, $final];
}

$report = [];
foreach ($data as $idx => &$item) {
    $url = $item['url'] ?? '';
    if (!$url) {
        $report[] = [ 'id' => $item['id'] ?? ('index-'.$idx), 'status' => 'MISSING_URL' ];
        continue;
    }
    list($status, $final) = checkUrl($url);
    $ok = ($status >= 200 && $status < 400);
    if ($ok && $doUpdate) {
        $item['last_verified'] = $today; // update verification date
    }
    $report[] = [
        'id' => $item['id'] ?? ('index-'.$idx),
        'status_code' => $status,
        'ok' => $ok,
        'url' => $url,
        'effective_url' => $final,
        'last_verified' => $item['last_verified'] ?? null
    ];
}
unset($item);

if ($doUpdate) {
    $encoded = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    if ($encoded) {
        file_put_contents($jsonPath, $encoded); // overwrite
        echo "Updated last_verified dates for reachable entries to $today\n";
    }
}

echo "Verification Report:" . PHP_EOL;
foreach ($report as $row) {
    echo sprintf("- %-30s %s (code=%s) verified=%s\n",
        $row['id'],
        $row['ok'] ? 'OK' : 'FAIL',
        $row['status_code'] ?? 'NA',
        $row['last_verified'] ?? 'n/a'
    );
}

// Summary
$total = count($report);
$fail = count(array_filter($report, fn($r)=>!($r['ok'] ?? false)));
$okCount = $total - $fail;
echo PHP_EOL . "Summary: $okCount OK / $total total (" . ($fail) . " failures)" . PHP_EOL;
if ($fail > 0) {
    echo "Failures should be reviewed; consider replacing or correcting URLs." . PHP_EOL;
}

?>
