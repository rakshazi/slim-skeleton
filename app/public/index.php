<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);
require __DIR__.'/../vendor/autoload.php';
session_start();
$app = new \Rakshazi\SlimSuit\App([__DIR__.'/../config/']);
require __DIR__.'/../config/dependencies.php';
$app->run();
