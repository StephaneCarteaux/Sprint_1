<?php
// Exercici 2
require_once 'shape.php';
require_once 'triangle.php';
require_once 'rectangle.php';

$triangle = new Triangle(3, 4);
$triangle->area();

$rectangle = new Rectangle(3, 4);
$rectangle->area();

?>