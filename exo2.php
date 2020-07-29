<?php

$nombre = readline("Donnez un nombre au hasard: ");
$nombreInferieurA10 = $nombre < 10;
$nombreSuperieurA20 = $nombre > 20;

while($nombreInferieurA10 || $nombreSuperieurA20){
    if($nombreInferieurA10){
        echo("Vous devez rentrer un nombre plus grand \n");
    }

    if($nombreSuperieurA20){
        echo("Vous devez rentrer un nombre plus petit \n");
    }

    $nombre = readline("Donnez un nombre au hasard: ");
}
exit()
?>
