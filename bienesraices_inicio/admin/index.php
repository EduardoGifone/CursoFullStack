<?php 
    $resultado = $_GET["resultado"] ?? null;

    require "../includes/funciones.php";

    incluirTemplate("header");
?>


    <main class="contenedor seccion">
        <h1>Administrador de Bienes Raices</h1>

        <?php if( intval($resultado) == 1) { ?>
            <p class="alerta exito">Anuncio creado correctamente</p>
        <?php } ?>

        <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>
        <a href="/admin/propiedades/actualizar.php" class="boton boton-verde">Actualizar</a>
        <a href="/admin/propiedades/borrar.php" class="boton boton-verde">Borrar</a>

        <div class="tabla">
            <p class="thead">ID</p>
            <p class="thead">Titulo</p>
            <p class="thead">Imagen</p>
            <p class="thead">Precio</p>
            <p class="thead">Acciones</p>

            <p class="titem">1</p>
            <p class="titem">Casa en la Playa</p>
            <p class="titem"><img src="/imagenes/d22d0a773e62571a37d337daf1849fa5.jpg" alt=""></p>
            <p class="titem">$1200000</p>
            <p class="titem">
                <a href="#" class="boton-rojo-block">Eliminar</a>
                <a href="#" class="boton-amarillo-block">Actualizar</a>
            </p>

        </div>
    </main>

<?php 
    incluirTemplate("footer");
?>