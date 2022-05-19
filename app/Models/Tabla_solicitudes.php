<?php namespace App\Models;

use CodeIgniter\Model;

class Tabla_solicitudes extends Model{
    protected $table = 'procesos_solicitudes';
    protected $primaryKey = 'id_proceso';
    protected $returnType = 'object';
    protected $allowedFields = ['id_proceso', 'matricula', 'fecha', 'tipo_solicitud', 'nombre', 
                                'ap_paterno','ap_materno', 'tipo_curso', 'programa_educativo', 
                                'id_periodo','cuatrimestre', 'grupo', 'turno', 'id_tutor', 'id_director'];


    
}//End Model solicitudes
