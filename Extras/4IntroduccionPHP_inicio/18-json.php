<?php include 'includes/header.php';


$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Televisión',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'USB',
        'precio' => 50,
        'disponible' => false
    ]
];

echo "<pre>";
var_dump($productos);
echo "</pre>";

// JSON_UNESCAPED_UNICODE -> Puedes usar asentos
// De un arreglo asociativo a un string
$json = json_encode($productos,JSON_UNESCAPED_UNICODE);
var_dump($json);
echo "<br>";
// De un string a un arreglo asociativo
$json_array = json_decode($json);
echo "<pre>";
var_dump($json_array);
echo "</pre>";





include 'includes/footer.php';