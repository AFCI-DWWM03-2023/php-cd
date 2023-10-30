<?php
// 
echo "exo 3" ."\n";

$tableau = [];


while (true) {
    $valeur = readline("Saisir une valeur (ou 'q' pour terminer) : ");
   
 
    if ($valeur === 'q') {
        break;
    }
    

    $tab[] = intval($valeur);
}