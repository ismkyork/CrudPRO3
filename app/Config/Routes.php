<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
//$routes->get('view_campeones/inicio', 'CampeonesController::index');
$routes->get('/', 'CampeonesController::index');
$routes->get('/crear', 'CampeonesController::crear');
$routes->post('guardar', 'CampeonesController::guardar');
$routes->get('/editar/(:num)', 'CampeonesController::editar/$1');
$routes->get('/borrar/(:num)', 'CampeonesController::borrar/$1');
$routes->post('actualizar', 'CampeonesController::actualizar');