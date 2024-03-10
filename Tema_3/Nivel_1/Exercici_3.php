<?php

// Exercici 3
$paraules = array ('menjar', 'beure', 'dormir');
$caracter = readline ("Introdueix un caràcter: "); // La funccion retorna true si $caracter == null. Se trataría de validar la entrada...

function estaElCaracter ($paraules, $caracter){
    
    foreach ($paraules as $paraula){

        if (!str_contains($paraula, $caracter)){
            return false;
        }        
    }
    return true;
}

if (estaElCaracter($paraules, $caracter)){
    echo "Totes la paraules tenen el caràcter: ".$caracter .PHP_EOL;
}else {
    echo "No totes la paraules tenen el caràcter: ".$caracter .PHP_EOL;
}

?>