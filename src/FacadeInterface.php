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
     * @throws CMIException
     */
    public function getHotel(HotelRequest $hotelRequest): Hotel;

    /**
     * @param RoomRequest $roomRequest
     *
     * @return Room[]
     *
     * @throws CMIException
     */
    public function getRooms(RoomRequest $roomRequest): array;

    /**
     * @param RatePlanRequest $ratePlanRequest
     *
     * @return RatePlan[]
     *
     * @throws CMIException
     */
    public function getRatePlans(RatePlanRequest $ratePlanRequest): array;

    /**
     * @param BookingRequest $bookingRequest
     *
     * @return Booking[]
     *
     * @throws CMIException
     */
    public function getBookings(BookingRequest $bookingRequest): array;

    /**
     * @param RateRequest $rateRequest
     *
     * @return Rate[]
     *
     * @throws CMIException
     */
    public function getRates(RateRequest $rateRequest): array;

    /**
     * @param RateSaveRequest $rateSaveRequest
     *
     * @return Rate[]
     *
     * @throws CMIException
     */
    public function saveRates(RateSaveRequest $rateSaveRequest): array;
}
