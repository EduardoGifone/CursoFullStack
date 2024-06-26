<?php 

    $id = $_GET["id"];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    // var_dump($id);
    if (!$id) header("Location: /index.php");

    // Importar conexion
    require "includes/config/database.php";
    $db = conectarDB();

    // Crear consulta
    $query = "SELECT * FROM propiedades WHERE id = $id";

    // Obtener datos
    $resultado = mysqli_query($db, $query);
    
    if(!$resultado->num_rows)
        header("location: /");
    
    // SOLUCION PARA ID QUE NO EXISTEN EN LA BASE DE DATOS
    
    // if(mysqli_num_rows($resultado) > 0) {
        //     $propiedad = mysqli_fetch_assoc($resultado);
        // } else {
    //     // Manejar el caso en el que no se encontró ninguna propiedad con el ID dado
    //     // echo "La propiedad con el ID $id no fue encontrada.";
    //     header("Location: /index.php");
    // }
    
    $propiedad = mysqli_fetch_assoc($resultado);
    
    require "includes/funciones.php";

    incluirTemplate("header");
?>


    <main class="contenedor seccion contenido-centrado">
        <h1><?php echo $propiedad["titulo"] ;?></h1>

        <img loading="laxy" width="200" height="300" src="imagenes/<?php echo $propiedad["imagen"] ;?>" alt="Anuncio">

        <div class="resumen-propiedad">
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

            <p><?php echo $propiedad["descripcion"] ;?></p>

        </div>
    </main>

<?php 
    incluirTemplate("footer");

    // Cerrar conexion
    mysqli_close($db);
?>