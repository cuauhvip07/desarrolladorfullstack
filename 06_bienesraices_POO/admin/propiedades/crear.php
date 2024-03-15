<?php
    // Autenticacion 
    require '../../includes/app.php';
    use App\Propiedad;
    use App\Vendedor;
    use Intervention\Image\ImageManager ;
    $imageManager = new ImageManager();

    // Checar que haya hecho el logging;
    estadoAutenticado();

    $propiedad = new Propiedad;

    // Consulta para obtener todos los vendedores
    $vendedores = Vendedor::all();
    

    // Arreglo con mensajes de errores
    $errores = Propiedad::getErrores();
   
    // Ejecutar el codigo despues de que el user envia el form
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

        // Query
        
    }

    incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Crear</h1>
        <a href="/admin/" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error):?>
            <div class="alerta error">
                <?php echo $error?>
            </div>
        <?php endforeach;?>

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
            <?php include '../../includes/templates/formulario_propiedades.php';?>

            <input type="submit" value="Crear propiedad" class="boton boton-verde">
        </form>
    </main>

<?php    incluirTemplate('footer'); ?>