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

    //Sección Tutores
    $menu_item['is_active'] = false;
    $menu_item['link'] = route_to('tutores');
    $menu_item['icono'] = 'M15.573,11.624c0.568-0.478,0.947-1.219,0.947-2.019c0-1.37-1.108-2.569-2.371-2.569s-2.371,1.2-2.371,2.569c0,0.8,0.379,1.542,0.946,2.019c-0.253,0.089-0.496,0.2-0.728,0.332c-0.743-0.898-1.745-1.573-2.891-1.911c0.877-0.61,1.486-1.666,1.486-2.812c0-1.79-1.479-3.359-3.162-3.359S4.269,5.443,4.269,7.233c0,1.146,0.608,2.202,1.486,2.812c-2.454,0.725-4.252,2.998-4.252,5.685c0,0.218,0.178,0.396,0.395,0.396h16.203c0.218,0,0.396-0.178,0.396-0.396C18.497,13.831,17.273,12.216,15.573,11.624 M12.568,9.605c0-0.822,0.689-1.779,1.581-1.779s1.58,0.957,1.58,1.779s-0.688,1.779-1.58,1.779S12.568,10.427,12.568,9.605 M5.06,7.233c0-1.213,1.014-2.569,2.371-2.569c1.358,0,2.371,1.355,2.371,2.569S8.789,9.802,7.431,9.802C6.073,9.802,5.06,8.447,5.06,7.233 M2.309,15.335c0.202-2.649,2.423-4.742,5.122-4.742s4.921,2.093,5.122,4.742H2.309z M13.346,15.335c-0.067-0.997-0.382-1.928-0.882-2.732c0.502-0.271,1.075-0.429,1.686-0.429c1.828,0,3.338,1.385,3.535,3.161H13.346z';
    $menu_item['texto'] = 'Tutores';
    $menu_item['sub_menu'] = array();
    $menu['tutores'] = $menu_item;

    //Sección Directores
    $menu_item['is_active'] = false;
    $menu_item['link'] = route_to('directores');
    $menu_item['icono'] = 'M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z';
    $menu_item['texto'] = 'Directores';
    $menu_item['sub_menu'] = array();
    $menu['directores'] = $menu_item;

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
        case TAREA_PERIODO_NUEVO:
        case TAREA_PERIODO_DETALLES:
            $menu['periodos']['is_active'] = TRUE;
        break;
        //SECCIÓN ASIGNACIONES
        case TAREA_ASIGNACIONES:
        case TAREA_ASIGNACION_NUEVA:
        case TAREA_ASIGNACION_DETALLES:
            $menu['asignaciones']['is_active'] = TRUE;
        break;
        //SECCIÓN ALUMNOS
        case TAREA_ALUMNOS:
        case TAREA_ALUMNO_DETALLES:
            $menu['alumnos']['is_active'] = TRUE;
        break;
        //SECCIÓN TUTORES
        case TAREA_TUTORES:
        case TAREA_TUTOR_NUEVO:
        case TAREA_TUTOR_DETALLES:
          $menu['tutores']['is_active'] = TRUE;
        break;
        //SECCIÓN DIRECTORES
        case TAREA_DIRECTORES:
        case TAREA_DIRECTOR_NUEVO:
        case TAREA_DIRECTOR_DETALLES:
        $menu['directores']['is_active'] = TRUE;
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
