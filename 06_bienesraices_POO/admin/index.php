<?php 
    require '../includes/app.php';
    estadoAutenticado();
    use App\Propiedad;
    use App\Vendedor;

    // Implemenatr metodo para obtener todas las proiedades junto con el id;
    $propiedades = Propiedad::all();
    $vendedores = Vendedor::all();
    
    // Muestra un mensaje condional
    $resultado = $_GET['resultado'] ?? null;

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        debuggear($_POST);
        $id = $_POST['id'];
        $id = filter_var($id,FILTER_VALIDATE_INT);
        
        if($id){

            $propiedad = Propiedad::find($id);
            $propiedad->eliminar();
        }
    }
    // Se trae el template de las paginas
    incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Administrador Bienes Raices</h1>
        <?php if($resultado == 1):?>
            <p class="alerta exito">Anuncio creado correctamente</p>
        <?php elseif($resultado == 2):?>
            <p class="alerta exito">Anuncio Actualizado correctamente</p>
        <?php elseif($resultado == 3):?>
            <p class="alerta exito">Anuncio Eliminado correctamente</p>
        <?php endif;?>
        <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>

        <h2>Propiedades</h2>

        <table class="propiedades">
            <thead>
                <tr class="centrar">
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($propiedades as $propiedad): ?>

                <tr class="centrar">
                    <td><?php echo $propiedad->id ;?></td>
                    <td><?php echo $propiedad->titulo;?></td>
                    <td> <img src="/imagenes/<?php echo $propiedad->imagen;?>" class="imagen-tabla"></td>
                    <td>$<?php echo $propiedad->precio;?></td>
                    <td>
                        <form action="" class="w-100" method="POST">
                            <input type="hidden" name="id" value="<?php echo$propiedad->id;?>">
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                        <a href="../admin/propiedades/actualizar.php?id=<?php echo $propiedad->id ?>" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h2>Vendedores</h2>

        <table class="propiedades">
            <thead>
                <tr class="centrar">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vendedores as $vendedor): ?>

                <tr class="centrar">
                    <td><?php echo $vendedor->id ;?></td>
                    <td><?php echo $vendedor->nombre." ".$vendedor->apellido;?></td>
                    <td><?php echo $vendedor->telefono;?></td>
                    <td>
                        <form action="" class="w-100" method="POST">
                            <input type="hidden" name="id" value="<?php echo$vendedor->id;?>">
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                        <a href="../admin/vendedores/actualizar.php?id=<?php echo $propiedad->id ?>" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>

<?php
    
    incluirTemplate('footer'); 
    // Cerrar la conexion
    mysqli_close($db);
?>