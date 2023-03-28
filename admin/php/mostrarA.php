<?php 


include "../php/conexion.php";
$idR = $_SESSION['id_ref'];

$consulta = $con->prepare("SELECT a.nombre, a.curp, p.nombre_perro, a.id_adoptante, p.id_perro, a.id_login, ar.direccion, c.id_consulta FROM adoptante as a, perros as p, consulta as c, refugios as r, archivos as ar 
WHERE c.id_adoptante = a.id_adoptante AND c.id_refugio = $idR AND c.id_refugio= r.id_refugio AND p.id_perro= c.id_perro AND ar.id_archivo=a.id_foto");
$consulta->execute();

$resultados = $consulta -> fetchAll(PDO::FETCH_OBJ);

foreach ($resultados as $adoptante) {

    echo '<div class="row">
            <div class="p-0 p-md-2 col-12 pb-3">
                <div class="apartado">
                    <div class="d-xl-none text-center pt-3">
                        <img src="../'.$adoptante -> direccion.'" alt="" class="w-75 sombra mascotas">
                    </div>
                    <div class="row p-3 ">
                        <div class="d-none d-xl-block col-md-3 pt-2 pt-0">
                            <img src="../'.$adoptante -> direccion.'" alt="" class="img-fluid sombra mascotas w-100">
                        </div>
                        <div class="col-12 col-md-6 pt-4 ">
                            <p class="p-0 p-md-2">Nombre del adoptante: <b>'.ucfirst($adoptante -> nombre).'</b></p>
                            <p class="p-0 p-md-2">Datos del adoptante: <b>'.ucfirst($adoptante -> curp).'</b></p>
                            <p class="p-0 p-md-2">Nombre del perro: <b>'.ucfirst($adoptante -> nombre_perro).'</b></p>
                        </div>

                        <form method="post" action="vistaPerfil.php">
                            <input type="text" value="'.$adoptante -> id_adoptante.'" name="id_a" style="display: none;">
                            <input type="text" value="'.$adoptante -> id_login.'" name="id_l" style="display: none;">
                            <input type="text" value="'.$adoptante -> id_perro.'" name="id_p" style="display: none;">
                            <input type="text" value="'.$adoptante -> direccion.'" name="foto" style="display: none;">
                            <input type="text" value="'.$adoptante -> id_consulta.'" name="id_c" style="display: none;">
                            <div class="col-12 col-md-3 pt-0 pt-md-5 d-none d-xl-block">
                                <div class="pt-0 pt-md-5">
                                    <button type="submit" class="btn btn-info sombra" >Ver más</button>
                                </div>
                            </div>
                        </form>

                        <form method="post" action="vistaPerfil.php">
                            <input type="text" value="'.$adoptante -> id_adoptante.'" name="id_a" style="display: none;">
                            <input type="text" value="'.$adoptante -> id_login.'" name="id_l" style="display: none;">
                            <input type="text" value="'.$adoptante -> id_perro.'" name="id_p" style="display: none;">
                            <input type="text" value="'.$adoptante -> direccion.'" name="foto" style="display: none;">
                            <input type="text" value="'.$adoptante -> id_consulta.'" name="id_c" style="display: none;">
                            <div class="col-12 col-md-3 pt-0 pt-md-5 text-center d-xl-none">
                                <div class="pt-0 pt-md-5">
                                    <button class="btn btn-info sombra" >Ver más</button>
                                </div>
                            </div>
                        </form>
                        
                        
                    </div>
                </div>
            </div>
        </div>';
}

?>