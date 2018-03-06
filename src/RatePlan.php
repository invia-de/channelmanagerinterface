<?php

namespace Invia\CMI;

/**
 * Class RatePlan
 */
class RatePlan
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
     * @var string
     */
    protected $rateType;

    /**
     * @var string
     */
    protected $boarding;

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

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
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
     * @param int $release
     *
     * @return $this
     */
    public function setRelease(int $release): self
    {
        $this->release = $release;

        return $this;
    }

    /**
     * @return int
     */
    public function getRelease(): int
    {
        return $this->release;
    }

    /**
     * @param int $minStay
     *
     * @return $this
     */
    public function setMinStay(int $minStay): self
    {
        $this->minStay = $minStay;

        return $this;
    }

    /**
     * @return int
     */
    public function getMinStay(): int
    {
        return $this->minStay;
    }

    /**
     * @param int $maxStay
     *
     * @return $this
     */
    public function setMaxStay(int $maxStay): self
    {
        $this->maxStay = $maxStay;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxStay(): int
    {
        return $this->maxStay;
    }
}
