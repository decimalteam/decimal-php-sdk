<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/validator/v1/events.proto

namespace Decimal\Validator\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EventLiveness defines event emitted when a validator is missed a block to sign.
 *
 * Generated from protobuf message <code>decimal.validator.v1.EventLiveness</code>
 */
class EventLiveness extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string validator = 1 [json_name = "validator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $validator = '';
    /**
     * Generated from protobuf field <code>string consensus_pubkey = 2 [json_name = "consensusPubkey"];</code>
     */
    protected $consensus_pubkey = '';
    /**
     * Generated from protobuf field <code>uint32 missed_blocks = 3 [json_name = "missedBlocks"];</code>
     */
    protected $missed_blocks = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $validator
     *     @type string $consensus_pubkey
     *     @type int $missed_blocks
     * }
     */
    public function __construct($data = NULL) {
        \Decimal\Validator\V1\GPBMetadata\Events::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string validator = 1 [json_name = "validator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getValidator()
    {
        return $this->validator;
    }

    /**
     * Generated from protobuf field <code>string validator = 1 [json_name = "validator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setValidator($var)
    {
        GPBUtil::checkString($var, True);
        $this->validator = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string consensus_pubkey = 2 [json_name = "consensusPubkey"];</code>
     * @return string
     */
    public function getConsensusPubkey()
    {
        return $this->consensus_pubkey;
    }

    /**
     * Generated from protobuf field <code>string consensus_pubkey = 2 [json_name = "consensusPubkey"];</code>
     * @param string $var
     * @return $this
     */
    public function setConsensusPubkey($var)
    {
        GPBUtil::checkString($var, True);
        $this->consensus_pubkey = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 missed_blocks = 3 [json_name = "missedBlocks"];</code>
     * @return int
     */
    public function getMissedBlocks()
    {
        return $this->missed_blocks;
    }

    /**
     * Generated from protobuf field <code>uint32 missed_blocks = 3 [json_name = "missedBlocks"];</code>
     * @param int $var
     * @return $this
     */
    public function setMissedBlocks($var)
    {
        GPBUtil::checkUint32($var);
        $this->missed_blocks = $var;

        return $this;
    }

}

