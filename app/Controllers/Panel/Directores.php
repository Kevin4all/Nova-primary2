<?php

namespace App\Controllers\Panel;

use \App\Controllers\BaseController;
use \App\Libraries\Permisos;

class Directores extends BaseController{
    
    private $esta_permitido = TRUE;

    public function __construct() {
        $session = session();
        
        if(!Permisos::es_rol_permitido(TAREA_DIRECTORES, (isset($session->id_rol) ? $session->id_rol : 0))) {
            $this->esta_permitido = FALSE;
        }
    }

    public function index(){
        if($this->esta_permitido){
            return $this->crear_vista('Panel/directores', $this->cargar_datos());
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

        $tabla_directores = new \App\Models\Tabla_directores;
        $datos['directores'] = $tabla_directores->obtener_directores_panel();

        $datos['nombre_pestania'] = 'Directores';

        return $datos;
    }//end cargar_datos

    private function crear_vista($nombre_vista = '', $contenido = array()){
        $contenido['menu'] = generar_menu_panel_administrativo_navegacion(TAREA_DIRECTORES);
        return view($nombre_vista, $contenido);
    }//end crear_vista


    public function eliminar_director($id_director = 0){
        $tabla_directores = new \App\Models\Tabla_directores;
        if ($tabla_directores->delete($id_director)) {
            crear_mensaje_usuario('Eliminación Exitosa.', 'Se ha eliminado correctamente al director.', 'success');
            return redirect()->to(route_to('directores', $id_director));
        }
        else {
            crear_mensaje_usuario('No se eliminó al director.', 'Hubo un error con nuestro servidor y no se eliminó al director, intenta nuevamente, por favor.', 'error');
            return redirect()->to(route_to('directores', $id_director));
        }
    }//end eliminar_materia

}//End Class Dashboard
