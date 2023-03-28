<?php
session_start();
?>
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
    <title>Ori's Haven</title>
</head>
<body>
    <?php include("parts/header.php"); ?>

    <div class="container">
        <div class="row">
            <div class="container">
                <div class="row">


                    <form action="php/updateUser.php" method="post" enctype="multipart/form-data">

                        <?php include_once 'php/editUser.php'; ?>
                        <!-- <div class="p-0 p-md-2 col-12 pb-3">
                            <div class="apartado">
                                <div class="d-xl-none text-center pt-3">
                                    <img src="img/persona.png" alt="" class="w-75">
                                </div>
                                <div class="row p-3" style="font-size: 15px">
                                    
                                    <div class="col-12 col-md-4 p-5 d-none d-xl-block">
                                        <img src="img/persona.png" alt="" class="sombra ">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <h5 class="text-center">Editar información.</h5>
                                        <form action="">
                                            <div class="file">
                                                <label for="fotoA" class="form-label">Foto (opcional):</label>
                                                <input type="file" class="form-control-file" id="fotoA" name="foto"/>
                                            </div>
                                            <hr>
                                            <div class="">
                                                <label for="input_nombre" class="form-label">Nombre:</label>
                                                <input type="text" class="form-control" name="nombre" id="input_nombre"/>
                                            </div>
                                            <div class="">
                                                <label for="dom" class="form-label">Domicilio:</label>
                                                <input type="text" class="form-control" name="domicilio" id="dom"/>
                                            </div>
                                            <div class="">
                                                <label for="email" class="form-label">Correo electronico:</label>
                                                <input type="email" class="form-control" name="correo" id="email"/>
                                            </div>
                                            <div class="">
                                                <label for="contra" class="form-label">Contraseña:</label>
                                                <input type="password" class="form-control" name="password" id="contra"/>
                                            </div>
                                        </form>
                                    </div>
                            </div>
                        </div>    --> 
                        <div class="col-12 text-center p-3">
                            <div class="btn btn-danger text-center" style="font-size:20px;" onclick="location='perfil.php'">
                                Cancelar
                            </div>
                            <button type="submit" class="btn btn-info text-center" style="font-size:20px;">Guardar cambios</button>
                            <!-- <div class="btn btn-info text-center" onclick="location='usuarioPrincipal.php'" style="font-size:20px;" onclick="location='editarPerfil.php'">
                                Guardar cambios
                            </div> -->
                        </div>
                    </form>

                </div>                    
            </div>
        </div>
    </div>
</body>
</html>