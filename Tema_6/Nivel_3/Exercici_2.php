<?php

//Exercici 2
class Car {
    private string $marca;
    private string $matricula;
    private string $combustible;
    private int $velocidadMax;

    public function __construct (string $marca, string $matricula, string $combustible, int $velocidadMax) {
        $this->marca = $marca;
        $this->$matricula = $matricula;
        $this->combustible = $combustible;
        $this->velocidadMax = $velocidadMax;
    }

    use Turbo;
}

trait Turbo {
    public function boost() {
        echo "S'ha iniciat el turbo" .PHP_EOL;
    }
}

$myCar = new Car("Ford", "MUS001", "Gasolina", 250);
$myCar->boost();

?>