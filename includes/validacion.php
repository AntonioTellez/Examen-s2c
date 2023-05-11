<?php
include("conexion.php");

$user = $_POST['txtUser'];
$pass = $_POST['txtPass'];

$query = "SELECT * FROM users";
$resultado = mysqli_query($conexion, $query);
$row = mysqli_fetch_assoc($resultado);

if (!(md5($pass) == $row['pass_user'])) {
    header('location: ../login.php');
    return false;
}

header('location: ../index.php');
?>