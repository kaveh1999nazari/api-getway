<?php

namespace App\Utility\GRPC;
class Response
{
    public function __construct(
        private readonly ?object    $response,
        private readonly \stdClass $detail,
    )
    {
    }

    public function getResponse(): ?object
    {
        return $this->response;
    }

    public function getDetail(): object
    {
        return $this->detail;
    }
}
