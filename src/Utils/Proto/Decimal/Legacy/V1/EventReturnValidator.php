<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/legacy/v1/events.proto

namespace Decimal\Legacy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EventReturnValidator defines event emitted when the validator reward address become actual.
 *
 * Generated from protobuf message <code>decimal.legacy.v1.EventReturnValidator</code>
 */
class EventReturnValidator extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string legacy_owner = 1 [json_name = "legacyOwner", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $legacy_owner = '';
    /**
     * Generated from protobuf field <code>string owner = 2 [json_name = "owner", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $owner = '';
    /**
     * Generated from protobuf field <code>string validator = 3 [json_name = "validator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $validator = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $legacy_owner
     *     @type string $owner
     *     @type string $validator
     * }
     */
    public function __construct($data = NULL) {
        \Decimal\Legacy\V1\GPBMetadata\Events::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string legacy_owner = 1 [json_name = "legacyOwner", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getLegacyOwner()
    {
        return $this->legacy_owner;
    }

    /**
     * Generated from protobuf field <code>string legacy_owner = 1 [json_name = "legacyOwner", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setLegacyOwner($var)
    {
        GPBUtil::checkString($var, True);
        $this->legacy_owner = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string owner = 2 [json_name = "owner", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Generated from protobuf field <code>string owner = 2 [json_name = "owner", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setOwner($var)
    {
        GPBUtil::checkString($var, True);
        $this->owner = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string validator = 3 [json_name = "validator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getValidator()
    {
        return $this->validator;
    }

    /**
     * Generated from protobuf field <code>string validator = 3 [json_name = "validator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setValidator($var)
    {
        GPBUtil::checkString($var, True);
        $this->validator = $var;

        return $this;
    }

}

