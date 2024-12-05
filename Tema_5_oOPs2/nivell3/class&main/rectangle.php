<?php

class Rectangle extends Shape
{
    public function calculateArea()
    {
        return ($this->height * $this->width);
    }
}
