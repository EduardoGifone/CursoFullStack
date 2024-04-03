<?php include 'includes/header.php';

$opcion = 2;

// Ejemplo con if, else if
if ($opcion == 1) {
    echo "La opción es 1";
} else if ($opcion == 2) {
    echo "La opción es 2";
} else {
    echo "La opción no es ni 1 ni 2";
}

echo "<br>";

// Ejemplo con switch
switch ($opcion) {
    case 1:
        echo "La opción es 1";
        break;
    case 2:
        echo "La opción es 2";
        break;
    default:
        echo "La opción no es ni 1 ni 2";
}


include 'includes/footer.php';