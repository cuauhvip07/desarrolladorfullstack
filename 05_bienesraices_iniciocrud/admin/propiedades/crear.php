<?php 
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Crear</h1>
        <a href="/admin/" class="boton boton-verde">Volver</a>

        <form class="formulario">
            <fieldset>
                <legend>Información general de nuestra propiedad</legend>
                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" placeholder="Titulo propiedad">

                <label for="precio">Precio:</label>
                <input type="number" placeholder="Precio propiedad" id="precio">

                <label for="imagen">Imageb:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png">

                <label for="descripcion">Descripcion:</label>
                <textarea id="descripcion" cols="30" rows="10" placeholder="Mi propiedad......"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información Propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" placeholder="Ej: 2" min="1" max="9">

                <label for="wc">Baños:</label>
                <input type="number" id="wc" placeholder="Ej: 2">

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" placeholder="Ej: 2" id="estacionamiento">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="" id="">
                    <option value="" disabled selected> -- Seleccionar -- </option>
                    <option value="1">Juan</option>
                    <option value="2">Karen</option>
                </select>
            </fieldset>

            <input type="submit" value="Crear propiedad" class="boton boton-verde">
        </form>
    </main>

<?php    incluirTemplate('footer'); ?>