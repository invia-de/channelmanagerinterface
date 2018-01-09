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
     * @param string $authToken
     *
     * @return $this
     */
    public function setAuthToken(string $authToken): self
    {
        $this->authToken = $authToken;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthToken(): ?string
    {
        return $this->authToken;
    }
}
