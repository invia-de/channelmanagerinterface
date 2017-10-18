<?php

namespace Invia\CMI;

/**
 * Class RatePlanSaveRequest
 */
class RatePlanSaveRequest
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
     * @var string
     */
    protected $roomUUID;

    /**
     * @var string
     */
    protected $rateUUID;

    /**
     * @var float
     */
    protected $pricePerPerson;

    /**
     * @var int
     */
    protected $remainingContingent;

    /**
     * @var bool
     */
    protected $stopSell;

    /**
     * @var bool
     */
    protected $closedArrival;

    /**
     * @var bool
     */
    protected $closedDeparture;

    /**
     * @param \DateTime $startDate
     *
     * @return $this
     */
    public function setStartDate(\DateTime $startDate) : RatePlanSaveRequest
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
    public function setEndDate(\DateTime $endDate) : RatePlanSaveRequest
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
    public function setAffectedWeekDays(array $affectedWeekDays) : RatePlanSaveRequest
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
    public function setHotelUUID(string $hotelUUID) : RatePlanSaveRequest
    {
        $this->hotelUUID = $hotelUUID;

        return $this;
    }

    /**
     * @return string
     */
    public function getHotelUUID() : string
    {
        return $this->hotelUUID;
    }

    /**
     * @param string $roomUUID
     *
     * @return $this
     */
    public function setRoomUUID(string $roomUUID) : RatePlanSaveRequest
    {
        $this->roomUUID = $roomUUID;

        return $this;
    }

    /**
     * @return string
     */
    public function getRoomUUID() : string
    {
        return $this->roomUUID;
    }

    /**
     * @param string $rateUUID
     *
     * @return $this
     */
    public function setRateUUID(string $rateUUID) : RatePlanSaveRequest
    {
        $this->rateUUID = $rateUUID;

        return $this;
    }

    /**
     * @return string
     */
    public function getRateUUID() : string
    {
        return $this->rateUUID;
    }


    /**
     * @param float $pricePerPerson
     *
     * @return $this
     */
    public function setPricePerPerson(float $pricePerPerson) : RatePlanSaveRequest
    {
        $this->pricePerPerson = $pricePerPerson;

        return $this;
    }

    /**
     * @return float
     */
    public function getPricePerPerson() :? float
    {
        return $this->pricePerPerson;
    }

    /**
     * @param int $remainingContingent
     *
     * @return $this
     */
    public function setRemainingContingent(int $remainingContingent) : RatePlanSaveRequest
    {
        $this->remainingContingent = $remainingContingent;

        return $this;
    }

    /**
     * @return int
     */
    public function getRemainingContingent() :? int
    {
        return $this->remainingContingent;
    }

    /**
     * @param bool $stopSell
     *
     * @return $this
     */
    public function setStopSell(bool $stopSell) :? RatePlanSaveRequest
    {
        $this->stopSell = $stopSell;

        return $this;
    }

    /**
     * @return bool
     */
    public function hasStopSell() :? bool
    {
        return $this->stopSell;
    }

    /**
     * @param bool $closedArrival
     *
     * @return $this
     */
    public function setClosedArrival(bool $closedArrival) : RatePlanSaveRequest
    {
        $this->closedArrival = $closedArrival;

        return $this;
    }

    /**
     * @return bool
     */
    public function isClosedArrival() :? bool
    {
        return $this->closedArrival;
    }

    /**
     * @param bool $closedDeparture
     *
     * @return $this
     */
    public function setClosedDeparture(bool $closedDeparture) : RatePlanSaveRequest
    {
        $this->closedDeparture = $closedDeparture;

        return $this;
    }

    /**
     * @return bool
     */
    public function isClosedDeparture() :? bool
    {
        return $this->closedDeparture;
    }
}
