<?php

$nombre = readline("Donnez un nombre entre 1 et 3: ");

while($nombre <1 || $nombre > 3){
    echo("Vous devez rentrer un nombre entre 1 et 3 \n");
    $nombre = readline("Donnez un nombre entre 1 et 3: ");
}
exit();
?>
