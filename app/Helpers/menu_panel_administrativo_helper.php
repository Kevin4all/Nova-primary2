<?php

function configurar_menu_panel_administrativo_navegacion(){
    $menu = array();

    $menu_item = array();
    $sub_menu_item = array();

    //Sección Dashboard
    $menu_item['is_active'] = false;
    $menu_item['link'] = route_to('dashboard');
    $menu_item['icono'] = 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6';
    $menu_item['texto'] = 'Dashboard';
    $menu_item['sub_menu'] = array();
    $menu['dashboard'] = $menu_item;

    //Sección Materias
    $menu_item['is_active'] = false;
    $menu_item['link'] = route_to('materias');
    $menu_item['icono'] = 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10';
    $menu_item['texto'] = 'Materias';
    $menu_item['sub_menu'] = array();
    $menu['materias'] = $menu_item;

    return $menu;
}//end configurar_menu_panel_navegacion

function activar_seccion_menu_panel_administrativo($seccion_a_activar = NULL, $menu = NULL){
    switch ($seccion_a_activar) {
        //SECCIÓN DASHBOARD
        case TAREA_DASHBOARD:
            $menu['dashboard']['is_active'] = TRUE;
        break;
        //SECCIÖN MATERIAS
        case TAREA_MATERIAS:
            $menu['materias']['is_active'] = TRUE;
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
            aria-hidden="'.(($menu_item['is_active']) ? 'active' : '').'"
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
            <li class="dropdown">
				<a href="#!" class="dropdown-toggle '.(($menu_item['is_active']) ? 'active' : '').'">
					<span class="'.$menu_item['icono'].'"></span><span class="mtext">'.$menu_item['texto'].'</span>
				</a>
			    <ul class="submenu">
            ';
                foreach($menu_item['sub_menu'] as $sub_menu_item){
                    $html .= '
                    <li>
                        <a '.($sub_menu_item['is_active'] ? 'class="active"' : '').'" href="'.$sub_menu_item['link'].'">'.$sub_menu_item['texto'].'</a>
                    </li>
                    ';
                }//end foreach $sub_menu
            $html .= '
                </ul>
            </li>
            ';
        }//end else el menu_item contiene un sólo nivel
    }//end foreach $menu
    return $html;
}//end generar_menu_panel_navegacion