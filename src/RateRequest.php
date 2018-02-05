<?php

namespace Invia\CMI;

/**
 * Class RateRequest
 */
class RateRequest
{
    /**
     * @var string
     */
    protected $hotelUUID;

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
}
