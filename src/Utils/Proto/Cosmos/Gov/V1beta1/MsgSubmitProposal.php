<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/gov/v1beta1/tx.proto

namespace Cosmos\Gov\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MsgSubmitProposal defines an sdk.Msg type that supports submitting arbitrary
 * proposal Content.
 *
 * Generated from protobuf message <code>cosmos.gov.v1beta1.MsgSubmitProposal</code>
 */
class MsgSubmitProposal extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.protobuf.Any content = 1 [json_name = "content", (.cosmos_proto.accepts_interface) = "Content"];</code>
     */
    protected $content = null;
    /**
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin initial_deposit = 2 [json_name = "initialDeposit", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"initial_deposit\"", (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.Coins"];</code>
     */
    private $initial_deposit;
    /**
     * Generated from protobuf field <code>string proposer = 3 [json_name = "proposer"];</code>
     */
    protected $proposer = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Any $content
     *     @type array<\Cosmos\Base\V1beta1\Coin>|\Google\Protobuf\Internal\RepeatedField $initial_deposit
     *     @type string $proposer
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Gov\V1beta1\GPBMetadata\Tx::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any content = 1 [json_name = "content", (.cosmos_proto.accepts_interface) = "Content"];</code>
     * @return \Google\Protobuf\Any|null
     */
    public function getContent()
    {
        return $this->content;
    }

    public function hasContent()
    {
        return isset($this->content);
    }

    public function clearContent()
    {
        unset($this->content);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any content = 1 [json_name = "content", (.cosmos_proto.accepts_interface) = "Content"];</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->content = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin initial_deposit = 2 [json_name = "initialDeposit", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"initial_deposit\"", (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.Coins"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInitialDeposit()
    {
        return $this->initial_deposit;
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin initial_deposit = 2 [json_name = "initialDeposit", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"initial_deposit\"", (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.Coins"];</code>
     * @param array<\Cosmos\Base\V1beta1\Coin>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInitialDeposit($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Base\V1beta1\Coin::class);
        $this->initial_deposit = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string proposer = 3 [json_name = "proposer"];</code>
     * @return string
     */
    public function getProposer()
    {
        return $this->proposer;
    }

    /**
     * Generated from protobuf field <code>string proposer = 3 [json_name = "proposer"];</code>
     * @param string $var
     * @return $this
     */
    public function setProposer($var)
    {
        GPBUtil::checkString($var, True);
        $this->proposer = $var;

        return $this;
    }

}

