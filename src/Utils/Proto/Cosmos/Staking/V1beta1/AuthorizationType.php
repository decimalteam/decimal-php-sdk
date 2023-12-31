<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/staking/v1beta1/authz.proto

namespace Cosmos\Staking\V1beta1;

use UnexpectedValueException;

/**
 * AuthorizationType defines the type of staking module authorization type
 *
 * Protobuf type <code>cosmos.staking.v1beta1.AuthorizationType</code>
 */
class AuthorizationType
{
    /**
     * AUTHORIZATION_TYPE_UNSPECIFIED specifies an unknown authorization type
     *
     * Generated from protobuf enum <code>AUTHORIZATION_TYPE_UNSPECIFIED = 0;</code>
     */
    const AUTHORIZATION_TYPE_UNSPECIFIED = 0;
    /**
     * AUTHORIZATION_TYPE_DELEGATE defines an authorization type for Msg/Delegate
     *
     * Generated from protobuf enum <code>AUTHORIZATION_TYPE_DELEGATE = 1;</code>
     */
    const AUTHORIZATION_TYPE_DELEGATE = 1;
    /**
     * AUTHORIZATION_TYPE_UNDELEGATE defines an authorization type for Msg/Undelegate
     *
     * Generated from protobuf enum <code>AUTHORIZATION_TYPE_UNDELEGATE = 2;</code>
     */
    const AUTHORIZATION_TYPE_UNDELEGATE = 2;
    /**
     * AUTHORIZATION_TYPE_REDELEGATE defines an authorization type for Msg/BeginRedelegate
     *
     * Generated from protobuf enum <code>AUTHORIZATION_TYPE_REDELEGATE = 3;</code>
     */
    const AUTHORIZATION_TYPE_REDELEGATE = 3;

    private static $valueToName = [
        self::AUTHORIZATION_TYPE_UNSPECIFIED => 'AUTHORIZATION_TYPE_UNSPECIFIED',
        self::AUTHORIZATION_TYPE_DELEGATE => 'AUTHORIZATION_TYPE_DELEGATE',
        self::AUTHORIZATION_TYPE_UNDELEGATE => 'AUTHORIZATION_TYPE_UNDELEGATE',
        self::AUTHORIZATION_TYPE_REDELEGATE => 'AUTHORIZATION_TYPE_REDELEGATE',
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

