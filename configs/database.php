<?php
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Support\Facades\Facade;


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
Facade::setFacadeApplication($capsule->getContainer()); // Bind Facade to the Application Container of Capsule to use Facades like DB, Schema, etc.
$capsule->getContainer()->instance('db', $capsule->getDatabaseManager()); // Register DatabaseManager into the Container so that Facades can access the 'db' service.
