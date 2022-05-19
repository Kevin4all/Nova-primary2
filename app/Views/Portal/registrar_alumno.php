<!DOCTYPE html>
<html :class="{ 'theme-dark': light }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro Alumno</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?= base_url('recursos_panel/public/assets/css/tailwind.output.css');?>" />
    <link rel="stylesheet" href="<?= base_url('recursos/toast/dist/css/iziToast.min.css') ?>">
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
              src="<?= base_url('Imagenes/Portal/Login_alumno.jpg');?>"
              alt="Office"
            />
            <img
              aria-hidden="true"
              class="hidden object-cover w-full h-full dark:block"
              src="<?= base_url('Imagenes/Portal/Login_alumno.jpg');?>"
              alt="Office"
            />
          </div>
          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
              <h1
                class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200"
              >
                Crear  Cuenta
              </h1>
              <div action="" method="post" class="tm-login-form">
                  <?php
                          $parametros = array('id' => 'formulario-registrar-alumno'
                                             );
                          echo form_open_multipart('insertar_alumno',$parametros);
                      ?>
                      <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Nombre(s)<br></span>
                                              <?php
                                      $parametros = array('type' => 'text',
                                                          'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
                                                          'id' => 'nombre_alumno',
                                                          'name' => 'nombre_alumno',
                                                          'placeholder' => 'Nombre(s)',
                                                          'required' => ''
                                                          );
                                      echo form_input($parametros);
                                  ?>
                      </label>

                      <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Apellido Paterno <br></span>
                                              <?php
                                      $parametros = array('type' => 'text',
                                                          'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
                                                          'id' => 'apellidop',
                                                          'name' => 'apellidop',
                                                          'placeholder' => 'Apellido Paterno',
                                                          'required' => ''
                                                          );
                                      echo form_input($parametros);
                                  ?>
                      </label>

                      <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Apellido Materno <br></span>
                                              <?php
                                      $parametros = array('type' => 'text',
                                                          'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
                                                          'id' => 'apellidom',
                                                          'name' => 'apellidom',
                                                          'placeholder' => 'Apellido Materno',
                                                          'required' => ''
                                                          );
                                      echo form_input($parametros);
                                  ?>
                      </label>

                      <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Matricula</span>
                        <?php
                            $parametros = array('type' => 'text',
                                                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
                                                'id' => 'matricula',
                                                'name' => 'matricula',
                                                'placeholder' => '1930000000',
                                                'required' => '',
                                                'maxlength' => '10'
                                                );
                            echo form_input($parametros);
                        ?>
                      </label>

                      <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Correo</span>
                        <?php
                            $parametros = array('type' => 'email',
                                                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
                                                'id' => 'correo_alumno',
                                                'name' => 'correo_alumno',
                                                'placeholder' => 'example@email.com',
                                                'required' => '',
                                                'maxlength' => ''
                                                );
                            echo form_input($parametros);
                        ?>
                      </label>

                      <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Sexo <br></span>
                        <?php
                                $parametros = array('id' => 'masculino',
                                                    'name' => 'sexo'
                                                    );
                                echo form_radio($parametros, SEXO_MASCULINO);
                            ?>
                            Masculino
                            <br>
                            <?php
                                $parametros = array('id' => 'femenino',
                                                    'name' => 'sexo'
                                                    );
                                echo form_radio($parametros, SEXO_FEMENINO);
                            ?>
                            Femenino
                      </label>
                      <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Cuatrimestre Original</span>
                        <?php
                            $parametros = array('type' => 'number',
                                                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
                                                'id' => 'cuatri_original',
                                                'name' => 'cuatri_original',
                                                'placeholder' => '1',
                                                'required' => '',
                                                'max' => '9',
                                                'min' => '1'
                                                );
                            echo form_input($parametros);
                        ?>
                      </label>

                      <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Grupo <br></span>
                                              <?php
                                      $parametros = array('type' => 'text',
                                                          'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
                                                          'id' => 'grupo_a',
                                                          'name' => 'grupo_a',
                                                          'placeholder' => 'A',
                                                          'required' => '',
                                                          'maxlength' => '1'
                                                          );
                                      echo form_input($parametros);
                                  ?>
                      </label>

                      <br>

                      <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Teléfono</span>
                        <?php
                            $parametros = array('type' => 'text',
                                                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
                                                'id' => 'telefono',
                                                'name' => 'telefono',
                                                'placeholder' => '1234567890',
                                                'required' => '',
                                                'maxlength' => '10'
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
                                                'maxlength' => '10'
                                                );
                            echo form_input($parametros);
                        ?>
                      </label>

                      <input type="submit" value="Crear cuenta"
                        class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                      >
                  <?= form_close() ?>
                </div>

              <hr class="my-8" />

              <p class="mt-4">
                <a
                  class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                  href="<?= base_url('login_alumno')?>"
                >
                  Ya tienes una cuenta? Inicia Sesión
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  </body>
</html>
