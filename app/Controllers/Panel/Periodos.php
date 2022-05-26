<?php

namespace App\Controllers\Panel;

use \App\Controllers\BaseController;

class Periodos extends BaseController{

    public function index(){
        return $this->crear_vista('Panel/periodos', $this->cargar_datos());
    }//end index

    private function cargar_datos(){
        //Todos los datos de la vista (modelos, nombre de la página, etc.)

        $session = session();
        $datos['nombre'] = $session->nombre;
        $datos['ap_paterno'] = $session->ap_paterno;
        $datos['ap_materno'] = $session->ap_materno;

        $datos['nombre_completo'] = $session->nombre.' '.$session->ap_paterno.' '.$session->ap_materno;

        $tabla_periodos = new \App\Models\Tabla_periodos;
        $datos['periodos'] = $tabla_periodos->obtener_periodos_panel();

        $datos['nombre_pestania'] = 'Periodos';

        return $datos;
    }//end cargar_datos

    private function crear_vista($nombre_vista = '', $contenido = array()){
        $contenido['menu'] = generar_menu_panel_administrativo_navegacion(TAREA_PERIODOS);
        return view($nombre_vista, $contenido);
    }//end crear_vista


    public function eliminar_periodo($id_periodo = 0){
        $tabla_periodos = new \App\Models\Tabla_periodos;
        if ($tabla_periodos->delete($id_periodo)) {
            crear_mensaje_usuario('Eliminación Exitosa.', 'Se ha eliminado correctamente el periodo.', 'success');
            return redirect()->to(route_to('periodos', $id_periodo));
        }
        else {
            crear_mensaje_usuario('No se eliminó el periodo.', 'Hubo un error con nuestro servidor y no se eliminó el periodo, intenta nuevamente, por favor.', 'error');
            return redirect()->to(route_to('periodos', $id_periodo));
        }
    }//end eliminar_materia

}//End Class Dashboard
