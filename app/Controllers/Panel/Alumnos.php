<?php

namespace App\Controllers\Panel;

use \App\Controllers\BaseController;

class Alumnos extends BaseController{

    public function index(){
        return $this->crear_vista('Panel/alumnos', $this->cargar_datos());
    }//end index

    private function cargar_datos(){
        //Todos los datos de la vista (modelos, nombre de la página, etc.)

        $session = session();
        $datos['nombre'] = $session->nombre;
        $datos['ap_paterno'] = $session->ap_paterno;
        $datos['ap_materno'] = $session->ap_materno;

        $datos['nombre_completo'] = $session->nombre.' '.$session->ap_paterno.' '.$session->ap_materno;

        $datos['nombre_pestania'] = 'Alumnos';

        return $datos;
    }//end cargar_datos

    private function crear_vista($nombre_vista = 'alumnos', $contenido = array()){
        $contenido['menu'] = generar_menu_panel_administrativo_navegacion(TAREA_ALUMNOS);
        return view($nombre_vista, $contenido);
    }//end crear_vista

}//End Class Dashboard
