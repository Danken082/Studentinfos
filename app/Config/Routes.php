<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/studs','StudentController::student');
$routes->post('/save','StudentController::save');
$routes->get('/edit/(:any)','StudentController::edit/$1');
$routes->get('/delete/(:any)','StudentController::delete/$1');