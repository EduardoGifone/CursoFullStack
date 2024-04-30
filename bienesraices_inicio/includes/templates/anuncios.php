<?php 
    // Importar conexion
    require "includes/config/database.php";
    $db = conectarDB();

    // Crear consulta

    $limite = $limite ?? "";

    $query = "SELECT * FROM propiedades " . $limite;

    // Obtener datos

    $resultado = mysqli_query($db, $query);

?>


<div class="contenedor-anuncios">
    <?php while($propiedad = mysqli_fetch_assoc($resultado)) {?>
    <div class="anuncio">
        <img loading="laxy" width="200" height="300" src="imagenes/<?php echo $propiedad["imagen"] ;?>" alt="Anuncio">

        <div class="contenido-anuncio">
            <h3><?php echo $propiedad["titulo"] ;?></h3>
            <p><?php echo $propiedad["descripcion"] ;?></p>
            <p class="precio">$<?php echo $propiedad["precio"] ;?></p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" src="build/img/icono_wc.svg" alt="Icono wc" loading="lazy">
                    <p><?php echo $propiedad["wc"] ;?></p>
                </li>
                <li>
                    <img class="icono" src="build/img/icono_estacionamiento.svg" alt="Icono icono_estacionamiento" loading="lazy">
                    <p><?php echo $propiedad["estacionamiento"] ;?></p>
                </li>
                <li>
                    <img class="icono" src="build/img/icono_dormitorio.svg" alt="Icono habitaciones" loading="lazy">
                    <p><?php echo $propiedad["habitaciones"] ;?></p>
                </li>
            </ul>

            <a href="anuncio.php?id=<?php echo $propiedad["id"]; ?>" class="boton-amarillo-block">
                Ver Propiedad
            </a>
        </div><!--.contenido-anuncio-->
    </div><!--.anuncio-->
    <?php } ?>
</div><!--.contenedor-anuncios-->

<?php 
    // Cerrar conexion
    mysqli_close($db);
?>