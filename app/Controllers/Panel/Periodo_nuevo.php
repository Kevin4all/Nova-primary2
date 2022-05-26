<?php

namespace App\Controllers\Panel;

use \App\Controllers\BaseController;
use \App\Libraries\Permisos;

class Periodo_nuevo extends BaseController{

    private $esta_permitido = TRUE;

    public function __construct() {
        $session = session();
        
        if(!Permisos::es_rol_permitido(TAREA_PERIODO_NUEVO, (isset($session->id_rol) ? $session->id_rol : 0))) {
            $this->esta_permitido = FALSE;
        }
    }

    public function index(){
        if($this->esta_permitido){
            return $this->crear_vista('Panel/periodo_nuevo', $this->cargar_datos());
        } else{
            crear_mensaje_usuario('Acceso no autorizado.', 'No puedes acceder a esta sección sin un usuario autorizado.', 'error');
            return redirect()->to(route_to('/dashboard'));
        }
    }//end index

    private function cargar_datos(){
        //Todos los datos de la vista (modelos, nombre de la página, etc.)

        $session = session();
        $datos['nombre'] = $session->nombre;
        $datos['ap_paterno'] = $session->ap_paterno;
        $datos['ap_materno'] = $session->ap_materno;

        $datos['nombre_completo'] = $session->nombre.' '.$session->ap_paterno.' '.$session->ap_materno;

        $datos['nombre_pestania'] = 'Nuevo periodo';

        return $datos;
    }//end cargar_datos

    private function crear_vista($nombre_vista = '', $contenido = array()){
        $contenido['menu'] = generar_menu_panel_administrativo_navegacion(TAREA_PERIODO_NUEVO);
        return view($nombre_vista, $contenido);
    }//end crear_vista

    public function insertar_periodo(){
        $tabla_periodos = new \App\Models\Tabla_periodos;
        $periodo = array();
        $periodo['nombre_periodo'] = $this->request->getPost('nombre_periodo');
        $periodo['anio'] = $this->request->getPost('anio');
        if (($tabla_periodos->insert($periodo))>0) {
            crear_mensaje_usuario('Registro Exitoso.', 'Se ha registrado correctamente al periodo.', 'success');
            return redirect()->to(route_to('periodos'));
        }//end if inserta el usuario a la DB
        else {
            crear_mensaje_usuario('No se registro el periodo.', 'Hubo un error con nuestro servidor y no se registro el periodo, intenta nuevamente, por favor.', 'error');
            return redirect()->to(route_to('periodo_nuevo'));
        }//end if inserta el usuario a la DB
    }//end insertar_usuario

}//End Class Dashboard
