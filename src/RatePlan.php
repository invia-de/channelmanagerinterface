<?php

namespace Invia\CMI;

/**
 * Class RatePlan
 */
class RatePlan
{
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
     * @var \DateTimeInterface
     */
    protected $date;

    /**
     * @var float
     */
    protected $pricePerPerson;

    /**
     * @var int
     */
    protected $remainingContingent;

    /**
     * @var int
     */
    protected $booked;

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
     * @param string $hotelUUID
     *
     * @return $this
     */
    public function setHotelUUID(string $hotelUUID) : RatePlan
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
    public function setRoomUUID(string $roomUUID) : RatePlan
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
    public function setRateUUID(string $rateUUID) : RatePlan
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
     * @param \DateTimeInterface $date
     *
     * @return $this
     */
    public function setDate(\DateTimeInterface $date) : RatePlan
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDate() : \DateTimeInterface
    {
        return $this->date;
    }

    /**
     * @param float $pricePerPerson
     *
     * @return $this
     */
    public function setPricePerPerson(float $pricePerPerson) : RatePlan
    {
        $this->pricePerPerson = $pricePerPerson;

        return $this;
    }

    /**
     * @return float
     */
    public function getPricePerPerson() : float
    {
        return $this->pricePerPerson;
    }

    /**
     * @param int $remainingContingent
     *
     * @return $this
     */
    public function setRemainingContingent(int $remainingContingent) : RatePlan
    {
        $this->remainingContingent = $remainingContingent;

        return $this;
    }

    /**
     * @return int
     */
    public function getRemainingContingent() : int
    {
        return $this->remainingContingent;
    }

    /**
     * @param int $booked
     *
     * @return $this
     */
    public function setBooked(int $booked) : RatePlan
    {
        $this->booked = $booked;

        return $this;
    }

    /**
     * @return int
     */
    public function getBooked() : int
    {
        return $this->booked;
    }

    /**
     * @param bool $stopSell
     *
     * @return $this
     */
    public function setStopSell(bool $stopSell) : RatePlan
    {
        $this->stopSell = $stopSell;

        return $this;
    }

    /**
     * @return bool
     */
    public function hasStopSell() : bool
    {
        return $this->stopSell;
    }

    /**
     * @param bool $closedArrival
     *
     * @return $this
     */
    public function setClosedArrival(bool $closedArrival) : RatePlan
    {
        $this->closedArrival = $closedArrival;

        return $this;
    }

    /**
     * @return bool
     */
    public function isClosedArrival() : bool
    {
        return $this->closedArrival;
    }

    /**
     * @param bool $closedDeparture
     *
     * @return $this
     */
    public function setClosedDeparture(bool $closedDeparture) : RatePlan
    {
        $this->closedDeparture = $closedDeparture;

        return $this;
    }

    /**
     * @return bool
     */
    public function isClosedDeparture() : bool
    {
        return $this->closedDeparture;
    }
}
