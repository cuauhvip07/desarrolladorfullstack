<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Imagen nosotro" width="500" height="300">
                </picture>
            </div> <!-- .imagen -->

            <div class="texto-nosotros">
                <blockquote>
                    25 Año de experiencia
                </blockquote>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam et iste libero expedita harum temporibus dolor, molestiae ex ipsam sed distinctio, adipisci quisquam facere id. Dolores assumenda cumque fuga. Architecto?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis voluptates velit minus qui. Quo odit ipsam, culpa vitae nostrum hic repellat vel accusantium alias vero, rem minima perferendis. Saepe, explicabo?</p>
            </div> <!-- .texto-noostros -->
        </div> <!-- .contenido-nosotros -->
    </main>

    <section class="contenedor seccion">
        <h1>Mas Sobre Nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut deserunt minima maxime vero aliquid reiciendis mollitia, labore, molestias numquam illum asperiores, atque debitis sint cum nulla. Necessitatibus dolorum itaque nulla?</p>
            </div> <!-- .icono -->

            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam ducimus obcaecati deserunt, perferendis, vero nulla aperiam sed nisi laboriosam molestias veniam necessitatibus fuga a perspiciatis, mollitia delectus facilis consequuntur exercitationem?</p>
            </div> <!-- .icono -->

            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid dolore blanditiis commodi expedita fugit nisi itaque vel inventore odio optio cum sint non, officia dolor exercitationem nobis velit? Minima, ducimus.</p>
            </div> <!-- .icono -->

        </div>
    </section>

<?php    incluirTemplate('footer'); ?>