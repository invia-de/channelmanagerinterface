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
    protected $createdDateTime;

    /**
     * @var \DateTimeInterface
     */
    protected $updatedDateTime;

    /**
     * @var BookedRate[]
     */
    protected $bookedRates;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var float
     */
    protected $totalBookingPrice;

    /**
     * @var float|null
     */
    protected $totalCancellationCosts;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var Customer
     */
    protected $customer;

    /**
     * @var string|null
     */
    protected $comment;

    /**
     * @param string $bookingUUID
     *
     * @return $this
     */
    public function setBookingUUID(string $bookingUUID): self
    {
        $this->bookingUUID = $bookingUUID;

        return $this;
    }

    /**
     * @return string
     */
    public function getBookingUUID(): string
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
     * @param \DateTimeInterface $arrivalDate
     *
     * @return $this
     */
    public function setArrivalDate(\DateTimeInterface $arrivalDate): self
    {
        $this->arrivalDate = $arrivalDate;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getArrivalDate(): \DateTimeInterface
    {
        return $this->arrivalDate;
    }

    /**
     * @param \DateTimeInterface $departureDate
     *
     * @return $this
     */
    public function setDepartureDate(\DateTimeInterface $departureDate): self
    {
        $this->departureDate = $departureDate;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDepartureDate(): \DateTimeInterface
    {
        return $this->departureDate;
    }

    /**
     * @param \DateTimeInterface $createdDateTime
     *
     * @return $this
     */
    public function setCreatedDateTime(\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedDateTime(): \DateTimeInterface
    {
        return $this->createdDateTime;
    }

    /**
     * @param \DateTimeInterface $updatedDateTime
     *
     * @return $this
     */
    public function setUpdatedDateTime(\DateTimeInterface $updatedDateTime): self
    {
        $this->updatedDateTime = $updatedDateTime;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getUpdatedDateTime(): \DateTimeInterface
    {
        return $this->updatedDateTime;
    }

    /**
     * @param BookedRate[] $bookedRates
     *
     * @return $this
     */
    public function setBookedRates(array $bookedRates): self
    {
        $this->bookedRates = $bookedRates;

        return $this;
    }

    /**
     * @return BookedRate[]
     */
    public function getBookedRates(): array
    {
        return $this->bookedRates;
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param float $totalBookingPrice
     *
     * @return $this
     */
    public function setTotalBookingPrice(float $totalBookingPrice): self
    {
        $this->totalBookingPrice = $totalBookingPrice;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalBookingPrice(): float
    {
        return $this->totalBookingPrice;
    }

    /**
     * @param float|null $totalCancellationCosts
     *
     * @return $this
     */
    public function setTotalCancellationCosts(?float $totalCancellationCosts): self
    {
        $this->totalCancellationCosts = $totalCancellationCosts;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTotalCancellationCosts(): ?float
    {
        return $this->totalCancellationCosts;
    }

    /**
     * @param string $currency
     *
     * @return $this
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param Person $customer
     *
     * @return $this
     */
    public function setCustomer(Person $customer): self
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @return Customer
     */
    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    /**
     * @param string|null $comment
     *
     * @return $this
     */
    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
}
