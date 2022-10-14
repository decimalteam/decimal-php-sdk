<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/bank/v1beta1/tx.proto

namespace Cosmos\Bank\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MsgMultiSend represents an arbitrary multi-in, multi-out send message.
 *
 * Generated from protobuf message <code>cosmos.bank.v1beta1.MsgMultiSend</code>
 */
class MsgMultiSend extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .cosmos.bank.v1beta1.Input inputs = 1 [json_name = "inputs", (.gogoproto.nullable) = false];</code>
     */
    private $inputs;
    /**
     * Generated from protobuf field <code>repeated .cosmos.bank.v1beta1.Output outputs = 2 [json_name = "outputs", (.gogoproto.nullable) = false];</code>
     */
    private $outputs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Cosmos\Bank\V1beta1\Input>|\Google\Protobuf\Internal\RepeatedField $inputs
     *     @type array<\Cosmos\Bank\V1beta1\Output>|\Google\Protobuf\Internal\RepeatedField $outputs
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Bank\V1beta1\GPBMetadata\Tx::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.bank.v1beta1.Input inputs = 1 [json_name = "inputs", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInputs()
    {
        return $this->inputs;
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.bank.v1beta1.Input inputs = 1 [json_name = "inputs", (.gogoproto.nullable) = false];</code>
     * @param array<\Cosmos\Bank\V1beta1\Input>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInputs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Bank\V1beta1\Input::class);
        $this->inputs = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.bank.v1beta1.Output outputs = 2 [json_name = "outputs", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOutputs()
    {
        return $this->outputs;
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.bank.v1beta1.Output outputs = 2 [json_name = "outputs", (.gogoproto.nullable) = false];</code>
     * @param array<\Cosmos\Bank\V1beta1\Output>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOutputs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Bank\V1beta1\Output::class);
        $this->outputs = $arr;

        return $this;
    }

}

