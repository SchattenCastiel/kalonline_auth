<?php

namespace App\Database\Entity;

use App\Database\Repository\LoginDeletedRepository;
use App\Infrastructure\Database\Types;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LoginDeletedRepository::class)]
#[ORM\Table(name: 'LoginDeletedEntity')]
class LoginDeletedEntity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'pId', type: Types::INTEGER->value, nullable: false)]
    private int $pId;

    #[ORM\Column(name: 'UID', type: Types::INTEGER->value, nullable: false)]
    private int $uid;

    #[ORM\Column(name: 'ID', type: Types::STRING->value, length: 16, nullable: false)]
    private string $id;

    #[ORM\Column(name: 'DeletedTime', type: Types::DATETIME_MUTABLE->value, nullable: false)]
    private DateTimeInterface $deletedTime;

    public function __construct(int $uid, string $id, DateTimeInterface $deletedTime)
    {
        $this->uid = $uid;
        $this->id = $id;
        $this->deletedTime = $deletedTime;
    }

    public function getPId(): int
    {
        return $this->pId;
    }

    public function getUid(): int
    {
        return $this->uid;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getDeletedTime(): DateTimeInterface
    {
        return $this->deletedTime;
    }
}
