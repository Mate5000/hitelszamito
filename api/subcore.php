<?php


header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

$havit2 = $data['havit2'];
$ekamat2 = $data['ekamat2'];
$torl2 = $data['torl2'];

// Convert annual rate to monthly rate
$havikamat = ($ekamat2 / 100) / 12;
// Calculate the maximum loan amount
$maxhitel = $havit2 * (1 - pow(1 + $havikamat, -$torl2)) / $havikamat;

$adatok2 = [];
$egyenleg = $maxhitel;
$osszfiz = 0;

for ($i = 0; $i < $torl2; $i++) {
    $startegyenleg = $egyenleg;
    $int = $egyenleg * $havikamat;
    $PP = $havit2 - $int;
    $egyenleg -= $PP;
    $osszfiz += $havit2;
    $adatok2[] = [
        'honap' => $i + 1,
        'startegyenleg' => round($startegyenleg, 2),
        'maradek' => round($egyenleg, 2),
        'havit2' => round($havit2, 2),
        'osszfiz' => round($osszfiz, 2)
    ];
}

echo json_encode([
    'maxhitel' => round($maxhitel, 2),
    'adatok2' => $adatok2
]);
?>
