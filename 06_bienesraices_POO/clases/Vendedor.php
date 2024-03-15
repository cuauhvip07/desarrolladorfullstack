<?php

namespace App;

class Vendedor extends ActiveRecord{
    protected static $tabla = 'vendedores';
    protected static $columnaDB = ['id','nombre','apellido','telefono'];

    public $id;
    public $nombre;
    public $apellido;
    public $telefono;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        
    }

    public function validar(){
        if(!$this->nombre){
            self::$errores [] = 'El nombre es obligatorio';
        }
        if(!$this->apellido){
            self::$errores[] = 'El apellido es obligatorio';
        }

        if(!$this->telefono){
            self::$errores[] = 'El numero telefonico es obligatorio';
        }
        // preg_match -> expresion regular 
        if(!preg_match('/[0-9]{10}/',$this->telefono)){
            self::$errores[] = 'Formato del telefono no valido';
        }

        return self::$errores;

    }
}