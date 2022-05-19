<?php

namespace App\Controllers\Panel;

use \App\Controllers\BaseController;

class Periodo_detalles extends BaseController{

    public function index($id_periodo = 0){
        return $this->crear_vista('Panel/periodo_detalles', $this->cargar_datos($id_periodo));
    }//end index

    private function cargar_datos($id_periodo = 0){
        //Todos los datos de la vista (modelos, nombre de la página, etc.)

        $session = session();
        $datos['nombre'] = $session->nombre;
        $datos['ap_paterno'] = $session->ap_paterno;
        $datos['ap_materno'] = $session->ap_materno;

        $datos['nombre_completo'] = $session->nombre.' '.$session->ap_paterno.' '.$session->ap_materno;

        $datos['nombre_pestania'] = 'Detalles periodo';

        $tabla_periodos = new \App\Models\Tabla_periodos;
        $periodo = $tabla_periodos->obtener_periodo($id_periodo);
        $datos['periodo'] = $periodo;

        return $datos;
    }//end cargar_datos

    private function crear_vista($nombre_vista = '', $contenido = array()){
        $contenido['menu'] = generar_menu_panel_administrativo_navegacion(TAREA_PERIODO_DETALLES);
        return view($nombre_vista, $contenido);
    }//end crear_vista

    public function actualizar_periodo(){
        $id_periodo = $this->request->getPost('id_periodo');
        $tabla_periodos = new \App\Models\Tabla_periodos;
        $periodo = array();

        $periodo['nombre_periodo'] = $this->request->getPost('nombre_periodo');
        $periodo['anio'] = $this->request->getPost('anio');
        if(($tabla_periodos->update($id_periodo, $periodo))){
            crear_mensaje_usuario('Actualización Exitosa.', 'Se ha actualizado correctamente al periodo.', 'success');
            return redirect()->to(route_to('detalles_periodo', $id_periodo));
        }//end if inserta el usuario a la DB
        else {
            crear_mensaje_usuario('No se actualizó el periodo.', 'Hubo un error con nuestro servidor y no se actualizó el periodo, intenta nuevamente, por favor.', 'error');
            return redirect()->to(route_to('detalles_periodo', $id_periodo));
        }//end else inserta el materia a la DB
    }//end actualizar_materia

}//End Class Dashboard
