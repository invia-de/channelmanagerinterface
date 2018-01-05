<?php

namespace Invia\Tests\CMI;

use Invia\CMI\Rate;
use PHPUnit\Framework\TestCase;

/**
 * Class RateTest
 *
 * @coversDefaultClass \Invia\CMI\Rate
 */
class RateTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::<public>
     */
    public function testSetGet() : void
    {
        $instance = new Rate();

        $uuid = '4f19acbe-cd24-4868-9c78-3ffa8bd6ab7f';
        $this->assertEquals($instance, $instance->setUUID($uuid));
        $this->assertEquals($uuid, $instance->getUUID());

        $name = 'lorem ipsum';
        $this->assertEquals($instance, $instance->setName($name));
        $this->assertEquals($name, $instance->getName());

        $release = 1;
        $this->assertEquals($instance, $instance->setRelease($release));
        $this->assertEquals($release, $instance->getRelease());

        $minStay = 2;
        $this->assertEquals($instance, $instance->setMinStay($minStay));
        $this->assertEquals($minStay, $instance->getMinStay());

        $maxStay = 3;
        $this->assertEquals($instance, $instance->setMaxStay($maxStay));
        $this->assertEquals($maxStay, $instance->getMaxStay());
    }
}
