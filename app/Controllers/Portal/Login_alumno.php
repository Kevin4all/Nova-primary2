<?php

namespace App\Controllers\Portal;

class Login_alumno extends BaseController{

    public function index(){
        return view('Portal/login_alumno', $this->cargar_datos());
    }

    private function cargar_datos(){
        $datos = array();
        return $datos;

    }//end cargar_datos

}//end class inicio
