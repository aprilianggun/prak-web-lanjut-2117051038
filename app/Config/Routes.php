<?php

use App\Controllers\KelasController;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;
use App\Controllers\UserController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/profile/(:any)/(:any)/(:any)', 'UserController::profile/$1/$2/$3');

# create
$routes->get('/user/create', 'UserController::create');
$routes->post('/user/profile', 'UserController::profile');

$routes->get('/user', [UserController::class, 'index']);

$routes->get('/user/(:any)/edit', [UserController::class, 'edit']);
$routes->put('/user/(:any)', [UserController::class, 'update']);

$routes->delete('/user/(:any)', 'UserController::destroy/$1');
$routes->delete('kelas/(:any)', 'KelasController::destroy/$1');

$routes->get('/user/(:any)', [UserController::class, 'show']);

$routes->get('/kelas/create', [KelasController::class, 'create']);
$routes->post('/kelas/store', [KelasController::class, 'store']);
$routes->get('/kelas', [KelasController::class, 'index']);
$routes->get('kelas/(:any)/edit', [KelasController::class, 'edit']);
$routes->put('kelas/(:any)', 'KelasController::update/$1');

$routes->get('kelas/(:any)', [KelasController::class, 'show']);

