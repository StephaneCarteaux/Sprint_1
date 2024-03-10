<?php

// Exercici 2
$array = array (10, 20, 30, 40 ,50);

echo "Mida del array: ".(count ($array)) .PHP_EOL;
var_dump ($array);

unset ($array[2]);
$array = array_values ($array);
echo "Hemos eliminado 1 elemento". PHP_EOL;
var_dump ($array);

echo "Mida del array: ".(count ($array)) .PHP_EOL;

?>