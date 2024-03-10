<?php
// Exercici 1
$array_1 = array(1, 3.5, 6, 7.1, 9, 10.8, 12, 14.1, 17, 20);
$array_2 = array(1, 3, 4, 7.1, 8, 10.8, 11, 14, 17, 21);

$interseccio = array_intersect($array_1, $array_2);
var_dump($interseccio);

$mescla = array_merge($array_1, $array_2);
var_dump($mescla);

?>