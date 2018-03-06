<?php

namespace Invia\Tests\CMI;

use Invia\CMI\BookedRate;
use Invia\CMI\ConstantsInterface;
use Invia\CMI\DailyPrice;
use Invia\CMI\Guest;
use PHPUnit\Framework\TestCase;

/**
 * Class TestBookedRate
 *
 * @coversDefaultClass \Invia\CMI\BookedRate
 */
class BookedRateTest extends TestCase
{
    /**
     * @covers ::<public>
     */
    public function testSetGet(): void
    {
        $instance = new BookedRate();

        $roomUUID = 'c6a7caf1-337f-4ec0-9b37-81f4266c3b1a';
        $this->assertEquals($instance, $instance->setRoomUUID($roomUUID));
        $this->assertEquals($roomUUID, $instance->getRoomUUID());

        $roomName = 'lorem';
        $this->assertEquals($instance, $instance->setRoomName($roomName));
        $this->assertEquals($roomName, $instance->getRoomName());

        $rateUUID = '5c96015b-755e-47c4-a521-e0bb521a2300';
        $this->assertEquals($instance, $instance->setRateUUID($rateUUID));
        $this->assertEquals($rateUUID, $instance->getRateUUID());

        $rateName = 'ipsum';
        $this->assertEquals($instance, $instance->setRateName($rateName));
        $this->assertEquals($rateName, $instance->getRateName());

        $rateType = ConstantsInterface::RATE_TYPE_NET_RATE;
        $this->assertEquals($instance, $instance->setRateType($rateType));
        $this->assertEquals($rateType, $instance->getRateType());

        $encashment = ConstantsInterface::ENCASHMENT_DIRECT;
        $this->assertEquals($instance, $instance->setEncashment($encashment));
        $this->assertEquals($encashment, $instance->getEncashment());

        $boarding = ConstantsInterface::BOARDING_BREAKFAST;
        $this->assertEquals($instance, $instance->setBoarding($boarding));
        $this->assertEquals($boarding, $instance->getBoarding());

        $dailyPrices = [new DailyPrice()];
        $this->assertEquals($instance, $instance->setDailyPrices($dailyPrices));
        $this->assertEquals($dailyPrices, $instance->getDailyPrices());

        $totalPrice = 12.34;
        $this->assertEquals($instance, $instance->setTotalPrice($totalPrice));
        $this->assertEquals($totalPrice, $instance->getTotalPrice());

        $commission = 0.0;
        $this->assertEquals($instance, $instance->setCommission($commission));
        $this->assertEquals($commission, $instance->getCommission());

        $cancellationCosts = 1.23;
        $this->assertNull($instance->getCancellationCosts());
        $this->assertEquals($instance, $instance->setCancellationCosts($cancellationCosts));
        $this->assertEquals($cancellationCosts, $instance->getCancellationCosts());
        $this->assertEquals($instance, $instance->setCancellationCosts(null));
        $this->assertNull($instance->getCancellationCosts());

        $guests = [new Guest()];
        $this->assertEquals($instance, $instance->setGuests($guests));
        $this->assertEquals($guests, $instance->getGuests());

        $status = ConstantsInterface::BOOKING_STATUS_OPEN;
        $this->assertEquals($instance, $instance->setStatus($status));
        $this->assertEquals($status, $instance->getStatus());
    }
}
