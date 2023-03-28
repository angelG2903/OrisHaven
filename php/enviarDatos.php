<?php

session_start();
include 'conexion.php';
$idPer = $_POST['id_p'];
$idRef = $_POST['id_r'];

$idA = $_SESSION['id_ad'];

$consulta = $con->prepare("INSERT INTO consulta(id_adoptante,id_refugio,id_perro) VALUES('$idA','$idRef','$idPer')");
$consulta->execute();



echo '<script>
        window.location = "../usuarioPrincipal.php";
    </script>';

?>