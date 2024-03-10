<?php

// Exercici 2
$palabras = [
    "perro",
    "gato",
    "elefante",
    "caballo",
    "pato",
    "obeja"
];

$palabras_pares = array_filter($palabras, "contarLetras");
print_r($palabras_pares);

function contarLetras($palabras){
    $num_letras = strlen($palabras);
    if($num_letras % 2 == 0){
        return true;
    }
}

?>