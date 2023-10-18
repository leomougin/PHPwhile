<?php
echo "\nBienvenue dans le jeu de devinette! 
Le but du jeu est de deviner un nombre entre 1 et 100. 
Vous avez 10 à 15 essais pour trouver le nombre.
Bonne chance !
\n1. Jouer
2. Voir les résultats
3. Voir les résultats d'un jour
4. Voir les résultats d'un joueur
5. Quitter\n";
$choix=readline("Votre choix (1,2,3,4 ou 5) : ");
$pseudo=readline("Veuillez saisir votre pseudo : ");
$nomDoc=('resultat.txt');
$nomDoc2=('resultat2.txt');
$nomDoc3=('resultat3.txt');
$ouvreDoc=fopen($nomDoc,'a');
$ouvreDoc2=fopen($nomDoc2,'a');
$ouvreDoc3=fopen($nomDoc3,'a');
$ajoutContenu1=date("j\/n\/Y\ H:m:s");
$ajoutContenu2=" - ".$pseudo." - ";


if ($choix==1) {

    $nbr=readline("Saisir un chiffre entre 1 et 100 : ");
    $devine=random_int(1, 100);
    $tentative=random_int(10, 15);
    $vie=0;
    $win=FALSE;

    while($nbr!=$devine){
        if($nbr<1 || $nbr>100) {
            echo " ERREUR ERREUR ERREUR ";
            echo PHP_EOL;
            $nbr = readline("Saisir un chiffre entre 1 et 100 : ");
        }
        if($nbr>$devine) {
            echo("Le chiffre à deviner est inférieur au chiffre que vous avez saisie");
            echo PHP_EOL;
        }elseif($nbr<$devine){
            echo("Le chiffre à deviner est supérieur au chiffre que vous avez saisie");
            echo PHP_EOL;
        }
        $vie++;
        if($vie>$tentative){
            echo("Désolé $pseudo : vous avez atteint le nombre maximum de tentatives $tentative ! Le nombre était $devine ! ");
            echo PHP_EOL;
            echo (" FIN DE PARTIE ");
            break;
        }
        $nbr = readline("Saisir un chiffre entre 1 et 100 : ");
        if($vie<=10 && $nbr==$devine ){
            echo(" Exellent $pseudo : vous avez trouvé le nombre $devine en $vie tentatives ! ");
            echo PHP_EOL;
            echo (" FIN DE PARTIE ");
            $win=TRUE;
            break;
        }elseif( $vie>10 && $nbr==$devine ) {
            echo("Bien joué $pseudo : vous avez  trouvé le nombre $devine en $vie tentatives ! ");
            echo PHP_EOL;
            echo (" FIN DE PARTIE ");
            $win=TRUE;
            break;
        }
    }
    if($win){
        $ajoutContenu3=" La partie a été gagné en $vie tentatives ! \n";
    }else{
        $ajoutContenu3=" La partie a été perdu ! \n";
    }
    fwrite($ouvreDoc,$ajoutContenu1);
    fwrite($ouvreDoc,$ajoutContenu2);
    fwrite($ouvreDoc,$ajoutContenu3);
    fclose($ouvreDoc);

}elseif($choix==2) {
    $ouvreDoc;
}elseif($choix==3) {
    $dateDemander=readline("Saisir une date à chercher dans la liste des résultats ( j/n/Y ) : ");
    $ouvreDoc2;
    fgets($nomDoc2);

}elseif($choix==4) {

}elseif($choix==5) {
    exit();
}







