<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/coin/v1/coin.proto

namespace Decimal\Coin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Check defines the redeemed check.
 *
 * Generated from protobuf message <code>decimal.coin.v1.Check</code>
 */
class Check extends \Google\Protobuf\Internal\Message
{
    /**
     * chain_id defines the chain ID for which the check was issued.
     *
     * Generated from protobuf field <code>string chain_id = 1 [json_name = "chainId", (.gogoproto.customname) = "ChainID"];</code>
     */
    protected $chain_id = '';
    /**
     * coin defines the coin attached to the check.
     *
     * Generated from protobuf field <code>.cosmos.base.v1beta1.Coin coin = 2 [json_name = "coin", (.gogoproto.nullable) = false];</code>
     */
    protected $coin = null;
    /**
     * nonce defines nonce used for the check.
     *
     * Generated from protobuf field <code>bytes nonce = 3 [json_name = "nonce"];</code>
     */
    protected $nonce = '';
    /**
     * due_block defines block number after which the check becomes expired.
     *
     * Generated from protobuf field <code>uint64 due_block = 4 [json_name = "dueBlock"];</code>
     */
    protected $due_block = 0;
    /**
     * lock defines specific data needed to ensure the check correctness.
     *
     * Generated from protobuf field <code>bytes lock = 5 [json_name = "lock"];</code>
     */
    protected $lock = '';
    /**
     * v defines `v` value of the check signature.
     *
     * Generated from protobuf field <code>string v = 6 [json_name = "v", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "cosmossdk.io/math.Int", (.cosmos_proto.scalar) = "cosmos.Int"];</code>
     */
    protected $v = '';
    /**
     * r defines `r` value of the check signature.
     *
     * Generated from protobuf field <code>string r = 7 [json_name = "r", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "cosmossdk.io/math.Int", (.cosmos_proto.scalar) = "cosmos.Int"];</code>
     */
    protected $r = '';
    /**
     * s defines `s` value of the check signature.
     *
     * Generated from protobuf field <code>string s = 8 [json_name = "s", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "cosmossdk.io/math.Int", (.cosmos_proto.scalar) = "cosmos.Int"];</code>
     */
    protected $s = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $chain_id
     *           chain_id defines the chain ID for which the check was issued.
     *     @type \Cosmos\Base\V1beta1\Coin $coin
     *           coin defines the coin attached to the check.
     *     @type string $nonce
     *           nonce defines nonce used for the check.
     *     @type int|string $due_block
     *           due_block defines block number after which the check becomes expired.
     *     @type string $lock
     *           lock defines specific data needed to ensure the check correctness.
     *     @type string $v
     *           v defines `v` value of the check signature.
     *     @type string $r
     *           r defines `r` value of the check signature.
     *     @type string $s
     *           s defines `s` value of the check signature.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Decimal\Coin\V1\Coin::initOnce();
        parent::__construct($data);
    }

    /**
     * chain_id defines the chain ID for which the check was issued.
     *
     * Generated from protobuf field <code>string chain_id = 1 [json_name = "chainId", (.gogoproto.customname) = "ChainID"];</code>
     * @return string
     */
    public function getChainId()
    {
        return $this->chain_id;
    }

    /**
     * chain_id defines the chain ID for which the check was issued.
     *
     * Generated from protobuf field <code>string chain_id = 1 [json_name = "chainId", (.gogoproto.customname) = "ChainID"];</code>
     * @param string $var
     * @return $this
     */
    public function setChainId($var)
    {
        GPBUtil::checkString($var, True);
        $this->chain_id = $var;

        return $this;
    }

    /**
     * coin defines the coin attached to the check.
     *
     * Generated from protobuf field <code>.cosmos.base.v1beta1.Coin coin = 2 [json_name = "coin", (.gogoproto.nullable) = false];</code>
     * @return \Cosmos\Base\V1beta1\Coin|null
     */
    public function getCoin()
    {
        return $this->coin;
    }

    public function hasCoin()
    {
        return isset($this->coin);
    }

    public function clearCoin()
    {
        unset($this->coin);
    }

    /**
     * coin defines the coin attached to the check.
     *
     * Generated from protobuf field <code>.cosmos.base.v1beta1.Coin coin = 2 [json_name = "coin", (.gogoproto.nullable) = false];</code>
     * @param \Cosmos\Base\V1beta1\Coin $var
     * @return $this
     */
    public function setCoin($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Base\V1beta1\Coin::class);
        $this->coin = $var;

        return $this;
    }

    /**
     * nonce defines nonce used for the check.
     *
     * Generated from protobuf field <code>bytes nonce = 3 [json_name = "nonce"];</code>
     * @return string
     */
    public function getNonce()
    {
        return $this->nonce;
    }

    /**
     * nonce defines nonce used for the check.
     *
     * Generated from protobuf field <code>bytes nonce = 3 [json_name = "nonce"];</code>
     * @param string $var
     * @return $this
     */
    public function setNonce($var)
    {
        GPBUtil::checkString($var, False);
        $this->nonce = $var;

        return $this;
    }

    /**
     * due_block defines block number after which the check becomes expired.
     *
     * Generated from protobuf field <code>uint64 due_block = 4 [json_name = "dueBlock"];</code>
     * @return int|string
     */
    public function getDueBlock()
    {
        return $this->due_block;
    }

    /**
     * due_block defines block number after which the check becomes expired.
     *
     * Generated from protobuf field <code>uint64 due_block = 4 [json_name = "dueBlock"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setDueBlock($var)
    {
        GPBUtil::checkUint64($var);
        $this->due_block = $var;

        return $this;
    }

    /**
     * lock defines specific data needed to ensure the check correctness.
     *
     * Generated from protobuf field <code>bytes lock = 5 [json_name = "lock"];</code>
     * @return string
     */
    public function getLock()
    {
        return $this->lock;
    }

    /**
     * lock defines specific data needed to ensure the check correctness.
     *
     * Generated from protobuf field <code>bytes lock = 5 [json_name = "lock"];</code>
     * @param string $var
     * @return $this
     */
    public function setLock($var)
    {
        GPBUtil::checkString($var, False);
        $this->lock = $var;

        return $this;
    }

    /**
     * v defines `v` value of the check signature.
     *
     * Generated from protobuf field <code>string v = 6 [json_name = "v", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "cosmossdk.io/math.Int", (.cosmos_proto.scalar) = "cosmos.Int"];</code>
     * @return string
     */
    public function getV()
    {
        return $this->v;
    }

    /**
     * v defines `v` value of the check signature.
     *
     * Generated from protobuf field <code>string v = 6 [json_name = "v", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "cosmossdk.io/math.Int", (.cosmos_proto.scalar) = "cosmos.Int"];</code>
     * @param string $var
     * @return $this
     */
    public function setV($var)
    {
        GPBUtil::checkString($var, True);
        $this->v = $var;

        return $this;
    }

    /**
     * r defines `r` value of the check signature.
     *
     * Generated from protobuf field <code>string r = 7 [json_name = "r", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "cosmossdk.io/math.Int", (.cosmos_proto.scalar) = "cosmos.Int"];</code>
     * @return string
     */
    public function getR()
    {
        return $this->r;
    }

    /**
     * r defines `r` value of the check signature.
     *
     * Generated from protobuf field <code>string r = 7 [json_name = "r", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "cosmossdk.io/math.Int", (.cosmos_proto.scalar) = "cosmos.Int"];</code>
     * @param string $var
     * @return $this
     */
    public function setR($var)
    {
        GPBUtil::checkString($var, True);
        $this->r = $var;

        return $this;
    }

    /**
     * s defines `s` value of the check signature.
     *
     * Generated from protobuf field <code>string s = 8 [json_name = "s", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "cosmossdk.io/math.Int", (.cosmos_proto.scalar) = "cosmos.Int"];</code>
     * @return string
     */
    public function getS()
    {
        return $this->s;
    }

    /**
     * s defines `s` value of the check signature.
     *
     * Generated from protobuf field <code>string s = 8 [json_name = "s", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "cosmossdk.io/math.Int", (.cosmos_proto.scalar) = "cosmos.Int"];</code>
     * @param string $var
     * @return $this
     */
    public function setS($var)
    {
        GPBUtil::checkString($var, True);
        $this->s = $var;

        return $this;
    }

}

