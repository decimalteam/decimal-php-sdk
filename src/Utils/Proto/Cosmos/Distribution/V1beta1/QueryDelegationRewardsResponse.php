<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/distribution/v1beta1/query.proto

namespace Cosmos\Distribution\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryDelegationRewardsResponse is the response type for the
 * Query/DelegationRewards RPC method.
 *
 * Generated from protobuf message <code>cosmos.distribution.v1beta1.QueryDelegationRewardsResponse</code>
 */
class QueryDelegationRewardsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * rewards defines the rewards accrued by a delegation.
     *
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.DecCoin rewards = 1 [json_name = "rewards", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.DecCoins"];</code>
     */
    private $rewards;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Cosmos\Base\V1beta1\DecCoin>|\Google\Protobuf\Internal\RepeatedField $rewards
     *           rewards defines the rewards accrued by a delegation.
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Distribution\V1beta1\GPBMetadata\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * rewards defines the rewards accrued by a delegation.
     *
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.DecCoin rewards = 1 [json_name = "rewards", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.DecCoins"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRewards()
    {
        return $this->rewards;
    }

    /**
     * rewards defines the rewards accrued by a delegation.
     *
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.DecCoin rewards = 1 [json_name = "rewards", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.DecCoins"];</code>
     * @param array<\Cosmos\Base\V1beta1\DecCoin>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRewards($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Base\V1beta1\DecCoin::class);
        $this->rewards = $arr;

        return $this;
    }

}

