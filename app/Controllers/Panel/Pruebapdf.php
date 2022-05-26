<?php

namespace App\Controllers\Panel;

use \App\Controllers\BaseController;

class Pruebapdf extends BaseController{

    public function index(){
        return $this->crear_vista('Panel/plantillapdf', $this->cargar_datos());
    }//end index

    private function cargar_datos(){
        //Todos los datos de la vista (modelos, nombre de la página, etc.)

        $session = session();
        $datos['nombre'] = $session->nombre;
        $datos['ap_paterno'] = $session->ap_paterno;
        $datos['ap_materno'] = $session->ap_materno;

        $datos['nombre_completo'] = $session->nombre.' '.$session->ap_paterno.' '.$session->ap_materno;

        //dd($datos);

        $datos['nombre_pestania'] = 'Periodos';

        $tabla_periodos = new \App\Models\Tabla_periodos;
        $datos['periodos'] = $tabla_periodos->obtener_periodos_panel();
        //dd($datos['periodos']);

        return $datos;
    }//end cargar_datos

    private function crear_vista($nombre_vista = '', $contenido = array()){
        $contenido['menu'] = generar_menu_panel_administrativo_navegacion(TAREA_PERIODOS);
        return view($nombre_vista, $contenido);
    }//end crear_vista

}//End Class Dashboard
