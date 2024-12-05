<?php 
require 'shape.php';
require 'circle.php';
require 'rectangle.php';
require 'triangle.php';


$circle= new Circle(10);
echo "Circle Area: " .round($circle->calculateArea(),3)  ." m² ". "</br>";

$triangle = new Triangle(8, 9);
echo " Triangle Area: " . $triangle->calculateArea() ." cm² ". "</br>";

$rectangle = new Rectangle(2, 8);
echo " Rectangle Area: " . $rectangle->calculateArea() ." cm²";



?>