<?php

// Exercici 1
$enteros = [1, 2, 3, 4, 5];
$resultado = array_map("cubo", $enteros);
print_r($resultado);

function cubo($n){
    return($n * $n * $n);
}

?>