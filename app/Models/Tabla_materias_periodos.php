<?php namespace App\Models;

use CodeIgniter\Model;

class Tabla_materias_periodos extends Model{
    protected $table = 'materias_periodos';
    protected $primaryKey = 'id_materia_periodo';
    protected $returnType = 'object';
    protected $allowedFields = ['id_materia_periodo', 'id_materia', 'id_periodo'];

    public function obtener_materias_periodos_panel(){
        $resultado = $this
                          ->select('id_materia_periodo, nombre, nombre_periodo')
                          ->join('materias', 'materias.id_materia = materias_periodos.id_materia')
                          ->join('periodos_cuatrimestrales', 'periodos_cuatrimestrales.id_periodo = materias_periodos.id_periodo')
                          ->findAll();
        return $resultado;
    }//end obtener_materias_panel

    
}//End Model alumnos