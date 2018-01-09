<?php

namespace Invia\CMI;

/**
 * Class BookedRatePlan
 */
class BookedRatePlan
{
    /**
     * @var string
     */
    protected $roomUUID;

    /**
     * @var string
     */
    protected $rateUUID;

    /**
     * @var int
     */
    protected $count;

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
     * @param int $count
     *
     * @return $this
     */
    public function setCount(int $count): self
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
}
