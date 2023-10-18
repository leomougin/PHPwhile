<?php
$phrase=readline("Saisir une phrase : ");

$p=0;

$consonnes=0;
$voyelles=0;
$espace=0;
while($p<=strlen($phrase)){
    $char=substr($phrase,$p,1);
    if ($char=="a" || $char=="e" || $char=="i" ||  $char=="o" ||  $char=="u" ||  $phrase=="y" ){
        $voyelles++;
    }elseif(ctype_alpha($char)){
        $consonnes++;
    }elseif(ctype_space($char)){
        $espace++;
    }
    $p++;
}
echo"Dans notre phrase, il y a $voyelles voyelles, $consonnes consonnes et $espace espaces ! ";