<?php

use Cake\Core\Plugin;
use Cake\Routing\Router;

Router::defaultRouteClass('DashedRoute');

/*
 * Search tags
 */
Router::scope('/projects',
		['controller' => 'Projects'],
		
		function($routes){
			$routes->connect('/tagged/*', ['action' => 'tags']);
});

Router::scope('/', function ($routes) {
    $routes->connect('/', ['controller' => 'Projects', 'action' => 'index', 'home']);

    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    $routes->fallbacks('DashedRoute');
});

Plugin::routes();






































