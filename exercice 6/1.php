<?php
// 
echo "exo 1" ."\n";
$notes = array();


for ($i = 0; $i < 9; $i++) {
    $note = readline("Saisir une note : ");
   
    $notes[] = $note;
}


$sum = array_sum($notes);


$average = $sum / count($notes);


echo "La moyenne des notes est : " . $average;
