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
     * @return $this
     */
    public function setUUID(string $uuid): self
    {
        $this->uuid = $uuid;

        return $this;
    }

    /**
     * @return string
     */
    public function getUUID(): string
    {
        return $this->uuid;
    }
}
