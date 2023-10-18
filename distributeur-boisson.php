<?php

echo" Bonjour, ";
echo PHP_EOL;
echo " Voici les boissons que nous proposons !";
echo PHP_EOL;
echo " De l'eau: 1,2€ ( 1 ) ";
echo PHP_EOL;
echo " Un soda : 3€ ( 2 ) ";
echo PHP_EOL;
echo" Un café: 2€ ( 3 ) ";
echo PHP_EOL;

$choix=readline("Quelle boisson voulez-vous ? ");
$paiement=FALSE;
$argent=0;
$prix=0;
$essai=0;

while($choix!= 1 && $choix!=2 && $choix!=3 ){
    echo "ERREUR ERREUR ERREUR";
    echo PHP_EOL;
    echo " Veuillez choisir une boisson valide ( 1 , 2 ou 3 ) !";
    $choix=readline("Quelle boisson voulez-vous ? ");
}

if ($choix == 1) $prix=1.2;
elseif ($choix == 2) $prix=3;
elseif ($choix == 3) $prix=2;

echo" Nous allons effectué le paiement, insérer le montant nécessaire ! ";
echo PHP_EOL;

while ($paiement==FALSE){
    $prix -= $argent;
    $argent = readline("Veuillez insérer l'argent restant à votre achat, argent restant : $prix ");
    $rendu = $prix - $argent;
    if ($rendu < 0) {
        $rendu *= -1;
        echo " Voici votre monnaie : $rendu !";
        echo PHP_EOL;
        $rendu = 0;
    }
    if ($rendu == 0) {
        $paiement = TRUE;
        echo " Voici votre boisson, merci pour votre achat !";
    }
}










// PROGRAMME MARCHE QUASI ENTIEREMENT, ATTENTION DANS la première partie quand on doit repayer pour la boisson 1, et
// qu'on doit repayer encore moins de 1€ genre 0,2€ ça affiche un reste alors qui le faut pas et un chiffre bizarre
//dans la dernière partie ca amrche pas car je crois une variable est passé en string alors qu'elle est définie en INT

/*
while ($paiement==FALSE){
    if($choix==1){
        $prix1-=$argent;
        $argent=readline("Veuillez insérer l'argent restant à votre achat, argent restant : $prix1 ");
        $rendu=$prix1-$argent;
        if($rendu<0) {
            $rendu *= -1;
            echo " Voici votre monnaie : $rendu !";
            echo PHP_EOL;
            $rendu = 0;
            if ($rendu == 0) {
                $paiement = TRUE;
                echo " Voici votre boisson, merci pour votre achat !";

            }
        }
    }elseif($choix==2){
        $prix2-=$argent;
        $argent=readline("Veuillez insérer l'argent restant à votre achat, argent restant : $prix2 ");
        $rendu=$prix2-$argent;
        if($rendu<0) {
            $rendu *= -1;
            echo " Voici votre monnaie : $rendu !";
            echo PHP_EOL;
            $rendu = 0;
        }if($rendu==0){
            $paiement=TRUE;
            echo " Voici votre boisson, merci pour votre achat !";
    }elseif($choix==3){
            $prix3-=$argent;
            $argent=readline("Veuillez insérer l'argent restant à votre achat, argent restant : $prix3 ");
            $rendu=$prix3-$argent;
            if($rendu<0) {
                $rendu *= -1;
                echo " Voici votre monnaie : $rendu !";
                echo PHP_EOL;
                $rendu = 0;
            }if($rendu==0){
                $paiement=TRUE;
                echo " Voici votre boisson, merci pour votre achat !";
            }
        }
    }
}
*/