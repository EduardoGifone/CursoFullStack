<?php include 'includes/header.php';

$cliente = [
  "nombre" => "Eduardo",
  "saldo" => 200,
  "informacion" => [
    "tipo" => "premiun"
  ]
];

echo $cliente["nombre"];
echo "<br>";
echo $cliente["saldo"];
echo "<br>";
echo $cliente["informacion"]["tipo"];
echo "<br>";

$cliente["codigo"] = "123912312";

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';