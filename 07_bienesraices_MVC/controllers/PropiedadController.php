<?php

namespace Controllers;
use MVC\Router;
use Model\Propiedad;
use Model\Vendedor;

class PropiedadController{

   
    // Se manda a llamar desde el index de public con el router
    // El Router se pone en el metodo para tener viva la referencia del $router declarado en el index de public
    public static function index(Router $router){
        $propiedades = Propiedad::all();
        $resultado = null;
        $router->view('propiedades/admin',[
            'propiedades' => $propiedades,
            'resultado' => $resultado
        ]);
    }

    public static function crear(Router $router){
        $propiedad = new Propiedad;
        $vendedores = Vendedor::all();
        $router->view('propiedades/crear',[
            'propiedad'=>$propiedad,
            'vendedores'=>$vendedores
        ]);
    }

    public static function actualizar(){
        echo "Metodo actualizar";
    }
}