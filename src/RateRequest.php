<?php

namespace Invia\CMI;

/**
 * Class RateRequest
 */
class RateRequest
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
     * @var array
     */
    protected $roomUUIDs;

    /**
     * @var array
     */
    protected $rateUUIDs;

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
     * @param array $roomUUIDs
     *
     * @return $this
     */
    public function setRoomUUIDs(array $roomUUIDs): self
    {
        $this->roomUUIDs = $roomUUIDs;

        return $this;
    }

    /**
     * @return array
     */
    public function getRoomUUIDs(): array
    {
        return $this->roomUUIDs;
    }

    /**
     * @param array $rateUUIDs
     *
     * @return $this
     */
    public function setRateUUIDs(array $rateUUIDs): self
    {
        $this->rateUUIDs = $rateUUIDs;

        return $this;
    }

    /**
     * @return array
     */
    public function getRateUUIDs(): array
    {
        return $this->rateUUIDs;
    }
}
