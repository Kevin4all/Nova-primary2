<?php

namespace App\Controllers\Panel;

use \App\Controllers\BaseController;

class Tutor_detalles extends BaseController{

    public function index($id_tutor = 0){
        return $this->crear_vista('Panel/tutor_detalles', $this->cargar_datos($id_tutor));
    }//end index

    private function cargar_datos($id_tutor = 0){
        //Todos los datos de la vista (modelos, nombre de la página, etc.)

        $session = session();
        $datos['nombre'] = $session->nombre;
        $datos['ap_paterno'] = $session->ap_paterno;
        $datos['ap_materno'] = $session->ap_materno;

        $datos['nombre_completo'] = $session->nombre.' '.$session->ap_paterno.' '.$session->ap_materno;

        $datos['nombre_pestania'] = 'Detalles tutor';

        $tabla_tutores = new \App\Models\Tabla_tutores;
        $tutor = $tabla_tutores->obtener_tutor($id_tutor);
        $datos['tutor'] = $tutor;

        return $datos;
    }//end cargar_datos

    private function crear_vista($nombre_vista = '', $contenido = array()){
        $contenido['menu'] = generar_menu_panel_administrativo_navegacion(TAREA_TUTOR_DETALLES);
        return view($nombre_vista, $contenido);
    }//end crear_vista

    public function actualizar_tutor(){
        $id_tutor = $this->request->getPost('id_tutor');
        $tabla_tutores = new \App\Models\Tabla_tutores;
        $tutor = array();
        $tutor['nombre'] = $this->request->getPost('nombre');
        $tutor['ap_paterno'] = $this->request->getPost('ap_paterno');
        $tutor['ap_materno'] = $this->request->getPost('ap_materno');
        if(($tabla_tutores->update($id_tutor, $tutor))){
            crear_mensaje_usuario('Actualización Exitosa.', 'Se ha actualizado correctamente al tutor.', 'success');
            return redirect()->to(route_to('detalles_tutor', $id_tutor));
        }//end if inserta el usuario a la DB
        else {
            crear_mensaje_usuario('No se actualizó al tutor.', 'Hubo un error con nuestro servidor y no se actualizó al tutor, intenta nuevamente, por favor.', 'error');
            return redirect()->to(route_to('detalles_tutor', $id_tutor));
        }//end else inserta el materia a la DB
    }//end actualizar_materia

}//End Class Dashboard
