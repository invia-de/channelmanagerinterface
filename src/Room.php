<?php declare(strict_types=1);

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
     * @var ExtraOccupancy[]
     */
    protected $extraOccupancies;

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

    /**
     * @param int $defaultOccupancy
     *
     * @return $this
     */
    public function setDefaultOccupancy(int $defaultOccupancy): self
    {
        $this->defaultOccupancy = $defaultOccupancy;

        return $this;
    }

    /**
     * @return int
     */
    public function getDefaultOccupancy(): int
    {
        return $this->defaultOccupancy;
    }

    /**
     * @param ExtraOccupancy[] $extraOccupancies
     *
     * @return $this
     */
    public function setExtraOccupancies(array $extraOccupancies): self
    {
        $this->extraOccupancies = $extraOccupancies;

        return $this;
    }

    /**
     * @return ExtraOccupancy[]
     */
    public function getExtraOccupancies(): array
    {
        return $this->extraOccupancies;
    }
}
