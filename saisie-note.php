<?php

$note=readline(" Saisir une note : ");
while($note>20 || $note<0){
    echo("La saisie de vote note est incorrect, elle doit être comprise entre 0 et 20 ! ");
    echo PHP_EOL;
    $note=readline(" Saisir une note : ");
}
echo(" Votre note est de correcte   ");
