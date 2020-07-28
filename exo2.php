<?php

$nombre = readline("Donnez un nombre au hasard: ");

while($nombre <10 || $nombre > 20){
    if($nombre < 10){
        echo("Vous devez rentrer un nombre plus grand \n");
    }

    if($nombre > 20){
        echo("Vous devez rentrer un nombre plus petit \n");
    }

    $nombre = readline("Donnez un nombre au hasard: ");
}

if($nombre >= 10 || $nombre <= 20){
    exit();
}
?>
