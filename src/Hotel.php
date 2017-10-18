<?php

namespace Invia\CMI;

/**
 * Class Hotel
 */
class Hotel
{
    /**
     * @var string
     */
    protected $uuid;

    /**
     * @param string $uuid
     *
     * @return self
     */
    public function setUUID(string $uuid) : Hotel
    {
        $this->uuid = $uuid;

        return $this;
    }

    /**
     * @return string
     */
    public function getUUID() : string
    {
        return $this->uuid;
    }
}
