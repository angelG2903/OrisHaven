<?php
session_start();
include "../../php/conexion.php";
$idR = $_SESSION['id_ref'];
if (isset($_POST['nombreP'])) {

    $nomP = $_POST['nombreP'];
    $edadP = $_POST['edadP'];
    $razaP = $_POST['razaP'];
    $genero = $_POST['sub'];

    // fotografia del perro
    $fotoN = $_FILES['fotoP']['name'];
    $foto_tmp = $_FILES['fotoP']['tmp_name'];

    $route = "img/archivos/" . $fotoN;
    $routeU = "../" . $route;

    move_uploaded_file($foto_tmp, $routeU);

    //kardex del perro
    $kardexN = $_FILES['fotoP']['name'];
    $kardex_tmp = $_FILES['fotoP']['tmp_name'];

    $routeK = "img/archivos/" . $kardexN;
    $routeKU = "../" . $routeK;

    move_uploaded_file($kardex_tmp, $routeKU);

    //ingresar foto
    $idF = $con->prepare("INSERT INTO archivos(direccion,nombre,tipo) VALUES ('$route','$fotoN','foto')");
    $idF->execute();

    $idfoto = $con->lastInsertId();
    $idfotoF = $idfoto;

    //ingresar Kardex
    $idK = $con->prepare("INSERT INTO archivos(direccion,nombre,tipo) VALUES ('$routeK','$kardexN','Kardex')");
    $idK->execute();

    $idkardex = $con->lastInsertId();
    $idKardexF = $idkardex;


    $pdo = $con->prepare("INSERT INTO perros(id_refugio,id_foto,kardex,nombre_perro,edad,raza,genero) 
                    VALUES ('$idR', '$idfotoF','$idKardexF','$nomP','$edadP','$razaP','$genero')");
    $pdo->execute();

    echo '<script>
                window.location = "../perfilUser.php";
        </script>';
    
}