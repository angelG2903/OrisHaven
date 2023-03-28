<?php
$id = $_SESSION['id_login'];
$correo = $_SESSION['correo'];
$idA = $_SESSION['id_ad'];
include 'conexion.php';

$query = $con->prepare("SELECT a.nombre,a.curp,a.fecha_nacimiento,a.domicilio,a.genero,l.correo,a.id_foto from adoptante as a, login as l WHERE a.id_login = $id AND l.id_login = $id");
$query->execute();
$usuario = $query->fetch(PDO::FETCH_ASSOC); 
$_SESSION['nombre'] = $usuario['nombre'];
$_SESSION['domicilio'] = $usuario['domicilio'];
$_SESSION['id_foto'] = $usuario["id_foto"];

$idF = $usuario["id_foto"];
$query2 = $con->prepare("SELECT direccion from archivos WHERE id_archivo = $idF");
$query2->execute();
$foto = $query2->fetch(PDO::FETCH_ASSOC);
$_SESSION['direccionF'] = $foto['direccion'];


echo '  <div class="p-0 p-md-2 col-12 pb-3">
            <div class="apartado">
                <div class="d-xl-none text-center pt-3">
                    <img src="'.$foto['direccion'].'" alt="" class="w-75">
                </div>
                <div class="row p-3" style="font-size: 18px">
                    
                    <div class="col-12 col-md-4 p-5 d-none d-xl-block">
                        <img src="'.$foto['direccion'].'" alt="" class="sombra ">
                    </div>
                <div class="col-12 col-md-6">
                    <h5 class="text-center pt-3 pt-md-4 pb-3">Información del adoptante.</h5>
                    <div class="pl-4 pl-md-0">
                        <p class="p-0 p-md-1">Nombre: <b>'.$usuario['nombre'].'</b></p>
                        <p class="p-0 p-md-1">CURP: <b>'.$usuario['curp'].'</b></p>
                        <p class="p-0 p-md-1">Fecha de nacimiento: <b>'.$usuario['fecha_nacimiento'].'</b></p>
                        <p class="p-0 p-md-1">Domicilio: <b>'.$usuario['domicilio'].'</b></p>
                        <p class="p-0 p-md-1">Género: <b>'.$usuario['genero'].'</b></p>
                        <p class="p-0 p-md-1">Correo: <b>'.$usuario['correo'].'</b></p>
                    </div>
                </div>
            </div>
        </div>';

?>