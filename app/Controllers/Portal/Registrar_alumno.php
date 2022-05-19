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

    public function insertar_alumno(){
      // d($this->request->getPost());
      // dd($this->request->getFile('imagen_perfil'));
      $tabla_alumnos = new \App\Models\Tabla_alumnos;
      $alumno = array();
        $alumno['nombre'] = $this->request->getPost('nombre_alumno');
        $alumno['ap_paterno'] = $this->request->getPost('apellidop');
        $alumno['ap_materno'] = $this->request->getPost('apellidom');
        $alumno['contrasenia'] = $this->request->getPost('contrasenia');
        $alumno['matricula'] = $this->request->getPost('matricula');
        $alumno['email'] = $this->request->getPost('correo_alumno');
        $alumno['telefono'] = $this->request->getPost('telefono');
        $alumno['sexo'] = $this->request->getPost('sexo');
        $alumno['cuatrimestre_original'] = $this->request->getPost('cuatri_original');
        $alumno['grupo_original'] = $this->request->getPost('grupo_a');
        if (($tabla_alumnos->insert($alumno))>0) {
          crear_mensaje_usuario('Registro Exitoso.', 'Se ha registrado correctamente a tu usuario.', 'success');
          return redirect()->to(route_to('login_alumno'));
        }//end if inserta alumno a DB
        else {
          crear_mensaje_usuario('No se registro al usuario.', 'Hubo un error con nuestro servidor y no se registro tu usuario, intenta nuevamente, por favor.', 'error');
          return redirect()->to(route_to('registrar_alumno'));
        }
      }

}//end class inicio_alumno
