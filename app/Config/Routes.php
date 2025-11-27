<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'HomeController::index');
$routes->get('/solutions', 'SolutionsController::index');
$routes->get('/services', 'ServicesController::index');
$routes->get('/company', 'CompanyController::index');
$routes->get('/about', 'AboutController::index');
