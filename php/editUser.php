<?php

include_once 'conexion.php';

$fotoA = $_SESSION['direccionF'];
$nombre = $_SESSION['nombre'];
$domicilio = $_SESSION['domicilio'];
$correo = $_SESSION['correo'];


echo '  <div class="p-0 p-md-2 col-12 pb-3">
            <div class="apartado">
                <div class="d-xl-none text-center pt-3">
                    <img src="'.$fotoA.'" alt="" class="w-75">
                </div>
                <div class="row p-3" style="font-size: 15px">
                    
                    <div class="col-12 col-md-4 p-5 d-none d-xl-block">
                        <img src="'.$fotoA.'" alt="" class="sombra ">
                    </div>
                    <div class="col-12 col-md-6 pl-md-5 ml-md-5">
                        <h5 class="text-center">Editar información.</h5>
                        
                        <div class="file">
                            <label for="fotoA" class="form-label">Foto (opcional):</label>
                            <input type="file" class="form-control-file" id="fotoA" name="foto">
                        </div>
                        <hr>
                        <div class="">
                            <label for="input_nombre" class="form-label">Nombre:</label>
                            <input type="text" value="'.$nombre.'" class="form-control" name="nombre" id="input_nombre"/>
                        </div>
                        <div class="">
                            <label for="dom" class="form-label">Domicilio:</label>
                            <input type="text" value="'.$domicilio.'" class="form-control" name="domicilio" id="dom"/>
                        </div>
                        <div class="">
                            <label for="email" class="form-label">Correo electronico:</label>
                            <input type="email" value="'.$correo.'" class="form-control" name="correo" id="email"/>
                        </div>
                        <div class="">
                            <label for="contra" class="form-label">Contraseña:</label>
                            <input type="password" class="form-control" name="pw" id="contra" required/>
                        </div>
                        
                    </div>
                </div>
            </div>';

?>