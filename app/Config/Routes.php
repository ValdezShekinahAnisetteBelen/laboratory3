<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/shop', 'Home::shop');
$routes->get('/welcome_message', 'Home::index');
$routes->get('/admins', 'AdminController::admin');
$routes->get('/shop1', 'AdminController::shop1');
$routes->get('/index', 'AdminController::index');
$routes->get('/data_table', 'AdminController::data_table');

