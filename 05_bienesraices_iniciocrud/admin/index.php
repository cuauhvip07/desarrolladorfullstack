<?php 
    // Importar la conexion 
    require '../includes/config/database.php';
    $db = concectardb();

    // Creacion del query
    $query = 'SELECT * FROM propiedades';

    // Consultar la bd
    $consulta = mysqli_query($db,$query);

    // Muestra un mensaje condional
    $resultado = $_GET['resultado'] ?? null;
    // Se trae el template de las paginas
    require '../includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Administrador Bienes Raices</h1>
        <?php if($resultado == 1):?>
        <p class="alerta exito">Anuncio creado correctamente</p>
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
                        <a href="" class="boton-rojo-block">Eliminar</a>
                        <a href="" class="boton-amarillo-block">Actualizar</a>
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