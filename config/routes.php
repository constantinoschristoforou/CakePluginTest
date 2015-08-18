<?php
use Cake\Routing\Router;

Router::plugin('Cakephptestplugin', function ($routes) {
    $routes->fallbacks('InflectedRoute');
});
