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
     * @throws BookingNotificationFailedException Is thrown when the notification for the given booking failed
     */
    public function bookingNotify(Booking $booking): void;
}
