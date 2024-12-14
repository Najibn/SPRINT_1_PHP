
<?php 
require 'shape.php';
require 'triangle.php';
require 'rectangle.php';

$triangle = new Triangle(24, 12);
$rectangle = new Rectangle(6, 12);

echo " triangle area is :  " . $triangle->tri_area();
echo  "\n rectangle area is:  " . $rectangle->rec_area();


?>