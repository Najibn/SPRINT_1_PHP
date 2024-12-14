
<?php
 include 'employerClass.php';

$employ1 = new Empleado("simon", 6500);
$employ2 = new Empleado("ainoa", 5000);


$employ1->emp_impuestos();
$employ2->emp_impuestos();

?>
