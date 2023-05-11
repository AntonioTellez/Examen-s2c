<?php
include("includes/conexion.php");
if( ! ini_get('date.timezone') ) { date_default_timezone_set('America/Mexico_City'); } else { date_default_timezone_set('America/Mexico_City'); }

$id = $_POST['id'];
$date = date("Y-m-d H:i:s");

$bandera = 0;

$query = "INSERT INTO removed(id_user, date_rem) VALUES ($id,'$date')";
$resultado = mysqli_query($conexion, $query);

if ($resultado) {
    $bandera = 1;
}

echo $bandera;
?>