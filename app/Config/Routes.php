<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/nasabah', 'Nasabah::index');
$routes->post('/nasabah/add', 'Nasabah::add');
$routes->post('/nasabah/antrian', 'Nasabah::antrian');
$routes->get('/petugas', 'Petugas::index');
$routes->post('/petugas/login', 'Petugas::login');
$routes->post('/petugas/next-antrian', 'Petugas::nextAntrian');
$routes->post('/petugas/logout', 'Petugas::logout');
