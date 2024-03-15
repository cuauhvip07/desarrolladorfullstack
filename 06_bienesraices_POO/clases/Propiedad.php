<?php 



namespace App;


class Propiedad extends ActiveRecord{
    protected static $columnaDB = ['id','titulo','precio','imagen','descripcion','habitaciones','wc','estacionamiento','creado','idvendedor'];
    protected static $tabla = 'propiedades';

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

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
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