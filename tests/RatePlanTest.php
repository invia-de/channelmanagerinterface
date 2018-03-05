<?php

namespace Invia\Tests\CMI;

use Invia\CMI\ConstantsInterface;
use Invia\CMI\RatePlan;
use PHPUnit\Framework\TestCase;

/**
 * Class RatePlanTest
 *
 * @coversDefaultClass \Invia\CMI\RatePlan
 */
class RatePlanTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::<public>
     */
    public function testSetGet(): void
    {
        $instance = new RatePlan();

        $uuid = '4f19acbe-cd24-4868-9c78-3ffa8bd6ab7f';
        $this->assertEquals($instance, $instance->setUUID($uuid));
        $this->assertEquals($uuid, $instance->getUUID());

        $name = 'lorem ipsum';
        $this->assertEquals($instance, $instance->setName($name));
        $this->assertEquals($name, $instance->getName());

        $rateType = ConstantsInterface::RATE_TYPE_NET_RATE;
        $this->assertEquals($instance, $instance->setRateType($rateType));
        $this->assertEquals($rateType, $instance->getRateType());

        $boarding = ConstantsInterface::BOARDING_BREAKFAST;
        $this->assertEquals($instance, $instance->setBoarding($boarding));
        $this->assertEquals($boarding, $instance->getBoarding());

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
