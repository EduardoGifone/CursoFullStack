<?php include 'includes/header.php';

$nombreCliente = "Eduardo Gifone";

// Conocer extencion (length) de un string
echo strlen($nombreCliente);
echo "<br>";

// Eliminar los espacios en blanco al inicio y final
$texto = trim($nombreCliente);
echo $texto;
echo "<br>";

// Convertir a mayusculas
echo strtoupper($nombreCliente);
echo "<br>";

// Convertir a minusculaas
echo strtolower($nombreCliente);
echo "<br>";

// Remplazar una cadena en un string
echo str_replace("Eduardo", "E", $nombreCliente);
echo "<br>";

// Revisar si una cadena existe en un string
echo strpos($nombreCliente, "Gifone");
echo "<br>";

// Concatenacion
$tipoCliente = "Premiun";

echo "El cliente " . $nombreCliente . " es " . $tipoCliente;
echo "<br>";

echo "El cliente {$nombreCliente} es {$tipoCliente}";
echo "<br>";

include 'includes/footer.php';