<?php

namespace Invia\CMI;

/**
 * Interface FacadeInterface
 */
interface FacadeInterface
{
    /**
     * @param RoomRequest $roomRequest
     *
     * @return Room[]
     *
     * @throws InsufficientRightsException
     * @throws InvalidRequestException
     */
    public function getRooms(RoomRequest $roomRequest): array;

    /**
     * @param RateRequest $rateRequest
     *
     * @return Rate[]
     *
     * @throws InsufficientRightsException
     * @throws InvalidRequestException
     */
    public function getRates(RateRequest $rateRequest): array;

    /**
     * @param BookingRequest $bookingRequest
     *
     * @return Booking[]
     *
     * @throws InsufficientRightsException
     * @throws InvalidRequestException
     */
    public function getBookings(BookingRequest $bookingRequest): array;

    /**
     * @param RatePlanRequest $ratePlanRequest
     *
     * @return RatePlan[]
     *
     * @throws InsufficientRightsException
     * @throws InvalidRequestException
     */
    public function getRatePlans(RatePlanRequest $ratePlanRequest): array;

    /**
     * @param RatePlanSaveRequest $ratePlanSaveRequest
     *
     * @return RatePlan[]
     *
     * @throws InsufficientRightsException
     * @throws InvalidRequestException
     */
    public function saveRatePlans(RatePlanSaveRequest $ratePlanSaveRequest): array;
}
