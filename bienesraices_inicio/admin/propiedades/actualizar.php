<?php 

    // Validar la URL por ID valido

    $id = $_GET["id"];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if (!$id)
    header("Location: /admin");


// Base de datos

    require "../../includes/config/database.php";

    $db = conectarDB();

    // Consultar los datos de la propiedad

    $query_propiedad = "SELECT * FROM propiedades where id=$id";
    $resultado_propiedad = mysqli_query($db, $query_propiedad);
    $propiedad = mysqli_fetch_assoc($resultado_propiedad);

    // echo "<pre>";
    // var_dump($propiedad);
    // echo "</pre>";

    // Consulta sobre los vendedores
    $query_vendedores = "SELECT * FROM vendedores";

    $resultado_vendedores = mysqli_query($db, $query_vendedores);

    // Arreglo con mensajes de errores
    $errores = [];

    $titulo = $propiedad["titulo"];
    $precio = $propiedad["precio"];
    $imagen = $propiedad["imagen"];
    $descripcion = $propiedad["descripcion"];
    $habitaciones = $propiedad["habitaciones"];
    $wc = $propiedad["wc"];
    $estacionamiento = $propiedad["estacionamiento"];
    $vendedores_id = $propiedad["vendedores_id"];

    // Ejecutar el codigo despues de que el usuario envia el formulario
    if ($_SERVER["REQUEST_METHOD"] === "POST"){

        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

        // echo "<pre>";
        // var_dump($_FILES);
        // echo "</pre>";


        $titulo = mysqli_real_escape_string( $db,  $_POST["titulo"] );
        $precio = mysqli_real_escape_string( $db,  $_POST["precio"] );
        $descripcion = mysqli_real_escape_string( $db,  $_POST["descripcion"] );
        $habitaciones = mysqli_real_escape_string( $db,  $_POST["habitaciones"] );
        $wc = mysqli_real_escape_string( $db,  $_POST["wc"] );
        $estacionamiento = mysqli_real_escape_string( $db,  $_POST["estacionamiento"] );
        $vendedores_id = mysqli_real_escape_string( $db,  $_POST["vendedor"] ?? "" );

        // Asignar files haci una variables
        $imagen = $_FILES["imagen"];

        if(!$titulo) $errores[] = "El titulo es obligatorio";
        if(!$precio) $errores[] = "El precio es obligatorio";
        if(strlen($descripcion) < 50) $errores[] = "La descripcion tiene que ser mas larga";
        if(!$habitaciones) $errores[] = "El numero de habitaciones es obligatorio";
        if(!$wc) $errores[] = "El numero de baños es obligatorio";
        if(!$estacionamiento) $errores[] = "El numero de estacionamientos es obligatorio";
        if(!$vendedores_id) $errores[] = "El vendedor es obligatorio";

        // Validar por tamanio (100 KB maximo)
        $medida = 1000 * 1000;
        if ($imagen["size"] > $medida) $errores[] = "La imagen es muy pesada";

        if (empty($errores)) {

            // SUBIDA DE ARCHIVOS

            // Crear carpeta

            $carpetaImagenes = "../../imagenes/";

            if(!is_dir($carpetaImagenes)){
                mkdir($carpetaImagenes);
            }

            $nombreImagen = "";
            
            if($imagen["name"]){

                // Eliminar imagen previa
                unlink($carpetaImagenes . $propiedad["imagen"]);

                // Generar un nombre unico
                $nombreImagen = md5( uniqid( rand(), true)) . ".jpg";
    
                // Subir imagen
    
                move_uploaded_file($imagen["tmp_name"], $carpetaImagenes . $nombreImagen);
            } else {
                $nombreImagen = $propiedad["imagen"];
            }


            // Insertar en la base de datos
            $query = "UPDATE propiedades SET titulo = '$titulo', precio = '$precio', imagen = '$nombreImagen', descripcion = '$descripcion', habitaciones = $habitaciones, wc = $wc, estacionamiento = $estacionamiento, vendedores_id = $vendedores_id WHERE id = $id";

            echo $query;
    
            $resultado = mysqli_query($db, $query);
    
            if ($resultado){
                // Redirecionando a admin
                header("Location: /admin?resultado=2");
            }
        }
    }


    require "../../includes/funciones.php";

    incluirTemplate("header");
?>


    <main class="contenedor seccion">
        <h1>Actualizar propiedad</h1>

        <a href="/admin" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error){ ?>
            <div class="alerta error">
                <?php echo $error ?>
            </div>
        <?php }?>

        <form class="formulario" method="POST"  enctype="multipart/form-data">
            <fieldset>
                <legend>Informacion General</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo de la propiedad" value="<?php echo $titulo ?>">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio de la propiedad" value="<?php echo $precio ?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

                <img class="imagen-propiedad" src="/imagenes/<?php echo $imagen ?>" alt="Imagen de propiedad">

                <label for="descripcion">Descripcion:</label>
                <textarea id="descripcion" name="descripcion"><?php echo $descripcion ?></textarea>
            </fieldset>

            <fieldset>
                <legend>Informacion Propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones ?>">

                <label for="wc">Baños:</label>
                <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo $wc ?>">

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" value="<?php echo $estacionamiento ?>">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="vendedor">
                    <option value="" disabled selected>-- Selecione --</option>
                    <?php while($vendedor = mysqli_fetch_assoc($resultado_vendedores)) { ?>
                        <option <?php echo $vendedor["id"] === $vendedores_id ? "selected" : ""; ?> value="<?php echo $vendedor["id"]; ?>">
                            <?php echo $vendedor["nombre"] . " " . $vendedor["apellido"]; ?>
                        </option>
                    <?php } ?>
                </select>
            </fieldset>

            <input type="submit" value="Actualizar Propiedad" class="boton-verde">

        </form>

    </main>

<?php 
    incluirTemplate("footer");
?>