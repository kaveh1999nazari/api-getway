<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: user/enums/status.proto

namespace Barsam\User\Enums;

use UnexpectedValueException;

/**
 * Protobuf type <code>barsam.user.enums.Status</code>
 */
class Status
{
    /**
     * Generated from protobuf enum <code>USER_UNKNOWN = 0;</code>
     */
    const USER_UNKNOWN = 0;
    /**
     * Generated from protobuf enum <code>USER_ACTIVE = 1;</code>
     */
    const USER_ACTIVE = 1;
    /**
     * Generated from protobuf enum <code>USER_DEACTIVE = 2;</code>
     */
    const USER_DEACTIVE = 2;
    /**
     * Generated from protobuf enum <code>USER_BANNED = 3;</code>
     */
    const USER_BANNED = 3;

    private static $valueToName = [
        self::USER_UNKNOWN => 'USER_UNKNOWN',
        self::USER_ACTIVE => 'USER_ACTIVE',
        self::USER_DEACTIVE => 'USER_DEACTIVE',
        self::USER_BANNED => 'USER_BANNED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

