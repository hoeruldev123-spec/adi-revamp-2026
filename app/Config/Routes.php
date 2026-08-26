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
    // $routes->match(['get', 'head'], '/', 'SolutionsController::index');
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
// Halaman statis tanpa group company
$routes->match(['get', 'head'], 'about-us', 'CompanyController::about');

$routes->match(['get', 'head'], 'our-partners', 'CompanyController::ourPartners');
$routes->match(['get', 'head'], 'our-partners/dataiku', 'CompanyController::partnerDataiku');

$routes->match(['get', 'head'], 'our-clients', 'CompanyController::ourClients');
$routes->match(['get', 'head'], 'our-competencies', 'CompanyController::ourCompetencies');
$routes->match(['get', 'head'], 'team', 'CompanyController::team');

// $routes->group('company', function ($routes) {
//     $routes->match(['get', 'head'], 'about-us', 'CompanyController::about');
//     $routes->match(['get', 'head'], 'our-partners', 'CompanyController::ourPartners');
//     $routes->match(['get', 'head'], 'our-clients', 'CompanyController::ourClients');
//     $routes->match(['get', 'head'], 'our-competencies', 'CompanyController::ourCompetencies');
//     $routes->match(['get', 'head'], 'team', 'CompanyController::team');
// });

$routes->match(['get', 'head'], '/company/contact', 'ContactController::index');

// Resources Routes
// $routes->match(['get', 'head'], 'resources', 'ResourcesController::index');
// $routes->match(['get','head'], 'resources/articles', 'ResourcesController::articles');
$routes->match(['get', 'head'], 'events', 'EventsController::index');

// Articles Routes
$routes->match(['get', 'head'], 'resources/articles', 'Articles::index');
$routes->match(['get', 'head'], 'resources/articles/search', 'Articles::search');

// Category routes (with optional pagination) - MUST be before /page routes
$routes->match(['get', 'head'], 'resources/articles/category/(:num)', 'Articles::category/$1');
$routes->match(['get', 'head'], 'resources/articles/category/(:num)/page/(:num)', 'Articles::category/$1/$2');

// Tag routes (with optional pagination) - MUST be before /page routes
$routes->match(['get', 'head'], 'resources/articles/tag/(:num)', 'Articles::tag/$1');
$routes->match(['get', 'head'], 'resources/articles/tag/(:num)/page/(:num)', 'Articles::tag/$1/$2');

// Page routes (must be after category/tag routes)
$routes->match(['get', 'head'], 'resources/articles/page', 'Articles::index');
$routes->match(['get', 'head'], 'resources/articles/page/(:num)', 'Articles::index/$1');
$routes->match(['get', 'head'], 'resources/articles/page/1', function () {
    return redirect()->to('resources/articles', 301);
});

// Events
$routes->get('/events/aws-end-to-end-data-solution', 'EventsController::awsEndToEndDataSolution');
$routes->get('/events/digital-radiology-transformation', 'EventsController::digitalRadiologyTransformation');

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

// Fallback untuk 404
$routes->set404Override(function () {
    return view('errors/404');
});

// Di routes.php, setelah semua route

// Tangkap semua URL /articles/ yang tidak ada di WordPress
$routes->get('articles/(:any)', function ($slug) {
    // Redirect ke halaman utama articles atau 404
    return redirect()->to('/articles');
});

// Atau biarkan WordPress yang handle 404-nya sendiri

// --------------------------------------------------------------------
// ADMIN FOUNDATION ROUTES
// --------------------------------------------------------------------
$routes->get('/admin/login', 'Admin\AuthController::login');
$routes->post('/admin/login', 'Admin\AuthController::authenticate');
$routes->get('/admin/logout', 'Admin\AuthController::logout');

$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    // Dashboard
    $routes->get('/', 'Admin\Dashboard::index', ['filter' => 'permission:dashboard.view']);
    $routes->get('dashboard', 'Admin\Dashboard::index', ['filter' => 'permission:dashboard.view']);
    $routes->get('settings', static function () {
        return view('admin/settings/index');
    });

    // Users
    $routes->get('users', 'Admin\Users::index', ['filter' => 'permission:users.view']);
    $routes->get('users/create', 'Admin\Users::create', ['filter' => 'permission:users.create']);
    $routes->post('users/store', 'Admin\Users::store', ['filter' => 'permission:users.create']);
    $routes->get('users/edit/(:num)', 'Admin\Users::edit/$1', ['filter' => 'permission:users.edit']);
    $routes->post('users/update/(:num)', 'Admin\Users::update/$1', ['filter' => 'permission:users.edit']);
    $routes->get('users/delete/(:num)', 'Admin\Users::delete/$1', ['filter' => 'permission:users.delete']);
    $routes->get('users/toggle/(:num)', 'Admin\Users::toggleStatus/$1', ['filter' => 'permission:users.edit']);
    $routes->post('users/reset/(:num)', 'Admin\Users::resetPassword/$1', ['filter' => 'permission:users.edit']);

    // Roles
    $routes->get('roles', 'Admin\Roles::index', ['filter' => 'permission:roles.view']);
    $routes->get('roles/create', 'Admin\Roles::create', ['filter' => 'permission:roles.create']);
    $routes->post('roles/store', 'Admin\Roles::store', ['filter' => 'permission:roles.create']);
    $routes->get('roles/edit/(:num)', 'Admin\Roles::edit/$1', ['filter' => 'permission:roles.edit']);
    $routes->post('roles/update/(:num)', 'Admin\Roles::update/$1', ['filter' => 'permission:roles.edit']);
    $routes->get('roles/delete/(:num)', 'Admin\Roles::delete/$1', ['filter' => 'permission:roles.delete']);
    $routes->get('roles/permissions/(:num)', 'Admin\Roles::permissions/$1', ['filter' => 'permission:roles.edit']);
    $routes->post('roles/permissions/save/(:num)', 'Admin\Roles::savePermissions/$1', ['filter' => 'permission:roles.edit']);

    // Permissions
    $routes->get('permissions', 'Admin\Permissions::index', ['filter' => 'permission:permissions.view']);
});

// CLI routes
if (is_cli()) {
    $routes->setDefaultNamespace('App\Controllers');
    $routes->setDefaultController('HomeController');
    $routes->setDefaultMethod('index');
}
