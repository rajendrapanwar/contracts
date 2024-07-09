<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about', 'Home::about');
$routes->get('contact', 'Home::contact');

//Customer Routes
$routes->get('customer_login', 'customer\Auth::login');
$routes->get('customer_register', 'customer\Auth::register');
$routes->post('customer_login', 'customer\Auth::login_post');
$routes->post('customer_register', 'customer\Auth::register_post');
$routes->get('customer-dashboard', 'customer\Main::dashboard');

//Contractor Routes
$routes->get('contractor_login', 'contractor\Auth::login');
$routes->get('contractor_register', 'contractor\Auth::register');
$routes->post('contractor_login', 'contractor\Auth::login_post');
$routes->post('contractor_register', 'contractor\Auth::register_post');
$routes->get('contractor-dashboard', 'contractor\Main::dashboard');