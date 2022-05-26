<?= $this->extend('Panel_base/panel_base') ?>

<?= $this->section('css') ?>

<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
<h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Detalles alumno
            </h2>

            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >

            <?php
            $parametros = array('id' => 'formulario-alumno-detalles'
                                );
            echo form_open_multipart(route_to('editar_alumno'), $parametros);
        ?>
        <div class="mt-4 text-sm">
        <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Matricula:</span>
                <?php
                            $parametros = array('type' => 'text',
                                                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
                                                'id' => 'matricula',
                                                'name' => 'matricula',
                                                'placeholder' => 'Matricula',
                                                'value' => $alumno->matricula,
                                                'readonly' => true,
                                                'required' => true
                                                );
                            echo form_input($parametros);
                        ?>
              </label>
                                            </div>
                                            <div class="mt-4 text-sm">
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Nombre:</span>
                <?php
                            $parametros = array('type' => 'text',
                                                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
                                                'id' => 'nombre',
                                                'name' => 'nombre',
                                                'placeholder' => 'Nombre',
                                                'value' => $alumno->nombre,
                                                'readonly' => true,
                                                'required' => true
                                                );
                            echo form_input($parametros);
                        ?>
              </label>
                                            </div>
                                            <div class="mt-4 text-sm">
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Apellido paterno:</span>
                <?php
                            $parametros = array('type' => 'text',
                                                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
                                                'id' => 'ap_paterno',
                                                'name' => 'ap_paterno',
                                                'placeholder' => 'Apellido paterno',
                                                'value' => $alumno->ap_paterno,
                                                'readonly' => true,
                                                'required' => true
                                                );
                            echo form_input($parametros);
                        ?>
              </label>
                                            </div>
                                            <div class="mt-4 text-sm">
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Apellido materno:</span>
                <?php
                            $parametros = array('type' => 'text',
                                                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
                                                'id' => 'ap_materno',
                                                'name' => 'ap_materno',
                                                'placeholder' => 'Apellido materno',
                                                'value' => $alumno->ap_materno,
                                                'readonly' => true,
                                                'required' => true
                                                );
                            echo form_input($parametros);
                            
                            $parametros = array('type' => 'hidden',
                                                'id' => 'id_alumno',
                                                'name' => 'id_alumno',
                                                'value' => $alumno->id_alumno
                                                );
                            echo form_input($parametros);
                        ?>
              </label>
                                            </div>
                                            <div class="mt-4 text-sm">
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Email:</span>
                <?php
                            $parametros = array('type' => 'text',
                                                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
                                                'id' => 'email',
                                                'name' => 'email',
                                                'placeholder' => 'Email',
                                                'value' => $alumno->email,
                                                'readonly' => true,
                                                'required' => true
                                                );
                            echo form_input($parametros);
                        ?>
              </label>
                                            </div>
                                            
                                            <div class="mt-4 text-sm">
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Teléfono:</span>
                <?php
                            $parametros = array('type' => 'text',
                                                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
                                                'id' => 'telefono',
                                                'name' => 'telefono',
                                                'placeholder' => 'Teléfono',
                                                'value' => $alumno->telefono,
                                                'readonly' => true,
                                                'required' => true
                                                );
                            echo form_input($parametros);
                        ?>
              </label>
                                            </div>
                                            
                                            <div class="mt-4 text-sm">
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Cuatrimestre original:</span>
                <?php
                            $parametros = array('type' => 'number',
                            'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
                            'id' => 'cuatrimestre_original',
                            'name' => 'cuatrimestre_original',
                            'placeholder' => '1',
                            'min' => '1',
                            'max' => '9',
                            'value' => $alumno->cuatrimestre_original
                            );
                            echo form_input($parametros);
                        ?>
              </label>
                                            </div>
                                            
                                            <div class="mt-4 text-sm">
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Grupo original:</span>
                <?php
                            $parametros = array('type' => 'text',
                                                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
                                                'id' => 'grupo_original',
                                                'name' => 'grupo_original',
                                                'placeholder' => 'Grupo original',
                                                'value' => $alumno->grupo_original
                                                );
                            echo form_input($parametros);
                        ?>
              </label>
                                            </div>
                                            
                                            <div class="mt-4 text-sm">
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Cuatrimestre recursamiento:</span>
                <?php
                            $parametros = array('type' => 'number',
                                                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
                                                'id' => 'cuatrimestre_recursamiento',
                                                'name' => 'cuatrimestre_recursamiento',
                                                'placeholder' => '1',
                                                'min' => '1',
                                                'max' => '9',
                                                'value' => $alumno->cuatrimestre_recursamiento
                                                );
                            echo form_input($parametros);
                        ?>
              </label>
                                            </div>
                                            
                                            <div class="mt-4 text-sm">
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Grupo recursamiento:</span>
                <?php
                            $parametros = array('type' => 'text',
                                                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
                                                'id' => 'grupo_recursamiento',
                                                'name' => 'grupo_recursamiento',
                                                'placeholder' => 'Grupo recursamiento',
                                                'value' => $alumno->grupo_recursamiento
                                                );
                            echo form_input($parametros);
                        ?>
              </label>
                                            </div>
                                            <div class="mt-4 text-sm">

            <div class="text-center">
                <a type="button" href="<?= route_to('alumnos') ?>" class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple">Cancelar</a>
                <button type="submit" class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" id="btn-guardar">Guardar alumno</button>
            </div>
                                            </div>
        <?= form_close() ?>

                                            </div>


<?= $this->endSection() ?>

<?= $this->section('js') ?>


<?= $this->endSection() ?>