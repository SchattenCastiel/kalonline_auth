<?php

namespace App\Database\Entity;

use App\Database\Repository\CLoginRepository;
use App\Infrastructure\Database\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CLoginRepository::class)]
#[ORM\Table(name: 'CLogin')]
class CLoginEntity
{
    #[ORM\Id]
    #[ORM\Column(name: 'CID', type: Types::INTEGER->value, nullable: false)]
    private int $cid;

    #[ORM\Column(name: 'Type', type: Types::TINYINT->value, nullable: false, options: ['default' => 0])]
    private int $type;

    #[ORM\Column(name: 'ExpTime', type: Types::INTEGER->value, nullable: false, options: ['default' => 0])]
    private int $expTime;

    public function __construct(int $cid, int $type, int $expTime)
    {
        $this->cid = $cid;
        $this->type = $type;
        $this->expTime = $expTime;
    }

    public function getCid(): ?int
    {
        return $this->cid;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function getExpTime(): ?int
    {
        return $this->expTime;
    }
}
