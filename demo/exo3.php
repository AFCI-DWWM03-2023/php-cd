exo 3
<?php ob_start() ?>
<form action="#" method="post">
        <label for="ADh"> Rayon : </label>
        <input type="number" name="ADh" id="ADh" required min="0" max="9000">

        <br>
        <label for="Perimetre"> Perimètre : </label>
        <input type="checkbox" name="Perimetre" value="">
        <br>
        <label for="Aire"> Aire : </label>
        <input type="checkbox" name="Aire" value="">
        <br>

        <br>
        <input type="submit" name="submit" value="Envoyer">

</form>
<div class="multi">


<?php 
 if(isset($_POST['ADh'])) {


    if(isset($_POST['submit'])) {
        $perimetre = 2 * M_PI * $_POST["ADh"];
        $aire = M_PI * $_POST["ADh"] * $_POST["ADh"];

        if(isset($_POST['Aire'])) {
         echo "L'aire du rectangle est : " . $aire . "<br>";
        }

    if(isset($_POST['Perimetre'])) {
         echo "Le périmètre du rectangle est : " . $perimetre;
        }
    }
 }

?>

</div>
<?php
$content = ob_get_clean();
$titre = "Cercle - Périmètre et Aire";
require "template.php";
?>