<?php

//abstract type class
abstract class Animal{
   abstract public function makeSound(): string;
    
   //magic const
   public function details(): string
   {
    return "directory:    " . __DIR__ ."\n " .
           "filename:     " . __FILE__ ."\n " .
           "filename:     " . __CLASS__ ."\n" ;
   }

} 


   // horse class
  class Horse extends Animal {
    public function makeSound() : string {
      return " neeeiiigggghhh \n";
    }

    public function details() : string{
        return "class:      " . __CLASS__    . "\n ".
               "directory:  " .__DIR__       . "\n ".
               "File:       " .__FILE__     . "\n ";
           
          
    }
  }


?>