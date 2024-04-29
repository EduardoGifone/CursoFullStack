<?php 

    // Importar la conexion

    require "../includes/config/database.php";
    $db = conectarDB();

    // Escribir la query
    
    $query = "SELECT * FROM propiedades";

    // Consultar a la DB

    $resultadoConsulta = mysqli_query($db, $query);

    // Muestra mensaje condicional

    $resultado = $_GET["resultado"] ?? null;
    $resultado = intval($resultado);

    // Incluye template

    require "../includes/funciones.php";
    incluirTemplate("header");
?>


    <main class="contenedor seccion">
        <h1>Administrador de Bienes Raices</h1>

        <?php switch( $resultado) {
            case 1: 
            echo '<p class="alerta exito">Anuncio Creado Correctamente</p>';
            break;
            case 2: 
            echo '<p class="alerta exito">Anuncio Actualizado Correctamente</p>';
            break;
        } ?>

        <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>

        <div class="tabla">
            <p class="thead">ID</p>
            <p class="thead">Titulo</p>
            <p class="thead">Imagen</p>
            <p class="thead">Precio</p>
            <p class="thead">Acciones</p>

            <!-- Mostrar los datos -->

            <?php while ($propiedad = mysqli_fetch_assoc($resultadoConsulta)) {?>
                <p class="titem"><?php echo $propiedad["id"];?></p>
                <p class="titem"><?php echo $propiedad["titulo"];?></p>
                <p class="titem"><img src="/imagenes/<?php echo $propiedad["imagen"];?>" alt="Imagen de propiedad"></p>
                <p class="titem">$<?php echo $propiedad["precio"];?></p>
                <p class="titem">
                    <a href="#" class="boton-rojo-block">Eliminar</a>
                    <a href="admin/propiedades/actualizar.php?id=<?php echo $propiedad["id"];?>" class="boton-amarillo-block">Actualizar</a>
                </p>
            <?php }?>


        </div>
    </main>

<?php 

    // Cerrar la conexion
    mysqli_close($db);

    incluirTemplate("footer");
?>