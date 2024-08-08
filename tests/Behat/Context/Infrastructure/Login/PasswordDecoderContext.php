<?php

namespace App\Tests\Behat\Context\Infrastructure\Login;

use App\Infrastructure\Login\PasswordDecoderService;
use Behat\Behat\Context\Context;
use Behat\Hook\BeforeScenario;
use Behat\Step\Then;
use Behat\Step\When;
use PHPUnit\Framework\TestCase;
use Throwable;

class PasswordDecoderContext extends TestCase implements Context
{
    private string $password = '';

    private ?Throwable $exception = null;

    private PasswordDecoderService $passwordDecoderService;

    public function __construct()
    {
        parent::__construct(__CLASS__);
    }

    #[BeforeScenario]
    public function setUp(): void
    {
        $this->passwordDecoderService = new PasswordDecoderService();
    }

    #[When('the user is typing in the password :password')]
    public function theUserIsTypingInThePassword(string $password): void
    {
        $this->password = $password;
    }

    #[Then('the decoded password should be :decodedPassword')]
    public function theEncodedPasswordShouldBe(string $decodedPassword): void
    {
        $result = $this->getDecodedString();

        self::assertNotInstanceOf(Throwable::class, $this->exception);
        self::assertEquals($decodedPassword, $result);
    }

    private function getDecodedString(): string
    {
        $result = '';
        try {
            $result = $this->passwordDecoderService->__invoke($this->password);
        } catch (Throwable $exception) {
            $this->exception = $exception;
        }

        return $result;
    }
}
