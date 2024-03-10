<?php

// Exercici 2
$bienvenida = "Hello, World!";
echo $bienvenida .PHP_EOL;

$bienvenida_mayusculas = strtoupper($bienvenida);
echo $bienvenida_mayusculas .PHP_EOL;

echo "Este texto tiene ".strlen($bienvenida)." carácteres" .PHP_EOL;

echo strrev($bienvenida) .PHP_EOL;

$curso = "Aquest és el curs de PHP";
echo $bienvenida." ".$curso .PHP_EOL;

?>