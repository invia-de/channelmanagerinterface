<?php

namespace Invia\CMI;

/**
 * Interface BookingNotifyInterface
 */
interface BookingNotifyInterface
{
    /**
     * @param Booking $booking
     *
     * @return void
     *
     * @throws BookingNotificationFailedException Throw exception if notification for the given booking is failed
     */
    public function bookingNotify(Booking $booking): void;
}
