<?php
 class Animal{

   private $name;
   private $age;
   private $breed;

    public function __construct($name, $age,$breed)
    {
        $this->name=$name;
        $this->age=$age;
        $this->breed=$breed;

    }


 public function __toString()
 {
    return "\n name of animal  : {$this->name} \n 
    Age   : {$this->age} \n
    Breed : { $this->breed}";
 }

 }
  
?>