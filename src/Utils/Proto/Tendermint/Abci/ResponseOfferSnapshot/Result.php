<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/abci/types.proto

namespace Tendermint\Abci\ResponseOfferSnapshot;

use UnexpectedValueException;

/**
 * Protobuf type <code>tendermint.abci.ResponseOfferSnapshot.Result</code>
 */
class Result
{
    /**
     * Unknown result, abort all snapshot restoration
     *
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * Snapshot accepted, apply chunks
     *
     * Generated from protobuf enum <code>ACCEPT = 1;</code>
     */
    const ACCEPT = 1;
    /**
     * Abort all snapshot restoration
     *
     * Generated from protobuf enum <code>ABORT = 2;</code>
     */
    const ABORT = 2;
    /**
     * Reject this specific snapshot, try others
     *
     * Generated from protobuf enum <code>REJECT = 3;</code>
     */
    const REJECT = 3;
    /**
     * Reject all snapshots of this format, try others
     *
     * Generated from protobuf enum <code>REJECT_FORMAT = 4;</code>
     */
    const REJECT_FORMAT = 4;
    /**
     * Reject all snapshots from the sender(s), try others
     *
     * Generated from protobuf enum <code>REJECT_SENDER = 5;</code>
     */
    const REJECT_SENDER = 5;

    private static $valueToName = [
        self::UNKNOWN => 'UNKNOWN',
        self::ACCEPT => 'ACCEPT',
        self::ABORT => 'ABORT',
        self::REJECT => 'REJECT',
        self::REJECT_FORMAT => 'REJECT_FORMAT',
        self::REJECT_SENDER => 'REJECT_SENDER',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Result::class, \Tendermint\Abci\ResponseOfferSnapshot_Result::class);

