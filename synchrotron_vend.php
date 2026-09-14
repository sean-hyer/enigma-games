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

$diff = (int)$base->diff($today)->format('%r%a'); // negative before base date
$maxPuzzleNumber = 1 + max(0, $diff);            // Day 1 on/before 15 Aug 2026

// Which puzzle did the client ask for?
$requested = isset($_GET['p']) ? (int)$_GET['p'] : $maxPuzzleNumber;

if ($requested < 1 || $requested > $maxPuzzleNumber || $requested > count($all)) {
    http_response_code(403);
    echo json_encode([
        'error' => 'Puzzle not yet available',
        'max'   => $maxPuzzleNumber
    ]);
    exit;
}

// Return only the allowed puzzle
echo json_encode($all[$requested - 1]);
