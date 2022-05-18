<?php namespace App\Controllers\Portal;
use App\Controllers\BaseController;

class Cerrar_sesion_alumno extends BaseController{

	public function index(){
		session()->destroy();
        return redirect()->to(route_to('/'));
	}//end of function index
}