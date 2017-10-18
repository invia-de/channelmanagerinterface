<?php

namespace Invia\CMI;

/**
 * Interface ConstantsInterface
 */
interface ConstantsInterface
{
    public const BOOKING_STATUS_OPEN      = 'open';
    public const BOOKING_STATUS_CLOSED    = 'closed';
    public const BOOKING_STATUS_CANCELLED = 'cancelled';
    public const BOOKING_STATUS_NO_SHOW   = 'no_show';

    public const BOOKING_REQUEST_DATETYPE_ARRIVAL   = 'arrival';
    public const BOOKING_REQUEST_DATETYPE_DEPARTURE = 'departure';
    public const BOOKING_REQUEST_DATETYPE_BOOKING   = 'booking';
    public const BOOKING_REQUEST_DATETYPE_MODIFIED  = 'modified';

    public const GENDER_MALE   = 'male';
    public const GENDER_FEMALE = 'female';

    public const AFFECTED_WEEK_DAY_MONDAY    = 1;
    public const AFFECTED_WEEK_DAY_TUESDAY   = 2;
    public const AFFECTED_WEEK_DAY_WEDNESDAY = 3;
    public const AFFECTED_WEEK_DAY_THURSDAY  = 4;
    public const AFFECTED_WEEK_DAY_FRIDAY    = 5;
    public const AFFECTED_WEEK_DAY_SATURDAY  = 6;
    public const AFFECTED_WEEK_DAY_SUNDAY    = 7;

    public const AFFECTED_WEEK_DAYS_ALL = [
        self::AFFECTED_WEEK_DAY_MONDAY,
        self::AFFECTED_WEEK_DAY_TUESDAY,
        self::AFFECTED_WEEK_DAY_WEDNESDAY,
        self::AFFECTED_WEEK_DAY_THURSDAY,
        self::AFFECTED_WEEK_DAY_FRIDAY,
        self::AFFECTED_WEEK_DAY_SATURDAY,
        self::AFFECTED_WEEK_DAY_SUNDAY
    ];

    public const AFFECTED_WEEK_DAYS_WEEKEND = [
        self::AFFECTED_WEEK_DAY_SATURDAY,
        self::AFFECTED_WEEK_DAY_SUNDAY
    ];

    public const AFFECTED_WEEK_DAYS_BUSINESS_DAYS = [
        self::AFFECTED_WEEK_DAY_MONDAY,
        self::AFFECTED_WEEK_DAY_TUESDAY,
        self::AFFECTED_WEEK_DAY_WEDNESDAY,
        self::AFFECTED_WEEK_DAY_THURSDAY,
        self::AFFECTED_WEEK_DAY_FRIDAY
    ];
}
