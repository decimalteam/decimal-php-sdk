<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/validator/v1/genesis.proto

namespace Decimal\Validator\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GenesisState defines the module's genesis state.
 *
 * Generated from protobuf message <code>decimal.validator.v1.GenesisState</code>
 */
class GenesisState extends \Google\Protobuf\Internal\Message
{
    /**
     * validators defines the validator set at genesis.
     *
     * Generated from protobuf field <code>repeated .decimal.validator.v1.Validator validators = 1 [json_name = "validators", (.gogoproto.nullable) = false];</code>
     */
    private $validators;
    /**
     * delegations defines the delegations bonded to validators at genesis.
     *
     * Generated from protobuf field <code>repeated .decimal.validator.v1.Delegation delegations = 2 [json_name = "delegations", (.gogoproto.nullable) = false];</code>
     */
    private $delegations;
    /**
     * undelegations defines the undelegations active at genesis.
     *
     * Generated from protobuf field <code>repeated .decimal.validator.v1.Undelegation undelegations = 3 [json_name = "undelegations", (.gogoproto.nullable) = false];</code>
     */
    private $undelegations;
    /**
     * redelegations defines the redelegations active at genesis.
     *
     * Generated from protobuf field <code>repeated .decimal.validator.v1.Redelegation redelegations = 4 [json_name = "redelegations", (.gogoproto.nullable) = false];</code>
     */
    private $redelegations;
    /**
     * last_validator_powers defines a historical list of the last-block's bonded validators.
     *
     * Generated from protobuf field <code>repeated .decimal.validator.v1.LastValidatorPower last_validator_powers = 5 [json_name = "lastValidatorPowers", (.gogoproto.nullable) = false];</code>
     */
    private $last_validator_powers;
    /**
     * last_total_power tracks the total amounts of validators power recorded during the previous end block.
     *
     * Generated from protobuf field <code>int64 last_total_power = 6 [json_name = "lastTotalPower"];</code>
     */
    protected $last_total_power = 0;
    /**
     * params defines all the module's parameters.
     *
     * Generated from protobuf field <code>.decimal.validator.v1.Params params = 7 [json_name = "params", (.gogoproto.nullable) = false];</code>
     */
    protected $params = null;
    /**
     * exported is true if genesis was exported from the state.
     *
     * Generated from protobuf field <code>bool exported = 8 [json_name = "exported"];</code>
     */
    protected $exported = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Decimal\Validator\V1\Validator>|\Google\Protobuf\Internal\RepeatedField $validators
     *           validators defines the validator set at genesis.
     *     @type array<\Decimal\Validator\V1\Delegation>|\Google\Protobuf\Internal\RepeatedField $delegations
     *           delegations defines the delegations bonded to validators at genesis.
     *     @type array<\Decimal\Validator\V1\Undelegation>|\Google\Protobuf\Internal\RepeatedField $undelegations
     *           undelegations defines the undelegations active at genesis.
     *     @type array<\Decimal\Validator\V1\Redelegation>|\Google\Protobuf\Internal\RepeatedField $redelegations
     *           redelegations defines the redelegations active at genesis.
     *     @type array<\Decimal\Validator\V1\LastValidatorPower>|\Google\Protobuf\Internal\RepeatedField $last_validator_powers
     *           last_validator_powers defines a historical list of the last-block's bonded validators.
     *     @type int|string $last_total_power
     *           last_total_power tracks the total amounts of validators power recorded during the previous end block.
     *     @type \Decimal\Validator\V1\Params $params
     *           params defines all the module's parameters.
     *     @type bool $exported
     *           exported is true if genesis was exported from the state.
     * }
     */
    public function __construct($data = NULL) {
        \Decimal\Validator\V1\GPBMetadata\Genesis::initOnce();
        parent::__construct($data);
    }

    /**
     * validators defines the validator set at genesis.
     *
     * Generated from protobuf field <code>repeated .decimal.validator.v1.Validator validators = 1 [json_name = "validators", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValidators()
    {
        return $this->validators;
    }

    /**
     * validators defines the validator set at genesis.
     *
     * Generated from protobuf field <code>repeated .decimal.validator.v1.Validator validators = 1 [json_name = "validators", (.gogoproto.nullable) = false];</code>
     * @param array<\Decimal\Validator\V1\Validator>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValidators($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Decimal\Validator\V1\Validator::class);
        $this->validators = $arr;

        return $this;
    }

    /**
     * delegations defines the delegations bonded to validators at genesis.
     *
     * Generated from protobuf field <code>repeated .decimal.validator.v1.Delegation delegations = 2 [json_name = "delegations", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDelegations()
    {
        return $this->delegations;
    }

    /**
     * delegations defines the delegations bonded to validators at genesis.
     *
     * Generated from protobuf field <code>repeated .decimal.validator.v1.Delegation delegations = 2 [json_name = "delegations", (.gogoproto.nullable) = false];</code>
     * @param array<\Decimal\Validator\V1\Delegation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDelegations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Decimal\Validator\V1\Delegation::class);
        $this->delegations = $arr;

        return $this;
    }

    /**
     * undelegations defines the undelegations active at genesis.
     *
     * Generated from protobuf field <code>repeated .decimal.validator.v1.Undelegation undelegations = 3 [json_name = "undelegations", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUndelegations()
    {
        return $this->undelegations;
    }

    /**
     * undelegations defines the undelegations active at genesis.
     *
     * Generated from protobuf field <code>repeated .decimal.validator.v1.Undelegation undelegations = 3 [json_name = "undelegations", (.gogoproto.nullable) = false];</code>
     * @param array<\Decimal\Validator\V1\Undelegation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUndelegations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Decimal\Validator\V1\Undelegation::class);
        $this->undelegations = $arr;

        return $this;
    }

    /**
     * redelegations defines the redelegations active at genesis.
     *
     * Generated from protobuf field <code>repeated .decimal.validator.v1.Redelegation redelegations = 4 [json_name = "redelegations", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRedelegations()
    {
        return $this->redelegations;
    }

    /**
     * redelegations defines the redelegations active at genesis.
     *
     * Generated from protobuf field <code>repeated .decimal.validator.v1.Redelegation redelegations = 4 [json_name = "redelegations", (.gogoproto.nullable) = false];</code>
     * @param array<\Decimal\Validator\V1\Redelegation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRedelegations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Decimal\Validator\V1\Redelegation::class);
        $this->redelegations = $arr;

        return $this;
    }

    /**
     * last_validator_powers defines a historical list of the last-block's bonded validators.
     *
     * Generated from protobuf field <code>repeated .decimal.validator.v1.LastValidatorPower last_validator_powers = 5 [json_name = "lastValidatorPowers", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLastValidatorPowers()
    {
        return $this->last_validator_powers;
    }

    /**
     * last_validator_powers defines a historical list of the last-block's bonded validators.
     *
     * Generated from protobuf field <code>repeated .decimal.validator.v1.LastValidatorPower last_validator_powers = 5 [json_name = "lastValidatorPowers", (.gogoproto.nullable) = false];</code>
     * @param array<\Decimal\Validator\V1\LastValidatorPower>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLastValidatorPowers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Decimal\Validator\V1\LastValidatorPower::class);
        $this->last_validator_powers = $arr;

        return $this;
    }

    /**
     * last_total_power tracks the total amounts of validators power recorded during the previous end block.
     *
     * Generated from protobuf field <code>int64 last_total_power = 6 [json_name = "lastTotalPower"];</code>
     * @return int|string
     */
    public function getLastTotalPower()
    {
        return $this->last_total_power;
    }

    /**
     * last_total_power tracks the total amounts of validators power recorded during the previous end block.
     *
     * Generated from protobuf field <code>int64 last_total_power = 6 [json_name = "lastTotalPower"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setLastTotalPower($var)
    {
        GPBUtil::checkInt64($var);
        $this->last_total_power = $var;

        return $this;
    }

    /**
     * params defines all the module's parameters.
     *
     * Generated from protobuf field <code>.decimal.validator.v1.Params params = 7 [json_name = "params", (.gogoproto.nullable) = false];</code>
     * @return \Decimal\Validator\V1\Params|null
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
     * params defines all the module's parameters.
     *
     * Generated from protobuf field <code>.decimal.validator.v1.Params params = 7 [json_name = "params", (.gogoproto.nullable) = false];</code>
     * @param \Decimal\Validator\V1\Params $var
     * @return $this
     */
    public function setParams($var)
    {
        GPBUtil::checkMessage($var, \Decimal\Validator\V1\Params::class);
        $this->params = $var;

        return $this;
    }

    /**
     * exported is true if genesis was exported from the state.
     *
     * Generated from protobuf field <code>bool exported = 8 [json_name = "exported"];</code>
     * @return bool
     */
    public function getExported()
    {
        return $this->exported;
    }

    /**
     * exported is true if genesis was exported from the state.
     *
     * Generated from protobuf field <code>bool exported = 8 [json_name = "exported"];</code>
     * @param bool $var
     * @return $this
     */
    public function setExported($var)
    {
        GPBUtil::checkBool($var);
        $this->exported = $var;

        return $this;
    }

}

