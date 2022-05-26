<?php

/*
 | --------------------------------------------------------------------
 | App Namespace
 | --------------------------------------------------------------------
 |
 | This defines the default Namespace that is used throughout
 | CodeIgniter to refer to the Application directory. Change
 | this constant to change the namespace that all application
 | classes should use.
 |
 | NOTE: changing this will require manually modifying the
 | existing namespaces of App\* namespaced-classes.
 */
defined('APP_NAMESPACE') || define('APP_NAMESPACE', 'App');

/*
 | --------------------------------------------------------------------------
 | Composer Path
 | --------------------------------------------------------------------------
 |
 | The path that Composer's autoload file is expected to live. By default,
 | the vendor folder is in the Root directory, but you can customize that here.
 */
defined('COMPOSER_PATH') || define('COMPOSER_PATH', ROOTPATH . 'vendor/autoload.php');

/*
 |--------------------------------------------------------------------------
 | Timing Constants
 |--------------------------------------------------------------------------
 |
 | Provide simple ways to work with the myriad of PHP functions that
 | require information to be in seconds.
 */
defined('SECOND') || define('SECOND', 1);
defined('MINUTE') || define('MINUTE', 60);
defined('HOUR')   || define('HOUR', 3600);
defined('DAY')    || define('DAY', 86400);
defined('WEEK')   || define('WEEK', 604800);
defined('MONTH')  || define('MONTH', 2592000);
defined('YEAR')   || define('YEAR', 31536000);
defined('DECADE') || define('DECADE', 315360000);


define("SEXO_MASCULINO", "M");

define("SEXO_FEMENINO", "F");

define("SEXOS", array('F' => 'Femenino', 'M' => 'Masculino'));

define("RECURSE", "0");
define("COMPLEMENTARIO", "1");

define("CURSO_NORMAL", "curso_normal");
define("BAJA_TEMPORAL", "baja_temporal");

define("MATUTINO", "matutino");
define("VESPERTINO", "vespertino");

// ROLES
define("ROL_ADMIN", array('rol_nombre' => 'Administrador', 'id' => '1'));
define("ROL_ALUMNO", array('rol_nombre' => 'Alumno', 'id' => '2'));

//******************************************************************************
//******************* TAREAS DEL PANEL DE ADMINISTRACIÓN ***********************
//******************************************************************************

//DASHBOARD
define("TAREA_DASHBOARD", "dashboard");
define("TAREA_MATERIA_NUEVA", "materia_nueva");
define("TAREA_MATERIA_DETALLES", "materia_detalles");

//PERIODOS
define("TAREA_PERIODOS", "periodos");
define("TAREA_PERIODO_NUEVO", "periodo_nuevo");
define("TAREA_PERIODO_DETALLES", "periodo_detalles");

//ASIGNACIONES
define("TAREA_ASIGNACIONES", "asignaciones");
define("TAREA_ASIGNACION_NUEVA", "asignacion_nueva");
define("TAREA_ASIGNACION_DETALLES", "asignacion_detalles");

//ALUMNOS
define("TAREA_ALUMNOS", "alumnos");
define("TAREA_ALUMNO_DETALLES", "alumnos");

//TUTORES
define("TAREA_TUTORES", "tutores");
define("TAREA_TUTOR_NUEVO", "tutor_nuevo");
define("TAREA_TUTOR_DETALLES", "tutor_detalles");

//DIRECTORES
define("TAREA_DIRECTORES", "directores");
define("TAREA_DIRECTOR_NUEVO", "director_nuevo");
define("TAREA_DIRECTOR_DETALLES", "director_detalles");

//LISTAS
define("TAREA_LISTAS", "listas");


//******************************************************************************
//******************* TAREAS DEL PORTAL PÚBLICO ********************************
//******************************************************************************

define("TAREA_PORTAL_ALUMNOS", "portal_alumnos");
define("TAREA_PORTAL_SOLICITUD", "portal_solicitud");
define("TAREA_PORTAL_MATERIAS", "portal_materias");
    
/*
 | --------------------------------------------------------------------------
 | Exit Status Codes
 | --------------------------------------------------------------------------
 |
 | Used to indicate the conditions under which the script is exit()ing.
 | While there is no universal standard for error codes, there are some
 | broad conventions.  Three such conventions are mentioned below, for
 | those who wish to make use of them.  The CodeIgniter defaults were
 | chosen for the least overlap with these conventions, while still
 | leaving room for others to be defined in future versions and user
 | applications.
 |
 | The three main conventions used for determining exit status codes
 | are as follows:
 |
 |    Standard C/C++ Library (stdlibc):
 |       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
 |       (This link also contains other GNU-specific conventions)
 |    BSD sysexits.h:
 |       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
 |    Bash scripting:
 |       http://tldp.org/LDP/abs/html/exitcodes.html
 |
 */
defined('EXIT_SUCCESS')        || define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          || define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         || define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   || define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  || define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') || define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     || define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       || define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      || define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      || define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code
