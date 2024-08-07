<?php

declare(strict_types=1);

namespace App\Tests\Behat\Context\Swagger;

use Behat\Behat\Context\Context;
use Behat\Step\Then;
use Behat\Step\When;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * This context class contains the definitions of the steps used by the demo
 * feature file. Learn how to get started with Behat and BDD on Behat's website.
 *
 * @see http://behat.org/en/latest/quick_start.html
 */
final class SwaggerContext extends WebTestCase implements Context
{
    private string $uri = '';

    public function __construct()
    {
        parent::__construct(__CLASS__);
    }

    #[When('I call the url with :uri')]
    public function iCallTheUrlWith(string $uri): void
    {
        $this->uri = $uri;
    }

    #[Then('I will receive an http status code :statusCode')]
    public function iWillReceiveAnHttpStatusCode(int $statusCode): void
    {
        $client = $this->createClient();
        $client->request('GET', $this->uri);
        $this->assertResponseStatusCodeSame($statusCode);
    }
}
