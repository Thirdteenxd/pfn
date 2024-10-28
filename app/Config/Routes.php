<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Inicio::index');
$routes->get('/index', 'Inicio::index');
$routes->get('/sala', 'Inicio::sala');

$routes->get('/mascotas', 'Mascotas::index');
$routes->get('/mascotas/lista', 'Mascotas::lista');
$routes->get('/mascotas/crear', 'Mascotas::crear');
$routes->get('/mascotas/editar', 'Mascotas::editar');
$routes->get('/mascotas/ver', 'Mascotas::ver');

$routes->get('/citas', 'Citas::index');
$routes->get('/citas/lista', 'Citas::lista');
$routes->get('/citas/programar', 'Citas::programar');
$routes->get('/citas/editar', 'Citas::editar');

$routes->get('/historial', 'HistorialesMedicos::index');
$routes->get('/historial/lista', 'HistorialesMedicos::lista');
$routes->get('/historial/crear', 'HistorialesMedicos::crear');
$routes->get('/historial/editar', 'HistorialesMedicos::ver');

$routes->get('/admin', 'Administracion::index');


$routes->get('/registro', 'Inicio::registro');
$routes->post('/registrodb', 'Inicio::registrobd');

