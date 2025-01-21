<?php

namespace App\Endpoint\Web\Middleware;

use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Spiral\Http\Exception\HttpException;

class ExceptionMiddleware implements MiddlewareInterface
{
    public function __construct(
        private readonly ResponseFactoryInterface $responseFactory,
    ) {
    }

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        try {
            return $handler->handle($request);
        } catch (HttpException $e) {
            return $this->renderError($request, $e);
        }
    }

    private function renderError(Request $request, \Throwable $e): Response
    {
        $response = $this->responseFactory->createResponse($e->getCode());

        $response = $response->withHeader('Content-Type', 'application/json; charset=UTF-8');

        $payload = [
            'message' => $e->getMessage(),
        ];

        $response->getBody()->write(\json_encode($payload));

        return $response;
    }
}
