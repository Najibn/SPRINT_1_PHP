
<?php
//interface type

interface Animal{
    public function makeSound();
} 

// cats class
class Cat implements Animal {
    public function makeSound() {
      echo ": Mmmeeeooowww \n";
    }
  }


  // dogs class
  class Dog implements Animal {
    public function makeSound() {
      echo ": woof woof \n";
    }
  }

   // extra horse class
  class Horse implements Animal {
    public function makeSound() {
      echo " neeeiiigggghhh \n";
    }
  }

  // list of animals
  $cat = new Cat();
  $dog = new Dog();
  $horse = new Horse();
  $animals = array($cat, $dog, $horse);


  
  //all animals making noises
  foreach($animals as $animal) {
    $animal->makeSound();
  }
  

?>