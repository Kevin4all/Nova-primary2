<?php

namespace App\Controllers\Panel;

use \App\Controllers\BaseController;

class Materia_nueva extends BaseController{

    public function index(){
        return $this->crear_vista('Panel/materia_nueva', $this->cargar_datos());
    }//end index

    private function cargar_datos(){
        //Todos los datos de la vista (modelos, nombre de la página, etc.)

        $session = session();
        $datos['nombre'] = $session->nombre;
        $datos['ap_paterno'] = $session->ap_paterno;
        $datos['ap_materno'] = $session->ap_materno;

        $datos['nombre_completo'] = $session->nombre.' '.$session->ap_paterno.' '.$session->ap_materno;

        $datos['nombre_pestania'] = 'Nueva materia';

        return $datos;
    }//end cargar_datos

    private function crear_vista($nombre_vista = '', $contenido = array()){
        $contenido['menu'] = generar_menu_panel_administrativo_navegacion(TAREA_MATERIA_NUEVA);
        return view($nombre_vista, $contenido);
    }//end crear_vista

    public function insertar_materia(){
        $tabla_materias = new \App\Models\Tabla_materias;
        $materia = array();
        $materia['nombre'] = $this->request->getPost('nombre');
        $materia['siglas'] = $this->request->getPost('siglas');
        $materia['creditos'] = $this->request->getPost('creditos');
        $materia['cuatrimestre'] = $this->request->getPost('cuatrimestre');
        if (($tabla_materias->insert($materia))>0) {
            crear_mensaje_usuario('Registro Exitoso.', 'Se ha registrado correctamente a la materia.', 'success');
            return redirect()->to(route_to('dashboard'));
        }//end if inserta el usuario a la DB
        else {
            crear_mensaje_usuario('No se registro la materia.', 'Hubo un error con nuestro servidor y no se registro la materia, intenta nuevamente, por favor.', 'error');
            return redirect()->to(route_to('materia_nueva'));
        }//end if inserta el usuario a la DB
    }//end insertar_usuario

}//End Class Dashboard
