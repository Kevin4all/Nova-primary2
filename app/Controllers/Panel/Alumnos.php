<?php

namespace App\Controllers\Panel;

use \App\Controllers\BaseController;
use \App\Libraries\Permisos;

class Alumnos extends BaseController{

    private $esta_permitido = TRUE;

    public function __construct() {
        $session = session();
        
        if(!Permisos::es_rol_permitido(TAREA_ALUMNOS, (isset($session->id_rol) ? $session->id_rol : 0))) {
            $this->esta_permitido = FALSE;
        }
    }
    
    public function index(){
        if($this->esta_permitido){
            return $this->crear_vista('Panel/alumnos', $this->cargar_datos());
        }else{
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

        $tabla_alumnos = new \App\Models\Tabla_alumnos;
        $datos['alumnos'] = $tabla_alumnos->obtener_alumnos_panel();

        $datos['nombre_pestania'] = 'Alumnos';

        return $datos;
    }//end cargar_datos

    private function crear_vista($nombre_vista = '', $contenido = array()){
        $contenido['menu'] = generar_menu_panel_administrativo_navegacion(TAREA_ALUMNOS);
        return view($nombre_vista, $contenido);
    }//end crear_vista


    /*public function eliminar_periodo($id_periodo = 0){
        $tabla_periodos = new \App\Models\Tabla_periodos;
        if ($tabla_periodos->delete($id_periodo)) {
            crear_mensaje_usuario('Eliminación Exitosa.', 'Se ha eliminado correctamente el periodo.', 'success');
            return redirect()->to(route_to('periodos', $id_periodo));
        }
        else {
            crear_mensaje_usuario('No se eliminó el periodo.', 'Hubo un error con nuestro servidor y no se eliminó el periodo, intenta nuevamente, por favor.', 'error');
            return redirect()->to(route_to('periodos', $id_materia));
        }
    }//end eliminar_materia*/

}//End Class Dashboard
