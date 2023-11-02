<?php
// 
echo "exo2" . "\n";

$aleatoire = readline("entrez un nombre"); 

     Echo "entrer le nombre pour lequel vous voulez la table de multiplication ".$i."\n";
    for ($i = 1; $i <= 10; $i++)
    {
        echo $i." x ".$aleatoire." = ".$i*$aleatoire."\n";
    }
    function demanderRefaireCalcul() {
        $choix = "";
    
        while ($choix != 'o' && $choix != 'n') {
            echo "Voulez-vous continuer ? (o/n) ";
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


    $aleatoire = readline("entrez un nombre"); 

     Echo "entrer le nombre pour lequel vous voulez la table de multiplication ".$i."\n";
    for ($i = 1; $i <= 10; $i++)
    {
        echo $i." x ".$aleatoire." = ".$i*$aleatoire."\n";
    }

    function demanderARefaireCalcul() {
        $choix = "";
    
        while ($choix != 'o' && $choix != 'n') {
            echo "Voulez-vous continuer ? (o/n) ";
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

   
  
