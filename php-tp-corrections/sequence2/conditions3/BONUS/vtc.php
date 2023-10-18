<?php
$depart = readline( "Saisir l'adresse du point de départ: ");
$arrivee = readline( "Saisir l'adresse du point d'arrivée: ");

if (!str_contains(strtolower($depart), 'paris') && !str_contains(strtolower($arrivee), 'paris')) {
    echo "Erreur: Les trajets hors de Paris ne sont pas proposés par notre service.\n";
    exit;
}
$solde = readline( "Saisir le solde en euros: ");
$avoir = readline( "Saisir le montant de votre avoir (0 à 10€): ");
$prixTrajet = 0;

// Extraction du nom de la ville
$villeDepart = ucfirst(trim(substr($depart,  strrpos($depart, ' '))));
$villeArrivee = ucfirst(trim(substr($arrivee,  strrpos($arrivee, ' '))));
echo PHP_EOL;
echo "Trajet de $villeDepart à $villeArrivee\n";

if (str_contains(strtolower($depart), 'paris') && str_contains(strtolower($arrivee), 'paris')) {
    $prixTrajet = 30;
    $nouvelAvoir = $avoir;
} elseif (str_contains(strtolower($depart), 'paris')) {
    $prixTrajet = 50 - $avoir;
    $nouvelAvoir = 0;
} else {
    $prixTrajet = 40 - $avoir/2;
    $nouvelAvoir = $avoir / 2;
}

if ($prixTrajet > $solde) {
    echo "Erreur: Vous n'avez pas assez d'argent pour effectuer ce trajet.\n";
} else {
    $solde = $solde - $prixTrajet;
    $avoir = $nouvelAvoir;
    echo "Le montant du trajet est: " . number_format($prixTrajet, 2) . "€\n";
    echo "Votre nouveau solde est: " . number_format($solde, 2) . "€\n";
    echo "Votre nouvel avoir est: " . number_format($avoir, 2) . "€\n";
}