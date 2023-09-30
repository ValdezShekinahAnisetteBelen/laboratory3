<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/shop', 'Home::shop');
$routes->get('/anisette', 'Home::index');
$routes->get('/admins', 'AdminController::admin');
$routes->get('/shop1', 'AdminController::shop1');
$routes->get('/index', 'AdminController::index');
$routes->get('/data_table', 'AdminController::data_table');
$routes->post('/save', 'AdminController::save');
$routes->get('/delete/(:any)', 'AdminController::delete/$1');
$routes->post('/editProduct', 'AdminController::editProduct');
$routes->post('getProductInfo', 'AdminController::getProductInfo');
$routes->get('/login', 'UserController::login');
$routes->get('/register', 'SignupController::register'); // GET request for registration page
$routes->post('/register', 'SignupController::processRegistration'); // POST request to process registration data


