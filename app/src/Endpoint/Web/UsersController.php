<?php

namespace App\Endpoint\Web;

use App\Domain\Mapper\CreateUserMapper;
use App\Facade\Auth;
use App\Service\AuthService;
use App\Service\InquiryService;
use App\Service\NotificationService;
use App\Service\UserService;
use App\Utility\GRPC\Response;
use Barsam\Auth\Enums\ResponseType;
use Barsam\Auth\Messages\AuthorizeRequest;
use Barsam\Auth\Messages\AuthorizeResponse;
use Barsam\Inquiry\Messages\InquireMobileOwnershipRequest;
use Barsam\Inquiry\Messages\InquireMobileOwnershipResponse;
use Barsam\Inquiry\Messages\InquirePersonRequest;
use Barsam\Inquiry\Messages\InquirePersonResponse;
use Barsam\Notification\Messages\SendByTemplateRequest;
use Barsam\Notification\Messages\SendByTemplateResponse;
use Barsam\User\Messages\RegisterRequest;
use Barsam\User\Messages\RegisterResponse;
use Barsam\User\Messages\UpdateRequest;
use Barsam\User\Messages\UpdateResponse;
use Barsam\User\Models\UserMeta;
use Psr\Http\Message\ServerRequestInterface;
use Spiral\Files\FilesInterface;
use Spiral\Http\Exception\HttpException;
use Spiral\Http\Request\InputManager;
use Spiral\Router\Annotation\Route;


class UsersController
{
    public function __construct(
        private readonly UserService         $userService,
        private readonly FilesInterface      $files,
    )
    {
    }

    #[Route(route: '/users/id-card', name: 'users.upload_id_card', methods: 'POST', group: 'api_auth')]
    public function uploadIdCard(ServerRequestInterface $request, InputManager $input): array
    {
        $idFront = $input->file('id_front');
        $idBack = $input->file('id_back');

        if ($idFront === null || $idBack === null) {
            throw new HttpException('تصویری اپلود نشده است', 400);
        }

        $mediaType = $idFront->getClientMediaType();
        $mediaType2 = $idBack->getClientMediaType();
        if (!in_array($mediaType, ['image/jpeg', 'image/png']) || !in_array($mediaType2, ['image/jpeg', 'image/png'])) {
            throw new HttpException('فایل اپلود اشتباه است', 400);
        }


        $storagePath = sprintf('public/uploads/%s', Auth::user()->getId());
        $this->files->ensureDirectory($storagePath);

        $frontExt = pathinfo($idFront->getClientFilename(), PATHINFO_EXTENSION);
        $frontFileName = uniqid('front_') . '.' . strtolower($frontExt);
        $idFrontPath = sprintf('%s/%s', $storagePath, $frontFileName);
        $idFront->moveTo($idFrontPath);

        $backExt = pathinfo($idBack->getClientFilename(), PATHINFO_EXTENSION);
        $backFileName = uniqid('back_') . '.' . strtolower($backExt);
        $idBackPath = sprintf('%s/%s', $storagePath, $backFileName);
        $idBack->moveTo($idBackPath);

        $metaFields = [];
        /** @var UserMeta $meta */
        foreach (Auth::user()->getUserMetas() as $meta) {
            $metaFields[(int)$meta->getField()->getId()] = $meta->getValue();
        }
        $metaFields[8] = $idFrontPath;
        $metaFields[9] = $idBackPath;

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
            'id_front' => $idFrontPath,
            'id_back' => $idBackPath,
        ];
    }

}


