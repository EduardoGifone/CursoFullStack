<?php 
    require "includes/funciones.php";

    incluirTemplate("header");
?>


    <main class="contenedor seccion">
        <h1>Anuncios</h1>

        <?php
        incluirTemplate("anuncios");
        ?>

    </main>

<?php 
    incluirTemplate("footer");
?>