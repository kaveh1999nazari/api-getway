<?php

namespace App\Service;

use App\Utility\GRPC\AbstractClient;
use Barsam\Auth\AuthServiceInterface;
use Barsam\Auth\Messages\AuthorizeRequest;
use Barsam\Auth\Messages\GenerateOtpRequest;
use Barsam\Auth\Messages\GetSessionsRequest;
use Barsam\Auth\Messages\IssueTokenRequest;
use Barsam\Auth\Messages\LogoutSessionRequest;
use Barsam\Auth\Messages\ValidateTokenRequest;
use Barsam\Auth\Messages\VerifyOtpRequest;
use GPBMetadata\Auth\Messages\ValidateToken;


/**
 * @method Authorize(AuthorizeRequest $request, string $responseClass, array $context = [])
 * @method IssueToken(IssueTokenRequest $request, string $responseClass, array $context = [])
 * @method GetSessions(GetSessionsRequest $request, string $responseClass, array $context = [])
 * @method LogoutSession(LogoutSessionRequest $request, string $responseClass, array $context = [])
 * @method GenerateOtp(GenerateOtpRequest $request, string $responseClass, array $context = [])
 * @method VerifyOtp(VerifyOtpRequest $request, string $responseClass, array $context = [])
 * @method ValidateToken(ValidateTokenRequest $request, string $responseClass, array $context = [])
 */
class AuthService extends AbstractClient
{

    public function getServiceInterface(): string
    {
        return AuthServiceInterface::class;
    }
}
