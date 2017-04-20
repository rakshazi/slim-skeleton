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
            'template_path' => __DIR__ . '/../view/',
            'cache_path' => in_array($_SERVER['HTTP_HOST'], ['localhost','127.0.0.1']) ? false : __DIR__ . '/../cache/',
        ],
        'database' => [
            'database_type' => 'mysql',
            'database_name' => 'slim_skeleton',
            'server' => 'db',
            'username' => 'slim',
            'password' => 'slim',
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
