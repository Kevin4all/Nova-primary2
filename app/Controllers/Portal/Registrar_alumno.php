<?php

namespace App\Controllers\Portal;
use \App\Controllers\BaseController;

class Registrar_alumno extends BaseController{

    public function index(){
        return view('Portal/registrar_alumno', $this->cargar_datos());
    }

    private function cargar_datos(){
        $datos = array();
        return $datos;

    }//end cargar_datos

}//end class inicio_alumno
