<?php 



namespace App;

class Propiedad{
    // Base de datos
    protected static $db;
    protected static $columnaDB = ['id','titulo','precio','imagen','descripcion','habitaciones','wc','estacionamiento','creado','idvendedor'];

    // Errores
    protected static $errores = [];


    public $id;
    public $titulo;
    public $precio;
    public $imagen;
    public $descripcion;
    public $habitaciones;
    public $wc;
    public $estacionamiento;
    public $creado;
    public $idvendedor;

    // Definir la conexion a la bd
    public static function setDB($database){
        self::$db = $database;
    }

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? '';
        $this->titulo = $args['titulo'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->habitaciones = $args['habitaciones'] ?? '';
        $this->wc = $args['wc'] ?? '';
        $this->estacionamiento = $args['estacionamiento'] ?? '';
        $this->creado = date('Y/m/d');
        $this->idvendedor = $args['idvendedor'] ?? '';
    }

    public function guardar(){

        // Sanitizar los datos
        $atributos = $this->sanitizarDatos();
        

        $query = "INSERT INTO propiedades (";
        $query .=join(',',array_keys($atributos));
        $query .= " ) VALUES ('";
        $query .= join("', '",array_values($atributos));
        $query .= " ')";


       $resultado = self::$db->query($query);

       return $resultado;
    }

    // Identificar y unir los atributos a la bd
    public function atributos(){
        $atributos = [];
        foreach(self::$columnaDB as $columna){
            if($columna == 'id') continue;
            $atributos[$columna] = $this->$columna;
        }
        return $atributos;
    }

    public function sanitizarDatos(){
        $atributos = $this->atributos();
        $sanitizado = [];
        

        foreach($atributos as $key => $value){
            $sanitizado[$key] = self::$db->escape_string($value);
        }

        return $sanitizado;
    }

    // Subida de archivos
    public function setImagen($imagen){
        if($imagen){
            $this->imagen = $imagen;
        }
    }

    // Validacion
    public static function getErrores(){
        return self::$errores;
    }

    public function validar(){
        if(!$this->titulo){
            self::$errores [] = 'Debes añadir un titulo';
        }
        if(!$this->precio){
            self::$errores[] = 'El precio es obligatorio';
        }

        if(strlen($this->descripcion) < 10){
            self::$errores[] = 'La descripcion es obligatorio y debe contener mas de 10 caracteres';
        }

        if(!$this->habitaciones){
            self::$errores[] = 'El numero de habitaciones es obligatorio';
        }

        if(!$this->wc){
            self::$errores[] = 'El numero de baños es obligatorio';
        }

        if(!$this->estacionamiento){
            self::$errores[] = 'El numero de estacionamientos es obligatorio';
        }

        if(!$this->idvendedor){
            self::$errores[] = 'Debe de seleccionar un vendedor';
        }

        if(!$this->imagen){
            self::$errores[] = 'La imagen es obligatoria';
        }

        

        return self::$errores;

    }

    
}