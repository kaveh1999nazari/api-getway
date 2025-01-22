<?php

namespace App\Endpoint\Web;

use App\Service\InquiryService;
use App\Utility\GRPC\Response;
use Barsam\Inquiry\Messages\FinishCreditScoreRequest;
use Barsam\Inquiry\Messages\FinishCreditScoreResponse;
use Barsam\Inquiry\Messages\StartCreditScoreRequest;
use Barsam\Inquiry\Messages\StartCreditScoreResponse;
use Spiral\Http\Request\InputManager;
use Spiral\Router\Annotation\Route;

class InquiryController
{
    public function __construct(
        private readonly InquiryService $inquiryService
    )
    {
    }

    #[Route('/inquiries/start', name: 'inquiry.start', methods: ['POST'], group: 'api')]
    public function start(InputManager $input): array
    {
        $inquiryRequest = new StartCreditScoreRequest();
        $inquiryRequest->setMobile($input->post('mobile'));
        $inquiryRequest->setNationalId($input->post('national_id'));

        /** @var Response $inquiryResponse */
        $inquiryResponse = $this->inquiryService->StartCreditScore(
            $inquiryRequest,
            StartCreditScoreResponse::class
        );

        $requestId = $inquiryResponse->getResponse()->getRequestId();

        $filePath = __DIR__ . '/request_ids_' . $inquiryRequest->getNationalId();
        file_put_contents($filePath, $requestId);


        return [
//            'request_id' => $inquiryResponse->getResponse()->getRequestId(),
        ];
    }

    #[Route('/inquiries/finish', name: 'inquiry.finish', methods: ['POST'], group: 'api')]
    public function finish(InputManager $input): array
    {
        $inquiryRequest = new FinishCreditScoreRequest();

        $inquiryRequest->setMobile($input->post('mobile'));
        $inquiryRequest->setNationalCode($input->post('national_code'));

        $filePath = __DIR__ . '/request_ids_' . $inquiryRequest->getNationalCode();
        $inquiryRequest->setRequestId(file_get_contents($filePath));

        $inquiryRequest->setCode($input->post('code'));

        $inquiryResponse = $this->inquiryService->FinishCreditScore(
            $inquiryRequest,
            FinishCreditScoreResponse::class
        );

        return [
            'score' => $inquiryResponse->getResponse()->getScore(),
            'group' => $inquiryResponse->getResponse()->getGroup(),
            'description' => $inquiryResponse->getResponse()->getDescription(),
            'data_json' => $inquiryResponse->getResponse()->getDataJson(),
        ];

    }
}
