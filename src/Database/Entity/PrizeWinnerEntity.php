<?php

namespace App\Database\Entity;

use App\Database\Repository\PrizeWinnerRepository;
use App\Infrastructure\Database\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PrizeWinnerRepository::class)]
#[ORM\Table(name: 'PrizeWinner')]
class PrizeWinnerEntity
{
    #[ORM\Id]
    #[ORM\Column(name: 'UID', type: Types::INTEGER->value, nullable: false)]
    private int $uid;

    #[ORM\Column(name: 'ID', type: Types::STRING->value, length: 16, nullable: false)]
    private string $id;

    #[ORM\Column(name: 'Server', type: Types::TINYINT->value, nullable: false)]
    private int $server;

    #[ORM\Column(name: 'Class', type: Types::TINYINT->value, nullable: false)]
    private int $class;

    #[ORM\Column(name: 'Quest', type: Types::SMALLINT->value, nullable: false)]
    private int $quest;

    public function __construct(int $uid, string $id, int $server, int $class, int $quest)
    {
        $this->uid = $uid;
        $this->id = $id;
        $this->server = $server;
        $this->class = $class;
        $this->quest = $quest;
    }

    public function getUid(): int
    {
        return $this->uid;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getServer(): int
    {
        return $this->server;
    }

    public function getClass(): int
    {
        return $this->class;
    }

    public function getQuest(): int
    {
        return $this->quest;
    }
}
