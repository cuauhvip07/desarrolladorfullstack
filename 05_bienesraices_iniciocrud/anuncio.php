<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen anuncio" width="500" height="300">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" src="build/img/icono_wc.svg" alt="Icono wc" loading="lazy">
                    <p>3</p>
                </li>

                <li>
                    <img class="icono" src="build/img/icono_estacionamiento.svg" alt="Icono wc" loading="lazy">
                    <p>3</p>
                </li>

                <li>
                    <img class="icono" src="build/img/icono_dormitorio.svg" alt="Icono wc" loading="lazy">
                    <p>4</p>
                </li>
            </ul>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate esse id, laudantium totam obcaecati consequatur odio quae, eveniet voluptate sequi cumque quaerat, vitae ducimus ratione tempora rerum nihil? Error, maiores!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt rem excepturi omnis itaque esse doloremque rerum, veritatis recusandae, voluptatem commodi natus magnam voluptatibus dolorum voluptate fuga? Quo reprehenderit commodi aspernatur.</p>
        </div>
    </main>

<?php    incluirTemplate('footer'); ?>