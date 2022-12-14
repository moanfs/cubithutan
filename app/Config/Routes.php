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

// --------------------------------------------------------------------
// Route User
// --------------------------------------------------------------------
$routes->post('auth', 'Auth::attemptLogin');
$routes->get('login', 'Auth::login');
$routes->get('logout', 'Auth::logout');
$routes->get('adminlogout', 'Auth::adminlogout');
$routes->get('register', 'Auth::register');
$routes->post('register', 'Auth::attemptregister');
$routes->get('lupa-password', 'Auth::lupaPassword');

$routes->group('', ['namespace' => 'App\Controllers\User'], function ($routes) {
    $routes->get('/', 'Dashboard::index');

    $routes->group('konseling', ['namespace' => 'App\Controllers\User'], function ($routes) {
        $routes->get('online', 'Konseling::online');
        $routes->get('offline', 'Konseling::offline');
    });

    $routes->get('curhat', 'Curhat::index');

    $routes->get('podcast', 'Podcast::index');

    $routes->get('materi', 'Materi::index');

    $routes->get('tentang-kami', 'About::index');

    $routes->get('kontak', 'Contact::index');

    $routes->get('profile', 'Profile::index');
    $routes->post('profile/update/(:num)', 'Profile::update/$1');
    $routes->post('profile/ganti-foto/(:num)', 'Profile::gantifoto/$1');
    $routes->get('ganti-email', 'Profile::email');
    $routes->post('ganti-email', 'Profile::gantiemail');
    $routes->get('ganti-password', 'Profile::password');
    $routes->post('ganti-password/(:num)', 'Profile::gantipassword/$1');

    $routes->get('profile/konselor', 'ProfileKonsoler::index');
    $routes->post('profile/konselor/update/(:num)', 'ProfileKonsoler::update/$1');
    $routes->post('profile/konsoler/ganti-foto/(:num)', 'ProfileKonsoler::gantifoto/$1');

    $routes->get('consoler', 'Consoler::index');
});

// --------------------------------------------------------------------
// Route Admin
// --------------------------------------------------------------------

$routes->group('admin', ['namespace' => 'App\Controllers\Admin'], function ($routes) {
    $routes->get('/', 'Dashboard::index');

    $routes->get('podcast', 'Podcast::index');
    $routes->post('podcast/create', 'Podcast::save');
    $routes->delete('podcast/delete/(:num)', 'Podcast::delete/$1');
    $routes->get('podcast/edit/(:num)/(:segment)', 'Podcast::setUpdate/$1/$1');
    $routes->post('podcast/update/(:num)/(:segment)', 'Podcast::update/$1/$1');

    $routes->post('episode/create', 'Podcast::setEpisode');

    $routes->get('materi', 'Materi::index');
    $routes->post('materi/create', 'Materi::save');
    $routes->delete('materi/delete/(:num)', 'Materi::delete/$1');
    $routes->get('materi/edit/(:num)/(:segment)', 'Materi::setUpdate/$1/$1');

    $routes->get('profile/', 'Profile::index');
    $routes->post('profile/update/(:num)', 'Profile::update/$1');

    $routes->get('pengguna', 'Pengguna::index');
    $routes->get('pengguna/edit/(:num)/(:segment)', 'Pengguna::edit/$1/$1');
    $routes->get('pengguna/update/(:num)/(:segment)', 'Pengguna::update/$1/$1');

    $routes->get('konselor', 'Konselor::index');
    $routes->get('konselor/edit/(:num)/(:segment)', 'Konselor::edit/$1/$1');
    $routes->get('konselor/update/(:num)/(:segment)', 'Konselor::update/$1/$1');

    $routes->get('curhat', 'Curhat::index');
    $routes->get('konseling', 'Konseling::index');

    $routes->get('ganti-email', 'Profile::email');
    $routes->post('ganti-email', 'Profile::gantiemail');
    $routes->get('ganti-password', 'Profile::password');
    $routes->post('ganti-password', 'Profile::gantipassword');
});

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
