<?php include 'includes/header.php';

$nombreCliente = "  Juan Pablo  ";
echo strlen($nombreCliente); // Conocer la extension

$texto = trim($nombreCliente); // Borra espacios en blanco
echo $texto; 

echo strtoupper($nombreCliente); // Mayusculas
echo strtolower($nombreCliente); // Minusculas

$nombreCliente2 = 'Sebastian';
echo str_replace('Cebastian','J',$nombreCliente2); // Cambiar

echo strpos($nombreCliente2,'Sebastian'); // Posicion donde se encuentra


$tipoCliente = 'Premium';
echo 'El cliente'.$texto.' es '.$tipoCliente; // Concatenacion 1

echo "El cliente {$nombreCliente} es {$tipoCliente}"; // Concatenacion 2

include 'includes/footer.php';