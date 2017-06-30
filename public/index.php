<?php

// import composer autoloader
require_once '../vendor/autoload.php';
//import default settings
require_once '../defaults.php';

use Router\Router;

$router = new Router();

// middleware to be executed before everything else.
$router->priorMiddleware();
// requiring view related route
require_once $router->getView();
// middleware to be executed after everything else.
$router->lateMiddleware();