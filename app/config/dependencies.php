<?php

$container = $app->getContainer();

//Error handlers
$container['appErrorHandler'] = function ($c) {
    return new \App\ErrorHandler();
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
