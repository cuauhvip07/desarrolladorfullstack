<main class="contenedor seccion">
        <h1>Contacto</h1>

        <?php if($mensaje):?>
            <p class="alerta exito"><?php echo $mensaje;?></p>
        <?php endif;?>
        

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen Contacto" width="500" height="300">
        </picture>

        <h2>Llene el formulario de contacto</h2>
        <form class="formulario" method="post" action="/contacto">
            <fieldset>
                <legend>Informacion Personal</legend>

                <label for="nombre">Nombre:</label>
                <input type="text" placeholder="Tu nombre" id="nombre" name="contacto[nombre]">

                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" placeholder="Mensaje...." name="contacto[mensaje]"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información sobre la propiedad</legend>

                <label for="opciones">Vende o compra:</label>
                <select id="opciones" name="contacto[tipo]">
                    <option value="" disabled selected> --Seleccione-- </option>
                    <option value="compra">Compra</option>
                    <option value="vende">Vende</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto</label>
                <input type="number" placeholder="Precio o presupuesto" id="presupuesto" name="contacto[precio]">

            </fieldset>

            <fieldset>
                <legend>Información sobre la propiedad</legend>
                <p>Como desea ser contactado</p>
                <div class="forma-contacto">
                    <label for="contactar-telefono">Telefono</label>
                    <input type="radio" value="telefono" id="contactar-telefono" name="contacto[contacto]">


                    <label for="contactar-email">E-mail</label>
                    <input type="radio" id="contactar-email" name="contacto[contacto]" value="email">
                </div>

                <div id="contacto"></div>

            </fieldset>

            <input type="submit"  value="Enviar" class="boton-verde">
        </form>
    </main>