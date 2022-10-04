<?php

$host = "localhost";
$user= "root";
$password = "";

try {
    $connection = new PDO("mysql:host=$host;dbname=farmacia", $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connection->exec("set names utf8");
    return$connection;
}
catch(PDOException $error)
{
    echo "No se pudo conectar a la BD: " . $error->getMessage();
}