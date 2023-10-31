<?php
// 
echo "exo2" . "\n";

$tab = array(
    "boucher" => 16,
    "bourdette"  => 13,
    "boulanger"  => 9,
    "charcutier" => 18,
    "char" => 11,
    "voiture" => 15
);


foreach ($tab as $prenom => $note) {
    echo "le $prenom a une note de  $note " . "\n";
}
$stock = 0;
foreach ($tab as $prenom => $note) {
    $stock = $note + $stock;
}
echo $stock / count($tab) . "\n";
