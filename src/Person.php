<?php

namespace Invia\CMI;

/**
 * Class Person
 */
class Person
{
    /**
     * @var string
     */
    protected $gender;

    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @var int
     */
    protected $age;

    /**
     * @param string $gender
     *
     * @return $this
     */
    public function setGender(string $gender) : Person
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * @return string
     */
    public function getGender() : string
    {
        return $this->gender;
    }

    /**
     * @param string $firstName
     *
     * @return $this
     */
    public function setFirstName(string $firstName) : Person
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName() : string
    {
        return $this->firstName;
    }

    /**
     * @param string $lastName
     *
     * @return $this
     */
    public function setLastName(string $lastName) : Person
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastName() : string
    {
        return $this->lastName;
    }

    /**
     * @param int $age
     *
     * @return $this
     */
    public function setAge(int $age) : Person
    {
        $this->age = $age;

        return $this;
    }

    /**
     * @return int
     */
    public function getAge() : int
    {
        return $this->age;
    }
}
