<?php
namespace App\nivell1_2_phpunit_dataProvider;

class Calificacion
{

  private $grade;

  public function __construct(int $grade)
  {
    $this->grade = $grade;
  }

  public function setNum($grade)
  {
    $this->grade = $grade;
  }


  public function calificacion()
  {
    if ($this->grade >= 60) {
      return "Primera Division!";
    } elseif ($this->grade >= 45) {
      return "Segunda Division!";
    } elseif ($this->grade >= 33) {
      return "Tercera Division!";
    } else {
      return "Reprendido!";
    }
  }
}
?>
