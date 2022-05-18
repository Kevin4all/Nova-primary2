<?php

namespace App\Controllers\Portal;
use \App\Controllers\BaseController;

class Inicio_alumno extends BaseController{

    public function index(){
        return view('Portal/inicio_alumno', $this->cargar_datos());
    }

    private function cargar_datos(){
        $datos = array();

        $tabla_alumnos = new \App\Models\Tabla_alumnos;
        $datos['alumnos'] = $tabla_alumnos->obtener_camionetas_panel();

        return $datos;

    }//end cargar_datos

}//end class inicio_alumno
