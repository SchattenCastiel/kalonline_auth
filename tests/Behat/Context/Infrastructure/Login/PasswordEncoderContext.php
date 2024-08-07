<?php

namespace App\Tests\Behat\Context\Infrastructure\Login;

use App\Infrastructure\Login\PasswordEncoder;
use Behat\Behat\Context\Context;
use Behat\Hook\BeforeScenario;
use Behat\Step\Then;
use Behat\Step\When;
use PHPUnit\Framework\TestCase;
use Throwable;

class PasswordEncoderContext extends TestCase implements Context
{
    private string $password = '';

    private ?Throwable $exception = null;

    private PasswordEncoder $passwordEncoder;

    public function __construct()
    {
        parent::__construct(__CLASS__);
    }

    #[BeforeScenario]
    public function setUp(): void
    {
        $this->passwordEncoder = new PasswordEncoder();
    }

    #[When('the user is typing in the password :password')]
    public function theUserIsTypingInThePassword(string $password): void
    {
        $this->password = $password;
    }

    #[Then('the encoded password should be :encodedPassword')]
    public function theEncodedPasswordShouldBe(string $encodedPassword): void
    {
        $result = $this->getEncodedString();

        self::assertNotInstanceOf(Throwable::class, $this->exception);
        self::assertEquals($encodedPassword, $result);
    }

    #[Then('the user should get an exception with message :message')]
    public function theUserShouldGetAnExceptionWithMessage(string $message): void
    {
        $this->getEncodedString();
        self::assertInstanceOf(Throwable::class, $this->exception);
        self::assertEquals($message, $this->exception->getMessage());
    }

    private function getEncodedString(): string
    {
        $result = '';
        try {
            $result = bin2hex($this->passwordEncoder->__invoke($this->password));
        } catch (Throwable $exception) {
            $this->exception = $exception;
        }

        return $result;
    }
}
