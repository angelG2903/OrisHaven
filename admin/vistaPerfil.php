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
                    <?php
                    include "../php/conexion.php";
                    $idA = $_POST['id_a'];
                    $idL = $_POST['id_l'];
                    $idP = $_POST['id_p'];
                    $foto = $_POST['foto'];
                    $idR = $_SESSION['id_ref'];
                    $idC = $_POST['id_c'];
                    
                    $datosA = $con->prepare("SELECT a.nombre, a.genero, a.curp, a.fecha_nacimiento, a.domicilio, l.correo, p.nombre_perro FROM adoptante as a, login as l, perros as p
                    WHERE a.id_adoptante= $idA AND a.id_login=$idL AND a.id_login = l.id_login AND p.id_perro=$idP");
                    $datosA->execute();
                    $usuario = $datosA->fetch(PDO::FETCH_ASSOC);

                    echo '
                    <div class="p-0 p-md-2 col-12 pb-3">
                        <div class="apartado">
                            <div class="d-xl-none text-center pt-3">
                                <img src="../'.$foto.'" alt="" class="w-75">
                            </div>
                            <div class="row p-3" style="font-size: 18px">
                                <div class="col-12 col-md-4 p-5 d-none d-xl-block">
                                    <img src="../img/persona.png" alt="" class="sombra ">
                                </div>
                            <div class="col-12 col-md-6">
                                <h5 class="text-center pt-3 pt-md-4 pb-3">Información del candidato.</h5>
                                <div class="pl-4 pl-md-0">
                                    <p class="p-0 p-md-1">Nombre: <b>'.$usuario['nombre'].'</b></p>
                                    <p class="p-0 p-md-1">Fecha de nacimiento: <b>08-02-2003</b></p>
                                    <p class="p-0 p-md-1">Género: <b>'.$usuario['genero'].'</b></p>
                                    <p class="p-0 p-md-1">Domicilio: <b>8 sur</b></p>
                                    <p class="p-0 p-md-1">CURP: <b>'.$usuario['curp'].'</b></p>
                                    <p class="p-0 p-md-1">Correo: <b>'.$usuario['correo'].'</b></p>
                                </div>
                            </div>
                        </div>
                    </div>';   
                    ?>
                    <div class="col-12 text-center p-3">

                        <?php
                        echo '<form action="php/borrarC.php" method="POST">
                            <input type="text" value="'.$idA.'" name="id_a" style="display: none;">
                            <input type="text" value="'.$idP.'" name="id_p" style="display: none;">
                            <input type="text" value="'.$idR.'" name="id_r" style="display: none;">
                            <input type="text" value="'.$idC.'" name="id_c" style="display: none;">
                            <button type="submit" class="btn btn-danger text-center" style="font-size:20px;">Rechazar</button>
                            
                        </form>';
                        ?>
                        <div class="btn btn-info text-center" style="font-size:20px;" data-toggle="modal" data-target=".aceptar-candidato">
                            Aceptar
                        </div>
                    </div>
                </div>                    
            </div>
        </div>
    </div>
</body>
</html>

<div class="modal fade aceptar-candidato" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"><?php echo ''.$usuario['nombre'].' va a adoptar a '.$usuario['nombre_perro'].', ¿Estás seguro? ';?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <?php
            echo '  <div class="p-3 fondo">
                        <p>Nombre: <b>'.$usuario['nombre'].'</b></p>
                        <p>Domicilio: <b>'.$usuario['domicilio'].'</b></p>
                        <p>Correo: <b>'.$usuario['correo'].'</b></p>
                        <p>Fecha de nacimiento: <b>'.$usuario['fecha_nacimiento'].'</b></p>
                    </div>';
            ?>
            <?php
                echo'
                <div class="text-center pt-3 d-xl-none">
                    <form method="post" action="php/enviarN.php">
                        <input type="text" value="'.$idA.'" name="id_a" style="display: none;">
                        <input type="text" value="'.$idR.'" name="id_r" style="display: none;">
                        <input type="text" value="'.$idP.'" name="id_p" style="display: none;"> 
                        <button type="submit" class="btn btn-info" id="acept" ">Aceptar</button>
                    </form>
                    <button class="btn btn-danger" id="rech" onclick="vistaPerfil.php">Cancelar</button>
                </div>
                
                <div class="text-right p-3 d-none d-xl-block">
                    <form method="post" action="php/enviarN.php">
                        <input type="text" value="'.$idA.'" name="id_a" style="display: none;">
                        <input type="text" value="'.$idR.'" name="id_r" style="display: none;">
                        <input type="text" value="'.$idP.'" name="id_p" style="display: none;"> 
                        <button type="submit" class="btn btn-info" id="acept" ">Aceptar</button>
                    </form>
                    <button class="btn btn-danger" id="rech" onclick="vistaPerfil.php">Cancelar</button>
                </div>
                ';

            ?>
            
            

            
        </div>
    </div>
  </div>
</div>

<!--Sirve para que el carousel sirva y el usuario pueda moverlo desde la vista movil-->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/iage_framework.js"></script>
<script src="js/jquery.touchSwipe.min.js"></script>