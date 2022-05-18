<?php

namespace App\Controllers\Portal;

class Inicio_1 extends BaseController{

    public function index(){
        return view('Portal/nicio', $this->cargar_datos());
    }

    private function cargar_datos(){
        $datos = array();
        return $datos;

    }//end cargar_datos

}//end class inicio

