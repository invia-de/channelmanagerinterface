<?php

namespace Invia\Tests\CMI;

use Invia\CMI\Booking;
use Invia\CMI\BookingRequest;
use Invia\CMI\FacadeInterface;
use Invia\CMI\Hotel;
use Invia\CMI\Rate;
use Invia\CMI\RatePlan;
use Invia\CMI\RatePlanRequest;
use Invia\CMI\RatePlanSaveRequest;
use Invia\CMI\Room;

/**
 * Class TestFacade
 */
class FacadeDummy implements FacadeInterface
{
    /**
     * @var Room[]
     */
    protected $rooms = [];

    /**
     * @var Rate[]
     */
    protected $rates = [];

    /**
     * @var Booking[]
     */
    protected $bookings = [];

    /**
     * @var RatePlan[]
     */
    protected $ratePlans = [];

    /**
     * @param Hotel $hotel
     *
     * @return Room[]
     */
    public function getRooms(Hotel $hotel): array
    {
        return $this->rooms;
    }

    /**
     * @param Room $room
     *
     * @return FacadeDummy
     */
    public function addRoom(Room $room): FacadeDummy
    {
        $this->rooms[] = $room;

        return $this;
    }

    /**
     * @return FacadeDummy
     */
    public function clearRooms(): FacadeDummy
    {
        $this->rooms = [];

        return $this;
    }

    /**
     * @param Hotel $hotel
     *
     * @return Rate[]
     */
    public function getRates(Hotel $hotel): array
    {
        return $this->rates;
    }

    /**
     * @param Rate $rate
     *
     * @return FacadeDummy
     */
    public function addRate(Rate $rate): FacadeDummy
    {
        $this->rates[] = $rate;

        return $this;
    }

    /**
     * @return FacadeDummy
     */
    public function clearRates(): FacadeDummy
    {
        $this->rates = [];

        return $this;
    }

    /**
     * @param BookingRequest $bookingRequest
     *
     * @return Booking[]
     */
    public function getBookings(BookingRequest $bookingRequest): array
    {
        return $this->bookings;
    }

    /**
     * @param Booking $booking
     *
     * @return FacadeDummy
     */
    public function addBooking(Booking $booking): FacadeDummy
    {
        $this->bookings[] = $booking;

        return $this;
    }

    /**
     * @return FacadeDummy
     */
    public function clearBookings(): FacadeDummy
    {
        $this->bookings = [];

        return $this;
    }

    /**
     * @param RatePlanRequest $ratePlanRequest
     *
     * @return RatePlan[]
     */
    public function getRatePlans(RatePlanRequest $ratePlanRequest): array
    {
        return $this->ratePlans;
    }

    /**
     * @param RatePlanSaveRequest $ratePlanSaveRequest
     *
     * @return RatePlan[]
     */
    public function saveRatePlans(RatePlanSaveRequest $ratePlanSaveRequest): array
    {
        return $this->ratePlans;
    }

    /**
     * @param RatePlan $ratePlan
     *
     * @return FacadeDummy
     */
    public function addRatePlan(RatePlan $ratePlan): FacadeDummy
    {
        $this->ratePlans[] = $ratePlan;

        return $this;
    }

    /**
     * @return FacadeDummy
     */
    public function clearRatePlans(): FacadeDummy
    {
        $this->ratePlans = [];

        return $this;
    }
}
