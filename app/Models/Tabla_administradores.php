<?php namespace App\Models;

use CodeIgniter\Model;

class Tabla_administradores extends Model{
    protected $table = 'administradores';
    protected $primaryKey = 'id_administrador';
    protected $returnType = 'object';
    protected $allowedFields = ['id_administrador', 'nombre', 'ap_paterno', 'ap_materno', 'telefono', 'email', 'cargo', 'contrasenia', 'id_rol'];


    public function logear_administrador($email = '', $contrasenia = ''){
        $resultado = $this
                          ->select('id_administrador, nombre, ap_paterno, ap_materno, telefono, email, cargo, contrasenia, id_rol')
                          ->where('email', $email)
                          ->where('contrasenia', $contrasenia)
                          ->first();
        return $resultado;
    }//end logear_administradores

}//End Model adminsitradores
