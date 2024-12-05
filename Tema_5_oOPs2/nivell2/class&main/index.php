<?php

require 'shape.php';
require 'triangle.php';
require 'rectangle.php';

$triangle = new Triangle(5, 7);
echo "Triangle Area: " . $triangle->calculateArea() ."\n";

$rectangle = new Rectangle(4, 6);
echo "Rectangle Area: " . $rectangle->calculateArea() ;

?>


?>