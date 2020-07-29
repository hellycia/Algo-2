<?php

$nombre = readline('Factorielle de: ');
$resultat = 1;

for($i=1;$i<=$nombre;$i++){
    $resultat = $resultat * $i;
}
echo($resultat);
