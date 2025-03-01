<?php

use App\Controllers\UserController;
use App\Middlewares\Authenticate;


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => [UserController::class, 'index'],
    '/create' => [UserController::class, [Authenticate::class], 'showCreateForm'],
    '/store' => [UserController::class, 'store'],
    '/edit' => [UserController::class, 'showEditForm'],
    '/update' => [UserController::class, 'update'],
    '/destroy' => [UserController::class, 'destroy'],
];

handleRoute($uri, $routes);
