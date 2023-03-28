<?php

session_start();

if ($_POST){
    require "conexion.php";
    $co = $_POST['correo'];
    $pw = $_POST['password'];
    $con-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = $con->prepare("SELECT * FROM login WHERE correo = :co AND password = :pw");
    $query->bindParam(":co", $co);
    $query->bindParam(":pw", $pw);
    $query->execute();
    $usuario = $query->fetch(PDO::FETCH_ASSOC);
    
    if ($usuario) {
        $_SESSION['id_login'] = $usuario['id_login'];
        $_SESSION['correo'] = $usuario['correo'];
        $_SESSION['rol'] = $usuario['rol'];
        $id = $_SESSION['id_login'];

        if ($_SESSION['rol']=='adoptante'){
            $query2 = $con->prepare("SELECT id_adoptante FROM adoptante WHERE id_login=$id");
            $query2->execute();
            $usuario = $query2->fetch(PDO::FETCH_ASSOC);
            $_SESSION['id_ad'] = $usuario['id_adoptante'];
            echo '<script>
                window.location = "../usuarioPrincipal.php";
            </script>';
        }else{
            $query2 = $con->prepare("SELECT id_refugio FROM refugios WHERE id_login=$id");
            $query2->execute();
            $usuario = $query2->fetch(PDO::FETCH_ASSOC);
            $_SESSION['id_ref'] = $usuario['id_refugio'];
            echo '<script>
                window.location = "../admin/perfilUser.php";
            </script>';
        }
        
        // header("location:/usuarioPrincipal.php");
    }else{
        echo '<script>
            alert("Usuario o contraseña incorrecta");
            window.location = "../inicioSesion.php";
        </script>';
    }

}


?>