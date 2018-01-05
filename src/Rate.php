<?php

namespace Invia\CMI;

/**
 * Class Rate
 */
class Rate
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
    protected $release;

    /**
     * @var int
     */
    protected $minStay;

    /**
     * @var int
     */
    protected $maxStay;

    /**
     * @param string $uuid
     *
     * @return $this
     */
    public function setUUID(string $uuid) : Rate
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
    public function setName(string $name) : Rate
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
     * @param int $release
     *
     * @return $this
     */
    public function setRelease(int $release) : Rate
    {
        $this->release = $release;

        return $this;
    }

    /**
     * @return int
     */
    public function getRelease() : int
    {
        return $this->release;
    }

    /**
     * @param int $minStay
     *
     * @return $this
     */
    public function setMinStay(int $minStay) : Rate
    {
        $this->minStay = $minStay;

        return $this;
    }

    /**
     * @return int
     */
    public function getMinStay() : int
    {
        return $this->minStay;
    }

    /**
     * @param int $maxStay
     *
     * @return $this
     */
    public function setMaxStay(int $maxStay) : Rate
    {
        $this->maxStay = $maxStay;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxStay() : int
    {
        return $this->maxStay;
    }
}
