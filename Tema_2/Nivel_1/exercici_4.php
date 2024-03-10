<?php

// Exercici 4
$limit = readline ("Hasta donde quieres contar? ");
$step = readline ("De cuanto en cuanto? ");


if ($step == null){
    $step = 1;
}

contar ($step, $limit);

function contar(int $step, $limit = 10){
    
    for ($i = 0; $i <= $limit; $i = $i + $step){
        echo $i .PHP_EOL;
    } 
}

?>