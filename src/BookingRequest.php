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
    protected $onlyChanged = false;

    /**
     * @param string|null $bookingUUID
     *
     * @return $this
     */
    public function setBookingUUID(string $bookingUUID = null): self
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
    public function setStartDate(\DateTimeInterface $startDate = null): self
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
    public function setEndDate(\DateTimeInterface $endDate = null): self
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
     * @param bool $onlyChanged
     *
     * @return $this
     */
    public function setOnlyChanged(bool $onlyChanged): self
    {
        $this->onlyChanged = $onlyChanged;

        return $this;
    }

    /**
     * @return bool
     */
    public function getOnlyChanged(): bool
    {
        return $this->onlyChanged;
    }
}
