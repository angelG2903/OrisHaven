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

    <div class="container">
        <div class="row">
            <div class="input-group m-2">
                <input type="search" placeholder="Buscar..." class="form-control sombra" aria-label="" aria-describedby="basic-addon1">
            </div>
        </div>

        <div class="row">
            <div class="container">
                
                <?php include("php/mostrarP.php");?>
                <!-- <div class="row">
                    <div class="p-0 p-md-2 col-12 pb-3">
                        <div class="apartado">
                            <div class="d-xl-none text-center pt-3">
                                <img src="img/mascota1.jpg" alt="" class="w-75 sombra mascotas">
                            </div>
                            <div class="row p-3 ">
                                <div class="d-none d-xl-block col-md-3 pt-2 pt-0">
                                    <img src="img/mascota1.jpg" alt="" class="img-fluid sombra mascotas w-100">
                                </div>
                                <div class="col-12 col-md-6 pt-4 ">
                                    <p class="p-0 p-md-2">Nombre del perro: <b>Ori</b></p>
                                    <p class="p-0 p-md-2">Género: <b>Macho</b></p>
                                    <p class="p-0 p-md-2">Refugio: <b>Ori's Haven</b></p>
                                    <p class="p-0 p-md-2">Estado: <b>Adoptado</b></p>
                                </div>

                                <div class="col-12 col-md-3 pt-0 pt-md-5 d-none d-xl-block">
                                    <div class="pt-0 pt-md-5">
                                        <button class="btn btn-info sombra" onclick="location='perfilPerro.php'">Ver más</button>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3 pt-0 pt-md-5 text-center d-xl-none">
                                    <div class="pt-0 pt-md-5">
                                        <button class="btn btn-info sombra" onclick="location='perfilPerro.php'">Ver más</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                
            </div>
        </div>

    </div>
</body>
</html>