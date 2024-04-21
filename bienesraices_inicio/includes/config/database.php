<?php

function conectarDB(){
    $db = mysqli_connect("localhost", "root", "", "db-bienes-raices");
    if (!$db){
        echo "No se pudo conectar...";
        exit;
    }
    return $db;
};