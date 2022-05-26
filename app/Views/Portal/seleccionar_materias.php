<!DOCTYPE html>
<html :class="{ 'theme-dark': light }" x-data="data()" lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Generar solicitud</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('recursos_panel/public/assets/css/tailwind.output.css');?>" />
    <link rel="stylesheet" href="<?= base_url('recursos/toast/dist/css/iziToast.min.css') ?>">

    <link rel="stylesheet" href="<?= base_url("recursos_portal/assets/dark/css/feather.css")?>">
    <link rel="stylesheet" href="<?= base_url("recursos_portal/assets/dark/css/select2.css")?>">
    <link rel="stylesheet" href="<?= base_url("recursos_portal/assets/dark/css/dropzone.css")?>">
    <link rel="stylesheet" href="<?= base_url("recursos_portal/assets/dark/css/uppy.min.css")?>">
    <link rel="stylesheet" href="<?= base_url("recursos_portal/assets/dark/css/jquery.steps.css")?>">
    <link rel="stylesheet" href="<?= base_url("recursos_portal/assets/dark/css/jquery.timepicker.css")?>">
    <link rel="stylesheet" href="<?= base_url("recursos_portal/assets/dark/css/quill.snow.css")?>">

    <link rel="stylesheet" href="<?= base_url("recursos_portal/assets/dark/css/daterangepicker.css")?>">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url("recursos-panel/assets/css/cs-skin-elastic.css"); ?>">

    <link rel="stylesheet" href="<?= base_url("recursos_portal//assets/css/style.css"); ?>">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />


    <?= $this->renderSection("css") ?>

    <style>
    #weatherWidget .currentDesc {
        color: #ffffff !important;
    }

    .traffic-chart {
        min-height: 335px;
    }

    #flotPie1 {
        height: 150px;
    }

    #flotPie1 td {
        padding: 3px;
    }

    #flotPie1 table {
        top: 20px !important;
        right: -10px !important;
    }

    .chart-container {
        display: table;
        min-width: 270px;
        text-align: left;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    #flotLine5 {
        height: 105px;
    }

    #flotBarChart {
        height: 150px;
    }

    #cellPaiChart {
        height: 160px;
    }

    .usuarioplus {
        width: 18%;
        box-shadow: 1px 2px 14px gray;
        border-radius: 15px;
    }

    .fa-asterisk {
        color: red;
    }

    .direc {
        margin-left: -20px;
    }

    .direc-2 {
        margin-left: -15px;
    }

    .is-invalid {
        color: red;
    }

    .card {
        width: 80%;
        margin: 0px auto;
    }

    .row {
        width: 90% !important;
        margin-right: 0px !important;
        margin-left: 0px !important;
        margin: 0px auto !important;
    }

    .card-title {
        display: block;
        margin: 0px auto;
        text-align: center;
    }

    .campos-obli {
        text-align: center;
    }

    .card {
        margin-top: 55px;
    }

    .radio-flotado {
        display: block !important;
        position: absolute !important;
        float: right !important;
    }

    .radio {
        width: 20px;
    }

    .color {
        color: red;
    }
    </style>

    <!-- Icons CSS -->
    <link rel="stylesheet" href="<?= base_url("recursos_portal/assets/dark/css/feather.css")?>">
    <link rel="stylesheet" href="<?= base_url("recursos_portal/assets/dark/css/select2.css")?>">
    <link rel="stylesheet" href="<?= base_url("recursos_portal/assets/dark/css/dropzone.css")?>">
    <link rel="stylesheet" href="<?= base_url("recursos_portal/assets/dark/css/uppy.min.css")?>">
    <link rel="stylesheet" href="<?= base_url("recursos_portal/assets/dark/css/jquery.steps.css")?>">
    <link rel="stylesheet" href="<?= base_url("recursos_portal/assets/dark/css/jquery.timepicker.css")?>">
    <link rel="stylesheet" href="<?= base_url("recursos_portal/assets/dark/css/quill.snow.css")?>">

    <link rel="stylesheet" href="<?= base_url("recursos_portal/assets/dark/css/daterangepicker.css")?>">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="<?= base_url('recursos_panel/public/assets/js/init-alpine.js');?>"></script>

</head>

<body>

    <div class="conteiner">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Selecciona tus materias a recursar</strong>
                <p class="campos-obli">Todos los campos con <span class="color">*</span> son obligatorios</p>
            </div>
            <?php
            $parametros = array('id' => 'form-actualizar-materia'
                          );
            echo form_open_multipart('actualizar_materias', $parametros);
            ?>

            <div class="row justify-content-center pt-4">
                
            </div>

            <div class="row justify-content-center pt-4">

            </div>

            <div class="row justify-content-center pt-4">

            </div>
            <div class="row justify-content-center pt-4">

            </div>
            <div class="row justify-content-center pt-4">

            </div>
            <div class="row justify-content-center pt-4 pb-4">
                <div class="col-6 pt-3 d-flex align-items-center">

                    <div class="mx-auto">
                        <button type="submit" value="submit" class="btn btn-primary mt-1"><i
                                class="fa fa-check"></i>&nbsp; Actualizar</button>
                        <a href="<?= route_to('inicio_alumno') ?>">
                            <button type="button" class="btn btn-danger mt-1"><i class="fa fa-times"></i>&nbsp;
                                Cancelar</button>
                        </a>
                    </div>
                </div>
            </div>

            <?= form_close() ?>

        </div>
    </div>



    <script src="<?= base_url("recursos_portal/assets/dark/js/dropzone.min.js")?>"></script>
    <script src="<?= base_url("recursos_portal/assets/dark/js/uppy.min.js")?>"></script>
    <script src="<?= base_url("recursos_portal/assets/dark/js/quill.min.js")?>"></script>
    <script src="<?= base_url("recursos_portal/assets/dark/js/apps.js")?>"></script>
    <script src="<?= base_url("recursos_portal/assets/dark/js/bootstrap-validate.js")?>"></script>
    <!-- <script src="<?= base_url("recursos_portal/assets/plugins/jquery/js/jquery.min.js")?>"></script>
    <script src="<?= base_url("recursos_portal/assets/dark/validate/jquery.validate.min.js")?>"></script>
    <script src="<?= base_url("recursos_portal/assets/dark/validate/jquery.validate.js")?>"></script> -->

    <!-- Validación de campos -->
    <script src="<?= base_url('resources/js-validation/jquery/jquery-360.js') ?>"></script>
    <script src="<?= base_url('resources/js-validation/jquery-validate/jquery.validate.js') ?>"></script>

    <script>
    /*
        window.onload = function(){
            var fecha = new Date(); //Fecha actual
            var mes = fecha.getMonth()+1; //obteniendo mes
            var dia = fecha.getDate(); //obteniendo dia
            var ano = fecha.getFullYear(); //obteniendo año
            if(dia<10)
                dia='0'+dia; //agrega cero si el menor de 10
            if(mes<10)
                mes='0'+mes //agrega cero si el menor de 10
            document.getElementById('fecha').value=dia+"/"+mes+"/"+ano;
        }
        */
    //deshabilita el campo fecha
    document.getElementById("fecha").disabled = true;
    document.getElementById("matricula").disabled = true;
    document.getElementById("nombre").disabled = true;
    document.getElementById("ap_paterno").disabled = true;
    document.getElementById("ap_materno").disabled = true;
    </script>

    <script>
    var discounted = document.getElementById('curso_baja');
    var no_discounted = document.getElementById('curso_normal')
    var discount_percentage = document.getElementById('cuatrimestre')
    var discount_percentage2 = document.getElementById('grupo')
    var requisite = true

    function updateStatus() {
        if (discounted.checked) {
            $(document.getElementById('cuatrimestre')).parents('.form-group').find('.is-invalid').removeClass('is-invalid');
            $(document.getElementById('grupo')).parents('.form-group').find('.is-invalid').removeClass('is-invalid');
            discount_percentage.disabled = true;
            discount_percentage2.disabled = true;
            document.getElementById('cuatrimestre').value = "";
            document.getElementById('grupo').value = "";
            requisite = false;
        } else {
            discount_percentage.disabled = false;
            discount_percentage2.disabled = false;
            requisite = true;
        }
    }

    discounted.addEventListener('change', updateStatus)
    no_discounted.addEventListener('change', updateStatus)

    $('#form-nueva-solicitud').validate({
        errorElement: "div",
        focusInfalid: false,

        // Reglas para la validación de campos
        rules: {
            'tipo_solicitud': {
                required: true
            },
            'tipo_curso': {
                required: true
            },
            'programa_educativo': {
                required: true
            },
            'periodo': {
                required: true
            },
            'cuatrimestre': {
                required: true
            },
            'turno': {
                required: true
            },
            'director': {
                required: true
            },
            'tutor': {
                required: requisite
            },
            'grupo': {
                required: requisite
            }
        },

        // Mensajes para las reglas de validación
        messages: {
            'tipo_solicitud': {
                required: 'Selecciona un tipo de solicitud'
            },
            'tipo_curso': {
                required: 'Selecciona un tipo de curso'
            },
            'programa_educativo': {
                required: 'Selecciona un programa educativo'
            },
            'periodo': {
                required: 'Selecciona un periodo cuatrimestral'
            },
            'cuatrimestre': {
                required: 'Selecciona un cuatrimestre'
            },
            'turno': {
                required: 'Selecciona un turno'
            },
            'director': {
                required: 'Selecciona un director'
            },
            'tutor': {
                required: 'Selecciona un tutor'
            },
            'grupo': {
                required: 'Es necesario el nombre del usuario'
            }
        },

        errorPlacement: function errorPlacement(error, element) {
            var $parent = $(element).parents('.form-group');

            if ($parent.find('.jquery-validation-error').length) {
                return;
            }

            $parent.append(
                error.addClass('jquery-validation-error small form-text invalid-feedback')
            );
        },
        highlight: function(element) {
            var $el = $(element);
            var $parent = $el.parents('.form-group');

            $el.addClass('is-invalid');

            if ($el.hasClass('select2-hidden-accessible') || $el.attr('data-role') == 'tagsinput') {
                $el.parent().addClass('is-invalid');
            }

            if ($el.hasClass('form-check-input')) {
                $el.parent().find('.is-invalid').removeClass('is-invalid');
            }
        },
        unhighlight: function(element) {
            $(element).parents('.form-group').find('.is-invalid').removeClass('is-invalid');
        }
    });
    </script>
</body>

</html>