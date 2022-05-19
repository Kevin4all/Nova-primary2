<?php namespace App\Models;

use CodeIgniter\Model;

class Tabla_periodos_cuatrimestrales extends Model{
    protected $table = 'periodos_cuatrimestrales';
    protected $primaryKey = 'id_periodo';
    protected $returnType = 'object';
    protected $allowedFields = ['id_periodo', 'nombre_periodo', 'anio'];


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
        }//end if se encontraron resultados
        else{
            return NULL;
        }
    }//end generar_dropdown_periodos
}//End Model periodos
