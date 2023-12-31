<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/nft/v1/tx.proto

namespace Decimal\Nft\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MsgUpdateReserve defines a SDK message for modifying existing NFT sub-token reserve.
 *
 * Generated from protobuf message <code>decimal.nft.v1.MsgUpdateReserve</code>
 */
class MsgUpdateReserve extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>repeated uint32 sub_token_ids = 4 [json_name = "subTokenIds", (.gogoproto.customname) = "SubTokenIDs"];</code>
     */
    private $sub_token_ids;
    /**
     * Generated from protobuf field <code>.cosmos.base.v1beta1.Coin reserve = 5 [json_name = "reserve", (.gogoproto.nullable) = false];</code>
     */
    protected $reserve = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sender
     *     @type string $token_id
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $sub_token_ids
     *     @type \Cosmos\Base\V1beta1\Coin $reserve
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

    /**
     * Generated from protobuf field <code>.cosmos.base.v1beta1.Coin reserve = 5 [json_name = "reserve", (.gogoproto.nullable) = false];</code>
     * @return \Cosmos\Base\V1beta1\Coin|null
     */
    public function getReserve()
    {
        return $this->reserve;
    }

    public function hasReserve()
    {
        return isset($this->reserve);
    }

    public function clearReserve()
    {
        unset($this->reserve);
    }

    /**
     * Generated from protobuf field <code>.cosmos.base.v1beta1.Coin reserve = 5 [json_name = "reserve", (.gogoproto.nullable) = false];</code>
     * @param \Cosmos\Base\V1beta1\Coin $var
     * @return $this
     */
    public function setReserve($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Base\V1beta1\Coin::class);
        $this->reserve = $var;

        return $this;
    }

}

