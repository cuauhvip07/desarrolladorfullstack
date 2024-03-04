<?php 
declare(strict_types = 1);
include 'includes/header.php';

// Metodos estaticos

// Definir una clase
class Producto{

    public $imagen;
    public static $imagenPlaceHolder = "Imagen.jpg";

    public function __construct(protected string $nombre,public int $precio, public bool $disponible, string $imagen )
    {
        if($imagen){
            self::$imagenPlaceHolder = $imagen;
        }
    }

    // Metodo estatico
    public static function obtenerImagenProducto()
    {
        return self::$imagenPlaceHolder;
    }
    public static function obtenerProducto()
    {
        echo "Obteniendo datos del producto";
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

$producto = new Producto('Tablet',200,true,'');
echo $producto::obtenerImagenProducto();



echo "<pre>";
var_dump($producto);
echo "</pre>";
$producto2 = new Producto('Tablet',200,true,'Monitor_curvo.jpg');
echo $producto2::obtenerImagenProducto();


include 'includes/footer.php';