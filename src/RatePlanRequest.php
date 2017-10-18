<?php

namespace Invia\CMI;

/**
 * Class RatePlanRequest
 */
class RatePlanRequest
{
    /**
     * @var \DateTime
     */
    protected $startDate;

    /**
     * @var \DateTime
     */
    protected $endDate;

    /**
     * @var array
     */
    protected $affectedWeekDays = ConstantsInterface::AFFECTED_WEEK_DAYS_ALL;

    /**
     * @var string
     */
    protected $hotelUUID;

    /**
     * @var array
     */
    protected $roomUUIDs;

    /**
     * @var array
     */
    protected $rateUUIDs;

    /**
     * @param \DateTime $startDate
     *
     * @return $this
     */
    public function setStartDate(\DateTime $startDate) : RatePlanRequest
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate() : \DateTime
    {
        return $this->startDate;
    }

    /**
     * @param \DateTime $endDate
     *
     * @return $this
     */
    public function setEndDate(\DateTime $endDate) : RatePlanRequest
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate() : \DateTime
    {
        return $this->endDate;
    }

    /**
     * @param array $affectedWeekDays
     *
     * @return $this
     */
    public function setAffectedWeekDays(array $affectedWeekDays) : RatePlanRequest
    {
        $this->affectedWeekDays = $affectedWeekDays;

        return $this;
    }

    /**
     * @return array
     */
    public function getAffectedWeekDays() : array
    {
        return $this->affectedWeekDays;
    }

    /**
     * @param string $hotelUUID
     *
     * @return $this
     */
    public function setHotelUUID(string $hotelUUID) : RatePlanRequest
    {
        $this->hotelUUID = $hotelUUID;

        return $this;
    }

    /**
     * @return string
     */
    public function getHotelUUID(): string
    {
        return $this->hotelUUID;
    }

    /**
     * @param array $roomUUIDs
     *
     * @return $this
     */
    public function setRoomUUIDs(array $roomUUIDs) : RatePlanRequest
    {
        $this->roomUUIDs = $roomUUIDs;

        return $this;
    }

    /**
     * @return array
     */
    public function getRoomUUIDs() : array
    {
        return $this->roomUUIDs;
    }

    /**
     * @param array $rateUUIDs
     *
     * @return $this
     */
    public function setRateUUIDs(array $rateUUIDs) : RatePlanRequest
    {
        $this->rateUUIDs = $rateUUIDs;

        return $this;
    }

    /**
     * @return array
     */
    public function getRateUUIDs() : array
    {
        return $this->rateUUIDs;
    }
}
