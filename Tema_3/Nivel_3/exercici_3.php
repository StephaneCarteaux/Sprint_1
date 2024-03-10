<?php

// Exercici 3
$enteros = [2, 3, 4, 5, 6, 7, 8, 9, 10, 11];
$numeros_primos = array_reduce($enteros, "numerosPrimos");
echo "La suma de los numeros primos es: ".$numeros_primos;

function numerosPrimos($carry, $n){
    // empezaremos la criba con el 2, el más pequeno numero primo
    $i = 2;
    // echo $n." - ";
    
    // creamos una lista de numeros desde el 2 hasta el numero seleccionado y la inicializamos a true
    $test  = array_fill ($i, $n, true);
    
    // Recogeremos la lista y filtraremos los numeros compuestos correspondientes marcando todos los múltiplos del numero seleccionado
    // Repetiremos ese paso desde i = 2 hasta i > sqrt(n)
    while ($i * $i <= $n){
    
       // escogemos el siguiente numero primo o el numero sin marcar más pequeno de la lista
       if ($test[$i] == true){
          // marcamos los multiple de i
          for ($j = $i * $i; $j <= $n; $j += $i){
            $test[$j] = false; 
          }
       }
    
    $i += 1;
    
    }

    if ($test[$n]){
        $carry += $n;
     }
     
     return $carry;
     
}

?>