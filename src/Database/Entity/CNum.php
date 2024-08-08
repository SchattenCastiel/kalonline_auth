<?php

namespace App\Database\Entity;

use App\Database\Repository\CNumRepository;
use App\Infrastructure\Database\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CNumRepository::class)]
#[ORM\Table(name: 'CNum')]
class CNum
{
    #[ORM\Id]
    #[ORM\Column(name: 'UID', type: Types::INTEGER->value, nullable: false)]
    private int $uid;

    #[ORM\Column(name: 'Num', type: Types::INTEGER->value, nullable: false)]
    private int $num;

    public function __construct(int $uid, int $num)
    {
        $this->uid = $uid;
        $this->num = $num;
    }

    public function getUid(): ?int
    {
        return $this->uid;
    }

    public function getNum(): ?int
    {
        return $this->num;
    }
}
