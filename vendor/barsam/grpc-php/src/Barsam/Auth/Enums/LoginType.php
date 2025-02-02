<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: auth/enums/login_type.proto

namespace Barsam\Auth\Enums;

use UnexpectedValueException;

/**
 * Define the login type
 *
 * Protobuf type <code>barsam.auth.enums.LoginType</code>
 */
class LoginType
{
    /**
     * Generated from protobuf enum <code>EXPIRED = 0;</code>
     */
    const EXPIRED = 0;
    /**
     * Generated from protobuf enum <code>INVALID = 1;</code>
     */
    const INVALID = 1;
    /**
     * Generated from protobuf enum <code>VALID = 2;</code>
     */
    const VALID = 2;

    private static $valueToName = [
        self::EXPIRED => 'EXPIRED',
        self::INVALID => 'INVALID',
        self::VALID => 'VALID',
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

