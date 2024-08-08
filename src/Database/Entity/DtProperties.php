<?php

namespace App\Database\Entity;

use App\Database\Repository\DtPropertiesRepository;
use App\Infrastructure\Database\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DtPropertiesRepository::class)]
#[ORM\Table(name: 'dtproperties')]
class DtProperties
{
    #[ORM\Id]
    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    private int $id;

    #[ORM\Column(name: 'objectid', type: Types::INTEGER->value, nullable: true)]
    private ?int $objectId = null;

    #[ORM\Id]
    #[ORM\Column(name: 'property', type: Types::STRING->value, length: 64, nullable: false)]
    private string $property;

    #[ORM\Column(name: 'value', type: Types::STRING->value, length: 255, nullable: true)]
    private ?string $value = null;

    #[ORM\Column(name: 'uvalue', type: Types::STRING->value, length: 255, nullable: true)]
    private ?string $uvalue = null;

    #[ORM\Column(name: 'lvalue', type: Types::IMAGE->value, nullable: true)]
    private string $lvalue;

    #[ORM\Column(name: 'version', type: Types::INTEGER->value, nullable: false)]
    private int $version;

    public function __construct(string $property, int $id, int $version)
    {
        $this->property = $property;
        $this->id = $id;
        $this->version = $version;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getObjectId(): ?int
    {
        return $this->objectId;
    }

    public function setObjectId(int $objectId): self
    {
        $this->objectId = $objectId;

        return $this;
    }

    public function getProperty(): ?string
    {
        return $this->property;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getUvalue(): ?string
    {
        return $this->uvalue;
    }

    public function setUvalue(string $uvalue): self
    {
        $this->uvalue = $uvalue;

        return $this;
    }

    public function getLvalue(): string
    {
        return $this->lvalue;
    }

    public function setLvalue(string $lvalue): self
    {
        $this->lvalue = $lvalue;

        return $this;
    }

    public function getVersion(): ?int
    {
        return $this->version;
    }
}
