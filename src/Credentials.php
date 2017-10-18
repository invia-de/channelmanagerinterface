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
    protected $apiToken;

    /**
     * @param string $apiToken
     *
     * @return $this
     */
    public function setApiToken(string $apiToken) : Credentials
    {
        $this->apiToken = $apiToken;

        return $this;
    }

    /**
     * @return string
     */
    public function getApiToken() : string
    {
        return $this->apiToken;
    }
}
