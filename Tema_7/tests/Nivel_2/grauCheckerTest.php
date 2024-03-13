<?php
namespace Tema_7\scr\nivel_2;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

// Nivel_2 Exercici 2
final class GrauCheckerTest extends TestCase
{
    public static function primeraDivisionProvider(): array
    {
        return array(
          array(10, 6)
        );
	}

	#[DataProvider('primeraDivisionProvider')]
    public function testPrimeraDivisio(float $a, float $b):void {
        $grauChecker = new GrauChecker;
        $this->assertEquals('Primera Divisó', $grauChecker->verificarGrau($a));
        $this->assertEquals('Primera Divisó', $grauChecker->verificarGrau($b));
    }

    public static function segonaDivisionProvider(): array
    {
        return array(
          array(5.9, 4.5)
        );
	}

	#[DataProvider('segonaDivisionProvider')]
    public function testSegonaDivisio(float $a, float $b):void {
        $grauChecker = new GrauChecker;
        $this->assertEquals('Segona Divisió', $grauChecker->verificarGrau($a));
        $this->assertEquals('Segona Divisió', $grauChecker->verificarGrau($b));

    }

    public static function terceraDivisionProvider(): array
    {
        return array(
          array(4.4, 3.3)
        );
	}

	#[DataProvider('terceraDivisionProvider')]
    public function testTerceraDivisio(float $a, float $b):void {
        $grauChecker = new GrauChecker;
        $this->assertEquals('Tercera Divisió', $grauChecker->verificarGrau($a));
        $this->assertEquals('Tercera Divisió', $grauChecker->verificarGrau($b));

    }

    public static function reprovatProvider(): array
    {
        return array(
          array(3.2, 0)
        );
	}

	#[DataProvider('reprovatProvider')]
    public function testReprovat(float $a, float $b):void {
        $grauChecker = new GrauChecker;
        $this->assertEquals('Reprovat', $grauChecker->verificarGrau($a));
        $this->assertEquals('Reprovat', $grauChecker->verificarGrau($b));

    }
}


?>