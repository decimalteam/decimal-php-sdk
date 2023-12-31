<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/legacy/v1/legacy.proto

namespace Decimal\Legacy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Record defines the legacy record containing set of values that should be returned to the actual owner.
 *
 * Generated from protobuf message <code>decimal.legacy.v1.Record</code>
 */
class Record extends \Google\Protobuf\Internal\Message
{
    /**
     * legacy_address defines legacy address which is not valid anymore so cannot be used.
     *
     * Generated from protobuf field <code>string legacy_address = 1 [json_name = "legacyAddress", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $legacy_address = '';
    /**
     * coins defines complete list of tokens to be returned.
     *
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin coins = 2 [json_name = "coins", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.Coins"];</code>
     */
    private $coins;
    /**
     * wallets defines complete list of multisig wallets to be returned.
     *
     * Generated from protobuf field <code>repeated string wallets = 3 [json_name = "wallets"];</code>
     */
    private $wallets;
    /**
     * nfts defines list of token ids to be returned
     *
     * Generated from protobuf field <code>repeated string nfts = 4 [json_name = "nfts", (.gogoproto.customname) = "NFTs"];</code>
     */
    private $nfts;
    /**
     * validators defines complete list of validators with reward address = legacy address.
     *
     * Generated from protobuf field <code>repeated string validators = 5 [json_name = "validators"];</code>
     */
    private $validators;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $legacy_address
     *           legacy_address defines legacy address which is not valid anymore so cannot be used.
     *     @type array<\Cosmos\Base\V1beta1\Coin>|\Google\Protobuf\Internal\RepeatedField $coins
     *           coins defines complete list of tokens to be returned.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $wallets
     *           wallets defines complete list of multisig wallets to be returned.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $nfts
     *           nfts defines list of token ids to be returned
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $validators
     *           validators defines complete list of validators with reward address = legacy address.
     * }
     */
    public function __construct($data = NULL) {
        \Decimal\Legacy\V1\GPBMetadata\Legacy::initOnce();
        parent::__construct($data);
    }

    /**
     * legacy_address defines legacy address which is not valid anymore so cannot be used.
     *
     * Generated from protobuf field <code>string legacy_address = 1 [json_name = "legacyAddress", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getLegacyAddress()
    {
        return $this->legacy_address;
    }

    /**
     * legacy_address defines legacy address which is not valid anymore so cannot be used.
     *
     * Generated from protobuf field <code>string legacy_address = 1 [json_name = "legacyAddress", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setLegacyAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->legacy_address = $var;

        return $this;
    }

    /**
     * coins defines complete list of tokens to be returned.
     *
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin coins = 2 [json_name = "coins", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.Coins"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCoins()
    {
        return $this->coins;
    }

    /**
     * coins defines complete list of tokens to be returned.
     *
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin coins = 2 [json_name = "coins", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.Coins"];</code>
     * @param array<\Cosmos\Base\V1beta1\Coin>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCoins($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Base\V1beta1\Coin::class);
        $this->coins = $arr;

        return $this;
    }

    /**
     * wallets defines complete list of multisig wallets to be returned.
     *
     * Generated from protobuf field <code>repeated string wallets = 3 [json_name = "wallets"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWallets()
    {
        return $this->wallets;
    }

    /**
     * wallets defines complete list of multisig wallets to be returned.
     *
     * Generated from protobuf field <code>repeated string wallets = 3 [json_name = "wallets"];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWallets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->wallets = $arr;

        return $this;
    }

    /**
     * nfts defines list of token ids to be returned
     *
     * Generated from protobuf field <code>repeated string nfts = 4 [json_name = "nfts", (.gogoproto.customname) = "NFTs"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNfts()
    {
        return $this->nfts;
    }

    /**
     * nfts defines list of token ids to be returned
     *
     * Generated from protobuf field <code>repeated string nfts = 4 [json_name = "nfts", (.gogoproto.customname) = "NFTs"];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNfts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->nfts = $arr;

        return $this;
    }

    /**
     * validators defines complete list of validators with reward address = legacy address.
     *
     * Generated from protobuf field <code>repeated string validators = 5 [json_name = "validators"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValidators()
    {
        return $this->validators;
    }

    /**
     * validators defines complete list of validators with reward address = legacy address.
     *
     * Generated from protobuf field <code>repeated string validators = 5 [json_name = "validators"];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValidators($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->validators = $arr;

        return $this;
    }

}

