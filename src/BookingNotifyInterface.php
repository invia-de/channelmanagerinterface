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
     * @return bool
     */
    public function bookingNotify(Booking $booking) : bool;
}
