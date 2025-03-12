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
    '/auth/logout' => [AuthController::class, [Authenticate::class], 'logout'],

    // home
    '/home' => [HomePageController::class, [Authenticate::class], 'showHomePage'],

    // user
    '/user' => [UserController::class, [Authenticate::class], 'index'],
    '/user/create' => [UserController::class, [Authenticate::class], 'showCreateForm'],
    '/user/store' => [UserController::class, [Authenticate::class], 'store'],
    '/user/edit/:userId' => [UserController::class, [Authenticate::class], 'showEditForm'],
    '/user/update' => [UserController::class, [Authenticate::class], 'update'],
    '/user/destroy' => [UserController::class, [Authenticate::class], 'destroy'],
];



handleRoute($uri, $routes);
