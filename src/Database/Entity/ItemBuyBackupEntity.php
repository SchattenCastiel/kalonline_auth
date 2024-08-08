<?php

namespace App\Database\Entity;

use App\Database\Repository\ItemBuyBackupRepository;
use App\Infrastructure\Database\Types;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ItemBuyBackupRepository::class)]
#[ORM\Table(name: 'ItemBuy_backup')]
class ItemBuyBackupEntity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id', type: Types::INTEGER->value, nullable: false)]
    private int $id;

    #[ORM\Column(name: 'Num', type: Types::INTEGER->value, nullable: false)]
    private int $num;

    #[ORM\Column(name: 'Server', type: Types::TINYINT->value, nullable: false)]
    private int $server;

    #[ORM\Column(name: 'Userid', type: Types::STRING->value, length: 12, nullable: false)]
    private string $userId;

    #[ORM\Column(name: 'billNum', type: Types::STRING->value, length: 30, nullable: true)]
    private ?string $billNum = null;

    #[ORM\Column(name: 'ItemCode', type: Types::SMALLINT->value, nullable: false)]
    private int $itemCode;

    #[ORM\Column(name: 'billCode', type: Types::SMALLINT->value, nullable: false)]
    private int $billCode;

    #[ORM\Column(name: 'quantity', type: Types::SMALLINT->value, nullable: false)]
    private int $quantity;

    #[ORM\Column(name: 'Unit', length: 50, nullable: false)]
    private string $unit;

    #[ORM\Column(name: 'Discount', type: Types::SMALLINT->value, nullable: false)]
    private int $discount;

    #[ORM\Column(name: 'BuyDate', type: Types::DATETIME_MUTABLE->value, nullable: false)]
    private DateTimeInterface $buyDate;

    #[ORM\Column(name: 'Place', type: Types::BOOLEAN->value, length: 1, nullable: false)]
    private bool $place;

    #[ORM\Column(name: 'charDate', type: Types::STRING->value, length: 10, nullable: false)]
    private string $charDate;

    #[ORM\Column(name: 'Flag', type: Types::TINYINT->value, nullable: false)]
    private int $flag;

    #[ORM\Column(name: 'Zipcode', type: Types::STRING->value, length: 10, nullable: false)]
    private string $zipCode;

    #[ORM\Column(name: 'Gender', type: Types::BOOLEAN->value, nullable: false)]
    private bool $gender;

    #[ORM\Column(name: 'bSuccess', type: Types::BOOLEAN->value, nullable: false)]
    private bool $bSuccess;

    #[ORM\Column(name: 'ErrNum', type: Types::STRING->value, length: 20, nullable: true)]
    private ?string $errNum = null;

    #[ORM\Column(name: 'Age', type: Types::TINYINT->value, nullable: false)]
    private int $age;

    #[ORM\Column(name: 'Price', type: Types::INTEGER->value, nullable: false)]
    private int $price;

    #[ORM\Column(name: 'giftid', type: Types::STRING->value, length: 12, nullable: true)]
    private ?string $giftid = null;

    #[ORM\Column(name: 'msg', type: Types::STRING->value, length: 50, nullable: true)]
    private ?string $msg = null;

    public function __construct(
        int $num,
        int $server,
        string $userId,
        int $itemCode,
        int $billCode,
        int $quantity,
        string $unit,
        int $discount,
        DateTimeInterface $buyDate,
        bool $place,
        string $charDate,
        int $flag,
        string $zipCode,
        bool $gender,
        bool $bSuccess,
        int $age,
        int $price
    ) {
        $this->num = $num;
        $this->server = $server;
        $this->userId = $userId;
        $this->itemCode = $itemCode;
        $this->billCode = $billCode;
        $this->quantity = $quantity;
        $this->unit = $unit;
        $this->discount = $discount;
        $this->buyDate = $buyDate;
        $this->place = $place;
        $this->charDate = $charDate;
        $this->flag = $flag;
        $this->zipCode = $zipCode;
        $this->gender = $gender;
        $this->bSuccess = $bSuccess;
        $this->age = $age;
        $this->price = $price;
    }

    public function setBillNum(?string $billNum): self
    {
        $this->billNum = $billNum;

        return $this;
    }

    public function setErrNum(?string $errNum): self
    {
        $this->errNum = $errNum;

        return $this;
    }

    public function setGiftid(?string $giftid): self
    {
        $this->giftid = $giftid;

        return $this;
    }

    public function setMsg(?string $msg): self
    {
        $this->msg = $msg;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNum(): ?int
    {
        return $this->num;
    }

    public function getServer(): int
    {
        return $this->server;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function getBillNum(): ?string
    {
        return $this->billNum;
    }

    public function getItemCode(): ?int
    {
        return $this->itemCode;
    }

    public function getBillCode(): int
    {
        return $this->billCode;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function getUnit(): ?string
    {
        return $this->unit;
    }

    public function getDiscount(): ?int
    {
        return $this->discount;
    }

    public function getBuyDate(): ?DateTimeInterface
    {
        return $this->buyDate;
    }

    public function getPlace(): ?bool
    {
        return $this->place;
    }

    public function getCharDate(): ?string
    {
        return $this->charDate;
    }

    public function getFlag(): ?int
    {
        return $this->flag;
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function getGender(): ?bool
    {
        return $this->gender;
    }

    public function getBSuccess(): ?bool
    {
        return $this->bSuccess;
    }

    public function getErrNum(): ?string
    {
        return $this->errNum;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function getGiftid(): ?string
    {
        return $this->giftid;
    }

    public function getMsg(): ?string
    {
        return $this->msg;
    }
}
