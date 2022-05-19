<?php namespace App\Models;

use CodeIgniter\Model;

class Tabla_alumnos extends Model{
    protected $table = 'alumnos';
    protected $primaryKey = 'id_alumno';
    protected $returnType = 'object';
    protected $allowedFields = ['id_alumno', 'matricula', 'nombre', 'ap_paterno', 'ap_materno', 
    'contrasenia','email', 'telefono', 'sexo', 'cuatrimestre_original','grupo_original', 'cuatrimestre_recursamiento', 'grupo_recursamiento'];


    public function logear_alumno($matricula = '', $contrasenia = ''){
        $resultado = $this
                          ->select('id_alumno, matricula, nombre, ap_paterno, ap_materno, contrasenia, email, telefono, sexo, cuatrimestre_original, grupo_original, cuatrimestre_recursamiento, grupo_recursamiento')
                          ->where('matricula', $matricula)
                          ->where('contrasenia', $contrasenia)
                          ->first();
        return $resultado;
    }//end logear_alumno

    public function obtener_alumnos_panel(){
        $resultado = $this
                          ->select('id_alumno, matricula, nombre, ap_paterno, ap_materno, contrasenia, email, telefono, sexo, cuatrimestre_original, grupo_original, cuatrimestre_recursamiento, grupo_recursamiento')
                          ->findAll();
        return $resultado;
    }//end obtener_alumnos_panel

    
}//End Model alumnos
