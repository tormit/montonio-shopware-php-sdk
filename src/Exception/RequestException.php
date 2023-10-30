<?php

declare(strict_types=1);

namespace Montonio\Exception;

class RequestException extends \RuntimeException
{
    /**
     * @var string
     */
    private $response;

    public function __construct(
        string $message = "",
        int $code = 0,
        string $response = '',
        ?\Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
        $this->response = $response;
    }

    public function getResponse(): string
    {
        return $this->response;
    }
}
