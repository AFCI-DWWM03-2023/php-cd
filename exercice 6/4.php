<?php
// 
echo "exo 4" ."\n";



$array1 =  [4, 8, 7, 9, 1, 5, 4, 6];                    
$array2 = [7, 6, 5, 2, 1, 3, 7, 4];


if (count($array1) != count($array2)) {
    echo "Les tableaux doivent avoir la même taille";
    exit();
}


$newArray = array();
for ($i = 0; $i < count($array1); $i++) {
    $newArray[$i] = $array1[$i] + $array2[$i];
}


print_r($newArray);



// $array1 = array (4, 8, 7, 9, 1, 5, 4, 6);                    
// $array2 = array (7, 6, 5, 2, 1, 3, 7, 4);

