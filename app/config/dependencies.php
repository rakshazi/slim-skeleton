<?php

$container = $app->getContainer();

//Error handlers
$container['sentry'] = function ($c) use ($app) {
    return new \Raven_Client($this->app->getConfig('sentry')['private_dsn']);
};
$container['appErrorHandler'] = function ($c) use ($app) {
    return new \App\ErrorHandler($app);
};
$container['errorHandler'] = function ($c) {
    return function ($request, $response, $e) use ($c) {
        return $c['appErrorHandler']->error500($request, $response, $e);
    };
};
$container['phpErrorHandler'] = function ($c) {
    return function ($request, $response, $e) use ($c) {
        return $c['appErrorHandler']->error500($request, $response, $e);
    };
};
$container['notFoundHandler'] = function ($c) {
    return function ($request, $response) use ($c) {
        return $c['appErrorHandler']->notFound($request, $response);
    };
};
$container['notAllowedHandler'] = function ($c) {
    return function ($request, $response, $methods) use ($c) {
        return $c['appErrorHandler']->notAllowed($request, $response, $methods);
    };
};
