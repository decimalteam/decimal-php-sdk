<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/applications/interchain_accounts/v1/packet.proto

namespace Ibc\Applications\Interchain_accounts\V1;

use UnexpectedValueException;

/**
 * Type defines a classification of message issued from a controller chain to its associated interchain accounts
 * host
 *
 * Protobuf type <code>ibc.applications.interchain_accounts.v1.Type</code>
 */
class Type
{
    /**
     * Default zero value enumeration
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0 [(.gogoproto.enumvalue_customname) = "UNSPECIFIED"];</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * Execute a transaction on an interchain accounts host chain
     *
     * Generated from protobuf enum <code>TYPE_EXECUTE_TX = 1 [(.gogoproto.enumvalue_customname) = "EXECUTE_TX"];</code>
     */
    const TYPE_EXECUTE_TX = 1;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::TYPE_EXECUTE_TX => 'TYPE_EXECUTE_TX',
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

