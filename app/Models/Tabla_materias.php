<?php namespace App\Models;

use CodeIgniter\Model;

class Tabla_materias extends Model{
    protected $table = 'materias';
    protected $primaryKey = 'id_materia';
    protected $returnType = 'object';
    protected $allowedFields = ['id_materia', 'nombre', 'siglas', 'creditos', 'cuatrimestre'];

    public function obtener_materias_panel(){
        $resultado = $this
                          ->select('id_materia, nombre, siglas, creditos, cuatrimestre')
                          ->findAll();
        return $resultado;
    }//end obtener_materias_panel

    public function obtener_materia($id_materia = 0){
        $resultado = $this
                          ->select('id_materia, nombre, siglas, creditos, cuatrimestre')
                          ->where('id_materia', $id_materia)
                          ->first();
        return $resultado;
    }//end obtener_materia

    
}//End Model alumnos