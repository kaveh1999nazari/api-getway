<?php

namespace App\Endpoint\Web;

use App\Domain\Mapper\TicketCreateMapper;
use App\Domain\Mapper\TicketDeleteMapper;
use App\Domain\Mapper\TicketGetMapper;
use App\Domain\Mapper\TicketReplyMapper;
use App\Domain\Mapper\TicketUpdateMapper;
use App\Service\TicketService;
use Barsam\Ticket\Messages\CreateResponse;
use Barsam\Ticket\Messages\DeleteResponse;
use Barsam\Ticket\Messages\GetResponse;
use Barsam\Ticket\Messages\ReplyResponse;
use Barsam\Ticket\Messages\UpdateResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Spiral\Http\Request\InputManager;
use Spiral\Router\Annotation\Route;

class TicketController
{
    public function __construct(private readonly TicketService $ticketService)
    {
    }

    #[Route('/api/ticket', methods: ['POST'])]
    public function create(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $ticketRequest = TicketCreateMapper::fromRequest($input->data->all());

        $ticketResponse = $this->ticketService->Create(
            $ticketRequest,
            CreateResponse::class
        );

        return $this->jsonResponse([
            'ticket_id' => $ticketResponse->getResponse()->getTicketId()
        ]);

    }

    #[Route('/api/ticket', methods: ['GET'])]
    public function get(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $ticketRequest = TicketGetMapper::fromRequest($input->data->all());

        $ticketResponse = $this->ticketService->Get(
            $ticketRequest,
            GetResponse::class
        );

        return $this->jsonResponse([
            'ticket' => $ticketResponse->getResponse()->getTicket()
        ]);

    }

    #[Route('/api/ticket/reply', methods: ['POST'])]
    public function reply(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $ticketRequest = TicketReplyMapper::fromRequest($input->data->all());

        $ticketResponse = $this->ticketService->Reply(
            $ticketRequest,
            ReplyResponse::class
        );

        return $this->jsonResponse([
            'ticket_reply_id' => $ticketResponse->getResponse()->getTicketReplyId()
        ]);

    }

    #[Route('/api/ticket', methods: ['PUT'])]
    public function update(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $ticketRequest = TicketUpdateMapper::fromRequest($input->data->all());

        $ticketResponse = $this->ticketService->Update(
            $ticketRequest,
            UpdateResponse::class
        );

        return $this->jsonResponse([
            'message' => 'updated'
        ]);

    }

    #[Route('/api/ticket/reply', methods: ['DELETE'])]
    public function delete(ServerRequestInterface $request, InputManager $input): ResponseInterface
    {
        $ticketRequest = TicketDeleteMapper::fromRequest($input->data->all());

        $ticketResponse = $this->ticketService->Delete(
            $ticketRequest,
            DeleteResponse::class
        );

        return $this->jsonResponse([
            'message' => 'deleted'
        ]);

    }

    private function jsonResponse(array $data, int $status = 200): ResponseInterface
    {
        $response = new \Nyholm\Psr7\Response($status);
        $response->getBody()->write(json_encode($data));
        return $response->withHeader('Content-Type', 'application/json');
    }

}
