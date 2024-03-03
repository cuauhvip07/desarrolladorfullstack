<?php 
declare(strict_types = 1);
include 'includes/header.php';

// Definir una clase
class Producto{
    public $nombre;
    public $precio;
    public $disponible;

    public function __construct(string $nombre,int $precio, bool $diponible){
        $this -> nombre = $nombre;
        $this -> precio = $precio;
        $this -> disponible = $diponible;
    }
}

$producto = new Producto('Tablet',200,true);
// $producto -> nombre = 'Comida';
// $producto -> precio = 200;    Manera para poder llenar info
// $producto -> disponible = true;

echo "<pre>";
var_dump($producto -> nombre);
var_dump($producto -> precio);
var_dump($producto -> disponible);
var_dump($producto);
echo "</pre>";


include 'includes/footer.php';