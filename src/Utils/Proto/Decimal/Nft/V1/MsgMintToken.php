<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/nft/v1/tx.proto

namespace Decimal\Nft\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MsgMintToken defines a SDK message for creating a new NFT token or mint additional NFT sub-tokens.
 *
 * Generated from protobuf message <code>decimal.nft.v1.MsgMintToken</code>
 */
class MsgMintToken extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string sender = 1 [json_name = "sender", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $sender = '';
    /**
     * Generated from protobuf field <code>string denom = 2 [json_name = "denom"];</code>
     */
    protected $denom = '';
    /**
     * Generated from protobuf field <code>string token_id = 3 [json_name = "tokenId", (.gogoproto.customname) = "TokenID"];</code>
     */
    protected $token_id = '';
    /**
     * Generated from protobuf field <code>string token_uri = 4 [json_name = "tokenUri", (.gogoproto.customname) = "TokenURI"];</code>
     */
    protected $token_uri = '';
    /**
     * Generated from protobuf field <code>bool allow_mint = 5 [json_name = "allowMint"];</code>
     */
    protected $allow_mint = false;
    /**
     * Generated from protobuf field <code>string recipient = 6 [json_name = "recipient", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $recipient = '';
    /**
     * Generated from protobuf field <code>uint32 quantity = 7 [json_name = "quantity"];</code>
     */
    protected $quantity = 0;
    /**
     * Generated from protobuf field <code>.cosmos.base.v1beta1.Coin reserve = 8 [json_name = "reserve", (.gogoproto.nullable) = false];</code>
     */
    protected $reserve = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sender
     *     @type string $denom
     *     @type string $token_id
     *     @type string $token_uri
     *     @type bool $allow_mint
     *     @type string $recipient
     *     @type int $quantity
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
     * Generated from protobuf field <code>string denom = 2 [json_name = "denom"];</code>
     * @return string
     */
    public function getDenom()
    {
        return $this->denom;
    }

    /**
     * Generated from protobuf field <code>string denom = 2 [json_name = "denom"];</code>
     * @param string $var
     * @return $this
     */
    public function setDenom($var)
    {
        GPBUtil::checkString($var, True);
        $this->denom = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string token_id = 3 [json_name = "tokenId", (.gogoproto.customname) = "TokenID"];</code>
     * @return string
     */
    public function getTokenId()
    {
        return $this->token_id;
    }

    /**
     * Generated from protobuf field <code>string token_id = 3 [json_name = "tokenId", (.gogoproto.customname) = "TokenID"];</code>
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
     * Generated from protobuf field <code>string token_uri = 4 [json_name = "tokenUri", (.gogoproto.customname) = "TokenURI"];</code>
     * @return string
     */
    public function getTokenUri()
    {
        return $this->token_uri;
    }

    /**
     * Generated from protobuf field <code>string token_uri = 4 [json_name = "tokenUri", (.gogoproto.customname) = "TokenURI"];</code>
     * @param string $var
     * @return $this
     */
    public function setTokenUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->token_uri = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool allow_mint = 5 [json_name = "allowMint"];</code>
     * @return bool
     */
    public function getAllowMint()
    {
        return $this->allow_mint;
    }

    /**
     * Generated from protobuf field <code>bool allow_mint = 5 [json_name = "allowMint"];</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowMint($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_mint = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string recipient = 6 [json_name = "recipient", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Generated from protobuf field <code>string recipient = 6 [json_name = "recipient", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
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
     * Generated from protobuf field <code>uint32 quantity = 7 [json_name = "quantity"];</code>
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Generated from protobuf field <code>uint32 quantity = 7 [json_name = "quantity"];</code>
     * @param int $var
     * @return $this
     */
    public function setQuantity($var)
    {
        GPBUtil::checkUint32($var);
        $this->quantity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cosmos.base.v1beta1.Coin reserve = 8 [json_name = "reserve", (.gogoproto.nullable) = false];</code>
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
     * Generated from protobuf field <code>.cosmos.base.v1beta1.Coin reserve = 8 [json_name = "reserve", (.gogoproto.nullable) = false];</code>
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

