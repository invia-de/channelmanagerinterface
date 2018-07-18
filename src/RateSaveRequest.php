<?php

namespace Invia\CMI;

/**
 * Class RateSaveRequest
 */
class RateSaveRequest
{
    /**
     * @var \DateTimeInterface
     */
    protected $startDate;

    /**
     * @var \DateTimeInterface
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
    protected $ratePlanUUID;

    /**
     * @var float|null
     */
    protected $pricePerPerson;

    /**
     * @var int|null
     */
    protected $remainingContingent;

    /**
     * @var int|null
     */
    protected $minStay;

    /**
     * @var int|null
     */
    protected $maxStay;

    /**
     * @var bool|null
     */
    protected $stopSell;

    /**
     * @var bool|null
     */
    protected $closedArrival;

    /**
     * @var bool|null
     */
    protected $closedDeparture;

    /**
     * @param \DateTimeInterface $startDate
     *
     * @return $this
     */
    public function setStartDate(\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartDate(): \DateTimeInterface
    {
        return $this->startDate;
    }

    /**
     * @param \DateTimeInterface $endDate
     *
     * @return $this
     */
    public function setEndDate(\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEndDate(): \DateTimeInterface
    {
        return $this->endDate;
    }

    /**
     * @param array $affectedWeekDays
     *
     * @return $this
     */
    public function setAffectedWeekDays(array $affectedWeekDays): self
    {
        $this->affectedWeekDays = $affectedWeekDays;

        return $this;
    }

    /**
     * @return array
     */
    public function getAffectedWeekDays(): array
    {
        return $this->affectedWeekDays;
    }

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
     * @param float|null $pricePerPerson
     *
     * @return $this
     */
    public function setPricePerPerson(?float $pricePerPerson): self
    {
        $this->pricePerPerson = $pricePerPerson;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPricePerPerson(): ?float
    {
        return $this->pricePerPerson;
    }

    /**
     * @param int|null $remainingContingent
     *
     * @return $this
     */
    public function setRemainingContingent(?int $remainingContingent): self
    {
        $this->remainingContingent = $remainingContingent;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getRemainingContingent(): ?int
    {
        return $this->remainingContingent;
    }

    /**
     * @param int|null $minStay
     *
     * @return $this
     */
    public function setMinStay(?int $minStay): self
    {
        $this->minStay = $minStay;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMinStay(): ?int
    {
        return $this->minStay;
    }

    /**
     * @param int|null $maxStay
     *
     * @return $this
     */
    public function setMaxStay(?int $maxStay): self
    {
        $this->maxStay = $maxStay;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMaxStay(): ?int
    {
        return $this->maxStay;
    }

    /**
     * @param bool|null $stopSell
     *
     * @return $this
     */
    public function setStopSell(?bool $stopSell): self
    {
        $this->stopSell = $stopSell;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function hasStopSell(): ?bool
    {
        return $this->stopSell;
    }

    /**
     * @param bool|null $closedArrival
     *
     * @return $this
     */
    public function setClosedArrival(?bool $closedArrival): self
    {
        $this->closedArrival = $closedArrival;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function isClosedArrival(): ?bool
    {
        return $this->closedArrival;
    }

    /**
     * @param bool|null $closedDeparture
     *
     * @return $this
     */
    public function setClosedDeparture(?bool $closedDeparture): self
    {
        $this->closedDeparture = $closedDeparture;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function isClosedDeparture(): ?bool
    {
        return $this->closedDeparture;
    }
}
