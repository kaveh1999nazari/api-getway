<?php

namespace App\Endpoint\Web;

use App\Domain\Mapper\FinishCreditScoreMapper;
use App\Domain\Mapper\InquireCardMapper;
use App\Domain\Mapper\InquireCreditScoreMapper;
use App\Domain\Mapper\InquireIbanMapper;
use App\Domain\Mapper\InquireMobileOwnershipMapper;
use App\Domain\Mapper\InquirePersonMapper;
use App\Domain\Mapper\StartCreditScoreMapper;
use App\Service\InquiryService;
use Barsam\Inquiry\Messages\FinishCreditScoreResponse;
use Barsam\Inquiry\Messages\InquireBankingScoreResponse;
use Barsam\Inquiry\Messages\InquireCardResponse;
use Barsam\Inquiry\Messages\InquireIbanResponse;
use Barsam\Inquiry\Messages\InquireMobileOwnershipResponse;
use Barsam\Inquiry\Messages\InquirePersonResponse;
use Barsam\Inquiry\Messages\StartCreditScoreResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Spiral\Http\Request\InputManager;
use Spiral\Router\Annotation\Route;

class InquiryController
{

    public function __construct(private readonly InquiryService $inquiryService)
    {
    }

    #[Route('/api/inquire/person', methods: ['POST'])]
    public function inquirePerson(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $inquireRequest = InquirePersonMapper::fromRequest($input->data->all());

        $inquireResponse = $this->inquiryService->InquirePerson(
            $inquireRequest,
            InquirePersonResponse::class
        );

        return $this->jsonResponse([
            'first_name' => $inquireResponse->getResponse()->getFirstName(),
            'last_name' => $inquireResponse->getResponse()->getLastName(),
            'father_name' => $inquireResponse->getResponse()->getFatherName()
        ]);

    }

    #[Route('/api/inquire/credit', methods: ['POST'])]
    public function inquireCreditScore(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $inquireRequest = InquireCreditScoreMapper::fromRequest($input->data->all());

        $inquireResponse = $this->inquiryService->InquireCreditScore(
            $inquireRequest,
            InquireBankingScoreResponse::class
        );

        return $this->jsonResponse([
            'score' => $inquireResponse->getResponse()->getScore(),
            'group' => $inquireResponse->getResponse()->getGroup(),
            'description' => $inquireResponse->getResponse()->getDescription(),
            'data_json' => $inquireResponse->getResponse()->getDataJson()
        ]);
    }

    #[Route('/api/inquire/credit/start', methods: ['POST'])]
    public function startCreditScore(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $inquireRequest = StartCreditScoreMapper::fromRequest($input->data->all());

        $inquireResponse = $this->inquiryService->StartCreditScore(
            $inquireRequest,
            StartCreditScoreResponse::class
        );

        return $this->jsonResponse([
            'request_id' => $inquireResponse->getResponse()->getRequestId()
        ]);
    }

    #[Route('/api/inquire/credit/finish', methods: ['POST'])]
    public function finishCreditScore(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $inquireRequest = FinishCreditScoreMapper::fromRequest($input->data->all());

        $inquireResponse = $this->inquiryService->FinishCreditScore(
            $inquireRequest,
            FinishCreditScoreResponse::class
        );

        return $this->jsonResponse([
            'score' => $inquireResponse->getResponse()->getScore(),
            'group' => $inquireResponse->getResponse()->getGroup(),
            'description' => $inquireResponse->getResponse()->getDescription(),
            'data_json' => $inquireResponse->getResponse()->getDataJson()
        ]);
    }

    #[Route('/api/inquire/card', methods: ['POST'])]
    public function inquireCard(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $inquireRequest = InquireCardMapper::fromRequest($input->data->all());

        $inquireResponse = $this->inquiryService->InquireCard(
            $inquireRequest,
            InquireCardResponse::class
        );

        return $this->jsonResponse([
            'is_matched' => $inquireResponse->getResponse()->getIsMatched(),
            'bank_name' => $inquireResponse->getResponse()->getBankName(),
            'owners' => $inquireResponse->getResponse()->getOwners(),
            'iban' => $inquireResponse->getResponse()->getIban(),
            'account_number' => $inquireResponse->getResponse()->getAccountNumber()
        ]);

    }

    #[Route('/api/inquire/iban', methods: ['POST'])]
    public function inquireIban(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $inquireRequest = InquireIbanMapper::fromRequest($input->data->all());

        $inquireResponse = $this->inquiryService->InquireIban(
            $inquireRequest,
            InquireIbanResponse::class
        );

        return $this->jsonResponse([
            'is_matched' => $inquireResponse->getResponse()->getIsMatched(),
            'bank_name' => $inquireResponse->getResponse()->getBankName(),
            'owners' => $inquireResponse->getResponse()->getOwners(),
            'iban' => $inquireResponse->getResponse()->getIban(),
            'account_number' => $inquireResponse->getResponse()->getAccountNumber()
        ]);

    }

    #[Route('/api/inquire/owner', methods: ['POST'])]
    public function inquireMobileOwnership(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $inquireRequest = InquireMobileOwnershipMapper::fromRequest($input->data->all());

        $inquireResponse = $this->inquiryService->InquireMobileOwnership(
            $inquireRequest,
            InquireMobileOwnershipResponse::class
        );

        return $this->jsonResponse([
            'is_matched' => $inquireResponse->getResponse()->getIsMatched()
        ]);

    }

    private function jsonResponse(array $data, int $status = 200): ResponseInterface
    {
        $response = new \Nyholm\Psr7\Response($status);
        $response->getBody()->write(json_encode($data));
        return $response->withHeader('Content-Type', 'application/json');
    }

}
