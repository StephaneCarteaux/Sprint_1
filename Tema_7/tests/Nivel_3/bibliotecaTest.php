<?php
namespace Tema_7\scr\nivel_3;
// Para ese ejercicio me he tenido que ayudar de chatGPT
// así que buena parte del trabajo ha sido analizar y entender el codigo que me proponía...

use PHPUnit\Framework\TestCase;

class BibliotecaTest extends TestCase {
    public function testAgregarLibro() {
        $biblioteca = new Biblioteca();
        $libro = new Libro("El Señor de los Anillos", "J.R.R. Tolkien", "978-84-450-7625-0", "Fantástico", 1200);
        
        $biblioteca->agregarLibro($libro);
        $this->assertEquals([$libro], $biblioteca->libros);
    }

    public function testBorrarLibro() {
        $biblioteca = new Biblioteca();
        $libro = new Libro("El Señor de los Anillos", "J.R.R. Tolkien", "978-84-450-7625-0", "Fantástico", 1200);
        $biblioteca->agregarLibro($libro);
        
        $biblioteca->borrarLibro("978-84-450-7625-0");
        $this->assertNotEquals ([$libro], $biblioteca->libros);
    }

    public function testModificarLibro() {
        $biblioteca = new Biblioteca();
        $libro = new Libro("Los Anillos", "J.R.R. Tolkien", "978-84-450-7625-0", "Fantástico", 1200);
        $biblioteca->agregarLibro($libro);

        $libroModificado = new Libro("El Señor de los Anillos", "J.R.R. Tolkien", "978-84-450-7625-0", "Fantástico", 1200);
        $biblioteca->modificarLibro('978-84-450-7625-0', $libroModificado);
        $this->assertEquals([$libroModificado], $biblioteca->libros);

    }

    public function testConsultarPorTitulo() {
        $biblioteca = new Biblioteca();
        $libro = new Libro("El Señor de los Anillos", "J.R.R. Tolkien", "978-84-450-7625-0", "Fantástico", 1200);
        $biblioteca->agregarLibro($libro);

        $consulta = $biblioteca->consultarPorTitulo("El Señor de los Anillos");

        $this->assertCount(1, $consulta);
        $this->assertEquals($libro, $consulta[0]);
        
    }

    public function testConsultarPorGenero() {
        $biblioteca = new Biblioteca();

        $libro = new Libro("El Señor de los Anillos", "J.R.R. Tolkien", "978-84-450-7625-0", "Fantástico", 1200);
        $biblioteca->agregarLibro($libro);

        $consulta = $biblioteca->consultarPorGenero("Fantástico");

        $this->assertCount(1, $consulta);
        $this->assertEquals($libro, $consulta[0]);
        
    }

    public function testConsultarPorIsbn() {
        $biblioteca = new Biblioteca();

        $libro = new Libro("El Señor de los Anillos", "J.R.R. Tolkien", "978-84-450-7625-0", "Fantástico", 1200);
        $biblioteca->agregarLibro($libro);

        $consulta = $biblioteca->consultarPorIsbn("978-84-450-7625-0");

        $this->assertCount(1, $consulta);
        $this->assertEquals($libro, $consulta[0]);
        
    }
    public function testConsultarPorAutor() {
        $biblioteca = new Biblioteca();

        $libro = new Libro("El Señor de los Anillos", "J.R.R. Tolkien", "978-84-450-7625-0", "Fantástico", 1200);
        $biblioteca->agregarLibro($libro);

        $consulta = $biblioteca->consultarPorAutor("J.R.R. Tolkien");

        $this->assertCount(1, $consulta);
        $this->assertEquals($libro, $consulta[0]);
        
    }
    public function testLibrosGrandes() {
        $biblioteca = new Biblioteca();

        $libro = new Libro("El Señor de los Anillos", "J.R.R. Tolkien", "978-84-450-7625-0", "Fantástico", 1200);
        $biblioteca->agregarLibro($libro);

        $consulta = $biblioteca->librosGrandes();

        $this->assertCount(1, $consulta);
        $this->assertEquals($libro, $consulta[0]);
        
    }
    
}