<?php

namespace Invia\Tests\CMI;

use Invia\CMI\ConstantsInterface;
use Invia\CMI\RatePlanSaveRequest;
use PHPUnit\Framework\TestCase;

/**
 * Class RatePlanSaveRequestTest
 *
 * @coversDefaultClass \Invia\CMI\RatePlanSaveRequest
 */
class RatePlanSaveRequestTest extends TestCase
{
    /**
     * @covers ::<public>
     */
    public function testSetGet() : void
    {
        $instance = new RatePlanSaveRequest();

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

        $rateUUID = 'a03b1512-a4d2-42b4-83fe-8cf4830fa70d';
        $this->assertEquals($instance, $instance->setRateUUID($rateUUID));
        $this->assertEquals($rateUUID, $instance->getRateUUID());

        $pricePerPerson = 3.14;
        $this->assertEquals($instance, $instance->setPricePerPerson($pricePerPerson));
        $this->assertEquals($pricePerPerson, $instance->getPricePerPerson());

        $remainingContingent = 1;
        $this->assertEquals($instance, $instance->setRemainingContingent($remainingContingent));
        $this->assertEquals($remainingContingent, $instance->getRemainingContingent());

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
