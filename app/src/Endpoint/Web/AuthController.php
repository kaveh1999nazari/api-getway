<?php

namespace App\Endpoint\Web;


use App\Service\AuthService;
use App\Service\NotificationService;
use App\Service\UserService;
use App\Utility\GRPC\Response;
use Barsam\Auth\Enums\ResponseType;
use Barsam\Auth\Messages\AuthorizeRequest;
use Barsam\Auth\Messages\AuthorizeResponse;
use Barsam\Notification\Messages\SendByTemplateRequest;
use Barsam\Notification\Messages\SendByTemplateResponse;
use Barsam\User\Messages\GetRequest;
use Barsam\User\Messages\GetResponse;
use Barsam\User\Models\User;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Spiral\Http\Exception\HttpException;
use Spiral\Http\Request\InputManager;
use Spiral\Router\Annotation\Route;

class AuthController
{
    public function __construct(
        private readonly AuthService         $authService,
        private readonly UserService         $userService,
        private readonly NotificationService $notificationService,
    )
    {
    }

    #[Route('/auth/request-otp', name: 'auth.request_otp', methods: ['POST'], group: 'api')]
    public function requestOtp(InputManager $input): array
    {
        $getUserRequest = new GetRequest();
        $getUserRequest->setLoginId($input->post('mobile'));
        /** @var Response $usersResponse */
        $usersResponse = $this->userService->Get(
            $getUserRequest,
            GetResponse::class
        );
        if (count($usersResponse->getResponse()->getUsers()) === 0) {
            throw new HttpException('کاربر درخواستی یافت نشد.', 404);
        }

        /** @var User $user */
        $user = $usersResponse->getResponse()->getUsers()[0];

        $authorizeRequest = new AuthorizeRequest();
        $authorizeRequest->setClientId($user->getId());
        $authorizeRequest->setResponseType(ResponseType::CODE);

        /** @var Response $otpResponse */
        $otpResponse = $this->authService->Authorize(
            $authorizeRequest,
            AuthorizeResponse::class
        );

        $otpCode = $otpResponse->getResponse()->getCode();

        $sendOtpRequest = new SendByTemplateRequest();
        $sendOtpRequest->setRecipient($user->getLoginId());
        $sendOtpRequest->setChannelId(1);
        $sendOtpRequest->setData(['code' => $otpCode]);
        $sendOtpRequest->setTemplate(1);
        $otpResponse = $this->notificationService->SendByTemplate(
            $sendOtpRequest,
            SendByTemplateResponse::class
        );

        dd($otpResponse);
        return [];
    }
}
