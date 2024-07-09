<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Customer Routes
$routes->get('customer_login', 'customer\Auth::login');
$routes->get('customer_register', 'customer\Auth::register');
$routes->post('customer_login', 'customer\Auth::login_post');
$routes->post('customer_register', 'customer\Auth::register_post');
