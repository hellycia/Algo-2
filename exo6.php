<?php

$nombre = readline(' Calcul de l entier: ');
$resultat = 0;

// $i = 0;
// while($nombre >= $i){
//     $resultat += $i;
//     $i++;
// }

for($i=0;$i<=$nombre;$i++){
    $resultat += $i;
}
echo($resultat);
