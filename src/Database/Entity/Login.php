<?php

namespace App\Database\Entity;

use App\Database\Repository\LoginRepository;
use App\Infrastructure\Database\Types;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LoginRepository::class)]
#[ORM\Table(name: 'Login')]
class Login
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'UID', type: Types::INTEGER->value, nullable: false)]
    private int $uid;

    #[ORM\Column(name: 'ID', type: Types::STRING->value, length: 16, nullable: false)]
    private string $id;

    #[ORM\Column(name: 'PWD', type: Types::BINARY->value, length: 16, nullable: false)]
    private string $pwd;

    #[ORM\Column(name: 'Birth', type: Types::DATETIME_MUTABLE->value, nullable: true)]
    private ?DateTimeInterface $birth = null;

    #[ORM\Column(name: 'Type', type: Types::TINYINT->value, nullable: true, options: ['default' => 4])]
    private ?int $type = null;

    #[ORM\Column(name: 'ExpTime', type: Types::INTEGER->value, nullable: true, options: ['default' => 0])]
    private ?int $expTime = null;

    #[ORM\Column(name: 'Info', type: Types::INTEGER->value, nullable: true)]
    private ?int $info = null;

    #[ORM\Column(name: 'Firstname', type: Types::STRING->value, length: 20, nullable: true)]
    private ?string $firstname = null;

    #[ORM\Column(name: 'Surname', type: Types::STRING->value, length: 20, nullable: true)]
    private ?string $lastname = null;

    #[ORM\Column(name: 'YourCode', type: Types::STRING->value, length: 20, nullable: true)]
    private ?string $yourCode = null;

    public function __construct(int $id, string $pwd)
    {
        $this->id = $id;
        $this->pwd = $pwd;
    }

    public function getUid(): int
    {
        return $this->uid;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getPwd(): ?string
    {
        return $this->pwd;
    }

    public function getBirth(): ?DateTimeInterface
    {
        return $this->birth;
    }

    public function setBirth(DateTimeInterface $birth): static
    {
        $this->birth = $birth;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getExpTime(): ?int
    {
        return $this->expTime;
    }

    public function setExpTime(int $expTime): static
    {
        $this->expTime = $expTime;

        return $this;
    }

    public function getInfo(): ?int
    {
        return $this->info;
    }

    public function setInfo(int $info): static
    {
        $this->info = $info;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): static
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): static
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getYourCode(): ?string
    {
        return $this->yourCode;
    }

    public function setYourCode(string $yourCode): static
    {
        $this->yourCode = $yourCode;

        return $this;
    }
}
