<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/core/channel/v1/tx.proto

namespace Ibc\Core\Channel\V1;

use UnexpectedValueException;

/**
 * ResponseResultType defines the possible outcomes of the execution of a message
 *
 * Protobuf type <code>ibc.core.channel.v1.ResponseResultType</code>
 */
class ResponseResultType
{
    /**
     * Default zero value enumeration
     *
     * Generated from protobuf enum <code>RESPONSE_RESULT_TYPE_UNSPECIFIED = 0 [(.gogoproto.enumvalue_customname) = "UNSPECIFIED"];</code>
     */
    const RESPONSE_RESULT_TYPE_UNSPECIFIED = 0;
    /**
     * The message did not call the IBC application callbacks (because, for example, the packet had already been relayed)
     *
     * Generated from protobuf enum <code>RESPONSE_RESULT_TYPE_NOOP = 1 [(.gogoproto.enumvalue_customname) = "NOOP"];</code>
     */
    const RESPONSE_RESULT_TYPE_NOOP = 1;
    /**
     * The message was executed successfully
     *
     * Generated from protobuf enum <code>RESPONSE_RESULT_TYPE_SUCCESS = 2 [(.gogoproto.enumvalue_customname) = "SUCCESS"];</code>
     */
    const RESPONSE_RESULT_TYPE_SUCCESS = 2;

    private static $valueToName = [
        self::RESPONSE_RESULT_TYPE_UNSPECIFIED => 'RESPONSE_RESULT_TYPE_UNSPECIFIED',
        self::RESPONSE_RESULT_TYPE_NOOP => 'RESPONSE_RESULT_TYPE_NOOP',
        self::RESPONSE_RESULT_TYPE_SUCCESS => 'RESPONSE_RESULT_TYPE_SUCCESS',
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

