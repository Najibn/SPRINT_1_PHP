<?php
include "class.php";

  $animal1 = new Animal("horse", 12,"andalucian");
  $animal2 = new Animal("dog", 8,"German Shepherd");
  $animal3 = new Animal("dog", 8,"british shorthair");

  echo   $animal1 ->__toString();
  echo   $animal2;
  echo   $animal3;


?>
