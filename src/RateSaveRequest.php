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
     * @var float|null
     */
    protected $pricePerChild;

    /**
     * @var float|null
     */
    protected $pricePerInfant;

    /**
     * @var int
     */
    protected $remainingContingent = 0;

    /**
     * @var int
     */
    protected $minStay = 0;

    /**
     * @var int
     */
    protected $maxStay = 0;

    /**
     * @var bool
     */
    protected $stopSell = false;

    /**
     * @var bool
     */
    protected $closedArrival = false;

    /**
     * @var bool
     */
    protected $closedDeparture = false;

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
     * @param float|null $pricePerChild
     *
     * @return $this
     */
    public function setPricePerChild(?float $pricePerChild): self
    {
        $this->pricePerChild = $pricePerChild;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPricePerChild(): ?float
    {
        return $this->pricePerChild;
    }

    /**
     * @param float|null $pricePerInfant
     *
     * @return $this
     */
    public function setPricePerInfant(?float $pricePerInfant): self
    {
        $this->pricePerInfant = $pricePerInfant;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPricePerInfant(): ?float
    {
        return $this->pricePerInfant;
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
