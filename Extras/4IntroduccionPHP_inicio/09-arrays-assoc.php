<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium',
        'disponible' => '100 USD'
    ]
    ];
echo "<pre>";
var_dump($cliente); 
echo ($cliente['nombre']); // Acceder a la informacion 
echo ($cliente['informacion']['disponible']); // Acceder al segundo arreglo
echo "</pre>";

include 'includes/footer.php';