<?php

$a = readline("Entrez le coefficient a: ");
$b = readline("Entrez le coefficient b: ");
$c = readline("Entrez le coefficient c: ");

// Validation des entrées
if (!is_numeric($a) || !is_numeric($b) || !is_numeric($c)) {
    echo "Veuillez entrer des nombres valides pour les coefficients.\n";
    exit(1);
}

$delta = $b * $b - 4 * $a * $c;

if ($delta < 0) {
    echo "Cette équation n'a pas de solution réelle.\n";
} elseif ($delta == 0) {
    $x = -$b / (2 * $a);
    echo "Cette équation a une solution réelle: x = $x\n";
} else {
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);
    echo "Cette équation a deux solutions réelles: x1 = $x1 et x2 = $x2\n";
}

