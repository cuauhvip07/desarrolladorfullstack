<?php 
    require 'includes/app.php';
    use App\Propiedad;
    $id = $_GET['id'];
    

    if(!$id){
        header('Location: /');
    }

    $propiedad = Propiedad::find($id);
    

    



    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1><?php echo $propiedad->titulo;?></h1>

        <img loading="lazy" src="/imagenes/<?php echo $propiedad->imagen;?>" alt="Imagen anuncio" width="500" height="300">

        <div class="resumen-propiedad">
            <p class="precio">$<?php echo $propiedad->precio;?></p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" src="build/img/icono_wc.svg" alt="Icono wc" loading="lazy">
                    <p><?php echo $propiedad->wc;?></p>
                </li>

                <li>
                    <img class="icono" src="build/img/icono_estacionamiento.svg" alt="Icono estacionamiento" loading="lazy">
                    <p><?php echo $propiedad->estacionamiento;?></p>
                </li>

                <li>
                    <img class="icono" src="build/img/icono_dormitorio.svg" alt="Icono dormitorio" loading="lazy">
                    <p><?php echo $propiedad->habitaciones;?></p>
                </li>
            </ul>
            <p><?php echo $propiedad->descripcion;?></>
            
        </div>
    </main>

<?php    incluirTemplate('footer'); ?>