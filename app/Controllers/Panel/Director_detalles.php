<?php

namespace App\Controllers\Panel;

use \App\Controllers\BaseController;
use \App\Libraries\Permisos;

class Director_detalles extends BaseController{

    private $esta_permitido = TRUE;

    public function __construct() {
        $session = session();
        
        if(!Permisos::es_rol_permitido(TAREA_DIRECTOR_DETALLES, (isset($session->id_rol) ? $session->id_rol : 0))) {
            $this->esta_permitido = FALSE;
        }
    }

    public function index($id_director = 0){
        if($this->esta_permitido){
            return $this->crear_vista('Panel/director_detalles', $this->cargar_datos($id_director));
        }else{
            crear_mensaje_usuario('Acceso no autorizado.', 'No puedes acceder a esta sección sin un usuario autorizado.', 'error');
            return redirect()->to(route_to('/dashboard'));
        }
    }//end index

    private function cargar_datos($id_director = 0){
        //Todos los datos de la vista (modelos, nombre de la página, etc.)

        $session = session();
        $datos['nombre'] = $session->nombre;
        $datos['ap_paterno'] = $session->ap_paterno;
        $datos['ap_materno'] = $session->ap_materno;

        $datos['nombre_completo'] = $session->nombre.' '.$session->ap_paterno.' '.$session->ap_materno;

        $datos['nombre_pestania'] = 'Detalles director';

        $tabla_directores = new \App\Models\Tabla_directores;
        $director = $tabla_directores->obtener_director($id_director);
        $datos['director'] = $director;

        return $datos;
    }//end cargar_datos

    private function crear_vista($nombre_vista = '', $contenido = array()){
        $contenido['menu'] = generar_menu_panel_administrativo_navegacion(TAREA_DIRECTOR_DETALLES);
        return view($nombre_vista, $contenido);
    }//end crear_vista

    public function actualizar_director(){
        $id_director = $this->request->getPost('id_director');
        $tabla_directores = new \App\Models\Tabla_directores;
        $director = array();
        $director['nombre'] = $this->request->getPost('nombre');
        $director['ap_paterno'] = $this->request->getPost('ap_paterno');
        $director['ap_materno'] = $this->request->getPost('ap_materno');
        if(($tabla_directores->update($id_director, $director))){
            crear_mensaje_usuario('Actualización Exitosa.', 'Se ha actualizado correctamente al director.', 'success');
            return redirect()->to(route_to('detalles_director', $id_director));
        }//end if inserta el usuario a la DB
        else {
            crear_mensaje_usuario('No se actualizó al director.', 'Hubo un error con nuestro servidor y no se actualizó al director, intenta nuevamente, por favor.', 'error');
            return redirect()->to(route_to('detalles_director', $id_director));
        }//end else inserta el materia a la DB
    }//end actualizar_materia

}//End Class Dashboard
