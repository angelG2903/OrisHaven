<?php
session_start();
include '../../php/conexion.php';

$idA = $_POST['id_a'];
$idR = $_POST['id_r'];
$idP = $_POST['id_p'];
// id_adoptante	id_refugio	fecha	id_perro notificaciones
$notif = $con->prepare("INSERT INTO notificaciones(id_adoptante,id_refugio,id_perro) VALUES ('$idA', '$idR', '$idP')");
$notif ->execute();

echo '<script>
        window.location = "../perfilUser.php";
    </script>';

?>