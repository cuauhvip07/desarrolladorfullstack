<?php

namespace Controllers;
use MVC\Router;
use Model\Vendedor;

class VendedoresController{

    public static function crear(Router $router){
        estadoAutenticado();

        $vendedor = new Vendedor;

        $errores = Vendedor::getErrores();

        if($_SERVER["REQUEST_METHOD"] === 'POST'){

            // Crear nueva instancia
            $vendedor = new Vendedor($_POST['vendedor']);
            
            // Validar no haya campos vacios
            $errores = $vendedor->validar();

            if(empty($errores)){
                $vendedor->guardar();
            }

        }

        $router->view('vendedores/crear',[
            'errores' => $errores,
            'vendedor' => $vendedor
        ]);
    }

    public static function actualizar(Router $router){
        estadoAutenticado();

        // Validar que sea un id valido
        $id = $_GET['id'];
        $id = filter_var($id,FILTER_VALIDATE_INT);
        if(!$id){
            header('Location: /admin');
        }
        // Obtener el arreglo de vendedor
        $vendedor = Vendedor::find($id);


        $errores = Vendedor::getErrores();

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            // Asignar los valores
            $args = $_POST['vendedor'];

            $vendedor->sincronizar($args);

            // Validacion 
            $errores = $vendedor->validar();

            if(empty($errores)){
                $vendedor->guardar();
            }

        }

        $router->view('vendedores/actualizar',[
            'errores' => $errores,
            'vendedor' => $vendedor
        ]);
    }

    public static function eliminar(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $id = $_POST['id'];
            $id = filter_var($id,FILTER_VALIDATE_INT);
            
            if($id){
    
                $tipo = $_POST['tipo'];
                
                if(validarTipoContenido($tipo)){
                   
                    $vendedor = Vendedor::find($id);
                    $vendedor->eliminar();
                }
                
            }
        }  
    }
}