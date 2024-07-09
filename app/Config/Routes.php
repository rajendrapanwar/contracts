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

//Contractor Routes
$routes->get('contractor_login', 'contractor\Auth::login');
$routes->get('contractor_register', 'contractor\Auth::register');
$routes->post('contractor_login', 'contractor\Auth::login_post');
$routes->post('contractor_register', 'contractor\Auth::register_post');