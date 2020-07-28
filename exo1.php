<?php

$nombre = readline("Donnez un nombre entre 1 et 3: ");

while($nombre <1 || $nombre > 3){
    exit("Vous devez rentrer un nombre entre 1 et 3");
}
