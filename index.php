<?php

require 'vendor/autoload.php';
require 'Core/index.php';


/**
 * Read environment variables in ".env" file
 */
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();


/**
 * Use ORM Eloquent
 */
use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;
$capsule->addConnection([
    'driver' => $_ENV['DB_DRIVER'],
    'host' => $_ENV['DB_HOST'],
    'username' => $_ENV['DB_USER'],
    'password' => $_ENV['DB_PASS'],
    'database' => $_ENV['DB_NAME'],
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);
$capsule->setAsGlobal(); // Make this Capsule instance available globally via static methods... (optional)
$capsule->bootEloquent(); // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())


/**
 * Handle routing
 */
require_once __DIR__ . '\routes\web.php';
