<?php

require "conexion.php";
// p.estado,
$verPerro = $con -> prepare("SELECT p.id_perro, p.id_foto, p.nombre_perro, p.genero, r.nombre_Refugio, r.id_refugio, ar.direccion FROM perros AS p, refugios AS r, archivos as ar
WHERE p.id_refugio = r.id_refugio AND r.id_refugio = p.id_refugio AND p.id_foto= ar.id_archivo");
$verPerro -> execute();

$resultados = $verPerro -> fetchAll(PDO::FETCH_OBJ);

foreach ($resultados as $perro) {
    echo '<div class="row">
    <div class="p-0 p-md-2 col-12 pb-3">
        <div class="apartado">
            <div class="d-xl-none text-center pt-3">
                <img src="img/mascota1.jpg" alt="" class="w-75 sombra mascotas">
            </div>
            <div class="row p-3 ">
                <div class="d-none d-xl-block col-md-3 pt-2 pt-0">
                    <img src="img/mascota1.jpg" alt="" class="img-fluid sombra mascotas w-100">
                </div>
                <div class="col-12 col-md-6 pt-4 ">
                    <p class="p-0 p-md-2">Nombre del perro: <b>'.ucfirst($perro -> nombre_perro).'</b></p>
                    <p class="p-0 p-md-2">Género: <b>'.ucfirst($perro -> genero).'</b></p>
                    <p class="p-0 p-md-2">Refugio: <b>'.ucfirst($perro -> nombre_Refugio).'</b></p>
                    <p class="p-0 p-md-2">Estado: <b>Adoptado</b></p>
                </div>

                <div class="col-12 col-md-3 pt-0 pt-md-5 d-none d-xl-block">
                    <div class="pt-0 pt-md-5">
                        <form action="perfilPerro.php" method="post">
                            <input type="text" value="'.ucfirst($perro -> id_perro).'" name="id_perro" style="display: none;">
                            <input type="text" value="'.ucfirst($perro -> id_refugio).'" name="id_refugio" style="display: none;">
                            <input type="text" value="'.ucfirst($perro -> id_foto).'" name="id_foto" style="display: none;">
                            <button type="submit" class="btn btn-info sombra" >Ver más</button>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-md-3 pt-0 pt-md-5 text-center d-xl-none">
                    <div class="pt-0 pt-md-5">
                        <form action="perfilPerro.php" method="post">
                            <input type="text" value="'.ucfirst($perro -> id_perro).'" name="id_perro" style="display: none;">
                            <input type="text" value="'.ucfirst($perro -> id_refugio).'" name="id_refugio" style="display: none;">
                            <input type="text" value="'.ucfirst($perro -> id_foto).'" name="id_foto" style="display: none;">
                            <button type="submit" class="btn btn-info sombra" >Ver más</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>';
}


?>