<?php

function configurar_menu_panel_administrativo_navegacion(){
    $menu = array();

    $menu_item = array();
    $sub_menu_item = array();

    //Sección Dashboard
    $menu_item['is_active'] = false;
    $menu_item['link'] = route_to('dashboard');
    $menu_item['icono'] = 'micon dw dw-house-1';
    $menu_item['texto'] = 'Dashboard';
    $menu_item['sub_menu'] = array();
    $menu['dashboard'] = $menu_item;

    if($id_rol == ROL_ADMINISTRADOR['id']){
        //Sección Usuarios
        $menu_item['is_active'] = false;
        $menu_item['link'] = route_to('usuarios');
        $menu_item['icono'] = 'micon dw dw-user2';
        $menu_item['texto'] = 'Usuarios';
        $menu_item['sub_menu'] = array();
        $menu['usuarios'] = $menu_item;
    }//end if el rol actual es el administrador

    //Sección Bicicletas
    $menu_item['is_active'] = false;
    $menu_item['link'] = '#!';
    $menu_item['icono'] = 'micon dw dw-bicycle';
    $menu_item['texto'] = 'Bicicletas';
    $menu_item['sub_menu'] = array();
        //Sección bicicletas todos
        $sub_menu_item = array();
        $sub_menu_item['is_active'] = false;
        $sub_menu_item['link'] = route_to('panel_bicicletas_todos');
        $sub_menu_item['texto'] = 'Bicicletas Todos';
        $menu_item['sub_menu']['bicicletas_todos'] = $sub_menu_item;

        //Sección bicicletas bmx
        $sub_menu_item = array();
        $sub_menu_item['is_active'] = false;
        $sub_menu_item['link'] = route_to('panel_bicicletas_bmx');
        $sub_menu_item['texto'] = 'Bicicletas BMX';
        $menu_item['sub_menu']['bicicletas_bmx'] = $sub_menu_item;

        //Sección bicicletas de ruta
        $sub_menu_item = array();
        $sub_menu_item['is_active'] = false;
        $sub_menu_item['link'] = route_to('panel_bicicletas_de_ruta');
        $sub_menu_item['texto'] = 'Bicicletas De ruta';
        $menu_item['sub_menu']['bicicletas_de_ruta'] = $sub_menu_item;

        //Sección bicicletas de montaña
        $sub_menu_item = array();
        $sub_menu_item['is_active'] = false;
        $sub_menu_item['link'] = route_to('panel_bicicletas_de_montania');
        $sub_menu_item['texto'] = 'Bicicletas De montaña';
        $menu_item['sub_menu']['bicicletas_de_montania'] = $sub_menu_item;

        //Sección bicicletas urbana
        $sub_menu_item = array();
        $sub_menu_item['is_active'] = false;
        $sub_menu_item['link'] = route_to('panel_bicicletas_urbana');
        $sub_menu_item['texto'] = 'Bicicletas Urbana';
        $menu_item['sub_menu']['bicicletas_urbana'] = $sub_menu_item;
    $menu['bicicletas'] = $menu_item;

    //Sección Ofertas
    $menu_item['is_active'] = false;
    $menu_item['link'] = route_to('panel_ofertas');
    $menu_item['icono'] = 'micon dw dw-tag';
    $menu_item['texto'] = 'Ofertas';
    $menu_item['sub_menu'] = array();
    $menu['ofertas'] = $menu_item;

    //Sección Reseñas
    $menu_item['is_active'] = false;
    $menu_item['link'] = route_to('resenias');
    $menu_item['icono'] = 'micon dw dw-chat-4';
    $menu_item['texto'] = 'Reseñas';
    $menu_item['sub_menu'] = array();
    $menu['resenias'] = $menu_item;

    return $menu;
}//end configurar_menu_panel_navegacion

function activar_seccion_menu_panel($seccion_a_activar = NULL, $menu = NULL){
    switch ($seccion_a_activar) {
        //SECCIÓN DASHBOARD
        case TAREA_DASHBOARD:
            $menu['dashboard']['is_active'] = TRUE;
        break;

        //SECCIÓN USUARIOS
        case TAREA_USUARIOS_TODOS:
        case TAREA_USUARIO_NUEVO:
        case TAREA_USUARIO_DETALLES:
            $menu['usuarios']['is_active'] = TRUE;
        break;

        //SECCIÓN BICICLETAS
        case TAREA_BICICLETAS_TODOS:
        case TAREA_BICICLETA_NUEVA:
        case TAREA_BICICLETA_DETALLES:
            $menu['bicicletas']['is_active'] = TRUE;
            $menu['bicicletas']['sub_menu']['bicicletas_todos']['is_active'] = TRUE;
        break;
        case TAREA_BICICLETAS_BMX:
            $menu['bicicletas']['is_active'] = TRUE;
            $menu['bicicletas']['sub_menu']['bicicletas_bmx']['is_active'] = TRUE;
        break;
        case TAREA_BICICLETAS_DE_RUTA:
            $menu['bicicletas']['is_active'] = TRUE;
            $menu['bicicletas']['sub_menu']['bicicletas_de_ruta']['is_active'] = TRUE;
        break;
        case TAREA_BICICLETAS_DE_MONTANIA:
            $menu['bicicletas']['is_active'] = TRUE;
            $menu['bicicletas']['sub_menu']['bicicletas_de_montania']['is_active'] = TRUE;
        break;
        case TAREA_BICICLETAS_URBANA:
            $menu['bicicletas']['is_active'] = TRUE;
            $menu['bicicletas']['sub_menu']['bicicletas_urbana']['is_active'] = TRUE;
        break;

        //SECCIÓN OFERTAS
        case TAREA_OFERTAS:
        case TAREA_OFERTA_NUEVA:
        case TAREA_OFERTA_DETALLES:
            $menu['ofertas']['is_active'] = TRUE;
        break;

        //SECCIÓN RESEÑAS
        case TAREA_RESENIAS:
        case TAREA_RESENIA_NUEVA:
        case TAREA_RESENIA_DETALLES:
            $menu['resenias']['is_active'] = TRUE;
        break;
        
        default:
            //No se activará ningún elemento
        break;
    }//end switch
    return $menu;
}//end activar_seccion_menu_panel

function generar_menu_panel_navegacion($seccion_a_activar = NULL, $id_rol = 0){
    $menu = configurar_menu_panel_navegacion($id_rol);
    $menu = activar_seccion_menu_panel($seccion_a_activar, $menu);
    $html = '';
    foreach($menu as $menu_item) {
        if($menu_item['link'] != '#!'){
            $html .= '
            <li>
				<a href="'.$menu_item['link'].'" class="dropdown-toggle no-arrow '.(($menu_item['is_active']) ? 'active' : '').'">
					<span class="'.$menu_item['icono'].'"></span><span class="mtext">'.$menu_item['texto'].'</span>
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