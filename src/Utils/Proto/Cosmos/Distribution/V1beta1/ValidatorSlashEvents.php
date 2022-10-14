<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/distribution/v1beta1/distribution.proto

namespace Cosmos\Distribution\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ValidatorSlashEvents is a collection of ValidatorSlashEvent messages.
 *
 * Generated from protobuf message <code>cosmos.distribution.v1beta1.ValidatorSlashEvents</code>
 */
class ValidatorSlashEvents extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .cosmos.distribution.v1beta1.ValidatorSlashEvent validator_slash_events = 1 [json_name = "validatorSlashEvents", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"validator_slash_events\""];</code>
     */
    private $validator_slash_events;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Cosmos\Distribution\V1beta1\ValidatorSlashEvent>|\Google\Protobuf\Internal\RepeatedField $validator_slash_events
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Distribution\V1beta1\GPBMetadata\Distribution::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.distribution.v1beta1.ValidatorSlashEvent validator_slash_events = 1 [json_name = "validatorSlashEvents", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"validator_slash_events\""];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValidatorSlashEvents()
    {
        return $this->validator_slash_events;
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.distribution.v1beta1.ValidatorSlashEvent validator_slash_events = 1 [json_name = "validatorSlashEvents", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"validator_slash_events\""];</code>
     * @param array<\Cosmos\Distribution\V1beta1\ValidatorSlashEvent>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValidatorSlashEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Distribution\V1beta1\ValidatorSlashEvent::class);
        $this->validator_slash_events = $arr;

        return $this;
    }

}
