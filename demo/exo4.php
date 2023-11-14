
<?php ob_start();session_start() ?>
<form action="#" method="post">
    <label for="num"> Deviner le nombre : </label>
    <input type="number" name="ADh" id="num">
    <input type="submit" name="lenim" value="Envoyer">
    <input type="reset" name="reinitialiser" value="reinitialiser">
</form>
<div class="multi">


    <?php
     $_SESSION = rand(0, 9);

    if ($_POST["ADh"] <  $_SESSION) {
        echo "Le chiffre est plus petit que .  $_SESSION perdu ";
    } elseif ($_POST["ADh"] >  $_SESSION) {
        echo "Le chiffre est plus grand que .  $_SESSION perdu ";
    } elseif ($_POST["ADh"] >  $_SESSION){
        echo "vous avez gagné .  $_SESSION gagné  ";
            (rand avec la valeur num)
    }
      if(isset($_POST['ADh'])) {
         echo "L'ordinat :  <br>";
          }
     ?>

</div>

<?php
$content = ob_get_clean();
$titre = "Deviner le nombre";
require "template.php";
?>