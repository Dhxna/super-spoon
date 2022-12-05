<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->get('/', 'Home::index');
$routes->get('/sidebar', 'Page::sidebar');
$routes->get('/tables', 'Page::tables');
$routes->get('/coba', 'Page::coba');
$routes->get('/charts', 'Page::charts');
$routes->get('/welcome_message', 'Page::welcome_message');
$routes->get('/chartss', 'Page::chartss');
$routes->get('/batulicin', 'Page::batulicin');
$routes->get('/jakarta', 'Page::jakarta');
$routes->get('/cirebon', 'Page::cirebon');
$routes->get('/samarinda', 'Page::samarinda');
$routes->get('/bengkulu', 'Page::bengkulu');
$routes->get('/tarakan', 'Page::tarakan');
$routes->get('/cilegon', 'Page::cilegon');
$routes->get('/balikpapan', 'Page::balikpapan');
$routes->get('/timika', 'Page::timika');
$routes->get('/chartlagi', 'Page::chartlagi');
$routes->get('/hai', 'Page::hai');
$routes->get('/chartlagii', 'Page::chartlagii');
$routes->get('/chartlagii2', 'Page::chartlagii2');
$routes->get('/chartlagi3', 'Page::chartlagi3');
$routes->get('/assetsdetail', 'Page::assetsdetail');


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
