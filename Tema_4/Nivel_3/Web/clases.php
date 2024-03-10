<?php
class Cinema {
    public string $nombre;
    public string $poblacion;
    public $peliculas = [];
    public static $id = 0;

    public function __construct (string $nombre, string $poblacion, $peliculas) {
        $this->nombre = $nombre;
        $this->poblacion = $poblacion;
        $this->peliculas = $peliculas;
        self::$id ++;
    }
}

class Pelicula {

    public string $nombre;
    public int $duracion;
    public string $director;

    public function __construct (string $nombre, int $duracion, string $director) {
        $this->nombre = $nombre;
        $this->duracion = $duracion;
        $this->director = $director;
    }
}
?>