<fieldset>
                <legend>Información general de nuestra propiedad</legend>
                <label for="titulo">Titulo:</label>
                <input name="propiedad[titulo]" type="text" id="titulo" placeholder="Titulo propiedad" value="<?php echo s($propiedad->titulo); ?>">

                <label for="precio">Precio:</label>
                <input name="propiedad[precio]" type="number" placeholder="Precio propiedad" id="precio" value="<?php echo s($propiedad->precio); ?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="propiedad[imagen]">
                <?php if($propiedad->imagen):?>
                    <img src="/imagenes/<?php echo $propiedad->imagen?>" alt="" class="imagen-small">
                <?php endif;?>
                <label for="descripcion">Descripcion:</label>
                <textarea name="propiedad[descripcion]" id="descripcion" cols="30" rows="10" placeholder="Mi propiedad......"><?php echo s($propiedad->descripcion); ?></textarea>
            </fieldset>

            <fieldset>
                <legend>Información Propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input name="propiedad[habitaciones]" type="number" id="habitaciones" placeholder="Ej: 2" min="1" max="9" value="<?php echo s($propiedad->habitaciones); ?>">

                <label for="wc">Baños:</label>
                <input name="propiedad[wc]" type="number" id="wc" placeholder="Ej: 2" value="<?php echo s($propiedad->wc); ?>">

                <label for="estacionamiento">Estacionamiento:</label>
                <input name="propiedad[estacionamiento]" type="number" placeholder="Ej: 2" id="estacionamiento" value="<?php echo s($propiedad->estacionamiento); ?>">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

               
            </fieldset>