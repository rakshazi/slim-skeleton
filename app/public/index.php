<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
require __DIR__ . '/../vendor/autoload.php';
session_start();
if (PHP_SAPI == 'cli-server') {
    $url  = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false;
    }
}
$settings = require __DIR__ . '/../config/core.php';
$app = new \Rakshazi\SlimSuit\App([__DIR__ . '/../config/']);
require __DIR__ . '/../config/dependencies.php';
$app->run();
