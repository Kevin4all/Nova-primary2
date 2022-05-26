<?php

namespace App\Controllers\Panel;

use \App\Controllers\BaseController;
use \App\Libraries\Permisos;

class Dashboard extends BaseController {

    private $esta_permitido = TRUE;

    public function __construct() {
        $session = session();
        
        if(!Permisos::es_rol_permitido(TAREA_DASHBOARD, (isset($session->id_rol) ? $session->id_rol : 0))) {
            $this->esta_permitido = FALSE;
        }
    }

    public function index(){
        if($this->esta_permitido){
            return $this->crear_vista('Panel/dashboard', $this->cargar_datos());
        }else{
            crear_mensaje_usuario('Acceso no autorizado.', 'No puedes acceder a esta sección sin un usuario autorizado.', 'error');
            return redirect()->to(route_to('/login_admin'));
        }
    }//end index

    private function cargar_datos(){
        //Todos los datos de la vista (modelos, nombre de la página, etc.)

        $session = session();
        $datos['nombre'] = $session->nombre;
        $datos['ap_paterno'] = $session->ap_paterno;
        $datos['ap_materno'] = $session->ap_materno;

        $datos['nombre_completo'] = $session->nombre.' '.$session->ap_paterno.' '.$session->ap_materno;

        $tabla_materias = new \App\Models\Tabla_materias;
        $datos['materias'] = $tabla_materias->obtener_materias_panel();

        $datos['nombre_pestania'] = 'Dashboard';

        return $datos;
    }//end cargar_datos

    private function crear_vista($nombre_vista = '', $contenido = array()){
        $contenido['menu'] = generar_menu_panel_administrativo_navegacion(TAREA_DASHBOARD);
        return view($nombre_vista, $contenido);
    }//end crear_vista


    public function eliminar_materia($id_materia = 0){
        $tabla_materias = new \App\Models\Tabla_materias;
        if ($tabla_materias->delete($id_materia)) {
            crear_mensaje_usuario('Eliminación Exitosa.', 'Se ha eliminado correctamente a la materia.', 'success');
            return redirect()->to(route_to('dashboard', $id_materia));
        }
        else {
            crear_mensaje_usuario('No se eliminó a la materia.', 'Hubo un error con nuestro servidor y no se eliminó la materia, intenta nuevamente, por favor.', 'error');
            return redirect()->to(route_to('dashboard', $id_materia));
        }
    }//end eliminar_materia

}//End Class Dashboard
