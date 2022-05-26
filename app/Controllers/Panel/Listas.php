<?php

namespace App\Controllers\Panel;

use \App\Controllers\BaseController;

use Dompdf\Dompdf;

class Listas extends BaseController{

    public function demoPDF()
    {
      $dompdf = new Dompdf();
      $dompdf->loadHTML(view('Panel/plantillapdf', $this->cargar_datos()));
      $dompdf->loadHTML(view('Panel/alumnos'));
      $dompdf->setPaper('A4', 'landscape');
      $dompdf->render();
      $dompdf->stream();
    }

    public function index(){
        return $this->crear_vista('Panel/listas', $this->cargar_datos());
    }//end index

    private function cargar_datos(){
        //Todos los datos de la vista (modelos, nombre de la página, etc.)

        $session = session();
        $datos['nombre'] = $session->nombre;
        $datos['ap_paterno'] = $session->ap_paterno;
        $datos['ap_materno'] = $session->ap_materno;

        $datos['nombre_completo'] = $session->nombre.' '.$session->ap_paterno.' '.$session->ap_materno;

        $tabla_periodos = new \App\Models\Tabla_periodos;
        $datos['periodos'] = $tabla_periodos->obtener_periodos_panel();
        //dd($datos['periodos']);


        $datos['nombre_pestania'] = 'Listas';

        return $datos;
    }//end cargar_datos

    private function crear_vista($nombre_vista = 'listas', $contenido = array()){
        $contenido['menu'] = generar_menu_panel_administrativo_navegacion(TAREA_LISTAS);
        return view($nombre_vista, $contenido);
    }//end crear_vista

}//End Class Dashboard
