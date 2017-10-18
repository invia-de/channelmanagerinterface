<?php

namespace Invia\CMI;

/**
 * Class Room
 */
class Room
{
    /**
     * @var string
     */
    protected $uuid;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $count;

    /**
     * @var int
     */
    protected $defaultOccupancy;

    /**
     * @param string $uuid
     *
     * @return $this
     */
    public function setUUID(string $uuid) : Room
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

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName(string $name) : Room
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param int $count
     *
     * @return $this
     */
    public function setCount(int $count) : Room
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @return int
     */
    public function getCount() : int
    {
        return $this->count;
    }

    /**
     * @param int $defaultOccupancy
     *
     * @return $this
     */
    public function setDefaultOccupancy(int $defaultOccupancy) : Room
    {
        $this->defaultOccupancy = $defaultOccupancy;

        return $this;
    }

    /**
     * @return int
     */
    public function getDefaultOccupancy() : int
    {
        return $this->defaultOccupancy;
    }
}
