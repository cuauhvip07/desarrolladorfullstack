

    <main class="contenedor seccion">
        <h1>Mas Sobre Nosotros</h1>
        <?php include 'iconos.php';?>
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Depas en Venta</h2>
        <?php 
            include 'listado.php';
        ?>

        <div class="ver-todas">
            <a href="/propiedades" class="boton-verde alinear-derecha">Ver todas</a>
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
                    <a href="/entrada">
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
                    <a href="/entrada">
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
