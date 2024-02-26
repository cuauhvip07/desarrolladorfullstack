<?php 
    //base de datos
    require '../../includes/config/database.php';
    $db = concectardb();



    if($_SERVER["REQUEST_METHOD"] === 'POST'){
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

        $titulo = $_POST["titulo"];
        $precio = $_POST["precio"];
        $descripcion = $_POST["descripcion"];
        $habitaciones = $_POST["habitaciones"];
        $wc = $_POST["wc"];
        $estacionamiento = $_POST["estacionamiento"];
        $idvendedor = $_POST["vendedor"];

        // Query
        $query = "INSERT INTO propiedades (titulo,precio,descripcion,habitaciones,wc,estacionamiento,idvendedor) VALUES ('$titulo','$precio','$descripcion','$habitaciones','$wc','$estacionamiento','$idvendedor');";
        $resultado = mysqli_query($db,$query);
        if($resultado){
            echo 'Insertado correctamente';
        }else{
            echo 'Error. No se inserto';
        }
    }

    
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Crear</h1>
        <a href="/admin/" class="boton boton-verde">Volver</a>

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
            <fieldset>
                <legend>Información general de nuestra propiedad</legend>
                <label for="titulo">Titulo:</label>
                <input name="titulo" type="text" id="titulo" placeholder="Titulo propiedad">

                <label for="precio">Precio:</label>
                <input name="precio" type="number" placeholder="Precio propiedad" id="precio">

                <label for="imagen">Imageb:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png">

                <label for="descripcion">Descripcion:</label>
                <textarea name="descripcion" id="descripcion" cols="30" rows="10" placeholder="Mi propiedad......"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información Propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input name="habitaciones" type="number" id="habitaciones" placeholder="Ej: 2" min="1" max="9">

                <label for="wc">Baños:</label>
                <input name="wc" type="number" id="wc" placeholder="Ej: 2">

                <label for="estacionamiento">Estacionamiento:</label>
                <input name="estacionamiento" type="number" placeholder="Ej: 2" id="estacionamiento">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="vendedor" id="">
                    <option value="" disabled selected> -- Seleccionar -- </option>
                    <option value="1">Juan</option>
                    <option value="2">Karen</option>
                </select>
            </fieldset>

            <input type="submit" value="Crear propiedad" class="boton boton-verde">
        </form>
    </main>

<?php    incluirTemplate('footer'); ?>