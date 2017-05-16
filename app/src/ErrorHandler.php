<?php

namespace App;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

/**
 * Custom slim error handler.
 */
class ErrorHandler
{
    /**
     * @var \Rakshazi\SlimSuit\App
     */
    protected $app;

    public function __construct(\Rakshazi\SlimSuit\App $app)
    {
        $this->app = $app;
    }

    /**
     * 404 error.
     *
     * @param Request  $request
     * @param Response $response
     *
     * @return Response
     */
    public function notFound(Request $request, Response $response): Response
    {
        return $this->getResponse($response, 404);
    }

    /**
     * 405 error.
     *
     * @param Request  $request
     * @param Response $response
     * @param array    $methods
     *
     * @return Response
     */
    public function notAllowed(Request $request, Response $response, array $methods): Response
    {
        $message = 'Allowed methods: '.implode(', ', $methods);

        return $this->getResponse($response, 500, $message);
    }

    /**
     * 500 error.
     *
     * @param Request    $request
     * @param Response   $response
     * @param \Throwable $e
     *
     * @return Response
     */
    public function error500(Request $request, Response $response, \Throwable $e): Response
    {
        $this->app->getContainer()->sentry->captureException($e);
        $message = $e->__toString();

        return $this->getResponse($response, 500, $message);
    }

    /**
     * Get response object with html error page.
     *
     * @param Response $response
     * @param int      $httpCode HTTP status code
     * @param string   $message  Message for developers
     *
     * @return Reponse
     */
    protected function getResponse(Response $response, int $httpCode, string $message = ''): Response
    {
        ob_start();
        include __DIR__.'/../view/errors/'.$httpCode.'.php';
        $html = ob_get_flush();

        return $response->withStatus($httpCode)->withHeader('Content-Type', 'text/html')->write($html);
    }
}
