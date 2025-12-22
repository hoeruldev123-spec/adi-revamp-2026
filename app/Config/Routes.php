<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Home & Main Pages
$routes->get('/', 'HomeController::index');
$routes->get('/home', 'HomeController::index');

// Solutions dengan submenu sesuai dropdown
$routes->group('solutions', function ($routes) {
    $routes->get('/', 'SolutionsController::index');

    $routes->get('fmcg', 'SolutionsController::fmcg');
    $routes->get('telecom', 'SolutionsController::telecom');
    $routes->get('government', 'SolutionsController::government');
    $routes->get('financial', 'SolutionsController::financial');
});

// Services - sesuai navbar (tanpa dropdown)
$routes->group('services', function ($routes) {
    $routes->get('/', 'ServicesController::index');

    // Sub halaman Services
    $routes->get('consulting', 'ServicesController::consulting');
    $routes->get('use-case-development', 'ServicesController::useCaseDevelopment');
    $routes->get('maintenance-support', 'ServicesController::maintenanceSupport');
    $routes->get('managed-services', 'ServicesController::managedServices');
    $routes->get('training', 'ServicesController::training');
});

// Company dengan submenu sesuai dropdown
$routes->group('company', function ($routes) {
    $routes->get('about', 'CompanyController::about');
    $routes->get('our_partners', 'CompanyController::ourPartners');
    $routes->get('our_clients', 'CompanyController::ourClients');
    $routes->get('our_competencies', 'CompanyController::ourCompetencies');
    $routes->get('team', 'CompanyController::team');
});
$routes->get('/company/contact', 'ContactController::index');

// Resources Routes
$routes->get('resources', 'ResourcesController::index');
$routes->get('resources/articles', 'ResourcesController::articles');
$routes->get('resources/events', 'ResourcesController::events');

// Contact
$routes->get('/contact', 'ContactController::index');
$routes->get('/contact-us', 'ContactController::index'); // Alternatif
$routes->post('/contact/submit', 'ContactController::submit');

// Search
$routes->get('/search', 'SearchController::index');
$routes->get('/search/(:any)', 'SearchController::results/$1');

// API Routes (jika diperlukan)
$routes->group('api', ['namespace' => 'App\Controllers\Api'], function ($routes) {
    $routes->get('search/suggest', 'SearchController::suggest');
    $routes->post('contact/form', 'ContactController::submitAjax');
});

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
