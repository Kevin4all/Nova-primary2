<?php

namespace App\Libraries;

class Permisos {
    public static function es_rol_permitido($seccion_a_acceder = NULL, $id_rol = 0) {
        $esta_permitido = FALSE;

        switch ($seccion_a_acceder) {
            case TAREA_DASHBOARD:
            case TAREA_MATERIA_NUEVA:
            case TAREA_MATERIA_DETALLES:
            case TAREA_PERIODOS:
            case TAREA_PERIODO_NUEVO:
            case TAREA_PERIODO_DETALLES:
            case TAREA_ASIGNACIONES:
            case TAREA_ASIGNACION_NUEVA:
            case TAREA_ASIGNACION_DETALLES:
            case TAREA_ALUMNOS:
            case TAREA_ALUMNO_DETALLES:
            case TAREA_TUTORES:
            case TAREA_TUTOR_NUEVO:
            case TAREA_TUTOR_DETALLES:
            case TAREA_DIRECTORES:
            case TAREA_DIRECTOR_NUEVO:
            case TAREA_DIRECTOR_DETALLES:
            case TAREA_LISTAS:
                $esta_permitido = array(
                    ROL_ADMIN['id']
                );
                $esta_permitido = in_array($id_rol, $esta_permitido);
                break;
            
            case TAREA_PORTAL_ALUMNOS:
            case TAREA_PORTAL_SOLICITUD:
            case TAREA_PORTAL_MATERIAS:
                $esta_permitido = array(
                    ROL_ALUMNO['id']
                );
                $esta_permitido = in_array($id_rol, $esta_permitido);
                break;
            
            default:

                break;
        }
        return $esta_permitido;
    }
}