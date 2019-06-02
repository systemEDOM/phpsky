<?php

use Pecee\SimpleRouter\SimpleRouter as Router;

session_start();


/**
 * Include files for database and env
 */

require_once 'env.php';
require_once 'database.php';
require_once 'helpers.php';;


define('PUBLIC_PATH', getBaseUrl());


/**
 * Set default namespace for controllers
 * Include files for routes
 * Init routes
 */

require_once APP_PATH . '/routes/web.php';
Router::start();
