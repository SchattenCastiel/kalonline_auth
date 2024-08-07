<?php

namespace App\Infrastructure\Database\Types;

use Doctrine\DBAL\ParameterType;
use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;

class TinyintType extends Type
{
    public const TINYINT = 'tinyint';

    public function getName(): string
    {
        return self::TINYINT;
    }

    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform): string
    {
        return 'TINYINT' . (!empty($fieldDeclaration['unsigned']) ? ' UNSIGNED' : '');
    }

    public function canRequireSQLConversion(): true
    {
        return true;
    }

    public function convertToPHPValue($value, AbstractPlatform $platform): ?int
    {
        return null === $value ? null : (int)$value;
    }

    /**
     * @return int|mixed|null
     */
    public function convertToDatabaseValue($value, AbstractPlatform $platform): mixed
    {
        return null === $value ? null : (int)$value;
    }

    public function getBindingType(): int
    {
        return ParameterType::INTEGER;
    }
}
