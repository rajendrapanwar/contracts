<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about', 'Home::about');
$routes->get('contact', 'Home::contact');
$routes->get('logout', 'Auth::logout');
$routes->get('forgot-password', 'Auth::forgotPassword');
$routes->post('forgot-password-post', 'Auth::forgotPasswordPost');
$routes->post('subscribe', 'Home::subscribe');
$routes->get('search-projects', 'Home::searchProjects');

//Customer Routes
$routes->get('customer_login', 'customer\Auth::login');
$routes->get('customer_register', 'customer\Auth::register');
$routes->post('customer_login', 'customer\Auth::login_post');
$routes->post('update-profile', 'customer\Auth::updateProfile');
$routes->post('update-password', 'customer\Auth::changePassword');
$routes->post('customer_register', 'customer\Auth::register_post');
$routes->get('customer-dashboard', 'customer\Main::dashboard');
$routes->get('customer-profile', 'customer\Main::profile');
$routes->get('customer-chat', 'customer\Main::chat');
$routes->get('add-project', 'customer\Projects::add_project');

//Contractor Routes
$routes->get('contractor_login', 'contractor\Auth::login');
$routes->get('contractor_register', 'contractor\Auth::register');
$routes->post('contractor_login', 'contractor\Auth::login_post');
$routes->post('contractor_register', 'contractor\Auth::register_post');
$routes->get('contractor-dashboard', 'contractor\Main::dashboard');