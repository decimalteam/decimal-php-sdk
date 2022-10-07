<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/abci/types.proto

namespace Tendermint\Abci;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ValidatorUpdate
 *
 * Generated from protobuf message <code>tendermint.abci.ValidatorUpdate</code>
 */
class ValidatorUpdate extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.tendermint.crypto.PublicKey pub_key = 1 [json_name = "pubKey", (.gogoproto.nullable) = false];</code>
     */
    protected $pub_key = null;
    /**
     * Generated from protobuf field <code>int64 power = 2 [json_name = "power"];</code>
     */
    protected $power = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Tendermint\Crypto\PublicKey $pub_key
     *     @type int|string $power
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Tendermint\Abci\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.tendermint.crypto.PublicKey pub_key = 1 [json_name = "pubKey", (.gogoproto.nullable) = false];</code>
     * @return \Tendermint\Crypto\PublicKey|null
     */
    public function getPubKey()
    {
        return $this->pub_key;
    }

    public function hasPubKey()
    {
        return isset($this->pub_key);
    }

    public function clearPubKey()
    {
        unset($this->pub_key);
    }

    /**
     * Generated from protobuf field <code>.tendermint.crypto.PublicKey pub_key = 1 [json_name = "pubKey", (.gogoproto.nullable) = false];</code>
     * @param \Tendermint\Crypto\PublicKey $var
     * @return $this
     */
    public function setPubKey($var)
    {
        GPBUtil::checkMessage($var, \Tendermint\Crypto\PublicKey::class);
        $this->pub_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 power = 2 [json_name = "power"];</code>
     * @return int|string
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * Generated from protobuf field <code>int64 power = 2 [json_name = "power"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setPower($var)
    {
        GPBUtil::checkInt64($var);
        $this->power = $var;

        return $this;
    }

}

