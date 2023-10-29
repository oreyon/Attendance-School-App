<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// DEFAULT ROUTES
// $routes->get('/', 'Home::index'); DEFAULT ROUTES
// $routes->get('login', 'Auth::login');
$routes->get('/', 'Pages::index');

$routes->get('/presents/printpresentstudent/(:any)/(:any)', 'Presents::printpresentstudent/$1/$2');
$routes->get('/presents/printpresent/(:any)', 'Presents::printpresent/$1');
$routes->get('/presents/create/(:any)', 'Presents::createpresents/$1');
$routes->get('/presents/(:any)/(:any)', 'Presents::detailstudentpresents/$1/$2');
$routes->get('/presents/(:any)', 'Presents::detail/$1');

$routes->get('/teachers/(:any)', 'Teachers::detail/$1',['filter' => 'role:admin']);

// kelas
$routes->get('classes','Classes::index',['filter' => 'role:admin']);
$routes->get('/classes/create/', 'Classes::create',['filter' => 'role:admin']);
// 


$routes->get('upload', 'Upload::index',['filter' => 'role:admin']);          // Add this line.
$routes->post('upload/upload', 'Upload::upload',['filter' => 'role:admin']); // Add this line.

$routes->get('/students/create/','Students::create',['filter' => 'role:admin']);
$routes->get('/students/save', 'Students::save',['filter' => 'role:admin']);
$routes->delete('/students/(:num)', 'Students::delete/$1',['filter' => 'role:admin']);
$routes->get('/students/edit/(:segment)', 'Students::edit/$1',['filter' => 'role:admin']);
$routes->get('/students/(:any)', 'Students::detail/$1',['filter' => 'role:admin']);
$routes->get('/students', 'Students::index',['filter' => 'role:admin']);




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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
