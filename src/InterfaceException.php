<?php

namespace Invia\CMI;

/**
 * Class InterfaceException
 */
class InterfaceException extends \Exception
{
    /**
     * @var array
     */
    protected $errors;

    /**
     * @param string $message
     * @param int    $code
     * @param array  $errors
     */
    public function __construct(string $message, int $code, array $errors = [])
    {
        parent::__construct($message, $code);

        $this->errors = $errors;
    }

    /**
     * Get the errors for this exception. The error will have the following format:
     *
     * @return InterfaceError[] The errors
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
}
