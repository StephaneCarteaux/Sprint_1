<?php

// Exercici 2
class Shape {
    
    public float $ample;
    public float $alt;

    function __construct(float $ample, float $alt){
        $this->ample = $ample;
        $this->alt = $alt;
    }
}

class Triangle extends Shape {
    function area() {
        echo "Area del triangle: ".$this->ample * $this->alt / 2;
        echo PHP_EOL;
    }
}

class Rectangle extends Shape {
    function area() {
        echo "Aera del rectangle: ".$this->ample * $this->alt;
        echo PHP_EOL;
    }
}

$triangle = new Triangle(3, 4);
$triangle->area();

$rectangle = new Rectangle(3, 4);
$rectangle->area();

?>