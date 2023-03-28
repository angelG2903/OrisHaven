<div class="bg-info">
    <div class="container-fluid bg-info">
        <div class="row">
            <div class="col-9 col-sm-7" onclick="location='perfilUser.php'">
                <img src="../img/iconoaa.png" alt="logo" class="img-fluid">
            </div>

            <div class="col-0 d-none d-xl-block pt-1">
                <button type="button" class="btn btn-info" onclick="location='altaPerros.php'">
                    <i class="fa fa-file" aria-hidden="true"></i> Dar de alta
                </button>
            </div>

            <div class="col-0 pt-1 d-none d-xl-block">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-historial">
                    <i class="fa fa-history" aria-hidden="true"></i> Historial
                </button>
            </div>

            <div class="col-0 d-none d-xl-block pt-1" onclick="location='refugio.php'">
                <button type="button" class="btn btn-info">
                    <i class="fa fa-home" aria-hidden="true"></i> Refugio
                </button>
            </div>
            
            <div class="col-0 d-none d-xl-block pt-1" onclick="location='../index.php'">
                <button type="button" class="btn btn-info">
                    <i class="fa fa-sign-in" aria-hidden="true"></i> Cerrar sesión
                </button>
            </div>

            <div class="col-2 d-xl-none">
                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    <h5><i class="fa fa-bars pt-1" aria-hidden="true"></i></h5>
                </button>
            </div>
        </div>
    </div>
</div>

<?php 
    include("parts/notificaciones.php");
    include("parts/menuMovil.php");
?>

<!--Sirve para que el carousel sirva y el usuario pueda moverlo desde la vista movil-->
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/tether.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/iage_framework.js"></script>
<script src="../js/jquery.touchSwipe.min.js"></script>