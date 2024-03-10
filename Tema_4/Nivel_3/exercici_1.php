<?php

// Exercici 1
class Cinema
{
    public string $nombre;
    public string $poblacion;
    public $peliculas = [];
    public static $id = 0;

    public function __construct(string $nombre, string $poblacion, $peliculas)
    {
        $this->nombre = $nombre;
        $this->poblacion = $poblacion;
        $this->peliculas = $peliculas;
        self::$id++;
    }
}

class Pelicula
{

    public string $nombre;
    public int $duracion;
    public string $director;

    public function __construct(string $nombre, int $duracion, string $director)
    {
        $this->nombre = $nombre;
        $this->duracion = $duracion;
        $this->director = $director;
    }
}

$pelicula[1] = new Pelicula('Oppenheimer', 180, 'Cristopher Nolan');
$pelicula[2] = new Pelicula('Dune', 166, 'Denis Villeneuve');
$pelicula[3] = new Pelicula('Kung Fu Panda 4', 94, 'Mike Mitchell');
$pelicula[4] = new Pelicula('Ferrari', 131, 'Michael Mann');

$cinema[1] = new Cinema('Verdi', 'Barcelona', [$pelicula[1], $pelicula[2]]);
$cinema[2] = new Cinema('Albèniz', 'Girona', [$pelicula[2], $pelicula[3]]);
$cinema[3] = new Cinema('Goya', 'Lleida', [$pelicula[3], $pelicula[4]]);
$cinema[4] = new Cinema('Yelmo', 'Lleida', [$pelicula[4], $pelicula[1]]);

mostarDatosPeliculas($cinema);

function mostarDatosPeliculas($cinema)
{

    for ($i = 1; $i <= Cinema::$id; $i++) {
        echo $cinema[$i]->nombre . " (" . $cinema[$i]->poblacion . ") " . PHP_EOL;
        foreach ($cinema[$i]->peliculas as $pelicula) {
            echo $pelicula->nombre . " - ";
            echo $pelicula->duracion . " min. - ";
            echo $pelicula->director;
            echo PHP_EOL;
        }
        mostarPeliConMayorDuracion($cinema[$i]);
    }
}

function mostarPeliConMayorDuracion($cinema)
{
    $maxDuracion = 0;
    $maxDuracionNombre = "";
    foreach ($cinema->peliculas as $pelicula) {
        if ($pelicula->duracion > $maxDuracion) {
            $maxDuracion = $pelicula->duracion;
            $maxDuracionNombre = $pelicula->nombre;
        }
    }
    echo $maxDuracionNombre . " es la pelicula más larga." . PHP_EOL;
    echo PHP_EOL;
}

buscarPorDirector($cinema, 'Cristopher Nolan');

function buscarPorDirector($cinema, $director)
{
    for ($i = 1; $i <= Cinema::$id; $i++) {
        foreach ($cinema[$i]->peliculas as $pelicula) {
            if ($pelicula->director == $director) {
                echo "Puedes ver " . $pelicula->nombre . " de " . $director . " en: ";
                echo $cinema[$i]->nombre . " (" . $cinema[$i]->poblacion . ") ";
                echo PHP_EOL;
            }
        }
    }
}
echo PHP_EOL;
