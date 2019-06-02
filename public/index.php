<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

define('APP_PATH', __DIR__ . '/..');
define('APP_PREFIX', '/public');
define('APP_PREFIX_ENABLED', 'prefix');

require_once APP_PATH . '/vendor/autoload.php';
require_once APP_PATH . '/config/app.php';
