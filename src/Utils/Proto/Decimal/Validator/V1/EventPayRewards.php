<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/validator/v1/events.proto

namespace Decimal\Validator\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EventPayRewards defines event emitted when all accumulated commissions are payed as rewards.
 *
 * Generated from protobuf message <code>decimal.validator.v1.EventPayRewards</code>
 */
class EventPayRewards extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .decimal.validator.v1.ValidatorReward validators = 1 [json_name = "validators", (.gogoproto.nullable) = false];</code>
     */
    private $validators;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Decimal\Validator\V1\ValidatorReward>|\Google\Protobuf\Internal\RepeatedField $validators
     * }
     */
    public function __construct($data = NULL) {
        \Decimal\Validator\V1\GPBMetadata\Events::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .decimal.validator.v1.ValidatorReward validators = 1 [json_name = "validators", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValidators()
    {
        return $this->validators;
    }

    /**
     * Generated from protobuf field <code>repeated .decimal.validator.v1.ValidatorReward validators = 1 [json_name = "validators", (.gogoproto.nullable) = false];</code>
     * @param array<\Decimal\Validator\V1\ValidatorReward>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValidators($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Decimal\Validator\V1\ValidatorReward::class);
        $this->validators = $arr;

        return $this;
    }

}

