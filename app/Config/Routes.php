<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Home & Main Pages
$routes->match(['get', 'head'], '/', 'HomeController::index');
$routes->match(['get', 'head'], '/home', 'HomeController::index');
$routes->match(['get', 'head'], '/principal', 'HomeController::principal_card'); // halaman khusus principal

// Solutions dengan submenu sesuai dropdown
$routes->group('solutions', function ($routes) {
    $routes->match(['get', 'head'], '/', 'SolutionsController::index');

    $routes->match(['get', 'head'], 'fmcg', 'SolutionsController::fmcg');
    $routes->match(['get', 'head'], 'telecom', 'SolutionsController::telecom');
    $routes->match(['get', 'head'], 'government', 'SolutionsController::government');
    $routes->match(['get', 'head'], 'financial', 'SolutionsController::financial');
});

// Services - sesuai navbar (tanpa dropdown)
$routes->group('services', function ($routes) {
    $routes->match(['get', 'head'], '/', 'ServicesController::index');

    // Sub halaman Services
    $routes->match(['get', 'head'], 'consulting', 'ServicesController::consulting');
    $routes->match(['get', 'head'], 'use-case-development', 'ServicesController::useCaseDevelopment');
    $routes->match(['get', 'head'], 'maintenance-support', 'ServicesController::maintenanceSupport');
    $routes->match(['get', 'head'], 'managed-services', 'ServicesController::managedServices');
    $routes->match(['get', 'head'], 'training', 'ServicesController::training');
});

// Company dengan submenu sesuai dropdown
$routes->group('company', function ($routes) {
    $routes->match(['get', 'head'], 'about-us', 'CompanyController::about');
    $routes->match(['get', 'head'], 'our-partners', 'CompanyController::ourPartners');
    $routes->match(['get', 'head'], 'our-clients', 'CompanyController::ourClients');
    $routes->match(['get', 'head'], 'our-competencies', 'CompanyController::ourCompetencies');
    $routes->match(['get', 'head'], 'team', 'CompanyController::team');
});
$routes->match(['get', 'head'], '/company/contact', 'ContactController::index');

// Resources Routes
$routes->match(['get', 'head'], 'resources', 'ResourcesController::index');
// $routes->match(['get','head'], 'resources/articles', 'ResourcesController::articles');
// $routes->match(['get','head'], 'resources/events', 'ResourcesController::events');

// Articles Routes
$routes->match(['get', 'head'], 'resources/articles', 'Articles::index');
$routes->match(['get', 'head'], 'resources/articles/page/(:num)', 'Articles::index/$1');

$routes->match(['get', 'head'], 'resources/articles/search', 'Articles::search');
$routes->match(['get', 'head'], 'resources/articles/category/(:segment)', 'Articles::category/$1');
$routes->match(['get', 'head'], 'resources/articles/tag/(:segment)', 'Articles::tag/$1');

$routes->match(['get', 'head'], 'resources/articles/page/1', function () {
    return redirect()->to('resources/articles', 301);
});

// Contact
$routes->match(['get', 'head'], '/contact', 'Contact::index', ['as' => 'contact']);
$routes->match(['get', 'head'], '/contact-us', 'Contact::index'); // Alternatif
$routes->post('/contact/submit', 'Contact::submit');

// Search
$routes->match(['get', 'head'], '/search', 'SearchController::index');
$routes->match(['get', 'head'], '/search/(:any)', 'SearchController::results/$1');
$routes->match(['get', 'head'], '/search/results', 'SearchController::results');

// API Routes (jika diperlukan)
$routes->group('api', ['namespace' => 'App\Controllers\Api'], function ($routes) {
    $routes->match(['get', 'head'], 'search/suggest', 'SearchController::suggest');
    $routes->post('contact/form', 'ContactController::submitAjax');
});

// Legacy WP root-slugs resolver (taruh paling bawah)
$routes->get('(:segment)', 'LegacyRedirectController::index/$1');
$routes->get('(:any)', 'LegacyRedirectController::index/$1');

// Fallback untuk 404
// $routes->set404Override(function () {
//     return view('errors/404');
// });
$routes->set404Override(function () {
    return service('response')
        ->setStatusCode(404)
        ->setBody(view('errors/404'));
});


// CLI routes
if (is_cli()) {
    $routes->setDefaultNamespace('App\Controllers');
    $routes->setDefaultController('HomeController');
    $routes->setDefaultMethod('index');
}
