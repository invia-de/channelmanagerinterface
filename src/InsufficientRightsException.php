<?php

namespace Invia\CMI;

/**
 * Class InsufficientRightsException
 */
class InsufficientRightsException extends \Exception
{
    protected const MESSAGE = 'The channel manager \'%s\' has not sufficient rights to handle property \'%s\'.';

    /**
     * @param string $channelManagerName
     * @param string $propertyUUID
     */
    public function __construct(string $channelManagerName, string $propertyUUID)
    {
        parent::__construct(sprintf(self::MESSAGE, $channelManagerName, $propertyUUID));
    }
}