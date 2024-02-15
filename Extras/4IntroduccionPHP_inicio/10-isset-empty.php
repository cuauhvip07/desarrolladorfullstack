<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro','Juan','Karen');
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200
];

// Empty -> Revisa si un arreglo esta vacio -> bool
var_dump(empty($clientes)); // empty -> Conocer si el arreglo esta vacio
var_dump(empty($clientes3));

// Isset -> Revisar si un arreglo esta creado o esta definido -> bool
var_dump(isset($clientes4)); // No existe clientes4
var_dump(isset($clientes)); // Aunque no tenga valor si existe

// Revisar si existe una propiedad de un arreglo asociativo existe
var_dump(isset($cliente['nombre'])); 


include 'includes/footer.php';