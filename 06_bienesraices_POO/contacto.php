<?php 
    require 'includes/app.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Contacto</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen Contacto" width="500" height="300">
        </picture>

        <h2>Llene el formulario de contacto</h2>
        <form class="formulario">
            <fieldset>
                <legend>Informacion Personal</legend>

                <label for="nombre">Nombre:</label>
                <input type="text" placeholder="Tu nombre" id="nombre">

                <label for="email">Email:</label>
                <input type="email" placeholder="Tu email" id="email">

                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" placeholder="Tu telefono">

                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" placeholder="Mensaje...."></textarea>
            </fieldset>

            <fieldset>
                <legend>Información sobre la propiedad</legend>

                <label for="opciones">Vende o compra:</label>
                <select id="opciones">
                    <option value="" disabled selected> --Seleccione-- </option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto</label>
                <input type="number" placeholder="Precio o presupuesto" id="presupuesto">

            </fieldset>

            <fieldset>
                <legend>Información sobre la propiedad</legend>
                <p>Como desea ser contactado</p>
                <div class="forma-contacto">
                    <label for="contactar-telefono">Telefono</label>
                    <input type="radio" value="telefono" id="contactar-telefono" name="contacto">

                    <label for="contactar-email">E-mail</label>
                    <input type="radio" name="contacto" id="contactar-email">
                </div>

                <p>Si eligió teléfono, elija la fecha y hora para ser contactado</p>

                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha">

                <label for="hora">Hora:</label>
                <input id="hora" type="time" min="09:00" max="18:00">
            </fieldset>

            <input type="submit"  value="Enviar" class="boton-verde">
        </form>
    </main>

<?php    incluirTemplate('footer'); ?>