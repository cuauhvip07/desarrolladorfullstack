<?php 
    require '../includes/app.php';
    estadoAutenticado();
    use App\Propiedad;

    // Implemenatr metodo para obtener todas las proiedades;
    $propiedades = Propiedad::all();
    debuggear($propiedades);
    // Muestra un mensaje condional
    $resultado = $_GET['resultado'] ?? null;

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = $_POST['id'];
        $id = filter_var($id,FILTER_VALIDATE_INT);
        
        if($id){

            // Eliminar el archivo
            $query = "SELECT imagen FROM propiedades WHERE id = {$id};";
            $resultado = mysqli_query($db,$query);
            $propiedad = mysqli_fetch_assoc($resultado);
            unlink('../imagenes/'.$propiedad['imagen']);

            // Eliminar la propiedad
            $query = "DELETE FROM propiedades WHERE id = {$id};";
            $resultado = mysqli_query($db,$query);
            if($resultado){
                header('Location: /admin?resultado=3');
            }
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
                <?php while($row = mysqli_fetch_assoc($consulta)):?>
                <tr class="centrar">
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['titulo'];?></td>
                    <td> <img src="/imagenes/<?php echo $row['imagen'];?>" class="imagen-tabla"></td>
                    <td>$<?php echo $row['precio'];?></td>
                    <td>
                        <form action="" class="w-100" method="POST">
                            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                        <a href="../admin/propiedades/actualizar.php?id=<?php echo $row['id'] ?>" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
    </main>

<?php
    
    incluirTemplate('footer'); 
    // Cerrar la conexion
    mysqli_close($db);
?>