<?php

namespace Invia\Tests\CMI;

use Invia\CMI\BookedRatePlan;
use Invia\CMI\Booking;
use Invia\CMI\ConstantsInterface;
use Invia\CMI\ContactInformation;
use Invia\CMI\Person;
use PHPUnit\Framework\TestCase;

/**
 * Class TestBooking
 *
 * @coversDefaultClass \Invia\CMI\Booking
 */
class BookingTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::<public>
     */
    public function testSetGet() : void
    {
        $instance = new Booking();

        $bookingUUID = 'e8ace5b8-c3ae-43ea-9c47-291a5a55c029';
        $this->assertEquals($instance, $instance->setBookingUUID($bookingUUID));
        $this->assertEquals($bookingUUID, $instance->getBookingUUID());

        $hotelUUID = '755a3749-a990-4cb5-8fee-6a9b7fe09ff0';
        $this->assertEquals($instance, $instance->setHotelUUID($hotelUUID));
        $this->assertEquals($hotelUUID, $instance->getHotelUUID());

        $arrivalDate = new \DateTime();
        $this->assertEquals($instance, $instance->setArrivalDate($arrivalDate));
        $this->assertEquals($arrivalDate, $instance->getArrivalDate());

        $departureDate = new \DateTime();
        $this->assertEquals($instance, $instance->setDepartureDate($departureDate));
        $this->assertEquals($departureDate, $instance->getDepartureDate());

        $bookingDateTime = new \DateTime();
        $this->assertEquals($instance, $instance->setBookingDateTime($bookingDateTime));
        $this->assertEquals($bookingDateTime, $instance->getBookingDateTime());

        $bookedRatePlans = [new BookedRatePlan()];
        $this->assertEquals($instance, $instance->setBookedRatePlans($bookedRatePlans));
        $this->assertEquals($bookedRatePlans, $instance->getBookedRatePlans());

        $status = ConstantsInterface::BOOKING_STATUS_OPEN;
        $this->assertEquals($instance, $instance->setStatus($status));
        $this->assertEquals($status, $instance->getStatus());

        $price = 3.14;
        $this->assertEquals($instance, $instance->setPrice($price));
        $this->assertEquals($price, $instance->getPrice());

        $customer = new Person();
        $this->assertEquals($instance, $instance->setCustomer($customer));
        $this->assertEquals($customer, $instance->getCustomer());

        $contactInformation = new ContactInformation();
        $this->assertEquals($instance, $instance->setContactInformation($contactInformation));
        $this->assertEquals($contactInformation, $instance->getContactInformation());

        $pax = [new Person(), new Person()];
        $this->assertEquals($instance, $instance->setPax($pax));
        $this->assertEquals($pax, $instance->getPax());

        $comment = 'lorem ipsum';
        $this->assertNull($instance->getComment());
        $this->assertEquals($instance, $instance->setComment($comment));
        $this->assertEquals($comment, $instance->getComment());
    }
}
