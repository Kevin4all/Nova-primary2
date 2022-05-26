<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Portal/Inicio::index');
// $routes->get('/inicio', 'Portal/Inicio::index', ['as' => 'inicio']);
$routes->get('/login_alumno', 'Portal/Login_alumno::index', ['as' => 'login_alumno']);
$routes->post('/logear_alumno', 'Portal/Login_alumno::comprobar_alumno', ['as' => 'logear_alumno']);

$routes->get('/registrar_alumno', 'Portal/Registrar_alumno::index', ['as' => 'registrar_alumno']);
$routes->post('/insertar_alumno', 'Portal/Registrar_alumno::insertar_alumno', ['as' => 'insertar_alumno']);

$routes->get('/cerrar_sesion_admin', 'Portal/Cerrar_sesion_admin::index', ['as' => 'cerrar_sesion_admin']);
$routes->get('/login_admin', 'Portal/Login_docente::index', ['as' => 'login_docente']);
$routes->post('/logear_administrador', 'Portal/Login_docente::comprobar_alumno', ['as' => 'logear_administrador']);
$routes->get('/cerrar_sesion_alumno', 'Portal/Cerrar_sesion_alumno::index', ['as' => 'cerrar_sesion_alumno']);

//General solicitud
$routes->get('/nueva_solicitud', 'Portal/Nueva_solicitud::index', ['as' => 'nueva_solicitud']);
$routes->post('/insertar_solicitud', 'Portal/Nueva_solicitud::insertar_solicitud', ['as' => 'insertar_solicitud']);



$routes->get('/inicio_alumno', 'Portal/Inicio_alumno::index', ['as' => 'inicio_alumno']);

$routes->get('/dashboard', 'Panel/Dashboard::index', ['as' => 'dashboard']);
$routes->get('/dashboard/deletear_materia/(:num)', 'Panel\Dashboard::eliminar_materia/$1', ['as' => 'deletear_materia']);
$routes->get('/dashboard/materia_nueva', 'Panel/Materia_nueva::index', ['as' => 'materia_nueva']);
$routes->post('/dashboard/insertar_materia', 'Panel/Materia_nueva::insertar_materia', ['as' => 'insertar_materia']);
$routes->get('/dashboard/detalles_materia/(:num)', 'Panel\Materia_detalles::index/$1', ['as' => 'detalles_materia']);
$routes->post('/dashboard/editar_materia', 'Panel/Materia_detalles::actualizar_materia', ['as' => 'editar_materia']);


$routes->get('/periodos', 'Panel/Periodos::index', ['as' => 'periodos']);
$routes->get('/periodos/deletear_periodo/(:num)', 'Panel\Periodos::eliminar_periodo/$1', ['as' => 'deletear_periodo']);
$routes->get('/periodos/periodo_nuevo', 'Panel/Periodo_nuevo::index', ['as' => 'periodo_nuevo']);
$routes->post('/periodos/insertar_periodo', 'Panel/Periodo_nuevo::insertar_periodo', ['as' => 'insertar_periodo']);
$routes->get('/periodos/detalles_periodo/(:num)', 'Panel\Periodo_detalles::index/$1', ['as' => 'detalles_periodo']);
$routes->post('/periodos/editar_periodo', 'Panel/Periodo_detalles::actualizar_periodo', ['as' => 'editar_periodo']);


$routes->get('/asignaciones', 'Panel/Asignaciones::index', ['as' => 'asignaciones']);
$routes->get('/asignaciones/deletear_asignacion/(:num)', 'Panel\Asignaciones::eliminar_asignacion/$1', ['as' => 'deletear_asignacion']);
$routes->get('/asignaciones/asignacion_nueva', 'Panel/Asignacion_nueva::index', ['as' => 'asignacion_nueva']);
$routes->post('/asignaciones/insertar_asignacion', 'Panel/Asignacion_nueva::insertar_asignacion', ['as' => 'insertar_asignacion']);
$routes->get('/asignaciones/detalles_asignacion/(:num)', 'Panel\Asignacion_detalles::index/$1', ['as' => 'detalles_asignacion']);
$routes->post('/asignaciones/editar_asignacion', 'Panel/Asignacion_detalles::actualizar_asignacion', ['as' => 'editar_asignacion']);


$routes->get('/tutores', 'Panel/Tutores::index', ['as' => 'tutores']);
$routes->get('/tutores/deletear_tutor/(:num)', 'Panel\Tutores::eliminar_tutor/$1', ['as' => 'deletear_tutor']);
$routes->get('/tutores/tutor_nuevo', 'Panel/Tutor_nuevo::index', ['as' => 'tutor_nuevo']);
$routes->post('/tutores/insertar_tutor', 'Panel/Tutor_nuevo::insertar_tutor', ['as' => 'insertar_tutor']);
$routes->get('/tutores/detalles_tutor/(:num)', 'Panel\Tutor_detalles::index/$1', ['as' => 'detalles_tutor']);
$routes->post('/tutores/editar_tutor', 'Panel/Tutor_detalles::actualizar_tutor', ['as' => 'editar_tutor']);

$routes->get('/directores', 'Panel/Directores::index', ['as' => 'directores']);
$routes->get('/directores/deletear_director/(:num)', 'Panel\Directores::eliminar_director/$1', ['as' => 'deletear_director']);
$routes->get('/directores/director_nuevo', 'Panel/Director_nuevo::index', ['as' => 'director_nuevo']);
$routes->post('/directores/insertar_director', 'Panel/Director_nuevo::insertar_director', ['as' => 'insertar_director']);
$routes->get('/directores/detalles_director/(:num)', 'Panel\Director_detalles::index/$1', ['as' => 'detalles_director']);
$routes->post('/directores/editar_director', 'Panel/Director_detalles::actualizar_director', ['as' => 'editar_director']);

$routes->get('/alumnos', 'Panel/Alumnos::index', ['as' => 'alumnos']);
$routes->get('/listas', 'Panel/Listas::index', ['as' => 'listas']);
$routes->get('/plantillapdf', 'Panel/Pruebapdf::index', ['as' => 'plantillapdf']);
$routes->get('/pdf_demo', 'Panel/Listas::demoPDF', ['as' => 'pdf_demo']);
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
