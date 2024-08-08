<?php

namespace App\Database\Entity;

use App\Database\Repository\IPRepository;
use App\Infrastructure\Database\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: IPRepository::class)]
#[ORM\Table(name: 'IPEntity')]
class IPEntity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id', type: Types::INTEGER->value, nullable: false)]
    private int $id;

    #[ORM\Column(name: 'CID', type: Types::INTEGER->value, nullable: false)]
    private int $cid;

    #[ORM\Column(name: 'startIp', type: Types::INTEGER->value, nullable: false)]
    private int $startIp;

    #[ORM\Column(name: 'EndIp', type: Types::INTEGER->value, nullable: false)]
    private int $endIp;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCid(): ?int
    {
        return $this->cid;
    }

    public function setCid(int $cid): static
    {
        $this->cid = $cid;

        return $this;
    }

    public function getStartIp(): ?int
    {
        return $this->startIp;
    }

    public function setStartIp(int $startIp): static
    {
        $this->startIp = $startIp;

        return $this;
    }

    public function getEndIp(): ?int
    {
        return $this->endIp;
    }

    public function setEndIp(int $endIp): static
    {
        $this->endIp = $endIp;

        return $this;
    }
}
