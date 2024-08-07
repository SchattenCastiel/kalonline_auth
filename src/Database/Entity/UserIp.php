<?php

namespace App\Database\Entity;

use App\Database\Repository\UserIpRepository;
use App\Infrastructure\Database\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserIpRepository::class)]
#[ORM\Table(name: 'user_ip')]
class UserIp
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id', type: Types::INTEGER->value, nullable: false)]
    private int $id;

    #[ORM\Column(name: 'user_id', type: Types::STRING->value, length: 10, nullable: false)]
    private string $userId;

    #[ORM\Column(name: 'iser_id', type: Types::STRING->value, length: 10, nullable: false)]
    private string $iserId;

    #[ORM\Column(name: 'PID', type: Types::STRING->value, length: 10, nullable: false)]
    private string $pid;

    public function __construct(string $userId, string $iserId, string $pid)
    {
        $this->userId = $userId;
        $this->iserId = $iserId;
        $this->pid = $pid;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function getIserId(): ?string
    {
        return $this->iserId;
    }

    public function getPid(): ?string
    {
        return $this->pid;
    }
}
