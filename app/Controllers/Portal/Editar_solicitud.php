<?php

namespace App\Controllers\Portal;
use \App\Controllers\BaseController;
use \App\Libraries\Permisos;

class Editar_solicitud extends BaseController{
    
    private $esta_permitido = TRUE;

    public function __construct() {
        $session = session();
        
        if(!Permisos::es_rol_permitido(TAREA_PORTAL_SOLICITUD, (isset($session->id_rol) ? $session->id_rol : 0))) {
            $this->esta_permitido = FALSE;
        }
    }

    public function index(){
        if($this->esta_permitido){
            return $this->crear_vista("Portal/editar_solicitud", $this->cargar_datos());
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

        //Obtener los datos de la solicitud
        $tabla_solicitudes = new \App\Models\Tabla_solicitudes();
        $detalles_solicitud = $tabla_solicitudes->obtener_solicitud_especifica($session->matricula);
        $datos['detalles_solicitud'] = $detalles_solicitud;

        return $datos;
    }//end cargar_datos

	private function crear_vista($nombre_vista, $datos){
		return view($nombre_vista, $datos);
	}//end of function crear_vista

    //insertar solicitud
    public function actualizar_solicitud(){
        $id_solicitud = $this->request->getPost('id_solicitud');
        $tabla_solicitudes =  new \App\Models\Tabla_solicitudes;
        $tabla_alumnos = new \App\Models\Tabla_alumnos;

        if($tabla_solicitudes->find($id_solicitud) != NULL){
            $solicitud = array();
            $alumno = array();
            $session = session();
            
            $id_alumno = $session->id_alumno;
            
            $solicitud['tipo_solicitud'] = $this->request->getPost('tipo_solicitud');
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
            if(($tabla_solicitudes->update($id_solicitud, $solicitud)) > 0 && ($tabla_alumnos->update($id_alumno, $alumno))) {
                crear_mensaje_usuario('Solicitud actualizada exitosamente', 'La solicitud se ha actualizado con éxito', 'success');
                return redirect()->to(route_to('inicio_alumno'));
            }//se insertaron los datos a la DB
            else{
                crear_mensaje_usuario('No se ha actualizado la solicitud', 'Hubo un error con nuestro servidor y no se actualizó la solicitud, intentalo nuevamente. Por favor.', 'warning');
                return redirect()->to(route_to('nueva_solicitud'));
            }//end no se insertaron lso datos a la DB
        }else{
            crear_mensaje_usuario('Solicitud no existente', 'No existe una solicitud de recurse para este usuario', 'warning');
            return redirect()->to(route_to('inicio_alumno'));    
        }
       

    }//end insertar_solicitud




}//end class Nueva_solicitud
