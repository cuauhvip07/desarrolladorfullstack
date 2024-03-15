<?php 

namespace App;

class ActiveRecord{
    // Base de datos
    protected static $db;
    protected static $columnaDB = [];
    protected static $tabla = '';

    // Errores
    protected static $errores = [];

    // Definir la conexion a la bd
    public static function setDB($database){
        self::$db = $database;
    }

    

    public function guardar(){
        if(!is_null($this->id)){
            $this->actualizar();
        }else{ 
            // Creando un nuevoregistro
            $this->crear();
        }
    }

    public function actualizar(){
        // Sanitizar los datos
        $atributos = $this->sanitizarDatos();

        $valores = [];
        foreach($atributos as $key=>$value){
            $valores [] = "{$key}='{$value}'";
        }

        $query = "UPDATE ". static::$tabla. " SET ";
        $query .= join(', ',$valores);
        $query .= " WHERE id = '".self::$db->escape_string($this->id)."' ";
        $query .= "LIMIT 1;";

        $resultado = self::$db->query($query);

    if($resultado){
            // Redireccionar al usuario 
            header('Location: /admin?resultado=2');
        }
    }


    public function crear(){

        // Sanitizar los datos
        $atributos = $this->sanitizarDatos();
        

        $query = "INSERT INTO ".static::$tabla." (";
        $query .=join(',',array_keys($atributos));
        $query .= " ) VALUES ('";
        $query .= join("', '",array_values($atributos));
        $query .= " ')";


        $resultado = self::$db->query($query);

    // Mensaje de exito o erro
        if($resultado){
            header('Location: /admin?resultado=1');
        }
    }

    // Identificar y unir los atributos a la bd
    public function atributos(){
        $atributos = [];
        foreach(static::$columnaDB as $columna){
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
        if(!is_null($this->id)){
            $this->borrarImagen();
        }

        if($imagen){
            $this->imagen = $imagen;
        }
    }

    // Validacion
    public static function getErrores(){
        return static::$errores;
    }

    public function validar(){
    
        static::$errores = [];
        return static::$errores;
    }

    // Listar todas las propiedades;
    public static function all(){
        $query = "SELECT * FROM ". static::$tabla;
        $resultado = self::consultarSQL($query);
        return $resultado;
    }

    // Busca un registro por su id
    public static function find($id){
        $query = "SELECT * FROM ".static::$tabla." WHERE id={$id}";
        $resultado = self::consultarSQL($query);
        return array_shift($resultado);
        
    }

    public static function consultarSQL($query){
        // Consultar la bd
        $resultado = self::$db->query($query);

        // Iterar los resultados
        $array = [];
        while($registro = $resultado->fetch_assoc()){
            $array[] = static::crearObjeto($registro);
        }
        
        // Liberar la memoria
        $resultado->free();

        // Retornar los resultados
        return $array;
    }

    protected static function crearObjeto($registro){
        $objeto = new static;
    
        foreach($registro as $key => $value){
        if(property_exists($objeto, $key)){  
            $objeto->$key = $value;
        }
        }

        return $objeto;
    }

    // Sincroniza el objeto en memoria con los cambios realizados por el usaurio
    public function sincronizar( $args = [] ){
        foreach($args as $key => $value){
            if(property_exists($this,$key) && !is_null($value)){
                $this->$key = $value;
            }
        }
    }

    // Eliminar
    public function eliminar(){
        $query = "DELETE FROM ". static::$tabla." WHERE id = ".self::$db->escape_string($this->id)." LIMIT 1;";
        $resultado = self::$db->query($query);
        
        if($resultado){
            $this->borrarImagen();
            header('Location: /admin?resultado=3');
        }
    }

    private function borrarImagen(){
        // Elimina la imagen previa
        if(!is_null($this->id)){
            // comprobar si existe el existe
            $existeArchivo = file_exists(CARPETA_IMAGENES.$this->imagen);
            
            if($existeArchivo){
                unlink(CARPETA_IMAGENES.$this->imagen);
            }
        }
    }
}