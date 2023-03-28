<?php

include "conexion.php";

if (isset($_POST['nombre'])) {

    $mail = $_POST['correo'];
    $pw = $_POST['password'];

    $nombre = $_POST['nombre'];
    $fecha = $_POST['fechaNa'];
    $genero = $_POST['sub'];

    if ($_POST['adoptar'] != 'darEnAdopcion') {
        $curpAd = $_POST['curp'];
        $domiAd = $_POST['domicilio'];
        $telefAd = $_POST['numeroT'];

        $foto_name = $_FILES['foto']['name'];
        $foto_tmp = $_FILES['foto']['tmp_name'];

        $route = "img/archivos/" . $foto_name;
        $routeB = "../" . $route;

        move_uploaded_file($foto_tmp, $routeB);
        

        $inserL = $con->prepare("INSERT INTO login(correo,password,rol) VALUES ('$mail','$pw','adoptante')");
        $inserL->execute();

        $in = $con->lastInsertId();
        $incre = $in;

        $inserAr = $con->prepare("INSERT INTO archivos(direccion,nombre,tipo) VALUES ('$route','$foto_name','fotografiaA')");
        $inserAr->execute();

        $idfoto = $con->lastInsertId();
        $idfotoF = $idfoto;

        $inserAd = $con->prepare("INSERT INTO adoptante(id_login,id_foto,nombre,curp,fecha_nacimiento,domicilio,genero,telefono) 
                VALUES ('$incre','$idfotoF','$nombre','$curpAd','$fecha','$domiAd','$genero','$telefAd')");
        $inserAd->execute();

        echo '<script>
                window.location = "../inicioSesion.php";
            </script>';

    } else {
        $domicilioR = $_POST['domicilioR'];
        $nombreR = $_POST['nombreR'];
        $nombreD = $_POST['nombreD'];//-------------
        $curpR = $_POST['curpR'];
        $numeroR = $_POST['numeroR'];
        $diaInicial = $_POST['sub1'];
        $diaFinal = $_POST['sub2'];
        $horaInicio = $_POST['Hi'];
        $horaFinal = $_POST['Hf'];

        /*Identificacion del Dueño de refugio*/
        $Ident_name = $_FILES['identificacion']['name'];
        $Ident_tmp = $_FILES['identificacion']['tmp_name'];

        $route_iden = "img/archivos/" . $Ident_name;
        $route_idenB = "../" . $route_iden;

        move_uploaded_file($Ident_tmp, $route_idenB);

        /*fotografia del dueño*/
        $fotoD_name = $_FILES['fotoD']['name'];
        $fotoD_tmp = $_FILES['fotoD']['tmp_name'];

        $route_fotoD = "img/archivos/" . $fotoD_name;
        $route_fotoDB = "../" . $route_fotoD;

        move_uploaded_file($fotoD_tmp, $route_fotoDB);

        /*foto del refugio*/
        $fotoR_name = $_FILES['fotoR']['name'];
        $fotoR_tmp = $_FILES['fotoR']['tmp_name'];

        $route_fotoR = "img/archivos/" . $fotoR_name;
        $route_fotoRB = "../" . $route_fotoR;

        move_uploaded_file($fotoR_tmp, $route_fotoRB);


        $inser_LR = $con->prepare("INSERT INTO login(correo,password,rol) VALUES ('$mail','$pw','refugio')");
        $inser_LR->execute();

        $inR = $con->lastInsertId();
        $increR = $inR;

        // insertamos foto del dueño
        $insertar_fotoD = $con->prepare("INSERT INTO archivos(direccion,nombre,tipo) 
        VALUES ('$route_fotoD','$fotoD_name','foto_dueno')");
        $insertar_fotoD->execute();

        $idD = $con->lastInsertId();
        $idfotoD = $idD;

        //insertamos foto del refugio
        $insertar_fotoR = $con->prepare("INSERT INTO archivos(direccion,nombre,tipo) 
        VALUES ('$route_fotoR','$fotoR_name','foto_refugio')");
        $insertar_fotoR->execute();

        $idR = $con->lastInsertId();
        $idfotoR = $idR;

        //insertamos identificacion
        $insertar_iden = $con->prepare("INSERT INTO archivos(direccion,nombre,tipo) 
                VALUES ('$route_iden','$Ident_name','identificacion')");
        $insertar_iden->execute();

        $idIden = $con->lastInsertId();
        $idIdentificacion = $idIden;


        $inser_ref = $con->prepare("INSERT INTO refugios(id_login,id_fotoD,id_fotoR,id_iden,usuario,nombre_Refugio,curp,fecha_nacimiento,domicilio,genero,telefono,hora_inicial,hora_final,dia_inicial,dia_final) 
                VALUES ('$increR','$idfotoD','$idfotoR','$idIdentificacion','$nombre','$nombreR','$curpR','$fecha','$domicilioR','$genero','$numeroR','$horaInicio', '$horaFinal', '$diaInicial', '$diaFinal')");
        $inser_ref->execute();

        echo '<script>
                window.location = "../inicioSesion.php";
            </script>';

    }

}