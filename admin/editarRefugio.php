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
                        <div class="p-0 p-md-2 col-12 pb-2 pt-2">
                            <div class="apartado">
                                <div class="d-xl-none text-center pt-3">
                                    <img src="../img/persona.png" alt="" class="w-75">
                                </div>
                                <div class="row p-3" style="font-size: 15px">
                                    
                                    <div class="col-12 col-md-4 p-5 d-none d-xl-block">
                                        <img src="../img/persona.png" alt="" class="sombra ">
                                    </div>
                                    <div class="col-12 col-md-6 ">
                                        <h5 class="text-center">Editar al dueño.</h5>
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
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="p-0 p-md-2 col-12 pb-2 pt-2">
                            <div class="apartado">
                                <div class="d-xl-none text-center pt-3">
                                    <img src="../img/persona.png" alt="" class="w-75">
                                </div>
                                <div class="row p-3" style="font-size: 15px">
                                    
                                    <div class="col-12 col-md-4 p-5 d-none d-xl-block">
                                        <img src="../img/persona.png" alt="" class="sombra ">
                                    </div>
                                    <div class="col-12 col-md-6 ">
                                        <h5 class="text-center">Editar al refugio.</h5>
                                        <form action="">
                                            <div class="file">
                                                <label for="fotoA" class="form-label">Foto (opcional):</label>
                                                <input type="file" class="form-control-file" id="fotoA" name="foto"/>
                                            </div>
                                            <hr>
                                            <div class="">
                                                <label for="input_nombre" class="form-label">Nombre del refugio:</label>
                                                <input type="text" class="form-control" name="nombre" id="input_nombre"/>
                                            </div>
                                            <div class="">
                                                <label for="sub">Día inicial:</label>
                                                <select name="sub" class="form-control" id="sub">
                                                    <option value="Lunes">Lunes</option>
                                                    <option value="Martes">Martes</option>
                                                    <option value="Miercoles">Miercoles</option>
                                                    <option value="Jueves">Jueves</option>
                                                    <option value="Viernes">Viernes</option>
                                                    <option value="Sabado">Sabado</option>
                                                    <option value="Domingo">Domingo</option>
                                                </select>
                                            </div>
                                            <div class="">
                                                <label for="sub">Día final:</label>
                                                <select name="sub" class="form-control" id="sub">
                                                    <option value="Lunes">Lunes</option>
                                                    <option value="Martes">Martes</option>
                                                    <option value="Miercoles">Miercoles</option>
                                                    <option value="Jueves">Jueves</option>
                                                    <option value="Viernes">Viernes</option>
                                                    <option value="Sabado">Sabado</option>
                                                    <option value="Domingo">Domingo</option>
                                                </select>
                                            </div>
                                            <div class="">
                                                <label for="contra" class="form-label">Hora inicial:</label>
                                                <input type="time" class="form-control" name="password" id="contra"/>
                                            </div>
                                            <div class="">
                                                <label for="contra" class="form-label">Hora final:</label>
                                                <input type="time" class="form-control" name="password" id="contra"/>
                                            </div>
                                            <div class="">
                                                <label for="contra" class="form-label">Domicilio:</label>
                                                <input type="password" class="form-control" name="password" id="contra"/>
                                            </div>
                                        </form>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
               
                    <div class="text-center p-3">
                        <div class="btn btn-danger">
                            Cancelar
                        </div>
                        <div class="btn btn-info">
                            Aceptar
                        </div>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>