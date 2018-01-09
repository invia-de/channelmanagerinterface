<?php

namespace Invia\Tests\CMI;

use Invia\CMI\BookedRatePlan;
use PHPUnit\Framework\TestCase;

/**
 * Class TestBookedRatePlan
 *
 * @coversDefaultClass \Invia\CMI\BookedRatePlan
 */
class BookedRatePlanTest extends TestCase
{
    /**
     * @covers ::<public>
     */
    public function testSetGet(): void
    {
        $instance = new BookedRatePlan();

        $rateUUID = '5c96015b-755e-47c4-a521-e0bb521a2300';
        $this->assertEquals($instance, $instance->setRateUUID($rateUUID));
        $this->assertEquals($rateUUID, $instance->getRateUUID());

        $roomUUID = 'c6a7caf1-337f-4ec0-9b37-81f4266c3b1a';
        $this->assertEquals($instance, $instance->setRoomUUID($roomUUID));
        $this->assertEquals($roomUUID, $instance->getRoomUUID());

        $count = 42;
        $this->assertEquals($instance, $instance->setCount($count));
        $this->assertEquals($count, $instance->getCount());
    }
}
