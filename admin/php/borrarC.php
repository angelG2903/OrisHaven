<?php
session_start();
include "../../php/conexion.php";

$id_a = $_POST['id_a'];
$id_p = $_POST['id_p'];
$id_r = $_POST['id_r'];
$id_c = $_POST['id_c'];


$eliminar = $con->prepare("DELETE FROM consulta WHERE id_consulta= $id_c");
$eliminar->execute();

echo '<script>
        window.location = "../perfilUser.php";
    </script>';


?>