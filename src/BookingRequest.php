<?php

namespace Invia\CMI;

/**
 * Class BookingRequest
 */
class BookingRequest
{
    /**
     * @var string
     */
    protected $bookingUUID;

    /**
     * @var string
     */
    protected $hotelUUID;

    /**
     * @var \DateTimeInterface
     */
    protected $startDate;

    /**
     * @var \DateTimeInterface
     */
    protected $endDate;

    /**
     * @var string
     */
    protected $dateType = ConstantsInterface::BOOKING_REQUEST_DATETYPE_BOOKING;

    /**
     * @var bool
     */
    protected $onlyUpdated = false;

    /**
     * @param string|null $bookingUUID
     *
     * @return $this
     */
    public function setBookingUUID(?string $bookingUUID): self
    {
        $this->bookingUUID = $bookingUUID;

        return $this;
    }

    /**
     * @return string
     */
    public function getBookingUUID(): ?string
    {
        return $this->bookingUUID;
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
     * @param \DateTimeInterface $startDate
     *
     * @return $this
     */
    public function setStartDate(?\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    /**
     * @param \DateTimeInterface $endDate
     *
     * @return $this
     */
    public function setEndDate(?\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    /**
     * @param string $dateType
     *
     * @return $this
     */
    public function setDateType(string $dateType): self
    {
        $this->dateType = $dateType;

        return $this;
    }

    /**
     * @return string
     */
    public function getDateType(): string
    {
        return $this->dateType;
    }

    /**
     * @param bool $onlyUpdated
     *
     * @return $this
     */
    public function setOnlyUpdated(bool $onlyUpdated): self
    {
        $this->onlyUpdated = $onlyUpdated;

        return $this;
    }

    /**
     * @return bool
     */
    public function getOnlyUpdated(): bool
    {
        return $this->onlyUpdated;
    }
}
