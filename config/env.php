<?php

define('SECRET_KEY','SkeletonPHP');
define('ALGORITHM','HS512');

define('APP', [
    'name'    => 'SkeletonPHP',
    'url_base'=> 'http://skeleton.localhost/',
]);


define('DATABASE', [
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'phpsky',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);


define('MAIL', [
    'Host' => '',
    'SMTPAuth' => true,
    'Username' => '',
    'Password' => '',
    'SMTPSecure' => 'tls',
    'Port' => 587,
    'AddressFrom' => '',
    'NameFrom' => 'Daniel Oseguera',
    'AddressInbox' => '',
    'NameInbox' => ''
]);