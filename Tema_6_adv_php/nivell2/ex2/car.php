<?php
class Car{
    public $brandCar;
    public $licensePlate;
    public $fuelType;
    public $maxSpeed;
    use Turbo;

public function __construct($brandCar,$licensePlate,$fuelType,$maxSpeed)
{
    $this->brandCar    =$brandCar;
    $this->licensePlate=$licensePlate;
    $this->fuelType    =$fuelType ;
    $this->maxSpeed    =$maxSpeed;
}

public function __toString()
{

    return "Marca :{$this->brandCar}\nmatrícula: {$this->licensePlate}\ntipo de combustible : {$this->fuelType}\nvelocidad máxima : {$this->maxSpeed}\n";
   

}

public function boostMethod(){

    $this->boost("S’ha iniciat el turbo");

     }

}




?>