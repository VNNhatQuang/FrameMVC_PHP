<?php

use App\Controllers\AuthController;
use App\Controllers\HomePageController;
use App\Controllers\UserController;
use App\Middlewares\Authenticate;


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
    '/' => [AuthController::class, 'showLoginForm'],

    // auth
    '/auth/login' => [AuthController::class, 'login'],

    // home
    '/home' => [HomePageController::class, 'showHomePage'],

    // user
    '/user' => [UserController::class, 'index'],
    '/user/create' => [UserController::class, [Authenticate::class], 'showCreateForm'],
    '/user/store' => [UserController::class, 'store'],
    '/user/edit' => [UserController::class, 'showEditForm'],
    '/user/update' => [UserController::class, 'update'],
    '/user/destroy' => [UserController::class, 'destroy'],
];



handleRoute($uri, $routes);
