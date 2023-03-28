<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
    <meta name="color-scheme" content="light dark">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/iage.css"/>
    <link rel="icon" href="img/icono b.png">
    <link rel="stylesheet" href="css/circulo.css">
    <title>¡Bienvenido a Ori's Haven!</title>
</head>
<body>
    <div>
        <div class="container-fluid bg-info">
            <div class="row">
                <div class="col-7 col-md-8">
                    <img src="img/iconoaa.png" alt="logo" class="img-fluid">
                </div>

                <div class="col-1 pt-1 ">
                    <a href="#contacto" class="btn btn-info"><i class="fa fa-address-book" aria-hidden="true"></i> Contacto</a>
                </div>

                <div class="col-1 d-none d-xl-block pt-1">
                    <a href="registro.php" class="btn btn-info"><i class="fa fa-sign-in" aria-hidden="true"></i> Registrate</a>
                </div>

                <div class="col-1 d-none d-xl-block pt-1">
                    <a href="inicioSesion.php" class="btn btn-info"><i class="fa fa-user" aria-hidden="true"></i> Iniciar sesión</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <div>
            <div class="text-white d-xl-none">
                <div class="row bg-info">
                    <div class="col text-center">
                        <a href="registro.php" class="btn btn-info"><i class="fa fa-sign-in" aria-hidden="true"></i> Registrate</a>
                    </div>
                    <div class="col text-center">
                        <a href="inicioSesion.php" class="btn btn-info"><i class="fa fa-user" aria-hidden="true"></i> Iniciar sesión</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div id="banner" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/oriC.jpg" alt="ori" class="img-fluid d-block w-100">
                            <div class="mt-5 p-5 d-none d-xl-block" style="display: block; position: absolute; background-color: rgba(0,0,0,0.3)">
                                <h2 class="text-white">"Amor es una palabra de cuatro patas"</h2>
                            </div>
                            <div class="mt-2 p-5 d-xl-none" style="display: block; position: absolute; background-color: rgba(0,0,0,0)">
                                <h5 class="text-white">"El amor puro y sincero no necesita palabras"</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/flacoC.jpg" alt="flaco" class="img-fluid d-block w-100">
                            <div class="mt-2 p-5 d-xl-none" style="display: block; position: absolute; background-color: rgba(0,0,0,0)">
                                <h5 class="text-white">"Amor es una palabra de cuatro patas"</h5>
                            </div>
                            <div class="mt-5 p-5 d-none d-xl-block" style="display: block; position: absolute; background-color: rgba(0,0,0,0.3)">
                                <h2 class="text-white">"El amor puro y sincero no necesita palabras"</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row pt-3">
            <div class="col text-center">
                <h1><span class="text-primary">Web</span> builders presenta:</h1>
                <h3>Ori's Haven</h3>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row pt-5">
                <div class="col-12 col-sm-6 text-center">
                    <div class="d-xl-none">
                        <img src="img/mig.jpg" alt="" class="img-fluid w-100">
                    </div>

                    <div class="d-none d-xl-block">
                        <img src="img/mig.jpg" alt="" class="img-fluid w-50">
                    </div>
                </div>

                <div class="col-12 col-sm-6 text-center">
                    <h5>¿Qué es Ori's Haven?</h5>
                    <p class="pt-2" style="font-size: 18px; text-align: justify;">
                        Somos una aplicación web creada con el fin de otorgar una herramienta a los refugios (principalmente) para tener un mayor control sobre los cachorros que existen en sus instalaciones, por otro lado, ofrecemos una mayor facilidad en el proceso de adopción para los clientes o las personas que desean adoptar un perro por medio del proceso en linea, sin necesidad de ir al refugio consultado.
                    </p>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col text-center">
                <h3>Nuestras mascotas</h3>
            </div>
        </div>

        <div class="container">
            <div class="row mt-4 mt-md-5">

                <div class="col-md-4 col-sm-6 col-4 mb-3">
                    <img src="img/mascota2.jpg" alt="" class="img-fluid mascotas">
                </div>

                <div class="col-md-4 col-sm-6 col-4 mb-3">
                    <img src="img/mascota1.jpg" alt="" class=" img-fluid mascotas">
                </div>

                <div class="col-md-4 col-sm-6 col-4 mb-3">
                    <img src="img/mascota2.jpg" alt="" class="img-fluid mascotas">
                </div>

            </div>
        </div>

        <div class="row mt-5 pb-4" id="contacto" style="background-color:#F3F3F3">
            <div class="container">
                <div class="row">			
                    <div class="col-12 pt-4">
                        <h2 class="mb-4 text-center">Contáctanos</h2>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="pt-md-3">
                            <label for="input_nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="input_nombre"/>
                        </div>
                        <div class="pt-3 pb-md-3">
                            <label for="input_correo" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="input_correo"/>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="pt-3 pb-3">
                            <label for="input_comentarios" class="form-label">Comentarios</label>
                            <input type="text" class="form-control pb-5" id="input_comentarios"/>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button class="btn btn-info">Enviar comentarios</button>
                    </div>
                </div>
            </div>
		</div>

        <div class="row pt-5 pb-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h4>El logo Ori's Haven es una marca registrada por <span class="text-primary">Web</span> builders & <span class="text-danger">AD</span> Company</h4>
                    </div>
                    <div class="col-12 text-center">
                        <h5><span class="text-primary">Web</span> builders S.A de C.V</h5>
                    </div>
                    <div class="col-12 text-center">
                        <h6>All rights reserved</h6>
                    </div>
                </div>
            </div>
        </div>
	</div>

    </div>

</body>

    <!--Sirve para que el carousel sirva y el usuario pueda moverlo desde la vista movil-->
    <script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/tether.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/iage_framework.js"></script>
    <script src="js/jquery.touchSwipe.min.js"></script>
    
    <script>

		$(".carousel").carousel({
			interval: 9000,
			pause: true,
			touch: true
		});	
			
		//Proceso para poder dar navegación a las imagenes del carousel	
		// enable prev/next navigation
		$(".carousel .carousel-control-prev").on("click", function () {
			$(".carousel").carousel("prev");
		});

		$(".carousel .carousel-control-next").on("click", function () {
			$(".carousel").carousel("next");
		});

		$(".carousel .carousel-inner").swipe({
			swipeLeft: function (event, direction, distance, duration, fingerCount) {
				this.parent().carousel("next");
			},
			swipeRight: function () {
				this.parent().carousel("prev");
			},
			threshold: 0,
			tap: function (event, target) {
				window.location = $(this).find(".carousel-item.active a").attr("href");
			},
			excludedElements: "label, button, input, select, textarea, .noSwipe"
		});

        set_frame('no_quick_bar', 'app_bar', 'menu_bar', 'custom');
		
    </script>

</html>