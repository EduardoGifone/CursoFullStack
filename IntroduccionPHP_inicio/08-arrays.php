<?php include 'includes/header.php';

// $carrito = array();
$carrito = ["Tablet", "Television", "Computadora"];

// Acceder a un elemento del array
echo $carrito[1];

// Agrega un elemento en indice 
$carrito[3] = "Celular";

// Agregar un elemento al final
array_push($carrito, "Audifonos");

// Agregar un elemento al inicio
array_unshift($carrito, "Reloj");

// Util para ver el contenido de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

include 'includes/footer.php';