<?php

// Exercici 5
$nota = readline ("Introduce tu nota sobre 10: ");

verificarGrau($nota);

function verificarGrau($nota){

   $porcentaje = ($nota / 10) * 100;

   if ($porcentaje >= 60){
      $grau = "Primera Divisó"; 
   }
   if ($porcentaje >= 45 && $porcentaje <=59){
      $grau = "Segona Divisió"; 
   }
   if ($porcentaje >= 33 && $porcentaje <=44){
      $grau = "Tercera Divisió"; 
   }
   if ($porcentaje < 33){
      $grau = "Reprovat"; 
   }

   echo $grau .PHP_EOL;
}


?>