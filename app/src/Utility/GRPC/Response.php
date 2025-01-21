<?php

namespace App\Utility\GRPC;

/**
 * @template T
 */
class Response
{
    public function __construct(
        private readonly ?object    $response,
        private readonly \stdClass $detail,
    )
    {
    }

    /**
     * @return T
     */
    public function getResponse(): ?object
    {
        return $this->response;
    }

    public function getDetail(): object
    {
        return $this->detail;
    }
}
