<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/gov/v1/tx.proto

namespace Cosmos\Gov\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MsgSubmitProposal defines an sdk.Msg type that supports submitting arbitrary
 * proposal Content.
 *
 * Generated from protobuf message <code>cosmos.gov.v1.MsgSubmitProposal</code>
 */
class MsgSubmitProposal extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .google.protobuf.Any messages = 1 [json_name = "messages"];</code>
     */
    private $messages;
    /**
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin initial_deposit = 2 [json_name = "initialDeposit", (.gogoproto.nullable) = false];</code>
     */
    private $initial_deposit;
    /**
     * Generated from protobuf field <code>string proposer = 3 [json_name = "proposer", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $proposer = '';
    /**
     * metadata is any arbitrary metadata attached to the proposal.
     *
     * Generated from protobuf field <code>string metadata = 4 [json_name = "metadata"];</code>
     */
    protected $metadata = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Any[]|\Google\Protobuf\Internal\RepeatedField $messages
     *     @type \Cosmos\Base\V1beta1\Coin[]|\Google\Protobuf\Internal\RepeatedField $initial_deposit
     *     @type string $proposer
     *     @type string $metadata
     *           metadata is any arbitrary metadata attached to the proposal.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Gov\V1\Tx::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .google.protobuf.Any messages = 1 [json_name = "messages"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Generated from protobuf field <code>repeated .google.protobuf.Any messages = 1 [json_name = "messages"];</code>
     * @param \Google\Protobuf\Any[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMessages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Any::class);
        $this->messages = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin initial_deposit = 2 [json_name = "initialDeposit", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInitialDeposit()
    {
        return $this->initial_deposit;
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin initial_deposit = 2 [json_name = "initialDeposit", (.gogoproto.nullable) = false];</code>
     * @param \Cosmos\Base\V1beta1\Coin[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInitialDeposit($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Base\V1beta1\Coin::class);
        $this->initial_deposit = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string proposer = 3 [json_name = "proposer", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getProposer()
    {
        return $this->proposer;
    }

    /**
     * Generated from protobuf field <code>string proposer = 3 [json_name = "proposer", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setProposer($var)
    {
        GPBUtil::checkString($var, True);
        $this->proposer = $var;

        return $this;
    }

    /**
     * metadata is any arbitrary metadata attached to the proposal.
     *
     * Generated from protobuf field <code>string metadata = 4 [json_name = "metadata"];</code>
     * @return string
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * metadata is any arbitrary metadata attached to the proposal.
     *
     * Generated from protobuf field <code>string metadata = 4 [json_name = "metadata"];</code>
     * @param string $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkString($var, True);
        $this->metadata = $var;

        return $this;
    }

}

