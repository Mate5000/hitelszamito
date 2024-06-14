<?php


header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

$ktart = $data['ktart'];
$ekamat = $data['ekamat'];
$torl = $data['torl'];

$havikamat = ($ekamat / 100) / 12;
$havifizetendo = $ktart * $havikamat / (1 - pow(1 + $havikamat, -$torl));
$osszfizetendo = $havifizetendo * $torl;
$osszkamat = $osszfizetendo - $ktart;

$adatok = [];
$egyenleg = $ktart;
$eddigfiz = 0;

for ($i = 0; $i < $torl; $i++) {
    $interest = $egyenleg * $havikamat;
    $pcfizet = $havifizetendo - $interest;
    $egyenleg -= $pcfizet;
    $eddigfiz += $havifizetendo;
    $adatok[] = [
        'honap' => $i + 1,
        'hatralevo' => round($egyenleg, 2),
        'havi' => round($havifizetendo, 2),
        'eddigfiz' => round($eddigfiz, 2)
    ];
}

echo json_encode([
    'havifizetendo' => round($havifizetendo, 2),
    'osszfizetendo' => round($osszfizetendo, 2),
    'osszkamat' => round($osszkamat, 2),
    'adatok' => $adatok
]);
?>
