<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proofs.proto

namespace Ics23;

use UnexpectedValueException;

/**
 * Protobuf type <code>ics23.HashOp</code>
 */
class HashOp
{
    /**
     * NO_HASH is the default if no data passed. Note this is an illegal argument some places.
     *
     * Generated from protobuf enum <code>NO_HASH = 0;</code>
     */
    const NO_HASH = 0;
    /**
     * Generated from protobuf enum <code>SHA256 = 1;</code>
     */
    const SHA256 = 1;
    /**
     * Generated from protobuf enum <code>SHA512 = 2;</code>
     */
    const SHA512 = 2;
    /**
     * Generated from protobuf enum <code>KECCAK = 3;</code>
     */
    const KECCAK = 3;
    /**
     * Generated from protobuf enum <code>RIPEMD160 = 4;</code>
     */
    const RIPEMD160 = 4;
    /**
     * ripemd160(sha256(x))
     *
     * Generated from protobuf enum <code>BITCOIN = 5;</code>
     */
    const BITCOIN = 5;

    private static $valueToName = [
        self::NO_HASH => 'NO_HASH',
        self::SHA256 => 'SHA256',
        self::SHA512 => 'SHA512',
        self::KECCAK => 'KECCAK',
        self::RIPEMD160 => 'RIPEMD160',
        self::BITCOIN => 'BITCOIN',
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

