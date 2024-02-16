<?php include 'includes/header.php';

$autenticado = false;
$admin = true;
if($autenticado || $admin){
    echo 'Usuario autenticado correctamente';
}else{
    echo 'Usuario no autenticado';
}

// if anidados..
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 0,
    'informacion' => [
        'tipo' => 'premium'
    ]
];

echo "<br>";
if(!empty($cliente)){
    echo 'El arreglo cliente NO esta vacio';

    if($cliente['saldo'] > 0){
        echo 'Saldo disponible';
    }else{
        echo 'Saldo NO disponible';
    }
}
else{
    echo 'El arreglo cliente esta vacio';
}

// else if
if($cliente['saldo'] > 0){
    echo 'Tiene saldo';
} else if($cliente['informacion']['tipo'] === 'premium'){
    echo 'Cliente premium';
}else{
    echo 'Ninguna de la anteriores';
}

echo "<br>";
// switch 
$tecnologia = 'Python';
switch($tecnologia){
    case 'PHP':
        echo 'PHP, es un lenguaje excelente';
        break;
    case 'Python':
        echo 'Lenguaje Python';
        break;
    default:
    echo 'Debe de ser otro lengiaje';
};

include 'includes/footer.php';