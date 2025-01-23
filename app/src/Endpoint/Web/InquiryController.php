<?php

namespace App\Endpoint\Web;

use App\Facade\Auth;
use App\Service\InquiryService;
use App\Service\UserService;
use App\Utility\GRPC\Response;
use Barsam\Inquiry\Messages\FinishCreditScoreRequest;
use Barsam\Inquiry\Messages\FinishCreditScoreResponse;
use Barsam\Inquiry\Messages\StartCreditScoreRequest;
use Barsam\Inquiry\Messages\StartCreditScoreResponse;
use Barsam\User\Messages\UpdateRequest;
use Barsam\User\Messages\UpdateResponse;
use Barsam\User\Models\UserMeta;
use Spiral\Http\Exception\HttpException;
use Spiral\Http\Request\InputManager;
use Spiral\Router\Annotation\Route;

class InquiryController
{
    public function __construct(
        private readonly InquiryService $inquiryService,
        private readonly UserService $userService,
    )
    {
    }

    #[Route('/inquiries/start', name: 'inquiry.start', methods: ['POST'], group: 'api_auth')]
    public function start(InputManager $input): array
    {
        $inquiryRequest = new StartCreditScoreRequest();
        $inquiryRequest->setMobile($input->post('mobile'));
        $inquiryRequest->setNationalId($input->post('national_code'));

        /** @var Response $inquiryResponse */
        $inquiryResponse = $this->inquiryService->StartCreditScore(
            $inquiryRequest,
            StartCreditScoreResponse::class
        );

        $requestId = $inquiryResponse->getResponse()->getRequestId();

//        dirname('/runtime/cache/validations')
        $filePath = __DIR__ . '/request_ids_' . $inquiryRequest->getNationalId();
        file_put_contents($filePath, $requestId);


        return [];
    }

    #[Route('/inquiries/finish', name: 'inquiry.finish', methods: ['POST'], group: 'api_auth')]
    public function finish(InputManager $input): array
    {
        $inquiryRequest = new FinishCreditScoreRequest();

        $inquiryRequest->setMobile($input->post('mobile'));
        $inquiryRequest->setNationalCode($input->post('national_code'));

        $filePath = __DIR__ . '/request_ids_' . $inquiryRequest->getNationalCode();
        $inquiryRequest->setRequestId(file_get_contents($filePath));

        $inquiryRequest->setCode($input->post('code'));

        /** @var Response<FinishCreditScoreResponse> $inquiryResponse */
        $inquiryResponse = $this->inquiryService->FinishCreditScore(
            $inquiryRequest,
            FinishCreditScoreResponse::class
        );

        $metaFields = [];
        /** @var UserMeta $meta */
        foreach (Auth::user()->getUserMetas() as $meta) {
            $metaFields[(int)$meta->getField()->getId()] = $meta->getValue();
        }
        $metaFields[6] = $inquiryResponse->getResponse()->getScore();
        $metaFields[7] = date('Y-m-d H:i:s', strtotime('+30 days'));

        $updateUserRequest = new UpdateRequest([
            'id' => Auth::user()->getId(),
            'password_raw' => '123456',
            'meta_fields' => $metaFields
        ]);

        /** @var Response<UpdateResponse> $updateUserResponse */
        $updateUserResponse = $this->userService->Update(
            $updateUserRequest,
            UpdateResponse::class,
        );
        if ($updateUserResponse->getDetail()->code !== 0) {
            throw new HttpException('مشکلی در آپلود فایل درخواستی شما وجود دارد.', 403);
        }

        return [
            'score' => $inquiryResponse->getResponse()->getScore(),
            'group' => $inquiryResponse->getResponse()->getGroup(),
            'description' => $inquiryResponse->getResponse()->getDescription(),
            'data_json' => $inquiryResponse->getResponse()->getDataJson(),
        ];

    }
}
