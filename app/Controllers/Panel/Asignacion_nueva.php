<?php

namespace App\Controllers\Panel;

use \App\Controllers\BaseController;

class Asignacion_nueva extends BaseController{

    public function index(){
        return $this->crear_vista('Panel/asignacion_nueva', $this->cargar_datos());
    }//end index

    private function cargar_datos(){
        //Todos los datos de la vista (modelos, nombre de la página, etc.)

        $session = session();
        $datos['nombre'] = $session->nombre;
        $datos['ap_paterno'] = $session->ap_paterno;
        $datos['ap_materno'] = $session->ap_materno;

        $datos['nombre_completo'] = $session->nombre.' '.$session->ap_paterno.' '.$session->ap_materno;

        $datos['nombre_pestania'] = 'Nueva asignación';

        $tabla_materias = new \App\Models\Tabla_materias;
        $datos['materias'] = $tabla_materias->generar_dropdown_materias();

        $tabla_periodos = new \App\Models\Tabla_periodos;
        $datos['periodos'] = $tabla_periodos->generar_dropdown_periodos();

        return $datos;
    }//end cargar_datos

    private function crear_vista($nombre_vista = '', $contenido = array()){
        $contenido['menu'] = generar_menu_panel_administrativo_navegacion(TAREA_ASIGNACION_NUEVA);
        return view($nombre_vista, $contenido);
    }//end crear_vista

    public function insertar_asignacion(){
        $tabla_asignaciones = new \App\Models\Tabla_materias_periodos;
        $asignacion = array();
        $asignacion['id_materia'] = $this->request->getPost('materia');
        $asignacion['id_periodo'] = $this->request->getPost('periodo');
        if (($tabla_asignaciones->insert($asignacion))>0) {
            crear_mensaje_usuario('Registro Exitoso.', 'Se ha registrado correctamente la asignación.', 'success');
            return redirect()->to(route_to('asignaciones'));
        }//end if inserta el usuario a la DB
        else {
            crear_mensaje_usuario('No se registro el periodo.', 'Hubo un error con nuestro servidor y no se registro la asignación, intenta nuevamente, por favor.', 'error');
            return redirect()->to(route_to('asignacion_nueva'));
        }//end if inserta el usuario a la DB
    }//end insertar_usuario

}//End Class Dashboard
