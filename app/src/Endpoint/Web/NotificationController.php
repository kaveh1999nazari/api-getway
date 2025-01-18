<?php

namespace App\Endpoint\Web;

use App\Domain\Mapper\NotificationCreateTemplateMapper;
use App\Domain\Mapper\NotificationGetChannelsMapper;
use App\Domain\Mapper\NotificationGetTemplatesMapper;
use App\Domain\Mapper\NotificationSendByTemplateMapper;
use App\Domain\Mapper\NotificationSendDirectMapper;
use App\Domain\Mapper\NotificationUpdateTemplateMapper;
use App\Service\NotificationService;
use Barsam\Notification\Messages\CreateTemplateResponse;
use Barsam\Notification\Messages\GetChannelsResponse;
use Barsam\Notification\Messages\GetTemplatesResponse;
use Barsam\Notification\Messages\SendByTemplateResponse;
use Barsam\Notification\Messages\SendDirectResponse;
use Barsam\Notification\Messages\UpdateTemplateResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Spiral\Http\Request\InputManager;
use Spiral\Router\Annotation\Route;

class NotificationController
{

    public function __construct(private readonly NotificationService $notificationService)
    {
    }

    #[Route('/api/notification/channel', methods: ['GET'])]
    public function getChannels(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $notificationRequest = NotificationGetChannelsMapper::fromRequest($input->data->all());

        $notificationResponse = $this->notificationService->GetChannels(
            $notificationRequest,
            GetChannelsResponse::class
        );

        $channels = $notificationResponse->getResponse()->getChannels();
        $channelsArray = [];
        foreach ($channels as $channel) {
            $channelsArray[] = [
                'id' => $channel->getId(),
                'name' => $channel->getName(),
                'description' => $channel->getDescription(),
                'status' => $channel->getStatus(),
            ];
        }

        return $this->jsonResponse([
            'channels' => $channelsArray,
            'total_records' => $notificationResponse->getResponse()->getTotalRecords(),
            'max_page' => $notificationResponse->getResponse()->getMaxPage(),
        ]);
    }


    #[Route('/api/notification/direct', methods: ['POST'])]
    public function sendDirect(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $notificationRequest = NotificationSendDirectMapper::fromRequest($input->data->all());

        $notificationResponse = $this->notificationService->SendDirect(
            $notificationRequest,
            SendDirectResponse::class
        );

        return $this->jsonResponse([
            'message_id' => $notificationResponse->getResponse()->getMessageId()
        ]);
    }

    #[Route('/api/notification/template/send', methods: ['POST'])]
    public function sendByTemplate(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $notificationRequest = NotificationSendByTemplateMapper::fromRequest($input->data->all());

        $notificationResponse = $this->notificationService->SendByTemplate(
            $notificationRequest,
            SendByTemplateResponse::class
        );

        return $this->jsonResponse([
            'message_id' => $notificationResponse->getResponse()->getMessageId()
        ]);
    }

    #[Route('/api/notification/template', methods: ['GET'])]
    public function getTemplates(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $notificationRequest = NotificationGetTemplatesMapper::fromRequest($input->data->all());

        $notificationResponse = $this->notificationService->GetTemplates(
            $notificationRequest,
            GetTemplatesResponse::class
        );

        $templates = $notificationResponse->getResponse()->getTemplates();
        $templatesArray = [];
        foreach ($templates as $template) {
            $templatesArray[] = [
                'id' => $template->getId(),
                'channel_id' => $template->getChannelId(),
                'key' => $template->getKey(),
                'subject' => $template->getSubject(),
                'content' => $template->getContent(),
            ];
        }

        return $this->jsonResponse([
            'templates' => $templatesArray,
        ]);
    }


    #[Route('/api/notification/template', methods: ['POST'])]
    public function createTemplate(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $notificationRequest = NotificationCreateTemplateMapper::fromRequest($input->data->all());

        $notificationResponse = $this->notificationService->CreateTemplate(
            $notificationRequest,
            CreateTemplateResponse::class
        );

        return $this->jsonResponse([
            'template_id' => $notificationResponse->getResponse()->getTemplateId()
        ]);
    }

    #[Route('/api/notification/template', methods: ['PUT'])]
    public function updateTemplate(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $notificationRequest = NotificationUpdateTemplateMapper::fromRequest($input->data->all());

        $notificationResponse = $this->notificationService->UpdateTemplate(
            $notificationRequest,
            UpdateTemplateResponse::class
        );

        return $this->jsonResponse([
            'message' => 'updated'
        ]);
    }

    private function jsonResponse(array $data, int $status = 200): ResponseInterface
    {
        $response = new \Nyholm\Psr7\Response($status);
        $response->getBody()->write(json_encode($data));
        return $response->withHeader('Content-Type', 'application/json');
    }

}
