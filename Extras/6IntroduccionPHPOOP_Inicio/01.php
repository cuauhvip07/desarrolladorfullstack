<?php include 'includes/header.php';

// Definir una clase
class Producto{
    public $nombre;
    public $precio;
    public $disponible;


}

$producto = new Producto();
$producto -> nombre = 'Comida';
$producto -> precio = 200;
$producto -> disponible = true;

echo "<pre>";
var_dump($producto -> nombre);
var_dump($producto -> precio);
var_dump($producto -> disponible);
echo "</pre>";


include 'includes/footer.php';