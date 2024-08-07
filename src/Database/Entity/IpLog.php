<?php

namespace App\Database\Entity;

use App\Database\Repository\IpLogRepository;
use App\Infrastructure\Database\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: IpLogRepository::class)]
#[ORM\Table(name: 'IP_log')]
class IpLog
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id', type: Types::INTEGER->value, nullable: false)]
    private int $id;

    #[ORM\Column(name: 'UID', type: Types::STRING->value, length: 20, nullable: false)]
    private string $uid;

    #[ORM\Column(name: 'IP', type: Types::STRING->value, length: 20, nullable: false)]
    private string $ip;

    public function __construct(string $uid, string $ip)
    {
        $this->uid = $uid;
        $this->ip = $ip;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getUid(): string
    {
        return $this->uid;
    }

    public function getIp(): string
    {
        return $this->ip;
    }
}
