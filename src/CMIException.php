<?php declare(strict_types=1);

namespace Invia\CMI;

/**
 * Class CMIException
 */
class CMIException extends \Exception
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
     * @return CMIError[] The errors
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
}
