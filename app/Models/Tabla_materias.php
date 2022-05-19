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

    public function generar_dropdown_materias(){
        $resultado = $this
                          ->select('id_materia, nombre')
                          ->findAll();
        if ($resultado != NULL) {
            $materias = array();
            foreach ($resultado as $res) {
                $materias[$res->id_materia] = $res->nombre;
            }//end foreach resultado
            return $materias;
        }//end if se encontrarón resultados
        else {
            return NULL;
        }//end else se encontrarón resultados
    }//end generar_dropdown_roles

    
}//End Model alumnos