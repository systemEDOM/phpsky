<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => DATABASE['driver'] ?? 'mysql',
    'host'      => DATABASE['host'] ?? '127.0.0.1',
    'database'  => DATABASE['database'] ?? 'database',
    'username'  => DATABASE['username'] ?? 'root',
    'password'  => DATABASE['password'] ?? 'secret',
    'charset'   => DATABASE['charset'] ?? 'utf8',
    'collation' => DATABASE['collation'] ?? 'utf8_unicode_ci',
    'prefix'    => DATABASE['prefix'] ?? '',
]);

$capsule->bootEloquent();