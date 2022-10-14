<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/nft/v1/tx.proto

namespace Decimal\Nft\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MsgSendToken defines a SDK message for transferring NFT sub-token.
 *
 * Generated from protobuf message <code>decimal.nft.v1.MsgSendToken</code>
 */
class MsgSendToken extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string sender = 1 [json_name = "sender", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $sender = '';
    /**
     * Generated from protobuf field <code>string token_id = 2 [json_name = "tokenId", (.gogoproto.customname) = "TokenID"];</code>
     */
    protected $token_id = '';
    /**
     * Generated from protobuf field <code>repeated uint32 sub_token_ids = 3 [json_name = "subTokenIds", (.gogoproto.customname) = "SubTokenIDs"];</code>
     */
    private $sub_token_ids;
    /**
     * Generated from protobuf field <code>string recipient = 4 [json_name = "recipient", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $recipient = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sender
     *     @type string $token_id
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $sub_token_ids
     *     @type string $recipient
     * }
     */
    public function __construct($data = NULL) {
        \Decimal\Nft\V1\GPBMetadata\Tx::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string sender = 1 [json_name = "sender", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Generated from protobuf field <code>string sender = 1 [json_name = "sender", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setSender($var)
    {
        GPBUtil::checkString($var, True);
        $this->sender = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string token_id = 2 [json_name = "tokenId", (.gogoproto.customname) = "TokenID"];</code>
     * @return string
     */
    public function getTokenId()
    {
        return $this->token_id;
    }

    /**
     * Generated from protobuf field <code>string token_id = 2 [json_name = "tokenId", (.gogoproto.customname) = "TokenID"];</code>
     * @param string $var
     * @return $this
     */
    public function setTokenId($var)
    {
        GPBUtil::checkString($var, True);
        $this->token_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 sub_token_ids = 3 [json_name = "subTokenIds", (.gogoproto.customname) = "SubTokenIDs"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubTokenIds()
    {
        return $this->sub_token_ids;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 sub_token_ids = 3 [json_name = "subTokenIds", (.gogoproto.customname) = "SubTokenIDs"];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubTokenIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->sub_token_ids = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string recipient = 4 [json_name = "recipient", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Generated from protobuf field <code>string recipient = 4 [json_name = "recipient", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setRecipient($var)
    {
        GPBUtil::checkString($var, True);
        $this->recipient = $var;

        return $this;
    }

}

