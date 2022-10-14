<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/base/reflection/v2alpha1/reflection.proto

namespace Cosmos\Base\Reflection\V2alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AuthnDescriptor provides information on how to sign transactions without relying
 * on the online RPCs GetTxMetadata and CombineUnsignedTxAndSignatures
 *
 * Generated from protobuf message <code>cosmos.base.reflection.v2alpha1.AuthnDescriptor</code>
 */
class AuthnDescriptor extends \Google\Protobuf\Internal\Message
{
    /**
     * sign_modes defines the supported signature algorithm
     *
     * Generated from protobuf field <code>repeated .cosmos.base.reflection.v2alpha1.SigningModeDescriptor sign_modes = 1 [json_name = "signModes"];</code>
     */
    private $sign_modes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Cosmos\Base\Reflection\V2alpha1\SigningModeDescriptor>|\Google\Protobuf\Internal\RepeatedField $sign_modes
     *           sign_modes defines the supported signature algorithm
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Base\Reflection\V2alpha1\GPBMetadata\Reflection::initOnce();
        parent::__construct($data);
    }

    /**
     * sign_modes defines the supported signature algorithm
     *
     * Generated from protobuf field <code>repeated .cosmos.base.reflection.v2alpha1.SigningModeDescriptor sign_modes = 1 [json_name = "signModes"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSignModes()
    {
        return $this->sign_modes;
    }

    /**
     * sign_modes defines the supported signature algorithm
     *
     * Generated from protobuf field <code>repeated .cosmos.base.reflection.v2alpha1.SigningModeDescriptor sign_modes = 1 [json_name = "signModes"];</code>
     * @param array<\Cosmos\Base\Reflection\V2alpha1\SigningModeDescriptor>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSignModes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Base\Reflection\V2alpha1\SigningModeDescriptor::class);
        $this->sign_modes = $arr;

        return $this;
    }

}

