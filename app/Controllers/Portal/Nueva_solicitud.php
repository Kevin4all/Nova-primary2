<?php

namespace App\Controllers\Portal;
use \App\Controllers\BaseController;
use \App\Libraries\Permisos;

class Nueva_solicitud extends BaseController{
    
    private $esta_permitido = TRUE;

    public function __construct() {
        $session = session();
        
        if(!Permisos::es_rol_permitido(TAREA_PORTAL_SOLICITUD, (isset($session->id_rol) ? $session->id_rol : 0))) {
            $this->esta_permitido = FALSE;
        }
    }

    public function index(){
        if($this->esta_permitido){
            return $this->crear_vista("Portal/nueva_solicitud", $this->cargar_datos());
        }else{
            crear_mensaje_usuario('Acceso no autorizado.', 'No puedes acceder a esta sección sin un usuario autorizado.', 'error');
            return redirect()->to(route_to('/'));
        }
	}//end of function index

    private function cargar_datos(){
        //Todos los datos de la vista (modelos, nombre de la página, etc.)
        $datos = array();

        $session = session();
        $datos['nombre'] = $session->nombre;
        $datos['ap_paterno'] = $session->ap_paterno;
        $datos['ap_materno'] = $session->ap_materno;
        $datos['matricula'] = $session->matricula;

        //Elementos propios del controlador
        $tabla_periodos_cuatrimestrales = new \App\Models\Tabla_periodos_cuatrimestrales;
        $datos['periodos'] = $tabla_periodos_cuatrimestrales->generar_dropdown_periodos();
        //dd($datos['periodos']);

        $tabla_tutores = new \App\Models\Tabla_tutores;
        $datos['tutores'] = $tabla_tutores->generar_dropdown_tutores();
        //dd($datos['tutores']);

        $tabla_directores = new \App\Models\Tabla_directores;
        $datos['directores'] = $tabla_directores->generar_dropdown_directores();
        //dd($datos['directores']);

        return $datos;
    }//end cargar_datos

	private function crear_vista($nombre_vista, $datos){
		return view($nombre_vista, $datos);
	}//end of function crear_vista

    //insertar solicitud
    public function insertar_solicitud(){

        $tabla_solicitudes =  new \App\Models\Tabla_solicitudes;
        $tabla_alumnos = new \App\Models\Tabla_alumnos;
        $solicitud = array();
        $alumno = array();
        $session = session();
        
        $id_alumno = $session->id_alumno;
        $solicitud['matricula'] = $session->matricula;
        $solicitud['fecha'] = $this->request->getPost('fecha_hoy');
        $solicitud['tipo_solicitud'] = $this->request->getPost('tipo_solicitud');
        $solicitud['nombre'] = $session->nombre;
        $solicitud['ap_paterno'] = $session->ap_paterno;
        $solicitud['ap_materno'] = $session->ap_materno;
        $solicitud['tipo_curso'] = $this->request->getPost('tipo_curso');
        $solicitud['programa_educativo'] = $this->request->getPost('programa_educativo');
        $solicitud['id_periodo'] = $this->request->getPost('periodo');
        $solicitud['cuatrimestre'] = $this->request->getPost('cuatrimestre');
        $solicitud['grupo'] = $this->request->getPost('grupo');
        $solicitud['turno'] = $this->request->getPost('turno');
        $solicitud['id_tutor'] = $this->request->getPost('tutor');
        $solicitud['id_director'] = $this->request->getPost('director');

        $alumno['cuatrimestre_original'] = $this->request->getPost('cuatrimestre');
        $alumno['grupo_original'] = $this->request->getPost('grupo');
        $alumno['id_periodo'] = $this->request->getPost('periodo');

        //dd($solicitud);
        if(($tabla_solicitudes->insert($solicitud)) > 0 && ($tabla_alumnos->update($id_alumno, $alumno))) {
            crear_mensaje_usuario('Solicitud registrada exitosamente', 'La solicitud se ha registrado con éxito', 'success');
            return redirect()->to(route_to('inicio_alumno'));
        }//se insertaron los datos a la DB
        else{
            crear_mensaje_usuario('No se ha registrado la solicitud', 'Hubo un error con nuestro servidor y no se registro la solicitud, intentalo nuevamente. Por favor.', 'warning');
            return redirect()->to(route_to('nueva_solicitud'));
        }//end no se insertaron lso datos a la DB

    }//end insertar_solicitud




}//end class Nueva_solicitud
