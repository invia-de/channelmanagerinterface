<?php declare(strict_types=1);

namespace Invia\CMI;

/**
 * Class Credentials
 */
class Credentials
{
    /**
     * @var string|null
     */
    protected $authToken;

    /**
     * @param string|null $authToken
     *
     * @return $this
     */
    public function setAuthToken(?string $authToken): self
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
