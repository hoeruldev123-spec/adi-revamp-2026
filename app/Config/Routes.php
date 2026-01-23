<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Home & Main Pages
$routes->get('/', 'HomeController::index');
$routes->get('/home', 'HomeController::index');
$routes->get('/principal', 'HomeController::principal_card'); // halaman khusus principal

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
    $routes->get('about-us', 'CompanyController::about');
    $routes->get('our-partners', 'CompanyController::ourPartners');
    $routes->get('our-clients', 'CompanyController::ourClients');
    $routes->get('our-competencies', 'CompanyController::ourCompetencies');
    $routes->get('team', 'CompanyController::team');
});
$routes->get('/company/contact', 'ContactController::index');

// Resources Routes
$routes->get('resources', 'ResourcesController::index');
// $routes->get('resources/articles', 'ResourcesController::articles');
// $routes->get('resources/events', 'ResourcesController::events');

// Articles Routes
$routes->get('resources/articles', 'Articles::index');
$routes->get('resources/articles/page/(:num)', 'Articles::index/$1');
$routes->get('resources/articles/page/1', function () {
    return redirect()->to('resources/articles', 301);
});


// Contact
$routes->get('/contact', 'Contact::index', ['as' => 'contact']);
$routes->get('/contact-us', 'Contact::index'); // Alternatif
$routes->post('/contact/submit', 'Contact::submit');

// Search
$routes->get('/search', 'SearchController::index');
$routes->get('/search/(:any)', 'SearchController::results/$1');
$routes->get('/search/results', 'SearchController::results');

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
