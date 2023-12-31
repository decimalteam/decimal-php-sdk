<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/types/params.proto

namespace Tendermint\Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ValidatorParams restrict the public key types validators can use.
 * NOTE: uses ABCI pubkey naming, not Amino names.
 *
 * Generated from protobuf message <code>tendermint.types.ValidatorParams</code>
 */
class ValidatorParams extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string pub_key_types = 1 [json_name = "pubKeyTypes"];</code>
     */
    private $pub_key_types;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $pub_key_types
     * }
     */
    public function __construct($data = NULL) {
        \Tendermint\Types\GPBMetadata\Params::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string pub_key_types = 1 [json_name = "pubKeyTypes"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPubKeyTypes()
    {
        return $this->pub_key_types;
    }

    /**
     * Generated from protobuf field <code>repeated string pub_key_types = 1 [json_name = "pubKeyTypes"];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPubKeyTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->pub_key_types = $arr;

        return $this;
    }

}

