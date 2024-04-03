<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array("Eduardo", "Licelith", "Luciana", "Marisol");
$cliente = [
  "nombre" => "Eduardo"
];


// Empty - Revisa si un arreglo esta vacio
var_dump(empty($clientes));
var_dump(empty($clientes2));
var_dump(empty($clientes3));

// Isset - Revisa si un arreglo esta creado 
echo "<br>";
var_dump(isset($clientes4));
var_dump(isset($clientes));

echo "<br>";
var_dump(isset($cliente["nombre"]));
var_dump(isset($cliente["codigo"]));

include 'includes/footer.php';