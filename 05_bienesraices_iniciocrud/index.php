<?php 
    require 'includes/funciones.php';
    incluirTemplate('header', $inicio = true);
?>

    <main class="contenedor seccion">
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
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Depas en Venta</h2>
        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <img loading="lazy" src="build/img/anuncio1.jpg" alt="Anuncio" width="500" height="300">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa de Lujo en el Lago</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
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
                    <a href="anuncios.php" class="boton-amarillo-block">Ver propiedad</a>
                </div> <!-- .contenido-anuncio -->
            </div> <!-- .anuncio -->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio2.webp" type="image/webp">
                    <img loading="lazy" src="build/img/anuncio2.jpg" alt="Anuncio" width="500" height="300">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa terminados de lujo</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
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
                    <a href="anuncios.php" class="boton-amarillo-block">Ver propiedad</a>
                </div> <!-- .contenido-anuncio -->
            </div> <!-- .anuncio -->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio3.webp" type="image/webp">
                    <img loading="lazy" src="build/img/anuncio3.jpg" alt="Anuncio" width="500" height="300">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa con alberca</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
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
                    <a href="anuncios.php" class="boton-amarillo-block">Ver propiedad</a>
                </div> <!-- .contenido-anuncio -->
            </div> <!-- .anuncio -->
        </div> <!-- .contenedor-anuncios -->

        <div class="ver-todas">
            <a href="anuncios.php" class="boton-verde alinear-derecha">Ver todas</a>
        </div>
    </section>



    <section class="imagen-contacto">
        <h2>Encentra la casa de tus sueños</h2>
        <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
        <a href="contacto.php" class="boton-amarillo">Contactanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="Imagen blog 1" width="500" height="300">
                    </picture>
                </div> <!-- .imagen -->
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                        <p>Consejo para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero.</p>
                    </a>
                </div>
            </article> <!-- .entrada-blog -->

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="Imagen blog 2" width="500" height="300">
                    </picture>
                </div> <!-- .imagen -->
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guia para la decoracion de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                        <p>Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio.</p>
                    </a>
                </div>
            </article> <!-- .entrada-blog -->
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis expectativas.
                </blockquote>
                <p>- Cuauhtemoc Villalba</p>
            </div>
        </section>
    </div>


<?php 
incluirTemplate('footer');
?>