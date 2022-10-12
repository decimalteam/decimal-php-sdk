<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/evidence/v1beta1/genesis.proto

namespace Cosmos\Evidence\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GenesisState defines the evidence module's genesis state.
 *
 * Generated from protobuf message <code>cosmos.evidence.v1beta1.GenesisState</code>
 */
class GenesisState extends \Google\Protobuf\Internal\Message
{
    /**
     * evidence defines all the evidence at genesis.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any evidence = 1 [json_name = "evidence"];</code>
     */
    private $evidence;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Any[]|\Google\Protobuf\Internal\RepeatedField $evidence
     *           evidence defines all the evidence at genesis.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Evidence\V1Beta1\Genesis::initOnce();
        parent::__construct($data);
    }

    /**
     * evidence defines all the evidence at genesis.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any evidence = 1 [json_name = "evidence"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEvidence()
    {
        return $this->evidence;
    }

    /**
     * evidence defines all the evidence at genesis.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any evidence = 1 [json_name = "evidence"];</code>
     * @param \Google\Protobuf\Any[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEvidence($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Any::class);
        $this->evidence = $arr;

        return $this;
    }

}

