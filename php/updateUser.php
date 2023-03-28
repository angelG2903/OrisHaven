<?php

session_start();
include_once 'conexion.php';

$idLogin =  $_SESSION['id_login'];
$idAdop = $_SESSION['id_ad'];
$idfoto = $_SESSION['id_foto'];

$mail = $_POST['correo'];
$pw = $_POST['pw'];
$nombre = $_POST['nombre'];
$domiAd = $_POST['domicilio'];

//buscamos la url de la imagen a borrar
$consulta = $con->prepare("SELECT * FROM archivos WHERE id_archivo = $idfoto");
$consulta->execute();

$foto = $consulta->fetch(PDO::FETCH_ASSOC);
$nombreF = $foto['nombre'];
$direc = $foto['direccion'];

$foto_name = $_FILES['foto']['name'];

// $foto_name) != null
if (!empty($foto_name)){
    
    $direccion = "../" . $direc;
    unlink($direccion);

    
    $foto_tmp = $_FILES['foto']['tmp_name'];
    $route = "img/archivos/" . $foto_name;
    $routeB = "../" . $route;

    move_uploaded_file($foto_tmp, $routeB);

    $updateF = $con->prepare("UPDATE archivos SET direccion='$route', nombre='$foto_name' WHERE id_archivo = $idfoto");
    $updateF->execute();

}

//actualizar datos
$update = $con->prepare("UPDATE adoptante SET nombre='$nombre', domicilio= '$domiAd' WHERE id_adoptante = $idAdop");
$update->execute();

$updateLo = $con->prepare("UPDATE login SET correo='$mail', password='$pw' WHERE id_login = $idLogin");
$updateLo->execute();



if ($updateLo){
    echo '<script>
                window.location = "../perfil.php";
            </script>';
} else {
    echo 'ERROR';
}


?>