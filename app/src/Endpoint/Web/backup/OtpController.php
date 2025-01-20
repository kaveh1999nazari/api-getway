<?php

namespace App\Endpoint\Web\backup;

use App\Domain\Mapper\OtpGenerateMapper;
use App\Domain\Mapper\OtpVerifyMapper;
use App\Service\OtpService;
use Barsam\Otp\Messages\GenerateResponse;
use Barsam\Otp\Messages\VerifyResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Spiral\Http\Request\InputManager;
use Spiral\Router\Annotation\Route;

class OtpController
{
    public function __construct(private readonly OtpService $otpService)
    {
    }

    #[Route('/api/otp/generate', methods: ['POST'])]
    public function generate(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $otpRequest = OtpGenerateMapper::fromRequest($input->data->all());

        $otpResponse = $this->otpService->Generate(
            $otpRequest,
            GenerateResponse::class
        );

        return $this->jsonResponse([
            'code' => $otpResponse->getResponse()->getCode()
        ]);

    }

    #[Route('/api/otp/verify', methods: ['POST'])]
    public function verify(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $otpRequest = OtpVerifyMapper::fromRequest($input->data->all());

        $otpResponse = $this->otpService->Verify(
            $otpRequest,
            VerifyResponse::class
        );

        return $this->jsonResponse([
            'is_verified' => $otpResponse->getResponse()->getIsVerified()
        ]);
    }

    private function jsonResponse(array $data, int $status = 200): ResponseInterface
    {
        $response = new \Nyholm\Psr7\Response($status);
        $response->getBody()->write(json_encode($data));
        return $response->withHeader('Content-Type', 'application/json');
    }
}
