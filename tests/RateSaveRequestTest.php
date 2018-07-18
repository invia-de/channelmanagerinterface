<?php

namespace Invia\Tests\CMI;

use Invia\CMI\ConstantsInterface;
use Invia\CMI\RateSaveRequest;
use PHPUnit\Framework\TestCase;

/**
 * Class RateSaveRequestTest
 *
 * @coversDefaultClass \Invia\CMI\RateSaveRequest
 */
class RateSaveRequestTest extends TestCase
{
    /**
     * @covers ::<public>
     */
    public function testSetGet(): void
    {
        $instance = new RateSaveRequest();

        $startDate = new \DateTime();
        $this->assertEquals($instance, $instance->setStartDate($startDate));
        $this->assertEquals($startDate, $instance->getStartDate());

        $endDate = new \DateTime();
        $this->assertEquals($instance, $instance->setEndDate($endDate));
        $this->assertEquals($endDate, $instance->getEndDate());

        $affectedWeekDays = [ConstantsInterface::AFFECTED_WEEK_DAY_MONDAY];
        $this->assertEquals(ConstantsInterface::AFFECTED_WEEK_DAYS_ALL, $instance->getAffectedWeekDays());
        $this->assertEquals($instance, $instance->setAffectedWeekDays($affectedWeekDays));
        $this->assertEquals($affectedWeekDays, $instance->getAffectedWeekDays());

        $hotelUUID = 'd6e2c533-f370-4c5b-a793-929b0b905930';
        $this->assertEquals($instance, $instance->setHotelUUID($hotelUUID));
        $this->assertEquals($hotelUUID, $instance->getHotelUUID());

        $roomUUID = 'f8d4bdd6-d56a-42d1-a143-f8a277d7f50b';
        $this->assertEquals($instance, $instance->setRoomUUID($roomUUID));
        $this->assertEquals($roomUUID, $instance->getRoomUUID());

        $ratePlanUUID = 'a03b1512-a4d2-42b4-83fe-8cf4830fa70d';
        $this->assertEquals($instance, $instance->setRatePlanUUID($ratePlanUUID));
        $this->assertEquals($ratePlanUUID, $instance->getRatePlanUUID());

        $pricePerPerson = 3.14;
        $this->assertNull($instance->getPricePerPerson());
        $this->assertEquals($instance, $instance->setPricePerPerson($pricePerPerson));
        $this->assertEquals($pricePerPerson, $instance->getPricePerPerson());
        $this->assertEquals($instance, $instance->setPricePerPerson(null));
        $this->assertNull($instance->getPricePerPerson());

        $remainingContingent = 1;
        $this->assertNull($instance->getRemainingContingent());
        $this->assertEquals($instance, $instance->setRemainingContingent($remainingContingent));
        $this->assertEquals($remainingContingent, $instance->getRemainingContingent());
        $this->assertEquals($instance, $instance->setRemainingContingent(null));
        $this->assertNull($instance->getRemainingContingent());

        $minStay = 0;
        $this->assertNull($instance->getMinStay());
        $this->assertEquals($instance, $instance->setMinStay($minStay));
        $this->assertEquals($minStay, $instance->getMinStay());
        $this->assertEquals($instance, $instance->setMinStay(null));
        $this->assertNull($instance->getMinStay());

        $maxStay = 1;
        $this->assertNull($instance->getMaxStay());
        $this->assertEquals($instance, $instance->setMaxStay($maxStay));
        $this->assertEquals($maxStay, $instance->getMaxStay());
        $this->assertEquals($instance, $instance->setMaxStay(null));
        $this->assertNull($instance->getMaxStay());

        $stopSell = true;
        $this->assertNull($instance->hasStopSell());
        $this->assertEquals($instance, $instance->setStopSell($stopSell));
        $this->assertEquals($stopSell, $instance->hasStopSell());
        $this->assertEquals($instance, $instance->setStopSell(null));
        $this->assertNull($instance->hasStopSell());

        $closedArrival = false;
        $this->assertNull($instance->isClosedArrival());
        $this->assertEquals($instance, $instance->setClosedArrival($closedArrival));
        $this->assertEquals($closedArrival, $instance->isClosedArrival());
        $this->assertEquals($instance, $instance->setClosedArrival(null));
        $this->assertNull($instance->isClosedArrival());

        $closedDeparture = true;
        $this->assertNull($instance->isClosedDeparture());
        $this->assertEquals($instance, $instance->setClosedDeparture($closedDeparture));
        $this->assertEquals($closedDeparture, $instance->isClosedDeparture());
        $this->assertEquals($instance, $instance->setClosedDeparture(null));
        $this->assertNull($instance->isClosedDeparture());
    }
}
