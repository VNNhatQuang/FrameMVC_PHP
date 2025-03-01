<?php
require 'vendor/autoload.php';
require __DIR__ . '/Core/index.php';


/**
 * Read environment variables in ".env" file
 */
require __DIR__ . '/configs/dotenv.php';

/**
 * Connection to Database with Eloquent ORM
 */
require __DIR__ . '/configs/database.php';

/**
 * Handle routing
 */
require __DIR__ . '/routes/web.php';
