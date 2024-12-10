<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->setAutoRoute(true);
$routes->get('/', 'Antrian::index');
$routes->match(['get', 'post'], 'antrian/tambah', 'Antrian::tambah');
$routes->match(['get', 'post'], 'antrian/edit/(:num)', 'Antrian::edit/$1');
$routes->get('antrian/hapus/(:num)', 'Antrian::hapus/$1');

