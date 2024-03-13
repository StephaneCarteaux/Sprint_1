<?php
namespace Tema_7\scr\nivel_3;
class Biblioteca {

    public $libros = [];

    public function agregarLibro(Libro $libro) {
        $this->libros[] = $libro;
    }
    // TODO: Practicar funcciones anonimas
    public function borrarLibro($isbn) {
        $this->libros = array_filter($this->libros, function ($libro) use ($isbn) {
            return $libro->isbn !== $isbn;
        });
    }

    public function modificarLibro($isbn, Libro $libroModificado) {
        foreach ($this->libros as &$libro) {
            if ($libro->isbn === $isbn) {
                $libro = $libroModificado;
            }
        }
    }

    public function consultarPorTitulo($titulo) {
        return array_filter($this->libros, function ($libro) use ($titulo) {
            return stripos($libro->titulo, $titulo) !== false;
        });
    }

    public function consultarPorGenero($genero) {
        return array_filter($this->libros, function ($libro) use ($genero) {
            return $libro->genero === $genero;
        });
    }

    public function consultarPorISBN($isbn) {
        return array_filter($this->libros, function ($libro) use ($isbn) {
            return $libro->isbn === $isbn;
        });
    }

    public function consultarPorAutor($autor) {
        return array_filter($this->libros, function ($libro) use ($autor) {
            return stripos($libro->autor, $autor) !== false;
        });
    }

    public function librosGrandes() {
        return array_filter($this->libros, function ($libro) {
            return $libro->numPaginas > 500;
        });
    }

}


?>