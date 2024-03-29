<?php 
declare(strict_types = 1);
include 'includes/header.php';

// Definir una clase
class Producto{
    // public $nombre;
    // public $precio;
    // public $disponible;

    public function __construct(public string $nombre,public int $precio, public bool $disponible){
        // $this -> nombre = $nombre;
        // $this -> precio = $precio;
        // $this -> disponible = $diponible;
    }

    public function mostrarProducto(){
        echo "El producto es: ".$this -> nombre." y su precio es de: ".$this -> precio;
    }
}

$producto = new Producto('Tablet',200,true);
// $producto -> nombre = 'Comida';
// $producto -> precio = 200;    Manera para poder llenar info
// $producto -> disponible = true;

$producto -> mostrarProducto();

echo "<pre>";
var_dump($producto -> nombre);
var_dump($producto -> precio);
var_dump($producto -> disponible);
var_dump($producto);
echo "</pre>";


include 'includes/footer.php';