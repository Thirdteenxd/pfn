<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Inicio::index');
$routes->get('/index', 'Inicio::index');
$routes->get('/sala', 'Administracion::index');

$routes->get('/mascotas', 'Mascotas::index');
$routes->get('/mascotas/crear', 'Mascotas::crear');
$routes->post('mascotas/registrodb', 'Mascotas::registrobd');
$routes->post('mascotas/ediciondb', 'Mascotas::ediciondb');
$routes->get('/mascotas/editar', 'Mascotas::editar');
$routes->get('/mascotas/ver', 'Mascotas::ver');

$routes->get('/citas', 'Citas::index');
$routes->get('/citas/lista', 'Citas::lista');
$routes->get('/citas/programar', 'Citas::programar');
$routes->post('citas/registrodb', 'Citas::registrodb');
$routes->post('citas/ediciondb', 'Citas::ediciondb');
$routes->get('/citas/editar', 'Citas::editar');

$routes->get('/historial', 'HistorialesMedicos::index');
$routes->get('/historial/lista', 'HistorialesMedicos::lista');
$routes->get('/historial/crear', 'HistorialesMedicos::crear');
$routes->get('/historial/editar', 'HistorialesMedicos::ver');


