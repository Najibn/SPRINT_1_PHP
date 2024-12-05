<?php



//madre abstr
 abstract class Animals
{
    protected $name;

 public function __construct($name)
 {
    $this->name=$name;
 }

abstract public function makeSound(): string;
}




?>

