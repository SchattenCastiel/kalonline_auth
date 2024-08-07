<?php

namespace App\Database\Entity;

use App\Database\Repository\ItemInfoRepository;
use App\Infrastructure\Database\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ItemInfoRepository::class)]
#[ORM\Table(name: 'ItemInfo')]
class ItemInfo
{
    #[ORM\Id]
    #[ORM\Column(name: 'ItemCode', type: Types::SMALLINT->value, nullable: false)]
    private int $itemCode;

    #[ORM\Column(name: 'ItemName', length: 50, nullable: false)]
    private string $itemName;

    #[ORM\Column(name: 'ItemUrl', length: 200, nullable: false)]
    private string $itemUrl;

    #[ORM\Column(name: 'Description', length: 200, nullable: false)]
    private string $description;

    #[ORM\Column(name: 'UseLimit', length: 200, nullable: false)]
    private string $useLimit;

    #[ORM\Column(name: 'catenew', type: Types::SMALLINT->value, nullable: true)]
    private ?int $catenew = null;

    #[ORM\Column(name: 'cateitem', type: Types::SMALLINT->value, nullable: true)]
    private ?int $cateitem = null;

    public function __construct(
        int $itemCode,
        string $itemName,
        string $itemUrl,
        string $description,
        string $useLimit
    ) {
        $this->itemCode = $itemCode;
        $this->itemName = $itemName;
        $this->itemUrl = $itemUrl;
        $this->description = $description;
        $this->useLimit = $useLimit;
    }

    public function getItemCode(): ?int
    {
        return $this->itemCode;
    }

    public function getItemName(): ?string
    {
        return $this->itemName;
    }

    public function getItemUrl(): string
    {
        return $this->itemUrl;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getUseLimit(): ?string
    {
        return $this->useLimit;
    }

    public function getCatenew(): ?int
    {
        return $this->catenew;
    }

    public function setCatenew(?int $catenew): static
    {
        $this->catenew = $catenew;

        return $this;
    }

    public function getCateitem(): ?int
    {
        return $this->cateitem;
    }

    public function setCateitem(?int $cateitem): static
    {
        $this->cateitem = $cateitem;

        return $this;
    }
}
