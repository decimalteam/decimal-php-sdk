<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/distribution/v1beta1/distribution.proto

namespace Cosmos\Distribution\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FeePool is the global fee pool for distribution.
 *
 * Generated from protobuf message <code>cosmos.distribution.v1beta1.FeePool</code>
 */
class FeePool extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.DecCoin community_pool = 1 [json_name = "communityPool", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"community_pool\"", (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.DecCoins"];</code>
     */
    private $community_pool;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Cosmos\Base\V1beta1\DecCoin>|\Google\Protobuf\Internal\RepeatedField $community_pool
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Distribution\V1beta1\GPBMetadata\Distribution::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.DecCoin community_pool = 1 [json_name = "communityPool", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"community_pool\"", (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.DecCoins"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCommunityPool()
    {
        return $this->community_pool;
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.DecCoin community_pool = 1 [json_name = "communityPool", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"community_pool\"", (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.DecCoins"];</code>
     * @param array<\Cosmos\Base\V1beta1\DecCoin>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCommunityPool($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Base\V1beta1\DecCoin::class);
        $this->community_pool = $arr;

        return $this;
    }

}

