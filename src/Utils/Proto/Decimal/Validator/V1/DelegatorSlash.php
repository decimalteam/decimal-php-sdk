<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/validator/v1/events.proto

namespace Decimal\Validator\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DelegatorSlash contains delegator address and amount of a reward in base coin.
 *
 * Generated from protobuf message <code>decimal.validator.v1.DelegatorSlash</code>
 */
class DelegatorSlash extends \Google\Protobuf\Internal\Message
{
    /**
     * delegator is the bech32-encoded address of the delegator.
     *
     * Generated from protobuf field <code>string delegator = 1 [json_name = "delegator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $delegator = '';
    /**
     * coins is the list of coin slashes.
     *
     * Generated from protobuf field <code>repeated .decimal.validator.v1.SlashCoin coins = 2 [json_name = "coins", (.gogoproto.nullable) = false];</code>
     */
    private $coins;
    /**
     * nfts is the list of NFT slashes.
     *
     * Generated from protobuf field <code>repeated .decimal.validator.v1.SlashNFT nfts = 3 [json_name = "nfts", (.gogoproto.nullable) = false, (.gogoproto.customname) = "NFTs"];</code>
     */
    private $nfts;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $delegator
     *           delegator is the bech32-encoded address of the delegator.
     *     @type array<\Decimal\Validator\V1\SlashCoin>|\Google\Protobuf\Internal\RepeatedField $coins
     *           coins is the list of coin slashes.
     *     @type array<\Decimal\Validator\V1\SlashNFT>|\Google\Protobuf\Internal\RepeatedField $nfts
     *           nfts is the list of NFT slashes.
     * }
     */
    public function __construct($data = NULL) {
        \Decimal\Validator\V1\GPBMetadata\Events::initOnce();
        parent::__construct($data);
    }

    /**
     * delegator is the bech32-encoded address of the delegator.
     *
     * Generated from protobuf field <code>string delegator = 1 [json_name = "delegator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getDelegator()
    {
        return $this->delegator;
    }

    /**
     * delegator is the bech32-encoded address of the delegator.
     *
     * Generated from protobuf field <code>string delegator = 1 [json_name = "delegator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setDelegator($var)
    {
        GPBUtil::checkString($var, True);
        $this->delegator = $var;

        return $this;
    }

    /**
     * coins is the list of coin slashes.
     *
     * Generated from protobuf field <code>repeated .decimal.validator.v1.SlashCoin coins = 2 [json_name = "coins", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCoins()
    {
        return $this->coins;
    }

    /**
     * coins is the list of coin slashes.
     *
     * Generated from protobuf field <code>repeated .decimal.validator.v1.SlashCoin coins = 2 [json_name = "coins", (.gogoproto.nullable) = false];</code>
     * @param array<\Decimal\Validator\V1\SlashCoin>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCoins($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Decimal\Validator\V1\SlashCoin::class);
        $this->coins = $arr;

        return $this;
    }

    /**
     * nfts is the list of NFT slashes.
     *
     * Generated from protobuf field <code>repeated .decimal.validator.v1.SlashNFT nfts = 3 [json_name = "nfts", (.gogoproto.nullable) = false, (.gogoproto.customname) = "NFTs"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNfts()
    {
        return $this->nfts;
    }

    /**
     * nfts is the list of NFT slashes.
     *
     * Generated from protobuf field <code>repeated .decimal.validator.v1.SlashNFT nfts = 3 [json_name = "nfts", (.gogoproto.nullable) = false, (.gogoproto.customname) = "NFTs"];</code>
     * @param array<\Decimal\Validator\V1\SlashNFT>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNfts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Decimal\Validator\V1\SlashNFT::class);
        $this->nfts = $arr;

        return $this;
    }

}

