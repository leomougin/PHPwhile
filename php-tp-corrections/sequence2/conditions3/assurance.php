<?php

$age = readline("Saisir age : ");
$sexe = readline("Saisir le sexe ( 'M' ou 'F' : ");

// Conditions
$hommePlus25 = $age > 22 && $sexe == 'M';
$femmeEntre2Oet30 = $age >=20 && $age <=30 && $sexe == 'F';

if ( $hommePlus25 || $femmeEntre2Oet30) {
    echo "La surprime doit être appliquée !";
} else {
    echo "La surprime ne doit pas être appliquée !";
}