<?php

namespace Invia\CMI;

/**
 * Class ExtraOccupancy
 */
class ExtraOccupancy
{
    /**
     * @var int
     */
    protected $adults;

    /**
     * @var int
     */
    protected $children;

    /**
     * @var int
     */
    protected $infants;

    /**
     * @param int $adults
     *
     * @return $this
     */
    public function setAdults(int $adults): self
    {
        $this->adults = $adults;

        return $this;
    }

    /**
     * @return int
     */
    public function getAdults(): int
    {
        return $this->adults;
    }

    /**
     * @param int $children
     * @return $this
     */
    public function setChildren(int $children): self
    {
        $this->children = $children;

        return $this;
    }

    /**
     * @return int
     */
    public function getChildren(): int
    {
        return $this->children;
    }

    /**
     * @param int $infants
     * @return $this
     */
    public function setInfants(int $infants): ExtraOccupancy
    {
        $this->infants = $infants;

        return $this;
    }

    /**
     * @return int
     */
    public function getInfants(): int
    {
        return $this->infants;
    }
}
