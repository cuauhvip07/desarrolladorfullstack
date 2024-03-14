<?php
 require '../../includes/app.php';
use App\Propiedad;
use Intervention\Image\ImageManager ;
$imageManager = new ImageManager();

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
    $errores = Propiedad::getErrores();
    

    // Ejecutar el codigo despues de que el user envia el form
    if($_SERVER["REQUEST_METHOD"] === 'POST'){
        // Asignar los atributos
        $args = $_POST['propiedad'];
        
        
        $propiedad->sincronizar($args);
        // Validacion 
        $errores = $propiedad->validar();

        // Subida de archivos
        $nombreImagen = md5(uniqid(rand(),true)).".jpg"; 
        if($_FILES['propiedad']['tmp_name']['imagen']){
            $image = $imageManager->make($_FILES['propiedad']['tmp_name']['imagen'])->fit(800,600);
            $propiedad->setImagen($nombreImagen);
        }


        if(empty($errores)) {
            //Almacenar la imagen
            if(isset($image)) {
                $image ->save(CARPETA_IMAGENES.$nombreImagen);
            }
            //Guardar los datos de la propiedad
            $propiedad->guardar();
        }

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