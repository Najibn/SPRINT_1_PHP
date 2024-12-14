<?php

class Films
{

    private $name;
    private $duracion;
    private $director;

    public function __construct($name, $duracion, $director)
    {
        $this->name = $name;
        $this->duracion = $duracion;
        $this->director = $director;
    }

    //getters

    public function getName()
    {
        return $this->name;
    }

    public function getDuracion()
    {
        return $this->duracion;
    }

    public function getDirector()
    {
        return $this->director;
    }
    //setters
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;
    }
    public function setDirector($director)
    {
        $this->director = $director;
    }

}

?>
