<?php

require __DIR__.'/../vendor/autoload.php';
session_start();
$app = new \Rakshazi\SlimSuit\App([__DIR__.'/../config/']);
require __DIR__.'/../config/dependencies.php';
$app->run();
