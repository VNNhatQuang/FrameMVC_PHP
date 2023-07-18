<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
    '/' => [UserController::class, 'index'],
    '/create' => [UserController::class, 'showCreateForm'],
    '/store' => [UserController::class, 'store'],
    '/edit' => [UserController::class, 'showEditForm'],
    '/update' => [UserController::class, 'update'],
    '/destroy' => [UserController::class, 'destroy'],
];









require_once "Core/route.php";
handleRoute($uri, $routes);
