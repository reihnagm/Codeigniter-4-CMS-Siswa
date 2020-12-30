<?php 
namespace Config;

$routes = Services::routes();
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

$routes->setDefaultNamespace('App\Controllers\Home');
$routes->setDefaultController('HomeController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

$routes->get('/', 'HomeController::index', ['namespace' => 'App\Controllers\Home']);

$routes->group('admin', function ($routes) {
  $routes->get('/', 'DashboardController::index', ['namespace' => 'App\Controllers\Admin\Dashboard']);
  $routes->group('auth', function ($routes) {
    $routes->get('login', 'AuthController::loginView', ['namespace' => 'App\Controllers\Admin\Auth']);
    $routes->post('login', 'AuthController::loginPost', ['namespace' => 'App\Controllers\Admin\Auth']);
    $routes->get('logout', 'AuthController::logout', ['namespace' => 'App\Controllers\Admin\Auth']);
  });
  $routes->post('getDtSiswa/(:any)/(:any)/(:any)', 'DashboardController::getDtSiswa/$1/$2/$3', ['namespace' => 'App\Controllers\Admin\Dashboard']);
  $routes->post('getDtSiswaEmpty', 'DashboardController::getDtSiswaEmpty', ['namespace' => 'App\Controllers\Admin\Dashboard']);
});

if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
