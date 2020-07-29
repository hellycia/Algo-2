<?php

$nombre = readline("Donnez un nombre pour avoir les dix nombres suivant");

for($i=0;$i<10;$i++){
    $nombre = $nombre + 1;
    echo($nombre . ' ');
}
?>
