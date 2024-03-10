<?php

// Exercici 1
$duracion_llamada = readline ("Introduce la duracition de la llamada en minutos: ");
calcularTarifaLlamada($duracion_llamada);

function calcularTarifaLlamada($duracion_llamada){
   

   $primer_tramo = 0.1;
   $segundo_tramo = 0;

   if ($duracion_llamada > 3){
      $segundo_tramo = ceil(($duracion_llamada - 3)) * 0.05 ;
   }

   $importe = number_format($primer_tramo + $segundo_tramo, 2);
   echo "El importe de la llamada es: ".$importe." €" .PHP_EOL;
}

?>