<?php
// 
echo "exo 5" ."\n";
echo "Entrez le nombre de valeurs à saisir : ";
$n = intval  (readline());
$tableau = [];
for ($i = 0; $i < $n; $i++) {
    echo "Entrez la valeur n°" . ($i + 1) . " : ";
    $valeur = (readline());
    $tableau[] = $valeur;
}
$plusGrandeValeur = $tableau[0];
$position = 0;
for ($i = 1; $i < $n; $i++) {
    if ($tableau[$i] > $plusGrandeValeur) {
        $plusGrandeValeur = $tableau[$i];
        $position = $i;
    }
}
echo "La plus grande valeur est " . $plusGrandeValeur . " et elle se trouve à la position " . ($position + 1) . " dans le tableau.";
