<?php

namespace App\Service;

use App\Utility\GRPC\AbstractClient;
use Barsam\Otp\Messages\GenerateRequest;
use Barsam\Otp\Messages\VerifyRequest;
use Barsam\Otp\OtpServiceInterface;


/**
 * @method Generate(GenerateRequest $request, string $responseClass, array $context = [])
 * @method Verify(VerifyRequest $request, string $responseClass, array $context = [])
 */
class OtpService extends AbstractClient
{

    public function getServiceInterface(): string
    {
        return OtpServiceInterface::class;
    }
}
