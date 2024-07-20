<?php 

    // Conexion a la base de datos
    require("includes/config/database.php");
    $db = conectarDB();

    // Autenticar al usuario

    $errores = [];

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $email = mysqli_real_escape_string($db, filter_var($_POST["email"], FILTER_VALIDATE_EMAIL));
        $password = mysqli_real_escape_string($db, $_POST["password"]);

        if (!$email) $errores[] = "El email es obligatorio o no es valido";
        if (!$password) $errores[] = "El password es obligatorio";

        if (empty($errores)) {

            // Revisar si el usuario existe
            $query = "SELECT * FROM usuarios WHERE email = '$email'";
            $resultado = mysqli_query($db, $query);

            if ($resultado->num_rows ){
                // Revisar si el password es correcto
                $usuario = mysqli_fetch_assoc($resultado);

                // Verificar si el password es correcto
                $auth = password_verify($password, $usuario["password"]);

                var_dump($auth);

            } else {
                $errores[] = "El usuario no existe";
            }
        }
    }


    // Incluye el header
    require "includes/funciones.php";

    incluirTemplate("header");
?>


    <main class="contenedor seccion contenido-centrado">
        <h1>Iniciar Sesion</h1>

        <?php foreach($errores as $error) { ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php }?>

        <form class="formulario" method="POST">
        <fieldset>
                <legend>Email y Password</legend>

                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Tu email" id="email" required>

                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Tu password" id="password" required>

            </fieldset>

            <input type="submit" value="Iniciar Sesion" class="boton-verde boton-verde--extra">
        </form>
    </main>

<?php 
    incluirTemplate("footer");
?>