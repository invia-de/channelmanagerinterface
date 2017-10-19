<?php

namespace Invia\CMI;

/**
 * Class Credentials
 */
class Credentials
{
    /**
     * @var string
     */
    protected $authToken;

    /**
     * @param string $apiToken
     *
     * @return $this
     */
    public function setAuthToken(string $apiToken) : Credentials
    {
        $this->authToken = $apiToken;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthToken() :? string
    {
        return $this->authToken;
    }
}
