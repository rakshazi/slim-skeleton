<?php

$core = require __DIR__.'/core.php';
$db = $core['settings']['database'];

return [
    'paths' => [
        'migrations' => __DIR__.'/../migrations',
        'seeds' => __DIR__.'/../seeds',
    ],

    'environments' => [
        'default_database' => 'default',
        'default' => [
            'name' => $db['database_name'],
            'host' => $db['server'],
            'user' => $db['username'],
            'pass' => $db['password'],
            'port' => $db['port'],
            'charset' => $db['charset'],
            'adapter' => $db['database_type'],
        ],
    ],
];
