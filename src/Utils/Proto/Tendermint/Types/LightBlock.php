<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/types/types.proto

namespace Tendermint\Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>tendermint.types.LightBlock</code>
 */
class LightBlock extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.tendermint.types.SignedHeader signed_header = 1 [json_name = "signedHeader"];</code>
     */
    protected $signed_header = null;
    /**
     * Generated from protobuf field <code>.tendermint.types.ValidatorSet validator_set = 2 [json_name = "validatorSet"];</code>
     */
    protected $validator_set = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Tendermint\Types\SignedHeader $signed_header
     *     @type \Tendermint\Types\ValidatorSet $validator_set
     * }
     */
    public function __construct($data = NULL) {
        \Tendermint\Types\GPBMetadata\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.tendermint.types.SignedHeader signed_header = 1 [json_name = "signedHeader"];</code>
     * @return \Tendermint\Types\SignedHeader|null
     */
    public function getSignedHeader()
    {
        return $this->signed_header;
    }

    public function hasSignedHeader()
    {
        return isset($this->signed_header);
    }

    public function clearSignedHeader()
    {
        unset($this->signed_header);
    }

    /**
     * Generated from protobuf field <code>.tendermint.types.SignedHeader signed_header = 1 [json_name = "signedHeader"];</code>
     * @param \Tendermint\Types\SignedHeader $var
     * @return $this
     */
    public function setSignedHeader($var)
    {
        GPBUtil::checkMessage($var, \Tendermint\Types\SignedHeader::class);
        $this->signed_header = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.tendermint.types.ValidatorSet validator_set = 2 [json_name = "validatorSet"];</code>
     * @return \Tendermint\Types\ValidatorSet|null
     */
    public function getValidatorSet()
    {
        return $this->validator_set;
    }

    public function hasValidatorSet()
    {
        return isset($this->validator_set);
    }

    public function clearValidatorSet()
    {
        unset($this->validator_set);
    }

    /**
     * Generated from protobuf field <code>.tendermint.types.ValidatorSet validator_set = 2 [json_name = "validatorSet"];</code>
     * @param \Tendermint\Types\ValidatorSet $var
     * @return $this
     */
    public function setValidatorSet($var)
    {
        GPBUtil::checkMessage($var, \Tendermint\Types\ValidatorSet::class);
        $this->validator_set = $var;

        return $this;
    }

}
