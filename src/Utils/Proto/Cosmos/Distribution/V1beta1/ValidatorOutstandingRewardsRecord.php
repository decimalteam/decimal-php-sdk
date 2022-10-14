<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/distribution/v1beta1/genesis.proto

namespace Cosmos\Distribution\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ValidatorOutstandingRewardsRecord is used for import/export via genesis json.
 *
 * Generated from protobuf message <code>cosmos.distribution.v1beta1.ValidatorOutstandingRewardsRecord</code>
 */
class ValidatorOutstandingRewardsRecord extends \Google\Protobuf\Internal\Message
{
    /**
     * validator_address is the address of the validator.
     *
     * Generated from protobuf field <code>string validator_address = 1 [json_name = "validatorAddress", (.gogoproto.moretags) = "yaml:\"validator_address\""];</code>
     */
    protected $validator_address = '';
    /**
     * outstanding_rewards represents the oustanding rewards of a validator.
     *
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.DecCoin outstanding_rewards = 2 [json_name = "outstandingRewards", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"outstanding_rewards\"", (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.DecCoins"];</code>
     */
    private $outstanding_rewards;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $validator_address
     *           validator_address is the address of the validator.
     *     @type array<\Cosmos\Base\V1beta1\DecCoin>|\Google\Protobuf\Internal\RepeatedField $outstanding_rewards
     *           outstanding_rewards represents the oustanding rewards of a validator.
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Distribution\V1beta1\GPBMetadata\Genesis::initOnce();
        parent::__construct($data);
    }

    /**
     * validator_address is the address of the validator.
     *
     * Generated from protobuf field <code>string validator_address = 1 [json_name = "validatorAddress", (.gogoproto.moretags) = "yaml:\"validator_address\""];</code>
     * @return string
     */
    public function getValidatorAddress()
    {
        return $this->validator_address;
    }

    /**
     * validator_address is the address of the validator.
     *
     * Generated from protobuf field <code>string validator_address = 1 [json_name = "validatorAddress", (.gogoproto.moretags) = "yaml:\"validator_address\""];</code>
     * @param string $var
     * @return $this
     */
    public function setValidatorAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->validator_address = $var;

        return $this;
    }

    /**
     * outstanding_rewards represents the oustanding rewards of a validator.
     *
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.DecCoin outstanding_rewards = 2 [json_name = "outstandingRewards", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"outstanding_rewards\"", (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.DecCoins"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOutstandingRewards()
    {
        return $this->outstanding_rewards;
    }

    /**
     * outstanding_rewards represents the oustanding rewards of a validator.
     *
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.DecCoin outstanding_rewards = 2 [json_name = "outstandingRewards", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"outstanding_rewards\"", (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.DecCoins"];</code>
     * @param array<\Cosmos\Base\V1beta1\DecCoin>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOutstandingRewards($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Base\V1beta1\DecCoin::class);
        $this->outstanding_rewards = $arr;

        return $this;
    }

}
