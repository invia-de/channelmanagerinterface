<?php

namespace Invia\CMI;

/**
 * Class Booking
 */
class Booking
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
    protected $arrivalDate;

    /**
     * @var \DateTimeInterface
     */
    protected $departureDate;

    /**
     * @var \DateTimeInterface
     */
    protected $bookingDateTime;

    /**
     * @var BookedRatePlan[]
     */
    protected $bookedRatePlans;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var float
     */
    protected $price;

    /**
     * @var Person
     */
    protected $customer;

    /**
     * @var ContactInformation
     */
    protected $contactInformation;

    /**
     * @var Person[]
     */
    protected $pax;

    /**
     * @var string
     */
    protected $comment;

    /**
     * @param string $bookingUUID
     *
     * @return $this
     */
    public function setBookingUUID(string $bookingUUID) : Booking
    {
        $this->bookingUUID = $bookingUUID;

        return $this;
    }

    /**
     * @return string
     */
    public function getBookingUUID() : string
    {
        return $this->bookingUUID;
    }

    /**
     * @param string $hotelUUID
     *
     * @return $this
     */
    public function setHotelUUID(string $hotelUUID) : Booking
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
     * @param \DateTimeInterface $arrivalDate
     *
     * @return $this
     */
    public function setArrivalDate(\DateTimeInterface $arrivalDate) : Booking
    {
        $this->arrivalDate = $arrivalDate;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getArrivalDate() : \DateTimeInterface
    {
        return $this->arrivalDate;
    }

    /**
     * @param \DateTimeInterface $departureDate
     *
     * @return $this
     */
    public function setDepartureDate(\DateTimeInterface $departureDate) : Booking
    {
        $this->departureDate = $departureDate;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDepartureDate() : \DateTimeInterface
    {
        return $this->departureDate;
    }

    /**
     * @param \DateTimeInterface $bookingDateTime
     *
     * @return $this
     */
    public function setBookingDateTime(\DateTimeInterface $bookingDateTime) : Booking
    {
        $this->bookingDateTime = $bookingDateTime;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getBookingDateTime() : \DateTimeInterface
    {
        return $this->bookingDateTime;
    }

    /**
     * @param BookedRatePlan[] $bookedRatePlans
     *
     * @return $this
     */
    public function setBookedRatePlans(array $bookedRatePlans) : Booking
    {
        $this->bookedRatePlans = $bookedRatePlans;

        return $this;
    }

    /**
     * @return BookedRatePlan[]
     */
    public function getBookedRatePlans() : array
    {
        return $this->bookedRatePlans;
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function setStatus(string $status) : Booking
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }

    /**
     * @param float $price
     *
     * @return $this
     */
    public function setPrice(float $price) : Booking
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrice() : float
    {
        return $this->price;
    }

    /**
     * @param Person $customer
     *
     * @return $this
     */
    public function setCustomer(Person $customer) : Booking
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @return Person
     */
    public function getCustomer() : Person
    {
        return $this->customer;
    }

    /**
     * @param ContactInformation $contactInformation
     *
     * @return $this
     */
    public function setContactInformation(ContactInformation $contactInformation) : Booking
    {
        $this->contactInformation = $contactInformation;

        return $this;
    }

    /**
     * @return ContactInformation
     */
    public function getContactInformation() : ContactInformation
    {
        return $this->contactInformation;
    }

    /**
     * @param Person[] $pax
     *
     * @return $this
     */
    public function setPax(array $pax) : Booking
    {
        $this->pax = $pax;

        return $this;
    }

    /**
     * @return Person[]
     */
    public function getPax() : array
    {
        return $this->pax;
    }

    /**
     * @param string $comment
     *
     * @return $this
     */
    public function setComment(string $comment) : Booking
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * @return string
     */
    public function getComment() :? string
    {
        return $this->comment;
    }
}
