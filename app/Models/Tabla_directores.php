<?php namespace App\Models;

use CodeIgniter\Model;

class Tabla_directores extends Model{
    protected $table = 'directores';
    protected $primaryKey = 'id_director';
    protected $returnType = 'object';
    protected $allowedFields = ['id_director', 'nombre', 'ap_paterno', 'ap_materno'];


    public function generar_dropdown_directores(){
        $resultado = $this
                          ->select('id_director, nombre, ap_paterno, ap_materno')
                          ->findAll();

        if ($resultado != NULL) {
            $directores = array();
            foreach ($resultado as $res) {
                $directores[$res->id_director] = $res->nombre.' '.$res->ap_paterno.' '.$res->ap_materno;
            }//end foreach resultado
            return $directores;
        }//end if se encontraron resultados
        else{
            return NULL;
        }
    }//end generar_dropdown_periodos

    public function obtener_directores_panel(){
        $resultado = $this
                          ->select('id_director, nombre, ap_paterno, ap_materno')
                          ->findAll();
        return $resultado;
    }//end obtener_directores_panel
}//End Model periodos
