
<?php ob_start() ?>
<form action="#" method="post">
        <label for="ADh"> Pyramide : </label>
        <input type="number" name="ADh" id="ADh">
        <input type="submit" value="Envoyer">
</form>
<div class="multi">

<?php
    if(isset($_POST["ADh"])){
    echo "<h2> La pyramide de hauteur  ". $_POST["ADh"] . "</h2>";

for($i =0; $i <=$_POST["ADh"]; $i++){
    for($j=0;$j<=$i;$j++){
        $tab[$i][$j] = "";
        echo $tab[$i][$j];
    } 
    echo "<br/>";
}

//de 6 à 1 etoile
for($i=$_POST["ADh"]-1;$i>=0;$i--){ // boucle for (6 - 1) on commence à 5
    for($j=$i;$j>=0;$j--){ // (-- vu que c'est inversé)
        $tab[$i][$j] = "";
        echo $tab[$i][$j];
    }
    echo "<br/>";
}
}

?>

</div>

<?php
$content = ob_get_clean();
$titre = "Affichage d'une pyramide";
require "template.php";
?>







