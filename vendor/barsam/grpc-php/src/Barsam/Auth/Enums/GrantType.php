<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: auth/enums/grant_type.proto

namespace Barsam\Auth\Enums;

use UnexpectedValueException;

/**
 * Protobuf type <code>barsam.auth.enums.GrantType</code>
 */
class GrantType
{
    /**
     * The client_id, client_secret, and code are required for the authorization_code grant_type
     *
     * Generated from protobuf enum <code>AUTHORIZATION_CODE = 0;</code>
     */
    const AUTHORIZATION_CODE = 0;
    /**
     * The client_id, client_secret, and refresh_token are required for the refresh_token grant_type
     *
     * Generated from protobuf enum <code>REFRESH_TOKEN = 1;</code>
     */
    const REFRESH_TOKEN = 1;
    /**
     * The client_id, client_secret, and user_id are required for the password grant_type
     *
     * Generated from protobuf enum <code>PASSWORD = 2;</code>
     */
    const PASSWORD = 2;
    /**
     * The client_id, client_secret, and device_code are required for the device_code grant_type
     *
     * Generated from protobuf enum <code>DEVICE_CODE = 5;</code>
     */
    const DEVICE_CODE = 5;

    private static $valueToName = [
        self::AUTHORIZATION_CODE => 'AUTHORIZATION_CODE',
        self::REFRESH_TOKEN => 'REFRESH_TOKEN',
        self::PASSWORD => 'PASSWORD',
        self::DEVICE_CODE => 'DEVICE_CODE',
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

