<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Home & Main Pages
$routes->get('/', 'HomeController::index');
$routes->get('/home', 'HomeController::index');

// Solutions
$routes->get('/solutions', 'SolutionsController::index');
$routes->get('/solutions/ai', 'SolutionsController::ai');
$routes->get('/solutions/data', 'SolutionsController::data');
$routes->get('/solutions/cloud', 'SolutionsController::cloud');

// Services Main Page
$routes->get('/services', 'ServicesController::index');

// Service Details dengan slug/dynamic routes
$routes->get('/services/consulting', 'ServicesController::consulting');
$routes->get('/services/use-case-development', 'ServicesController::useCaseDevelopment');
$routes->get('/services/maintenance-support', 'ServicesController::maintenanceSupport');
$routes->get('/services/managed-services', 'ServicesController::managedServices');
$routes->get('/services/training', 'ServicesController::training');

// Company
$routes->get('/company', 'CompanyController::index');
$routes->get('/about', 'AboutController::index');
$routes->get('/company/team', 'CompanyController::team');
$routes->get('/company/careers', 'CompanyController::careers');

// Resources
$routes->get('/resources', 'ResourcesController::index');
$routes->get('/resources/blog', 'ResourcesController::blog');
$routes->get('/resources/case-studies', 'ResourcesController::caseStudies');
$routes->get('/resources/whitepapers', 'ResourcesController::whitepapers');

// Contact
$routes->get('/contact', 'ContactController::index');
$routes->post('/contact/submit', 'ContactController::submit');

// Search
$routes->get('/search', 'SearchController::index');

// Fallback untuk 404
$routes->set404Override(function () {
    return view('errors/404');
});

// CLI routes
if (is_cli()) {
    $routes->setDefaultNamespace('App\Controllers');
    $routes->setDefaultController('HomeController');
    $routes->setDefaultMethod('index');
}
