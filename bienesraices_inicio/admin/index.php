<?php 

    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";

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

    // Eliminar propiedad por id

    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $id = $_POST["id"];
        $id = filter_var($id, FILTER_VALIDATE_INT);
        // var_dump($id);

        if ($id) {
            // Eliminar archivo

            $query = "SELECT imagen FROM propiedades WHERE id = $id";

            $resultado = mysqli_query($db, $query);
            $propiedad = mysqli_fetch_assoc($resultado);

            unlink("../imagenes/" . $propiedad["imagen"]);

            // Eliminar la propiedad

            $query = "DELETE FROM propiedades WHERE id = $id";
            $resultado = mysqli_query($db, $query);

            if ($resultado) {
                header("Location: /admin?resultado=3");
            }
        }

    }

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
            case 3: 
            echo '<p class="alerta exito">Anuncio Eliminado Correctamente</p>';
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
                <div class="titem">
                    <form class="w-100" method="post">
                        <input type="hidden" name="id" value="<?php echo $propiedad["id"];?>">
                        <input type="submit" class="boton-rojo-block" value="Eliminar">
                    </form>
                    <a href="admin/propiedades/actualizar.php?id=<?php echo $propiedad["id"];?>" class="boton-amarillo-block">Actualizar</a> 
            </div>
            <?php }?>


        </div>
    </main>

<?php 

    // Cerrar la conexion
    mysqli_close($db);

    incluirTemplate("footer");
?>