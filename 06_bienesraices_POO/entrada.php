<?php 
    require 'includes/app.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>
        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen anuncio" width="500" height="300">
        </picture>

        <div class="resumen-propiedad">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate esse id, laudantium totam obcaecati consequatur odio quae, eveniet voluptate sequi cumque quaerat, vitae ducimus ratione tempora rerum nihil? Error, maiores!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt rem excepturi omnis itaque esse doloremque rerum, veritatis recusandae, voluptatem commodi natus magnam voluptatibus dolorum voluptate fuga? Quo reprehenderit commodi aspernatur.</p>
        </div>
    </main>

<?php   incluirTemplate('footer');?>