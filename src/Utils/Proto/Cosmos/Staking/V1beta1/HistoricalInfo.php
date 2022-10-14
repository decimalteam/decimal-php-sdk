<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/staking/v1beta1/staking.proto

namespace Cosmos\Staking\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * HistoricalInfo contains header and validator information for a given block.
 * It is stored as part of staking module's state, which persists the `n` most
 * recent HistoricalInfo
 * (`n` is set by the staking module's `historical_entries` parameter).
 *
 * Generated from protobuf message <code>cosmos.staking.v1beta1.HistoricalInfo</code>
 */
class HistoricalInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.tendermint.types.Header header = 1 [json_name = "header", (.gogoproto.nullable) = false];</code>
     */
    protected $header = null;
    /**
     * Generated from protobuf field <code>repeated .cosmos.staking.v1beta1.Validator valset = 2 [json_name = "valset", (.gogoproto.nullable) = false];</code>
     */
    private $valset;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Tendermint\Types\Header $header
     *     @type array<\Cosmos\Staking\V1beta1\Validator>|\Google\Protobuf\Internal\RepeatedField $valset
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Staking\V1beta1\GPBMetadata\Staking::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.tendermint.types.Header header = 1 [json_name = "header", (.gogoproto.nullable) = false];</code>
     * @return \Tendermint\Types\Header|null
     */
    public function getHeader()
    {
        return $this->header;
    }

    public function hasHeader()
    {
        return isset($this->header);
    }

    public function clearHeader()
    {
        unset($this->header);
    }

    /**
     * Generated from protobuf field <code>.tendermint.types.Header header = 1 [json_name = "header", (.gogoproto.nullable) = false];</code>
     * @param \Tendermint\Types\Header $var
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkMessage($var, \Tendermint\Types\Header::class);
        $this->header = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.staking.v1beta1.Validator valset = 2 [json_name = "valset", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValset()
    {
        return $this->valset;
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.staking.v1beta1.Validator valset = 2 [json_name = "valset", (.gogoproto.nullable) = false];</code>
     * @param array<\Cosmos\Staking\V1beta1\Validator>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValset($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Staking\V1beta1\Validator::class);
        $this->valset = $arr;

        return $this;
    }

}
