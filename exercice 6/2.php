<?php
// 
echo "exo 2" ."\n";
$n = readline("Entrez le nombre de valeurs à saisir");
$tableau = [];
for ($i = 0; $i < $n; $i++) {
    $tableau[$i] = readline("Entrez la valeur numéro " .   " : ") ;
}
$nbNegatives = 0;
$nbPositives = 0;
foreach ($tableau as $key=> $valeur) {
    if ($valeur < 0) {
        $nbNegatives++;
    } elseif ($valeur > 0) {
        $nbPositives++;
    }
}
echo "Nombre de valeurs négatives : " . $nbNegatives . "\n";
echo "Nombre de valeurs positives : " . $nbPositives . "\n";
