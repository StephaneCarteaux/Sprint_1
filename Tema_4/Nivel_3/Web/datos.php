<?php
$pelicula[1] = new Pelicula('Oppenheimer', 180, 'Cristopher Nolan');
$pelicula[2] = new Pelicula('Dune', 166, 'Denis Villeneuve');
$pelicula[3] = new Pelicula('Kung Fu Panda 4', 94, 'Mike Mitchell');
$pelicula[4] = new Pelicula('Ferrari', 131, 'Michael Mann');
$pelicula[5] = new Pelicula('Origen', 148, 'Cristopher Nolan');

$cinema[1] = new Cinema('Verdi', 'Barcelona', [$pelicula[1], $pelicula[2]]);
$cinema[2] = new Cinema('Albèniz', 'Girona', [$pelicula[2], $pelicula[3], $pelicula[5]]);
$cinema[3] = new Cinema('Goya', 'Lleida', [$pelicula[3], $pelicula[4]]);
$cinema[4] = new Cinema('Yelmo', 'Lleida', [$pelicula[4], $pelicula[1]]);
?>