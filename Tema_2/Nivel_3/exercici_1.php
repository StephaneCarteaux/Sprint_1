<?php

// Exercici 1
$n = readline ("Introduce un numero a partir del 2 para saber si es primo o no: ");
comprobarNumeroPrimo ($n);

function comprobarNumeroPrimo ($n){

// empezaremos la criba con el 2, el más pequeno numero primo
$i = 2;

// creamos una lista de numeros desde el 2 hasta el numero seleccionado y la inicializamos a true
$numeroPrimo  = array_fill ($i, $n, true);

// Recogeremos la lista y filtraremos los numeros compuestos correspondientes marcando todos los múltiplos del numero seleccionado
// Repetiremos ese paso desde i = 2 hasta i > sqrt(n)
while ($i * $i <= $n){

   // escogemos el siguiente numero primo o el numero sin marcar más pequeno de la lista
   if ($numeroPrimo[$i] == true){
      // marcamos los multiple de i
      for ($j = $i * $i; $j <= $n; $j += $i){
        $numeroPrimo[$j] = false; 
      }
   }

$i += 1;

}

// si nuestro numero no está marcado es primo
if ($numeroPrimo[$n]){
   echo $n." es un numero primo" .PHP_EOL;
// en el caso contrario no es primo
}else {
   echo $n." no es un numero primo" .PHP_EOL;
}

}

?>