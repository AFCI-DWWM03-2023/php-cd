<?php
// 
echo "exo1" . "\n";



function calculerRayon($diametre) {
    $rayon =   $diametre = readline("entrez un nombre");
    return $rayon;
  }
  
  
  $diametre = 10;  
  $rayon = calculerRayon($diametre);
  
  echo "Le rayon du cercle est : " . $rayon. "\n"   ;
 
$rayon2 = 5; 

$circonf = 2 * pi() * $rayon2;
$surface = pi() * pow($rayon2, 2);

echo "La circonférence du cercle est : " . $circonf."\n" ;
echo "La surface du cercle est : " . $surface. "\n" ;




function demanderRefaireCalcul() {
    $choix = "";

    while ($choix != 'o' && $choix != 'n') {
        echo "Voulez-vous refaire un calcul ? (o/n) ";
        $choix = strtolower(readline());

        if ($choix != 'o' && $choix != 'n') {
            echo "Choix invalide. Veuillez entrer 'o' pour Oui ou 'n' pour Non.\n";
        }
    }

    return $choix == 'o';
}


if (demanderRefaireCalcul()) {
    echo "Calcul en cours...\n";
    
    
    
} 


    function calculeranouveauleRayon($diametre) {
        $rayon =   $diametre = readline("entrez un nombre");
        return $rayon;
      }
      
      
      $diametre = 15;  
      $rayon = calculeranouveauleRayon($diametre);
      
      echo "Le rayon du cercle est : " . $rayon. "\n"   ;
     
    $rayon2 = 5; 
    
    $circonf = 5 * pi() * $rayon;
    $surface = pi() * pow($rayon, 5);
    
    echo "La circonférence est de : " . $circonf."\n" ;
    echo "La surface est du  : " . $surface. "\n" ;
   
    {
    
}

function demanderARefaireCalcul() {
    $choix = "";

    while ($choix != 'o' && $choix != 'n') {
        echo "Voulez-vous refaire un calcul ? (o/n) ";
        $choix = strtolower(readline());

        if ($choix != 'o' && $choix != 'n') {
            echo "Choix invalide. Veuillez entrer 'o' pour Oui ou 'n' pour Non.\n";
        }
    }

    return $choix == 'o';
}


if (demanderRefaireCalcul()) {
    



  
}

echo "au revoir a bientot.\n";