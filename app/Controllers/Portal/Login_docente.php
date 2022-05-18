<?php

namespace App\Controllers\Portal;
use \App\Controllers\BaseController;

class Login_docente extends BaseController{

    public function index(){
		return $this->crear_vista("Portal/login_docente");
	}//end of function index

	private function crear_vista($nombre_vista){
		return view($nombre_vista);
	}//end of function crear_vista

  public function comprobar_alumno(){
		$session = session();
		$email = $this->request->getPost('email');
		$contrasenia = $this->request->getPost('contrasenia');
		$tabla_administrador = new \App\Models\Tabla_administradores;
		$datos_administrador = $tabla_administrador->logear_administrador($email, $contrasenia);
        //dd($datos_alumnos);
		if($datos_administrador != NULL){
			$session->set('id_administrador', $datos_administrador->id_administrador);
			$session->set('nombre', $datos_administrador->nombre);
			$session->set('ap_paterno', $datos_administrador->ap_paterno);
			$session->set('ap_materno', $datos_administrador->ap_materno);
			$session->set('telefono', $datos_administrador->telefono);
			$session->set('email', $datos_administrador->email);
            $session->set('cargo', $datos_administrador->cargo);
			return redirect()->to(route_to('dashboard'));
		}//end if existe el alumno
		else{
			crear_mensaje_usuario('Correo electrónico o contraseña incorrecta.', 'Introduzca de nuevo las credenciales de inicio de sesión para poder acceder.', 'error');
			return redirect()->to(route_to('login_docente'));
		}//end else existe el alumno
	}//end comprobar_alumno
}//end class inicio
