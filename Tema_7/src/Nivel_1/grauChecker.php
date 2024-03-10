<?php
// $nota = readline ("Introduce tu nota sobre 10: ");
// verificarGrau($nota);

// Nivel_1 Exercici 2
Class GrauChecker{
   
   function verificarGrau($nota){

      $porcentaje = $nota * 10;
   
   
      if ($porcentaje >= 60){
         $grau = "Primera Divisó"; 
         return $grau;
      }
      if ($porcentaje >= 45 && $porcentaje <=59){
         $grau = "Segona Divisió";
         return $grau;
      }
      if ($porcentaje >= 33 && $porcentaje <=44){
         $grau = "Tercera Divisió";
         return $grau;
      }
      if ($porcentaje < 33){
         $grau = "Reprovat";
         return $grau;
      }
   }
}
?>