<?php

class Empleado
{
    private  $nom;
    private  $sueldo;

    public function __construct($nom, $sueldo)
    {
        $this->nom = $nom;
        $this->sueldo = $sueldo;
    }

    public function emp_impuestos()
    {
        if ($this->sueldo > 6000) {

            echo  "  Nom: {$this->nom} & Sueldo> {$this->sueldo} \"ergo \" Tienes que pagar impuestos .";
        } else {

            echo "\n  Nom: {$this->nom} & Sueldo> {$this->sueldo} \"ergo\"  Sin impuestos para ti!.";
        }
    }
}

?>