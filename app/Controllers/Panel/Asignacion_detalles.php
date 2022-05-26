<?php

namespace App\Controllers\Panel;

use \App\Controllers\BaseController;

class Asignacion_detalles extends BaseController{

    public function index($id_materia_periodo = 0){
        return $this->crear_vista('Panel/asignacion_detalles', $this->cargar_datos($id_materia_periodo));
    }//end index

    private function cargar_datos($id_materia_periodo = 0){
        //Todos los datos de la vista (modelos, nombre de la página, etc.)

        $session = session();
        $datos['nombre'] = $session->nombre;
        $datos['ap_paterno'] = $session->ap_paterno;
        $datos['ap_materno'] = $session->ap_materno;

        $datos['nombre_completo'] = $session->nombre.' '.$session->ap_paterno.' '.$session->ap_materno;

        $datos['nombre_pestania'] = 'Detalles asignación';

        $tabla_materias_periodos = new \App\Models\Tabla_materias_periodos;
        $materia_periodo = $tabla_materias_periodos->obtener_materia_periodo($id_materia_periodo);
        $datos['materia_periodo'] = $materia_periodo;

        $tabla_materias = new \App\Models\Tabla_materias;
        $datos['materias'] = $tabla_materias->generar_dropdown_materias();

        $tabla_periodos = new \App\Models\Tabla_periodos;
        $datos['periodos'] = $tabla_periodos->generar_dropdown_periodos();

        return $datos;
    }//end cargar_datos

    private function crear_vista($nombre_vista = '', $contenido = array()){
        $contenido['menu'] = generar_menu_panel_administrativo_navegacion(TAREA_ASIGNACION_DETALLES);
        return view($nombre_vista, $contenido);
    }//end crear_vista

    public function actualizar_asignacion(){
        $id_materia_periodo = $this->request->getPost('id_materia_periodo');
        $tabla_materias_periodos = new \App\Models\Tabla_materias_periodos;
        $materia_periodo = array();

        $materia_periodo['id_materia'] = $this->request->getPost('materia');
        $materia_periodo['id_periodo'] = $this->request->getPost('periodo');
        if(($tabla_materias_periodos->update($id_materia_periodo, $materia_periodo))){
            crear_mensaje_usuario('Actualización Exitosa.', 'Se ha actualizado correctamente la asignación.', 'success');
            return redirect()->to(route_to('detalles_asignacion', $id_materia_periodo));
        }//end if inserta el usuario a la DB
        else {
            crear_mensaje_usuario('No se actualizó la asignación.', 'Hubo un error con nuestro servidor y no se actualizó la asignación, intenta nuevamente, por favor.', 'error');
            return redirect()->to(route_to('detalles_asignacion', $id_materia_periodo));
        }//end else inserta el materia a la DB
    }//end actualizar_materia

}//End Class Dashboard
