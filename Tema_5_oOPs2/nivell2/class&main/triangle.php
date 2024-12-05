<?php
class Triangle extends Shape
{
    public function calculateArea()
    {
        return 0.5 * ($this->width * $this->height);
    }
}
