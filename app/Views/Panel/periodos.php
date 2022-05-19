<?= $this->extend('Panel_base/panel_base') ?>

<?= $this->section('css') ?>

<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
        <main class="h-full pb-16 overflow-y-auto">
          <div class="container grid px-6 mx-auto">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Periodos
            </h2>
            <!-- CTA -->


            <div
              class="max-w-2xl px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
              <b><p class="mb-4 text-gray-600 dark:text-gray-400">
                Enero - Abril
              </p>
            </b>
            </div>

            <div>
              <button
                @click="openModal"
                class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
              >
                Abrir Periodo
              </button>
            </div>

            <div
              class="max-w-2xl px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
              <b><p class="mb-4 text-gray-600 dark:text-gray-400">
                Mayo - Agosto
              </p>
            </b>
            </div>

            <div>
              <button
                @click="openModal"
                class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
              >
                Abrir Periodo
              </button>
            </div>

            <div
              class="max-w-2xl px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
              <b><p class="mb-4 text-gray-600 dark:text-gray-400">
                Septiembre - Diciembre
              </p>
            </b>
            </div>

            <div>
              <button
                @click="openModal"
                class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
              >
                Abrir Periodo
              </button>
            </div>
          </div>


        </main>
        <?= $this->endSection() ?>

<?= $this->section('js') ?>

<?= $this->endSection() ?>
