<?php

namespace App\Infrastructure\Login\Exception;

use Exception;
use Throwable;

class PasswordEncryptionFailedException extends Exception
{
    public function __construct(int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct('Failed to encode password. Please check your input', $code, $previous);
    }
}
