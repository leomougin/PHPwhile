<?php

$mdp=readline("Saisir un mot de passe");
$i=0;
$taille= FALSE;
$num= FALSE;
$maj= FALSE;

while($i<=(strlen($mdp)-1)){
    $char=substr($mdp,i,1);
    if(ctype_digit($char)){
        $num= TRUE ;
    }elseif(ctype_upper($char)){
        $maj= TRUE;
    }elseif(ctype_lower($char)){
        $min= TRUE;
    }
}

    if(strlen($mdp)>=8 && $num && $maj){}
