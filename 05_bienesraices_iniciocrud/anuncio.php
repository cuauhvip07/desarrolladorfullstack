<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
    
    <header class="header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="build/img/logo.svg" alt="Imagen logo">
                </a>

                <div class="mobile-menu">
                    <img src="build/img/barras.svg" alt="Imagen barra menu">
                </div>

                <div class="derecha">
                    <img class="dark-mode-boton" src="build/img/dark-mode.svg" alt="dark-mode">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>
                </div>

            </div> <!-- .barra -->
        </div>
    </header>

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

<?php include'includes/templates/footer.php' ?>