<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/slashing/v1beta1/genesis.proto

namespace Cosmos\Slashing\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ValidatorMissedBlocks contains array of missed blocks of corresponding
 * address.
 *
 * Generated from protobuf message <code>cosmos.slashing.v1beta1.ValidatorMissedBlocks</code>
 */
class ValidatorMissedBlocks extends \Google\Protobuf\Internal\Message
{
    /**
     * address is the validator address.
     *
     * Generated from protobuf field <code>string address = 1 [json_name = "address", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $address = '';
    /**
     * missed_blocks is an array of missed blocks by the validator.
     *
     * Generated from protobuf field <code>repeated .cosmos.slashing.v1beta1.MissedBlock missed_blocks = 2 [json_name = "missedBlocks", (.gogoproto.nullable) = false];</code>
     */
    private $missed_blocks;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $address
     *           address is the validator address.
     *     @type \Cosmos\Slashing\V1beta1\MissedBlock[]|\Google\Protobuf\Internal\RepeatedField $missed_blocks
     *           missed_blocks is an array of missed blocks by the validator.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Slashing\V1Beta1\Genesis::initOnce();
        parent::__construct($data);
    }

    /**
     * address is the validator address.
     *
     * Generated from protobuf field <code>string address = 1 [json_name = "address", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * address is the validator address.
     *
     * Generated from protobuf field <code>string address = 1 [json_name = "address", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

    /**
     * missed_blocks is an array of missed blocks by the validator.
     *
     * Generated from protobuf field <code>repeated .cosmos.slashing.v1beta1.MissedBlock missed_blocks = 2 [json_name = "missedBlocks", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMissedBlocks()
    {
        return $this->missed_blocks;
    }

    /**
     * missed_blocks is an array of missed blocks by the validator.
     *
     * Generated from protobuf field <code>repeated .cosmos.slashing.v1beta1.MissedBlock missed_blocks = 2 [json_name = "missedBlocks", (.gogoproto.nullable) = false];</code>
     * @param \Cosmos\Slashing\V1beta1\MissedBlock[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMissedBlocks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Slashing\V1beta1\MissedBlock::class);
        $this->missed_blocks = $arr;

        return $this;
    }

}

