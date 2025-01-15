<?php

namespace App\Endpoint\Web;

use App\Domain\Mapper\AuthorizeMapper;
use App\Domain\Mapper\GenerateOtpMapper;
use App\Domain\Mapper\GetSessionsMapper;
use App\Domain\Mapper\IssueTokenMapper;
use App\Domain\Mapper\LogoutSessionMapper;
use App\Domain\Mapper\VerifyOtpMapper;
use App\Service\AuthService;
use Barsam\Auth\Messages\AuthorizeResponse;
use Barsam\Auth\Messages\GenerateOtpResponse;
use Barsam\Auth\Messages\GetSessionsResponse;
use Barsam\Auth\Messages\IssueTokenResponse;
use Barsam\Auth\Messages\LogoutSessionResponse;
use Barsam\Auth\Messages\VerifyOtpResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Spiral\Http\Request\InputManager;
use Spiral\Router\Annotation\Route;

class AuthController
{
    public function __construct(private readonly AuthService $authService)
    {
    }

    #[Route('/api/', methods: ['POST'])]
    public function authorize(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $userRequest = AuthorizeMapper::fromRequest($input->data->all());

        $userResponse = $this->authService->Authorize(
            $userRequest,
            AuthorizeResponse::class
        );

        return $this->jsonResponse([
            'code' => $userResponse->getResponse()->getCode(),
            'state' => $userResponse->getResponse()->getState(),
            'redirect_uri' => $userResponse->getResponse()->getRedirectUri(),
        ]);

    }

    #[Route('/api/', methods: ['POST'])]
    public function issueToken(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $userRequest = IssueTokenMapper::fromRequest($input->data->all());

        $userResponse = $this->authService->IssueToken(
            $userRequest,
            IssueTokenResponse::class
        );

        return $this->jsonResponse([
            'access_token' => $userResponse->getResponse()->getAccessToken(),
            'token_type' => $userResponse->getResponse()->getTokenType(),
            'expires_in' => $userResponse->getResponse()->getExpiresIn(),
            'refresh_token' => $userResponse->getResponse()->getRefreshToken(),
            'scope' => $userResponse->getResponse()->getScope(),
            'user_id' => $userResponse->getResponse()->getUserId(),
        ]);
    }

    #[Route('/api/', methods: ['POST'])]
    public function getSessions(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $userRequest = GetSessionsMapper::fromRequest($input->data->all());

        $userResponse = $this->authService->GetSessions(
            $userRequest,
            GetSessionsResponse::class
        );

        return $this->jsonResponse([
            'sessions' => $userResponse->getResponse()->getSessions(),
        ]);
    }

    #[Route('/api/', methods: ['POST'])]
    public function logoutSession(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $userRequest = LogoutSessionMapper::fromRequest($input->data->all());

        $userResponse = $this->authService->LogoutSession(
            $userRequest,
            LogoutSessionResponse::class
        );

        return $this->jsonResponse([
            'message' => 'Successfully logged out',
        ]);

    }

    #[Route('/api/', methods: ['POST'])]
    public function generateOtp(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $userRequest = GenerateOtpMapper::fromRequest($input->data->all());

        $userResponse = $this->authService->GenerateOtp(
            $userRequest,
            GenerateOtpResponse::class
        );

        return $this->jsonResponse([
            'code' => $userResponse->getResponse()->getCode(),
            'Qr_code_url' => $userResponse->getResponse()->getQrCodeUrl(),
        ]);

    }

    #[Route('/api/', methods: ['POST'])]
    public function verifyOtp(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $userRequest = VerifyOtpMapper::fromRequest($input->data->all());

        $userResponse = $this->authService->VerifyOtp(
            $userRequest,
            VerifyOtpResponse::class
        );

        return $this->jsonResponse([
            'valid' => $userResponse->getResponse()->getValid(),
        ]);

    }

    private function jsonResponse(array $data, int $status = 200): ResponseInterface
    {
        $response = new \Nyholm\Psr7\Response($status);
        $response->getBody()->write(json_encode($data));
        return $response->withHeader('Content-Type', 'application/json');
    }
}
