<?php

// Exercici 2

$xocolates = readline ("Introdueix el numero de xocolates: ");
$xiclets = readline ("Introdueix el numero de xiclets: ");
$carmels = readline ("Introdueix el numero de carmels: ");

function calcularSubtotalXocolates($n){
   return number_format($n * 1, 2);
}

function calcularSubtotalXiclets($n){
   return number_format($n * 0.5, 2);
}

function calcularSubtotalCarmels($n){
   return number_format($n * 1.5, 2);
}

function calcularTotal($xocolates, $xiclets, $carmels){
   echo $xocolates." xocolates -> ";
   echo calcularSubtotalXocolates($xocolates)." €" .PHP_EOL;
   echo $xiclets." xiclets -> ";
   echo calcularSubtotalXiclets($xiclets)." €" .PHP_EOL;
   echo $carmels." carmels -> ";
   echo calcularSubtotalCarmels($carmels)." €" .PHP_EOL;
   
   $total = calcularSubtotalXocolates($xocolates) + calcularSubtotalXiclets($xiclets) + calcularSubtotalCarmels($carmels);
   $total = number_format($total, 2);
   echo "Total -> ".$total." €" .PHP_EOL;
}

calcularTotal ($xocolates, $xiclets, $carmels);

?>