<?php

$nbr=readline("Saisir un nombre entre 1 et 1000 : ");
while($nbr<1 || $nbr>1000){
    echo(" Le nombre saisie n'est pas compris entre 1 et 1000 ! ");
    $nbr=readline("Saisir un nombre entre 1 et 1000 : ");
}
$nbrordi=0;
$coup=1;
while($nbr!=$nbrordi){
    $nbrordi=random_int(0,1000);
    if($coup==200){
        echo("Le nombre n'a pas été trouvé en moins de 200 tentatives ! ");
        break;
    }
    $coup++;
}
if($coup<200){
    echo("Le nombre a  été trouvé en $coup tentatives ! ");
}


