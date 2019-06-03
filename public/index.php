<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

define('APP_PATH', __DIR__ . '/..');
define('APP_PREFIX', '');
define('APP_PREFIX_ENABLED', '');

require_once APP_PATH . '/vendor/autoload.php';
require_once APP_PATH . '/config/app.php';
