<?php

$phrase=readline(" Saisir une phrase : ");
$q=0;
$reverse="";
$d=strlen($phrase);

while($q<=strlen($phrase)) {
    $char = substr($phrase, ($d), 1);
    $reverse = $reverse. $char;
    $q++;
    $d--;
}

echo($reverse);