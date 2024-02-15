<?php include 'includes/header.php';

$carrito = ['Tablet','Celular','TV'];

// Acceder a un elemento del array 
var_dump($carrito[0]);

$carrito[3] = 'Nuevo producto'; // Agregar un elemento 



// Añadir un elemento nuevo al FINAL 
array_push($carrito,'Audifonos');

// Añadir al inicio 
array_unshift($carrito,'SmartWatch');

// Util para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

include 'includes/footer.php';