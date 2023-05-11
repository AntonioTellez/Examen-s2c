<?php
$server = 'localhost';
$database = 'crud';
$user = 'root';
$pass = '12345678';

$conexion = mysqli_connect($server, $user, $pass, $database);
mysqli_set_charset($conexion, "utf8");

if (!$conexion) {
    die("Falló la conexión a la BD: " . mysqli_connect_error());
}
?>
