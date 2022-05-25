<?php namespace App\Models;

use CodeIgniter\Model;

class Tabla_periodos extends Model{
    protected $table = 'periodos_cuatrimestrales';
    protected $primaryKey = 'id_periodo';
    protected $returnType = 'object';
    protected $allowedFields = ['id_periodo', 'nombre_periodo', 'anio'];

    public function obtener_periodos_panel(){
        $resultado = $this
                          ->select('id_periodo, nombre_periodo, anio')
                          ->findAll();
        return $resultado;
    }//end obtener_materias_panel

    public function obtener_periodo($id_periodo = 0){
        $resultado = $this
                          ->select('id_periodo, nombre_periodo, anio')
                          ->where('id_periodo', $id_periodo)
                          ->first();
        return $resultado;
    }//end obtener_materia

    public function generar_dropdown_periodos(){
        $resultado = $this
                          ->select('id_periodo, nombre_periodo, anio')
                          ->findAll();
        if ($resultado != NULL) {
            $periodos = array();
            foreach ($resultado as $res) {
                $periodos[$res->id_periodo] = $res->nombre_periodo.' '.$res->anio;
            }//end foreach resultado
            return $periodos;
        }//end if se encontrarón resultados
        else {
            return NULL;
        }//end else se encontrarón resultados
    }//end generar_dropdown_roles

    
}//End Model alumnos