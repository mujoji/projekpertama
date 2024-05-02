<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//coba pages
$routes->get('/', 'Pages::showme');
//$routes->get('(:any)', 'Pages::showme/$1');

//$routes->get('/', 'Home::index');
$routes->setAutoRoute(true);

//mncari tahu logika product
$routes->resource('product');

//tambahan, penggunaan $routes dengan function
$routes->get('/coba', 'Coba::index');



