<?php

namespace App\Service;

use App\Utility\GRPC\AbstractClient;
use Barsam\Inquiry\InquiryServiceInterface;
use Barsam\Inquiry\Messages\FinishCreditScoreRequest;
use Barsam\Inquiry\Messages\InquireBankingScoreRequest;
use Barsam\Inquiry\Messages\InquireCardRequest;
use Barsam\Inquiry\Messages\InquireIbanRequest;
use Barsam\Inquiry\Messages\InquireMobileOwnershipRequest;
use Barsam\Inquiry\Messages\InquirePersonRequest;
use Barsam\Inquiry\Messages\StartCreditScoreRequest;

/**
 * @method InquirePerson(InquirePersonRequest $request, string $responseClass, array $context = [])
 * @method InquireCreditScore(InquireBankingScoreRequest $request, string $responseClass, array $context = [])
 * @method StartCreditScore(StartCreditScoreRequest $request, string $responseClass, array $context = [])
 * @method FinishCreditScore(FinishCreditScoreRequest $request,string $responseClass, array $context = [])
 * @method InquireCard(InquireCardRequest $request,string $responseClass, array $context = [])
 * @method InquireIban(InquireIbanRequest $request,string $responseClass, array $context = [])
 * @method InquireMobileOwnership(InquireMobileOwnershipRequest $request,string $responseClass, array $context = [])
 */
class InquiryService extends AbstractClient
{

    public function getServiceInterface(): string
    {
        return InquiryServiceInterface::class;
    }
}
