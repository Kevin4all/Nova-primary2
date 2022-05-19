<?php

namespace App\Controllers\Panel;

use \App\Controllers\BaseController;

class Asignaciones extends BaseController{

    public function index(){
        return $this->crear_vista('Panel/asignaciones', $this->cargar_datos());
    }//end index

    private function cargar_datos(){
        //Todos los datos de la vista (modelos, nombre de la página, etc.)

        $session = session();
        $datos['nombre'] = $session->nombre;
        $datos['ap_paterno'] = $session->ap_paterno;
        $datos['ap_materno'] = $session->ap_materno;

        $datos['nombre_completo'] = $session->nombre.' '.$session->ap_paterno.' '.$session->ap_materno;

        $tabla_materias_periodos = new \App\Models\Tabla_materias_periodos;
        $datos['materias_periodos'] = $tabla_materias_periodos->obtener_materias_periodos_panel();

        $datos['nombre_pestania'] = 'Asignaciones';

        return $datos;
    }//end cargar_datos

    private function crear_vista($nombre_vista = '', $contenido = array()){
        $contenido['menu'] = generar_menu_panel_administrativo_navegacion(TAREA_ASIGNACIONES);
        return view($nombre_vista, $contenido);
    }//end crear_vista


    public function eliminar_asignacion($id_asignacion = 0){
        $tabla_materias_periodos = new \App\Models\Tabla_materias_periodos;
        if ($tabla_materias_periodos->delete($id_asignacion)) {
            crear_mensaje_usuario('Eliminación Exitosa.', 'Se ha eliminado correctamente la asignacion.', 'success');
            return redirect()->to(route_to('asignaciones', $id_asignacion));
        }
        else {
            crear_mensaje_usuario('No se eliminó la asignación.', 'Hubo un error con nuestro servidor y no se eliminó la asignación, intenta nuevamente, por favor.', 'error');
            return redirect()->to(route_to('asignaciones', $id_asignacion));
        }
    }//end eliminar_materia

}//End Class Dashboard
