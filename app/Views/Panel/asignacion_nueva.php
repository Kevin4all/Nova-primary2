<?= $this->extend('Panel_base/panel_base') ?>

<?= $this->section('css') ?>

<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
<h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Asignación nueva
            </h2>

            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
            
            <?php
            $parametros = array('id' => 'formulario-asignacion-nueva'
                                );
            echo form_open_multipart(route_to('insertar_asignacion'), $parametros);
        ?>
        <div class="mt-4 text-sm">
        <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Materia:</span>
                <?php
                            $parametros = array('class' => 'block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray',
                                                'id' => 'materia'
                                                );
                            echo form_dropdown('materia', ['' => 'Seleccione una materia']+$materias, array(), $parametros);
                        ?>
              </label>
                                            </div>
                                            <div class="mt-4 text-sm">
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Periodo cuatrimestral:</span>
                <?php
                            $parametros = array('class' => 'block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray',
                                                'id' => 'periodo'
                                                );
                            echo form_dropdown('periodo', ['' => 'Seleccione un periodo']+$periodos, array(), $parametros);
                        ?>
              </label>
                                            </div>
                                            <div class="mt-4 text-sm">
                                            
            <div class="text-center">
                <a type="button" href="<?= route_to('asignaciones') ?>" class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple">Cancelar</a>
                <button type="submit" class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" id="btn-guardar">Guardar asignación</button>
            </div>
                                            </div>
        <?= form_close() ?>

                                            </div>
            

<?= $this->endSection() ?>

<?= $this->section('js') ?>

<?= $this->endSection() ?>