<?php

namespace App\Endpoint\Web;

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
use Barsam\User\Messages\CheckCredentialsResponse;
use Barsam\User\Messages\DeleteResponse;
use Barsam\User\Messages\FieldCreateResponse;
use Barsam\User\Messages\FieldDeleteResponse;
use Barsam\User\Messages\FieldGetResponse;
use Barsam\User\Messages\FieldUpdateResponse;
use Barsam\User\Messages\GetResponse;
use Barsam\User\Messages\RegisterResponse;
use Barsam\User\Messages\UpdateResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Spiral\Http\Request\InputManager;
use Spiral\Router\Annotation\Route;

class UserController
{

    public function __construct(private readonly UserService $userService)
    {
    }

    #[Route('/api/profile', methods: ['GET'])]
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
            foreach ($user->getUserMetas() as $userMeta) {
                $fieldOptionsArray = [];
                foreach ($userMeta->getField()->getFieldOptions() as $fieldOption) {
                    $fieldOptionsArray[] = [
                        'id' => $fieldOption->getId(),
                        'field_id' => $fieldOption->getFieldId(),
                        'key' => $fieldOption->getKey(),
                        'value' => $fieldOption->getValue(),
                    ];
                }

                $userMetasArray[] = [
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

            $usersArray[] = [
                'id' => $user->getId(),
                'login_id' => $user->getLoginId(),
                'password' => $user->getPassword(),
                'created_at' => [
                    'seconds' => $user->getCreatedAt()->getSeconds(),
                    'nanos' => $user->getCreatedAt()->getNanos(),
                ],
                'updated_at' => [
                    'seconds' => $user->getUpdatedAt()->getSeconds(),
                    'nanos' => $user->getUpdatedAt()->getNanos(),
                ],
                'deleted_at' => $user->getDeletedAt() ? [
                    'seconds' => $user->getDeletedAt()->getSeconds(),
                    'nanos' => $user->getDeletedAt()->getNanos(),
                ] : null,
                'user_metas' => $userMetasArray,
            ];
        }

        return $this->jsonResponse([
            'users' => $usersArray,
            'total_records' => $userResponse->getResponse()->getTotalRecords(),
            'max_page' => $userResponse->getResponse()->getMaxPage(),
        ]);
    }


    #[Route('/api/register', methods: ['POST'])]
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

    #[Route('/api/profile', methods: ['PUT'])]
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

    #[Route('/api/profile', methods: ['DELETE'])]
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

    #[Route('/api/check', methods: ['POST'])]
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

    #[Route('/api/field/create', methods: ['POST'])]
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

    #[Route('/api/field/update', methods: ['PUT'])]
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

    #[Route('/api/field/delete', methods: ['DELETE'])]
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

    #[Route('/api/field', methods: ['GET'])]
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
