<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/distribution/v1beta1/genesis.proto

namespace Cosmos\Distribution\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GenesisState defines the distribution module's genesis state.
 *
 * Generated from protobuf message <code>cosmos.distribution.v1beta1.GenesisState</code>
 */
class GenesisState extends \Google\Protobuf\Internal\Message
{
    /**
     * params defines all the paramaters of the module.
     *
     * Generated from protobuf field <code>.cosmos.distribution.v1beta1.Params params = 1 [json_name = "params", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"params\""];</code>
     */
    protected $params = null;
    /**
     * fee_pool defines the fee pool at genesis.
     *
     * Generated from protobuf field <code>.cosmos.distribution.v1beta1.FeePool fee_pool = 2 [json_name = "feePool", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"fee_pool\""];</code>
     */
    protected $fee_pool = null;
    /**
     * fee_pool defines the delegator withdraw infos at genesis.
     *
     * Generated from protobuf field <code>repeated .cosmos.distribution.v1beta1.DelegatorWithdrawInfo delegator_withdraw_infos = 3 [json_name = "delegatorWithdrawInfos", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"delegator_withdraw_infos\""];</code>
     */
    private $delegator_withdraw_infos;
    /**
     * fee_pool defines the previous proposer at genesis.
     *
     * Generated from protobuf field <code>string previous_proposer = 4 [json_name = "previousProposer", (.gogoproto.moretags) = "yaml:\"previous_proposer\""];</code>
     */
    protected $previous_proposer = '';
    /**
     * fee_pool defines the outstanding rewards of all validators at genesis.
     *
     * Generated from protobuf field <code>repeated .cosmos.distribution.v1beta1.ValidatorOutstandingRewardsRecord outstanding_rewards = 5 [json_name = "outstandingRewards", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"outstanding_rewards\""];</code>
     */
    private $outstanding_rewards;
    /**
     * fee_pool defines the accumulated commisions of all validators at genesis.
     *
     * Generated from protobuf field <code>repeated .cosmos.distribution.v1beta1.ValidatorAccumulatedCommissionRecord validator_accumulated_commissions = 6 [json_name = "validatorAccumulatedCommissions", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"validator_accumulated_commissions\""];</code>
     */
    private $validator_accumulated_commissions;
    /**
     * fee_pool defines the historical rewards of all validators at genesis.
     *
     * Generated from protobuf field <code>repeated .cosmos.distribution.v1beta1.ValidatorHistoricalRewardsRecord validator_historical_rewards = 7 [json_name = "validatorHistoricalRewards", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"validator_historical_rewards\""];</code>
     */
    private $validator_historical_rewards;
    /**
     * fee_pool defines the current rewards of all validators at genesis.
     *
     * Generated from protobuf field <code>repeated .cosmos.distribution.v1beta1.ValidatorCurrentRewardsRecord validator_current_rewards = 8 [json_name = "validatorCurrentRewards", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"validator_current_rewards\""];</code>
     */
    private $validator_current_rewards;
    /**
     * fee_pool defines the delegator starting infos at genesis.
     *
     * Generated from protobuf field <code>repeated .cosmos.distribution.v1beta1.DelegatorStartingInfoRecord delegator_starting_infos = 9 [json_name = "delegatorStartingInfos", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"delegator_starting_infos\""];</code>
     */
    private $delegator_starting_infos;
    /**
     * fee_pool defines the validator slash events at genesis.
     *
     * Generated from protobuf field <code>repeated .cosmos.distribution.v1beta1.ValidatorSlashEventRecord validator_slash_events = 10 [json_name = "validatorSlashEvents", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"validator_slash_events\""];</code>
     */
    private $validator_slash_events;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cosmos\Distribution\V1beta1\Params $params
     *           params defines all the paramaters of the module.
     *     @type \Cosmos\Distribution\V1beta1\FeePool $fee_pool
     *           fee_pool defines the fee pool at genesis.
     *     @type array<\Cosmos\Distribution\V1beta1\DelegatorWithdrawInfo>|\Google\Protobuf\Internal\RepeatedField $delegator_withdraw_infos
     *           fee_pool defines the delegator withdraw infos at genesis.
     *     @type string $previous_proposer
     *           fee_pool defines the previous proposer at genesis.
     *     @type array<\Cosmos\Distribution\V1beta1\ValidatorOutstandingRewardsRecord>|\Google\Protobuf\Internal\RepeatedField $outstanding_rewards
     *           fee_pool defines the outstanding rewards of all validators at genesis.
     *     @type array<\Cosmos\Distribution\V1beta1\ValidatorAccumulatedCommissionRecord>|\Google\Protobuf\Internal\RepeatedField $validator_accumulated_commissions
     *           fee_pool defines the accumulated commisions of all validators at genesis.
     *     @type array<\Cosmos\Distribution\V1beta1\ValidatorHistoricalRewardsRecord>|\Google\Protobuf\Internal\RepeatedField $validator_historical_rewards
     *           fee_pool defines the historical rewards of all validators at genesis.
     *     @type array<\Cosmos\Distribution\V1beta1\ValidatorCurrentRewardsRecord>|\Google\Protobuf\Internal\RepeatedField $validator_current_rewards
     *           fee_pool defines the current rewards of all validators at genesis.
     *     @type array<\Cosmos\Distribution\V1beta1\DelegatorStartingInfoRecord>|\Google\Protobuf\Internal\RepeatedField $delegator_starting_infos
     *           fee_pool defines the delegator starting infos at genesis.
     *     @type array<\Cosmos\Distribution\V1beta1\ValidatorSlashEventRecord>|\Google\Protobuf\Internal\RepeatedField $validator_slash_events
     *           fee_pool defines the validator slash events at genesis.
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Distribution\V1beta1\GPBMetadata\Genesis::initOnce();
        parent::__construct($data);
    }

    /**
     * params defines all the paramaters of the module.
     *
     * Generated from protobuf field <code>.cosmos.distribution.v1beta1.Params params = 1 [json_name = "params", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"params\""];</code>
     * @return \Cosmos\Distribution\V1beta1\Params|null
     */
    public function getParams()
    {
        return $this->params;
    }

    public function hasParams()
    {
        return isset($this->params);
    }

    public function clearParams()
    {
        unset($this->params);
    }

    /**
     * params defines all the paramaters of the module.
     *
     * Generated from protobuf field <code>.cosmos.distribution.v1beta1.Params params = 1 [json_name = "params", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"params\""];</code>
     * @param \Cosmos\Distribution\V1beta1\Params $var
     * @return $this
     */
    public function setParams($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Distribution\V1beta1\Params::class);
        $this->params = $var;

        return $this;
    }

    /**
     * fee_pool defines the fee pool at genesis.
     *
     * Generated from protobuf field <code>.cosmos.distribution.v1beta1.FeePool fee_pool = 2 [json_name = "feePool", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"fee_pool\""];</code>
     * @return \Cosmos\Distribution\V1beta1\FeePool|null
     */
    public function getFeePool()
    {
        return $this->fee_pool;
    }

    public function hasFeePool()
    {
        return isset($this->fee_pool);
    }

    public function clearFeePool()
    {
        unset($this->fee_pool);
    }

    /**
     * fee_pool defines the fee pool at genesis.
     *
     * Generated from protobuf field <code>.cosmos.distribution.v1beta1.FeePool fee_pool = 2 [json_name = "feePool", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"fee_pool\""];</code>
     * @param \Cosmos\Distribution\V1beta1\FeePool $var
     * @return $this
     */
    public function setFeePool($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Distribution\V1beta1\FeePool::class);
        $this->fee_pool = $var;

        return $this;
    }

    /**
     * fee_pool defines the delegator withdraw infos at genesis.
     *
     * Generated from protobuf field <code>repeated .cosmos.distribution.v1beta1.DelegatorWithdrawInfo delegator_withdraw_infos = 3 [json_name = "delegatorWithdrawInfos", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"delegator_withdraw_infos\""];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDelegatorWithdrawInfos()
    {
        return $this->delegator_withdraw_infos;
    }

    /**
     * fee_pool defines the delegator withdraw infos at genesis.
     *
     * Generated from protobuf field <code>repeated .cosmos.distribution.v1beta1.DelegatorWithdrawInfo delegator_withdraw_infos = 3 [json_name = "delegatorWithdrawInfos", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"delegator_withdraw_infos\""];</code>
     * @param array<\Cosmos\Distribution\V1beta1\DelegatorWithdrawInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDelegatorWithdrawInfos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Distribution\V1beta1\DelegatorWithdrawInfo::class);
        $this->delegator_withdraw_infos = $arr;

        return $this;
    }

    /**
     * fee_pool defines the previous proposer at genesis.
     *
     * Generated from protobuf field <code>string previous_proposer = 4 [json_name = "previousProposer", (.gogoproto.moretags) = "yaml:\"previous_proposer\""];</code>
     * @return string
     */
    public function getPreviousProposer()
    {
        return $this->previous_proposer;
    }

    /**
     * fee_pool defines the previous proposer at genesis.
     *
     * Generated from protobuf field <code>string previous_proposer = 4 [json_name = "previousProposer", (.gogoproto.moretags) = "yaml:\"previous_proposer\""];</code>
     * @param string $var
     * @return $this
     */
    public function setPreviousProposer($var)
    {
        GPBUtil::checkString($var, True);
        $this->previous_proposer = $var;

        return $this;
    }

    /**
     * fee_pool defines the outstanding rewards of all validators at genesis.
     *
     * Generated from protobuf field <code>repeated .cosmos.distribution.v1beta1.ValidatorOutstandingRewardsRecord outstanding_rewards = 5 [json_name = "outstandingRewards", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"outstanding_rewards\""];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOutstandingRewards()
    {
        return $this->outstanding_rewards;
    }

    /**
     * fee_pool defines the outstanding rewards of all validators at genesis.
     *
     * Generated from protobuf field <code>repeated .cosmos.distribution.v1beta1.ValidatorOutstandingRewardsRecord outstanding_rewards = 5 [json_name = "outstandingRewards", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"outstanding_rewards\""];</code>
     * @param array<\Cosmos\Distribution\V1beta1\ValidatorOutstandingRewardsRecord>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOutstandingRewards($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Distribution\V1beta1\ValidatorOutstandingRewardsRecord::class);
        $this->outstanding_rewards = $arr;

        return $this;
    }

    /**
     * fee_pool defines the accumulated commisions of all validators at genesis.
     *
     * Generated from protobuf field <code>repeated .cosmos.distribution.v1beta1.ValidatorAccumulatedCommissionRecord validator_accumulated_commissions = 6 [json_name = "validatorAccumulatedCommissions", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"validator_accumulated_commissions\""];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValidatorAccumulatedCommissions()
    {
        return $this->validator_accumulated_commissions;
    }

    /**
     * fee_pool defines the accumulated commisions of all validators at genesis.
     *
     * Generated from protobuf field <code>repeated .cosmos.distribution.v1beta1.ValidatorAccumulatedCommissionRecord validator_accumulated_commissions = 6 [json_name = "validatorAccumulatedCommissions", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"validator_accumulated_commissions\""];</code>
     * @param array<\Cosmos\Distribution\V1beta1\ValidatorAccumulatedCommissionRecord>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValidatorAccumulatedCommissions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Distribution\V1beta1\ValidatorAccumulatedCommissionRecord::class);
        $this->validator_accumulated_commissions = $arr;

        return $this;
    }

    /**
     * fee_pool defines the historical rewards of all validators at genesis.
     *
     * Generated from protobuf field <code>repeated .cosmos.distribution.v1beta1.ValidatorHistoricalRewardsRecord validator_historical_rewards = 7 [json_name = "validatorHistoricalRewards", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"validator_historical_rewards\""];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValidatorHistoricalRewards()
    {
        return $this->validator_historical_rewards;
    }

    /**
     * fee_pool defines the historical rewards of all validators at genesis.
     *
     * Generated from protobuf field <code>repeated .cosmos.distribution.v1beta1.ValidatorHistoricalRewardsRecord validator_historical_rewards = 7 [json_name = "validatorHistoricalRewards", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"validator_historical_rewards\""];</code>
     * @param array<\Cosmos\Distribution\V1beta1\ValidatorHistoricalRewardsRecord>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValidatorHistoricalRewards($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Distribution\V1beta1\ValidatorHistoricalRewardsRecord::class);
        $this->validator_historical_rewards = $arr;

        return $this;
    }

    /**
     * fee_pool defines the current rewards of all validators at genesis.
     *
     * Generated from protobuf field <code>repeated .cosmos.distribution.v1beta1.ValidatorCurrentRewardsRecord validator_current_rewards = 8 [json_name = "validatorCurrentRewards", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"validator_current_rewards\""];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValidatorCurrentRewards()
    {
        return $this->validator_current_rewards;
    }

    /**
     * fee_pool defines the current rewards of all validators at genesis.
     *
     * Generated from protobuf field <code>repeated .cosmos.distribution.v1beta1.ValidatorCurrentRewardsRecord validator_current_rewards = 8 [json_name = "validatorCurrentRewards", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"validator_current_rewards\""];</code>
     * @param array<\Cosmos\Distribution\V1beta1\ValidatorCurrentRewardsRecord>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValidatorCurrentRewards($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Distribution\V1beta1\ValidatorCurrentRewardsRecord::class);
        $this->validator_current_rewards = $arr;

        return $this;
    }

    /**
     * fee_pool defines the delegator starting infos at genesis.
     *
     * Generated from protobuf field <code>repeated .cosmos.distribution.v1beta1.DelegatorStartingInfoRecord delegator_starting_infos = 9 [json_name = "delegatorStartingInfos", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"delegator_starting_infos\""];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDelegatorStartingInfos()
    {
        return $this->delegator_starting_infos;
    }

    /**
     * fee_pool defines the delegator starting infos at genesis.
     *
     * Generated from protobuf field <code>repeated .cosmos.distribution.v1beta1.DelegatorStartingInfoRecord delegator_starting_infos = 9 [json_name = "delegatorStartingInfos", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"delegator_starting_infos\""];</code>
     * @param array<\Cosmos\Distribution\V1beta1\DelegatorStartingInfoRecord>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDelegatorStartingInfos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Distribution\V1beta1\DelegatorStartingInfoRecord::class);
        $this->delegator_starting_infos = $arr;

        return $this;
    }

    /**
     * fee_pool defines the validator slash events at genesis.
     *
     * Generated from protobuf field <code>repeated .cosmos.distribution.v1beta1.ValidatorSlashEventRecord validator_slash_events = 10 [json_name = "validatorSlashEvents", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"validator_slash_events\""];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValidatorSlashEvents()
    {
        return $this->validator_slash_events;
    }

    /**
     * fee_pool defines the validator slash events at genesis.
     *
     * Generated from protobuf field <code>repeated .cosmos.distribution.v1beta1.ValidatorSlashEventRecord validator_slash_events = 10 [json_name = "validatorSlashEvents", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"validator_slash_events\""];</code>
     * @param array<\Cosmos\Distribution\V1beta1\ValidatorSlashEventRecord>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValidatorSlashEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Distribution\V1beta1\ValidatorSlashEventRecord::class);
        $this->validator_slash_events = $arr;

        return $this;
    }

}

