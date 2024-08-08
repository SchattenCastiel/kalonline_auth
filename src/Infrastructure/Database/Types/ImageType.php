<?php

namespace App\Infrastructure\Database\Types;

use App\Infrastructure\Database\Types\Exception\ImageTypeClassNotStringException;
use Doctrine\DBAL\ParameterType;
use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;
use GdImage;

class ImageType extends Type
{
    public const IMAGE = 'image';

    public function getName(): string
    {
        return self::IMAGE;
    }

    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform): string
    {
        return 'IMAGE';
    }

    public function canRequireSQLConversion(): true
    {
        return true;
    }

    /**
     * @return false|GdImage|resource|null
     */
    public function convertToPHPValue($value, AbstractPlatform $platform): mixed
    {
        if (null === $value) {
            return null;
        }

        if (!is_string($value)) {
            throw new ImageTypeClassNotStringException('string', gettype($value));
        }

        return imagecreatefromstring(base64_decode($value));
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform): int
    {
        if (!is_string($value)) {
            throw new ImageTypeClassNotStringException('string', gettype($value));
        }

        return (int)round(hexdec(addslashes($value)));
    }

    public function getBindingType(): int
    {
        return ParameterType::STRING;
    }
}
