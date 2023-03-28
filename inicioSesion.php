<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
    <meta name="color-scheme" content="light dark">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/iage.css"/>
    <link rel="icon" href="img/icono b.png">
    <link rel="stylesheet" href="css/circulo.css">
    <title>Iniciar sesión</title>
</head>
<body>
    <div>
        <div class="container-fluid bg-info">
            <div class="row">
                <div class="col-6 col-sm-8">
                    <img src="img/iconoaa.png" alt="logo" class="img-fluid">
                </div>
                <div class="col-1 pt-1">
                    <a href="registro.php" class="btn btn-info"><i class="fa fa-sign-in" aria-hidden="true"></i> Regístrarte</a>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6 pt-4">
                    <img src="img/icono app.png" alt="Ori" class="img-fluid w-100">
                </div>

                <div class="pt-md-5 col-12 col-md-6 col-lg-4">
                    <div class="pt-md-5 text-center">
                        <div class="pt-md-5">
                            <h2>Inicia sesión</h2>
                        </div>
                    </div>
                    <form action="php/login.php" method="POST">
                        <div class="pt-3">
                            <label for="correo" class="form-label">Correo electrónico:</label>
                            <input type="email" class="form-control" id="correo"  name="correo" maxlength="30" required/>
                        </div>
                        <div class="pt-3">
                            <label for="contra" class="form-label">Contraseña:</label>
                            <input type="password" class="form-control" id="contra" name="password" pattern="[a-zA-Z0-9$@.-]{6,30}" maxlength="30" required/>
                        </div>

                        <div class="text-center p-3">
                            <input type="submit" value="Iniciar sesión" class="btn btn-info">
                            <p class="pt-2">¿No tienes cuenta? <a href="registro.php">Regístrate aquí</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>