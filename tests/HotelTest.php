<?php

namespace Invia\Tests\CMI;

use Invia\CMI\Hotel;
use PHPUnit\Framework\TestCase;

/**
 * Class HotelTest
 *
 * @coversDefaultClass \Invia\CMI\Hotel
 */
class HotelTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::<public>
     */
    public function testSetGet(): void
    {
        $instance = new Hotel();

        $uuid = 'e39e92c3-dd09-4430-85d6-9601e9a86411';
        $this->assertEquals($instance, $instance->setUUID($uuid));
        $this->assertEquals($uuid, $instance->getUUID());

        $name = 'lorem';
        $this->assertEquals($instance, $instance->setName($name));
        $this->assertEquals($name, $instance->getName());

        $currency = 'EUR';
        $this->assertEquals($instance, $instance->setCurrency($currency));
        $this->assertEquals($currency, $instance->getCurrency());
    }
}
