<!DOCTYPE html>
<html :class="{ 'theme-dark': light }" x-data="data()" lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Iniciar sesión administrador</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?= base_url('recursos_panel/public/assets/css/tailwind.output.css');?>" />
    <link rel="stylesheet" href="<?= base_url('recursos_panel/toast/dist/css/iziToast.min.css') ?>">
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="<?= base_url('recursos_panel/public/assets/js/init-alpine.js');?>"></script>
  </head>
  <body>
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
      <div
        class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800"
      >
        <div class="flex flex-col overflow-y-auto md:flex-row">
          <div class="h-32 md:h-auto md:w-1/2">
            <img
              aria-hidden="true"
              class="object-cover w-full h-full dark:hidden"
              src="<?= base_url('Imagenes/Portal/Login_docente.jpg');?>"
              alt="Office"
            />
            <img
              aria-hidden="true"
              class="hidden object-cover w-full h-full dark:block"
              src="<?= base_url('Imagenes/Portal/Login_docente.jpg');?>"
              alt="Office"
            />
          </div>
          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
              <h1
                class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200"
              >
                Iniciar sesión administrador
              </h1>

              <div action="" method="post" class="tm-login-form">
                  <?php
                          $parametros = array('id' => 'form-login-alumno'
                                             );
                          echo form_open('logear_administrador', $parametros);
                      ?>

                      <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Correo institucional</span>
                        <?php
                            $parametros = array('type' => 'email',
                                                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
                                                'id' => 'email',
                                                'name' => 'email',
                                                'placeholder' => 'example@email.com',
                                                'required' => '',
                                                'maxlength' => '40'
                                                );
                            echo form_input($parametros);
                        ?>
                      </label>

                      <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Contraseña</span>
                        <?php
                            $parametros = array('type' => 'password',
                                                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
                                                'id' => 'contrasenia',
                                                'name' => 'contrasenia',
                                                'placeholder' => '***********',
                                                'required' => '',
                                                'maxlength' => '30'
                                                );
                            echo form_input($parametros);
                        ?>
                      </label>

                      <input type="submit" value="Ingresar"
                        class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                      >

                      <a
                        class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red"
                        href="<?= route_to('/')?>"
                      >
                        Cancelar
                      </a>

                  <?= form_close() ?>
                </div>

              <!-- You should use a button here, as the anchor is only used for the example  -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="<?= base_url('recursos_panel/jquery-3.6.0.min.js');?>"></script>
    <script src="<?= base_url('recursos_panel/toast/dist/js/iziToast.min.js')?>" type="text/javascript"></script>
    <script><?= imprimir_mensaje() ?></script>
  </body>
</html>
