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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'RapmaFM::index');
$routes->get('/index', 'RapmaFM::index');
$routes->get('/rapmafm/structure', 'RapmaFM::structure');
$routes->get('/rapmafm/program', 'RapmaFM::program');
$routes->get('/rapmafm/podcast', 'RapmaFM::podcast');
$routes->get('/rapmafm/newsflash', 'RapmaFM::newsflash');
$routes->get('/rapmafm/events', 'RapmaFM::events');
$routes->get('/rapmafm/achievements', 'RapmaFM::achievements');
$routes->get('/rapmafm/contact', 'RapmaFM::contact');
$routes->get('/rapmafm/rapmafest8', 'RapmaFM::rapmafest8');

$routes->get('/user', 'User::index', ['filter' => 'role:admin,jurnalistik,produksi,user']);
$routes->get('/profile', 'User::profile', ['filter' => 'role:admin,jurnalistik,produksi,user']);
$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/index', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/edit/(:segment)', 'Admin::edit/$1', ['filter' => 'role:admin,jurnalistik,produksi,user']);
$routes->delete('/admin/(:num)', 'Admin::delete/$1', ['filter' => 'role:admin']);

$routes->get('/newsflash/newsflash', 'Newsflash::newsflash', ['filter' => 'role:admin,jurnalistik,user']);
$routes->get('/newsflash/addNewsflash', 'Newsflash::addNewsflash', ['filter' => 'role:admin,jurnalistik,user']);
$routes->get('/newsflash/editNewsflash/(:segment)', 'Newsflash::editNewsflash/$1', ['filter' => 'role:admin,jurnalistik,user']);
$routes->delete('/newsflash/(:num)', 'Newsflash::delete/$1', ['filter' => 'role:admin,jurnalistik']);

$routes->get('/podcast/podcast', 'Podcast::podcast', ['filter' => 'role:admin,produksi']);
$routes->get('/podcast/addPodcast', 'Podcast::addPodcast', ['filter' => 'role:admin,produksi']);
$routes->get('/podcast/editPodcast/(:segment)', 'Podcast::editPodcast/$1', ['filter' => 'role:admin,produksi']);
$routes->delete('/podcast/(:num)', 'Podcast::delete/$1', ['filter' => 'role:admin,produksi']);

$routes->get('/password/index', 'ChangePassword::index', ['filter' => 'role:admin,jurnalistik,produksi,user']);

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
