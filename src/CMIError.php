<?php declare(strict_types=1);

namespace Invia\CMI;

/**
 * Class CMIError
 */
class CMIError
{
    /**
     * @var int
     */
    protected $code;

    /**
     * @var string
     */
    protected $message;

    /**
     * @param int $code
     *
     * @return $this
     */
    public function setCode($code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @param string $message
     *
     * @return $this
     */
    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}
