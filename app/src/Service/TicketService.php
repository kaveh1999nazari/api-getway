<?php

namespace App\Service;

use App\Utility\GRPC\AbstractClient;
use Barsam\Ticket\Messages\CreateRequest;
use Barsam\Ticket\Messages\DeleteRequest;
use Barsam\Ticket\Messages\GetRequest;
use Barsam\Ticket\Messages\ReplyRequest;
use Barsam\Ticket\Messages\UpdateRequest;
use Barsam\Ticket\TicketServiceInterface;


/**
 * @method Create(CreateRequest $request, string $responseClass, array $context = [])
 * @method Get(GetRequest $request, string $responseClass, array $context = [])
 * @method Reply(ReplyRequest $request, string $responseClass, array $context = [])
 * @method Update(UpdateRequest $request, string $responseClass, array $context = [])
 * @method Delete(DeleteRequest $request, string $responseClass, array $context = [])
 */
class TicketService extends AbstractClient
{

    public function getServiceInterface(): string
    {
        return TicketServiceInterface::class;
    }
}
