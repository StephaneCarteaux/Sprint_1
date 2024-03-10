<?php

// Exercici 6
function isBitten(){
   $value = (bool)rand(0,1);
   if ($value){
      echo "Charlie em va mossegar el dit :(" .PHP_EOL;
   } else {
      echo "Charlie no em va mossegar el dit :)" .PHP_EOL;
   }
}

isBitten();

?>