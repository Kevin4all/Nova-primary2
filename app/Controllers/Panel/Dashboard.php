<?php

namespace App\Controllers\Panel;

use \App\Controllers\BaseController;

class Dashboard extends BaseController{

    public function index(){
        return $this->crear_vista('Panel/dashboard', $this->cargar_datos());
    }//end index

    private function cargar_datos(){
        //Todos los datos de la vista (modelos, nombre de la página, etc.)

        $datos['nombre_pestania'] = 'Dashboard';

        return $datos;
    }//end cargar_datos

    private function crear_vista($nombre_vista = '', $contenido = array()){
        $contenido['menu'] = generar_menu_panel_administrativo_navegacion(TAREA_DASHBOARD);
        return view($nombre_vista, $contenido);
    }//end crear_vista

}//End Class Dashboard
