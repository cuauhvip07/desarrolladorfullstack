<?php include 'includes/header.php';

// in_array -> Buscar elementos en un arreglo - Bool
$carrito = ['Tablet','Computadora','TV'];
var_dump(in_array('Tablet',$carrito));

// Ordenar elementos de un arreglo 
$numeros = [4,5,2,8,1];
// Sort -> Ordenar de MENOR a MAYOR
sort($numeros);
echo "<pre>";
var_dump($numeros);
echo "</pre>";

// rsort -> Ordenar de MAYOR A MENOR
rsort($numeros);
echo "<pre>";
var_dump($numeros);
echo "</pre>";


// Ordenar arreglo asociativo
// asort -> Ordena por los valores -> Primero numeros y despues valores por orden alfabetico
$cliente = [
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Juan'
];
asort($cliente);
echo "<pre>";
var_dump($cliente);
echo "</pre>";

// arsort -> Ordena los valores -> Primero valors y despues numeros (Z) primero
arsort($cliente);
echo "<pre>";
var_dump($cliente);
echo "</pre>";

// ksort -> Ordena los valores por llaves -> Orden alfabetico
ksort($cliente);
echo "<pre>";
var_dump($cliente);
echo "</pre>";

// krsort -> Orden alfabetico empezando por la Z
krsort($cliente);
echo "<pre>";
var_dump($cliente);
echo "</pre>";


include 'includes/footer.php';