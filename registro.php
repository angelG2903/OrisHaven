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
    <title>Regístrate</title>
</head>
<body>
    <div>
        <div class="container-fluid bg-info">
            <div class="row">
                <div class="col-6 col-sm-8">
                    <img src="img/iconoaa.png" alt="logo" class="img-fluid">
                </div>

                <div class="col-1 pt-1 ">
                    <a href="inicioSesion.php" class="btn btn-info"><i class="fa fa-user" aria-hidden="true"></i> Iniciar sesión</a>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            
                <div class="col-12 col-md-6 pt-4">
                    <img src="img/icono app.png" alt="Ori" class="img-fluid w-100">
                </div>

                <div class="pt-md-1 col-12 col-md-6 col-lg-4">
                    <div class="pt-md-5 text-center">
                        <h2>Regístrate</h2>
                    </div>
                    <form action="php/registro_query.php" method="POST" name="formContacto" enctype="multipart/form-data">
                        <div class="pt-md-3">
                            <label for="input_nombre" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" name="nombre" id="input_nombre"/>
                        </div>
                        <div class="pt-3">
                            <label for="contra" class="form-label">Contraseña:</label>
                            <input type="password" class="form-control" name="password" id="contra"/>
                        </div>
                        <div class="pt-3">
                            <label for="contra" class="form-label">Fecha de nacimiento:</label>
                            <input type="date" class="form-control" name="fechaNa" id="contra"/>
                        </div>
                        <div class="pt-3">
                            <label for="email" class="form-label">Correo electronico:</label>
                            <input type="email" class="form-control" name="correo" id="email"/>
                        </div>
                        <div class="pt-3">
                            <label for="sub">Genero:</label>
                            <select name="sub" class="form-control" id="sub">
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>

                        <fieldset class="pt-3 opciones">
                            <h2 class="text-center pb-3 pt-3">¿Qué desea de la app?</h2>
                            <div class="input-group">
                                <label class="ml-5">
                                    <input type="radio" name="adoptar" value="" onclick="mostrar(0)"> ¡Quiero adoptar! 
                                </label>
                                <label class="">
                                    <input type="radio" name="adoptar" value="darEnAdopcion" onclick="mostrar(1)"> ¡Quiero dar en adopción!
                                </label>
                            </div>
                        </fieldset>

                        <div class=" form-group">
                            <div class="pt-3 adopcion" id="uno" style="display: none;">
                                <label for="curp" class="form-label">CURP:</label>
                                <input type="text" class="form-control" name="curp" id="curp"/>
                            </div>
                            <div class="pt-3 adopcion" id="dos" style="display: none;">
                                <label for="dom" class="form-label">Domicilio:</label>
                                <input type="text" class="form-control" name="domicilio" id="dom"/>
                            </div>
                            <div class="pt-3 adopcion" id="tres" style="display: none;">
                                <label for="tel" class="form-label">Telefono:</label>
                                <input type="text" class="form-control" id="tel" name="numeroT"/>
                            </div>
                            <div class="pt-3 adopcion" id="cuatro" style="display: none;">
                                <label for="fotoA" class="form-label">Foto (opcional):</label>
                                <input type="file" class="form-control-file" id="fotoA" name="foto"/>
                            </div>
                        </div>

                        <div class="darEnAdopcion form-group">
                            <div class="pt-3 adopcion" id="cinco" style="display: none;">
                                <label for="domR" class="form-label">Domicilio:</label>
                                <input type="text" class="form-control" id="domR" name="domicilioR"/>
                            </div>
                            <div class="pt-3 adopcion" id="seis" style="display: none;">
                                <label for="nombreR" class="form-label">Nombre del refugio:</label>
                                <input type="text" class="form-control" id="nombreR" name="nombreR"/>
                            </div>
                            <div class="pt-3 adopcion" id="siete" style="display: none;">
                                <label for="curpR" class="form-label">CURP:</label>
                                <input type="text" class="form-control" id="curpR" name="curpR"/>
                            </div>
                            <div class="pt-3 adopcion" id="ocho" style="display: none;">
                                <label for="telR" class="form-label">Telefono:</label>
                                <input type="text" class="form-control" id="telR" name="numeroR"/>
                            </div>
                            <div class="pt-3 adopcion" id="trece" style="display: none;">
                                <label for="sub1">Día inicial:</label>
                                <select name="sub1" class="form-control" id="sub">
                                    <option value="Lunes">Lunes</option>
                                    <option value="Martes">Martes</option>
                                    <option value="Miercoles">Miercoles</option>
                                    <option value="Jueves">Jueves</option>
                                    <option value="Viernes">Viernes</option>
                                    <option value="Sabado">Sabado</option>
                                    <option value="Domingo">Domingo</option>
                                </select>
                            </div>
                            <div class="pt-3 adopcion" id="catorce" style="display: none;">
                                <label for="sub2">Día final:</label>
                                <select name="sub2" class="form-control" id="sub">
                                    <option value="Lunes">Lunes</option>
                                    <option value="Martes">Martes</option>
                                    <option value="Miercoles">Miercoles</option>
                                    <option value="Jueves">Jueves</option>
                                    <option value="Viernes">Viernes</option>
                                    <option value="Sabado">Sabado</option>
                                    <option value="Domingo">Domingo</option>
                                </select>
                            </div>
                            <div class="pt-3 adopcion" id="quince" style="display: none;">
                                <label for="contra" class="form-label">Hora inicial:</label>
                                <input type="time" class="form-control" name="Hi" id="contra"/>
                            </div>
                            <div class="pt-3 adopcion" id="diesiseis" style="display: none;">
                                <label for="contra" class="form-label">Hora final:</label>
                                <input type="time" class="form-control" name="Hf" id="contra"/>
                            </div>
                            <div class="pt-3 adopcion" id="nueve" style="display: none;">
                                <label for="id-of" class="form-label">Identificación oficial del propietario:</label>
                                <input type="file" class="form-control-file" id="id-of" name="identificacion"/>
                            </div> 
                            <div class="pt-3 adopcion" id="diez" style="display: none;">
                                <label for="fotoDR" class="form-label">Foto (opcional):</label>
                                <input type="file" class="form-control-file" id="fotoDR" name="fotoD"/>
                            </div>
                            <div class="pt-3 adopcion" id="once" style="display: none;">
                                <label for="fotoR" class="form-label">Foto del refugio:</label>
                                <input type="file" class="form-control-file" id="fotoR" name="fotoR"/>
                            </div>
                        </div>

                        <div class="text-center p-3">
                            <button type="submit" class="btn btn-info">Registrarte</button>
                            <p class="pt-2">¿Ya tienes cuenta? <a href="inicioSesion.php">Inicia sesión aquí</a></p>
                        </div>
                    </form>
                </div>
            
        </div>
    </div>
</body>
<script>
    function mostrar(num){
    if(num == 0){
        document.getElementById('uno').style.display = '';
        document.getElementById('dos').style.display = '';
        document.getElementById('tres').style.display = '';
        document.getElementById('cuatro').style.display = '';
        document.getElementById('cinco').style.display = 'none';
        document.getElementById('seis').style.display = 'none';
        document.getElementById('siete').style.display = 'none';
        document.getElementById('ocho').style.display = 'none';
        document.getElementById('nueve').style.display = 'none';
        document.getElementById('diez').style.display = 'none';
        document.getElementById('once').style.display = 'none';
        document.getElementById('trece').style.display = 'none';
        document.getElementById('catorce').style.display = 'none';
        document.getElementById('quince').style.display = 'none';
        document.getElementById('diesiseis').style.display = 'none';
    }
    if(num == 1){
        document.getElementById('uno').style.display = 'none';
        document.getElementById('dos').style.display = 'none';
        document.getElementById('tres').style.display = 'none';
        document.getElementById('cuatro').style.display = 'none';
        document.getElementById('cinco').style.display = '';
        document.getElementById('seis').style.display = '';
        document.getElementById('siete').style.display = '';
        document.getElementById('ocho').style.display = '';
        document.getElementById('nueve').style.display = '';
        document.getElementById('diez').style.display = '';
        document.getElementById('once').style.display = '';
        document.getElementById('trece').style.display = '';
        document.getElementById('catorce').style.display = '';
        document.getElementById('quince').style.display = '';
        document.getElementById('diesiseis').style.display = '';
    }
}
</script>
</html>