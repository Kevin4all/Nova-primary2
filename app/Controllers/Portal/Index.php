<?php
namespace App\Controllers\Portal;
// use \App\Controllers\BaseController;

class Index extends BaseController{

    public function __construct(){

    }//end constructor

    public function index(){
      return $this->crear_vista('portal/index',$this->cargar_datos());
    }//end index

    private function cargar_datos(){
      $datos=array();

      $datos['nombre_pestania'] = 'Nova';

      return $datos;
    }//end cargar_datos

    private function crear_vista($nombre_vista = '', $contenido = array()){
        $contenido['menu1'] = generar_menu_navegacion_portal();
        return view($nombre_vista, $contenido);
    }//end crear_vista


}//End Class Dashboard
