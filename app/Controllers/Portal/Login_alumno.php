<?php

namespace App\Controllers\Portal;
use \App\Controllers\BaseController;

class Login_alumno extends BaseController{

    public function index(){
		return $this->crear_vista("Portal/login_alumno");
	}//end of function index

	private function crear_vista($nombre_vista){
		return view($nombre_vista);
	}//end of function crear_vista

  public function comprobar_alumno(){
		$session = session();
		$matricula = $this->request->getPost('matricula');
		$contrasenia = $this->request->getPost('contrasenia');
		$tabla_alumnos = new \App\Models\Tabla_alumnos;
		$datos_alumnos = $tabla_alumnos->logear_alumno($matricula, $contrasenia);
        //dd($datos_alumnos);
		if($datos_alumnos != NULL){
			$session->set('id_alumno', $datos_alumnos->id_alumno);
			$session->set('matricula', $datos_alumnos->matricula);
			$session->set('nombre', $datos_alumnos->nombre);
			$session->set('ap_paterno', $datos_alumnos->ap_paterno);
			$session->set('ap_materno', $datos_alumnos->ap_materno);
			$session->set('email', $datos_alumnos->email);
            $session->set('telefono', $datos_alumnos->telefono);
			$session->set('sexo', $datos_alumnos->sexo);
			$session->set('cuatrimestre_original', $datos_alumnos->cuatrimestre_original);
			$session->set('grupo_original', $datos_alumnos->grupo_original);
			$session->set('cuatrimestre_recursamiento', $datos_alumnos->cuatrimestre_recursamiento);
			$session->set('grupo_recursamiento', $datos_alumnos->grupo_recursamiento);
			return redirect()->to(route_to('inicio_alumno'));
		}//end if existe el alumno
		else{
			crear_mensaje_usuario('Matricula o contraseña incorrecta.', 'Introduzca de nuevo las credenciales de inicio de sesión para poder acceder.', 'error');
			return redirect()->to(route_to('login_alumno'));
		}//end else existe el alumno
	}//end comprobar_alumno
}//end class inicio
