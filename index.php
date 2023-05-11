<?php
include("includes/conexion.php");

$query = "SELECT id_user FROM removed";
$resultado = mysqli_query($conexion, $query);
$eliminados = array();

while ($row = mysqli_fetch_array($resultado)) {
    array_push($eliminados, $row['id_user']);
}

$datos = json_decode(file_get_contents("https://jsonplaceholder.typicode.com/users"), true);
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
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <form id="frmIndex">
                            <h2>Datos</h2>
                            <div class="form-group" id="divName">
                                <label for="txtName">Name</label>
                                <input type="text" name="txtName" id="txtName" placeholder="Name" class="form-control">
                            </div>
                            <div class="form-group" id="divUserName">
                                <label for="txtUsername">Username</label>
                                <input type="text" name="txtUsername" id="txtUsername" placeholder="Username" class="form-control">
                            </div>
                            <div class="form-group" id="divEmail">
                                <label for="txtEmail">Contraseña</label>
                                <input type="text" name="txtEmail" id="txtEmail" placeholder="E-mail" class="form-control">
                            </div>
                            <div class="form-group" id="divBtnIndex">
                                <button type="submit" id="btnIngresar" class="btn btn-primary">Ingresar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card" id="cardEliminados">
                    <div class="card-body">
                        <input type="button" value="Ver registros eliminados" class="btn btn-success" id="btnEliminados">
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>E-mail</th>
                                <th></th>
                                <th></th>
                            </thead>
                            <tbody>
                                <?php
                                for ($i=0; $i < count($datos) ; $i++) { 
                                    if (!(in_array($datos[$i]['id'],$eliminados))) {?>
                                        <tr>
                                            <td><?=$datos[$i]['id']?></td>
                                            <td><?=$datos[$i]['name']?></td>
                                            <td><?=$datos[$i]['username']?></td>
                                            <td><?=$datos[$i]['email']?></td>
                                            <td><input type="button" value="Editar" onclick="editarRegistro(<?=$datos[$i]['id']?>)" class="btn btn-info"></td>
                                            <td><input type="button" value="Eliminar" onclick="eliminarRegistro(<?=$datos[$i]['id']?>)" class="btn btn-danger"></td>
                                        </tr>
                                    <?php } ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>