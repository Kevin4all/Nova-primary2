<?php

namespace App\Controllers\Panel;
use \App\Controllers\BaseController;

class Periodos extends BaseController{

    public function index(){
        return view('Panel/periodos', $this->cargar_datos());
    }

    // private function cargar_datos(){
    //     $datos = array();
    //     return $datos;
    //
    // }//end cargar_datos

}//end class inicio
