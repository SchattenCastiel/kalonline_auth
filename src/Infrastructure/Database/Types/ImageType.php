<?php

namespace App\Infrastructure\Database\Types;

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
    public function convertToPHPValue($value, AbstractPlatform $platform): false|GdImage|null
    {
        if (null === $value) {
            return null;
        }

        return imagecreatefromstring(base64_decode($value));
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform): ?int
    {
        return hexdec(addslashes($value));
    }

    public function getBindingType(): int
    {
        return ParameterType::STRING;
    }
}
