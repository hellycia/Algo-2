<?php

$nombre = readline("Donnez un nombre pour avoir les dix nombres suivant");
$i = 0;

while($i < 10){
    $nombre = $nombre + 1;
    $i++;
    echo($nombre . ' ');
}
?>
