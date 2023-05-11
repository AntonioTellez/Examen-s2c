<?php
include("includes/conexion.php");

$query = "SELECT id_user FROM removed";
$resultado = mysqli_query($conexion, $query);
$eliminados = array();

while ($row = mysqli_fetch_array($resultado)) {
    array_push($eliminados, $row['id_user']);
}

$datos = json_decode(file_get_contents("https://jsonplaceholder.typicode.com/users"), true);
// var_dump(count($datos));
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Programador PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/functions.js"></script>
</head>
<body>
    <div class="container" id="contenedor-index" style="margin-top: 40px;">
        <div class="row">
            <div class="col">
                <div class="card">
                    <h2>Registros eliminados</h2>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>E-mail</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <?php
                                for ($i=0; $i < count($datos) ; $i++) { 
                                    if (in_array($datos[$i]['id'],$eliminados)) {?>
                                        <tr>
                                            <td><?=$datos[$i]['id']?></td>
                                            <td><?=$datos[$i]['name']?></td>
                                            <td><?=$datos[$i]['username']?></td>
                                            <td><?=$datos[$i]['email']?></td>
                                            <td><input type="button" value="Restaurar" onclick="restaurarRegistro(<?=$datos[$i]['id']?>)" class="btn btn-dark"></td>
                                        </tr>
                                    <?php } ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row ubicacionBtn" id="divBtnInicio">
            <div class="col">
                <input type="button" value="Volver al inicio" class="btn btn-primary" id="btnInicio">
            </div>
        </div>
    </div>
</body>
</html>