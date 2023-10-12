<?php

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
$routes->get('/user/(:any)', [UserController::class, 'show']);
