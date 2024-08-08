<?php

namespace App\Infrastructure\Database\Types\Exception;

use Symfony\Component\PropertyAccess\Exception\InvalidTypeException;
use Throwable;

class ImageTypeClassNotStringException extends InvalidTypeException
{
    public function __construct(string $expectedType, string $actualType, ?Throwable $previous = null)
    {
        parent::__construct($expectedType, $actualType, __CLASS__, $previous);
    }
}
