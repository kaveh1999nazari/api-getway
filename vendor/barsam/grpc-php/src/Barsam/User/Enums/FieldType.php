<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: user/enums/field_type.proto

namespace Barsam\User\Enums;

use UnexpectedValueException;

/**
 * Protobuf type <code>barsam.user.enums.FieldType</code>
 */
class FieldType
{
    /**
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * Generated from protobuf enum <code>NUMBER = 1;</code>
     */
    const NUMBER = 1;
    /**
     * Generated from protobuf enum <code>SELECT = 2;</code>
     */
    const SELECT = 2;
    /**
     * Generated from protobuf enum <code>MULTI_SELECT = 3;</code>
     */
    const MULTI_SELECT = 3;
    /**
     * Generated from protobuf enum <code>RADIO = 4;</code>
     */
    const RADIO = 4;
    /**
     * Generated from protobuf enum <code>CHECKBOX = 5;</code>
     */
    const CHECKBOX = 5;
    /**
     * Generated from protobuf enum <code>FILE = 6;</code>
     */
    const FILE = 6;
    /**
     * Generated from protobuf enum <code>EMAIL = 7;</code>
     */
    const EMAIL = 7;
    /**
     * Generated from protobuf enum <code>PHONE = 8;</code>
     */
    const PHONE = 8;
    /**
     * Generated from protobuf enum <code>PASSWORD = 9;</code>
     */
    const PASSWORD = 9;
    /**
     * Generated from protobuf enum <code>COLOR = 10;</code>
     */
    const COLOR = 10;
    /**
     * Generated from protobuf enum <code>DATE = 11;</code>
     */
    const DATE = 11;
    /**
     * Generated from protobuf enum <code>TIME = 12;</code>
     */
    const TIME = 12;
    /**
     * Generated from protobuf enum <code>DATETIME = 13;</code>
     */
    const DATETIME = 13;
    /**
     * Generated from protobuf enum <code>MONTH = 14;</code>
     */
    const MONTH = 14;
    /**
     * Generated from protobuf enum <code>WEEK = 15;</code>
     */
    const WEEK = 15;
    /**
     * Generated from protobuf enum <code>YEAR = 16;</code>
     */
    const YEAR = 16;
    /**
     * Generated from protobuf enum <code>HIDDEN = 17;</code>
     */
    const HIDDEN = 17;
    /**
     * Generated from protobuf enum <code>HTML = 18;</code>
     */
    const HTML = 18;
    /**
     * Generated from protobuf enum <code>MARKDOWN = 19;</code>
     */
    const MARKDOWN = 19;
    /**
     * Generated from protobuf enum <code>DROPDOWN = 20;</code>
     */
    const DROPDOWN = 20;
    /**
     * Generated from protobuf enum <code>TEXT = 21;</code>
     */
    const TEXT = 21;

    private static $valueToName = [
        self::UNKNOWN => 'UNKNOWN',
        self::NUMBER => 'NUMBER',
        self::SELECT => 'SELECT',
        self::MULTI_SELECT => 'MULTI_SELECT',
        self::RADIO => 'RADIO',
        self::CHECKBOX => 'CHECKBOX',
        self::FILE => 'FILE',
        self::EMAIL => 'EMAIL',
        self::PHONE => 'PHONE',
        self::PASSWORD => 'PASSWORD',
        self::COLOR => 'COLOR',
        self::DATE => 'DATE',
        self::TIME => 'TIME',
        self::DATETIME => 'DATETIME',
        self::MONTH => 'MONTH',
        self::WEEK => 'WEEK',
        self::YEAR => 'YEAR',
        self::HIDDEN => 'HIDDEN',
        self::HTML => 'HTML',
        self::MARKDOWN => 'MARKDOWN',
        self::DROPDOWN => 'DROPDOWN',
        self::TEXT => 'TEXT',
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

