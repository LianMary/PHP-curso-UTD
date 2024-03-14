<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get ('/', 'Home::index');

#
$routs->get('/produtos/lista', 'ProdutoController');
$routs->get('/produtos/inserir', 'ProdutoController');