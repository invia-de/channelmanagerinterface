<?php

namespace Invia\CMI;

/**
 * Class BookedRate
 */
class BookedRate
{
    /**
     * @var string
     */
    protected $roomUUID;

    /**
     * @var string
     */
    protected $roomName;

    /**
     * @var string
     */
    protected $rateUUID;

    /**
     * @var string
     */
    protected $rateName;

    /**
     * @var string
     */
    protected $rateType;

    /**
     * @var string
     */
    protected $encashment;

    /**
     * @var string
     */
    protected $boarding;

    /**
     * @var DailyPrice[]
     */
    protected $dailyPrices;

    /**
     * @var float
     */
    protected $totalPrice;

    /**
     * @var float
     */
    protected $commission;

    /**
     * @var float|null
     */
    protected $cancellationCosts;

    /**
     * @var Guest[]
     */
    protected $guests;

    /**
     * @var string
     */
    protected $status;

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
     * @param string $roomName
     *
     * @return $this
     */
    public function setRoomName(string $roomName): self
    {
        $this->roomName = $roomName;

        return $this;
    }

    /**
     * @return string
     */
    public function getRoomName(): string
    {
        return $this->roomName;
    }

    /**
     * @param string $rateUUID
     *
     * @return $this
     */
    public function setRateUUID(string $rateUUID): self
    {
        $this->rateUUID = $rateUUID;

        return $this;
    }

    /**
     * @return string
     */
    public function getRateUUID(): string
    {
        return $this->rateUUID;
    }

    /**
     * @param string $rateName
     *
     * @return $this
     */
    public function setRateName(string $rateName): self
    {
        $this->rateName = $rateName;

        return $this;
    }

    /**
     * @return string
     */
    public function getRateName(): string
    {
        return $this->rateName;
    }

    /**
     * @param string $rateType
     *
     * @return $this
     */
    public function setRateType(string $rateType): self
    {
        $this->rateType = $rateType;

        return $this;
    }

    /**
     * @return string
     */
    public function getRateType(): string
    {
        return $this->rateType;
    }

    /**
     * @param string $encashment
     *
     * @return $this
     */
    public function setEncashment(string $encashment): self
    {
        $this->encashment = $encashment;

        return $this;
    }

    /**
     * @return string
     */
    public function getEncashment(): string
    {
        return $this->encashment;
    }

    /**
     * @param string $boarding
     *
     * @return $this
     */
    public function setBoarding(string $boarding): self
    {
        $this->boarding = $boarding;

        return $this;
    }

    /**
     * @return string
     */
    public function getBoarding(): string
    {
        return $this->boarding;
    }

    /**
     * @param DailyPrice[] $dailyPrices
     *
     * @return $this
     */
    public function setDailyPrices(array $dailyPrices): self
    {
        $this->dailyPrices = $dailyPrices;

        return $this;
    }

    /**
     * @return DailyPrice[]
     */
    public function getDailyPrices(): array
    {
        return $this->dailyPrices;
    }

    /**
     * @param float $totalPrice
     *
     * @return $this
     */
    public function setTotalPrice(float $totalPrice): self
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPrice(): float
    {
        return $this->totalPrice;
    }

    /**
     * @return float
     */
    public function getCommission(): float
    {
        return $this->commission;
    }

    /**
     * @param float $commission
     *
     * @return $this
     */
    public function setCommission(float $commission): self
    {
        $this->commission = $commission;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getCancellationCosts(): ?float
    {
        return $this->cancellationCosts;
    }

    /**
     * @param float|null $cancellationCosts
     *
     * @return $this
     */
    public function setCancellationCosts(?float $cancellationCosts): self
    {
        $this->cancellationCosts = $cancellationCosts;

        return $this;
    }

    /**
     * @return Guest[]
     */
    public function getGuests(): array
    {
        return $this->guests;
    }

    /**
     * @param Guest[] $guests
     *
     * @return $this
     */
    public function setGuests(array $guests): self
    {
        $this->guests = $guests;

        return $this;
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
}
