<?php

use PHPUnit\Framework\TestCase;
require (__DIR__ .'/../../src/nivel_1/grauChecker.php');

// Nivel_1 Exercici 2
final class GrauCheckerTest extends TestCase
{
    public function testPrimeraDivisio(): void
    {
        $grauChecker = new GrauChecker;
        $this->assertEquals('Primera Divisó', $grauChecker->verificarGrau(10));
        $this->assertEquals('Primera Divisó', $grauChecker->verificarGrau(6));
    }

    public function testSegonaDivisio(): void
    {
        $grauChecker = new GrauChecker;
        $this->assertEquals('Segona Divisió', $grauChecker->verificarGrau(5.9));
        $this->assertEquals('Segona Divisió', $grauChecker->verificarGrau(4.5));
    }

    public function testTerceraDivisio(): void
    {
        $grauChecker = new GrauChecker;
        $this->assertEquals('Tercera Divisió', $grauChecker->verificarGrau(4.4));
        $this->assertEquals('Tercera Divisió', $grauChecker->verificarGrau(3.3));
    }

    public function testReprovat(): void
    {
        $grauChecker = new GrauChecker;
        $this->assertEquals('Reprovat', $grauChecker->verificarGrau(3.2));
        $this->assertEquals('Reprovat', $grauChecker->verificarGrau(0));
    }
}


