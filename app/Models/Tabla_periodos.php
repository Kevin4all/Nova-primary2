<?php namespace App\Models;

use CodeIgniter\Model;

class Tabla_periodos extends Model{
    protected $table = 'periodos_cuatrimestrales';
    protected $primaryKey = 'id_periodo';
    protected $returnType = 'object';
    protected $allowedFields = ['id_periodo', 'nombre', 'anio'];

    public function obtener_periodos_panel(){
        $resultado = $this
                          ->select('id_periodo, nombre, anio')
                          ->findAll();
        return $resultado;
    }//end obtener_materias_panel

    public function obtener_periodo($id_periodo = 0){
        $resultado = $this
                          ->select('id_periodo, nombre, anio')
                          ->where('id_periodo', $id_periodo)
                          ->first();
        return $resultado;
    }//end obtener_materia

    
}//End Model alumnos