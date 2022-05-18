<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Nova</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

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
                .centercaja{
                    margin-left: 15% !important;
                }
                .text-center{
                    text-align: center;
                }
                .cajas{
                    padding: auto;
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
                    background-color:#e88cea;
                    border-radius:10px;
                }
                .boton:hover{
                    background-color:#835EF8;
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
                    color:#835EF8 ;
                }
                .caja12{
                    margin-bottom: 49px;
                    width: 40px;
                }
                .sky-blue {
                    background: #f9fafb;
                }
            </style>
   </head>

   <body>

        <!-- Best Features End -->
        <!-- Services Area Start -->
        <section class="service-area sky-blue section-padding2 pt-0 cjas2">
            <div class="container mt-">
                <!-- Section Tittle -->
                <div class="row espacio d-flex justify-content-center pt-4">
                    <div class="col-lg-6">
                        <div class="text-center">
                            <b><h1 class="titulo">Recursamientos</h1></b>

                        </div>
                    </div>
                </div>
                <!-- Section caption -->
                <div class="row cajas">
                    <div class="col-xl-4 col-lg-4 col-md-6 centercaja">
                        <div class="services-caption text-center mb-30">
                            <div class="service-icon">
                                <span class="flaticon-businessman"></span>
                            </div>
                            <div class="service-cap">
                                <h4><a href="#">Ingresar como alumno</a></h4>
                                <div class="boton">
                                    <a href="login_alumno">Iniciar sesión</a>
                                </div>
                                <div class="botondos">
                                    <a class="resgistrar1" href="<?= base_url('/registrar_alumno')?>">Registrarse</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption text-center mb-30">
                            <div class="service-icon">
                                <span class="flaticon-plane"></span>
                            </div>
                            <div class="service-cap">
                            <h4><a href="#">Ingresar como docente</a></h4>
                                <div class="boton">
                                    <a href="<?= route_to('login_docente')?>">Iniciar sesión</a>
                                </div>
                                <div class="caja12"></div>
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

    </body>
</html>
