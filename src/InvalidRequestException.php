<?php

namespace Invia\CMI;

/**
 * Class InvalidRequestException
 */
class InvalidRequestException extends \Exception
{
    protected const MESSAGE = 'The given request was invalid.';

    /**
     * @var array
     */
    protected $errors;

    /**
     * @param array $errors
     */
    public function __construct(array $errors = [])
    {
        parent::__construct(self::MESSAGE);

        $this->errors = $errors;
    }

    /**
     * Get the errors for this exception. The error will have the following format:
     *
     * <code>
     * $errors = [
     *     [
     *         'key'     => 'bookingRequest',
     *         'message' => 'Either the startDate and the endDate or the bookingUUID must be set.',
     *     ],
     *     [
     *         'key'     => 'dateType',
     *         'message' => 'The dateType is not a valid date type.',
     *     ],
     * ];
     * </code>
     *
     * @return array The errors array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
}
