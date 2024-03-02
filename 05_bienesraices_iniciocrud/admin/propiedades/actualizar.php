<?php 
    require '../../includes/funciones.php';
    // Checar que haya hecho el logging;
    $auth = estadoAutenticado();
    if(!$auth){
        header('Location: /');
    }
    // Validar que sea un Id valido
    $id = $_GET['id'];
    $id = filter_var($id,FILTER_VALIDATE_INT);
    
    if(!$id){
        header('Location: /admin');
    }

    //base de datos
    require '../../includes/config/database.php';
    $db = conectardb();

    // Obtener los datos de la propiedad;
    $consulta = "SELECT * FROM propiedades WHERE id={$id}";
    $resultado = mysqli_query($db,$consulta);
    $propiedad = mysqli_fetch_assoc($resultado);
    
    
    // Consultar para tener los vendedores;
    $consulta = "SELECT * FROM vendedores;";
    $resultado = mysqli_query($db,$consulta);


    // Arreglo con mensajes de errores
    $errores = [];

    $titulo = $propiedad['titulo'];
    $precio = $propiedad['precio'];
    $descripcion = $propiedad['descripcion'];
    $habitaciones = $propiedad['habitaciones'];
    $wc = $propiedad['wc'];
    $estacionamiento = $propiedad['estacionamiento'];
    $idvendedor = $propiedad['idvendedor'];
    $creado = $propiedad['creado'];
    $imagenPropiedad = $propiedad['imagen'];

    // Ejecutar el codigo despues de que el user envia el form
    if($_SERVER["REQUEST_METHOD"] === 'POST'){
        // echo "<pre>";
        // var_dump($_FILES);
        // echo "</pre>";

        // Asignar files hacia una variables
        $imagen = $_FILES['imagen'];

        $titulo = mysqli_real_escape_string($db, $_POST["titulo"]);
        $precio = mysqli_real_escape_string($db, $_POST["precio"]);
        $descripcion = mysqli_real_escape_string($db, $_POST["descripcion"]);
        $habitaciones = mysqli_real_escape_string($db, $_POST["habitaciones"]);
        $wc = mysqli_real_escape_string($db, $_POST["wc"]);
        $estacionamiento = mysqli_real_escape_string($db, $_POST["estacionamiento"]);
        $idvendedor = mysqli_real_escape_string($db, $_POST["vendedor"] ?? 0);

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
            <fieldset>
                <legend>Información general de nuestra propiedad</legend>
                <label for="titulo">Titulo:</label>
                <input name="titulo" type="text" id="titulo" placeholder="Titulo propiedad" value="<?php echo $titulo; ?>">

                <label for="precio">Precio:</label>
                <input name="precio" type="number" placeholder="Precio propiedad" id="precio" value="<?php echo $precio; ?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

                <img class="imagen-small" src="/imagenes/<?php echo $imagenPropiedad?>" alt="Imagen propiedad">

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

                <select name="vendedor" >
                    <option value="" disabled selected> -- Seleccionar -- </option>
                    <?php while($row = mysqli_fetch_assoc($resultado)): ?>
                        <option <?php echo $idvendedor === $row['id']? 'selected' : ''; ?> value="<?php echo $row['id'];?>"> <?php echo $row['nombre']." ".$row['apellido']; ?> </option>
                    <?php endwhile; ?>
                </select>
            </fieldset>

            <input type="submit" value="Actualizar Propiedad" class="boton boton-verde">
        </form>
    </main>

<?php    incluirTemplate('footer'); ?>