<?php

namespace Invia\Tests\CMI;

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
     * @covers ::<public>
     */
    public function testSetGet(): void
    {
        $instance = new RatePlan();

        $hotelUUID = 'ceb7df34-483e-41f4-ae92-fa61bc1e7ea7';
        $this->assertEquals($instance, $instance->setHotelUUID($hotelUUID));
        $this->assertEquals($hotelUUID, $instance->getHotelUUID());

        $roomUUID = 'f3b33826-037e-4a42-824f-cbd4ad60ef3e';
        $this->assertEquals($instance, $instance->setRoomUUID($roomUUID));
        $this->assertEquals($roomUUID, $instance->getRoomUUID());

        $rateUUID = 'a8225c0e-1606-414d-9831-83ee106c9f1a';
        $this->assertEquals($instance, $instance->setRateUUID($rateUUID));
        $this->assertEquals($rateUUID, $instance->getRateUUID());

        $date = new \DateTime();
        $this->assertEquals($instance, $instance->setDate($date));
        $this->assertEquals($date, $instance->getDate());

        $pricePerPerson = 3.14;
        $this->assertEquals($instance, $instance->setPricePerPerson($pricePerPerson));
        $this->assertEquals($pricePerPerson, $instance->getPricePerPerson());

        $remainingContingent = 1;
        $this->assertEquals($instance, $instance->setRemainingContingent($remainingContingent));
        $this->assertEquals($remainingContingent, $instance->getRemainingContingent());

        $booked = 2;
        $this->assertEquals($instance, $instance->setBooked($booked));
        $this->assertEquals($booked, $instance->getBooked());

        $stopSell = true;
        $this->assertEquals($instance, $instance->setStopSell($stopSell));
        $this->assertEquals($stopSell, $instance->hasStopSell());

        $closedArrival = false;
        $this->assertEquals($instance, $instance->setClosedArrival($closedArrival));
        $this->assertEquals($closedArrival, $instance->isClosedArrival());

        $closedDeparture = true;
        $this->assertEquals($instance, $instance->setClosedDeparture($closedDeparture));
        $this->assertEquals($closedDeparture, $instance->isClosedDeparture());
    }
}
