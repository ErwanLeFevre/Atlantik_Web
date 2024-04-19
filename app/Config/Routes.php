<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('atlantikaccueil', 'atlantik::accueil');

$routes->match(['get', 'post'], 'atlantikinscription', 'atlantik::inscription');