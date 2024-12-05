<?php

class Circle extends Shape
{
    private $radius;
    

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return (pi() * pow($this->radius, 2));        //m2 A=πr2
    }
}
?>