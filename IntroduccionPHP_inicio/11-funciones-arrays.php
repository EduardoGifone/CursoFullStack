<?php include 'includes/header.php';

// in_array - buscar elementos en un arreglo
$carrito = ["Tablet", "Celular", "Television"];

var_dump(in_array("Tablet", $carrito));
var_dump(in_array("Audifonos", $carrito));

// Ordenar elementos en un arreglo
$numeros = array(5,4,3,2,1);
sort($numeros); // de menor a mayor
rsort($numeros); // de mayor a menor

echo "<pre>";
var_dump($numeros);
echo "</pre>";

// Ordenar arreglo asociativo
$cliente = array(
  "saldo" => 200,
  "tipo" => "Premium",
  "nombre" => "Eduardo"
);

asort($cliente); // ordena por valores (orden alfabetico)
arsort($cliente); // ordena por valores (orden alfabetico inverso)
ksort($cliente); // ordena por llaves (orden alfabetico)
krsort($cliente); // ordena por llabes (orden alfabetico inverso)

echo "<pre>";
var_dump($cliente);
echo "</pre>";


include 'includes/footer.php';