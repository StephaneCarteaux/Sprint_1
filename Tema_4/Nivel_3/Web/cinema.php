<?php

class Cinema {
    private string $nombre;
    private string $poblacion;
    public $peliculas = [];
    public static $id = 0;

    public function __construct (string $nombre, string $poblacion, $peliculas) {
        $this->nombre = $nombre;
        $this->poblacion = $poblacion;
        $this->peliculas = $peliculas;
        self::$id ++;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getPoblacion()
    {
        return $this->poblacion;
    }

    public function getPeliculas()
    {
        return $this->peliculas;
    }
}