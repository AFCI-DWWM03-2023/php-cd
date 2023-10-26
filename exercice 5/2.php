<?php
// 
echo "exo 2" ."\n";
$nombre = readline("entrez un nombre");
$nombre2 = $nombre ;
echo"les 5 nombres suivant sont"."\n";
for($i = 1; $i <= 5; $i++  ){
    $nombre ++ ;
     echo"$nombre"."\n";
}
echo"les 5 nombres precedent sont"."\n";
for( $i = 1; $i <= 5; $i++   ){
    $nombre2 -- ;
    echo" $nombre2"."\n";
}