<?php

namespace App\Controllers\Portal;
use \App\Controllers\BaseController;

class Inicio_alumno extends BaseController{

    public function index(){
        return view('Portal/inicio_alumno', $this->cargar_datos());
    }

    private function cargar_datos(){
        $datos = array();

        $session = session();
        $datos['nombre'] = $session->nombre;
        $datos['ap_paterno'] = $session->ap_paterno;
        $datos['ap_materno'] = $session->ap_materno;

        $datos['nombre_completo'] = $session->nombre.' '.$session->ap_paterno.' '.$session->ap_materno;

        //dd($datos);

        return $datos;

    }//end cargar_datos

}//end class inicio_alumno
