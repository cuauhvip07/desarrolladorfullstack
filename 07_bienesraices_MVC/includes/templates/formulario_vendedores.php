

<fieldset>
    <legend>Información general de nuestra propiedad</legend>
    <label for="nombre">Nombre:</label>
    <input name="vendedor[nombre]" type="text" id="nombre" placeholder="Nombre vendedor" value="<?php echo s($vendedor->nombre); ?>">

    <label for="nombre">Apellido:</label>
    <input name="vendedor[apellido]" type="text" id="apellido" placeholder="Apellido vendedor" value="<?php echo s($vendedor->apellido); ?>">

    <label for="telefono">Telefono:</label>
    <input name="vendedor[telefono]" type="tel" id="wc" placeholder="Numero telefono" value="<?php echo s($vendedor->telefono); ?>">
</fieldset>