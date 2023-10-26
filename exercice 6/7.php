<?php
// 
echo "exo 7" ."\n";

$prix = [5, 50, 23, 11];
$quantites = [10, 1, 4, 3];

$total = 0;
if(count($prix) == count($quantites)) {
    $nbProduits = count($prix);
    
    for($i = 0; $i < $nbProduits; $i++) {
        $total += $prix[$i] * $quantites[$i];
    }
    
    echo "Le prix total est de : " . $total;
} else {
    echo "Erreur : les tableaux ne sont pas de même longueur";
}
?>