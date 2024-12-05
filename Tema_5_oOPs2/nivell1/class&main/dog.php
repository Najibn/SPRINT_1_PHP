<?php

//child ext1
class Dog extends Animals
{
    public function makeSound(): string
    {
       return   "soy un $this->name Bup, bup!";
    }
}





?>