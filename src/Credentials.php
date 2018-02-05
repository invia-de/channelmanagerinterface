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
     * @param string|null $authToken
     *
     * @return $this
     */
    public function setAuthToken(string $authToken = null): self
    {
        $this->authToken = $authToken;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuthToken(): ?string
    {
        return $this->authToken;
    }
}
