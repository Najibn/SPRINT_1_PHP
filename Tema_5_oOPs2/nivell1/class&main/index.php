<?php
require 'animal.php';
require 'dog.php';
require 'cat.php';

//insta. the obj
$cat = new Cat("Scottish Fold");
echo $cat->makeSound(); 

echo "<br>";
$dog =new Dog("german shepheard");
echo $dog->makeSound();


?>