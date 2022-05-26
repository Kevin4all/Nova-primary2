<?php

namespace App\Controllers\Panel;

use \App\Controllers\BaseController;
use \App\Libraries\Permisos;

class Materia_detalles extends BaseController{

    private $esta_permitido = TRUE;

    public function __construct() {
        $session = session();
        
        if(!Permisos::es_rol_permitido(TAREA_MATERIA_DETALLES, (isset($session->id_rol) ? $session->id_rol : 0))) {
            $this->esta_permitido = FALSE;
        }
    }

    public function index($id_materia = 0){
        if($this->esta_permitido){
            return $this->crear_vista('Panel/materia_detalles', $this->cargar_datos($id_materia));
        }else{
            crear_mensaje_usuario('Acceso no autorizado.', 'No puedes acceder a esta sección sin un usuario autorizado.', 'error');
            return redirect()->to(route_to('/dashboard'));
        }
    }//end index

    private function cargar_datos($id_materia = 0){
        //Todos los datos de la vista (modelos, nombre de la página, etc.)

        $session = session();
        $datos['nombre'] = $session->nombre;
        $datos['ap_paterno'] = $session->ap_paterno;
        $datos['ap_materno'] = $session->ap_materno;

        $datos['nombre_completo'] = $session->nombre.' '.$session->ap_paterno.' '.$session->ap_materno;

        $datos['nombre_pestania'] = 'Detalles materia';

        $tabla_materias = new \App\Models\Tabla_materias;
        $materia = $tabla_materias->obtener_materia($id_materia);
        $datos['materia'] = $materia;

        return $datos;
    }//end cargar_datos

    private function crear_vista($nombre_vista = '', $contenido = array()){
        $contenido['menu'] = generar_menu_panel_administrativo_navegacion(TAREA_MATERIA_DETALLES);
        return view($nombre_vista, $contenido);
    }//end crear_vista

    public function actualizar_materia(){
        $id_materia = $this->request->getPost('id_materia');
        $tabla_materias = new \App\Models\Tabla_materias;
        $materia = array();

        $materia['nombre'] = $this->request->getPost('nombre');
        $materia['siglas'] = $this->request->getPost('siglas');
        $materia['creditos'] = $this->request->getPost('creditos');
        $materia['cuatrimestre'] = $this->request->getPost('cuatrimestre');
        if(($tabla_materias->update($id_materia, $materia))){
            crear_mensaje_usuario('Actualización Exitosa.', 'Se ha actualizado correctamente a la materia.', 'success');
            return redirect()->to(route_to('detalles_materia', $id_materia));
        }//end if inserta el usuario a la DB
        else {
            crear_mensaje_usuario('No se actualizó la materia.', 'Hubo un error con nuestro servidor y no se actualizó la materia, intenta nuevamente, por favor.', 'error');
            return redirect()->to(route_to('detalles_materia', $id_materia));
        }//end else inserta el materia a la DB
    }//end actualizar_materia

}//End Class Dashboard
