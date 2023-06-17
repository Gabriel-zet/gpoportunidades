<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '96306550';
$dbName = 'giraudeoportunidades';

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

?>

