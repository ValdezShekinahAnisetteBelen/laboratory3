<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/shop', 'Home::shop');
$routes->get('/anisette', 'Home::index');
$routes->get('/admins', 'AdminController::admin', ['filter' => 'AdminFilter']);
$routes->get('/shop1', 'AdminController::shop1');
$routes->get('/index', 'AdminController::index');
$routes->get('/data_table', 'AdminController::data_table', ['filter' => 'AuthGuard']);
$routes->post('/save', 'AdminController::save', ['filter' => 'AdminFilter']);
$routes->get('/delete/(:any)', 'AdminController::delete/$1', ['filter' => 'AdminFilter']);
$routes->post('/editProduct', 'AdminController::editProduct', ['filter' => 'AdminFilter']);
$routes->post('/getProductInfo', 'AdminController::getProductInfo');
$routes->get('/login', 'UserController::login');
$routes->get('/logout', 'UserController::logout');
$routes->get('/register', 'UserController::register'); // GET request for registration page
$routes->post('/registration', 'UserController::registration'); // POST request to process registration data
$routes->post('/loginAuth', 'UserController::loginAuth');


