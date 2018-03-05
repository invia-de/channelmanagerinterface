<?php

namespace Invia\CMI;

/**
 * Interface FacadeInterface
 */
interface FacadeInterface
{
    /**
     * @param HotelRequest $hotelRequest
     *
     * @return Hotel
     *
     * @throws InterfaceException
     */
    public function getHotel(HotelRequest $hotelRequest): Hotel;

    /**
     * @param RoomRequest $roomRequest
     *
     * @return Room[]
     *
     * @throws InterfaceException
     */
    public function getRooms(RoomRequest $roomRequest): array;

    /**
     * @param RatePlanRequest $rateRequest
     *
     * @return RatePlan[]
     *
     * @throws InterfaceException
     */
    public function getRatePlans(RatePlanRequest $rateRequest): array;

    /**
     * @param BookingRequest $bookingRequest
     *
     * @return Booking[]
     *
     * @throws InterfaceException
     */
    public function getBookings(BookingRequest $bookingRequest): array;

    /**
     * @param RateRequest $rateRequest
     *
     * @return Rate[]
     *
     * @throws InterfaceException
     */
    public function getRates(RateRequest $rateRequest): array;

    /**
     * @param RateSaveRequest $rateSaveRequest
     *
     * @return Rate[]
     *
     * @throws InterfaceException
     */
    public function saveRates(RateSaveRequest $rateSaveRequest): array;
}
