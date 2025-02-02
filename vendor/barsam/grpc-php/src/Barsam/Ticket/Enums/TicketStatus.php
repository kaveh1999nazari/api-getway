<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ticket/enums/ticket_status.proto

namespace Barsam\Ticket\Enums;

use UnexpectedValueException;

/**
 * Protobuf type <code>barsam.ticket.enums.TicketStatus</code>
 */
class TicketStatus
{
    /**
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * Generated from protobuf enum <code>OPEN = 1;</code>
     */
    const OPEN = 1;
    /**
     * Generated from protobuf enum <code>IN_PROGRESS = 2;</code>
     */
    const IN_PROGRESS = 2;
    /**
     * Generated from protobuf enum <code>PENDING = 3;</code>
     */
    const PENDING = 3;
    /**
     * Generated from protobuf enum <code>CLOSED = 4;</code>
     */
    const CLOSED = 4;
    /**
     * Generated from protobuf enum <code>RESPOND = 5;</code>
     */
    const RESPOND = 5;
    /**
     * Generated from protobuf enum <code>ON_HOLD = 6;</code>
     */
    const ON_HOLD = 6;
    /**
     * Generated from protobuf enum <code>CANCELLED = 7;</code>
     */
    const CANCELLED = 7;
    /**
     * Generated from protobuf enum <code>RESOLVED = 8;</code>
     */
    const RESOLVED = 8;

    private static $valueToName = [
        self::UNKNOWN => 'UNKNOWN',
        self::OPEN => 'OPEN',
        self::IN_PROGRESS => 'IN_PROGRESS',
        self::PENDING => 'PENDING',
        self::CLOSED => 'CLOSED',
        self::RESPOND => 'RESPOND',
        self::ON_HOLD => 'ON_HOLD',
        self::CANCELLED => 'CANCELLED',
        self::RESOLVED => 'RESOLVED',
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

