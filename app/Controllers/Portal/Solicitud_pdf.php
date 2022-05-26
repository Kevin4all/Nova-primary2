<?php

namespace App\Controllers\Portal;
use \App\Controllers\BaseController;

use Dompdf\Dompdf;

class Solicitud_pdf extends BaseController{

    public function imprimirpdf()
    {
      $dompdf = new Dompdf();
      $dompdf->loadHtml(view('Portal/imprimir_solicitud', $this->cargar_datos()));
      $dompdf->setPaper('A4', 'portrait');
      $dompdf->render();
      $dompdf->stream("Solicitud", array("Attachment" => false));
      // return view('Portal/Inicio_alumno', $this->cargar_datos());
    }

    private function cargar_datos(){
        //Todos los datos de la vista (modelos, nombre de la página, etc.)
        $datos = array();

        $session = session();
        $datos['nombre'] = $session->nombre;
        $datos['ap_paterno'] = $session->ap_paterno;
        $datos['ap_materno'] = $session->ap_materno;
        $datos['matricula'] = $session->matricula;

        $datos['nombre_completo'] = $session->ap_paterno.' '.$session->ap_materno.' '.$session->nombre;
        $datos['gyg'] = $session->cuatrimestre_original.'° "'.$session->grupo_original.'"';
        //Elementos propios del controlador
        $tabla_periodos_cuatrimestrales = new \App\Models\Tabla_periodos_cuatrimestrales;
        $datos['periodos'] = $tabla_periodos_cuatrimestrales->generar_dropdown_periodos();
        //dd($datos['periodos']);

        $tabla_tutores = new \App\Models\Tabla_tutores;
        $datos['tutores'] = $tabla_tutores->generar_dropdown_tutores();
        //dd($datos['tutores']);

        $tabla_directores = new \App\Models\Tabla_directores;
        $datos['directores'] = $tabla_directores->generar_dropdown_directores();
        //dd($datos['directores']);

        return $datos;
    }//end cargar_datos
    // public function index(){
    //     return view('Portal/Inicio_alumno', $this->cargar_datos());
    // }
    //
    // private function cargar_datos(){
    //     $datos = array();
    //     return $datos;
    //
    // }//end cargar_datos
    //
    // public function insertar_alumno(){
    //   // d($this->request->getPost());
    //   // dd($this->request->getFile('imagen_perfil'));
    //   $tabla_alumnos = new \App\Models\Tabla_alumnos;
    //   $alumno = array();
    //     $alumno['nombre'] = $this->request->getPost('nombre_alumno');
    //     $alumno['ap_paterno'] = $this->request->getPost('apellidop');
    //     $alumno['ap_materno'] = $this->request->getPost('apellidom');
    //     $alumno['contrasenia'] = $this->request->getPost('contrasenia');
    //     $alumno['matricula'] = $this->request->getPost('matricula');
    //     $alumno['email'] = $this->request->getPost('correo_alumno');
    //     $alumno['telefono'] = $this->request->getPost('telefono');
    //     $alumno['sexo'] = $this->request->getPost('sexo');
    //     if (($tabla_alumnos->insert($alumno))>0) {
    //       crear_mensaje_usuario('Registro Exitoso.', 'Se ha registrado correctamente a tu usuario.', 'success');
    //       return redirect()->to(route_to('login_alumno'));
    //     }//end if inserta alumno a DB
    //     else {
    //       crear_mensaje_usuario('No se registro al usuario.', 'Hubo un error con nuestro servidor y no se registro tu usuario, intenta nuevamente, por favor.', 'error');
    //       return redirect()->to(route_to('registrar_alumno'));
    //     }
    //   }

}//end class inicio_alumno
