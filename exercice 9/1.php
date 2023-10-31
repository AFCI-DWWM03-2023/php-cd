<?php
// 
echo "exo1" . "\n";
$tab = array(
    "Autriche" => 4.9,
    "Allemagne"  => 9.3,
    "Danemark"  => 4.8,
    "Espagne"  => 9.4,
    "France"  => 9.7
);
foreach ($tab as $pays => $chomage) {
    echo "le taux de chomage  en $pays est de $chomage " . "\n";
}
foreach ($tab as $pays => $chomage) {
    if ($chomage < 5)
        echo "le nombre de $pays yant moins de sont $chomage  " . "\n";
}
$positon = "pays";
$teste = 100;
foreach ($tab as $pays => $chomage) {
    if ($chomage <= $teste) {
        $teste = $chomage;
        $position = $pays;
    }
}
echo "le  $teste avec le plus bas est $position  " . "\n";
