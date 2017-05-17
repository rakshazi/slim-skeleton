<?php

$app->add(new \RKA\SessionMiddleware());

$container = $app->getContainer();

$container['session'] = function ($c) {
    return new \RKA\Session();
};

$container['logger'] = function ($c) {
    $logger = new \Monolog\Logger('App');
    $logger->pushHandler(new \Monolog\Handler\ErrorLogHandler());

    return $logger;
};

//Error handlers
$container['sentry'] = function ($c) use ($app) {
    $client = new \Raven_Client($app->getConfig('sentry')['private_dsn']);
    $client->setAppPath('/var/lib/nginx/html/app/'); //constant from docker container
    $client->setPrefixies(['/var/lib/nginx/html/app/']);

    return $client;
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
