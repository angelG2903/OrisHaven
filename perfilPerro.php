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
            
                <?php
                
                include 'php/conexion.php';
                $idPer = $_POST['id_perro'];
                $idRef = $_POST['id_refugio'];
                $idFoto = $_POST['id_foto'];

                $verPerro = $con -> prepare("SELECT p.nombre_perro, p.edad, p.raza, p.genero, r.nombre_Refugio, ar.direccion FROM perros as p, refugios as r, archivos as ar 
                WHERE p.id_refugio=$idRef AND p.id_perro=$idPer AND r.id_refugio=$idRef AND ar.id_archivo=$idFoto AND ar.id_archivo=p.id_foto");
                $verPerro -> execute();
                $perro = $verPerro->fetch(PDO::FETCH_ASSOC);
                
                echo '<div class="row">

                        <div class="p-0 p-md-2 col-12 pb-3">
                            <div class="apartado">
                                <div class="d-xl-none text-center pt-3">
                                    <img src="img/mascota1.jpg" alt="" class="w-75">
                                </div>
                                <div class="row p-3" style="font-size: 18px">
                                    <div class="col-12 col-md-4 p-5 d-none d-xl-block">
                                        <img src="img/mascota1.jpg" alt="" class="sombra ">
                                    </div>
                                <div class="col-12 col-md-6">
                                    <h5 class="text-center pt-3 pt-md-4 pb-3">Información del perro.</h5>
                                    <div class="pl-4 pl-md-0">
                                        <p class="p-0 p-md-1">Nombre: <b>'.$perro['nombre_perro'].'</b></p>
                                        <p class="p-0 p-md-1">Edad: <b>'.$perro['edad'].'</b> año(s)</p>
                                        <p class="p-0 p-md-1">Raza: <b>'.$perro['raza'].'</b></p>
                                        <p class="p-0 p-md-1">Género: <b>'.$perro['genero'].'</b></p>
                                        <p class="p-0 p-md-1">Kardex: <b>Sin kardex</b></p>
                                        <p class="p-0 p-md-1">Refugio: <b>'.$perro['nombre_Refugio'].'</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        <div class="col-12 text-center p-3">
                            <div class="btn btn-info text-center" style="font-size:20px;" data-toggle="modal" data-target=".bd-example-modal-lg-espera">
                                Adoptar
                            </div>
                        </div>
                    </div>  ';

                ?>
            
            </div>
        </div>
    </div>


<div class="modal fade bd-example-modal-lg-espera" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">¡Solo queda esperar!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
      </div>
      <div class="modal-body">
            <div class="pt-0 pb-1" data-toggle="modal" data-target=".bd-example-modal-lg-esperas">
                <div class="fondo p-3">
                    <div class="text-justify">
                        <?php
                        echo '<p style="font-size: 20px">Se te notificará si es que has sido seleccionado para adoptar a <b>'.$perro['nombre_perro'].'</b></p>';
                        ?>
                        
                    </div>
                </div>
                <div class="p-3 pr-3 text-right">
                    <div>
                        <?php
                        echo '
                        <form method="post" action="php/enviarDatos.php">
                            <input type="text" value="'.$idPer.'" name="id_p" style="display: none;">
                            <input type="text" value="'.$idRef.'" name="id_r" style="display: none;">
                            <button type="submit" class="btn-info btn" >Aceptar</button>
                        </form>
                        ';
                        ?>
                    </div>
                </div>
            </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>