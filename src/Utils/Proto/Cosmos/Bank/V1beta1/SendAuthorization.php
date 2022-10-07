<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/bank/v1beta1/authz.proto

namespace Cosmos\Bank\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SendAuthorization allows the grantee to spend up to spend_limit coins from
 * the granter's account.
 * Since: cosmos-sdk 0.43
 *
 * Generated from protobuf message <code>cosmos.bank.v1beta1.SendAuthorization</code>
 */
class SendAuthorization extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin spend_limit = 1 [json_name = "spendLimit", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.Coins"];</code>
     */
    private $spend_limit;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cosmos\Base\V1beta1\Coin[]|\Google\Protobuf\Internal\RepeatedField $spend_limit
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Bank\V1Beta1\Authz::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin spend_limit = 1 [json_name = "spendLimit", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.Coins"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpendLimit()
    {
        return $this->spend_limit;
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin spend_limit = 1 [json_name = "spendLimit", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.Coins"];</code>
     * @param \Cosmos\Base\V1beta1\Coin[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpendLimit($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Base\V1beta1\Coin::class);
        $this->spend_limit = $arr;

        return $this;
    }

}

