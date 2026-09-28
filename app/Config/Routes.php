<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'TaskController::welcome');
$routes->get('/tasks', 'TaskController::index');
$routes->get('/profile', 'TaskController::profile');
$routes->get('/about', 'TaskController::about');
?>	