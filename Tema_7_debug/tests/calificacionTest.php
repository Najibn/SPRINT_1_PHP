<?php

namespace Tests;


use PHPUnit\Framework\TestCase;
use App\nivell1_2_phpunit_dataProvider\Calificacion;
use PHPUnit\Framework\Attributes\DataProvider;

class CalificacionTest extends TestCase
{
    public function testMyPrimeraDivision()
{
    $calificacion1 = new Calificacion(60);
    $this->assertEquals("Primera Division!", $calificacion1->calificacion());

    $calificacion2 = new Calificacion(100);
    $this->assertEquals("Primera Division!", $calificacion2->calificacion());
}

public function testSegundaDivision()
{
    $calificacion = new Calificacion(45);
    $this->assertEquals("Segunda Division!", $calificacion->calificacion());

    $calificacion = new Calificacion(59);
    $this->assertEquals("Segunda Division!", $calificacion->calificacion());
}

public function testTerceraDivision()
{
    $calificacion = new Calificacion(33);
    $this->assertEquals("Tercera Division!", $calificacion->calificacion());

    $calificacion = new Calificacion(44);
    $this->assertEquals("Tercera Division!", $calificacion->calificacion());
}

public function testMyReprendido()
{
    $calificacion = new Calificacion(32);
    $this->assertEquals("Reprendido!", $calificacion->calificacion());

    $calificacion = new Calificacion(0);
    $this->assertEquals("Reprendido!", $calificacion->calificacion());
}


 //using new version 9.3 and above method (dataProvider)
 public static function reprendido(): array
 {
     $calificacion1 = new Calificacion(0);
     $calificacion2 = new Calificacion(20);
     $calificacion3 = new Calificacion(32);

     return [[$calificacion1], [$calificacion2], [$calificacion3]];
 }

 #[DataProvider("reprendido")]
 public function testReprendido(Calificacion $calificacion)
 {
     $this->assertSame("Reprendido!", $calificacion->calificacion());
 }




 public static function primeraDivision(): array
    {
        $calificacion1 = new Calificacion(60);
        $calificacion2 = new Calificacion(80);
        $calificacion3 = new Calificacion(100);

        return [[$calificacion1], [$calificacion2], [$calificacion3]];
    }

    #[DataProvider("primeraDivision")]
    public function testPrimeraDivision(Calificacion $calificacion)
    {
        $this->assertSame($calificacion->calificacion(), "Primera Division!");
    }






}





?>

