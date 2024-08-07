<?php

namespace App\Database\Entity;

use App\Database\Repository\LogRepository;
use App\Infrastructure\Database\Types;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LogRepository::class)]
#[ORM\Table(name: 'Log')]
class Log
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id', type: Types::INTEGER->value, nullable: false)]
    private int $id;

    #[ORM\Column(name: 'Date', type: Types::DATETIME_MUTABLE->value, nullable: false)]
    private DateTimeInterface $date;

    #[ORM\Column(name: 'MainType', type: Types::TINYINT->value, nullable: false)]
    private int $mainType;

    #[ORM\Column(name: 'Type', type: Types::TINYINT->value, nullable: false)]
    private int $type;

    #[ORM\Column(name: 'Player1', type: Types::INTEGER->value, nullable: false)]
    private int $playerOne;

    #[ORM\Column(name: 'Player2', type: Types::INTEGER->value, nullable: false)]
    private int $playerTwo;

    #[ORM\Column(name: 'IID', type: Types::INTEGER->value, nullable: false)]
    private int $iid;

    #[ORM\Column(name: 'Value1', type: Types::INTEGER->value, nullable: false)]
    private int $valueOne;

    #[ORM\Column(name: 'Value2', type: Types::INTEGER->value, nullable: false)]
    private int $valueTwo;

    #[ORM\Column(name: 'Value3', type: Types::INTEGER->value, nullable: false)]
    private int $valueThree;

    #[ORM\Column(name: 'Value4', type: Types::INTEGER->value, nullable: false)]
    private int $valueFour;

    public function __construct(
        DateTimeInterface $date,
        int $mainType,
        int $type,
        int $playerOne,
        int $playerTwo,
        int $iid,
        int $valueOne,
        int $valueTwo,
        int $valueThree,
        int $valueFour
    ) {
        $this->date = $date;
        $this->mainType = $mainType;
        $this->type = $type;
        $this->playerOne = $playerOne;
        $this->playerTwo = $playerTwo;
        $this->iid = $iid;
        $this->valueOne = $valueOne;
        $this->valueTwo = $valueTwo;
        $this->valueThree = $valueThree;
        $this->valueFour = $valueFour;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?DateTimeInterface
    {
        return $this->date;
    }

    public function getMainType(): ?int
    {
        return $this->mainType;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function getPlayerOne(): ?int
    {
        return $this->playerOne;
    }

    public function getPlayerTwo(): ?int
    {
        return $this->playerTwo;
    }

    public function getIid(): ?int
    {
        return $this->iid;
    }

    public function getValueOne(): ?int
    {
        return $this->valueOne;
    }

    public function getValueTwo(): ?int
    {
        return $this->valueTwo;
    }

    public function getValueThree(): ?int
    {
        return $this->valueThree;
    }

    public function getValueFour(): ?int
    {
        return $this->valueFour;
    }
}
