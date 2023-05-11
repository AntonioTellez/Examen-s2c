<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/functions.js"></script>
</head>
<body>
    <div class="container" id="contenedor">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form id="frmLogin" action="includes/validacion.php" method="POST">
                            <h1>Inicio de sesión</h1>
                            <div class="form-group" id="divUser">
                                <label for="txtUser">Usuario</label>
                                <input type="text" name="txtUser" id="txtUser" placeholder="Usuario" class="form-control" required>
                            </div>
                            <div class="form-group" id="divPass">
                                <label for="txtPass">Contraseña</label>
                                <input type="password" name="txtPass" id="txtPass" placeholder="Contraseña" class="form-control" required>
                            </div>
                            <div class="form-group" id="divBtn">
                                <button type="submit" id="btnIngresar" class="btn btn-primary">Ingresar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>