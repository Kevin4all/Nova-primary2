<?php

namespace App\Controllers\Panel;

use \App\Controllers\BaseController;

class Tutores extends BaseController{
    
    public function index(){
        return $this->crear_vista('Panel/tutores', $this->cargar_datos());
    }//end index

    private function cargar_datos(){
        //Todos los datos de la vista (modelos, nombre de la página, etc.)

        $session = session();
        $datos['nombre'] = $session->nombre;
        $datos['ap_paterno'] = $session->ap_paterno;
        $datos['ap_materno'] = $session->ap_materno;

        $datos['nombre_completo'] = $session->nombre.' '.$session->ap_paterno.' '.$session->ap_materno;

        $tabla_tutores = new \App\Models\Tabla_tutores;
        $datos['tutores'] = $tabla_tutores->obtener_tutores_panel();

        $datos['nombre_pestania'] = 'Tutores';

        return $datos;
    }//end cargar_datos

    private function crear_vista($nombre_vista = '', $contenido = array()){
        $contenido['menu'] = generar_menu_panel_administrativo_navegacion(TAREA_TUTORES);
        return view($nombre_vista, $contenido);
    }//end crear_vista


    public function eliminar_tutor($id_tutor = 0){
        $tabla_tutores = new \App\Models\Tabla_tutores;
        if ($tabla_tutores->delete($id_tutor)) {
            crear_mensaje_usuario('Eliminación Exitosa.', 'Se ha eliminado correctamente al tutor.', 'success');
            return redirect()->to(route_to('tutores', $id_tutor));
        }
        else {
            crear_mensaje_usuario('No se eliminó al tutor.', 'Hubo un error con nuestro servidor y no se eliminó al tutor, intenta nuevamente, por favor.', 'error');
            return redirect()->to(route_to('tutores', $id_tutor));
        }
    }//end eliminar_materia

}//End Class Dashboard
