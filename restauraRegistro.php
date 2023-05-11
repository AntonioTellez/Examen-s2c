<?php
include("includes/conexion.php");

$id = $_POST['id'];
$bandera = 0;

$query = "DELETE FROM removed WHERE id_user = $id";
$resultado = mysqli_query($conexion, $query);

if ($resultado) {
    $bandera = 1;
}

echo $bandera;
?>