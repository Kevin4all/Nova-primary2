<?= $this->extend('Panel_base/panel_base') ?>

<?= $this->section('css') ?>

<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
<h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Detalles periodo
            </h2>

            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
            
            <?php
            $parametros = array('id' => 'formulario-periodo-detalles'
                                );
            echo form_open_multipart(route_to('editar_periodo'), $parametros);
        ?>
        <div class="mt-4 text-sm">
        <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Nombre:</span>
                <?php
                            $parametros = array('type' => 'text',
                                                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
                                                'id' => 'nombre_periodo',
                                                'name' => 'nombre_periodo',
                                                'placeholder' => 'Nombre',
                                                'value' => $periodo->nombre_periodo,
                                                'required' => true
                                                );
                            echo form_input($parametros);
                        ?>
              </label>
                                            </div>
                                            <div class="mt-4 text-sm">
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Año:</span>
                <?php
                            $parametros = array('type' => 'number',
                            'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
                            'id' => 'anio',
                            'name' => 'anio',
                            'placeholder' => '2022',
                            'min' => 2022,
                            'value' => $periodo->anio,
                            'required' => true
                            );
        echo form_input($parametros);
                            $parametros = array('type' => 'hidden',
                                                'id' => 'id_periodo',
                                                'name' => 'id_periodo',
                                                'value' => $periodo->id_periodo
                                                );
                            echo form_input($parametros);
                        ?>
              </label>
                                            </div>
                                            <div class="mt-4 text-sm">
                                            
            <div class="text-center">
                <a type="button" href="<?= route_to('periodos') ?>" class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple">Cancelar</a>
                <button type="submit" class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" id="btn-guardar">Guardar periodo</button>
            </div>
                                            </div>
        <?= form_close() ?>

                                            </div>
            

<?= $this->endSection() ?>

<?= $this->section('js') ?>

<?= $this->endSection() ?>