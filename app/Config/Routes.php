<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::');
$routes->get('/tentang', 'Home::tentang');
$routes->get('/artikels', 'Artikels::index');
$routes->get('/artikels/(:segment)', 'Artikels::artikel/$1');
$routes->get('/shops', 'Shops::index');
$routes->post('/shop/save', 'Shops::save');
$routes->get('/shops/shop/(:num)', 'Shops::shop/$1');
$routes->get('/reviews', 'Review::index');
$routes->post('/review/save', 'Review::save');
$routes->get('/reviews/review', 'Review::review');



$routes->get('/admin', 'Admin::index');
$routes->post('/admin', 'Admin::login');
$routes->get('/admin/pengaturan', 'Admin::pengaturan');
$routes->get('/admin/table', 'Admin::table');
$routes->get('/admin/chart', 'Admin::chart');
$routes->get('/admin/form', 'Admin::form');
$routes->get('/admin/data/shop', 'Admin::tableShop');
$routes->get('/admin/data/detail/(:segment)', 'Admin::detail/$1');
$routes->get('/admin/review/table-review', 'Admin::tableReview');
$routes->get('/admin/artikel/form-artikel', 'Admin::artikel');
$routes->get('/admin/edit/(:segment)', 'Admin::edit/$1');
$routes->get('/admin/edit/review/(:segment)', 'Admin::editReview/$1');
$routes->post('/review/update/(:segment)', 'Admin::updateReview/$1');
$routes->post('/admin/update/(:segment)', 'Admin::update/$1');
$routes->get('/admin/artikel/table-artikel', 'Admin::tableArtikel');
$routes->post('/admin/save', 'Admin::save');
$routes->DELETE('/admin/delete/(:num)', 'Admin::delete/$1');
$routes->DELETE('/admin/deleteShop/(:num)', 'Admin::deleteShop/$1');
$routes->DELETE('/admin/deleteMobil/(:num)', 'Admin::deleteMobil/$1');
$routes->DELETE('/admin/deleteReview/(:num)', 'Admin::deleteReview/$1');
$routes->post('/mobil/create', 'admin::create');






