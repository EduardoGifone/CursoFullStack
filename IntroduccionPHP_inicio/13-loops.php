<?php include 'includes/header.php';

// Ejemplo de for
echo "Ejemplo de for:<br>";
for ($i = 1; $i <= 5; $i++) {
    echo "El valor de i es: $i <br>";
}

echo "<br>";

// Ejemplo de while
echo "Ejemplo de while:<br>";
$j = 1;
while ($j <= 5) {
    echo "El valor de j es: $j <br>";
    $j++;
}

echo "<br>";

// Ejemplo de do-while
echo "Ejemplo de do-while:<br>";
$k = 1;
do {
    echo "El valor de k es: $k <br>";
    $k++;
} while ($k <= 5);

echo "<br>";

// Ejemplo de foreach con un array
echo "Ejemplo de foreach:<br>";
$array = array("uno", "dos", "tres", "cuatro", "cinco");
foreach ($array as $valor) {
    echo "El valor del elemento es: $valor <br>";
}
echo "<br>";

$cliente = [
  "nombre" => "Eduardo",
  "saldo" => 300000000,
  "tipo" => "premiun"
];

foreach ($cliente as $key => $valor) {
  echo $key . " => " . $valor . "<br>";
}

include 'includes/footer.php';