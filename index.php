<?php
require 'vendor/autoload.php';
require_once __DIR__ . '\Core\index.php';


/**
 * Read environment variables in ".env" file
 */
require __DIR__ . '\configs\dotenv.php';

/**
 * Connection to Database with Eloquent ORM
 */
require_once __DIR__ . '\configs\database.php';

/**
 * Handle routing
 */
require_once __DIR__ . '\routes\web.php';
