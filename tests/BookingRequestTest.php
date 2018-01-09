<?php

namespace Invia\Tests\CMI;

use Invia\CMI\BookingRequest;
use Invia\CMI\ConstantsInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class TestBookingRequest
 *
 * @coversDefaultClass \Invia\CMI\BookingRequest
 */
class BookingRequestTest extends TestCase
{
    /**
     * @covers ::<public>
     */
    public function testSetGet(): void
    {
        $instance = new BookingRequest();

        $bookingUUID = '28c67268-11f9-49e4-8ffe-414fd4078e33';
        $this->assertNull($instance->getBookingUUID());
        $this->assertEquals($instance, $instance->setBookingUUID($bookingUUID));
        $this->assertEquals($bookingUUID, $instance->getBookingUUID());

        $hotelUUID = 'd54d7d6a-ebd2-4e39-9d8f-d6d97d72a442';
        $this->assertNull($instance->getHotelUUID());
        $this->assertEquals($instance, $instance->setHotelUUID($hotelUUID));
        $this->assertEquals($hotelUUID, $instance->getHotelUUID());

        $startDate = new \DateTime();
        $this->assertNull($instance->getStartDate());
        $this->assertEquals($instance, $instance->setStartDate($startDate));
        $this->assertEquals($startDate, $instance->getStartDate());

        $endDate = new \DateTime();
        $this->assertNull($instance->getEndDate());
        $this->assertEquals($instance, $instance->setEndDate($endDate));
        $this->assertEquals($endDate, $instance->getEndDate());

        $dateType = ConstantsInterface::BOOKING_REQUEST_DATETYPE_MODIFIED;
        $this->assertEquals(ConstantsInterface::BOOKING_REQUEST_DATETYPE_BOOKING, $instance->getDateType());
        $this->assertEquals($instance, $instance->setDateType($dateType));
        $this->assertEquals($dateType, $instance->getDateType());

        $onlyChanged = true;
        $this->assertNull($instance->getOnlyChanged());
        $this->assertEquals($instance, $instance->setOnlyChanged($onlyChanged));
        $this->assertEquals($onlyChanged, $instance->getOnlyChanged());
    }
}
