<?php

function configurar_menu_panel_administrativo_navegacion(){
    $menu = array();

    $menu_item = array();
    $sub_menu_item = array();

    //Sección Dashboard
    $menu_item['is_active'] = false;
    $menu_item['link'] = route_to('dashboard');
    $menu_item['icono'] = 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01';
    $menu_item['texto'] = 'Materias';
    $menu_item['sub_menu'] = array();
    $menu['dashboard'] = $menu_item;

    //Sección Periodos
    $menu_item['is_active'] = false;
    $menu_item['link'] = route_to('periodos');
    $menu_item['icono'] = 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10';
    $menu_item['texto'] = 'Periodos';
    $menu_item['sub_menu'] = array();
    $menu['periodos'] = $menu_item;

    //Sección Asignaciones
    $menu_item['is_active'] = false;
    $menu_item['link'] = route_to('asignaciones');
    $menu_item['icono'] = 'M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122';
    $menu_item['texto'] = 'Asignaciones';
    $menu_item['sub_menu'] = array();
    $menu['asignaciones'] = $menu_item;

    //Sección Alumnos
    $menu_item['is_active'] = false;
    $menu_item['link'] = route_to('alumnos');
    $menu_item['icono'] = 'M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z';
    $menu_item['texto'] = 'Alumnos';
    $menu_item['sub_menu'] = array();
    $menu['alumnos'] = $menu_item;

    //Sección Listas
    $menu_item['is_active'] = false;
    $menu_item['link'] = route_to('listas');
    $menu_item['icono'] = 'M4 6h16M4 10h16M4 14h16M4 18h16';
    $menu_item['texto'] = 'Listas';
    $menu_item['sub_menu'] = array();
    $menu['listas'] = $menu_item;

    return $menu;
}//end configurar_menu_panel_navegacion

function activar_seccion_menu_panel_administrativo($seccion_a_activar = NULL, $menu = NULL){
    switch ($seccion_a_activar) {
        //SECCIÓN DASHBOARD
        case TAREA_DASHBOARD:
        case TAREA_MATERIA_NUEVA:
        case TAREA_MATERIA_DETALLES:
            $menu['dashboard']['is_active'] = TRUE;
        break;
        //SECCIÓN PERIODOS
        case TAREA_PERIODOS:
            $menu['periodos']['is_active'] = TRUE;
        break;
        //SECCIÓN ASIGNACIONES
        case TAREA_ASIGNACIONES:
            $menu['asignaciones']['is_active'] = TRUE;
        break;
        //SECCIÓN ALUMNOS
        case TAREA_ALUMNOS:
            $menu['alumnos']['is_active'] = TRUE;
        break;
        //SECCIÓN LISTAS
        case TAREA_LISTAS:
            $menu['listas']['is_active'] = TRUE;
        break;

        default:
            //No se activará ningún elemento
        break;
    }//end switch
    return $menu;
}//end activar_seccion_menu_panel

function generar_menu_panel_administrativo_navegacion($seccion_a_activar = NULL){
    $menu = configurar_menu_panel_administrativo_navegacion();
    $menu = activar_seccion_menu_panel_administrativo($seccion_a_activar, $menu);
    $html = '';
    foreach($menu as $menu_item) {
        if($menu_item['link'] != '#!'){
            $html .= '
            <li class="relative px-6 py-3">
            '.(($menu_item['is_active']) ? '<span
            class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
            aria-hidden="true"
          ></span>' : '').'
              <a
                class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                href="'.$menu_item['link'].'"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="'.$menu_item['icono'].'"
                  ></path>
                </svg>
                <span class="ml-4">'.$menu_item['texto'].'</span>
              </a>
            </li>
            ';
        }//end if el menu_item contiene un sólo nivel
        else{
            $html .= '

            <li class="relative px-6 py-3">
              <button
                class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                @click="togglePagesMenu"
                aria-haspopup="true"
              >
                <span class="inline-flex items-center">
                  <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      d="'.$menu_item['icono'].'"
                    ></path>
                  </svg>
                  <span class="ml-4">'.$menu_item['texto'].'</span>
                </span>
                <svg
                  class="w-4 h-4"
                  aria-hidden="true"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </button>
              <template x-if="isPagesMenuOpen">
                <ul
                  x-transition:enter="transition-all ease-in-out duration-300"
                  x-transition:enter-start="opacity-25 max-h-0"
                  x-transition:enter-end="opacity-100 max-h-xl"
                  x-transition:leave="transition-all ease-in-out duration-300"
                  x-transition:leave-start="opacity-100 max-h-xl"
                  x-transition:leave-end="opacity-0 max-h-0"
                  class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                  aria-label="submenu"
                >
            ';
                foreach($menu_item['sub_menu'] as $sub_menu_item){
                    $html .= '
                    <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  >
                    <a class="w-full" href="'.$sub_menu_item['link'].'">'.$sub_menu_item['texto'].'</a>
                  </li>
                    ';
                }//end foreach $sub_menu
            $html .= '
            </ul>
          </template>
          </li>
            ';
        }//end else el menu_item contiene un sólo nivel
    }//end foreach $menu
    return $html;
}//end generar_menu_panel_navegacion
