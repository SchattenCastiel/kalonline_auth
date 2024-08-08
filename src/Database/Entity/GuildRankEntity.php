<?php

namespace App\Database\Entity;

use App\Database\Repository\GuildRankRepository;
use App\Infrastructure\Database\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GuildRankRepository::class)]
#[ORM\Table(name: 'GuildRankEntity')]
class GuildRankEntity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id', type: Types::INTEGER->value, nullable: false)]
    private int $id;

    #[ORM\Column(name: 'Server', type: Types::SMALLINT->value, nullable: false)]
    private int $server;

    #[ORM\Column(name: 'Name', type: Types::STRING->value, length: 16, nullable: false)]
    private string $name;

    #[ORM\Column(name: 'MemberNum', type: Types::TINYINT->value, nullable: false)]
    private int $memberNum;

    #[ORM\Column(name: 'Exp', type: Types::BIGINT->value, nullable: false)]
    private string $exp;

    public function __construct(int $server, string $name, int $memberNum, string $exp)
    {
        $this->server = $server;
        $this->name = $name;
        $this->memberNum = $memberNum;
        $this->exp = $exp;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getServer(): int
    {
        return $this->server;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getMemberNum(): int
    {
        return $this->memberNum;
    }

    public function getExp(): string
    {
        return $this->exp;
    }
}
