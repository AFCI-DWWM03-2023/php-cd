<?php
// 
echo "exo1" ."\n";
$plusGrandeValeur = 0;

$tab=[
[8,5,44,8,9,4,6,3,2,1,7,6],
[8,5,5,8,9,4,6,3,2,1,7,66],
[8,5,5,8,99,4,6,3,2,1,7,6],
[8,55,5,8,9,4,6,3,2,1,7,6],
[8,5,5,8,9,4,6,3,2,1,7,6],
[88,5,5,12,9,4,6,3,37,1,7,6],
[8,5,5,8,9,4,6,3,2,1,7,6],
[8,5,5,82,9,4,6,3,2,1,7,600]
];
for ($j = 0; $j < 12; $j++){
    for ($i = 0; $i < 8; $i++) {
        if ($tab[$i][$j] > $plusGrandeValeur) {
        $plusGrandeValeur = $tab[$i][$j];
        

        }
    }
}
echo("plus grande valeur ".$plusGrandeValeur);

