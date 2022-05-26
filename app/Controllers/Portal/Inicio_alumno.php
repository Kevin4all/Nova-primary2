<?php

namespace App\Controllers\Portal;
use \App\Controllers\BaseController;
use \App\Libraries\Permisos;

class Inicio_alumno extends BaseController{
    
    private $esta_permitido = TRUE;

    public function __construct() {
        $session = session();
        
        if(!Permisos::es_rol_permitido(TAREA_PORTAL_ALUMNOS, (isset($session->id_rol) ? $session->id_rol : 0))) {
            $this->esta_permitido = FALSE;
        }
    }

    public function index(){
        if($this->esta_permitido){
            return view('Portal/inicio_alumno', $this->cargar_datos());
        }else{
            crear_mensaje_usuario('Acceso no autorizado.', 'No puedes acceder a esta sección sin un usuario autorizado.', 'error');
            return redirect()->to(route_to('/'));
        }
    }

    private function cargar_datos(){
        $datos = array();

        $session = session();
        $datos['nombre'] = $session->nombre;
        $datos['ap_paterno'] = $session->ap_paterno;
        $datos['ap_materno'] = $session->ap_materno;

        $datos['nombre_completo'] = $session->nombre.' '.$session->ap_paterno.' '.$session->ap_materno;

        return $datos;

    }//end cargar_datos

}//end class inicio_alumno
