<?php

namespace Invia\CMI;

/**
 * Class Guest
 */
class Guest extends Person
{
    /**
     * @var int
     */
    protected $age;

    /**
     * @param int $age
     *
     * @return $this
     */
    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }
}
