<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/tx/v1beta1/service.proto

namespace Cosmos\Tx\V1beta1;

use UnexpectedValueException;

/**
 * OrderBy defines the sorting order
 *
 * Protobuf type <code>cosmos.tx.v1beta1.OrderBy</code>
 */
class OrderBy
{
    /**
     * ORDER_BY_UNSPECIFIED specifies an unknown sorting order. OrderBy defaults to ASC in this case.
     *
     * Generated from protobuf enum <code>ORDER_BY_UNSPECIFIED = 0;</code>
     */
    const ORDER_BY_UNSPECIFIED = 0;
    /**
     * ORDER_BY_ASC defines ascending order
     *
     * Generated from protobuf enum <code>ORDER_BY_ASC = 1;</code>
     */
    const ORDER_BY_ASC = 1;
    /**
     * ORDER_BY_DESC defines descending order
     *
     * Generated from protobuf enum <code>ORDER_BY_DESC = 2;</code>
     */
    const ORDER_BY_DESC = 2;

    private static $valueToName = [
        self::ORDER_BY_UNSPECIFIED => 'ORDER_BY_UNSPECIFIED',
        self::ORDER_BY_ASC => 'ORDER_BY_ASC',
        self::ORDER_BY_DESC => 'ORDER_BY_DESC',
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

