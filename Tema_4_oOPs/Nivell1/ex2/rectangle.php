<?php 
class Rectangle extends Shape
{
    public function rec_area()
    {
        $area = $this->width * $this->height;
        return $area;
    }
}



?>