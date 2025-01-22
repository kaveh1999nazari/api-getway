<?php

declare(strict_types=1);

namespace App\Application\Bootloader;

use App\Endpoint\Web\LoansController;
use App\Endpoint\Web\Middleware\ExceptionMiddleware;
use App\Endpoint\Web\Middleware\LocaleSelector;
use App\Endpoint\Web\Middleware\AuthMiddleware;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Spiral\Bootloader\Http\RoutesBootloader as BaseRoutesBootloader;
use Spiral\Cookies\Middleware\CookiesMiddleware;
use Spiral\Csrf\Middleware\CsrfMiddleware;
use Spiral\Debug\Middleware\DumperMiddleware;
use Spiral\Debug\StateCollector\HttpCollector;
use Spiral\Filter\ValidationHandlerMiddleware;
use Spiral\Http\Middleware\ErrorHandlerMiddleware;
use Spiral\Http\Middleware\JsonPayloadMiddleware;
use Spiral\Router\Bootloader\AnnotatedRoutesBootloader;
use Spiral\Router\GroupRegistry;
use Spiral\Router\Loader\Configurator\RoutingConfigurator;
use Spiral\Session\Middleware\SessionMiddleware;

/**
 * A bootloader that configures the application's routes and middleware.
 *
 * @link https://spiral.dev/docs/http-routing
 */
final class RoutesBootloader extends BaseRoutesBootloader
{
    protected const DEPENDENCIES = [AnnotatedRoutesBootloader::class];

    protected function globalMiddleware(): array
    {
        return [
            ErrorHandlerMiddleware::class,
            DumperMiddleware::class,
            JsonPayloadMiddleware::class,
            HttpCollector::class,
        ];
    }

    protected function middlewareGroups(): array
    {
        return [
            'web' => [
                CookiesMiddleware::class,
                SessionMiddleware::class,
                CsrfMiddleware::class,
                ValidationHandlerMiddleware::class,
            ],
            'api' => [
                ExceptionMiddleware::class,
            ],
            'api_auth' => [
                ExceptionMiddleware::class,
                AuthMiddleware::class,
            ],
            'api_merchant' => [
                ExceptionMiddleware::class,
                AuthMiddleware::class
            ]
        ];
    }

    protected function configureRouteGroups(GroupRegistry $groups): void
    {
        $groups->getGroup('api')
            ->setNamePrefix('api.')
            ->setPrefix('/api');

        $groups->getGroup('api_auth')
            ->setNamePrefix('api.')
            ->setPrefix('/api');

//        $groups->getGroup('web')
//            ->addMiddleware(MyMiddelware::class)
//            ->setPrefix('/api');
    }

    protected function defineRoutes(RoutingConfigurator $routes): void
    {
        // Fallback route if no other route matched
        // Will show 404 page
//         $routes->default('/<path:.*>')
//            ->callable(function (ServerRequestInterface $r, ResponseInterface $response) {
//                if ($r->getMethod() === 'OPTIONS') {
//                    return $response->withStatus(200);
//                }
//
//                return $response->withStatus(404);
//            });
    }
}
