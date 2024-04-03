<?php include 'includes/header.php';

$productos = [
  [
    "nombre" => "Television",
    "precio" => 200,
    "disponible" => true
  ],
  [
    "nombre" => "Television",
    "precio" => 200,
    "disponible" => true
  ],
  [
    "nombre" => "Television",
    "precio" => 200,
    "disponible" => false
  ]
];


echo "<pre>";
var_dump($productos);

$json = json_encode($productos, JSON_UNESCAPED_UNICODE); // Debe estar en un arreglo 

$json_array = json_decode($json);

var_dump($json);
var_dump($json_array);
echo "</pre>";

include 'includes/footer.php';