<?php

// Exercici 2
$clase = [
    'Ana' => [7, 5, 8, 3, 6],
    'Pau' => [6, 4, 7, 3, 2],
    'Arnau' => [3, 7, 6, 3, 8],
    'Laia' => [8, 9, 3, 4, 7]
    ];
// Recogemos cada fila. Utilizamos el formato value => key para acceder a los nombres de los alumnos
foreach($clase as $alumne => $notes){
    echo $alumne."\t";
    // Recogemos la columna
    foreach($notes as $nota){
        echo $nota."\t";
    }
    echo PHP_EOL;
}

mitjana($clase);

function mitjana($clase){

    $suma_clase = null;
    $count_clase = null;

    echo PHP_EOL;
    echo "Mitajanes alumnes" .PHP_EOL;

    // Recogemos la 1a dimensión del array
    foreach ($clase as $alumne => $notes){
        // Sumamos los valores de cada fila
        $suma_alumne = array_sum($clase[$alumne]);
        // Dividimos por el numero de valores de la fila
        $mitjana_alumne = $suma_alumne / count($clase[$alumne]);
        echo $alumne."\t".$mitjana_alumne .PHP_EOL;
        // En cada iteración acumulamos la suma y el total de valores de la fila
        $suma_clase += array_sum($clase[$alumne]);
        $count_clase += count($notes);

    }

    echo PHP_EOL;
    echo "Mitajane clase" .PHP_EOL;
    $mitjana_clase = $suma_clase / $count_clase;
    echo $mitjana_clase .PHP_EOL;
}

?>