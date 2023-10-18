<?php

// compter jusqu'à 8

echo 1 . ' ';
echo 2 . ' ';
echo 3 . ' ';
echo 4 . ' ';
echo 5 . ' ';
echo 6 . ' ';
echo 7 . ' ';
echo 8 . ' ';
echo PHP_EOL;

// Compter de 1 à 8 avec une boucle while

$nbr=1;
while ($nbr<=8){
    echo $nbr. ' ';
    $nbr++;
    // OU $nbr + = 1 ; OU $nbr = $nbr + 1 ;
}

// on sort de la boucle

echo PHP_EOL;
echo " Le comptage est terminé !";

