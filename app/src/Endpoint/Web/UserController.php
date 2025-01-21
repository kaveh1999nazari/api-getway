<?php

namespace App\Endpoint\Web;

use App\Domain\Mapper\CreateUserMapper;
use App\Service\AuthService;
use App\Service\NotificationService;
use App\Service\UserService;
use Barsam\Auth\Enums\ResponseType;
use Barsam\Auth\Messages\AuthorizeRequest;
use Barsam\Auth\Messages\AuthorizeResponse;
use Barsam\Notification\Messages\SendByTemplateRequest;
use Barsam\Notification\Messages\SendByTemplateResponse;
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
        private readonly NotificationService $notificationService,
    )
    {
    }

    #[Route('/auth/register', name: 'user.register', methods: ['POST'], group:'api')]
    public function register(InputManager $input): array
    {
        $registerRequest = CreateUserMapper::fromRequest($input->data->all());

        /** @var Response $registerResponse */
        $registerResponse = $this->userService->Register(
                $registerRequest,
                RegisterResponse::class
        );


//        dd($registerResponse->getDetail());
        if($registerResponse->getDetail()->code === 13)
        {
            throw new HttpException('این کاربر قبلا ثبت نام کرده است', 403);
        }


        $authorizeRequest = new AuthorizeRequest();
        $authorizeRequest->setClientId($registerResponse->getResponse()->getUserId());
        $authorizeRequest->setResponseType(ResponseType::CODE);

        /** @var Response $otpResponse */
        $otpResponse = $this->authService->Authorize(
            $authorizeRequest,
            AuthorizeResponse::class
        );

        $otpCode = $otpResponse->getResponse()->getCode();

        $sendOtpRequest = new SendByTemplateRequest();
        $sendOtpRequest->setRecipient($input->post('login_id'));
        $sendOtpRequest->setChannelId(2);
        $sendOtpRequest->setData(['code' => $otpCode]);
        $sendOtpRequest->setTemplate(2);
        $otpResponse = $this->notificationService->SendByTemplate(
            $sendOtpRequest,
            SendByTemplateResponse::class
        );


        return [];

    }

}


