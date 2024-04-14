<?php 
    require "includes/funciones.php";

    incluirTemplate("header");
?>

    <main class="contenedor seccion">
        <h1>Conoce Sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <img loading="laxy" width="200" height="300" src="build/img/nosotros.jpg" alt="Imagen sobre nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <h3>25 Años de Experiencia</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque aliquid quod architecto optio, est impedit eveniet nulla illum ipsa aut! Aliquid rerum ducimus fugit corporis aspernatur consectetur? Iste, laboriosam harum?Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus saepe repudiandae adipisci dicta sequi harum ex consectetur asperiores assumenda eum architecto nam dolor nihil odio doloremque qui tenetur, aspernatur perferendi Lorem ipsum dolor, sit amet consectetur adipisicing elit. .</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque aliquid quod architecto optio, est impedit eveniet nulla illum ipsa aut! Aliquid rerum ducimus fugit corporis aspernatur consectetur? Iste, laboriosam harum?Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus saepe repudiandae adipisci dicta sequi harum ex consectetur asperiores assumenda eum architecto nam dolor nihil odio doloremque qui tenetur, aspernatur perferendi Lorem ipsum dolor, sit amet consectetur adipisicing elit.  </p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
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
    </section>

<?php 
    incluirTemplate("footer");
?>