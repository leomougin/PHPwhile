<?php
$nbPhotocopies =  readline("Veuillez entrer le nombre de photocopies réalisées: ");

$cout = 0.0;

if ($nbPhotocopies <= 10) {
    $cout = $nbPhotocopies * 0.30;
} else if ($nbPhotocopies <= 30) {
    $cout = (10 * 0.30) + (($nbPhotocopies - 10) * 0.25);
} else {
    $cout = (10 * 0.30) + (20 * 0.25) + (($nbPhotocopies - 30) * 0.20);
}

if ($cout > 50) {
    $cout *= 0.90; // Application d'une réduction de 10%
}

echo "Le montant à payer pour $nbPhotocopies photocopies est de: " . number_format($cout, 2,',') . "€\n";