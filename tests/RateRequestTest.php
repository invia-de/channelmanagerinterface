<?php declare(strict_types=1);

namespace Invia\Tests\CMI;

use Invia\CMI\ConstantsInterface;
use Invia\CMI\RateRequest;
use PHPUnit\Framework\TestCase;

/**
 * Class RateRequestTest
 *
 * @coversDefaultClass \Invia\CMI\RateRequest
 */
class RateRequestTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::<public>
     */
    public function testSetGet(): void
    {
        $instance = new RateRequest();

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

        $hotelUUID = 'a40dd2ed-8c0f-40cb-9025-1132dbbc52b2';
        $this->assertEquals($instance, $instance->setHotelUUID($hotelUUID));
        $this->assertEquals($hotelUUID, $instance->getHotelUUID());

        $roomUUIDs = ['05cb1487-fbe3-42c5-866e-966ada7ed682'];
        $this->assertEquals($instance, $instance->setRoomUUIDs($roomUUIDs));
        $this->assertEquals($roomUUIDs, $instance->getRoomUUIDs());

        $ratePlanUUIDs = ['ca224a10-3b0e-4476-9ed2-1c48aefea656'];
        $this->assertEquals($instance, $instance->setRatePlanUUIDs($ratePlanUUIDs));
        $this->assertEquals($ratePlanUUIDs, $instance->getRatePlanUUIDs());
    }
}
