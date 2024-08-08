<?php

namespace App\Database\Entity;

use App\Database\Repository\ExpTableRepository;
use App\Infrastructure\Database\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExpTableRepository::class)]
#[ORM\Table(name: 'ExpTableEntity')]
class ExpTableEntity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id', type: Types::INTEGER->value, nullable: false)]
    private int $id;

    #[ORM\Column(name: '[Level]', type: Types::TINYINT->value, nullable: false)]
    private int $level;

    #[ORM\Column(name: 'Exp', type: Types::BIGINT->value, nullable: false)]
    private string $exp;

    public function __construct(int $level, string $exp)
    {
        $this->level = $level;
        $this->exp = $exp;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function getExp(): string
    {
        return $this->exp;
    }
}
