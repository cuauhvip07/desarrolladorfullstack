<?php 

namespace Controllers;

use MVC\Router;
use Model\Propiedad;

class PaginasController{

    public static function index(Router $router){
        $propiedades = Propiedad::get(3);
        $inicio = true;
        $router->view('/paginas/index',[
            'propiedades' => $propiedades,
            'inicio' => $inicio
        ]);
    }

    public static function propiedades(Router $router){
        $propiedades = Propiedad::all();
        $router->view('paginas/propiedades',[
            'propiedades' => $propiedades
        ]);
    }

    public static function nosotros(Router $router){
        $router->view('paginas/nosotros');
    }

    public static function propiedad(Router $router){
       $id = validarRedireccionar('/propiedades');

       // Buscar la propiedad por el id
       $propiedad = Propiedad::find($id);

        $router->view('paginas/propiedad',[
            'propiedad' => $propiedad
        ]);
    }

    public static function blog(Router $router){
        $router->view('paginas/blog');
    }

    public static function entrada(Router $router){
        $router->view('paginas/entrada');
    }

    public static function contacto(Router $router){
        echo "DEsde contacto";
    }

   

    
}