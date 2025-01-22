<?php

namespace App\Endpoint\Web;


use App\Domain\Mapper\CurrentUserMapper;
use App\Facade\Auth;
use App\Service\AuthService;
use App\Service\NotificationService;
use App\Service\UserService;
use App\Utility\GRPC\Response;
use Barsam\Auth\Enums\GrantType;
use Barsam\Auth\Enums\ResponseType;
use Barsam\Auth\Messages\AuthorizeRequest;
use Barsam\Auth\Messages\AuthorizeResponse;
use Barsam\Auth\Messages\IssueTokenRequest;
use Barsam\Auth\Messages\IssueTokenResponse;
use Barsam\Auth\Messages\LogoutSessionRequest;
use Barsam\Auth\Messages\LogoutSessionResponse;
use Barsam\Notification\Messages\SendByTemplateRequest;
use Barsam\Notification\Messages\SendByTemplateResponse;
use Barsam\User\Messages\GetRequest;
use Barsam\User\Messages\GetResponse;
use Barsam\User\Models\User;
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
        /** @var Response<GetResponse> $usersResponse */
        $usersResponse = $this->userService->Get(
            $getUserRequest,
            GetResponse::class
        );
        if (iterator_count($usersResponse->getResponse()->getUsers()->getIterator()) === 0) {
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
        $sendOtpRequest->setChannelId(2);
        $sendOtpRequest->setData(['code' => $otpCode]);
        $sendOtpRequest->setTemplate(2);
        $otpResponse = $this->notificationService->SendByTemplate(
            $sendOtpRequest,
            SendByTemplateResponse::class
        );


        return [];
    }

    #[Route('/auth/confirm-otp', name: 'auth.generate_otp', methods: ['POST'], group: 'api')]
    public function confirmOtp(InputManager $input): array
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

        $otpRequest = new IssueTokenRequest();
        $otpRequest->setUserId($user->getId());
        $otpRequest->setCode($input->post('code'));
        $otpRequest->setGrantType(GrantType::AUTHORIZATION_CODE);

        /** @var Response $otpResponse */
        $otpResponse = $this->authService->IssueToken(
            $otpRequest,
            IssueTokenResponse::class
        );
        if ($otpResponse->getDetail()->code !== 0) {
            throw new HttpException($otpResponse->getDetail()->details, 403);
        }

        return [
            'access_token' => $otpResponse->getResponse()->getAccessToken(),
            'token_type' => $otpResponse->getResponse()->getTokenType(),
            'expires_in' => $otpResponse->getResponse()->getExpiresIn(),
        ];
    }

    #[Route('/auth', name: 'auth.get', methods: ['GET'], group: 'api_auth')]
    public function get(): array
    {
        return CurrentUserMapper::fromRequest(Auth::user());
    }

    #[Route('/auth', name: 'auth.logout', methods: ['DELETE'], group: 'api_auth')]
    public function logout(): array
    {
        $authRequest = new LogoutSessionRequest();
        $authRequest->setAccessToken(Auth::getToken());

        $this->authService->LogoutSession(
            $authRequest,
            LogoutSessionResponse::class
        );

        return [];
    }
}
