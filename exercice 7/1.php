<?php
// 
echo "exo 1" ."\n";

// $n = readline("entrez la taille du tableau ? ");
//  for ($i = 0; $i < $n; $i++) {
//  $tab[$i] = readline("Entrez la valeur numéro " .   " : ") ;
// }

// echo "Saisissez les valeurs une par une (saisie vide pour terminer) :";

// $tab = array();
// while (true) {
//     $input = readline("> ");
    
//     if ($input === "") {
//         break;
//     }
    
//     $tab[] = (int)$input;
// }
// $estVrai = true;
// while($estVrai){
// $estVrai = false;
// for($i =0;$i<=count($tab)-2;$i++){
// if($tab[$i]>$tab[$i+1]){
// $temp = $tab[$i];
// $tab[$i]=$tab[$i+1];
// $tab[$i+1] =$temp ;
// $estVrai = true;
// }   
// }
// }
// $isConsecutive = true;
// $length = count($tab);
// if ($length > 1) {
//     sort($tab);
//     for ($i = 0; $i < $length - 1; $i++) {
//         if ($tab[$i] + 1 !== $tab[$i+1]) {
//             $isConsecutive = false;
//             break;
//         }
//     }
// }
// if ($isConsecutive) {
//     echo "Les éléments du tableau sont tous consécutifs.";
// } else {
//     echo "Les éléments du tableau ne sont pas tous consécutifs.";
// }




$tableau = [];


while (true) {
    $valeur = readline("Saisir une valeur (ou 'q' pour terminer) : ");
    
 
    if ($valeur === 'q') {
        break;
    }
    

    $tab[] = intval($valeur);
}
 $estVrai = true;
 while($estVrai){
     $estVrai = false;
 for($i =0;$i<=count($tab)-2;$i++){
 if($tab[$i]>$tab[$i+1]){
 $temp = $tab[$i];
 $tab[$i]=$tab[$i+1];
 $tab[$i+1] =$temp ;
 $estVrai = true;
 }  

}

}
foreach($tab as $teste){
echo("$teste"."\n");
}
$isConsecutif = true;
$n = count($tableau);


for ($i = 0; $i < $n - 1; $i++) {
  
    if ($tableau[$i+1] - $tableau[$i] !== 1) {
        $isConsecutif = false;
        break;
    }
}


if ($isConsecutif) {
    echo "Les éléments du tableau sont tous consécutifs.";
} else {
    echo "Les éléments du tableau ne sont pas tous consécutifs.";
}


