<?php

namespace App\Endpoint\Web\Middleware;

use App\Facade\Auth;
use App\Service\AuthService;
use App\Service\UserService;
use App\Utility\GRPC\Response;
use Barsam\Auth\Messages\AuthorizeRequest;
use Barsam\Auth\Messages\ValidateTokenRequest;
use Barsam\Auth\Messages\ValidateTokenResponse;
use Barsam\User\Messages\GetRequest;
use Barsam\User\Messages\GetResponse;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Psr\Http\Message\ResponseInterface;
use Spiral\Debug\Exception\DumpException;
use Spiral\Http\Exception\HttpException;


class AuthMiddleware implements MiddlewareInterface
{
    public function __construct(
        private readonly AuthService $authService,
        private readonly UserService $userService,
    )
    {
    }

    /**
     * @param ServerRequestInterface $request
     * @param RequestHandlerInterface $handler
     * @return ResponseInterface
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $tokenData = $request->getHeader('Authorization');
        if(empty($tokenData) || empty($tokenData[0])) {
            throw new HttpException('لطفا وارد شوید', 401);
        }
        $tokenParts = explode(' ', $tokenData[0]);

        $validateRequest = new ValidateTokenRequest();
        $validateRequest->setAccessToken($tokenParts[1]);

        /** @var Response<ValidateTokenResponse> $validateResponse */
        $validateResponse = $this->authService->ValidateToken(
            $validateRequest,
            ValidateTokenResponse::class
        );

        if ($validateResponse->getDetail()->code !== 0) {
            throw new HttpException($validateResponse->getDetail()->details, 401);
        }

        $getUserRequest = new GetRequest();
        $getUserRequest->setId($validateResponse->getResponse()->getClaims()['uid']);

        /** @var Response<GetResponse> $getUserResponse */
        $getUserResponse = $this->userService->Get($getUserRequest, GetResponse::class);
        if ($getUserResponse->getDetail()->code !== 0) {
            throw new HttpException($getUserResponse->getDetail()->details, 401);
        }

        $users = iterator_to_array($getUserResponse->getResponse()->getUsers());
        if (count($users) === 0) {
            throw new HttpException('لطفا وارد شوید', 401);
        }
        Auth::setUser($users[0]);

        return $handler->handle($request);
    }

}
