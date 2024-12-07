<?php
//It implements a Car class that has information about a (brand car, license plate, fuel type, max speed). 
//In addition, it implements a Trait called Turbo that has a boost() method that shows a message 
//“S’ has started the turbo”. Use this method from the Car class.
require_once "turbo.php";
require_once "car.php";



$car = new Car("aston martin","bmt216a","95 RON fuel",250); 
$car1 = new Car("Chevy Corvette","bm1975w","c8gas",220); 


echo $car->__toString()."\n";
echo $car1->__toString()."\n";
$car->boostMethod();

?>