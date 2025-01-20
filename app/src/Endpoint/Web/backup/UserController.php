<?php

namespace App\Endpoint\Web\backup;

use App\Domain\Mapper\CheckCredentialMapper;
use App\Domain\Mapper\CreateUserMapper;
use App\Domain\Mapper\DeleteUserMapper;
use App\Domain\Mapper\FieldCreateMapper;
use App\Domain\Mapper\FieldDeleteMapper;
use App\Domain\Mapper\FieldGetMapper;
use App\Domain\Mapper\FieldUpdateMapper;
use App\Domain\Mapper\GetUserMapper;
use App\Domain\Mapper\UpdateUserMapper;
use App\Service\UserService;
use App\Utility\GoogleTimeHelper;
use Barsam\User\Messages\CheckCredentialsResponse;
use Barsam\User\Messages\DeleteResponse;
use Barsam\User\Messages\FieldCreateResponse;
use Barsam\User\Messages\FieldDeleteResponse;
use Barsam\User\Messages\FieldGetResponse;
use Barsam\User\Messages\FieldUpdateResponse;
use Barsam\User\Messages\GetResponse;
use Barsam\User\Messages\RegisterResponse;
use Barsam\User\Messages\UpdateResponse;
use DateTimeInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Spiral\Http\Request\InputManager;
use Spiral\Router\Annotation\Route;

class UserController
{

    public function __construct(private readonly UserService $userService)
    {
    }

    #[Route('/profile', methods: ['GET'], group: 'api')]
    public function get(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $userRequest = GetUserMapper::fromRequest($input->data->all());

        $userResponse = $this->userService->Get(
            $userRequest,
            GetResponse::class
        );

        $users = $userResponse->getResponse()->getUsers();
        $usersArray = [];

        foreach ($users as $user) {
            $userMetasArray = [];

            foreach ($user->getUserMetas() as $metaIndex => $userMeta) {
                $fieldOptionsArray = [];

                foreach ($userMeta->getField()->getFieldOptions() as $optionIndex => $fieldOption) {
                    $fieldOptionsArray["option_$optionIndex"] = [
                        'id' => $fieldOption->getId(),
                        'field_id' => $fieldOption->getFieldId(),
                        'key' => $fieldOption->getKey(),
                        'value' => $fieldOption->getValue(),
                    ];
                }

                $userMetasArray["meta_$metaIndex"] = [
                    'field' => [
                        'validation_rules' => $userMeta->getField()->getValidationRules(),
                        'field_options' => $fieldOptionsArray,
                        'id' => $userMeta->getField()->getId(),
                        'label' => $userMeta->getField()->getLabel(),
                        'type' => $userMeta->getField()->getType(),
                    ],
                    'field_option' => $userMeta->getFieldOption() ? [
                        'id' => $userMeta->getFieldOption()->getId(),
                        'field_id' => $userMeta->getFieldOption()->getFieldId(),
                        'key' => $userMeta->getFieldOption()->getKey(),
                        'value' => $userMeta->getFieldOption()->getValue(),
                    ] : null,
                    'value' => $userMeta->getValue(),
                ];
            }

            $usersArray = [
                'id' => $user->getId(),
                'login_id' => $user->getLoginId(),
//                'password' => $user->getPassword(),
                'created_at' => GoogleTimeHelper::timestampToDateTimeImmutable($user->getCreatedAt())->format(DateTimeInterface::ATOM),
                'updated_at' => GoogleTimeHelper::timestampToDateTimeImmutable($user->getUpdatedAt())->format(DateTimeInterface::ATOM),
                'deleted_at' => $user->getDeletedAt() ?
                     GoogleTimeHelper::timestampToDateTimeImmutable($user->getDeletedAt())->format(DateTimeInterface::ATOM): null,
                'user_metas' => $userMetasArray,
            ];
        }

        return $this->jsonResponse(
            $usersArray,
        );
    }

    #[Route('/register', methods: ['POST'], group: 'api')]
    public function create(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $userRequest = CreateUserMapper::fromRequest($input->data->all());

        $userResponse = $this->userService->Register(
            $userRequest,
            RegisterResponse::class
        );



        return $this->jsonResponse([
            'id' => $userResponse->getResponse()->getUserId()
        ]);
    }

    #[Route('/profile', methods: ['PUT'], group: 'api')]
    public function update(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $userRequest = UpdateUserMapper::fromRequest($input->data->all());

        $userResponse = $this->userService->Update(
            $userRequest,
            UpdateResponse::class
        );

        return $this->jsonResponse([
            'message' => 'User updated successfully',
        ]);
    }

    #[Route('/profile', methods: ['DELETE'], group: 'api')]
    public function delete(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $userRequest = DeleteUserMapper::fromRequest($input->data->all());

        $userResponse = $this->userService->Delete(
            $userRequest,
            DeleteResponse::class
        );

        return $this->jsonResponse([
            'message' => 'User deleted successfully',
        ]);
    }

    #[Route('/check', methods: ['POST'], group: 'api')]
    public function checkCredentials(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $userRequest = CheckCredentialMapper::fromRequest($input->data->all());

        $userResponse = $this->userService->CheckCredentials(
            $userRequest,
            CheckCredentialsResponse::class
        );

        return $this->jsonResponse([
            'valid' => $userResponse->getResponse()->getValid(),
        ]);
    }

    #[Route('/field/create', methods: ['POST'], group: 'api')]
    public function fieldCreate(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $userRequest = FieldCreateMapper::fromRequest($input->data->all());

        $userResponse = $this->userService->FieldCreate(
            $userRequest,
            FieldCreateResponse::class
        );

        return $this->jsonResponse([
            "message" => "created"
        ]);
    }

    #[Route('/field/update', methods: ['PUT'], group: 'api')]
    public function fieldUpdate(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $userRequest = FieldUpdateMapper::fromRequest($input->data->all());

        $userResponse = $this->userService->FieldUpdate(
            $userRequest,
            FieldUpdateResponse::class
        );

        return $this->jsonResponse([
            'message' => "updated"
        ]);
    }

    #[Route('/field/delete', methods: ['DELETE'], group: 'api')]
    public function fieldDelete(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $userRequest = FieldDeleteMapper::fromRequest($input->data->all());

        $userResponse = $this->userService->FieldDelete(
            $userRequest,
            FieldDeleteResponse::class
        );

        return $this->jsonResponse([
            'message' => "deleted"
        ]);

    }

    #[Route('/field', methods: ['GET'], group: 'api')]
    public function fieldGet(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $userRequest = FieldGetMapper::fromRequest($input->data->all());

        $userResponse = $this->userService->FieldGetAll(
            $userRequest,
            FieldGetResponse::class
        );

        $fields = $userResponse->getResponse()->getFields();
        $fieldsArray = [];
        foreach ($fields as $field) {
            $fieldOptionsArray = [];
            foreach ($field->getFieldOptions() as $fieldOption) {
                $fieldOptionsArray[] = [
                    'id' => $fieldOption->getId(),
                    'field_id' => $fieldOption->getFieldId(),
                    'key' => $fieldOption->getKey(),
                    'value' => $fieldOption->getValue(),
                ];
            }

            $fieldsArray[] = [
                'validation_rules' => $field->getValidationRules(),
                'field_options' => $fieldOptionsArray,
                'id' => $field->getId(),
                'label' => $field->getLabel(),
                'type' => $field->getType(),
            ];
        }

        return $this->jsonResponse([
            'fields' => $fieldsArray,
            'total_records' => $userResponse->getResponse()->getTotalRecords(),
            'max_page' => $userResponse->getResponse()->getMaxPage(),
        ]);
    }

    private function jsonResponse(array $data, int $status = 200): ResponseInterface
    {
        $response = new \Nyholm\Psr7\Response($status);
        $response->getBody()->write(json_encode($data));
        return $response->withHeader('Content-Type', 'application/json');
    }

}
