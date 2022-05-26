<?php

namespace App\Controllers\Panel;

use \App\Controllers\BaseController;

class Alumno_detalles extends BaseController{

    public function index($id_alumno = 0){
        return $this->crear_vista('Panel/alumno_detalles', $this->cargar_datos($id_alumno));
    }//end index

    private function cargar_datos($id_alumno = 0){
        //Todos los datos de la vista (modelos, nombre de la página, etc.)

        $session = session();
        $datos['nombre'] = $session->nombre;
        $datos['ap_paterno'] = $session->ap_paterno;
        $datos['ap_materno'] = $session->ap_materno;

        $datos['nombre_completo'] = $session->nombre.' '.$session->ap_paterno.' '.$session->ap_materno;

        $datos['nombre_pestania'] = 'Detalles alumno';

        $tabla_alumnos = new \App\Models\Tabla_alumnos;
        $alumno = $tabla_alumnos->obtener_alumno($id_alumno);
        $datos['alumno'] = $alumno;

        return $datos;
    }//end cargar_datos

    private function crear_vista($nombre_vista = '', $contenido = array()){
        $contenido['menu'] = generar_menu_panel_administrativo_navegacion(TAREA_ALUMNO_DETALLES);
        return view($nombre_vista, $contenido);
    }//end crear_vista

    public function actualizar_alumno(){
        $id_alumno = $this->request->getPost('id_alumno');
        $tabla_alumnos = new \App\Models\Tabla_alumnos;
        $alumno = array();
        $alumno['cuatrimestre_recursamiento'] = $this->request->getPost('cuatrimestre_recursamiento');
        $alumno['grupo_recursamiento'] = $this->request->getPost('grupo_recursamiento');
        if(($tabla_alumnos->update($id_alumno, $alumno))){
            crear_mensaje_usuario('Actualización Exitosa.', 'Se ha actualizado correctamente el alumno.', 'success');
            return redirect()->to(route_to('detalles_alumno', $id_alumno));
        }//end if inserta el usuario a la DB
        else {
            crear_mensaje_usuario('No se actualizó el alumno.', 'Hubo un error con nuestro servidor y no se actualizó el alumno, intenta nuevamente, por favor.', 'error');
            return redirect()->to(route_to('detalles_alumno', $id_alumno));
        }//end else inserta el materia a la DB
    }//end actualizar_materia

}//End Class Dashboard
