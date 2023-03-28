<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
    <meta name="color-scheme" content="light dark">
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/font-awesome.min.css"/>
    <link rel="stylesheet" href="../css/iage.css"/>
    <link rel="icon" href="../img/icono b.png">
    <link rel="stylesheet" href="../css/circulo.css">
    <title>Ori's Haven</title>
</head>
<body>
    <?php include("parts/header.php");?>

    <div class="fondo p-2 p-md-3 mb-md-0 mb-2" onclick="location='perfilUser.php'">
        <div class="p-1">
            <i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Regresar
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="container">

                <div class="row">
                <form action="php/perros.php" method="POST" name="formEdit" enctype="multipart/form-data">
                    <div class="p-0 p-md-2 col-12 pb-3">
                        <div class="apartado">
                            <div class="d-xl-none text-center pt-3">
                                <img src="../img/persona.png" alt="" class="w-75" max-width="300px">
                            </div>
                            <div class="row p-3" style="font-size: 15px">
                                
                                <div class="col-12 col-md-4 p-3 pt-5 d-none d-xl-block">
                                    <div class="pt-4">
                                        <img src="../img/persona.png" alt="" class="sombra img-fluid w-100" max-width="300px">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <h5 class="text-center">Alta perros.</h5>
                                    <form action="">
                                        <div class="file">
                                            <label for="fotoA" class="form-label">Foto del perro:</label>
                                            <input type="file" class="form-control-file" id="fotoA" name="foto"/>
                                        </div>
                                        <hr>
                                        <div class="">
                                            <label for="input_nombre" class="form-label">Nombre:</label>
                                            <input type="text" class="form-control" name="nombre" id="input_nombre"/>
                                        </div>
                                        <div class="">
                                            <label for="dom" class="form-label">Edad:</label>
                                            <input type="text" class="form-control" name="domicilio" id="dom"/>
                                        </div>
                                        <div class="">
                                            <label for="email" class="form-label">Raza:</label>
                                            <input type="text" class="form-control" name="correo" id="email"/>
                                        </div>
                                        <div class="file">
                                            <label for="fotoA" class="form-label">Kardex:</label>
                                            <input type="file" class="form-control-file" id="fotoA" name="foto"/>
                                        </div>
                                        <div class="pt-3">
                                            <label for="sub">Genero:</label>
                                            <select name="sub" class="form-control" id="sub">
                                                <option value="Masculino">Macho</option>
                                                <option value="Femenino">Hembra</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                        </div>
                    </div>    
                    <div class="col-12 text-center p-3">
                        <button type="submit" class="btn btn-info text-center" style="font-size:20px;">Regístrar</button>
                    </div>
                </div> 
                </form>                   
            </div>
        </div>
    </div>

</body>
</html>