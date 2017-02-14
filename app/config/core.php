<?php
return [
    'settings' => [
        'displayErrorDetails' => true,
        'prefix' => [
            'controller' => '\App\Controller',
            'helper' => '\App\Helper',
            'entity' => '\App\Entity',
        ],
        'view' => [
            'template_path' => __DIR__ . '/view/',
            'cache_path' => __DIR__ . '/cache/',
        ],
        'database' => [
            'database_type' => 'mysql',
            'database_name' => 'dbname',
            'server' => '127.0.0.1',
            'username' => 'root',
            'password' => 'password',
            'charset' => 'utf8',
            'port' => 3306,
            'option' => [
                PDO::ATTR_CASE => PDO::CASE_NATURAL,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]
        ],
    ],
];
