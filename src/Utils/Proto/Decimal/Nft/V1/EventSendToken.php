<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/nft/v1/events.proto

namespace Decimal\Nft\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EventSendToken defines event emitted when existed NFT sub-tokens are transferred.
 *
 * Generated from protobuf message <code>decimal.nft.v1.EventSendToken</code>
 */
class EventSendToken extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string sender = 1 [json_name = "sender", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $sender = '';
    /**
     * Generated from protobuf field <code>string id = 2 [json_name = "id", (.gogoproto.customname) = "ID"];</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string recipient = 3 [json_name = "recipient", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $recipient = '';
    /**
     * Generated from protobuf field <code>repeated uint32 sub_token_ids = 4 [json_name = "subTokenIds", (.gogoproto.customname) = "SubTokenIDs"];</code>
     */
    private $sub_token_ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sender
     *     @type string $id
     *     @type string $recipient
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $sub_token_ids
     * }
     */
    public function __construct($data = NULL) {
        \Decimal\Nft\V1\GPBMetadata\Events::initOnce();
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
     * Generated from protobuf field <code>string id = 2 [json_name = "id", (.gogoproto.customname) = "ID"];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 2 [json_name = "id", (.gogoproto.customname) = "ID"];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string recipient = 3 [json_name = "recipient", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Generated from protobuf field <code>string recipient = 3 [json_name = "recipient", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setRecipient($var)
    {
        GPBUtil::checkString($var, True);
        $this->recipient = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 sub_token_ids = 4 [json_name = "subTokenIds", (.gogoproto.customname) = "SubTokenIDs"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubTokenIds()
    {
        return $this->sub_token_ids;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 sub_token_ids = 4 [json_name = "subTokenIds", (.gogoproto.customname) = "SubTokenIDs"];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubTokenIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->sub_token_ids = $arr;

        return $this;
    }

}

