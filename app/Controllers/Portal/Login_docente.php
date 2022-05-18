<?php

namespace App\Controllers\Portal;

class Login_docente extends BaseController{

    public function index(){
        return view('Portal/login_docente', $this->cargar_datos());
    }

    private function cargar_datos(){
        $datos = array();
        return $datos;

    }//end cargar_datos

}//end class inicio
