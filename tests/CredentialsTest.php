<?php

namespace Invia\Tests\CMI;

use Invia\CMI\Credentials;
use PHPUnit\Framework\TestCase;

/**
 * Class CredentialsTest
 *
 * @coversDefaultClass \Invia\CMI\Credentials
 */
class CredentialsTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::<public>
     */
    public function testSetGet(): void
    {
        $instance = new Credentials();

        $authToken = 'd48a617c7da5163c44f117b9b23d8c920e69b4aa83d7b6570d71a66f3a857183';
        $this->assertNull($instance->getAuthToken());
        $this->assertEquals($instance, $instance->setAuthToken($authToken));
        $this->assertEquals($authToken, $instance->getAuthToken());
        $this->assertEquals($instance, $instance->setAuthToken(null));
        $this->assertNull($instance->getAuthToken());
    }
}
