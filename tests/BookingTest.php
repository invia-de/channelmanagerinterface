<?php declare(strict_types=1);

namespace Invia\Tests\CMI;

use Invia\CMI\BookedRate;
use Invia\CMI\Booking;
use Invia\CMI\ConstantsInterface;
use Invia\CMI\Customer;
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
    public function testSetGet(): void
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

        $createdDateTime = new \DateTime();
        $this->assertEquals($instance, $instance->setCreatedDateTime($createdDateTime));
        $this->assertEquals($createdDateTime, $instance->getCreatedDateTime());

        $updatedDateTime = new \DateTime();
        $this->assertNull($instance->getUpdatedDateTime());
        $this->assertEquals($instance, $instance->setUpdatedDateTime($updatedDateTime));
        $this->assertEquals($updatedDateTime, $instance->getUpdatedDateTime());
        $this->assertEquals($instance, $instance->setUpdatedDateTime(null));
        $this->assertNull($instance->getUpdatedDateTime());

        $bookedRates = [new BookedRate()];
        $this->assertEquals($instance, $instance->setBookedRates($bookedRates));
        $this->assertEquals($bookedRates, $instance->getBookedRates());

        $status = ConstantsInterface::BOOKING_STATUS_OPEN;
        $this->assertEquals($instance, $instance->setStatus($status));
        $this->assertEquals($status, $instance->getStatus());

        $totalBookingPrice = 12.34;
        $this->assertEquals($instance, $instance->setTotalBookingPrice($totalBookingPrice));
        $this->assertEquals($totalBookingPrice, $instance->getTotalBookingPrice());

        $totalCancellationCosts = 1.23;
        $this->assertNull($instance->getTotalCancellationCosts());
        $this->assertEquals($instance, $instance->setTotalCancellationCosts($totalCancellationCosts));
        $this->assertEquals($totalCancellationCosts, $instance->getTotalCancellationCosts());
        $this->assertEquals($instance, $instance->setTotalCancellationCosts(null));
        $this->assertNull($instance->getTotalCancellationCosts());

        $currency = 'EUR';
        $this->assertEquals($instance, $instance->setCurrency($currency));
        $this->assertEquals($currency, $instance->getCurrency());

        $customer = new Customer();
        $this->assertEquals($instance, $instance->setCustomer($customer));
        $this->assertEquals($customer, $instance->getCustomer());

        $comment = 'lorem ipsum';
        $this->assertNull($instance->getComment());
        $this->assertEquals($instance, $instance->setComment($comment));
        $this->assertEquals($comment, $instance->getComment());
        $this->assertEquals($instance, $instance->setComment(null));
        $this->assertNull($instance->getComment());
    }
}
