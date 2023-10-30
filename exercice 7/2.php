<?php
// 
echo "exo 2" ."\n";

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
    if($tab[$i]<$tab[$i+1]){
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