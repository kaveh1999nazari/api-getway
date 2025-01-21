<?php

namespace App\Endpoint\Web;

use App\Domain\Mapper\CreateUserMapper;
use App\Service\AuthService;
use App\Service\UserService;
use Barsam\Auth\Enums\ResponseType;
use Barsam\Auth\Messages\AuthorizeRequest;
use Barsam\Auth\Messages\AuthorizeResponse;
use Barsam\User\Messages\GetRequest;
use Barsam\User\Messages\GetResponse;
use Barsam\User\Messages\RegisterResponse;
use Spiral\Http\Exception\HttpException;
use Spiral\Http\Request\InputManager;
use Spiral\Router\Annotation\Route;
use App\Utility\GRPC\Response;


class UserController
{

    public function __construct(
        private readonly UserService $userService,
        private readonly AuthService $authService,
    )
    {
    }

    #[Route('/auth/register', name: 'user.register', methods: ['POST'], group:'api')]
    public function register(InputManager $input)
    {
        $userRequest = new GetRequest();
        $userRequest->setLoginId($input->post('login_id'));

        /** @var Response $registerResponse */
        $userResponse = $this->userService->Get(
            $userRequest,
            GetResponse::class
        );

        if (count($userResponse->getResponse()->getUsers()) === 0)
        {
            $registerRequest = CreateUserMapper::fromRequest($input->data->all());

            /** @var Response $registerResponse */
            $registerResponse = $this->userService->Register(
                $registerRequest,
                RegisterResponse::class
            );

            dump($registerResponse->getResponse());

            $authorizeRequest = new AuthorizeRequest();
            $authorizeRequest->setClientId($registerResponse->getResponse()->getUserId());
            $authorizeRequest->setResponseType(ResponseType::CODE);

            /** @var Response $otpResponse */
            $otpResponse = $this->authService->Authorize(
                $authorizeRequest,
                AuthorizeResponse::class
            );

            $otpCode = $otpResponse->getResponse()->getCode();

            dump($otpCode);

        }else{
            throw new HttpException('کاربر وجود دارد', 403);
        }

    }

}


