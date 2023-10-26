<?php
// 
echo "exo 6" ."\n";


$notes = [];
$count = (int)readline("Combien de notes souhaitez-vous saisir ? ");

for ($i = 1; $i <= $count; $i++) {
    $note = (float)readline("Saisissez la note n°" . $i . " : ");
    $notes[] = $note;
}

$sum = array_sum($notes);
$average = $sum / $count;


$aboveAverageCount = 0;

foreach ($notes as $note) {
    if ($note > $average) {
        $aboveAverageCount++;
    }
}


echo "La moyenne de la classe est : " . $average . "\n";
echo "Il y a " . $aboveAverageCount . " note(s) supérieure(s) à la moyenne.\n";
