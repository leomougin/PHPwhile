<?php

// Définitions des couleurs
$fondRouge = "\033[41m";
$normal = "\033[0m";

$prixArticle = readline("Saisir le prix de l'article : ");

if ($prixArticle < 1000) {
    $remise = 0.05;
} elseif ($prixArticle < 5000) {
    $remise = 0.1;
} else {
    $remise = 0.2;
}
$prixArticleRemise = number_format($prixArticle*(1-$remise),2,","," ");
$montantRemise = number_format($prixArticle*$remise,2,","," ");
echo "La remise est de ".($remise*100)." % soit " .$fondRouge.$montantRemise.$normal." euros sur le prix de l'article";
echo PHP_EOL;
echo "Le montant de l'article après remise est de " . $fondRouge.$prixArticleRemise.$normal." euros";