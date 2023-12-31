<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/slashing/v1beta1/tx.proto

namespace Cosmos\Slashing\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MsgUnjail defines the Msg/Unjail request type
 *
 * Generated from protobuf message <code>cosmos.slashing.v1beta1.MsgUnjail</code>
 */
class MsgUnjail extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string validator_addr = 1 [json_name = "validatorAddr", (.gogoproto.jsontag) = "address", (.gogoproto.moretags) = "yaml:\"address\""];</code>
     */
    protected $validator_addr = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $validator_addr
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Slashing\V1beta1\GPBMetadata\Tx::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string validator_addr = 1 [json_name = "validatorAddr", (.gogoproto.jsontag) = "address", (.gogoproto.moretags) = "yaml:\"address\""];</code>
     * @return string
     */
    public function getValidatorAddr()
    {
        return $this->validator_addr;
    }

    /**
     * Generated from protobuf field <code>string validator_addr = 1 [json_name = "validatorAddr", (.gogoproto.jsontag) = "address", (.gogoproto.moretags) = "yaml:\"address\""];</code>
     * @param string $var
     * @return $this
     */
    public function setValidatorAddr($var)
    {
        GPBUtil::checkString($var, True);
        $this->validator_addr = $var;

        return $this;
    }

}

