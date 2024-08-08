<?php

namespace App\Database\Entity;

use App\Database\Repository\RankRepository;
use App\Infrastructure\Database\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RankRepository::class)]
#[ORM\Table(name: 'RankEntity')]
class RankEntity
{
    #[ORM\Id]
    #[ORM\Column(name: 'Server', type: Types::TINYINT->value, nullable: false)]
    private int $server;

    #[ORM\Id]
    #[ORM\Column(name: 'Name', type: Types::STRING->value, length: 16, nullable: false)]
    private string $name;

    #[ORM\Column(name: 'Class', type: Types::TINYINT->value, nullable: false)]
    private int $class;

    #[ORM\Column(name: '[Level]', type: Types::TINYINT->value, nullable: false)]
    private int $level;

    #[ORM\Column(name: 'Exp', type: Types::SMALLINT->value, nullable: false)]
    private int $exp;

    #[ORM\Column(name: 'Guild', type: Types::STRING->value, length: 16)]
    private string $guild;

    public function __construct(int $server, string $name, int $class, int $level, int $exp, string $guild)
    {
        $this->server = $server;
        $this->name = $name;
        $this->class = $class;
        $this->level = $level;
        $this->exp = $exp;
        $this->guild = $guild;
    }

    public function getServer(): ?int
    {
        return $this->server;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getClass(): ?int
    {
        return $this->class;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function getExp(): ?int
    {
        return $this->exp;
    }

    public function getGuild(): ?string
    {
        return $this->guild;
    }
}
