<?php

namespace Controllers;
use MVC\Router;
use Model\Propiedad;
use Model\Vendedor;
use Intervention\Image\ImageManager;



class PropiedadController{

   
    // Se manda a llamar desde el index de public con el router
    // El Router se pone en el metodo para tener viva la referencia del $router declarado en el index de public
    public static function index(Router $router){
        $propiedades = Propiedad::all();
        // Muestra un mensaje condional
        $resultado = $_GET['resultado'] ?? null;
        $router->view('propiedades/admin',[
            'propiedades' => $propiedades,
            'resultado' => $resultado
        ]);
    }

    public static function crear(Router $router){
        $imageManager = new ImageManager();
        $propiedad = new Propiedad;
        $vendedores = Vendedor::all();

        $errores = Propiedad::getErrores();

        if($_SERVER["REQUEST_METHOD"] === 'POST'){
            
            // Crea una nueva instancia
            $propiedad = new Propiedad($_POST['propiedad']);

            

            //Genera un nombre unico 
            // md5 -> Crea un hash estatico    rand -> Hace que sea aleatorio  
            //uniqid -> Unico
            $nombreImgen = md5(uniqid(rand(),true)).".jpg"; 

            // Subir la imagen 
            // Realiza un resize a la imagen con intervetion
            if($_FILES['propiedad']['tmp_name']['imagen']){
                $image = $imageManager->make($_FILES['propiedad']['tmp_name']['imagen'])->fit(800,600);
                $propiedad->setImagen($nombreImgen);
            }


            $errores = $propiedad->validar();
       
            if(empty($errores)){

            
                // Crear carpeta
                // is_dir saber si hay una carpeta o no 
                if(!is_dir(CARPETA_IMAGENES)){ 
                    // mkdir crea una carpeta
                    mkdir(CARPETA_IMAGENES); 
                }
                $image->save(CARPETA_IMAGENES.$nombreImgen);

                // Guarda en la base de datos
                $propiedad -> guardar();

            
            }

        }   


        $router->view('propiedades/crear',[
            'propiedad'=>$propiedad,
            'vendedores'=>$vendedores,
            'errores' => $errores
        ]);
    

        

    }

    public static function actualizar(){
        echo "Metodo actualizar";
    }
}