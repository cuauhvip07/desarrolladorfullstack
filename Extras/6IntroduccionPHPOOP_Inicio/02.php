<?php 
declare(strict_types = 1);
include 'includes/header.php';

// Definir una clase
class Producto{
    // Public se puede acceder y modiicar en cualquier lugar
    // Protected - Se puede acceder / modoficar unnicamente en la clase
    // Private - Solo miembros de la misma clase puede acceder a el

    public function __construct(protected string $nombre,public int $precio, public bool $disponible)
    {
    }

    public function mostrarProducto(){
        echo "El producto es: ".$this -> nombre." y su precio es de: ".$this -> precio;
    }

    // Encapsulamiento Set
    public function getNombre() : string{
        return $this -> nombre;
    }

    public function setNombre(string $nombre){
        $this -> nombre = $nombre;
    }
}

$producto = new Producto('Tablet',200,true);

echo $producto -> setNombre('Compu');
echo $producto -> getNombre();

echo "<pre>";
var_dump($producto);
echo "</pre>";


include 'includes/footer.php';