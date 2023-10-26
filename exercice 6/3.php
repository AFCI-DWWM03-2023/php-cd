<?php
// 
echo "exo 3" ."\n";

$tableau = [2, 4, 6, 8, 10];


$somme = 0;


foreach($tableau as $valeur) {
    $somme += $valeur;
}


echo "La somme des valeurs du tableau est : ".$somme;
