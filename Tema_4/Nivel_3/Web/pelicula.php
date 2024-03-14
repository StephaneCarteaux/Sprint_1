<?php
require_once 'pelicula.php';
require_once 'cinema.php';

class Pelicula
{

    private string $nombre;
    private int $duracion;
    private string $director;

    public function __construct(string $nombre, int $duracion, string $director)
    {
        $this->nombre = $nombre;
        $this->duracion = $duracion;
        $this->director = $director;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getDuracion()
    {
        return $this->duracion;
    }

    public function getDirector()
    {
        return $this->director;
    }

    public function mostarPeliConMayorDuracion($cinema)
    {
        $maxDuracion = 0;
        $maxDuracionNombre = "";
        for ($i = 1; $i <= Cinema::$id; $i++) {
            foreach ($cinema[$i]->peliculas as $pelicula) {
                if ($pelicula->duracion > $maxDuracion) {
                    $maxDuracion = $pelicula->duracion;
                    $maxDuracionNombre = $pelicula->nombre;
                }
            }
        }
        return $maxDuracionNombre . ' es la peli más larga';
    }

    function buscarPorDirector($cinema, $director)
    {
        for ($i = 1; $i <= Cinema::$id; $i++) {
            foreach ($cinema[$i]->peliculas as $pelicula) {
                if ($pelicula->director == $director) {
                    echo "Puedes ver " . $pelicula->nombre . " en: " . $cinema[$i]->getNombre() . " (" . $cinema[$i]->getPoblacion() . ") ";
                }
            }
        }
    }
}
