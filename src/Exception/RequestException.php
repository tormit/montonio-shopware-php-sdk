<?php

declare(strict_types=1);

namespace Montonio\Exception;

class RequestException extends \RuntimeException
{
    /**
     * @var string
     */
    private $response;
    private ?\CurlHandle $curlHandle;

    public function __construct(
        string $message = "",
        int $code = 0,
        string $response = '',
        ?\CurlHandle $curlHandle = null,
        ?\Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
        $this->response = $response;
        $this->curlHandle = $curlHandle;
    }

    public function getResponse(): string
    {
        return $this->response;
    }

    public function curlHandle(): \CurlHandle
    {
        return $this->curlHandle;
    }

}
