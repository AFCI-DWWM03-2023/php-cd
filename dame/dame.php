<?php

function creerPlateau(){
    $plateau = array();
    for($i = 0; $i < 10; $i++) {
        for($j = 0; $j < 10; $j++) {
            if(($i + $j) % 2 != 0) {
                if($i < 4) {
                    $plateau[$i][$j] = 'N'; // Pion noir
                }
                elseif($i > 5) {
                    $plateau[$i][$j] = 'B'; // Pion blanc
                } else {
                    $plateau[$i][$j] = '-'; // Case vide
                }
            } else {
                $plateau[$i][$j] = '-'; // Case vide
            }
        }
    }
    return $plateau;
}

function afficherPlateau($plateau){
    echo "<table>";
    for($i = 0; $i < 10; $i++) {
        echo "<tr>";
        for($j = 0; $j < 10; $j++) {
            echo "<td>".$plateau[$i][$j]."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

function deplacementPossible($plateau, $departX, $departY, $arriveeX, $arriveeY, $pion){
    // Vérifie si le déplacement est valide
    if($arriveeX < 0 || $arriveeX >= 10 || $arriveeY < 0 || $arriveeY >= 10) {
        return false;
    }
    
    if($plateau[$arriveeX][$arriveeY] != '-') {
        return false;
    }
    
    $deltaX = abs($arriveeX - $departX);
    $deltaY = abs($arriveeY - $departY);
    
    if($deltaX == $deltaY && $deltaX == 1) {
        return true;
    }
    
    if($deltaX == $deltaY && $deltaX == 2) {
        $pionPrisX = ($arriveeX + $departX) / 2;
        $pionPrisY = ($arriveeY + $departY) / 2;
        
        if($plateau[$pionPrisX][$pionPrisY] == 'N' && $pion == 'B'){
            return true;
        }
        
        if($plateau[$pionPrisX][$pionPrisY] == 'B' && $pion == 'N'){
            return true;
        }
    }
    
    return false;
}

function deplacerPion($plateau, $departX, $departY, $arriveeX, $arriveeY){
    $plateau[$arriveeX][$arriveeY] = $plateau[$departX][$departY];
    $plateau[$departX][$departY] = '-';
    
    $deltaX = abs($arriveeX - $departX);
    $deltaY = abs($arriveeY - $departY);
    
    if($deltaX == $deltaY && $deltaX == 2) {
        $pionPrisX = ($arriveeX + $departX) / 2;
        $pionPrisY = ($arriveeY + $departY) / 2;
        $plateau[$pionPrisX][$pionPrisY] = '-';
    }
    
    return $plateau;
}

$plateau = creerPlateau();
$turn = 'B'; // Tour des pions blancs (B) au début

echo "<h1>Jeu de Dames</h1>";

if(isset($_GET['departX']) && isset($_GET['departY']) && isset($_GET['arriveeX']) && isset($_GET['arriveeY'])) {
    $departX = $_GET['departX'];
    $departY = $_GET['departY'];
    $arriveeX = $_GET['arriveeX'];
    $arriveeY = $_GET['arriveeY'];
    
    if(deplacementPossible($plateau, $departX, $departY, $arriveeX, $arriveeY, $turn)){
        $plateau = deplacerPion($plateau, $departX, $departY, $arriveeX, $arriveeY);
        
        if($turn == 'B') {
            $turn = 'N';
        } else {
            $turn = 'B';
        }
    } else {
        echo "<p style='color: red;'>Déplacement invalide</p>";
    }
}

afficherPlateau($plateau);

echo "<h3>Tour des pions ".$turn."s";
?>
<form method="GET" action="">
    <label for="departX">Ligne de départ :</label>
    <select id="departX" name="departX">
        <?php for($i = 0; $i < 10; $i++) { ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php } ?>
    </select>
    <label for="departY">Colonne de départ :</label>
    <select id="departY" name="departY">
        <?php for($j = 0; $j < 10; $j++) { ?>
            <option value="<?php echo $j; ?>"><?php echo $j; ?></option>
        <?php } ?>
    </select>
    <label for="arriveeX">Ligne d'arrivée :</label>
    <select id="arriveeX" name="arriveeX">
        <?php for($i = 0; $i < 10; $i++) { ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php } ?>
    </select>
    <label for="arriveeY">Colonne d'arrivée :</label>
    <select id="arriveeY" name="arriveeY">
        <?php for($j = 0; $j < 10; $j++) { ?>
            <option value="<?php echo $j; ?>"><?php echo $j; ?></option>
        <?php } ?>
    </select>
    <input type="submit" value="Déplacer">
</form>