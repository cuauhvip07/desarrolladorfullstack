<?php

use App\Propiedad;

    require '../../includes/app.php';
    // Checar que haya hecho el logging;
    estadoAutenticado();
    // Validar que sea un Id valido
    $id = $_GET['id'];
    $id = filter_var($id,FILTER_VALIDATE_INT);
    
    if(!$id){
        header('Location: /admin');
    }

    $propiedad = Propiedad::find($id);

    // Arreglo con mensajes de errores
    $errores = [];

    $titulo = $propiedad->titulo;
    $precio = $propiedad->precio;
    $descripcion = $propiedad->descripcion;
    $habitaciones = $propiedad->habitaciones;
    $wc = $propiedad->wc;
    $estacionamiento = $propiedad->estacionamiento;
    $idvendedor = $propiedad->idvendedor;
    $creado = $propiedad->creado;
    $imagenPropiedad = $propiedad->imagen;

    // Ejecutar el codigo despues de que el user envia el form
    if($_SERVER["REQUEST_METHOD"] === 'POST'){
        // Asignar los atributos
        $args = $_POST['propiedad'];
        
        $propiedad->sincronizar($args);
        debuggear($propiedad);
        $imagen = $_FILES['imagen'];

        if(!$titulo){
            $errores [] = 'Debes añadir un titulo';
        }
        if(!$precio){
            $errores[] = 'El precio es obligatorio';
        }

        if(strlen($descripcion) < 10){
            $errores[] = 'La descripcion es obligatorio y debe contener mas de 10 caracteres';
        }

        if(!$habitaciones){
            $errores[] = 'El numero de habitaciones es obligatorio';
        }

        if(!$wc){
            $errores[] = 'El numero de baños es obligatorio';
        }

        if(!$estacionamiento){
            $errores[] = 'El numero de estacionamientos es obligatorio';
        }

        if(!$idvendedor){
            $errores[] = 'Debe de seleccionar un vendedor';
        }

        // Validar por tamaño (1000 kb = 1mb maximo )
        $medida = 1000 * 1000;
        if($imagen['size'] > $medida){
            $errores[] = 'La imagen es muy pesada';
        }



        if(empty($errores)){
            /* Subida de archivos */

            // Crear carpeta
            $carperaImagenes = '../../imagenes/';
            // is_dir saber si hay una carpeta o no 
            if(!is_dir($carperaImagenes)){ 
                // mkdir crea una carpeta
                mkdir($carperaImagenes); 
            }

            $nombreImagen = '';

            if($imagen['name']){
                // Eliminar la imagen previa
                unlink($carperaImagenes.$propiedad['imagen']);

                //Genera un nombre unico 
                // md5 -> Crea un hash estatico    rand -> Hace que sea aleatorio  
                //uniqid -> Unico
                $nombreImagen = md5(uniqid(rand(),true)).".jpg"; 
                // var_dump($nombreImgen);

                // Subir la imagen 
                // Mueve el archivo de la memoria hacia la carpeta
                move_uploaded_file($imagen['tmp_name'],$carperaImagenes.$nombreImagen); 
            } else{
                $nombreImagen = $propiedad['imagen'];
            }


            // Insersion a la base da datos
            $query = "UPDATE propiedades SET titulo = '{$titulo}', precio = '{$precio}',imagen = '{$nombreImagen}', descripcion = '{$descripcion}', habitaciones = {$habitaciones}, wc = {$wc}, estacionamiento = {$estacionamiento}, idvendedor = {$idvendedor} WHERE id = {$id} ";
            $resultado = mysqli_query($db,$query);
            if($resultado){
                // Redireccionar al usuario 
                header('Location: /admin?resultado=2');
            }
        }

        // Query
        
    }

    
    
    incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Actualizar Propiedad</h1>
        <a href="/admin/" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error):?>
            <div class="alerta error">
                <?php echo $error?>
            </div>
        <?php endforeach;?>

        <form class="formulario" method="POST" enctype="multipart/form-data">
            <?php include '../../includes/templates/formulario_propiedades.php';?>
            <input type="submit" value="Actualizar Propiedad" class="boton boton-verde">
        </form>
    </main>

<?php    incluirTemplate('footer'); ?>