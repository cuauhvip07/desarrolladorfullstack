<?php 
    require 'includes/config/database.php';
    $id = $_GET['id'];

    // Conexion de la bd
    $db = conectardb();

    // Query
    $query = "SELECT * FROM propiedades WHERE id = {$id};";
    
    // Insersion del query
    $resultado = mysqli_query($db,$query);
    


    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
    <?php while($row = mysqli_fetch_assoc($resultado)):?>
        <h1><?php echo $row['titulo'];?></h1>

        <img loading="lazy" src="/imagenes/<?php echo $row['imagen'];?>" alt="Imagen anuncio" width="500" height="300">

        <div class="resumen-propiedad">
            <p class="precio">$<?php echo $row['precio'];?></p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" src="build/img/icono_wc.svg" alt="Icono wc" loading="lazy">
                    <p><?php echo $row['wc'];?></p>
                </li>

                <li>
                    <img class="icono" src="build/img/icono_estacionamiento.svg" alt="Icono estacionamiento" loading="lazy">
                    <p><?php echo $row['estacionamiento']?></p>
                </li>

                <li>
                    <img class="icono" src="build/img/icono_dormitorio.svg" alt="Icono dormitorio" loading="lazy">
                    <p><?php echo $row['habitaciones'];?></p>
                </li>
            </ul>
            <p><?php echo $row['descripcion'];?></>
            
        </div>
    <?php endwhile;?>
    </main>

<?php    incluirTemplate('footer'); ?>