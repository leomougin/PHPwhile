<?php

/*

$chiffre=readline("Saisir un nombre : ");

$nbr=0;
while($nbr<=$chiffre){
    if(($nbr%2)==0){
        echo"$nbr ";
    }
    $nbr++;
}*/

$nbrsomme = 0;
$chiffre=readline("Saisir un nombre : ");
$nbr=0;
while($nbr<=$chiffre){
    if(($nbr%2)==0){
        echo" $nbr";
        $nbrsomme+=$nbr;
    }
    $nbr++;
}
echo PHP_EOL;
echo " $nbrsomme";