<?php

class Rectangle extends Shape {
    function area() {
        echo "Aera del rectangle: ".$this->ample * $this->alt;
        echo PHP_EOL;
    }
}