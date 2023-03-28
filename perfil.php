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
    <?php include("parts/header.php");?>

    <div class="fondo p-2 p-md-3 mb-md-0 mb-2" onclick="location='usuarioPrincipal.php'">
        <div class="p-1">
            <i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Regresar
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="container">
                <div class="row">

                    <?php include_once 'php/datosPerfil.php'; ?>
                    <!-- <div class="p-0 p-md-2 col-12 pb-3">
                        <div class="apartado">
                            <div class="d-xl-none text-center pt-3">
                                <img src="img/persona.png" alt="" class="w-75">
                            </div>
                            <div class="row p-3" style="font-size: 18px">
                                
                                <div class="col-12 col-md-4 p-5 d-none d-xl-block">
                                    <img src="img/persona.png" alt="" class="sombra ">
                                </div>
                            <div class="col-12 col-md-6">
                                <h5 class="text-center pt-3 pt-md-4 pb-3">Información del adoptante.</h5>
                                <div class="pl-4 pl-md-0">
                                    <p class="p-0 p-md-1">Nombre: <b>Ángel</b></p>
                                    <p class="p-0 p-md-1">CURP: <b>HELM030208HPLRPGA1</b></p>
                                    <p class="p-0 p-md-1">Fecha de nacimiento: <b>08-02-2003</b></p>
                                    <p class="p-0 p-md-1">Domicilio: <b>8 sur</b></p>
                                    <p class="p-0 p-md-1">Género: <b>Masculino</b></p>
                                    <p class="p-0 p-md-1">Correo: <b>jpg@gmail.com</b></p>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="col-12 text-center p-3">
                        <div class="btn btn-info text-center" style="font-size:20px;" onclick="location='editarPerfil.php'">
                            Editar
                        </div>
                    </div>
                </div>                    
            </div>
        </div>
    </div>
</body>
</html>