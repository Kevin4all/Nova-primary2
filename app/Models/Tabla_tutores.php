<?php namespace App\Models;

use CodeIgniter\Model;

class Tabla_tutores extends Model{
    protected $table = 'tutores';
    protected $primaryKey = 'id_tutor';
    protected $returnType = 'object';
    protected $allowedFields = ['id_tutor', 'nombre', 'ap_paterno', 'ap_materno'];


    public function generar_dropdown_tutores(){
        $resultado = $this
                          ->select('id_tutor, nombre, ap_paterno, ap_materno')
                          ->findAll();

        if ($resultado != NULL) {
            $tutores = array();
            foreach ($resultado as $res) {
                $tutores[$res->id_tutor] = $res->nombre.' '.$res->ap_paterno.' '.$res->ap_materno;
            }//end foreach resultado
            return $tutores;
        }//end if se encontraron resultados
        else{
            return NULL;
        }
    }//end generar_dropdown_periodos
}//End Model periodos
