<!doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Nova</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

        <link rel="stylesheet" href="<?= base_url('recursos_panel/public/assets/css/tailwind.output.css');?>" />
        <link rel="stylesheet" href="<?= base_url('recursos_panel/toast/dist/css/iziToast.min.css') ?>">

		<!-- CSS here -->
            <link rel="stylesheet" href="<?= base_url("recursos_portal/css/bootstrap.min.css"); ?>">
            <link rel="stylesheet" href="<?= base_url("recursos_portal/css/owl.carousel.min.css"); ?>">
            <link rel="stylesheet" href="<?= base_url("recursos_portal/css/flaticon.css"); ?>">
            <link rel="stylesheet" href="<?= base_url("recursos_portal/css/slicknav.css"); ?>">
            <link rel="stylesheet" href="<?= base_url("recursos_portal/css/animate.min.css"); ?>">
            <link rel="stylesheet" href="<?= base_url("recursos_portal/css/magnific-popup.css"); ?>">
            <link rel="stylesheet" href="<?= base_url("recursos_portal/css/fontawesome-all.min.css"); ?>">
            <link rel="stylesheet" href="<?= base_url("recursos_portal/css/themify-icons.css"); ?>">
            <link rel="stylesheet" href="<?= base_url("recursos_portal/css/slick.css"); ?>">
            <link rel="stylesheet" href="<?= base_url("recursos_portal/css/nice-select.css"); ?>">
            <link rel="stylesheet" href="<?= base_url("recursos_portal/css/style.css"); ?>">
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap');

                .centercaja{
                    margin-left: 0 !important;
                }
                .text-center{
                    text-align: center;
                }
                .cajas{
                    padding: auto;
                    margin-top: 10vh;
                    margin-bottom: 17vh;
                }
                .section-padding2 {
                    padding-bottom: 35px !important;
                }
                .titulo{
                    font-size: 60px;
                }
                .espacio{
                    padding-bottom: 15px;
                }
                .boton{
                    margin: 0px auto;
                    width: 60%;
                    padding: 5px;
                    background-color:#BF015D;
                    border-radius:10px;
                }
                .boton:hover{
                    background-color:#DF3185;
                }
                .botondos{
                    margin: 0px auto;
                    margin-top: 10px;
                    width: 60%;
                    padding: 4px;
                    border-radius:10px;
                    border: 2px solid gray;
                    color: black;
                }
                .resgistrar1{
                    color: black;
                }
                .resgistrar1:hover{
                    color:#DF3185 ;
                }
                .caja12{
                    margin-bottom: 49px;
                    width: 40px;
                }
                .sky-blue {
                    background: #f9fafb;
                }
                .header{
                    width: 100%;
                    height: 60px;
                    background-color: white;
                }
                .usuario{
                    text-align: right;
                    padding: 18px;
                }

                .usuario > li{
                    float: none;
                    display: inline-block;
                }
                .cerrar{
                    padding: 5px;
                    height:10px;
                    color: white;
                    text-align: center;
                    background-color: red;
                }
                .card-btn1{
                    padding: 15px 30px !important;
                }

                h1 {
                    font-family: 'Montserrat', sans-serif;
                }

            </style>
   </head>

   <body>

        <!-- Best Features End -->
        <!-- Services Area Start -->
        <header class="header">
            <nav>
                <ul class="usuario d-flex align-items-center">
                    <li class="ms-auto mx-5"><a href="#"></a><strong>Bienvenido</strong>, <?= $nombre_completo ?></li>
                    <li class="ml-auto mx-5"><a href="<?= route_to('cerrar_sesion_alumno')?>" class="btn card-btn1">Cerrar sesión</a></li>
                </ul>
            </nav>
        </header>
        <section class="service-area sky-blue section-padding2 pt-0 cjas2">
            <div class="container mt-">
                <!-- Section Tittle -->
                <div class="row espacio d-flex justify-content-center pt-4">
                    <div class="col-lg-6">
                        <div class="text-center mt-4">
                            <h1><strong>Trámites de recursamiento</strong></h1>

                        </div>
                    </div>
                </div>
                <!-- Section caption -->
                <div class="row cajas">
                    <div class="col-xl-4 col-lg-4 col-md-4 centercaja">
                        <div class="services-caption text-center mb-30">
                            <div class="service-icon">
                                <span class="flaticon-businessman"></span>
                            </div>
                            <div class="service-cap">
                                
                                <h4><?=$nivel_tramite < 1 ? "<a href=\"". route_to('nueva_solicitud'). "\">Generar solicitud</a>" : "<a href=\"". route_to('editar_solicitud'). "\">Actualizar solicitud</a>";?></h4>
                                <!-- <h4><a href="<?= route_to('nueva_solicitud')?>">Generar solicitud</a></h4> -->

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="services-caption<?=$nivel_tramite < 1 ? "-disabled" : "";?> text-center mb-30">
                            <div class="service-icon">
                                <span class="flaticon-businessman"></span>
                            </div>
                            <div class="service-cap">
                            <h4><a <?=$nivel_tramite < 1 ? "" : "href=\"". route_to('seleccionar_materias'). "\"";?>>Seleccionar materias</a></h4>


                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="services-caption<?=$nivel_tramite < 2 ? "-disabled" : "";?> text-center mb-30">
                            <div class="service-icon">
                                <span class="flaticon-businessman"></span>
                            </div>
                            <div class="service-cap">
                            <!-- <h4><a href="<?= route_to('solicitud_pdf')?>">Ver reporte</a></h4> -->
                            <h4><a <?=$nivel_tramite < 2 ? "" : "href=\"". route_to('solicitud_pdf'). "\"";?>>Ver reporte</a></h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                <!-- Copy-Right -->
                <div class="row align-items-center footer">
                    <div class="col-xl-12 ">
                        <div class="footer-copy-right">
                           <p class="text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados 2022 por Nova corporation
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
       <!-- Footer End-->

   </footer>

	<!-- JS here -->

		<!-- All JS Custom Plugins Link Here here -->
        <script src="<?= base_url("recursos_portal/js/vendor/modernizr-3.5.0.min.js"); ?>"></script>

		<!-- Jquery, Popper, Bootstrap -->
		<script src="<?= base_url("recursos_portal/js/vendor/jquery-1.12.4.min.js"); ?>"></script>
        <script src="<?= base_url("recursos_portal/js/popper.min.js"); ?>"></script>
        <script src="<?= base_url("recursos_portal/js/bootstrap.min.js"); ?>"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="<?= base_url("recursos_portal/js/jquery.slicknav.min.js"); ?>"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="<?= base_url("recursos_portal/js/owl.carousel.min.js"); ?>"></script>
        <script src="<?= base_url("recursos_portal/js/slick.min.js"); ?>"></script>
        <!-- Date Picker -->
        <script src="<?= base_url("recursos_portal/js/gijgo.min.js"); ?>"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="<?= base_url("recursos_portal/js/wow.min.js"); ?>"></script>
		<script src="<?= base_url("recursos_portal/js/animated.headline.js"); ?>"></script>
        <script src="<?= base_url("recursos_portal/js/jquery.magnific-popup.js"); ?>"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="<?= base_url("recursos_portal/js/jquery.scrollUp.min.js"); ?>"></script>
        <script src="<?= base_url("recursos_portal/js/jquery.nice-select.min.js"); ?>"></script>
		<script src="<?= base_url("recursos_portal/js/jquery.sticky.js"); ?>"></script>

        <!-- contact js -->
        <script src="<?= base_url("recursos_portal/js/contact.js"); ?>"></script>
        <script src="<?= base_url("recursos_portal/js/jquery.form.js"); ?>"></script>
        <script src="<?= base_url("recursos_portal/js/jquery.validate.min.js"); ?>"></script>
        <script src="<?= base_url("recursos_portal/js/mail-script.js"); ?>"></script>
        <script src="<?= base_url("recursos_portal/js/jquery.ajaxchimp.min.js"); ?>"></script>

		<!-- Jquery Plugins, main Jquery -->
        <script src="<?= base_url("recursos_portal/js/plugins.js"); ?>"></script>
        <script src="<?= base_url("recursos_portal/js/main.js"); ?>"></script>

        <script src="<?= base_url('recursos_panel/jquery-3.6.0.min.js');?>"></script>
        <script src="<?= base_url('recursos_panel/toast/dist/js/iziToast.min.js')?>" type="text/javascript"></script>

        <script><?= imprimir_mensaje() ?></script>

    </body>
</html>
