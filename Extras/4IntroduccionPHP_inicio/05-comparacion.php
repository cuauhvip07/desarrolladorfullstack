<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = '30';

var_dump($numero1 > $numero2);
var_dump($numero3 === $numero4);
var_dump($numero2 >= $numero3);
// -1 Si izquierda es menor, 0 si es igual y 1 si izquierda es mayor
var_dump($numero1 <=> $numero2);
var_dump($numero3 <=> $numero2);




include 'includes/footer.php';