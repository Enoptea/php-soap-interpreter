<?php

declare(strict_types=1);

namespace Meng\Soap;

class SoapEnedisException extends \Exception
{
    private string $codeError;

    public function __construct(string $message, string $codeError)
    {
        parent::__construct();
        $this->message = $message;
        $this->codeError = $codeError;
    }

    public function getCodeError(): string
    {
        return $this->codeError;
    }
}
