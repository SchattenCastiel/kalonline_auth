<?php

namespace App\Database\Entity;

use App\Database\Repository\ItemDetailRepository;
use App\Infrastructure\Database\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ItemDetailRepository::class)]
#[ORM\Table(name: 'ItemDetail')]
class ItemDetail
{
    #[ORM\Id]
    #[ORM\Column(name: 'billCode', type: Types::INTEGER->value, nullable: false)]
    private int $billCode;

    #[ORM\Id]
    #[ORM\Column(name: 'itemCode', type: Types::SMALLINT->value, nullable: false)]
    private int $itemCode;

    #[ORM\Column(name: 'Unit', type: Types::STRING->value, length: 50, nullable: false)]
    private string $unit;

    #[ORM\Column(name: 'Duration', type: Types::SMALLINT->value, nullable: true)]
    private ?int $duration = null;

    #[ORM\Column(name: 'UnitName', type: Types::STRING->value, length: 10)]
    private string $unitName;

    #[ORM\Column(name: 'UnitQuantity', type: Types::TINYINT->value, nullable: true, options: ['default' => 1])]
    private ?int $unitQuantity = null;

    #[ORM\Column(name: 'Price', type: Types::INTEGER->value, nullable: false)]
    private int $price;

    public function __construct(int $id, int $billCode, int $itemCode, string $unit, string $unitName, int $price)
    {
        $this->billCode = $billCode;
        $this->itemCode = $itemCode;
        $this->unit = $unit;
        $this->unitName = $unitName;
        $this->price = $price;
    }

    public function getBillCode(): int
    {
        return $this->billCode;
    }

    public function getItemCode(): int
    {
        return $this->itemCode;
    }

    public function getUnit(): string
    {
        return $this->unit;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(?int $duration): static
    {
        $this->duration = $duration;

        return $this;
    }

    public function getUnitName(): ?string
    {
        return $this->unitName;
    }

    public function getUnitQuantity(): ?int
    {
        return $this->unitQuantity;
    }

    public function setUnitQuantity(int $unitQuantity): static
    {
        $this->unitQuantity = $unitQuantity;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }
}
