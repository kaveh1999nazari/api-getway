<?php

namespace App\Endpoint\Web\backup;

use App\Domain\Mapper\Backup\PaymentRequestMapper;
use App\Domain\Mapper\Backup\PaymentVerifyMapper;
use App\Service\PaymentService;
use Barsam\Payment\Messages\RequestResponse;
use Barsam\Payment\Messages\VerifyResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Spiral\Http\Request\InputManager;
use Spiral\Router\Annotation\Route;

class PaymentController
{
    public function __construct(private readonly PaymentService $paymentService)
    {
    }

    #[Route('/api/payment/request', methods: ['POST'])]
    public function request(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $paymentRequest = PaymentRequestMapper::fromRequest($input->data->all());

        $paymentResponse = $this->paymentService->Request(
            $paymentRequest,
            RequestResponse::class
        );

        return $this->jsonResponse([
            'payment_id' => $paymentResponse->getResponse()->getPaymentId(),
            'type' => $paymentResponse->getResponse()->getType(),
            'payment_url' => $paymentResponse->getResponse()->getPaymentUrl(),
            'data' => $paymentResponse->getResponse()->getData(),
        ]);
    }

    #[Route('/api/payment/verify', methods: ['POST'])]
    public function verify(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $paymentRequest = PaymentVerifyMapper::fromRequest($input->data->all());

        $paymentResponse = $this->paymentService->Verify(
            $paymentRequest,
            VerifyResponse::class
        );

        return $this->jsonResponse([
            'is_verified' => $paymentResponse->getResponse()->getIsVerified(),
            'is_double_spent' => $paymentResponse->getResponse()->getIsDoubleSpent(),
        ]);
    }

    private function jsonResponse(array $data, int $status = 200): ResponseInterface
    {
        $response = new \Nyholm\Psr7\Response($status);
        $response->getBody()->write(json_encode($data));
        return $response->withHeader('Content-Type', 'application/json');
    }
}
