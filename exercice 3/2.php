<?php
// 
echo "exo 2" ."\n";
$nombre1 = readline("entrez un nombre");
$nombre2 = readline("entrez un deuxieme nombre");
if ($nombre1 > 0 and $nombre2 > 0){echo "positif";}
elseif ($nombre1 < 0 and $nombre2 > 0){echo "négatif";}
elseif ($nombre1 > 0 and $nombre2 < 0){echo "négatif";}
elseif ($nombre1 < 0 and $nombre2 < 0){echo "positif";}