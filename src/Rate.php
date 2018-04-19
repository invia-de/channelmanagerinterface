<?php

namespace Invia\CMI;

/**
 * Class Rate
 */
class Rate
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
    protected $ratePlanUUID;

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
    protected $minStay;

    /**
     * @var int
     */
    protected $maxStay;

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
    public function setHotelUUID(string $hotelUUID): self
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
     * @param string $roomUUID
     *
     * @return $this
     */
    public function setRoomUUID(string $roomUUID): self
    {
        $this->roomUUID = $roomUUID;

        return $this;
    }

    /**
     * @return string
     */
    public function getRoomUUID(): string
    {
        return $this->roomUUID;
    }

    /**
     * @param string $ratePlanUUID
     *
     * @return $this
     */
    public function setRatePlanUUID(string $ratePlanUUID): self
    {
        $this->ratePlanUUID = $ratePlanUUID;

        return $this;
    }

    /**
     * @return string
     */
    public function getRatePlanUUID(): string
    {
        return $this->ratePlanUUID;
    }

    /**
     * @param \DateTimeInterface $date
     *
     * @return $this
     */
    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDate(): \DateTimeInterface
    {
        return $this->date;
    }

    /**
     * @param float $pricePerPerson
     *
     * @return $this
     */
    public function setPricePerPerson(float $pricePerPerson): self
    {
        $this->pricePerPerson = $pricePerPerson;

        return $this;
    }

    /**
     * @return float
     */
    public function getPricePerPerson(): float
    {
        return $this->pricePerPerson;
    }

    /**
     * @param int $remainingContingent
     *
     * @return $this
     */
    public function setRemainingContingent(int $remainingContingent): self
    {
        $this->remainingContingent = $remainingContingent;

        return $this;
    }

    /**
     * @return int
     */
    public function getRemainingContingent(): int
    {
        return $this->remainingContingent;
    }

    /**
     * @param int $minStay
     *
     * @return $this
     */
    public function setMinStay(int $minStay): self
    {
        $this->minStay = $minStay;

        return $this;
    }

    /**
     * @return int
     */
    public function getMinStay(): int
    {
        return $this->minStay;
    }

    /**
     * @param int $maxStay
     *
     * @return $this
     */
    public function setMaxStay(int $maxStay): self
    {
        $this->maxStay = $maxStay;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxStay(): int
    {
        return $this->maxStay;
    }

    /**
     * @param bool $stopSell
     *
     * @return $this
     */
    public function setStopSell(bool $stopSell): self
    {
        $this->stopSell = $stopSell;

        return $this;
    }

    /**
     * @return bool
     */
    public function hasStopSell(): bool
    {
        return $this->stopSell;
    }

    /**
     * @param bool $closedArrival
     *
     * @return $this
     */
    public function setClosedArrival(bool $closedArrival): self
    {
        $this->closedArrival = $closedArrival;

        return $this;
    }

    /**
     * @return bool
     */
    public function isClosedArrival(): bool
    {
        return $this->closedArrival;
    }

    /**
     * @param bool $closedDeparture
     *
     * @return $this
     */
    public function setClosedDeparture(bool $closedDeparture): self
    {
        $this->closedDeparture = $closedDeparture;

        return $this;
    }

    /**
     * @return bool
     */
    public function isClosedDeparture(): bool
    {
        return $this->closedDeparture;
    }
}
