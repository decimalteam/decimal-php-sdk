<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/crisis/v1beta1/genesis.proto

namespace Cosmos\Crisis\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GenesisState defines the crisis module's genesis state.
 *
 * Generated from protobuf message <code>cosmos.crisis.v1beta1.GenesisState</code>
 */
class GenesisState extends \Google\Protobuf\Internal\Message
{
    /**
     * constant_fee is the fee used to verify the invariant in the crisis
     * module.
     *
     * Generated from protobuf field <code>.cosmos.base.v1beta1.Coin constant_fee = 3 [json_name = "constantFee", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"constant_fee\""];</code>
     */
    protected $constant_fee = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cosmos\Base\V1beta1\Coin $constant_fee
     *           constant_fee is the fee used to verify the invariant in the crisis
     *           module.
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Crisis\V1beta1\GPBMetadata\Genesis::initOnce();
        parent::__construct($data);
    }

    /**
     * constant_fee is the fee used to verify the invariant in the crisis
     * module.
     *
     * Generated from protobuf field <code>.cosmos.base.v1beta1.Coin constant_fee = 3 [json_name = "constantFee", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"constant_fee\""];</code>
     * @return \Cosmos\Base\V1beta1\Coin|null
     */
    public function getConstantFee()
    {
        return $this->constant_fee;
    }

    public function hasConstantFee()
    {
        return isset($this->constant_fee);
    }

    public function clearConstantFee()
    {
        unset($this->constant_fee);
    }

    /**
     * constant_fee is the fee used to verify the invariant in the crisis
     * module.
     *
     * Generated from protobuf field <code>.cosmos.base.v1beta1.Coin constant_fee = 3 [json_name = "constantFee", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"constant_fee\""];</code>
     * @param \Cosmos\Base\V1beta1\Coin $var
     * @return $this
     */
    public function setConstantFee($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Base\V1beta1\Coin::class);
        $this->constant_fee = $var;

        return $this;
    }

}

