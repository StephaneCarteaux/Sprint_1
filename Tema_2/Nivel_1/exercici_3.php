<?php

// Exercici 3a
$X = 20;
$Y = 3;
$N = 1.234;
$M = 2.345;

echo
"X = $X" .PHP_EOL.
"Y = $Y" .PHP_EOL.
"X + Y = ".$X+$Y .PHP_EOL.
"X - Y = ".$X-$Y .PHP_EOL.
"X x Y = ".$X*$Y .PHP_EOL.
"X mod Y = ".$X%$Y .PHP_EOL.PHP_EOL;

echo
"N = $N" .PHP_EOL.
"M = $M" .PHP_EOL.
"N + M = ".$N+$M .PHP_EOL.
"N - M = ".$N-$M .PHP_EOL.
"N x M = ".$N*$M .PHP_EOL.
"N mod M = N/A" .PHP_EOL.PHP_EOL;

echo
"X x 2 = ".$X*2 .PHP_EOL.
"Y x 2 = ".$Y*2 .PHP_EOL.
"N x 2 = ".$N*2 .PHP_EOL.
"M x 2 = ".$M*2 .PHP_EOL.
"X + Y + N + M = ".$X+$Y+$N+$M .PHP_EOL.
"X x Y x N x M = ".$X*$Y*$N*$M .PHP_EOL.PHP_EOL;


// Exercici 3b
$operando_1 = 0;
$operando_2 = 0;
$operador = "+";

$operando_1 = readline ("Introduce un numero: ");
$operador = readline ("Introduce el operador: ");
$operando_2 = readline ("Introduce otro numero: ");

calculadora ($operando_1, $operando_2, $operador);

function calculadora($operando_1, $operando_2, $operador){
    if ($operador == "+") {
        $resultado = $operando_1+$operando_2;
    }
    if ($operador == "-") {
        $resultado = $operando_1-$operando_2;
    }
    if ($operador == "*") {
        $resultado = $operando_1*$operando_2;
    }
    if ($operador == "/") {
        $resultado = $operando_1/$operando_2;
    }

    echo "El resultado es: ".$resultado .PHP_EOL;
}

?> 