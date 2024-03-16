<?php 

namespace MVC;

class Router{
    // Se van guardando las rutas get
    public $rutasGET = [];
    public $rutasPOST = [];

    // Le pasan la url y la funcion
    public function get($url,$fn){
        $this->rutasGET[$url] = $fn;
    }


    public function comprobarRutas(){
        // Nos da las extensiones de las paginas
        $urlActual = $_SERVER['PATH_INFO'] ?? '/';
        $metodo = $_SERVER['REQUEST_METHOD'];
        

        if($metodo === 'GET'){
            // Guardamos en fn la informacion de la url
            $fn = $this->rutasGET[$urlActual] ?? null;
        }

        if($fn){
            // La url existe y tiene una funcion asociada

            // Nos permite llamar una funcion cuando no sabemos como se llama esa funcion
            call_user_func($fn,$this);
        }else{
            echo "Error 404";
        }
    }

    // Muestra una vista
    public function view($vista){
        include __DIR__."/views/$vista.php";
    }
}