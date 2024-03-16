<?php

namespace Controllers;
use MVC\Router;

class PropiedadController{
    // Se manda a llamar desde el index de public con el router
    // El Router se pone en el metodo para tener viva la referencia del $router declarado en el index de public
    public static function index(Router $router){
        $router->view('propiedades/admin');
    }

    public static function crear(){
        echo 'Funcion crear';
    }

    public static function actualizar(){
        echo "Metodo actualizar";
    }
}