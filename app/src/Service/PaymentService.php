<?php

namespace App\Service;

use App\Utility\GRPC\AbstractClient;
use Barsam\Payment\Messages\RequestRequest;
use Barsam\Payment\Messages\VerifyRequest;
use Barsam\Payment\PaymentServiceInterface;

/**
 * @method Request(RequestRequest $request, string $responseClass, array $context = [])
 * @method Verify(VerifyRequest $request, string $responseClass, array $context = [])
 */
class PaymentService extends AbstractClient
{
    public function getServiceInterface(): string
    {
        return PaymentServiceInterface::class;
    }
}
