<?php

declare(strict_types=1);

namespace Montonio\Exception;

class RequestException extends \RuntimeException
{
    public function __construct(
        string $message = "",
        int $code = 0,
        string $response = '',
        ?\Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
        $this->message = $message;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
