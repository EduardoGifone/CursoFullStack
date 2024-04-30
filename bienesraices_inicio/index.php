<?php 
    require "includes/funciones.php";

    incluirTemplate("header", $inicio = true);
?>

    <main class="contenedor seccion">
        <h1>Mas Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h2>Seguridad</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet vitae quasi aut quaerat, consequatur sint dolores excepturi perspiciatis asperiores beatae assumenda ducimus dicta, provident a magni nihil dolorem alias? Beatae?</p>
            </div>

            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h2>Precio</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet vitae quasi aut quaerat, consequatur sint dolores excepturi perspiciatis asperiores beatae assumenda ducimus dicta, provident a magni nihil dolorem alias? Beatae?</p>
            </div>

            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h2>A Tiempo</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet vitae quasi aut quaerat, consequatur sint dolores excepturi perspiciatis asperiores beatae assumenda ducimus dicta, provident a magni nihil dolorem alias? Beatae?</p>
            </div>
        </div> <!--.iconos-nosotros-->
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Depas en Venta</h2>

        <?php 
            $limite = "LIMIT 3";
            // incluirTemplate("anuncios"); De esta forma no se mandan las variables
            include "includes/templates/anuncios.php";
        ?>

        <div class="alinear-derecha">
            <a href="anuncios.php" class="boton-verde">Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad</p>
        <a href="contacto.php" class="boton-amarillo">Contactanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <img loading="laxy" width="200" height="300" src="build/img/blog1.jpg" alt="Texto entrada blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Esctrito el <span>20/10/2021</span> por: <span>Admin</span></p>

                        <p>
                            Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero
                        </p>
                    </a>
                </div>
            </article>
 
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <img loading="laxy" width="200" height="300" src="build/img/blog2.jpg" alt="Texto entrada blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guia para decoracion de tu casa</h4>
                        <p class="informacion-meta">Esctrito el <span>20/10/2021</span> por: <span>Admin</span></p>

                        <p>
                            Maximiza el espacio en tu hogar con esta guia. Aprende a combinar muebles y colores para darle vida a tu espacio
                        </p>
                    </a>
                </div>
            </article>      
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>

            <div class="testimonial">
                <blockquote>
                    El personal se comporto de una excelente forma. Muy buena atencion y la casa que me ofrecieron cumple con todas mis expectativas.
                </blockquote>
                <p>- Eduardo Gifone</p>
            </div>
        </section>
    </div>

<?php 
    incluirTemplate("footer");
?>