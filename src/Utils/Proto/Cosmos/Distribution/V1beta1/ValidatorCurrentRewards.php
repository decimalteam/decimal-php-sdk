<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/distribution/v1beta1/distribution.proto

namespace Cosmos\Distribution\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ValidatorCurrentRewards represents current rewards and current
 * period for a validator kept as a running counter and incremented
 * each block as long as the validator's tokens remain constant.
 *
 * Generated from protobuf message <code>cosmos.distribution.v1beta1.ValidatorCurrentRewards</code>
 */
class ValidatorCurrentRewards extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.DecCoin rewards = 1 [json_name = "rewards", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.DecCoins"];</code>
     */
    private $rewards;
    /**
     * Generated from protobuf field <code>uint64 period = 2 [json_name = "period"];</code>
     */
    protected $period = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Cosmos\Base\V1beta1\DecCoin>|\Google\Protobuf\Internal\RepeatedField $rewards
     *     @type int|string $period
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Distribution\V1beta1\GPBMetadata\Distribution::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.DecCoin rewards = 1 [json_name = "rewards", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.DecCoins"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRewards()
    {
        return $this->rewards;
    }

    /**
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

    /**
     * Generated from protobuf field <code>uint64 period = 2 [json_name = "period"];</code>
     * @return int|string
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Generated from protobuf field <code>uint64 period = 2 [json_name = "period"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setPeriod($var)
    {
        GPBUtil::checkUint64($var);
        $this->period = $var;

        return $this;
    }

}
