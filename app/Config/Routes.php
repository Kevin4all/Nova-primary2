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
$routes->get('/login_docente', 'Portal/Login_docente::index', ['as' => 'login_docente']);
$routes->post('/logear_administrador', 'Portal/Login_docente::comprobar_alumno', ['as' => 'logear_administrador']);
$routes->get('/cerrar_sesion_alumno', 'Portal/Cerrar_sesion_alumno::index', ['as' => 'cerrar_sesion_alumno']);

//General solicitud
$routes->get('/nueva_solicitud', 'Portal/Nueva_solicitud::index', ['as' => 'Nueva_solicitud']);
$routes->post('/insertar_solicitud', 'Portal/Nueva_solicitud::insertar_solicitud', ['as' => 'insertar_solicitud']);



$routes->get('/inicio_alumno', 'Portal/Inicio_alumno::index', ['as' => 'inicio_alumno']);

$routes->get('/dashboard', 'Panel/dashboard::index', ['as' => 'dashboard']);
$routes->get('/periodos', 'Panel/Periodos::index', ['as' => 'periodos']);
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
