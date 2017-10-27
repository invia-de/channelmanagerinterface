<?php

namespace Invia\CMI;

/**
 * Class ContactInformation
 */
class ContactInformation
{
    /**
     * @var string
     */
    protected $streetAndNumber;

    /**
     * @var string
     */
    protected $postalCode;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $country;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $phone;

    /**
     * @return string
     */
    public function getStreetAndNumber() : string
    {
        return $this->streetAndNumber;
    }

    /**
     * @param string $streetAndNumber
     *
     * @return ContactInformation
     */
    public function setStreetAndNumber(string $streetAndNumber) : ContactInformation
    {
        $this->streetAndNumber = $streetAndNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     *
     * @return ContactInformation
     */
    public function setPostalCode(string $postalCode) : ContactInformation
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }

    /**
     * @param string $city
     *
     * @return ContactInformation
     */
    public function setCity(string $city) : ContactInformation
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry() : string
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return ContactInformation
     */
    public function setCountry(string $country) : ContactInformation
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return ContactInformation
     */
    public function setEmail(string $email) : ContactInformation
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhone() :? string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     *
     * @return ContactInformation
     */
    public function setPhone(string $phone) : ContactInformation
    {
        $this->phone = $phone;

        return $this;
    }
}
