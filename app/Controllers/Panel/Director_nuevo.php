<?php

namespace App\Controllers\Panel;

use \App\Controllers\BaseController;

class Director_nuevo extends BaseController{

    public function index(){
        return $this->crear_vista('Panel/director_nuevo', $this->cargar_datos());
    }//end index

    private function cargar_datos(){
        //Todos los datos de la vista (modelos, nombre de la página, etc.)

        $session = session();
        $datos['nombre'] = $session->nombre;
        $datos['ap_paterno'] = $session->ap_paterno;
        $datos['ap_materno'] = $session->ap_materno;

        $datos['nombre_completo'] = $session->nombre.' '.$session->ap_paterno.' '.$session->ap_materno;

        $datos['nombre_pestania'] = 'Nuevo director';

        return $datos;
    }//end cargar_datos

    private function crear_vista($nombre_vista = '', $contenido = array()){
        $contenido['menu'] = generar_menu_panel_administrativo_navegacion(TAREA_DIRECTOR_NUEVO);
        return view($nombre_vista, $contenido);
    }//end crear_vista

    public function insertar_director(){
        $tabla_directores = new \App\Models\Tabla_directores;
        $director = array();
        $director['nombre'] = $this->request->getPost('nombre');
        $director['ap_paterno'] = $this->request->getPost('ap_paterno');
        $director['ap_materno'] = $this->request->getPost('ap_materno');
        if (($tabla_directores->insert($director))>0) {
            crear_mensaje_usuario('Registro Exitoso.', 'Se ha registrado correctamente al director.', 'success');
            return redirect()->to(route_to('directores'));
        }//end if inserta el usuario a la DB
        else {
            crear_mensaje_usuario('No se registro al director.', 'Hubo un error con nuestro servidor y no se registro al director, intenta nuevamente, por favor.', 'error');
            return redirect()->to(route_to('director_nuevo'));
        }//end if inserta el usuario a la DB
    }//end insertar_usuario

}//End Class Dashboard
