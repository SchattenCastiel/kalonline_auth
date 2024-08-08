<?php

namespace App\Database\Entity;

use App\Database\Repository\AuthStatisticsRepository;
use App\Infrastructure\Database\Types;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AuthStatisticsRepository::class)]
#[ORM\Table(name: 'AuthStatisticsEntity')]
class AuthStatisticsEntity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id', type: Types::INTEGER->value, nullable: false)]
    private int $id;

    #[ORM\Column(name: 'RegDate', type: Types::DATETIME_MUTABLE->value, nullable: true)]
    private ?DateTimeInterface $regDate = null;

    #[ORM\Column(name: 'Server', type: Types::SMALLINT->value, nullable: true)]
    private ?int $server = null;

    #[ORM\Column(name: 'Knight', type: Types::SMALLINT->value, nullable: true)]
    private ?int $knight = null;

    #[ORM\Column(name: 'Mage', type: Types::SMALLINT->value, nullable: true)]
    private ?int $mage = null;

    #[ORM\Column(name: 'Archer', type: Types::SMALLINT->value, nullable: true)]
    private ?int $archer = null;

    #[ORM\Column(name: 'TotalUser', type: Types::SMALLINT->value, nullable: true)]
    private ?int $totalUser = null;

    #[ORM\Column(name: 'FishTrap', type: Types::SMALLINT->value, nullable: true)]
    private ?int $fishTrap = null;

    #[ORM\Column(name: 'PrivateShop', type: Types::SMALLINT->value, nullable: true)]
    private ?int $privateShop = null;

    #[ORM\Column(name: 'Currency', nullable: true)]
    private ?int $currency = null;

    public function getId(): int
    {
        return $this->id;
    }

    public function getRegDate(): ?DateTimeInterface
    {
        return $this->regDate;
    }

    public function getServer(): ?int
    {
        return $this->server;
    }

    public function getKnight(): ?int
    {
        return $this->knight;
    }

    public function getMage(): ?int
    {
        return $this->mage;
    }

    public function getArcher(): ?int
    {
        return $this->archer;
    }

    public function getTotalUser(): ?int
    {
        return $this->totalUser;
    }

    public function getFishTrap(): ?int
    {
        return $this->fishTrap;
    }

    public function getPrivateShop(): ?int
    {
        return $this->privateShop;
    }

    public function getCurrency(): ?int
    {
        return $this->currency;
    }
}
