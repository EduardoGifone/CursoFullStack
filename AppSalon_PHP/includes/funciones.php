<?php

function obtener_servicios() {
  try {
    // Importar las credenciales
    require "database.php";

    // Consulta SQL
    $sql = "SELECT * FROM servicios;";

    // Realizar una consulta
    $consulta = mysqli_query($db, $sql);

    // Acceder a los resultados
    // echo "<pre>";
    // var_dump(mysqli_fetch_assoc($consulta));
    // echo "</pre>";
    return $consulta;

    // Cerrar la conexion (opcional)
    $resultado = mysqli_close($db);
    // echo $resultado;

  } catch (\Throwable $th) {
    var_dump($th);
  }
};

obtener_servicios();