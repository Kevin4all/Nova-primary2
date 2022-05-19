<?php

namespace App\Controllers\Portal;
use \App\Controllers\BaseController;

class Nueva_solicitud extends BaseController{

    public function index(){
		return $this->crear_vista("Portal/nueva_solicitud");
	}//end of function index

	private function crear_vista($nombre_vista){
		return view($nombre_vista);
	}//end of function crear_vista

    //insertar solicitud


}//end class Nueva_solicitud
