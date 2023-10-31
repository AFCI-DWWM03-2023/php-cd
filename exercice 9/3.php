<?php
// 
echo "exo2" . "\n";

$tab = array(
    "prenot" => 2, 10, 14,
    "perthuis"  => 10, 18, 12,
    "boulanger"  => 9, 10, 7,
    "charcutier" => 18, 5, 6,
    "char" => 11, 18, 19,
    "voiture" => 15, 20, 17,
);
foreach ($tab as $prenom => $note) {
    foreach ($tab as $note => $teste)
        echo "le $prenom a une note de  $teste " . "\n";
}
