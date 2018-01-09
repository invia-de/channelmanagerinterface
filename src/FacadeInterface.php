<?php

namespace Invia\CMI;

/**
 * Interface FacadeInterface
 */
interface FacadeInterface
{
    /**
     * @param Hotel $hotel
     *
     * @return Room[]
     */
    public function getRooms(Hotel $hotel): array;

    /**
     * @param Hotel $hotel
     *
     * @return Rate[]
     */
    public function getRates(Hotel $hotel): array;

    /**
     * @param BookingRequest $bookingRequest
     *
     * @return Booking[]
     */
    public function getBookings(BookingRequest $bookingRequest): array;

    /**
     * @param RatePlanRequest $ratePlanRequest
     *
     * @return RatePlan[]
     */
    public function getRatePlans(RatePlanRequest $ratePlanRequest): array;

    /**
     * @param RatePlanSaveRequest $ratePlanSaveRequest
     *
     * @return RatePlan[]
     */
    public function saveRatePlans(RatePlanSaveRequest $ratePlanSaveRequest): array;
}
