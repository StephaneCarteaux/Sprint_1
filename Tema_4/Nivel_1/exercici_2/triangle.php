<?php

class Triangle extends Shape {
    function area() {
        echo "Area del triangle: ".$this->ample * $this->alt / 2;
        echo PHP_EOL;
    }
}