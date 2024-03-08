<?php
    // Autenticacion 
    require '../../includes/app.php';
    use App\Propiedad;
    use Intervention\Image\ImageManager ;
    $imageManager = new ImageManager();

    
    
    
    // Checar que haya hecho el logging;
    estadoAutenticado();

    //base de datos
    $db = conectardb();
    
    // Consultar para tener los vendedores;
    $consulta = "SELECT * FROM vendedores;";
    $resultado = mysqli_query($db,$consulta);


    // Arreglo con mensajes de errores
    $errores = Propiedad::getErrores();
    // debuggear($errores);

    $titulo = '';
    $precio = '';
    $descripcion = '';
    $habitaciones = '';
    $wc = '';
    $estacionamiento = '';
    $idvendedor = '' ?? null;
    $creado = date('Y/m/d');

    // Ejecutar el codigo despues de que el user envia el form
    if($_SERVER["REQUEST_METHOD"] === 'POST'){
        // Crea una nueva instancia
        $propiedad = new Propiedad($_POST);

        

        //Genera un nombre unico 
        // md5 -> Crea un hash estatico    rand -> Hace que sea aleatorio  
        //uniqid -> Unico
        $nombreImgen = md5(uniqid(rand(),true)).".jpg"; 

        // Subir la imagen 
        // Realiza un resize a la imagen con intervetion
        if($_FILES['imagen']['tmp_name']){
            $image = $imageManager->make($_FILES['imagen']['tmp_name'])->fit(800,600);
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
            $resultado = $propiedad -> guardar();

            // Mensaje de exito o erro
            if($resultado){
                // Redireccionar al usuario 
                header('Location: /admin?resultado=1');
            }
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
            <fieldset>
                <legend>Información general de nuestra propiedad</legend>
                <label for="titulo">Titulo:</label>
                <input name="titulo" type="text" id="titulo" placeholder="Titulo propiedad" value="<?php echo $titulo; ?>">

                <label for="precio">Precio:</label>
                <input name="precio" type="number" placeholder="Precio propiedad" id="precio" value="<?php echo $precio; ?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

                <label for="descripcion">Descripcion:</label>
                <textarea name="descripcion" id="descripcion" cols="30" rows="10" placeholder="Mi propiedad......"><?php echo $descripcion; ?></textarea>
            </fieldset>

            <fieldset>
                <legend>Información Propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input name="habitaciones" type="number" id="habitaciones" placeholder="Ej: 2" min="1" max="9" value="<?php echo $habitaciones; ?>">

                <label for="wc">Baños:</label>
                <input name="wc" type="number" id="wc" placeholder="Ej: 2" value="<?php echo $wc; ?>">

                <label for="estacionamiento">Estacionamiento:</label>
                <input name="estacionamiento" type="number" placeholder="Ej: 2" id="estacionamiento" value="<?php echo $estacionamiento; ?>">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="idvendedor" >
                    <option value="" disabled selected> -- Seleccionar -- </option>
                    <?php while($row = mysqli_fetch_assoc($resultado)): ?>
                        <option <?php echo $idvendedor === $row['id']? 'selected' : ''; ?> value="<?php echo $row['id'];?>"> <?php echo $row['nombre']." ".$row['apellido']; ?> </option>
                    <?php endwhile; ?>
                </select>
            </fieldset>

            <input type="submit" value="Crear propiedad" class="boton boton-verde">
        </form>
    </main>

<?php    incluirTemplate('footer'); ?>