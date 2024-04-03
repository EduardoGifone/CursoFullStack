<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "appsalon";

$db = mysqli_connect($hostname, $username, $password, $database);

if(!$db){
  echo "Hubo un error";
  exit;
}