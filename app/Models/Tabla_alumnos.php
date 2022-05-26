<?php namespace App\Models;

use CodeIgniter\Model;

class Tabla_alumnos extends Model{
    protected $table = 'alumnos';
    protected $primaryKey = 'id_alumno';
    protected $returnType = 'object';
    protected $allowedFields = ['id_alumno', 'matricula', 'nombre', 'ap_paterno', 'ap_materno', 
    'contrasenia','email', 'telefono', 'sexo', 'cuatrimestre_original','grupo_original', 'cuatrimestre_recursamiento', 'grupo_recursamiento', 'id_periodo'];


    public function logear_alumno($matricula = '', $contrasenia = ''){
        $resultado = $this
                          ->select('id_alumno, matricula, nombre, ap_paterno, ap_materno, contrasenia, email, telefono, sexo, cuatrimestre_original, grupo_original, cuatrimestre_recursamiento, grupo_recursamiento, id_periodo')
                          ->where('matricula', $matricula)
                          ->where('contrasenia', $contrasenia)
                          ->first();
        return $resultado;
    }//end logear_alumno

    public function obtener_alumnos_panel(){
        $resultado = $this
                          ->select('id_alumno, matricula, nombre, ap_paterno, ap_materno, contrasenia, email, telefono, sexo, cuatrimestre_original, grupo_original, cuatrimestre_recursamiento, grupo_recursamiento, nombre_periodo, anio')
                          ->join('periodos_cuatrimestrales', 'periodos_cuatrimestrales.id_periodo = alumnos.id_periodo')
                          ->findAll();
        return $resultado;
    }//end obtener_alumnos_panel

    public function obtener_alumno($id_alumno = 0){
        $resultado = $this
                          ->select('id_alumno, matricula, nombre, ap_paterno, ap_materno, email, telefono, cuatrimestre_original, grupo_original, cuatrimestre_recursamiento, grupo_recursamiento, id_periodo')
                          ->where('id_alumno', $id_alumno)
                          ->first();
        return $resultado;
    }//end obtener_materia

    
}//End Model alumnos
