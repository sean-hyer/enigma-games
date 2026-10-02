<?php
header('Content-Type: application/json');
header('Cache-Control: no-store');

// Load the full list (keep this file outside the web root if possible)
$all = json_decode(file_get_contents(__DIR__ . '/synchrotron_all.json'), true);
if (!$all) {
    http_response_code(500);
    echo json_encode(['error' => 'Puzzle data missing']);
    exit;
}

// Server-side day calculation (UTC)
$base = new DateTime('2026-08-15', new DateTimeZone('UTC'));
$today = new DateTime('now', new DateTimeZone('UTC'));
$today->setTime(0, 0, 0);

$index0 = (int)$start->diff($today)->days;   // Aug 15 → 0
$max0   = count($puzzles) - 1;               // 41 if 42 puzzles
$index0 = min($index0, $max0);

$p = isset($_GET['p']) ? (int)$_GET['p'] : ($index0 + 1);
$index0Req = $p - 1;

if ($index0Req < 0 || $index0Req > $index0) {
    http_response_code(403);
    echo json_encode(["error" => "Puzzle not yet available", "max" => $max0 + 1]);
    exit;
}
echo json_encode($puzzles[$index0Req]);
