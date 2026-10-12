<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Pages');
$routes->setDefaultMethod('welcome');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

$routes->get('/', 'Pages::welcome');
$routes->get('tasks', 'Pages::tasks');
$routes->get('profile', 'Pages::profile');
$routes->get('about', 'Pages::about');
