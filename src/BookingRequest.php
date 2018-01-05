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
    protected $onlyChanged;

    /**
     * @param string $bookingUUID
     *
     * @return $this
     */
    public function setBookingUUID(string $bookingUUID) : BookingRequest
    {
        $this->bookingUUID = $bookingUUID;

        return $this;
    }

    /**
     * @return string
     */
    public function getBookingUUID() :? string
    {
        return $this->bookingUUID;
    }

    /**
     * @param string $hotelUUID
     *
     * @return $this
     */
    public function setHotelUUID(string $hotelUUID) : BookingRequest
    {
        $this->hotelUUID = $hotelUUID;

        return $this;
    }

    /**
     * @return string
     */
    public function getHotelUUID() :? string
    {
        return $this->hotelUUID;
    }

    /**
     * @param \DateTimeInterface $startDate
     *
     * @return $this
     */
    public function setStartDate(\DateTimeInterface $startDate) : BookingRequest
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartDate() :? \DateTimeInterface
    {
        return $this->startDate;
    }

    /**
     * @param \DateTimeInterface $endDate
     *
     * @return $this
     */
    public function setEndDate(\DateTimeInterface $endDate) : BookingRequest
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEndDate() :? \DateTimeInterface
    {
        return $this->endDate;
    }

    /**
     * @param string $dateType
     *
     * @return $this
     */
    public function setDateType(string $dateType) : BookingRequest
    {
        $this->dateType = $dateType;

        return $this;
    }

    /**
     * @return string
     */
    public function getDateType() :? string
    {
        return $this->dateType;
    }

    /**
     * @param bool $onlyChanged
     *
     * @return $this
     */
    public function setOnlyChanged(bool $onlyChanged) : BookingRequest
    {
        $this->onlyChanged = $onlyChanged;

        return $this;
    }

    /**
     * @return bool
     */
    public function getOnlyChanged() :? bool
    {
        return $this->onlyChanged;
    }
}
