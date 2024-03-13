<?php
namespace Tema_7\scr\nivel_3;
class Libro {

    public $titulo;
    public $autor;
    public $isbn;
    public $genero;
    public $numPaginas;

    public function __construct($titulo, $autor, $isbn, $genero, $numPaginas) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->isbn = $isbn;
        $this->genero = $genero;
        $this->numPaginas = $numPaginas;
    } 


}

?>