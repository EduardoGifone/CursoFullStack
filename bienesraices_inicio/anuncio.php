<?php 
    require "includes/funciones.php";

    incluirTemplate("header");
?>


    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta junto al Bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <img loading="laxy" width="200" height="300" src="build/img/destacada.jpg" alt="">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3.000.00</p>

            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" src="build/img/icono_wc.svg" alt="Icono wc" loading="lazy">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" src="build/img/icono_estacionamiento.svg" alt="Icono icono_estacionamiento" loading="lazy">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" src="build/img/icono_dormitorio.svg" alt="Icono habitaciones" loading="lazy">
                    <p>4</p>
                </li>
            </ul>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque aliquid quod architecto optio, est impedit eveniet nulla illum ipsa aut! Aliquid rerum ducimus fugit corporis aspernatur consectetur? Iste, laboriosam harum?Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus saepe repudiandae adipisci dicta sequi harum ex consectetur asperiores assumenda eum architecto nam dolor nihil odio doloremque qui tenetur, aspernatur perferendi Lorem ipsum dolor, sit amet consectetur adipisicing elit. .</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque aliquid quod architecto optio, est impedit eveniet nulla illum ipsa aut! Aliquid rerum ducimus fugit corporis aspernatur consectetur? Iste, laboriosam harum?Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus saepe repudiandae adipisci dicta sequi harum ex consectetur asperiores assumenda eum architecto nam dolor nihil odio doloremque qui tenetur, aspernatur perferendi Lorem ipsum dolor, sit amet consectetur adipisicing elit.  </p>
        </div>
    </main>

<?php 
    incluirTemplate("footer");
?>